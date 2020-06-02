<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skizb extends Model
{
    protected $table = 'skizbs';
    public $primaryKey = 'id';
    public $timestamp =true;

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function getTableColumns(){
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }
}
