@extends('template.header')
@section('content')

<table class="table table-bordered table-hover mt-5 table-resposive">
    <thead class="text-center" style="background-color: #96C9F4;">
        <tr>
            <td>NAMA DOKTER</td>
            <td>TANGGAL</td>
            <td>SPESIALIS</td>
            <td>ALUMNI</td>
            <td>HARGA</td>
            <td>URAI</td>
        </tr>
    </thead>

    <tbody>
    @foreach ($DataDokter as $urai)
    <tr>
            <td>{{$urai->nama_dokter}}</td>
            <td>{{$urai->jk}}</td>
            <td>{{$urai->spesialis}}</td>
            <td>{{$urai->alumni}}</td>
            <td>{{$urai->harga}}</td>
            <td>
            <a href="{{route('EditDokter', $urai->id)}}" class="btn btn-info btn-sm"><i class="fas fa-trash-alt"></i>Edit</a>
            <a onclick= "return confirm('anda yakin')" href="{{route('HapusDokter',$urai->id)}}" class="btn btn-danger btn-sm">hapus</a>
            </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection