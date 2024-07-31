<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserTask;

class UserTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user_task');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([
            'task_name'     => 'required',
            'status'        => 'required',
            'description'   => 'required',
            'deadline'      => 'required|date',
        ]);
        $user_task = new UserTask();
        $user_task->task_name = $request['task_name'];
        $user_task->status = $request['status'];
        $user_task->description = $request['description'];
        $user_task->deadline = $request['deadline'];
        $user_task->save();
        return back()->with('success', 'Data saved successfully!.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
