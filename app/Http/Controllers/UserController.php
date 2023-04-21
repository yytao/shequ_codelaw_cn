<?php
/*
 * Create By taoyy
 * Time: 2023-3-22
 * ArticleController
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller{

    /*
     * 个人中心页
     */
    public function index(Request $request, $article_id){

        $user = Auth::user();
        return view('user', compact('user'));
    }


}

