<?php

namespace App\Http\Controllers;

use App\Models\data_asal_sekolah;
use Illuminate\Http\Request;

class data_asal_sekolahController extends Controller
{
    // Index method
    public function index()
    {
        //$data = data_asal_sekolah::all();
        $data = data_asal_sekolah::orderBy('kode_asal_sekolah','desc')->paginate(10);
        return view('data_asal_sekolah/index')->with('data',$data);
    }

    // Detail method with ID parameter
    public function detail($id)
    {
        $data = data_asal_sekolah::where('kode_asal_sekolah',$id)->first();
        return view('data_asal_sekolah/show')->with('data', $data);
    }
    function create(){

    }

    function delete(){
        
    }
}
