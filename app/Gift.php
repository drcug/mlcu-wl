<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    //
    public function donations()
    {
        return $this->hasMany(Donation::class);
    }
    
}
