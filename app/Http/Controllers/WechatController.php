<?php

namespace App\Http\Controllers;

use Log;

class WechatController extends Controller
{

    public function serve()
    {

        $wechat = app('wechat');


        $wechat->server->setMessageHandler(function ($message) {
            switch ($message->MsgType) {
                case 'event':
                    # 事件消息...
                    break;
                case 'text':
                    # 文字消息...
                    return 'false';
                    // return $message->Content;
                    break;
                case 'image':
                    # 图片消息...
                    return $message->PicUrl;
                    break;
                case 'voice':
                    # 语音消息...
                    break;
                case 'video':
                    # 视频消息...
                    break;
                case 'location':
                    # 坐标消息...
                    break;
                case 'link':
                    # 链接消息...
                    break;
                // ... 其它消息
                default:
                    # code...
                    // $return NULL;
                    break;
            }

            // ...
        });

        return $wechat->server->serve();
    }
}