@extends('template.header')
@section('content')

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title mb-0">Edit Dokter Baru</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('UpdateAppoitment', $editA->id) }}">
                @csrf
                <div class="mb-3">
                    <label for="nama_pasien" class="form-label">Nama Pasien</label>
                    <select class="form-select form-control" id="nama_pasien" name="nama_pasien" required>
                        <option value="">Pilih Pelanggan</option>
                        @foreach($pasien as $urai)
                            <option value="{{ $urai->nama_pasien }}">{{ $urai->nama_pasien }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="nama_dokter" class="form-label">Nama Dokter</label>
                    <select name="nama_dokter" id="nama_dokter" class="form-select form-control" onchange="updateSpesialisDanHarga()">
                        <option value="">--pilih dokter--</option>
                        @foreach($dokter as $urai)
                            <option value="{{ $urai->nama_dokter }}" data-spesialis="{{ $urai->spesialis }}" data-harga="{{ $urai->harga }}">{{ $urai->nama_dokter }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="spesialis" class="form-label">Spesialis</label>
                    <input type="text" name="spesialis" class="form-control" id="spesialis" readonly>
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" id="tanggal">
                </div>
                <div class="mb-3">
                    <label for="jam" class="form-label">Jam</label>
                    <input type="time" name="jam" class="form-control" id="jam">
                </div>
                <div class="mb-3">
                    <label for="keluhan" class="form-label">Keluhan</label>
                    <input type="text" name="keluhan" class="form-control" id="keluhan">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" name="harga" class="form-control " id="harga" readonly>
                </div>
                <div class="mb-3">
                    <label for="obat" class="form-label">Obat</label>
                    <select name="obat" class="form-select form-control" id="obat" onchange="updateTotal()">
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="total" class="form-label">Total</label>
                    <input type="number" name="total" class="form-control" id="total" readonly>
                </div>
                <button type="submit" class="btn btn-primary w-100">Simpan</button>
            </form>
        </div>
    </div>
</div>

<script>
    var obatPrice = 50000; // Assuming a fixed price for the medication

    function updateSpesialisDanHarga() {
        var select = document.getElementById('nama_dokter');
        var spesialis = select.options[select.selectedIndex].getAttribute('data-spesialis');
        var harga = select.options[select.selectedIndex].getAttribute('data-harga');
        document.getElementById('spesialis').value = spesialis;
        document.getElementById('harga').value = harga;
        updateTotal();
    }

    function updateTotal() {
        var harga = parseFloat(document.getElementById('harga').value) || 0;
        var obat = document.getElementById('obat').value;
        var total;

        if (obat === 'Ya') {
            total = harga + obatPrice;
        } else {
            total = harga;
        }

        document.getElementById('total').value = total;
    }
</script>
@endsection
