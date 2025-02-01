<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class software extends Model
{
    use HasFactory;

     protected $fillable = [
        'title',
        'product_category',
        'product_subcategory',
        'images',
        'text',
        'rating',
        'preview_images',
        'software_features',

    ];
}

