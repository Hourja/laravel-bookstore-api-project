<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;


class Bookshop extends Model
{
    use HasFactory;

    ublic function books(){

        return $this->hasMany(Book::class);
    }
}
