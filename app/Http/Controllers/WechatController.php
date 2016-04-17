<?php

namespace App\Http\Controllers;

use Log;

class WechatController extends Controller
{

    public function serve()
    {

        $wechat = app('wechat');
        $server = $wechat->server;
        $user = $wechat->user;


        $server->setMessageHandler(function ($message) use ($user) {

            $fromUser = $user->get($message->FromUserName);

            return "{$fromUser->nickname}";
        });

        return $server->serve();
    }
}