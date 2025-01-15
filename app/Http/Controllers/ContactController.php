<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => [
                'required',
                'string',
                'max:255',
                'regex:/^[a-zA-Z\s]+$/u'
            ],
            'last_name' => [
                'required',
                'string',
                'max:255',
                'regex:/^[a-zA-Z\s]+$/u'
            ],
            'email' => [
                'required',
                'email',
                'max:255'
            ],
            'details' => [
                'nullable',
                'string',
                'max:1000',
                'regex:/^[^<>]+$/u'
            ],
        ]);

        Contact::create($validated);

        return redirect()->back()->with('success', 'Your message has been submitted successfully!');
    }
}
