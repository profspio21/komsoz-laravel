<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    public function linkstreaming()
    {
        return view('admin.linkstreaming');
    }
    public function linkjadwal()
    {
        return view('admin.linkjadwal');
    }
    public function linkberita()
    {
        return view('admin.linkberita');
    }
}
