<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = ['code', 'name','hours', 'course' , 'cycle_id']; 
    public function cycle()
    {
        return $this->belongsTo(Cycle::class, 'cycle_id');
    }

    //REVISAR 
    public function offers()
    {
        return $this->hasMany(Offer::class, 'offers_id');
    }
}
