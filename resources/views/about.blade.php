@extends('layout')

@section('title','About')

@section('content')

    <h1>About</h1>
    
     <ul>
    
    @foreach($tasks as $task)
    
        <li>{{ $task }}</li>
        
    @endforeach
    
    </ul>
    

@endsection