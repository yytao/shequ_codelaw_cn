<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "users";
    protected $guarded = [];

    protected function serializeDate(\DateTimeInterface $date){
        return $date->format('Y-m-d H:i:s');
    }

}
