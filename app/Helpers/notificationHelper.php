<?php

use Pusher\Pusher;

if (!function_exists('notify')) {
    function notify($chanel, $event, $data) {
        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new Pusher(
            'cf06b640611118d12a12',
            '503482e60741c2258819',
            '1562984',
            $options
        );

        $pusher->trigger($chanel, $event, $data);
    }
}
