<?php

namespace App\Http\Controllers;

use App\Models\CourseCateModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\EducateM;
use App\Models\UserRoleModel;
use Illuminate\Support\Facades\Validator;


class CourseCateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $edu = EducateM::where('status', 1)->get();
        $courseCate = DB::table('course_cates')->join('edu_tbl','course_cates.idEdu','=','edu_tbl.id')->select('course_cates.*','edu_tbl.name as eduname')->get();
        return view("main.CourseCate",compact('courseCate','edu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(request $request)
    {
        $validator = Validator::make($request->all(), [
            'CCname' => 'required|unique:course_cates,name',
            'idEdu' => 'required|exists:edu_tbl,id',
        ],[
            'CCname.required'=> 'Chưa nhận được tên loại hình thức giảng dạy',
            'CCname.unique'=> 'Tên loại hình thức giảng dạy bị trùng',
            'idEdu.required'=> 'Thiếu mã Loại',
            'idEdu.exists'=> 'Mã loại không tồn tại',
        ]);

        if ($validator->fails()) {
            return response()->json(['check'=>false,'msg' => $validator->errors()]);
        }
        $data = [
            'name' => $request->CCname,
            'idEdu' => $request->idEdu,
        ];
        CourseCateModel::create($data);
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
    public function show(CourseCateModel $courseCateModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, CourseCateModel $courseCateModel)
    {
        $validator = Validator::make($request->all(),[
            'id'=> 'required|numeric|exists:course_cates,id',
            'CCname'=> 'required|unique:course_cates,name',
        ], [
            'id.required'=> 'Chưa có mã hình thức giảng dạy ',
            'id.exists'=> 'id không tồn tại',
            'CCname.required'=> 'Chưa có tên hình thức giảng dạy',
            'CCname.unique'=>'Tên loại hình thức giảng dạy bị trùng'
        ]);
        if ($validator->fails()) {
            return response()->json(['check'=>false,'msg'=>$validator->errors()]);
    }
    CourseCateModel::where('id',$request->id)->update(['name'=>$request->CCname,'updated_at'=>now()]);
    return response()->json(['check'=>true]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CourseCateModel $courseCateModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseCateModel $courseCateModel)
    {
        //
    }
}
