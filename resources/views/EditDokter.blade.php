@extends('template.header')
@section('content')

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title mb-0">Edit Dokter Baru</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('UpdateDokter', $editD->id) }}">
                @csrf
                <div class="mb-3">
                    <label for="nama_dokter" class="form-label"><i class="fas fa-user-md"></i> Nama Dokter</label>
                    <input type="text" name="nama_dokter" class="form-control" id="nama_dokter" required>
                </div>
                <div class="mb-3">
                    <label for="jk" class="form-label"><i class="fas fa-venus-mars"></i> Jenis Kelamin</label>
                    <select name="jk" class="form-select form-control" id="jk" required>
                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="spesialis" class="form-label"><i class="fas fa-stethoscope"></i> Spesialis</label>
                    <input type="text" name="spesialis" class="form-control" id="spesialis" required>
                </div>
                <div class="mb-3">
                    <label for="alumni" class="form-label"><i class="fas fa-graduation-cap"></i> Alumni</label>
                    <input type="text" name="alumni" class="form-control" id="alumni" required>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label"><i class="fas fa-money-bill-wave"></i> Harga</label>
                    <input type="number" name="harga" class="form-control" id="harga" required>
                </div>
                <button type="submit" class="btn btn-primary w-100"><i class="fas fa-save"></i> Simpan</button>
            </form>
        </div>
    </div>
</div>

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

@endsection
