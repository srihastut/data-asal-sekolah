@extends('layout/aplikasi')

@section('konten')
    <a href="/data_asal_sekolah" class="btn btn-secondary"><< kembali</a>
    <form method="post" action="{{ url('/data_asal_sekolah/'.$data->kode_asal_sekolah) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <h1>Kode Asal Sekolah: {{$data->kode_asal_sekolah}}</h1>
        </div>
        <div class="mb-3">
            <label for="nama_asal_sekolah" class="form-label">Nama Asal Sekolah</label>
            <input type="text" class="form-control" name="nama_asal_sekolah" id="nama_asal_sekolah" value="{{$data->nama_asal_sekolah}}">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" id="deskripsi" value="{{ $data->deskripsi}}">
        </div>
        <div class="mb-3">
            <label for="kota_asal_sekolah" class="form-label">Kota Asal Sekolah</label>
            <input type="text" class="form-control" name="kota_asal_sekolah" id="kota_asal_sekolah" value="{{ $data->kota_asal_sekolah }}">
        </div>
        <div class="mb-3">
            <label for="provinsi_asal_sekolah" class="form-label">Provinsi Asal Sekolah</label>
            <textarea class="form-control" name="provinsi_asal_sekolah">{{$data->provinsi_asal_sekolah }}</textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">UPDATE</button>
        </div>
    </form>
@endsection
