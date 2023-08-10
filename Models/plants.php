<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\order;
use App\Models\plants_category;
use App\Models\plants_details;
use App\Models\plants_images;
// use App\Models\plants;


class plants extends Model
{
    use HasFactory;
    protected $table= 'plants';
    protected $primaryKey ='plant_id';
    // protected $guarded = ''
    public function  plantCategory() {
        return $this->belongsTo(plants_category::class, 'plants_category_id', 'id');
    }

    public function  plantDetails() {
        return $this->hasMany(plants_details::class, 'plants_details_id', 'id');
    }

    // public function  orderDetails() {
    //     return $this->hasMany(OrderDetails::class, 'product_category_id', 'id');
    // }
    // product -> productimage
    public function plantImages(){
        return $this->hasMany(plants_images::class,'plants_images_id','id');
    }
}