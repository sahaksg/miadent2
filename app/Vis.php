<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vis extends Model
{
    protected $table = 'vis';
    public $primaryKey = 'id';
    public $timestamp = true;
}
