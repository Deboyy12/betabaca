<form action="{{ isset($buku) ? route('buku.update', $buku->id) : route('buku.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if(isset($buku)) @method('PUT') @endif

    <div class="mb-3">
        <label for="nama_buku" class="form-label">Nama Buku</label>
        <input type="text" name="nama_buku" id="nama_buku" class="form-control" value="{{ old('nama_buku', $buku->nama_buku ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label for="penulis" class="form-label">Penulis</label>
        <input type="text" name="penulis" id="penulis" class="form-control" value="{{ old('penulis', $buku->penulis ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
        <input type="number" name="tahun_terbit" id="tahun_terbit" class="form-control" value="{{ old('tahun_terbit', $buku->tahun_terbit ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label for="penerbit" class="form-label">Penerbit</label>
        <input type="text" name="penerbit" id="penerbit" class="form-control" value="{{ old('penerbit', $buku->penerbit ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label for="kategori" class="form-label">Kategori</label>
        <select name="kategori" id="kategori" class="form-select" required>
            <option value="">-- Pilih Kategori --</option>
            @foreach($kategori as $k)
                <option value="{{ $k }}" {{ (old('kategori', $buku->kategori ?? '') == $k) ? 'selected' : '' }}>{{ $k }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="cover" class="form-label">Gambar Sampul</label>
        <input type="file" name="cover" id="cover" class="form-control" accept="image/*">
        @if(isset($buku) && $buku->covers)
            <p class="mt-2">Gambar saat ini: <a href="{{ Storage::url($buku->cover) }}" target="_blank">Lihat</a></p>
        @endif
    </div>

    <div class="mb-3">
        <label for="file_pdf" class="form-label">File PDF Buku</label>
        <input type="file" name="file_pdf" id="file_pdf" class="form-control" accept="application/pdf">
        @if(isset($buku) && $buku->file_pdf)
            <p class="mt-2">File PDF saat ini: <a href="{{ Storage::url($buku->file_pdf) }}" target="_blank">Unduh</a></p>
        @endif
    </div>

    <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-primary">
            <i class="ti ti-device-floppy me-1"></i> Simpan
        </button>
    </div>
</form>
