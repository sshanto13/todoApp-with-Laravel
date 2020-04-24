@extends('layouts.main')
@section('title', 'Create Task')
@section('content')
@extends('layouts.nav')
            <h4>Add Task Here</h4>

            @component('components.taskForm')
                
            @endcomponent

      
@endsection
