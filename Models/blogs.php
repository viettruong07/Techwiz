<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\blog_comment;

class blogs extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $primaryKey = 'user_id';
    protected $guarded = [];

    public function  BlogComments() {
        return $this->hasMany(blog_comment::class, 'user_id', 'id');
    }
}
