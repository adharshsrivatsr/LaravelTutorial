@extends('layout')

@section('title')
    Laravel
@endsection

@section('content')
    
    {!!$foo!!}
    
    <h1>Hey there!! This is {{$name}}.</h1>
    
    <ul>
    @foreach ($tasks as $task)
            <li><?= $task ?></li>
    @endforeach
    </ul>

@endsection
