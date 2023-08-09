<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plants_details extends Model
{
    use HasFactory;
    protected $table = 'plants_details';
    protected $primaryKey = 'plant_details_id';
    protected $guarded = [];
}

