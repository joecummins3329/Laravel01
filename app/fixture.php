<?php

namespace App;

use App\Mail\FixtureCreated;

use App\Events\FixturePublished;

use Illuminate\Support\Facades\Mail;

use Illuminate\Database\Eloquent\Model;

use Auth;

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
    
    public static function boot()
    
    {
    
        parent::boot();
        
        static::updating(function($fixture) {
            
            $fixture->adjust();
            
            
    
        });
    
    }

    
    
    public function adjustments()
    
    {
        
        return $this->belongsToMany(User::class, 'adjustments')
        
            ->withTimestamps()
            
            ->withPivot(['before', 'after'])
            
            ->latest('pivot_updated_at');
        
    }
    
    public function adjust($userID = null)
    
    {
        
    
        $userId = $userID ?: Auth::id();
        
        $this->adjustments()->attach($userId, $this->getDiff());
        
    }
    
    protected function getDiff()
    
    {
        
        $changed = $this->getDirty();
        
        
        $before = json_encode(array_intersect_key($this->fresh()->toArray(), $changed));
                
        $after = json_encode($changed);
            
        return compact ('before','after');
        
    }

}
