<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pasienModel;
use App\Models\dokterModel;
use App\Models\appoitmentModel;

class pasienController extends Controller
{
    public function home(){
        $hitung1= pasienModel::count();
        $hitung2= dokterModel::count();
        $hitung3= appoitmentModel::count();
        $paket['judul'] = "home";
        return view("home",compact('hitung1','hitung2','hitung3'));
    }

    public function formPasien(){
        $paket['judul'] = "Form Pasien";
        return view("formPasien", $paket);
    }

    public function SimpanPasien(request $request){
        $data = new pasienModel;
        $data->nama_pasien = $request->nama_pasien;
        $data->ttl = $request->ttl;
        $data->jk = $request->jk;
        $data->alamat = $request->alamat;
        $data->telepon = $request->telepon;
        $data->save();
    }

    public function DataPasien(){
        $pasien['judul'] = "Data Pasien";
        $pasien["DataPasien"] = pasienModel::All();
        return view("DataPasien", $pasien);
    }

    public function HapusPasien($id){
        $data = pasienModel::find($id);
        $data->delete();
        return redirect()->route('DataPasien');
    }

}
