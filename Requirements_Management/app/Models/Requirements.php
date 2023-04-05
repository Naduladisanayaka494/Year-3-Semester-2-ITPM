<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requirements extends Model
{
    protected $table = 'requirements';
    protected $primaryKey = 'id';
    protected $fillable = ['DEMO1', 'DEMO2', 'DEMO3', 'DEMO4', 'DEMO5', 'DEMO6', 'DEMO7', 'DEMO8'];
}
