<?php

namespace App\Http\Controllers;

use App\Models\CourseCateModel;
use App\Models\EducateM;
use App\Models\UserRoleModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class EducateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $edu = EducateM::all();
        return view("main.education"
        ,compact('edu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(request $request)
    {
        $validator = Validator::make($request->all(), [
            'Eduname' => 'required|unique:edu_tbl,name',
        ],[
            'Eduname.required'=> 'Chưa nhận được tên loại hình giáo dục',
            'Eduname.unique'=> 'Tên loại hình giáo dục bị trùng',
        ]);
        if ($validator->fails()) {
            return response()->json(['check'=>false,'msg' => $validator->errors()]);
        }
    
        EducateM::create(['name' => $request->Eduname]);
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
    public function show(EducateM $edu)
    {
        $edu = EducateM::all();
        return view("main.education"
        ,compact('edu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EducateM $educateM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EducateM $educateM)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EducateM $educateM)
    {
        //
    }

    /**
     * Get the user associated with the EducateController
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    
}
