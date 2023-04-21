<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class UserCollect extends Model
{
    protected $table = "sq_user_collect";
    protected $guarded = [];

    protected function serializeDate(\DateTimeInterface $date){
        return $date->format('Y-m-d H:i:s');
    }

}
