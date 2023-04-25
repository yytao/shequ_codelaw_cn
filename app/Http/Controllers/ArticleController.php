<?php
/*
 * Create By taoyy
 * Time: 2023-3-22
 * ArticleController
 */
namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\ArticleComment;
use App\Models\Category;
use App\Models\UserCollect;
use App\Models\UserStar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use think\Exception;

class ArticleController extends Controller{

    public function __construct()
    {
        $check = Auth::check();
    }

    public function index(Request $request, $article_id)
    {
        $article = Article::findOrFail($article_id);

        $user = Auth::user();
        $userStar = UserStar::where('status', '1')
            ->where('user_id', $user->id??0)
            ->pluck('article_id')
            ->toArray();

        $userCollect = UserCollect::where('status', '1')
            ->where('user_id', $user->id??0)
            ->pluck('article_id')
            ->toArray();

        return view('article_detail', compact(
            'article',
            'user',
            'userStar',
            'userCollect'
        ));
    }

    /*
     * 发帖页
     */
    public function post(Request $request)
    {
        $category = Category::orderBy('sort', 'ASC')->get();
        return view('post', compact(
            'category'
        ));
    }

    protected function contentValidator(array $data)
    {
        return Validator::make($data, [
            'articleContent' => ['required', 'string', 'max:1000'],
            'articleCategory' => ['required'],
            'captcha' => ['required', 'captcha'],
        ],[

            'captcha.captcha' => trans('auth.captcha_captcha'),
        ]);
    }

    /*
     * 发帖方法
     */
    public function postContent(Request $request)
    {
        $this->contentValidator($request->all())->validate();

        try {
            $article = new Article();
            $article->user_id = Auth::user()->id;
            $article->content = $request->articleContent;
            $article->category_id = $request->articleCategory;
            $article->created_at = time();
            $article->save();
            if ($article != null)
            {
                return redirect()->back()->withErrors(['suc'=>'发帖成功，请耐心等待管理员审核']);
            }

            // show error message
            return redirect()->back()->withErrors(['name'=>'发生错误，请联系网站管理员']);
        } catch (Exception $exception){

            return redirect('register//')->withErrors(['schoolCard'=>'发生错误，请联系网站管理员']);
        }
    }



    /*
     * 点赞
     */
    public function star(Request $request){

        $user = Auth::user();

        $status = $request->status;
        $model = UserStar::where('user_id', $user->id)
            ->where('article_id', $request->article_id)
            ->first();

        if($model && $status == 'del'){
            $model->status = '0';
            $model->save();
            $status = 'del';
        }else if($model && $status == 'add'){
            $model->status = '1';
            $model->save();
            $status == 'add';

            $to_user = Article::find($request->article_id);
            \commonHelper::sendNotice($user->id, $to_user->user_id, $request->article_id, 'star');

        }else if(empty($model) && $status == 'add'){

            $data = [];
            $data['user_id'] = $user->id;
            $data['article_id'] = $request->article_id;
            UserStar::create($data);
            $status == 'add';

            $to_user = Article::find($request->article_id);
            \commonHelper::sendNotice($user->id, $to_user->user_id, $request->article_id, 'star');

        }


        return response()->json(([
            'status' => $status,
            'msg'=>'success',
        ]), 200);

    }


    /*
     * 收藏
     */
    public function collect(Request $request){

        $user = Auth::user();
        $status = $request->status;
        $model = UserCollect::where('user_id', $user->id)
            ->where('article_id', $request->article_id)
            ->first();

        if($model && $status == 'del'){

            $model->status = '0';
            $model->save();
            $status = 'del';
        }else if($model && $status == 'add'){

            $model->status = '1';
            $model->save();
            $status == 'add';
        }else if(empty($model) && $status == 'add'){

            $data = [];
            $data['user_id'] = $user->id;
            $data['article_id'] = $request->article_id;
            UserCollect::create($data);
            $status == 'add';
        }

        return response()->json(([
            'status' => $status,
            'msg'=>'success',
        ]), 200);
    }


    public function postComment(Request $request)
    {
        try {
            $article = new ArticleComment();
            $article->article_id = $request->article_id;
            $article->content = $request->comment_textarea;
            $article->user_id = Auth::user()->id;
            $article->reply_to = $request->reply_to;
            $article->created_at = time();
            $article->save();

            if ($article != null)
            {
                $to_user = Article::find($request->article_id);
                \commonHelper::sendNotice(Auth::user()->id, $to_user->user_id, $request->article_id, 'comment');

                return redirect()->back()->withErrors(['suc'=>'评论成功']);
            }

            // show error message
            return redirect()->back()->withErrors(['err'=>'评论失败']);
        } catch (Exception $exception){

            return redirect()->back()->withErrors(['err'=>'评论失败']);
        }
    }



}

