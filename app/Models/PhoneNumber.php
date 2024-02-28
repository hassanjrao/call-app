<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneNumber extends Model
{
    protected $fillable = ['number', 'isActive', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
