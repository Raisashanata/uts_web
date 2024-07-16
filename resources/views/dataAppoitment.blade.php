@extends('template.header')
@section('content')

<table class="table table-bordered table-hover mt-5 table-resposive">
    <thead class="text-center" style="background-color: #96C9F4;">
        <tr>
            <td>NAMA PASIEN</td>
            <td>NAMA DOKTER</td>
            <td>SPESIALIS</td>
            <td>TANGGAL</td>
            <td>JAM</td>
            <td>KELUHAN</td>
            <td>HARGA</td>
            <td>OBAT</td>
            <td>TOTAL</td>
            <td>URAI</td>
</tr>
    </thead>

    <tbody>
    @foreach ($DataAppoitment as $urai)
    <tr>
            <td>{{$urai->nama_pasien}}</td>
            <td>{{$urai->nama_dokter}}</td>
            <td>{{$urai->spesialis}}</td>
            <td>{{$urai->tanggal}}</td>
            <td>{{$urai->jam}}</td>
            <td>{{$urai->keluhan}}</td>
            <td>{{$urai->harga}}</td>
            <td>{{$urai->obat}}</td>
            <td>{{$urai->total}}</td>
            <td>
            <a href="{{route('EditAppoitment', $urai->id)}}" class="btn btn-info btn-sm"><i class="fas fa-trash-alt"></i>Edit</a>
            <a onclick= "return confirm('anda yakin')" href="{{route('HapusAppoitment',$urai->id)}}" class="btn btn-danger btn-sm">hapus</a>
            </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection