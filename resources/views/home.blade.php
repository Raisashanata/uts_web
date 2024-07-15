@extends('template.header')
@section('content')
<div class="card mb-3">
  <img src="https://images.bisnis.com/posts/2023/01/29/1622561/mitra-keluarga_240821.jpg" class="card-img-top" alt="...">
  <div class="card-body text-center">
  <main role="main" class="px-md-4">
    <div class="d-flex justify-content-between flex-wrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 text-center w-100">RUMAH SAKIT MITRA</h1>
    </div>

    <div class="row mx-auto">
        <div class="col-md-4 mb-3 mx-auto">
            <div class="card" style="background-color: #96C9F4;">
                <div class="card-header">
                    PASIEN
                </div>
                <div class="card-body text-center">
                    <a href="{{route('DataPasien')}}" class="btn"><h1>{{$hitung1}}</h1></a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3 mx-auto">
            <div class="card" style="background-color: #96C9F4;">
                <div class="card-header">
                    DOKTER
                </div>
                <div class="card-body text-center">
                    <a href="{{route('DataDokter')}}" class="btn"><h1>{{$hitung2}}</h1></a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3 mx-auto">
            <div class="card" style="background-color: #96C9F4;">
                <div class="card-header">
                    APPOITMENT
                </div>
                <div class="card-body text-center">
                    <a href="{{route('DataAppoitment')}}" class="btn"><h1>{{$hitung3}}</h1></a>
                </div>
            </div>
        </div>
    </div>
</main>

</div>
    <p class="card-text"><small class="text-muted">***</small></p>
  </div>
@endsection

