<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $fillable = ['user_id', 'plan_id', 'payment_method_id','country',
    'number',];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class);
    }

    public function telephoneNumbers()
    {
        return $this->hasMany(PhoneNumber::class);
    }
    use HasFactory;
}
