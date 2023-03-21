<?php
/*
 * Create By taoyy
 * Time: 2023-3-3
 * IndexController
 */
namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

class IndexController extends Controller{

    public function index(){

        $route = Route::currentRouteName();
        $query = Article::query();
        $query->where('status', 1);

        switch ($route){
            case 'CategoryShare':
                $query->where('category_id', 1);
                break;
            case 'CategoryUnused':
                $query->where('category_id', 2);
                break;
            case 'CategoryRenting':
                $query->where('category_id', 3);
                break;
            case 'CategorySocial':
                $query->where('category_id', 4);
                break;
        }

        $articleList = $query->orderBy('created_at', 'DESC')->take(10)->get();
        
        return view('index', compact(
            'articleList',
        ));
    }


    public function layoutData(View $view)
    {

        $nav = Category::select('id', 'category_name')->orderBy('sort', 'asc')->get()->toArray();
        $view->with('nav', $nav);

        $route = Route::currentRouteName();
        $view->with('route', $route);

    }

}





