<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['title','thumbnail','slug','description', 'total_enroll', 'discount_price', 'regular_price', 'total_video', 'status','course_trial_video','tags'];


}
