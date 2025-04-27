<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    use HasFactory;
    protected $fillable = [
        'background_1',
        'background_2',
        'about_header',
        'about_slogan',
        'about_side_header',
        'about_description',
    ];
}
