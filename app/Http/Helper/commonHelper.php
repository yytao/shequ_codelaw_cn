<?php
/*
 * Create By taoyy
 * Time: 2023-3-3
 * IndexController
 */
use App\Models\Notice;
use Illuminate\Database\Eloquent\Model;
use think\Exception;

class commonHelper{

    public static function sendNotice($from_user = 0, $to_user = 0, $article_id = 0, $type = 'notice', $notice = '')
    {
        if($to_user == 0){
            return false;
        }
        try {

            return Notice::create([
                'from_user' => $from_user,
                'to_user' => $to_user,
                'article_id' => $article_id,
                'type' => $type,
                'notice' => $notice,
            ]);
        } catch (Exception $exception) {

            return false;
        }
    }


}





