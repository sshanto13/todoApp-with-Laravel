@extends('layouts.main')
@section('title', 'Create Task')
@section('content')
    
            <h4>Edit task</h4>
            {!! Form::model($task, ['route' => ['task.update', $task->id], 'method' => 'PUT']) !!}
            @component('components.taskForm')
            @endcomponent
            {!! Form::close() !!}

            
     
@endsection
