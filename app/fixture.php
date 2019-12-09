<?php

namespace App;

use App\Mail\FixtureCreated;

use App\Events\FixturePublished;

use Illuminate\Support\Facades\Mail;

use Illuminate\Database\Eloquent\Model;

class fixture extends Model

{
    
    protected $guarded = [];

    protected $dispatchesEvents = [
    
        'created' => FixturePublished::class
    
    ];
    
    public function owner()
    
    {
        
        return $this->belongsTo(User::class);
        
    }
    
    
    public function players()

    {
        
        return $this->hasMany(Player::class);
        
    }
    
    
    public function addPlayer($player)
    
    {
        
        $this->players()->create($player);
        
    }

}
