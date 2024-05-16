@extends('layout/aplikasi')

@section('konten')
    <div>
        <a href='/data_asal_sekolah' class="btn btn-secondary"><< Kembali</a>
        <h1>{{$data->nama}}</h1>
        <p>
            <b>Kode Asal Sekolah</b> {{$data->kode_asal_sekolah}}
        </p>
        <p>
            <b>Nama Asal Sekolah</b> {{$data->nama_asal_sekolah}}
        </p>
        <!-- Perbaikan: Ubah $jenis->jenis_asal_sekolah menjadi $jenis->jenis -->
        <p>
            <b>Jenis Asal Sekolah</b> {{$jenis->jenis}}
        </p>
        <p>
            <b>Deskripsi</b> {{$data->deskripsi}}
        </p>
        <p>
            <b>Kota Asal Sekolah</b> {{$data->kota_asal_sekolah}}
        </p>
        <p>
            <b>Provinsi Asal Sekolah</b> {{$data->provinsi_asal_sekolah}}
        </p>
    </div>
@endsection
