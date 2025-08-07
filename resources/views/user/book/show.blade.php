@extends('layouts.app') {{-- atau layout lain sesuai struktur kamu --}}

@section('title', $book->judul)

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/' . $book->cover) }}" class="img-fluid rounded-start" alt="{{ $book->judul }}">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">{{ $book->judul }}</h3>
                                <p class="card-text"><strong>Penulis:</strong> {{ $book->penulis }}</p>
                                <p class="card-text"><strong>Tahun:</strong> {{ $book->tahun_terbit }}</p>
                                <p class="card-text mt-3">{{ $book->deskripsi }}</p>
                                <a href="{{ route('book.index') }}" class="btn btn-secondary mt-3">Kembali ke Daftar Buku</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection