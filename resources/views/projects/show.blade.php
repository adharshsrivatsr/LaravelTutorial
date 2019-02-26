@extends('/projects/layout')

@section('title')
Display
@endsection


@section('content')
     <h1 class="title">{{ $project->desc }} </h1>
    <h2>Contact : {{ $project->number}} </h2>
    <h2>Created at {{$project->created_at}}.</h2>

    <a href='/projects/{{ $project->id }}/edit'>Edit</a>


    @if ($project->tasks->count())
        <div class='box'>
        @foreach ($project->tasks as $task)
           <div>
                <form method="POST" action='/tasks/{{$task->id}}'>
                    @method('PATCH')
                    @csrf
                    
                    <label class='checkbox {{$task->completed? 'is-complete' : ''}}' for='completed'>
                        <input type='checkbox' name='completed' onChange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
                                {{ $task -> task }} 
                    </label>
                </form>
            </div>  
        @endforeach
         </div>
    @endif
    

    <form method="POST" action="/projects/{{ $project->id }}/tasks" class='box'>
        @csrf

        <div class='field'>
            <label class='label' for='task'>New Task </label>

            <div class='control'>
                <input type='text' class='input' name='task' placeholder="New Task" required>
            </div>
        </div>

        <div class ='field'>
            <div class='control'>
                <button type='submit' class='button is-link'>Add Task</button>
            </div>
        </div>  

    </form>
    @if ($errors->any())
        @include('/projects/errors')
    @endif
@endsection
    