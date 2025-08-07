@extends('layouts.app')

@section('title', 'Daftar Pembaca')
@section('content')
<div class="container">
    <h3 class="mb-3">Daftar Pembaca</h3>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Panggil partials --}}
    @include('partials.tabel-pembaca', ['users' => $users])
</div>
@endsection
