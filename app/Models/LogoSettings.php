<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogoSettings extends Model
{
    use HasFactory;

    protected $table = 'settings';  // Assuming your table is named 'settings'

    protected $fillable = [
        'header_logo',
        'footer_logo',
    ];
}
