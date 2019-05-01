<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User', 'model_has_roles', 'role_id', 'model_id');
    }
}
