<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = Home::first(); // misal hanya ambil 1 data
        return view('home.index', compact('data'));
    }
}
