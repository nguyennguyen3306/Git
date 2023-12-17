<?php

namespace App\Http\Controllers;

use App\Models\UserRoleModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class UserRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $role = UserRoleModel::all();
        return view("main.role",compact('role'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(request $request)
    {
         $validator = Validator::make($request->all(), [
            'rolename' => 'required|unique:role_tbl,name',
            
        ],[
            'rolename.required'=> 'Chưa có tên loại',
            'rolename.unique'=> 'Tên loại bị trùng',
        ]);
        if ($validator->fails()) {
            return response()->json(['check'=>false,'msg'=>$validator->errors()]);
        }
        UserRoleModel::create(['name'=> $request->rolename]);
        return response()->json(['check'=>true]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserRoleModel $userRoleModel)
    {
        //
    }   
    public function switchRole(Request $request, UserRoleModel $userRoleModel)
    {

        $validator = Validator::make($request->all(), [
            'id'=> 'required|numeric|exists:role_tbl,id',
            'status'=> 'required|numeric|min:0|max:1',

            
        ],[
            'id.required'=> 'Chưa có ID',
            'id.exists'=> 'Mã loại không tồn tại',
            'status.min'=>'Mã trạng thái không hợp lệ',
            'status.max'=>'Mã trạng thái không hợp lệ',
            'status.required'=>'Thiếu mã trạng thái ',
            'status.numberic'=> 'Mã trạng thái không hợp lệ',

        ]);
        if ($validator->fails()) {
            return response()->json(['check'=>false,'msg'=>$validator->errors()]);
        }
        UserRoleModel::where('id', $request->id) ->update(['status'=>$request->status,'updated_at'=>now()]);
        return response()->json(['check'=>true]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,UserRoleModel $userRoleModel)
    {
        $validator = Validator::make($request->all(),[
            'id'=> 'required|numeric|exists:role_tbl,id',
            'rolename'=> 'required|unique:role_tbl,name',
        ], [
            'id.required'=> 'Chưa có mã loại tài khoản',
            'id.exists'=> 'id đã tồn tại',
            'rolename.required'=> 'Chưa có tên loại',
            'rolename.unique'=>'Tên loại bị trùng'
        ]);
        if ($validator->fails()) {
            return response()->json(['check'=>false,'msg'=>$validator->errors()]);
    }
    UserRoleModel::where('id',$request->id)->update(['name'=>$request->rolename,'updated_at'=>now()]);
    return response()->json(['check'=>true]);
    
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserRoleModel $userRoleModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, UserRoleModel $userRoleModel)
    {
        $validator = Validator::make($request->all(),[
            'id'=> 'required|numeric|exists:role_tbl,id',
        ], [
            'id.required'=> 'Mã loại tài khoản sai',
            'id.exists'=> 'id không tồn tại',
        ]);
        if ($validator->fails()) {
            return response()->json(['check'=>false,'msg'=>$validator->errors()]);
    }
    UserRoleModel::where('id',$request->id)->delete();
    return response()->json(['check'=>true]);
    
    }
}
