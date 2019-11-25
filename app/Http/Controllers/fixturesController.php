<?php

namespace App\Http\Controllers;

use App\fixture;

use Illuminate\Http\Request;

class fixturesController extends Controller
{
    
    public function __construct()
    
    {
        
        $this->middleware('auth');
        
    }
    
    public function index() 
    
    {
        
        $fixtures = Fixture::where('owner_id', auth()->id())->get();
        
        return view ('fixtures/index', compact('fixtures'));
        
    }
    
    
    public function create()

    {
        
        return view ('fixtures/create');
    
    }
    
    
    public function store()
    
    {
        
        $attributes = request()->validate([
        
            'title' => ['required', 'min:5'],
            
            'description' => ['required', 'min:5']
        ]);
        
        $attributes['owner_id'] = auth()->id();
        
        $fixture = Fixture::create($attributes);
        
        
        
        
        return redirect('/fixtures');
    
    }
    
    public function show(Fixture $fixture)
    
    {
        
        if ($fixture->owner_id !== auth()->id()) {
            
            abort(403);
            
        }
        
        return view('fixtures.show', compact('fixture'));
    
    }
    
    public function edit(Fixture $fixture)
    {
        return view('fixtures.edit', compact('fixture')); 
    }
    
    
    public function update(Fixture $fixture)
    
    {
         
         $fixture->update(request(['title','description']));
         
         return redirect('/fixtures');
    
    }
    
    
    public function destroy(Fixture $fixture)
    
    {
       
       $fixture->delete();
       
       return redirect('/fixtures');
    
    }
    
    
   


}
