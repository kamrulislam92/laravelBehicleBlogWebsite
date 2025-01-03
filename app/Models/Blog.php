<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = [ 'title', 'description', 'category_id' ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
