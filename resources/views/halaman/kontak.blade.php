@extends('layout/aplikasi')

@section('konten')
<h1>{{$judul}}</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum iure laborum saepe inventore? Molestias quae odit incidunt inventore necessitatibus eum.</p>
<p>
    <ul>
        <li>Email: {{$kontak['email']}}</li>
        <li>Youtube: {{$kontak['youtube']}}</li>
    </ul>
</p>
@endsection