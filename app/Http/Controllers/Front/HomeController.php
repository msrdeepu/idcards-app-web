<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function home()
    {
        return view('guest.home');
    }
    public function gallery()
    {
        return view('guest.gallery');
    }
    public function about()
    {
        return view('guest.about');
    }
    public function services()
    {
        return view('guest.services');
    }
}
