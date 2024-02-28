<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{

    protected $fillable = ['title', 'price', 'duration', 'user_id'];

    public function users() {
        return $this->hasMany(User::class, 'plan_id');
    }
    
    use HasFactory;
}
