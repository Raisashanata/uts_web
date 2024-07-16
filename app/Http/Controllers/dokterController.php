<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dokterModel;

class dokterController extends Controller
{
    public function formDokter(){
        $paket['judul'] = "Form Dokter";
        return view("formDokter", $paket);
    }

    public function SimpanDokter(request $request){
        $data = new dokterModel;
        $data->nama_dokter = $request->nama_dokter;
        $data->jk = $request->jk;
        $data->spesialis = $request->spesialis;
        $data->alumni = $request->alumni;
        $data->harga = $request->harga;
        $data->save();
        return redirect()->route('DataDokter')->with('success', 'Data Dokter Berhasil Disimpan');
    }

    public function DataDokter(){
        $dokter['judul'] = "Data Dokter";
        $dokter["DataDokter"] = dokterModel::All();
        return view("DataDokter",$dokter);
    }

    public function HapusDokter($id){
        $data = dokterModel::find($id);
        $data->delete();
        return redirect()->route('DataDokter');
    }
    

    public function EditDokter($id){
        $editD = dokterModel::findOrFail($id);
        return view("EditDokter", compact('editD'));
    }

    public function UpdateDokter(request $request, $id){
        $editD = dokterModel::findOrFail($id);
        $editD->nama_dokter = $request->nama_dokter;
        $editD->jk = $request->jk;
        $editD->spesialis = $request->spesialis;
        $editD->alumni = $request->alumni;
        $editD->harga = $request->harga;
        $editD->save();
        return redirect()->route('DataDokter')->with('success', 'Pengguna berhasil diperbarui');
    }
}
