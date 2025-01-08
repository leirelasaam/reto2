<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $assignments = Assignment::orderBy('id', 'asc')->paginate(10);
        return view('admin.assignments.index',['assignments' => $assignments]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.assignments.create-edit', ['type'=>'POST']);
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
    public function show(Assignment $assignment)
    {
        return view('admin.assignments.show',['assignment'=>$assignment]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Assignment $assignment)
    {
        return view('admin.assignments.create-edit', ['assignment'=>$assignment, 'type'=>'PUT']);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Assignment $assignment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Assignment $assignment)
    {
        //
    }
}