<?php

namespace Laravel;

use Illuminate\Database\Eloquent\Model;

class Korpa extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'korpas';
    public $timestamps = true;
    
     public function User()
    {
        return $this->belongsTo('Laravel\User');
    }
     public function Proizvod()
    {
        return $this->belongsTo('Laravel\Proizvod');
    }
}
