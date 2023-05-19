<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    protected $table = 'farmer';
    protected $primaryKey = 'id';
    protected $fillable = ['name','nic','address', 'mobile', 'email', 'type_of_crops'];
}


