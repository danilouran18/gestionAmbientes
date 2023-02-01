<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado_ambiente extends Model
{
    use HasFactory;

    public function ambientes(){
        return $this->hasMany('App\Models\Ambiente');
    }
}
