@extends('layout/aplikasi')

@section('konten')
<!-- FORM PENCARIAN -->
<div class="pb-3">
    <form class="d-flex" action="{{url('data_asal_sekolah')}}" method="get">
        <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
        <button class="btn btn-secondary" type="submit">Cari</button>
    </form>
  </div>
    <a href="/data_asal_sekolah/create" class="btn btn-primary mb-2">+ Tambah Data Asal Sekolah</a>
    <table class="table">
        <thead>
            <tr>
                <th>Kode Asal Sekolah</th>
                <th>Nama Asal Sekolah</th>
                <th>Deskripsi</th>
                <th>Kota Asal Sekolah</th>
                <th>Provinsi Asal Sekolah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->kode_asal_sekolah }}</td>
                    <td>{{ $item->nama_asal_sekolah }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>{{ $item->kota_asal_sekolah }}</td>
                    <td>{{ $item->provinsi_asal_sekolah }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class='btn btn-secondary btn-sm' href="{{ url('/data_asal_sekolah/'.$item->kode_asal_sekolah) }}">Detail</a>
                            <a class='btn btn-warning btn-sm' href="{{ url('/data_asal_sekolah/'.$item->kode_asal_sekolah.'/edit') }}">Edit</a>
                            <form onsubmit="return confirm('Apakah ingin menghapus data')" class='d-inline' action="{{ '/data_asal_sekolah/'.$item->kode_asal_sekolah }}" method='post'>
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm ml-1" type="submit">Del</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->withQueryString()->links() }}
@endsection
