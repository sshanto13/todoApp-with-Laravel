{!! Form::open(['route' => 'task.store', 'method' => 'POST'])!!}

    {{Form::label('name', 'Name of Task', ['class' => 'control-label']) }}
    {{Form::text('name', null, ['class' => 'form-control shadow' , 'placeholder' => 'Task Name ' ])  }}

    {{Form::label('description', 'Description of Task', ['class' => 'control-label mt-3']) }}
    {{Form::textarea('description', null, ['class' => 'form-control shadow' , 'placeholder' => 'Task Description' ])  }}
    
    {{Form::label('due_date', 'Due Date', ['class' => 'control-label mt-3']) }}
    {{Form::date('due_date', null, ['class' =>'form-control shadow']) }}

    <div class="row">
        <div class="col-sm-12">
            <div class="d-flex">
               <div class="flex-grow-1"> <a href="{{ route('task.index')}}" class="btn btn-block btn-primary mt-3"><i class="fas fa-chevron-circle-left"></i> Back tasklist</a></div>
                <div class="float-right"><button class="btn btn-block btn-success mt-3 " type="submit"><i class="fas fa-save mr-1"></i>  Save task</button></div>
            </div>
        </div>
    </div>
{!! Form::close() !!}