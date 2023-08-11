<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        $this->NamSeeder();
//
//        $this->HungSeeder();
        $this->HienSeeder();
    }

    protected  function HungSeeder(){
//        \App\Models\User::factory(100)->create();

//        $this->call(CategorySeeder::class);
//        $this->call(ProductSeeder::class);
//
//        Order::factory(1000)->create();
//        $orders = Order::all();
//        // set the range of time period for the orders
//        $oldestOrder = 1;
//        $newestOrder = $orders->count();
//        $startDateTime = Carbon::now()->subYears(2);
//        $endDateTime = Carbon::now();
//
//        // loop through each order and update created_at and updated_at based on its id
//        foreach ($orders as $order) {
//            $orderId = $order->id;
//            $orderDateTime = Carbon::createFromTimestampUTC(($orderId - $oldestOrder) * ($endDateTime->timestamp - $startDateTime->timestamp) / ($newestOrder - $oldestOrder) + $startDateTime->timestamp);
//            $order->created_at = $orderDateTime;
//            $order->updated_at = $orderDateTime;
//            $order->save();
//
//            // if the order is older than 1 month, update its status to 4 (COMPLETED) and payment_status to true
//            if ($orderDateTime->lt(Carbon::now()->subMonth())) {
//                $order->status = 4;
////                $order->payment_status = true;
//                $order->save();
//            }
//        }
//
//        //--Add order_products for each order
//        foreach ($orders as $order) {
//            $products = Product::all()->random(random_int(1,3));
//            $subtotal = 0;
//            foreach ($products as $product) {
//                $quantity = random_int(1, 3);
//                $subtotal += $quantity * $product->price;
//                DB::table('order_products')->insert([
//                    'order_id' => $order->id,
//                    'product_id' => $product->id,
//                    'quantity' => $quantity,
//                    'price' => $product->price
//                ]);
//            }
//            $delivery_fee = 0;
//            $grand_total = $subtotal + $delivery_fee;
//            $order->update([
//                'subtotal' => $subtotal,
//                'delivery_fee' => $delivery_fee,
//                'grand_total' => $grand_total,
//            ]);
//        }
//    }
//
//    protected function NamSeeder(){
//        $this->call(TeamPlayerSeeder::class);
    }

    protected  function HienSeeder(){
        $this->call(BlogSeeder::class);
    }


}
