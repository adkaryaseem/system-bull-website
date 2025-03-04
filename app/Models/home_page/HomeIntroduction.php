<?php

namespace App\Models\home_page;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeIntroduction extends Model
{
    use HasFactory;
    protected $table = "home_introductions";

    protected $fillable = [
        "image",
        "message"
    ];
}
