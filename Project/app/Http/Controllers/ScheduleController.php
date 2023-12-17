<?php

namespace App\Http\Controllers;

use App\Models\scheduleM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedule = ScheduleM::all();
        $user1 = DB::table('users')->join('users', 'class_schedule.idTeacher', '=', 'users.name')->select('users.*', 'users.name as username')->get();
        return view("main.schedule",compact('schedule','user1'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'schedule' => 'required|unique:class_schedule,schedule',
        ],[
            'schedule.required'=> 'Chưa có tên lịch',
            'schedule.unique'=> 'Tên lịch bị trùng',
        ]);
        if ($validator->fails()) {
            return response()->json(['check'=>false,'msg'=>$validator->errors()]);
        }
        $data = [
            'schedule' => $request->schedule,
            'idTeacher' => $request->username,
        ];
        scheduleM::create($data);
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
    public function show(scheduleM $scheduleM)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(scheduleM $scheduleM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, scheduleM $scheduleM)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(scheduleM $scheduleM)
    {
        //
    }
}
