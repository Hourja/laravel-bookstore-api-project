<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
use PDO;

class Category extends Model
{
    use HasFactory;


    // relationship to MANY books


    public function books()
    {

        return $this->hasMany(Book::class);
    }
}
