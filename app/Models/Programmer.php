<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programmer extends Model
{
    // 1:1 One to One
    public function project()
    {
        return $this->hasOne('App\Models\Project');
    }
    //1:M One to Many
    public function book()
    {
        return $this->hasMany(Book::class);
    }
}
