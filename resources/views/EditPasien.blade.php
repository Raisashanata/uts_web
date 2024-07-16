@extends('template.header')
@section('content')

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title mb-0">Edit Pasien Baru</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('UpdatePasien', $editP->id) }}">
                @csrf
                <div class="mb-3">
                    <label for="nama_pasien" class="form-label"><i class="fas fa-user"></i> Nama Pasien</label>
                    <input type="text" name="nama_pasien" class="form-control" id="nama_pasien" required>
                </div>
                <div class="mb-3">
                    <label for="ttl" class="form-label"><i class="fas fa-calendar-alt"></i> Tanggal Lahir</label>
                    <input type="date" name="ttl" class="form-control" id="ttl" required>
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
                    <label for="alamat" class="form-label"><i class="fas fa-map-marker-alt"></i> Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" required>
                </div>
                <div class="mb-3">
                    <label for="telepon" class="form-label"><i class="fas fa-phone"></i> No HP Pasien</label>
                    <input type="tel" name="telepon" class="form-control" id="telepon" required>
                </div>
                <button type="submit" class="btn btn-primary w-100"><i class="fas fa-save"></i> Simpan</button>
            </form>
        </div>
    </div>
</div>

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

@endsection
