@extends('/projects/layout')

@section('content')
    <h1 class="title">Editing..</h1>
    
    <form method="POST" action='/projects/{{$project->id}}'>
    {{ method_field('PATCH')}}

    {{csrf_field()}}

    <div class="field">
    <label class="label" for="title">Name</label>

        <div class="control">
            <input type="text" class="input {{ $errors->has('name') ? 'is-danger' : ''}}" name="name" placeholder="Name" value="{{ $project->desc}}">

        </div>
    </div>
    
    <div class="field">
    <label class="label" for="title">Contact</label>

        <div class="control">
            <input type="text" class="input {{ $errors->has('number') ? 'is-danger' : ''}}" name="number" placeholder="Number" value="{{ $project->number}}">

        </div>
    </div>

    <div class="field">
    <label class="label" for="description">Created at</label>

        <div class="control">
            <input type="text" class="input" name="created" placeholder="Created At" value="{{$project->created_at}}">

        </div>

        <div class="field">
        <div class="control">
            <button type="submit" class="button is->link">Update</button>

        </div>
</div>
</form>

<form method="POST" action='/projects/{{$project->id}}'>
{{ method_field('DELETE')}}

{{csrf_field()}}

<div class="field">
        <div class="control">
            <button type="submit" class="button is->link">Delete!</button>

        </div>
</div>
@if ($errors->any())
    @include('/projects/errors')
@endif
</form>
  

@endsection


