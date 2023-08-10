<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Create 100 users
         \App\Models\User::factory(100)->create();

        //Create 1 admin
        $admin = User::create([
            'name' => 'John Doe',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'telephone' => '012345678',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'avatar' => 'https://res.cloudinary.com/dxcyeb8km/image/upload/v1689147696/sem3/avatar_ga15mg.png',
            'remember_token' => Str::random(10),
        ]);
        Admin::create([
            'user_id' => $admin->id,
            'role' => Admin::ADMIN
        ]);


        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);

        Order::factory(1000)->create();
        $orders = Order::all();
        // set the range of time period for the orders
        $oldestOrder = 1;
        $newestOrder = $orders->count();
        $startDateTime = Carbon::now()->subYears(2);
        $endDateTime = Carbon::now();

        // loop through each order and update created_at and updated_at based on its id
        foreach ($orders as $order) {
            $orderId = $order->id;
            $orderDateTime = Carbon::createFromTimestampUTC(($orderId - $oldestOrder) * ($endDateTime->timestamp - $startDateTime->timestamp) / ($newestOrder - $oldestOrder) + $startDateTime->timestamp);
            $order->created_at = $orderDateTime;
            $order->updated_at = $orderDateTime;
            $order->save();

            // if the order is older than 1 month, update its status to 4 (COMPLETED) and payment_status to true
            if ($orderDateTime->lt(Carbon::now()->subMonth())) {
                $order->status = 4;
//                $order->payment_status = true;
                $order->save();
            }
        }

        //--Add order_products for each order
        foreach ($orders as $order) {
            $products = Product::all()->random(random_int(1,3));
            $subtotal = 0;
            foreach ($products as $product) {
                $quantity = random_int(1, 3);
                $subtotal += $quantity * $product->price;
                DB::table('order_products')->insert([
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'quantity' => $quantity,
                    'price' => $product->price
                ]);
            }
            $delivery_fee = 0;
            $grand_total = $subtotal + $delivery_fee;
            $order->update([
                'subtotal' => $subtotal,
                'delivery_fee' => $delivery_fee,
                'grand_total' => $grand_total,
            ]);
        }
    }
}
