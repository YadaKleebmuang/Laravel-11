<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //1:M
    public function programmer()
    {
        return $this->belongsTo(Book::class);
    }
}
