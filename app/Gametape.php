<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gametape extends Model
{
    
    public function highlights() 
    
    {
        
        return $this->hasMany(Highlight:class)
        
    }
    
}
