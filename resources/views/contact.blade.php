@extends('layout')

@section('title')
    Contact Page
@endsection

@section('content')
    <h2>Contact {{ $name }} for further information at 111-111-1111</h2>
  
    @foreach($numbers as $no)
       <li> {{$no}}</li>
    @endforeach

@endsection

