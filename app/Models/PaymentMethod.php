<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $fillable = ['methodType', 'details'];

    public function customer()
    {
        return $this->hasOne(Customer::class);
    }
    
    use HasFactory;
}
