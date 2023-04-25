<?php
/*
 * Create By taoyy
 * Time: 2023-3-3
 * IndexController
 */
namespace App\Http\Controllers;
use App\Models\Notice;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use think\Exception;


class NoticeController extends Controller{

    /*
     * 首页
     */
    public function index(){

        $notice = Notice::where('to_user', Auth::user()->id)->get();

        return view('notice', compact(
            'notice'
        ));
    }


    public function clear(Request $request)
    {
        try {
            $user = Auth::user();
            Notice::where('to_user', $user->id)->where('status', '0')->update(['status' => '1']);

            return response()->json(([
                'msg'=>'success',
            ]), 200);

        } catch (Exception $exception){

            return response()->json(([
                'msg'=>'success',
            ]), 200);
        }
    }


    public function single(Request $request)
    {
        try {
            $user = Auth::user();

            Notice::where('to_user', $user->id)
                ->where('id', $request->data_id)
                ->where('status', '0')
                ->update(['status' => '1']);

            return response()->json(([
                'msg'=>'success',
            ]), 200);

        } catch (Exception $exception){

            return response()->json(([
                'msg'=>'success',
            ]), 200);
        }
    }


}





