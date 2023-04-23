<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class UserStar extends Model
{
    protected $table = "sq_user_star";
    protected $guarded = [];

    protected function serializeDate(\DateTimeInterface $date){
        return $date->format('Y-m-d H:i:s');
    }

    public function article()
    {
        return $this->hasOne(Article::class, 'article_id', 'id')->where('status', '1');
    }
}
