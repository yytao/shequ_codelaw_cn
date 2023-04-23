<?php
/*
 * Create By taoyy
 * Time: 2023-3-22
 * ArticleController
 */
namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\UserCollect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class UserController extends Controller{

    /*
     * user page
     * 我的发帖
     */
    public function index(Request $request){

        $user = Auth::user();

        $post = Article::where('user_id', $user->id)->get();

        return view('user', compact(
            'user',
            'post'

        ));
    }


    /*
     * user page
     * 我的收藏
     */
    public function collect(Request $request){

        $user = Auth::user();

        $collect = UserCollect::where('user_id', $user->id)->where('status', '1')->get();

        return view('userCollect', compact(
            'user',
            'collect'

        ));
    }


    /*
     * user page
     * 信息设置
     */
    public function edit(Request $request){

        $user = Auth::user();


        return view('userEdit', compact(
            'user',

        ));
    }

}

