<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|max:255',
            'message' => 'required|min:5'
        ]);

       Mail::to('heamanbelay@gmail.com')
        -> send(new ContactMail($validated['name'], $validated['email'], $validated['message']));

        //return $request->all();
        return ['success' => true];
    }
}
