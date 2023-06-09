<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;
    public function getBook()
    {
        return $this->hasMany(Book::class,'publisher_id','id');
    }
}
