<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;


class SuperadminController extends Controller
{
    public function dashboard()
    {
        $data = Contact::orderBy('created_at', 'desc')->paginate(20);
        //dd($data);
        return view('superadmin.dashboard', compact('data'));
    }

    public function login()
    {
        return view('superadmin.auth.login');
    }
}
