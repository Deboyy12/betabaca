<table class="table table-bordered table-striped align-middle">
    <thead class="table-light">
        <tr>
            <th class="px-2 text-center">#</th>
            <th class="px-2">Nama Lengkap</th>
            <th class="px-2">Email</th>
            <th class="px-2">Tanggal Daftar</th>
            <th class="px-2 text-end">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($users as $index => $user)
            <tr>
                <td class="px-2 text-center">{{ $index + 1 }}</td>
                <td class="px-2">{{ $user->name }}</td>
                <td class="px-2">{{ $user->email }}</td>
                <td class="px-2">{{ $user->created_at->translatedFormat('d M Y') }}</td>
                <td class="px-2 text-end">
                    {{-- Tombol Hapus Saja --}}
                    @if(Route::has('admin.pembaca.destroy'))
                        <form action="{{ route('admin.pembaca.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Hapus user ini?')">Hapus</button>
                        </form>
                    @endif
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center text-muted">Tidak ada data pembaca.</td>
            </tr>
        @endforelse
    </tbody>
</table>
