<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    public function article(Request $request)
    {
        return response([
            'msg' => 'success',
            'info' => "",
        ], 200);

    }



}
