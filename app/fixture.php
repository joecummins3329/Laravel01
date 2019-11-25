<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fixture extends Model

{
    
    protected $guarded = [];


    
    
    public function players()

    {
        
        return $this->hasMany(Player::class);
        
    }
    
    
    public function addPlayer($player)
    
    {
        
        $this->players()->create($player);
        
    }

}
