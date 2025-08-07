@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
<div class="container">
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
                    {{-- Komponen partial tabel buku --}}
                    @include('partials.buku-table')

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
