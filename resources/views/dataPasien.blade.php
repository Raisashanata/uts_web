@extends('template.header')
@section('content')

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title mb-0">Data Pasien</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="text-center" style="background-color: #96C9F4;">
                        <tr>
                            <th scope="col">NAMA PASIEN</th>
                            <th scope="col">TTL</th>
                            <th scope="col">JENIS KELAMIN</th>
                            <th scope="col">ALAMAT</th>
                            <th scope="col">NO HP PASIEN</th>
                            <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($DataPasien as $urai)
                        <tr>
                            <td>{{$urai->nama_pasien}}</td>
                            <td>{{$urai->ttl}}</td>
                            <td>{{$urai->jk}}</td>
                            <td>{{$urai->alamat}}</td>
                            <td>{{$urai->telepon}}</td>
                            <td class="text-center">
                            <a href="{{route('EditPasien', $urai->id)}}" class="btn btn-info btn-sm"><i class="fas fa-trash-alt"></i>Edit</a>
                                <a onclick="return confirm('Apakah Anda yakin ingin menghapus?')" href="{{route('HapusPasien', $urai->id)}}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

@endsection
