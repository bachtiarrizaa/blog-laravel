<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // boleh diisi
    // protected $fillable = ['title', 'excerpt', 'body'];

    // gaboleh diisi
    protected $guarded = ['id'];
}
