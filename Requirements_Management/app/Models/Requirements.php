<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requirements extends Model
{
    protected $table = 'requirements';
    protected $primaryKey = 'id';
    protected $fillable = ['customer_name','address', 'email', 'phone', 'payment_methods','product_category', 'product_name', 'Quantity','pack_preference', 'preferred_day', 'preferred_time'];
}
