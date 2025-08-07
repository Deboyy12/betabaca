<div class="table-responsive mt-4">
    <table class="table mb-0 text-nowrap varient-table align-middle fs-3">
        <thead>
            <tr>
                <th scope="col" class="px-0 text-muted">Gambar</th>
                <th scope="col" class="px-0 text-muted">Nama Buku</th>
                <th scope="col" class="px-0 text-muted">Penulis</th>
                <th scope="col" class="px-0 text-muted">Tahun</th>
                <th scope="col" class="px-0 text-muted">Penerbit</th>
                <th scope="col" class="px-0 text-muted">Kategori</th>
                <th scope="col" class="px-0 text-muted">File PDF</th>
                <th scope="col" class="px-0 text-muted text-end">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bukus as $buku)
                <tr>
                    <td class="px-0">
                        @if ($buku->cover)
                            <img src="{{ Storage::url($buku->cover) }}" alt="Gambar Buku" width="60">
                        @else
                            <span class="text-muted">Tidak ada</span>
                        @endif
                    </td>
                    <td class="px-0">{{ $buku->nama_buku }}</td>
                    <td class="px-0">{{ $buku->penulis }}</td>
                    <td class="px-0">{{ $buku->tahun_terbit }}</td>
                    <td class="px-0">{{ $buku->penerbit }}</td>
                    <td class="px-0">{{ $buku->kategori }}</td>
                    <td class="px-0">
                        @if ($buku->file_pdf)
                            <a href="{{ Storage::url($buku->file_pdf) }}" target="_blank" class="btn btn-info btn-sm">Lihat PDF</a>
                        @else
                            <span class="text-muted">Tidak ada</span>
                        @endif
                    </td>
                    <td class="px-0 text-end">
                        <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
