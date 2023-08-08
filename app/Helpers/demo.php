<?php
use Pusher\Pusher;


if(!function_exists('notify')){
    /**
     * @throws \Pusher\PusherException
     * @throws \Pusher\ApiErrorException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    function notify($my_channel, $my_event, $user,$mess){
        $options = array(
            'cluster' => env('PUSHER_APP_CLUSTER'),
            'useTLS' => true
        );
        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );

        $data['message'] = $mess;
        $data['user_id'] = $user;
//        dd($data);
        $pusher->trigger($my_channel, $my_event, $data);
    }
}
