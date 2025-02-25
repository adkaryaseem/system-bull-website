<?php

namespace App\Models\home_page;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChairmanMessage extends Model
{
    use HasFactory;
    protected $table = "chairman_messages";

    protected $fillable = [
        "image",
        "message"
    ];
}
