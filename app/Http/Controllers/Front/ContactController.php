<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    public function newcontact()
    {
        return view('guest.contact');
    }

    public function createcontact(Request $request)
    {
        // dd($request->all());

        $input = $request->except(['_token']);
        // dd($input);

        $result = Contact::create($input);

        return redirect()->back()->with('Success', 'Messege Sent Successfully');
    }
}
