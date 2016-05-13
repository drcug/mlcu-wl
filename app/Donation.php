<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    //
    public function gift()
    {
        return $this->belongsTo(Gift::class);
    }
}
