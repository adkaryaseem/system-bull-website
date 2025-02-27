<?php

namespace App\Models\home_page;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentTestiminial extends Model
{
    use HasFactory;

    protected $table = "student_testiminials";
    protected $fillable = [
        "image",
        "message"
    ];
}
