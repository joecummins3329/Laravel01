<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Player;

use App\fixture;

class FixturePlayersController extends Controller

{
   
    public function store(Fixture $fixture)
   
    {
        
        $fixture->addPlayer(
      
        request()->validate(['playerName' => 'required'])
      
        );
      
     
        return back();
               
    }
      
   
    public function update(Player $player)
   
    {
         
        $method = request()->has('available') ? 'available' : 'unavailable';
        
        $player->$method();
        
        return back();   
        
    }
   
}
