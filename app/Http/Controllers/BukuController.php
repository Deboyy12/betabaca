<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::all();
        return view('admin.master_buku', compact('bukus'));
    }

    public function create()
    {
        $kategori = ['Pendidikan', 'Novel', 'Komik', 'Manga', 'Sains', 'Teknologi', 'Religi', 'Sejarah'];
        return view('buku.create', compact('kategori'));
    }

    public function store(Request $request)
{
    $request->validate([
        'nama_buku' => 'required|string|max:255',
        'penulis' => 'required|string|max:255',
        'tahun_terbit' => 'required|integer|min:1000|max:9999',
        'penerbit' => 'required|string|max:255',
        'kategori' => 'required|string',
        'cover' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        'file_pdf' => 'required|mimes:pdf|max:10240',
    ]);

    $data = $request->only(['nama_buku', 'penulis', 'tahun_terbit', 'penerbit', 'kategori']);

   if ($request->hasFile('cover')) {
    $data['cover'] = $request->file('cover')->store('buku/covers', 'public'); 
    }

    if ($request->hasFile('file_pdf')) {
    $data['file_pdf'] = $request->file('file_pdf')->store('buku/pdf', 'public');
    }

    Buku::create($data);

    return redirect()->route('buku.index')->with('success', 'Data buku berhasil ditambahkan.');
}

    public function edit(Buku $buku)
    {
        $kategori = ['Pendidikan', 'Novel', 'Komik', 'Manga', 'Sains', 'Teknologi', 'Religi', 'Sejarah'];
        return view('buku.edit', compact('buku', 'kategori'));
    }

    public function update(Request $request, Buku $buku)
{
    $request->validate([
        'nama_buku' => 'required|string|max:255',
        'penulis' => 'required|string|max:255',
        'tahun_terbit' => 'required|integer|min:1000|max:9999',
        'penerbit' => 'required|string|max:255',
        'kategori' => 'required|string',
        'cover' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'file_pdf' => 'nullable|mimes:pdf|max:10240',
    ]);

    $data = $request->only(['nama_buku', 'penulis', 'tahun_terbit', 'penerbit', 'kategori']);

    if ($request->hasFile('cover')) {
        $data['cover'] = $request->file('cover')->store('buku/covers', 'public');
    }

    if ($request->hasFile('file_pdf')) {
        $data['file_pdf'] = $request->file('file_pdf')->store('buku/pdf', 'public');
    }

    $buku->update($data);

    return redirect()->route('buku.index')->with('success', 'Data buku berhasil diperbarui.');
}


    public function destroy(Buku $buku)
    {
        $buku->delete();
        return redirect()->route('buku.index')->with('success', 'Data buku berhasil dihapus.');
    }
}
