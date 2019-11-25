@extends('layout')


@section('content')

    <h1>{{ $fixture->title }}</h1>
    
    <div>{{ $fixture->description }}</div>
    
    <p>
    
        <a href="/fixtures/{{ $fixture->id }}/edit">Edit</a>
        
    </p>
    
    
    
    
    @if ($fixture->players->count())
    
        <div>
        
            <h1>Team List</h1>
        
            @foreach ($fixture->players as $player)
            
                <div>
                
                    <form method="POST" action="/players/{{ $player->id }}">
                    
                        {{ method_field('PATCH')}}
                        
                        {{ csrf_field() }}
                    
                        <label for"available">
                        
                            <input type="checkbox" name="available" onChange="this.form.submit()" {{ $player->available ? 'checked' : ""}}>
                        
                            {{ $player->playerName }}
                        
                        </label>
                    
                    </form>
                    
                    
                
                </div>
                
            @endforeach
            
        </div>
    
    @endif
    
    
    <form method="POST" action="/fixtures/{{ $fixture->id }}/players">
        
        {{ csrf_field() }}
        
            <div>
    
            <label class="label" for"playerName">New Player</label>
            
            <div class="control">
            
                <input type="text" class="input" name="playerName" placeholder="New Player" required>
            
            </div>
    
        </div>
        
        
        <div class="field">
        
            <div class="control">
            
                <button type="submit">Add Player</button>
                
            </div>
            
        </div>

    
        @include ('errors')
    
    
    </form>
    
    
 
    
   
    
    


@endsection




