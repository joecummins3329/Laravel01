
@extends('layout')


@section('title','Fixtures')


@section('content')


    <h1 class="title">Fixtures</h1>
            
    <ul>
        
        @foreach ($fixtures as $fixture)    
                
            <li>
                
                <a href="/fixtures/{{ $fixture->id }}">
                    
                    {{ $fixture->title }}
                        
                </a>
                    
            </li>
        
        @endforeach
        
    </ul>

    <a href="/fixtures/create">New Fixture</a>
    
    
        
  

@endsection