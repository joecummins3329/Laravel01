@extends('layout')

@section('title','Welcome')

@section('content')
 
 
    @if (session('message'))
   
    <p>{{ session('message') }}</p>
     
    @endif
     
    <h1>Leeds Beckett Basketball 2019/2020</h1>
    
    <p>Please sign-up by clicking register then log in in order to save fixtures/team lists/scores.</p>
     

@endsection