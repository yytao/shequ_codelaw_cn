<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "sq_article";
    protected $guarded = [];

    protected function serializeDate(\DateTimeInterface $date){
        return $date->format('Y-m-d H:i:s');
    }



    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }


    public function comment()
    {
        return $this->hasMany(ArticleComment::class, 'id', 'article_id');
    }

    public function star()
    {
        return $this->hasMany(UserStar::class, 'id', 'article_id');
    }

    public function collect()
    {
        return $this->hasMany(UserCollect::class, 'id', 'article_id');
    }

}
