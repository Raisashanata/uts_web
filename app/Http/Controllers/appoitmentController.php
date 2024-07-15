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
    }

    //public function DataAppoitment(){
    //    $paket['judul'] = "Data Appoitment";
    //   $paket["DataAppoitment"] = appoitmentModel::All();
    //    return view("DataAppoitment",$paket);
    //}

    public function HapusAppoitment($id){
        $data = appoitmentModel::find($id);
        $data->delete();
        return redirect()->route('DataAppoitment');
    }
}
