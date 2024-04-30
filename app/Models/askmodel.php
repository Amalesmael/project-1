<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class askmodel extends Model
{
    protected $fillable = [
        "name",
        "email",
        "ask",
    ];
    use HasFactory;
}
