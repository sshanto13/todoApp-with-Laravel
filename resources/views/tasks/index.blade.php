@extends('layouts.main')
@section('title', 'Home Page')
@section('content')
   
             
            <div class="d-flex mb-3">
                <h4 class="flex-grow-1">{{ isset ($title) ? $title : 'Dhaka no title'}}</h4>
                
             <a href="{{ route('task.create')}}" class="btn btn-sm btn-primary flex-grow-1 add-task"><i class="fas fa-plus-circle"></i></a>
           
            </div>
          
            <ul class="list-group">
             @foreach ($tasks as $task)
             <li class="list-group-item mb-2 shadow-sm">
                 <div class="d-flex">
                    <h6 class=" flex-grow-1"> <i class="fas fa-check-square"></i> {{$task->name}}  </h6>
                    <h6 class="flex-grow-1 text-right "><i class="far fa-clock flex-grow-1"></i> <small>{{$task->created_at}}</small></h6>
                  
                 </div>

                    <p><small> <strong> </strong> </small>{{$task->description}}</p>

                    <div class="d-flex">
                        <p class="flex-grow-1 date"> <i class="far fa-calendar-check"></i>  <small>{{$task->due_date}}</small><p>
                        <div class="d-flex text-right">
                            <a href="{{ route('task.edit', $task->id)}}" class="btn btn-sm btn-primary bg-transparent"><i class="fas fa-edit"></i> Edit</a>
                             

                            {!! Form::model($task, ['route' => ['task.destroy', $task->id], 'method' => 'DELETE']) !!}

                            <button type="submit" class="btn btn-sm btn-danger ml-2 bg-transparent">
                                <i class="far fa-trash-alt"></i> Delete
                              </button>

                            {!! Form::close() !!}
                         </div>
                       
                            
                    </div>
                </li>
                    

             @endforeach
            </ul>
            <div class="row justify-content-center">
                <div class="col-sm-12 text-center">

                    {{$tasks->links()}}
                 </div>
            </div>
      
@endsection
