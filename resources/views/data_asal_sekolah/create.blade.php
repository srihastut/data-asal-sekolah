@extends('layout/aplikasi')

@section('konten')
    <form method="post" action="{{ url('/data_asal_sekolah') }}">
        @csrf
        <div class="mb-3">
            <label for="kode_asal_sekolah" class="form-label">Kode Asal Sekolah</label>
            <input type="text" class="form-control" name="kode_asal_sekolah" id="kode_asal_sekolah" value="{{ old('kode_asal_sekolah') }}">
        </div>
        <div class="mb-3">
            <label for="nama_asal_sekolah" class="form-label">Nama Asal Sekolah</label>
            <input type="text" class="form-control" name="nama_asal_sekolah" id="nama_asal_sekolah" value="{{ old('nama_asal_sekolah') }}">
        </div>
        <div class="form-group">
            <label for="jenis_asal_sekolah" class="form-label">Jenis Asal Sekolah</label>
            <select class="form-control select2" style="width: 100%;" name="jenis_asal_sekolah" id="jenis_asal_sekolah">
                <option disabled selected>Pilih Jenis asal sekolah</option>
                @foreach ($jenis as $item)
                    <option value="{{ $item->id }}">{{ $item->jenis }}</option>
                @endforeach
            </select>
        </div>            
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" id="deskripsi" value="{{ old('deskripsi') }}">
        </div>
        <div class="mb-3">
            <label for="kota_asal_sekolah" class="form-label">Kota Asal Sekolah</label>
            <input type="text" class="form-control" name="kota_asal_sekolah" id="kota_asal_sekolah" value="{{ old('kota_asal_sekolah') }}">
        </div>
        <div class="mb-3">
            <label for="provinsi_asal_sekolah" class="form-label">Provinsi Asal Sekolah</label>
            <textarea class="form-control" name="provinsi_asal_sekolah">{{ old('provinsi_asal_sekolah') }}</textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </div>
    </form>
@endsection
