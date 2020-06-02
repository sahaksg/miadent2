<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Initials extends Model
{
    protected $table = 'initial';
    public $primaryKey = 'id';
    public $timestamp =true;

    public function getTableColumns(){
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }
}
