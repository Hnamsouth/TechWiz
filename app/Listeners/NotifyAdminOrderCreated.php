<?php

namespace App\Listeners;

use App\Events\NewOrderCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Pusher\Pusher;

class NotifyAdminOrderCreated
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(NewOrderCreated $event)
    {
        $order = $event->order;

        //Xoa gio hang
        session()->forget("cart");

        //Goi helper notification pusher
        $data['message'] = 'New order #'.$order->id.' has been placed, go to order list?';
        $data['confirm'] = true;
//        notify('my-channel', 'my-event', $data);
    }
}
