<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function list(Request $request) {
        $search = $request->get("search");

        $date_ranger = $request->input('date-ranger'); // get the input value
        $status = $request->get("status");

        $todayOrders = null;
        if (!$date_ranger) {
            $date_ranger = '01/01/0000 - 12/30/9999';

            $today = Carbon::now()->format('Y-m-d');
            $todayOrders = Order::FromDate($today)->ToDate($today)->get();
        }

        $date_array = explode(" - ", $date_ranger); // split the string into an array
        $from_date = Carbon::createFromFormat('m/d/Y', $date_array[0])->format('Y-m-d'); // convert the start date to Y-m-d format
        $to_date = Carbon::createFromFormat('m/d/Y', $date_array[1])->format('Y-m-d'); // convert the end date to Y-m-d format

        $data = Order::CustomerNameOrTel($search)->FromDate($from_date)->ToDate($to_date)->Status($status)->orderBy("id", "desc")->paginate(20);
        $timeFilterOrders = Order::FromDate($from_date)->ToDate($to_date)->Status($status)->get();

        return view("admin.order.list", compact("data","todayOrders","timeFilterOrders"));
    }

    public function detail(Order $order) {
        return view("admin.order.detail", compact('order'));
    }

    public function updateStatus(Order $order, Request $request) {
        if ($request->status == Order::CANCELED) { //If status updated to 'CANCEL' then increase product quantity
            $order->cancel_reason = $request->get('cancel-reason');
            foreach ($order->products as $product) {
                $product->increment('quantity', $product->pivot->quantity);
            }
        }
        $order->status = $request->status;
        $order->save();
        return redirect()->back();
    }

}
