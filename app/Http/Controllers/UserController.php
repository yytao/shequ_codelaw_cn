<?php
/*
 * Create By taoyy
 * Time: 2023-3-22
 * ArticleController
 */
namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\User;
use App\Models\UserCollect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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


    /*
     *
     */
    public function editName(Request $request){

        $exist = User::where('name', $request->new_name)->first();
        if($exist){
            return redirect('/user/edit')->withErrors(['err'=>'昵称已存在']);
        }

        $user = User::find(Auth::user()->id);
        $user->name = $request->new_name;
        $user->save();

        return redirect('/user/edit')->withErrors(['suc'=>'昵称修改成功']);
    }

    /*
     *
     */
    public function editPassword(Request $request){

        $user = User::find(Auth::user()->id);

        if(!Hash::check($request->old_password, $user->password)){
            return redirect('/user/edit')->withErrors(['err'=>'您填写的旧密码不正确']);
        }

        if($request->new_password != $request->confirm_password){
            return redirect('/user/edit')->withErrors(['err'=>'两次填写的密码不正确']);
        }

        if(Hash::check($request->new_password, $user->password)){
            return redirect('/user/edit')->withErrors(['err'=>'新密码与旧密码相同']);
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect('/user/edit')->withErrors(['suc'=>'密码修改成功']);
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->intended('/');
    }

}

