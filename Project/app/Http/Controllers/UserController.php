<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserRoleModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\processM;
use App\Models\scheduleM;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $role = UserRoleModel::where('status', 1)->get();
        $user = DB::table('users')->join('role_tbl', 'users.idRole', '=', 'role_tbl.id')->select('users.*', 'role_tbl.name as rolename')->get();
        return view("main.user", compact("role", "user"));
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required',

        ], [
            'email.required' => 'Tài khoản không tồn tại ',
            'email.email' => 'Sai định dạng email',
            'email.exists' => 'Email chưa đăng ký',

        ]);
        if ($validator->fails()) {
            return response()->json(['check' => false, 'msg' => $validator->errors()]);
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'status' => 1], true)) {
            return response()->json(['check' => true]);
            
        } else {
            return response()->json(['check' => false, 'msg' => 'Sai email hoặc mật khẩu']);
        }

    }
    /**
     * Show the form for creating a new resource.
     */
    public function logout()
    {
        if (Auth::check()) {

            Auth::logout();
        }
        return redirect('/');


    }
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required:users,name',
            'email' => 'required|email|unique:users,email',
            'idRole' => 'required|exists:role_tbl,id',

        ], [
            'name.required' => 'Chưa có Tên',
            'email.required' => 'Thiếu email ',
            'email.email' => 'Sai định dạng email',
            'email.unique' => 'Email đã tồn tại',
            'idRole.required' => 'Thiếu mã loại ',
            'idRole.exists' => 'Mã loại không tồn tại',

        ]);
        if ($validator->fails()) {
            return response()->json(['check' => false, 'msg' => $validator->errors()]);
        }
        $number = random_int(10000, 999999);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'idRole' => $request->idRole,
            'password' => Hash::make($number),
        ];
        $mailData = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $number,
        ];
        User::create($data);
        Mail::to($request->email)->send(new UserMail($mailData));
        return response()->json(['check' => true]);
    }

    /**
     * Store a newly created resource in storage.
     */

    public function checklogin(Request $request, )
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
        ], [
            'email.required' => 'Email không tồn tại ',
            'email.email' => 'Sai định dạng email',
            'email.exists' => 'Email chưa đăng ký',

        ]);
        if ($validator->fails()) {
            return response()->json(['check' => false, 'msg' => $validator->errors()]);
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'status' => 1], true)) {
            return response()->json(['check' => true, 'token' => Auth::user()->remember_token]);
        } else {
            return response()->json(['check' => false, 'msg' => 'Sai email hoặc mật khẩu']);
        }
        ;
    }
    public function store(Request $request)
    {
        $user = User::where('status', 1)->get();
        return response()->json($user);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteUser(Request $request, User $user)
    {
        $validator = Validator::make(
            $request->all(), [
            'id' => 'required|exists:users,id',
        ], [
            'id.required' => 'Chưa có mã tài khoản để xóa ',
            'id.exists' => 'Mã tài khoản không tồn tại',

        ],);
        if ($validator->fails()) {
            return response()->json(['check' => false, 'msg' => $validator->errors()]);
        }
        $check1=processM::where('idTeacher', $request->id)->count('id');
        $check2=scheduleM::where('idTeacher', $request->id)->count('id');
        if ($check1 != 0 || $check2 != 0) {
            return response()->json(['check' => false, 'msg' => 'Tồn tại lịch dạy hoặc lớp trùng với loại tài khoản']);
        }
        User::where('id', $request->id)->delete();
        return response()->json(['check'=> true]);
    }
}
