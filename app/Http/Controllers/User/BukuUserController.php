<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuUserController extends Controller
{
    public function index()
    {
        $bukus = Buku::all();
        $kategoris = Buku::select('kategori')->distinct()->pluck('kategori');
        return view('user.buku.index', compact('bukus', 'kategoris'));
    }

    public function kategori($kategori)
    {
        $bukus = Buku::where('kategori', $kategori)->get();
        $kategoris = Buku::select('kategori')->distinct()->pluck('kategori');
        return view('user.buku.index', compact('bukus', 'kategoris', 'kategori'));
    }
}


