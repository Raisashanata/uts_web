<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #488ac7;">
    <div class="container-fluid">
        <a class="navbar-brand text-white fw-bold" href="{{ route('home') }}">HOME</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('formDokter') }}">Form Dokter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('formPasien') }}">Form Pasien</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('formAppoitment') }}">Form Appointment</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
