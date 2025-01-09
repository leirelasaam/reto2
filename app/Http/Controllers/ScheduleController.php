<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Paginar, para no mostrar todos de golpe
        $schedules = Schedule::orderBy('hour', 'asc')->paginate(10);
        return view('admin.schedules.index',['schedules' => $schedules]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $schedules = Schedule::orderBy('user_id')->get();
        return view('admin.schedules.create-edit', ['schedules'=>$schedules]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        // Crear el horario
        $schedules = new Schedule();
        $schedules->user_id = $request->user_id;
        $schedules->module_id = $request->module_id;
        $schedules->day = $request->day;
        $schedules->hour = $request->hour;

        //dd($request);
        // Guardar el nuevo horario
        $schedules->save();

        return redirect()->route('admin.schedules.index')->with('success', 'Horario  ' . $schedules->day . ' creado correctamente.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(schedules $schedules)
    {
        return view('admin.schedules.show',['schedules'=>$schedule]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(schedules $schedules)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, schedules $schedules)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(schedules $schedules)
    {
        $user_id = $schedule->user_id; 
        $schedule->delete(); 
        return view('admin.schedules.success', ['user_id'=>$user_id]); 
    }
}