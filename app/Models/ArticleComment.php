<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ArticleComment extends Model
{
    protected $table = "sq_article_comment";
    protected $guarded = [];

    protected function serializeDate(\DateTimeInterface $date){
        return $date->format('Y-m-d H:i:s');
    }

}
