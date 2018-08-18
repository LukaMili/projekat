<?php

namespace Laravel;

use Illuminate\Database\Eloquent\Model;

class Proizvod extends Model
{
    protected $table = 'proizvods';
    public  $primaryKey = 'id';
    public $timestamps = true;
    
     public function Kategorija()
    {
        return $this->belongsTo('Laravel\Kategorija');
    }
    public function Korpe()
    {
        return $this->hasMany('Laravel\Korpa');
    }
}
