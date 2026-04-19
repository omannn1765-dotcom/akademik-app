@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 shadow-lg overflow-hidden" style="border-radius: 15px;">
                <div class="card-header bg-primary bg-gradient py-4 text-white text-center">
                    <h2 class="fw-bold mb-0">Informasi Mahasiswa</h2>
                </div>

                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        <div class="rounded-circle bg-light d-inline-flex align-items-center justify-content-center shadow-sm" 
                             style="width: 100px; height: 100px; border: 3px solid #f8f9fa;">
                            <i class="bi bi-person-fill text-secondary" style="font-size: 3rem;"></i>
                        </div>
                    </div>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 py-3">
                            <span class="text-muted"><i class="bi bi-person me-2"></i>Nama Lengkap</span>
                            <span class="fw-bold text-dark">Abdur Rohman</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 py-3">
                            <span class="text-muted"><i class="bi bi-card-text me-2"></i>NIM</span>
                            <span class="badge bg-info text-dark rounded-pill px-3 py-2 fw-semibold">2410047</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 py-3">
                            <span class="text-muted"><i class="bi bi-mortarboard me-2"></i>Program Studi</span>
                            <span class="fw-bold text-dark">Teknik Informatika</span>
                        </li>
                    </ul>
                </div>

                <div class="card-footer bg-light border-0 py-3 text-center">
                    <small class="text-muted italic">Sistem Informasi Akademik &copy; {{ date('Y') }}</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection