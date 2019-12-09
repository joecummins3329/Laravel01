@extends('layout')


@section('title','Experience')


@section('content')

    <h1>Your Experience</h1>
            
    <ul>
        
       @foreach ($experiences as $experience)
            
            <h4>Highschool</h4>
            
            <li>
                 <a "/experience/{{ $experience->id }}"> 
                    {{ $experience-> high_school }}
                 </a>   
            </li>
            
            <h4>College</h4>
            
            <li>
                 <a "/experience/{{ $experience->id }}"> 
                    {{ $experience-> sixth_form_college }}
                 </a>   
            </li>
            
            <h4>University</h4>
            
            <li>
                 <a "/experience/{{ $experience->id }}"> 
                    {{ $experience-> university }}
                 </a>   
            </li>
        
            <h4>National League</h4>
            
            <li>
                 <a "/experience/{{ $experience->id }}"> 
                    {{ $experience-> national_league }}
                 </a>   
            </li>
            
            <h4>Other</h4>
            
            <li>
                 <a "/experience/{{ $experience->id }}"> 
                    {{ $experience-> other }}
                 </a>   
            </li>
        
        @endforeach
       
    </ul>
    
    @endsection