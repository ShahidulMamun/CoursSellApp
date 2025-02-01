<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

     protected $fillable = [
        'post_id',
        'project_title',
        'project_description',
        'project_framework',
        'project_date',
        'project_screenshot',
        'project_code',
    ];

}
