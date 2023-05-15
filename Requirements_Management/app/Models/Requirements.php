<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requirements extends Model
{
    protected $table = 'requirements';
    protected $primaryKey = 'id';
    protected $fillable = ['customer_name','address', 'email', 'phone', 'payment_methods', 'product_name', 'Quantity', 'preferred_day', 'preferred_time'];
}
