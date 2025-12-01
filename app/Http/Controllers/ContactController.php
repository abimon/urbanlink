<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('client.contact');
    }
    public function create()
    {
        //
    }
    public function store()
    {
        // dd(request()->all());
        try {
            // if input has an email pattern store as email else if it is in the pattern of a phone store phone else return error
            if (filter_var(request('email'), FILTER_VALIDATE_EMAIL)) {
                request()->merge(['phone' => null,'email'=> request('email')]);
            } elseif (preg_match("/^[0-9]{10}$/", request('email'))) {
                $phone=request('email');
                request()->merge(['email' => null, 'phone' => $phone]);
            } else {
                return redirect()->back()->with('error', 'Invalid email or phone number');
            }
            Contact::create([
                "name"=>request('name'),
                "email"=>request('email'),
                "phone"=>request('phone'),
                "subject"=>request('subject'),
                "message"=>request('message'),
            ]);
            return redirect()->back()->with('success', 'Message sent successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something went wrong. '.$th->getMessage());
        }
    }
    public function show(Contact $contact)
    {
        //
    }
    public function edit(Contact $contact)
    {
        //
    }
    public function update(Request $request, Contact $contact)
    {
        
    }
    public function destroy(Contact $contact)
    {
        //
    }
}
