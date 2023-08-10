<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->tinyInteger('status');
            $table->string('fullname');
            $table->string('email');
            $table->string('telephone', 20);
            $table->string('country', 100);
            $table->string('state', 100);
            $table->string('city', 100);
            $table->string('address');
            $table->string('postcode',12)->nullable();
            $table->decimal('subtotal', 13, 4);
            $table->decimal('delivery_fee', 13, 4);
            $table->decimal('grand_total', 13, 4);
            $table->text('note')->nullable();
            $table->string('payment_method',100);
//            $table->boolean('payment_status')->default(false);
            $table->unsignedBigInteger('user_id');

            //Add column if user want to cancel order:
            $table->string('cancel_reason')->nullable();

            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
