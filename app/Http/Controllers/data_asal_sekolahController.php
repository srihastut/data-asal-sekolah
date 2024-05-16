<?php

namespace App\Http\Controllers;

use App\Models\data_asal_sekolah;
use App\Models\jenis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class data_asal_sekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
$jumlahbaris = 10;

if (strlen($katakunci)) {
    $data = data_asal_sekolah::where('kode_asal_sekolah', 'like', "%$katakunci%")
        ->orWhere('nama_asal_sekolah', 'like', "%$katakunci%")
        ->orWhere('jenis_asal_sekolah', 'like', "%$katakunci%")
        ->orWhere('deskripsi', 'like', "%$katakunci%")
        ->orWhere('kota_asal_sekolah', 'like', "%$katakunci%")
        ->orWhere('provinsi_asal_sekolah', 'like', "%$katakunci%")
        ->paginate($jumlahbaris);
} else {
    $data = data_asal_sekolah::with('jenis')->orderBy('kode_asal_sekolah', 'asc')->paginate($jumlahbaris);
}
    return view('data_asal_sekolah.index', compact('data', 'katakunci'));
}

public function cetak()
    {
        $data_asal_sekolah = data_asal_sekolah::with('jenis')->get();
        return view('data_asal_sekolah.cetak', compact('data_asal_sekolah'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jenis = jenis::all();
        return view('data_asal_sekolah.create',compact('jenis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $request->validate([
                'kode_asal_sekolah' => 'required|numeric|unique:data_asal_sekolah',
                'nama_asal_sekolah' => 'required',
                'jenis_asal_sekolah' => 'required',
                'deskripsi' => 'required',
                'kota_asal_sekolah' => 'required',
                'provinsi_asal_sekolah' => 'required',
            ], [
                'kode_asal_sekolah.required' => 'Kode Asal Sekolah Wajib Diisi',
                'kode_asal_sekolah.numeric' => 'Kode Asal Sekolah Wajib Diisi Dalam Format Angka',
                'kode_asal_sekolah.unique' => 'Kode Asal Sekolah Sudah Pernah Digunakan, Silahkan Pilih Kode Yang Lain',
                'nama_asal_sekolah.required' => 'Nama Asal Sekolah Wajib Diisi',
                'jenis_asal_sekolah.required' => 'Jenis Asal Sekolah Wajib Diisi',
                'deskripsi.required' => 'Deskripsi Wajib Diisi',
                'kota_asal_sekolah.required' => 'Kota Asal Sekolah Wajib Diisi',
                'provinsi_asal_sekolah.required' => 'Provinsi Asal Sekolah Wajib Diisi',
            ]);

            $data = [
                'kode_asal_sekolah' => $request->input('kode_asal_sekolah'),
                'nama_asal_sekolah' => $request->input('nama_asal_sekolah'),
                'jenis_asal_sekolah' => $request->input('jenis_asal_sekolah'),
                'deskripsi' => $request->input('deskripsi'),
                'kota_asal_sekolah' => $request->input('kota_asal_sekolah'),
                'provinsi_asal_sekolah' => $request->input('provinsi_asal_sekolah'),
            ];
            $data = $request->only(['kode_asal_sekolah', 'nama_asal_sekolah', 'jenis_asal_sekolah', 'deskripsi', 'kota_asal_sekolah', 'provinsi_asal_sekolah']);


            data_asal_sekolah::create($data);

            return redirect()->route('data_asal_sekolah.index')->with('success', 'Berhasil Memasukkan Data');
    }

    /**
     * Display the specified resource.
     */
    /**
 * Display the specified resource.
 */
public function show(string $id)
{
    $data = data_asal_sekolah::where('kode_asal_sekolah', $id)->firstOrFail();
    // Menggunakan metode 'find' untuk mencari data jenis berdasarkan 'jenis_asal_sekolah'
    $jenis = jenis::find($data->jenis_asal_sekolah);

    return view('data_asal_sekolah.show', compact('data', 'jenis'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jenis = jenis::all();
        $data = data_asal_sekolah::with('jenis')->findOrFail($id);
        return view('data_asal_sekolah.edit', compact('jenis', 'data'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_asal_sekolah' => 'required',
            'jenis_asal_sekolah' => 'required',
            'deskripsi' => 'required',
            'kota_asal_sekolah' => 'required',
            'provinsi_asal_sekolah' => 'required',
        ], [
            'kode_asal_sekolah.numeric' => 'Kode Asal Sekolah Wajib Diisi Dalam Format Angka',
            'nama_asal_sekolah.required' => 'Nama Asal Sekolah Wajib Diisi',
            'jenis_asal_sekolah.required' => 'Jenis Asal Sekolah Wajib Diisi',
            'deskripsi.required' => 'Deskripsi Wajib Diisi',
            'kota_asal_sekolah.required' => 'Kota Asal Sekolah Wajib Diisi',
            'provinsi_asal_sekolah.required' => 'Provinsi Asal Sekolah Wajib Diisi',
        ]);
        $data = [
            'nama_asal_sekolah' => $request->input('nama_asal_sekolah'),
            'jenis_asal_sekolah' => $request->input('jenis_asal_sekolah'),
            'deskripsi' => $request->input('deskripsi'),
            'kota_asal_sekolah' => $request->input('kota_asal_sekolah'),
            'provinsi_asal_sekolah' => $request->input('provinsi_asal_sekolah'),
        ];
        
        data_asal_sekolah::where('kode_asal_sekolah',$id)->update($data);
        return redirect('/data_asal_sekolah')->with('success','Berhasil Melakukan Update Data');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        data_asal_sekolah::where('kode_asal_sekolah',$id)->delete();
        return redirect('/data_asal_sekolah')->with('success','Berhasil Hapus Data');
    }
}
