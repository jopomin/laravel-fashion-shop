<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }

    public function brands()
    {
        return view('brands');
    }

    public function designers()
    {
        $designers = Dress::all();
        @dd($designers);
        return view('designers');
    }
}
