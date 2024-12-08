@extends('layouts.app') {{-- Menggunakan layout utama --}}

@section('title', 'Login - KopiKita') {{-- Judul Halaman --}}

@section('content')
<div class="container">
    <h1>KopiKita</h1>

    {{-- Menampilkan pesan error jika ada --}}
    @if(session('error'))
        <p class="error">{{ session('error') }}</p>
    @endif

    {{-- Form Login --}}
    <form method="POST" action="{{ route('login') }}"> {{-- Form akan dikirim ke rute login --}}
        @csrf {{-- Token keamanan Laravel --}}
        <div class="input-group">
            <label for="email">Email</label>
            <input
                type="email"
                id="email"
                name="email"
                placeholder="Masukkan email"
                value="{{ old('email') }}" {{-- Menampilkan input email sebelumnya jika ada error --}}
                required>
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input
                type="password"
                id="password"
                name="password"
                placeholder="Masukkan password"
                required>
        </div>
        <button type="submit" class="btn">Login</button>
    </form>

    <p class="redirect-text">
        Belum punya akun? <a href="{{ route('register') }}">Daftar</a> {{-- Link ke halaman register --}}
    </p>
</div>
@endsection
