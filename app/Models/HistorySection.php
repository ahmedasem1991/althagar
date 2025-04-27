<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorySection extends Model
{
    use HasFactory;
    protected $fillable = [
        'background_1',
        'history_header',
        'history_slogan',
        'history_description',
    ];
}
