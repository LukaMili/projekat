<?php

namespace Laravel;

use Illuminate\Database\Eloquent\Model;

class Kategorija extends Model
{
   protected $table= 'kategorijas';
    public $primaryKey='id';
    public $timestamps=true;
}
