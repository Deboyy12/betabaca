<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class PembacaController extends Controller
{
    public function index()
{
    // Hanya ambil user dengan role "user"
    $users = User::where('role', 'user')
                ->orderBy('created_at', 'desc')
                ->get();

    return view('admin.pembaca', compact('users'));
}


    public function destroy($id)
{
    $user = User::findOrFail($id);

    // Hindari agar admin tidak bisa menghapus dirinya sendiri (opsional)
    if (auth()->id() === $user->id) {
        return redirect()->back()->with('error', 'Anda tidak dapat menghapus akun Anda sendiri.');
    }

    $user->delete();

    return redirect()->back()->with('success', 'User berhasil dihapus.');
}
}
