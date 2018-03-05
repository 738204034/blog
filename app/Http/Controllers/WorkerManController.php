<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GatewayClient\Gateway;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Events;
use Illuminate\Support\Facades\Redis;

class WorkerManController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
        return view('workerman/index');
    }

    public function gateWay(){
        return view('workerman/gateway');
    }

    public function bind(Request $request){
        Gateway::$registerAddress = '4s.net579.com:27269';
        $user=$request->user();
        $uid= $user->id;
        $group_id = '123';
        $client_id=$request->client_id;
        $request->user()->client_id=$request->client_id;
        Gateway::bindUid($client_id, $uid);
        Gateway::joinGroup($client_id, $group_id);
        $message_group=json_encode(array(
            'type'      => 'join',
            'message' => Gateway::getClientCountByGroup($group_id),
            'user_name'=>$user->name,
        ));
        Gateway::sendToGroup($group_id, $message_group);
    }


    public function send(Request $request){
        Gateway::$registerAddress = '4s.net579.com:27269';
        $user=$request->user();
        $uid= $user->id;
        $type=$request->type;
        $group_id=$request->group_id;
        $client_id_array=Gateway::getClientIdByUid($uid);
        $message=json_encode(array(
            'type'      => 'msg',
            'message' => $request->message,
            'user_name'=>$user->name,
//            'idd'=>Redis::get('key')
        ));
        switch ($type)
        {
            case 'all':
                Gateway::sendToAll($message,null,$client_id_array);
            break;
            case 'ptp':
                // 向任意uid的网站页面发送数据
                Gateway::sendToUid($uid, $message);
            break;
            case 'group':
                // 向任意群组的网站页面发送数据
                Gateway::sendToGroup($group_id, $message);
            break;
            default:
                return 0;
        }
        return 1;
    }
}