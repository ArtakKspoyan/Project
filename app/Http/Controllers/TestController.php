<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function conrollerMethod()
    {
        return response()->json([
            'msg' => 'We shold return only'
        ]);
    }

    public function test()
    {
        return response()->json([
            'msg' => 'some error'

        ],422);
    }
}
