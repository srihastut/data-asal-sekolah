@extends('layout/aplikasi')

@section('konten')
    <form method="post" action="{{ url('/data_asal_sekolah/' . $data->kode_asal_sekolah) }}">
        @csrf
        @method('PUT') <!-- Perhatikan ini untuk menggunakan metode PUT dalam formulir edit -->

        <div class="mb-3">
            <label for="kode_asal_sekolah" class="form-label">Kode Asal Sekolah</label>
            <input type="text" class="form-control" name="kode_asal_sekolah" id="kode_asal_sekolah" value="{{ $data->kode_asal_sekolah }}">
        </div>
        <div class="mb-3">
            <label for="nama_asal_sekolah" class="form-label">Nama Asal Sekolah</label>
            <input type="text" class="form-control" name="nama_asal_sekolah" id="nama_asal_sekolah" value="{{ $data->nama_asal_sekolah }}">
        </div>
        <div class="form-group">
            <label for="jenis_asal_sekolah" class="form-label">Jenis Asal Sekolah</label>
            <select class="form-control select2" style="width: 100%;" name="jenis_asal_sekolah" id="jenis_asal_sekolah">
                <option disabled>Pilih Jenis asal sekolah</option>
                @foreach ($jenis as $item)
                    <!-- Perhatikan penambahan selected jika jenis_asal_sekolah sama dengan jenis yang sedang di-loop -->
                    <option value="{{ $item->id }}" {{ $item->id == $data->jenis_asal_sekolah ? 'selected' : '' }}>{{ $item->jenis }}</option>
                @endforeach
            </select>
        </div>        
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" id="deskripsi" value="{{ $data->deskripsi }}">
        </div>
        <div class="mb-3">
            <label for="kota_asal_sekolah" class="form-label">Kota Asal Sekolah</label>
            <input type="text" class="form-control" name="kota_asal_sekolah" id="kota_asal_sekolah" value="{{ $data->kota_asal_sekolah }}">
        </div>
        <div class="mb-3">
            <label for="provinsi_asal_sekolah" class="form-label">Provinsi Asal Sekolah</label>
            <textarea class="form-control" name="provinsi_asal_sekolah">{{ $data->provinsi_asal_sekolah }}</textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </div>
    </form>
@endsection
