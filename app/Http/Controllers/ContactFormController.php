<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactFormController extends Controller
{
    public function submit(Request $request) {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        
        return Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,

        ]);

            return response()->json(null, 200);
    }




}



