@extends('layout/aplikasi')

@section('konten')
    <div class="d-flex align-items-center justify-content-center vh-100" style="background-image: url('https://images.pexels.com/photos/5088017/pexels-photo-5088017.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1=');">
        <div class="w-50 center border rounded px-3 py-3 bg-brown">
            <h1 class="text-center">Login</h1>
            <form action="/sesi/login" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" value="{{ Session::get('email') }}" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="mb-3 d-grid">
                    <button name="submit" type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>

            <div class="text-center">
                <p>Belum punya akun? <a href="/register">Daftar</a></p>
            </div>
        </div>
    </div>
@endsection
