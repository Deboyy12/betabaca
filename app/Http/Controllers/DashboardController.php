<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Bisa kirim data ke view kalau perlu
        return view('dashboard');
    }
}
