<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    $settings = \App\Models\LogoSettings::first(); // Fetch the first Hero section
    $heroSection = \App\Models\HeroSection::first(); // If you want the first record (you can customize this)
    $partners = \App\Models\Partner::all(); // Fetch all partners

    return view('welcome' , compact('settings','heroSection','partners')); // Make sure home.blade.php exists in resources/views/
    }
}
