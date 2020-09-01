<?php

namespace DrewRoberts\Ecommerce\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Order extends Model
{
    protected $guarded = [
        'id',
        'order_number',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($order) {
            if (auth()->check()) {
                $order->creator_id = auth()->id();
            }
            $order->generateOrderNumber();
        });

        static::saving(function ($order) {
            if (empty($order->customer_id)) {
                throw new \Exception('An order must belong to a customer.');
            }
        });
    }

    /**
     * Generate order number.
     *
     * @return self
     */
    public function generateOrderNumber()
    {
        do {
            $token = Str::of(Carbon::now('America/New_York')->format('ymdB'))->substr(1, 7).Str::upper(Str::random(2));
        } while (self::where('order_number', $token)->first()); //check if the token already exists and if it does, try again

        $this->order_number = $token;
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function purchasedVouchers()
    {
        return $this->hasMany(Voucher::class, 'purchase_order_id');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function vouchers()
    {
        return $this->hasMany(Voucher::class);
    }

    public function discounts()
    {
        return $this->belongsToMany(Discount::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }
}
