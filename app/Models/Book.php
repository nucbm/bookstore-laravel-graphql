<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;/*
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{*/
    protected $fillable = [
        'title', 'author', 'language', 'year_published', 'isbn'
    ];
}