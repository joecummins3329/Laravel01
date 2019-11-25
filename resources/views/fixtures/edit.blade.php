@extends('layout')

@section('title','Fixtures')

@section('content')

    <h1>Edit Fixture</h1>
    
    <form method="POST" action="/fixtures/{{ $fixture->id }}" style="margin-bottom: 0.5em">
    
        {{ method_field('PATCH')}}
        
        {{ csrf_field() }}
        
        <div class ="field">
            
            <label class="label" for="title">Title</label>

            <div class="control">
            
                <input type="text" class="input" name="title" placeholder="Title" value="{{ $fixture->title }}">
                
            </div>
            
        </div>
        
        
        
        <div class ="field">
            
            <label class="label" for="description">Description</label>

            <div class="control">
            
                <textarea name="description" class="textarea">{{ $fixture->description}}</textarea>
                
            </div>
            
        </div>
        
        
        
        <div class="field">
        
            <div class="control">
            
                <button type="submit" class="button is-link">Update Fixture</button>

            </div>
            
        </div>
        
    </form>
    
    
    
    <form method="POST" action="/fixtures/{{ $fixture->id }}">
    
        {{ method_field('DELETE')}}
        
        {{csrf_field() }}
        
    
        <div class="field">
        
            <div class="control">
            
                <button type="submit" class="button">Delete Fixture</button>

            </div>
            
        </div>
        
    </form>
    
    
    
    
@endsection