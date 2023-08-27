<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $fullname = $firstname . ' ' . $lastname;

        $gender = $request->input('gender');

        $contact = $request->only(['email', 'postcode', 'address', 'building_name', 'opinion']);
        $contact['fullname'] = $fullname;
        $contact['gender'] = $gender;

        return view ('confirm', compact('fullname', 'gender', 'contact'));
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['email', 'postcode', 'address', 'building_name', 'opinion']);
        $contact['fullname'] = $request->input('firstname') . ' ' . $request->input('lastname');
        $contact['gender'] = $request->input('gender');

        Contact::create($contact);
        return view('thanks');
    }
}
