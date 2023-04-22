<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    
    protected $table = 'deliverymanagement';
    protected $primaryKey = 'id';
    protected $fillable = ['order_id','name', 'email', 'phone_number','license_number','nic_number','occupation'];

}
