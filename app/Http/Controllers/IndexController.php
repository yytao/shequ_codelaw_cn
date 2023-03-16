<?php
/*
 * Create By taoyy
 * Time: 2023-3-3
 * IndexController
 */
namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\View\View;

class IndexController extends Controller{


    public function index(){

        return view('index');
    }




    public function layoutData(View $view)
    {

        $nav = Category::select('id', 'category_name')->orderBy('sort', 'asc')->get()->toArray();
        $view->with('nav', $nav);
    }

}





