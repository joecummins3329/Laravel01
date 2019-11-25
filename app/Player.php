<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model

{
    
    protected $guarded = [];
    
    
    
    public function available($available=true)
    
    {
        
        $this->update(compact('available'));  
        
    }
    
    public function unavailable()
    
    {
        
        $this->available(false);  
        
    }

    
    public function fixture()
    
    {
        
        return $this->belongsTo(fixture::class);
        
    }
    
}
