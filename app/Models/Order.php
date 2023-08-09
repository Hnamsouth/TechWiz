<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'status',
        'fullname',
        'email',
        'telephone',
        'country',
        'state',
        'city',
        'address',
        'postcode',
        'subtotal',
        'delivery_fee',
        'grand_total',
        'note',
        'payment_method',
//        'payment_status',
        'cancel_reason',
        'user_id'
    ];
    //Order status:
    const PENDING = 0;
    const CONFIRMED = 1;
    const PROCESSING = 2;
    const SHIPPING = 3;
    const COMPLETED = 4;
    const CANCELED = 5;

    //Payment methods:
    const PAYPAL = 'PayPal';
    const VNPAY = 'VNPay';
    const COD = 'COD';

    public function products() {
        return $this->belongsToMany(Product::class, "order_products")->withPivot('quantity', 'price');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function scopeCustomerName($query, $customer_name) {
        if($customer_name && $customer_name != "") {
            return $query->where("fullname", "like", "%$customer_name%");
        }
        return $query;
    }

    public function scopeCustomerTel($query, $customer_tel) {
        if($customer_tel && $customer_tel != "") {
            return $query->where("telephone", "like", "%$customer_tel%");
        }
        return $query;
    }

    public function scopeCustomerNameOrTel($query, $search)
    {
        if ($search && $search != "") {
            return $query->where(function($query) use ($search) {
                $query->where("fullname", "like", "%$search%")
                    ->orWhere("telephone", "like", "%$search%");
            });
        }
        return $query;
    }

    public function scopeFromDate($query, $from_date) {
        if($from_date && $from_date != "") {
            return $query->where("created_at", ">=", $from_date);
        }
        return $query;
    }

    public function scopeToDate($query, $to_date) {
        $to_date = Carbon::parse($to_date)->addDay()->toDateString();
        if($to_date && $to_date != "") {
            return $query->where("created_at", "<=", $to_date);
        }
        return $query;
    }

    public function scopeStatus($query, $status) {
        if(isset($status)) {
            return $query->where("status", $status);
        }
        return $query;
    }
}
