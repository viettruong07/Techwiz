<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plants_category extends Model
{
    use HasFactory;
    protected $table = 'plants_category';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function plants(){
        return $this->hasMany(plants::class, 'plants_category_id', 'id');
    }
}

