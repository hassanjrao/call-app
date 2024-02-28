<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $fillable = ['methodType', 'details'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
    use HasFactory;
}
