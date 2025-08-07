@extends('user.layouts.app')

@section('title', 'Dashboard')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Dashboard') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Selamat datang di Dashboard, {{ Auth::user()->name }}!
                </div>
            </div>

            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Contoh Card 1 -->
                <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Profil</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mt-2">Lihat dan ubah informasi profil Anda.</p>
                </div>

                <!-- Contoh Card 2 -->
                <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Riwayat</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mt-2">Lihat aktivitas atau pemesanan sebelumnya.</p>
                </div>

                <!-- Contoh Card 3 -->
                <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Pengaturan</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mt-2">Kelola pengaturan akun dan notifikasi.</p>
                </div>

            </div>

        </div>
    </div>
@endsection
