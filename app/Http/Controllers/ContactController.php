<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        // Validation for the user input
        // Uncomment the following code to perform User Input Validation
        /*
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
        ]);
        */

        // Save to database using Eloquent ORM
        // Uncomment the following line to use the secure method for the database insertion
        //Contact::storeContact($request->all());

        // Save to the database using unvalidated Raw SQL
        Contact::storeContactWithRawSQL($request->all());

        return redirect()->back()->with('success', 'Contact saved successfully!');
    }

}
