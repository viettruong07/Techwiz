<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plants_images extends Model
{
    use HasFactory;
    protected $table = 'plants_images';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public function plants(){
        return $this->belongsTo(plants::class,'plant_category_id','id');
    }
}

    

