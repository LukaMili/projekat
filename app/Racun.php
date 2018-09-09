<?php

namespace Laravel;

use Illuminate\Database\Eloquent\Model;

class Racun extends Model
{
    protected $table = 'racuns';
    public  $primaryKey = 'id';
    public $timestamps = true;
    
     public function User()
    {
        return $this->belongsTo('Laravel\User');
    }
     public function Stavke()
    {
        return $this->hasMany('Laravel\stavkaRacuna');
    }
}