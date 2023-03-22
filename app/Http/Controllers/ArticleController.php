<?php
/*
 * Create By taoyy
 * Time: 2023-3-22
 * ArticleController
 */
namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller{

    public function index(Request $request, $article_id){

        $article = Article::find($article_id);

        return view('article_detail', compact(
            'article',
        ));
    }


}

