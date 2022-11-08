<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $guarded = [];
    // protected $fillable = ["title","body"];

    //si queremos cambiarle el nombre a la tabla asociada
    // protected $table = "posts";
}
