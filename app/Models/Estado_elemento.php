<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado_elemento extends Model
{
    use HasFactory;

    public function elementos(){
        return $this->hasMany('App\Models\Elemento');
    }
}
