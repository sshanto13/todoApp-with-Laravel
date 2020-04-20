<?php

namespace App\Http\Controllers;


use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Traits\TimestampsTrait;


class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = "My todo List";

        $data['tasks'] = Task::orderBy('due_date', 'desc')->paginate(4);
        return view('tasks.index', $data); 
       
       // $tasks = Task::orderBy('due_date', 'desc')->paginate(5);
       // return view('tasks.index')->with('tasks', $tasks);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //validate the data
        $this->validate($request, [
        'name' => 'required|string|max:30|min:3',
        'description' =>'required|max:80|min:2',
        'due_date'=>'required|date',
        ]);


       //create new task

       $task = new Task;

       //assign new Task from our request

       $task->name        = $request->name;
       $task->description = $request->description;
       $task->due_date        = $request->due_date;

       //save the task

       $task->save();

       //flash session message with success

       Session::flash('success', 'Created Task Successfully');

       //Return a redirect

       return redirect()->route('task.create');

       
      }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the task

       $task = Task::findOrFail($id);
       $task->dueDateFormatting = false;
        return view('tasks.edit')->withTask($task); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       //validate the data
       $this->validate($request, [
        'name' => 'required|string|max:30|min:3',
        'description' =>'required|max:80|min:2',
        'due_date'=>'required|date',
        ]);


       //Find related task

       $task = Task::find($id);

       //assign new Task from our request

       $task->name        = $request->name;
       $task->description = $request->description;
       $task->due_date        = $request->due_date;

       //save the task

       $task->save();

       //flash session message with success

       Session::flash('success', 'Updated Task Successfully');

       //Return a redirect

       return redirect()->route('task.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //destroy using ID

        $task = Task::find($id);

        $task->delete();

        //flash session message with success

       Session::flash('success', 'Deleted Task Successfully');

       //Return a redirect

       return redirect()->route('task.index');

    }
}
