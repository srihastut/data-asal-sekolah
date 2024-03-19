@extends('layout/aplikasi')

@section('konten')
<div class="d-flex align-items-center justify-content-center vh-100" style="background-image: url('https://images.pexels.com/photos/399160/pexels-photo-399160.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
    <div class="w-50 center border rouded px-3 py-3 mx-auto">
        <a href="/sesi" class="btn btn-secondary"><< kembali</a>
        <h1>Register</h1>
        <form action="/sesi/create"method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" value="{{Session::get('name')}}" name="name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" value="{{Session::get('email')}}" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="mb-3 d-grid">
            <button name="submit" type="submit" class="btn btn-primary">Register</button>
        </div>
        </form>
    </div>
@endsection