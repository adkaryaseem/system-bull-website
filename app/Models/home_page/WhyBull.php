<?php

namespace App\Models\home_page;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhyBull extends Model
{
    use HasFactory;

    protected $table = "why_bulls";

    protected $fillable = [
        "message"
    ];
}
