<?php

namespace App\Listeners;

use App\Events\CancelOrder;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NotifyAfterCanceledOrder
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
    public function handle(CancelOrder $event)
    {
        $order = $event->order;

        //Goi helper notification pusher
        $data['message'] = 'Order #'.$order->id.' has been canceled, go to order list?';
        $data['confirm'] = true;
//        notify('my-channel', 'my-event', $data);
    }
}
