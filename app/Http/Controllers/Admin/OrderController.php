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

        return view("admin2.order.list", compact("data","todayOrders","timeFilterOrders"));
    }

    public function detail(Order $order) {
        return view("admin2.order.detail", compact('order'));
    }

    public function updateStatus(Order $order, Request $request) {
        if ($request->status == Order::CANCELED) { //If status updated to 'CANCEL' then increase product quantity
            $order->cancel_reason = $request->get('cancel-reason');
            foreach ($order->products as $product) {
                $product->increment('quantity', $product->pivot->quantity);
            }
        } elseif ($request->status == Order::COMPLETED) { //If status updated to 'COMPLETED' then update payment status to true
            $order->payment_status = true;
        }
        $order->status = $request->status;
        $order->save();
        return redirect()->back();
    }

    public function returnRequestsList(Request $request) {
        $search = $request->get("search");
        $return_status = $request->get("return_status");
        if (is_null($return_status)) {
            $returnRequests = Order::where('return_status','<>',null)->CustomerNameOrTel($search)->orderBy('id','desc')->paginate(20);
        } else {
            $returnRequests = Order::where('return_status',$return_status)->CustomerNameOrTel($search)->orderBy('id','desc')->paginate(20);
        }


        return view('admin2.order.return-requests',compact('returnRequests'));
    }

    public function updateReturnRequest(Order $order, Request $request) {
        $order->return_status = $request->get('return-status');
        if ($request->get('return-status') == Order::RETURN_COMPLETED) {
            $order->status = Order::RETURNED;
        }
        $order->save();
        return redirect()->back();
    }
}
