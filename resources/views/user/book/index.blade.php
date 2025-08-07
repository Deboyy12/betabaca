@extends('user.layouts.app')

@section('title', 'Daftar Buku')

@section('content')
<section class="py-5">
    <div class="container">
        <h2 class="mb-4 text-center">Daftar Buku</h2>
        <div class="row">
            @forelse ($books as $book)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        @if($book->cover)
                            <img src="{{ asset('storage/' . $book->cover) }}" class="card-img-top" alt="{{ $book->judul }}">
                        @else
                            <img src="https://via.placeholder.com/300x300?text=No+Image" class="card-img-top" alt="No Image">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->judul }}</h5>
                            <p class="mb-1"><strong>Nama Buku:</strong> {{ $book->nama_buku }}</p>
                            <p class="mb-1"><strong>Penulis:</strong> {{ $book->penulis }}</p>
                            <p class="mb-1"><strong>Tahun:</strong> {{ $book->tahun_terbit }}</p>
                            <p class="mb-1"><strong>Penerbit:</strong> {{ $book->penerbit }}</p>
                            <p class="mb-1"><strong>Kategori:</strong> {{ $book->kategori }}</p>
                        </div>
                        <div class="card-footer bg-transparent border-top-0 text-center">
                            @if($book->file_pdf)
                                <a href="{{ asset('storage/' . $book->file_pdf) }}" 
                                   class="btn btn-primary btn-sm w-100" 
                                   target="_blank">
                                   📖 Baca Buku
                                </a>
                            @else
                                <button class="btn btn-secondary btn-sm w-100" disabled>
                                    PDF Tidak Tersedia
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p>Tidak ada buku tersedia saat ini.</p>
                </div>
            @endforelse
        </div>
        <div class="d-flex justify-content-center mt-4">
            {{ $books->links() }}
        </div>
    </div>
</section>
@endsection