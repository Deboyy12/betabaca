<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class UserBookController extends Controller
{
    public function index()
    {
        $books = Buku::latest()->paginate(8);
        return view('user.book.index', compact('books'));
    }

    public function show($id)
    {
        $book = Buku::findOrFail($id);
        return view('user.book.show', compact('book'));
    }
}
