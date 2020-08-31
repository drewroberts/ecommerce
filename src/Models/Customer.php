<?php

namespace DrewRoberts\Ecommerce\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = ['id'];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($customer) {
            if (empty($customer->timezone)) {
                $customer->timezone = 'EST';
            }
        });
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function vouchers()
    {
        return $this->hasMany(Voucher::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
