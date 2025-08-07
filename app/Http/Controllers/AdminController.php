<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $bukus = Buku::all();
        return view('admin.dashboard', compact('bukus'));
    }
}
