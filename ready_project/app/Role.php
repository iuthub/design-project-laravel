<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $table = 'roles';

    public $primaryKey = 'id';

    public function user(){
        return $this->hasMany('App\User');
    }
}
