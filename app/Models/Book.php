<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public function getPublisher()
    {
        return $this->belongsTo(Publisher::class,'publisher_id','id');
    }
    public function getCategory()
    {
        return $this->belongsToMany(Category::class,'book_category','category_id','book_id');
    }
}
