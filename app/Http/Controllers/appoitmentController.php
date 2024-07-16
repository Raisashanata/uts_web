<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\appoitmentModel;
use App\Models\pasienModel;
use App\Models\dokterModel;

class appoitmentController extends Controller
{
    public function formAppoitment(){
        $pasien = pasienModel::all();
        $dokter = dokterModel::all();
        return view("formAppoitment")
        ->with('pasien',$pasien)
        ->with('dokter',$dokter);
    }

    public function DataAppoitment(){
        $appoitment['judul'] = "Data Appoitment";
        $appoitment["DataAppoitment"] = appoitmentModel::All();
        return view("DataAppoitment",$appoitment);
    }

    public function SimpanAppoitment(request $request){
        $data = new appoitmentModel;
        $data->nama_pasien = $request->nama_pasien;
        $data->nama_dokter = $request->nama_dokter;
        $data->spesialis = $request->spesialis;
        $data->tanggal = $request->tanggal;
        $data->jam = $request->jam;
        $data->keluhan = $request->keluhan;
        $data->harga = $request->harga;
        $data->obat = $request->obat;
        $data->total = $request->total;
        $data->save();
        return redirect()->route('DataAppoitment')->with('success', 'Appoitment berhasil simpan');
    }

    public function HapusAppoitment($id){
        $data = appoitmentModel::find($id);
        $data->delete();
        return redirect()->route('DataAppoitment');
        #return view("DataAppoitment", $appoitment);
    }

    public function EditAppoitment($id){
        $editA= appoitmentModel::findOrFail($id);
        $pasien = pasienModel::all();
        $dokter = dokterModel::all();
        return view("EditAppoitment", compact('editA'))
        ->with('pasien',$pasien)
        ->with('dokter',$dokter);
    }


    public function UpdateAppoitment(request $request, $id){
        $editA = appoitmentModel::findOrFail($id);
        $editA->nama_pasien = $request->nama_pasien;
        $editA->nama_dokter = $request->nama_dokter;
        $editA->spesialis = $request->spesialis;
        $editA->tanggal = $request->tanggal;
        $editA->jam = $request->jam;
        $editA->keluhan = $request->keluhan;
        $editA->harga = $request->harga;
        $editA->obat = $request->obat;
        $editA->total = $request->total;
        $editA->save();
        return redirect()->route('DataAppoitment')->with('success', 'Appoitment berhasil diperbarui');
    }
}
