<?php

namespace App\Http\Controllers;

use Request;

class IndexController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function sendMsg()
    {
        $msg = Request::input()['msg'];

        event(new \App\Events\ChatMessageWasReceived($msg, '9487'));
    }
}
