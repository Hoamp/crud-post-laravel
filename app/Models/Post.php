<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // colom mana saja yang boleh diisi
    protected $fillable = [
        'image', 'title', 'content'
    ];
}
