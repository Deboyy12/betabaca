<div class="row">
    <div class="col-12">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="d-md-flex align-items-center mb-3">
                    <div>
                        <h5 class="card-title mb-0">Data Buku</h5>
                        <span class="text-muted">Koleksi Beta Baca</span>
                    </div>
                    <div class="ms-auto">
                        <a href="{{ route('buku.create') }}" class="btn btn-primary">+ Tambah Buku</a>
                    </div>
                </div>
                <div class="table-responsive mt-4">
                    <table class="table mb-0 text-nowrap varient-table align-middle fs-3">
                        <thead>
                            <tr>
                                <th class="px-0 text-muted">#</th>
                                <th class="px-0 text-muted">Nama Buku</th>
                                <th class="px-0 text-muted">Penulis</th>
                                <th class="px-0 text-muted">Tahun Terbit</th>
                                <th class="px-0 text-muted">Penerbit</th>
                                <th class="px-0 text-muted">Kategori</th>
                                <th class="px-0 text-muted">Cover</th>
                                <th class="px-0 text-muted">Buku</th>
                                <th class="px-0 text-muted text-end">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($bukus as $index => $buku)
                                <tr>
                                    <td class="px-0">{{ $index + 1 }}</td>
                                    <td class="px-0">{{ $buku->nama_buku }}</td>
                                    <td class="px-0">{{ $buku->penulis }}</td>
                                    <td class="px-0">{{ $buku->tahun_terbit }}</td>
                                    <td class="px-0">{{ $buku->penerbit }}</td>
                                    <td class="px-0">
                                        <span class="badge bg-info">{{ $buku->kategori }}</span>
                                    </td>
                                    <td class="px-0">
                                        @if ($buku->cover)
                                            <img src="{{ Storage::url($buku->cover) }}" alt="Cover"
                                                style="width: 50px; height: auto;">
                                        @else
                                            <span class="text-muted">Tidak ada</span>
                                        @endif
                                    </td>
                                    <td class="px-0">
                                        @if ($buku->file_pdf)
                                            <a href="{{ Storage::url($buku->file_pdf) }}" target="_blank"
                                                class="btn btn-sm btn-info">Lihat PDF</a>
                                        @else
                                            <span class="text-muted">Tidak ada</span>
                                        @endif
                                    </td>
                                    <td class="px-0 text-end">
                                        <a href="{{ route('buku.edit', $buku->id) }}"
                                            class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('buku.destroy', $buku->id) }}" method="POST"
                                            style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Hapus buku ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center">Tidak ada data buku.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>