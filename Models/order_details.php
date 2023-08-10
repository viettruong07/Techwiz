<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_details extends Model
{
    use HasFactory;
    
    protected $table = 'order_details';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function  Order() {
        return $this->belongsTo(order::class, 'order_id', 'id');
    }

    public function  plants() {
        return $this->belongsTo(plants::class, 'plant_id', 'id');
    }
}
