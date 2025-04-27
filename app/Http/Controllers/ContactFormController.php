<?php

namespace App\Http\Controllers;
// use App\Http\ContactForm;
use Illuminate\Http\Request;
use App\Models\ContactForm;

class ContactFormController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'description' => 'required|string',
        ]);

        // Store the form data
       ContactForm::create($validated);

        // Return a response (you can redirect or return a message)
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
