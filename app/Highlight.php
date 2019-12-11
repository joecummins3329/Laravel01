<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Highlight extends Model
{
    
    public function gametape()
    
    {
        
       return $this->belongsTo(Gametape::class); 
        
    }
    
}
