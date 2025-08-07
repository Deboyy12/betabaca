@extends('layouts.app')

@section('title', isset($buku) ? 'Edit Buku' : 'Tambah Buku')

@section('content')
<div class="card p-4">
    <h2 class="mb-4">{{ isset($buku) ? 'Edit Buku' : 'Tambah Buku' }}</h2>
    @include('partials.admin._form_buku')
</div>
@endsection
