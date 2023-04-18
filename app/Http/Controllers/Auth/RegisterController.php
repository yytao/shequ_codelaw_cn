<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\SignupMail;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use think\Exception;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'schoolCard' => ['required', 'mimes:jpeg,png,jpg,gif,svg', 'max:5000'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'captcha' => ['required', 'captcha'],
        ],[

            'captcha.captcha' => trans('auth.captcha_captcha'),
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }



    public function register(Request $request)
    {
        //进行验证
        $this->validator($request->all())->validate();

        // 声明路径名
        $destinationPath = 'uploads/user_sc/';
        try {
            // 取到图片
            $file = $request->file('schoolCard');
            // 获得图片的名称 为了保证不重复 我们加上userid和time
            $file_name = 'user_sc_' . sha1(time()) .'.'. $file->getClientOriginalExtension();
            // 执行move方法
            $file->move($destinationPath, $file_name);

            // 裁剪图片 生成200x200的缩略图
            Image::make($destinationPath . $file_name)->fit(200)->save();

        } catch (Exception $exception){

            return redirect('register//')->withErrors(['schoolCard'=>'发生错误，请联系网站管理员']);
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->verification_code = sha1(time());
        $user->school_card = '/' . $destinationPath . $file_name;
        $user->save();
        if ($user != null)
        {
            $data = [
                'name' => $user->name,
                'verification_code' => $user->verification_code
            ];
            Mail::to($user->email)->send(new SignupMail($data));
            return redirect('login//')->withErrors(['suc'=>'注册成功，请登录邮箱验证']);
        }

        // show error message
        return redirect()->back()->withErrors(['name'=>'发生错误，请联系网站管理员']);
    }


    public function verifyUser(Request $request)
    {
        $verification_code = \Illuminate\Support\Facades\Request::get('code');
        $user = User::where(['verification_code' => $verification_code])->first();
        if ($user != null)
        {
            if($user->is_verified != 0)
            {
                return 'You are already verified';
            }
            $user -> email_verified_at = date('Y-m-d H:i:s');
            $user -> is_verified = 1;
            $user -> save();
            return view('emails.success');
        }
        return 'User not exist!';
    }

}
