@extends('layout')


@section('title','New Fixture')


@section('content')

    <h1>New Fixture</h1>

    <form method="POST" action="/fixtures">
    
        {{ csrf_field() }}
    
        <div>
            <input type="text" name="title" placeholder="Fixture title" value="{{ old('title') }}"required>
        </div>
        
        
        <div>
            <textarea name="description" placeholder="Fixture description" value="{{ old('description') }}" required></textarea>
        </div>
        
        
        <div>
            <button type="submit">Create Fixture</button>
        </div>
        
        @include ('errors')
        
    </form>

@endsection