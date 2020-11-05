<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = null;
        
        if (\Auth::check()) {
            $tasks = \Auth::user()->tasks()->paginate(10);
        }
        
        return view('tasks.index', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empty_task = new Task;
        
        return view('tasks.create', ['task' => $empty_task]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (\Auth::check()) {
            
            $request->validate([
                'status' => 'required | max:10',
                'content' => 'required | max:255'
            ]);
            
            $new_task = new Task;
            $new_task->status = $request->status;
            $new_task->content = $request->content;
            $new_task->user_id = \Auth::id();
            $new_task->save();
            
        }
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $target_task = Task::findOrFail($id);
        
        if (\Auth::id() === $target_task->user_id) {
            return view('tasks.show', ['task' => $target_task]);
        } else {
            return redirect('/');
        }
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $target_task = Task::findOrFail($id);
        
        if (\Auth::id() === $target_task->user_id) {
            return view('tasks.edit', ['task' => $target_task]);
        } else {
            return redirect('/');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required | max:10',
            'content' => 'required | max:255'
        ]);
        
        $target_task = Task::findOrFail($id);
        
        if (\Auth::id() === $target_task->user_id) {
            $target_task->status = $request->status;
            $target_task->content = $request->content;
            $target_task->save();
        }
        
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $target_task = Task::findOrFail($id);
        
        if (\Auth::id() === $target_task->user_id) {
            $target_task->delete();
        }
        
        return redirect('/');
    }
}
