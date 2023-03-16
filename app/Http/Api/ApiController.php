<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class SynchronizeController extends Controller
{

    public function article(Request $request)
    {
        return response([
            'msg' => 'success',
            'info' => "",
        ], 200);

    }



}
