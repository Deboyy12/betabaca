@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow rounded">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Edit Data Buku</h4>
        </div>
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('buku.update', $buku->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nama_buku" class="form-label">Nama Buku</label>
                    <input type="text" class="form-control" name="nama_buku" id="nama_buku"
                        value="{{ old('nama_buku', $buku->nama_buku) }}" required>
                </div>

                <div class="mb-3">
                    <label for="penulis" class="form-label">Penulis</label>
                    <input type="text" class="form-control" name="penulis" id="penulis"
                        value="{{ old('penulis', $buku->penulis) }}" required>
                </div>

                <div class="mb-3">
                    <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                    <input type="number" class="form-control" name="tahun_terbit" id="tahun_terbit"
                        value="{{ old('tahun_terbit', $buku->tahun_terbit) }}" required>
                </div>

                <div class="mb-3">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" name="penerbit" id="penerbit"
                        value="{{ old('penerbit', $buku->penerbit) }}" required>
                </div>

                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    @php
                        $kategoriList = ['Pendidikan', 'Novel', 'Komik', 'Manga', 'Sains', 'Teknologi', 'Religi', 'Sejarah'];
                    @endphp
                    <select class="form-select" name="kategori" id="kategori" required>
                        @foreach ($kategoriList as $kategori)
                            <option value="{{ $kategori }}"
                                {{ old('kategori', $buku->kategori) == $kategori ? 'selected' : '' }}>
                                {{ $kategori }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="cover" class="form-label">Gambar Sampul</label>
                    <input type="file" class="form-control" name="cover" id="cover">
                    @if ($buku->covers)
                        <div class="mt-2">
                            <p>Gambar saat ini:</p>
                            <img src="{{ Storage::url($buku->cover) }}" alt="Sampul Buku" class="img-thumbnail" style="max-height: 150px;">
                        </div>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="file_pdf" class="form-label">File PDF</label>
                    <input type="file" class="form-control" name="file_pdf" id="file_pdf">
                    @if ($buku->file_pdf)
                        <div class="mt-2">
                            <p>File saat ini: <a href="{{ Storage::url($buku->file_pdf) }}" target="_blank">Lihat PDF</a></p>
                        </div>
                    @endif
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('buku.index') }}" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
