<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $dateTime = $this->faker->dateTimeBetween('-1 month', 'now');

        $paymentMethods = [
            Order::PAYPAL,
            Order::VNPAY,
            Order::COD,
        ];

        $paymentMethod = $this->faker->randomElement($paymentMethods);

//        $paymentStatus = $this->faker->boolean();

        $status = $this->faker->randomElement([0,1,2,3,4,5]);

        $paymentCode = null;
        if ($paymentMethod === Order::PAYPAL) {
            $paymentCode = 'PPA';
        } elseif ($paymentMethod === Order::VNPAY) {
            $paymentCode = 'VNP';
        } else {
            $paymentCode = 'COD';
        }

        return [
            'code' => $paymentCode.microtime(true) * 10000,
            'status' => $status,
            'fullname' => $this->faker->name(),
            'email' => $this->faker->email(),
            'telephone' => $this->faker->phoneNumber(),
            'country' => $this->faker->country(),
            'state' => $this->faker->city(),
            'city' => $this->faker->city(),
            'address' => $this->faker->streetAddress(),
            'postcode' => $this->faker->postcode(),
            'subtotal' => 0,
            'delivery_fee' => 0,
            'grand_total' => 0,
            'payment_method' => $paymentMethod,
//            'payment_status' => $paymentStatus,
            'user_id' => random_int(1,100),
            'created_at' => $dateTime,
            'updated_at' => $dateTime
        ];
    }
}
