<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orthop extends Model
{
    protected $table = 'orthops';
    public $primaryKey = 'id';
    public $timestamp =true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
