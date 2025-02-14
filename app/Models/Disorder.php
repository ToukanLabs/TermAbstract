<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disorder extends Model
{
    /** @use HasFactory<\Database\Factories\DisorderFactory> */
    use HasFactory;

    public $timestamps = false;
}
