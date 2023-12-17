<?php

namespace App\Http\Controllers;

use App\Models\processM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedule = processM::all();
        // $user = DB::table('class_schedule')->join('users', 'class_schedule.idTeacher', '=', 'users.id')->select('users.*', 'users.name as username')->get();
        return view("main.schedule",compact('schedule','user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(processM $processM)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(processM $processM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, processM $processM)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(processM $processM)
    {
        //
    }
}
