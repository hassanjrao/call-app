<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{

    protected $fillable = ['name', 'duration_months', 'price', 'stripe_id', 'paypal_id'];

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
    
    use HasFactory;
}
