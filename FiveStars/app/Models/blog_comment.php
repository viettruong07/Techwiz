<?php

namespace App\Models;
use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog_comment extends Model
{
    use HasFactory;
    protected $table = 'blog_comment';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function  Blogs() {
        return $this->belongsTo(blogs::class, 'blog_id', 'id');
    }
}
