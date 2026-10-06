@extends('layouts.app')
@section('content')
<div class="d-flex min-vh-100 bg-light">
    <!-- SIDEBAR -->
    <div class="bg-dark text-white d-flex flex-column p-3"
        style="width: 220px;">
        <!-- Logo -->
        <div class="d-flex align-items-center gap-2 mb-4">
            <div class="bg-white text-primary rounded-2 d-flex justify-content-center align-items-center"
                style="width: 28px; height: 28px;">
                <i class="bi bi-x-circle"></i>
            </div>
            <div>
                <div class="fw-bold" style="font-size: 13px;">
                    SIK RT 04/11
                </div>
                <small class="text-secondary" style="font-size: 7px;">
                    Sistem Informasi Kependudukan
                </small>
            </div>
        </div>
        <!-- Menu -->
        <div class="d-flex flex-column gap-2">
            <a href="{{ route('dashboard.store')}}" class="text-white text-decoration-none rounded-2 px-3 py-2 bg-primary">
                <i class="bi bi-grid me-2"></i>
                <small>Dashboard</small>
            </a>
            <a href="{{ route('data-warga') }}" class="text-secondary text-decoration-none rounded-2 px-3 py-2">
                <i class="bi bi-people me-2"></i>
                <small>Data Warga</small>
            </a>
            <a href="#" class="text-secondary text-decoration-none rounded-2 px-3 py-2">
                <i class="bi bi-map me-2"></i>
                <small>Peta Komplek</small>
            </a>
            <a href="#" class="text-secondary text-decoration-none rounded-2 px-3 py-2">
                <i class="bi bi-shield me-2"></i>
                <small>Admin</small>
            </a>
        </div>
        <!-- Admin -->
        <div class="mt-auto border-top border-secondary pt-3">
            <div class="d-flex align-items-center gap-2">
                <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                    style="width: 28px; height: 28px; font-size: 13px;">
                    AD
                </div>
                <div>
                    <div class="text-white" style="font-size: 14px;">
                        Admin RT 04
                    </div>
                    <small class="text-secondary" style="font-size: 11px;">
                        Gemilang Property Lido
                    </small>
                </div>
            </div>
        </div>
    </div>




    <!-- MAIN CONTENT -->
    <div class="flex-grow-1">
        <!-- TOPBAR -->
        <div class="bg-white border-bottom d-flex justify-content-between align-items-center px-4"
            style="height: 56px;">
            <h5 class="fw-bold mb-0">
                Dashboard Utama
            </h5>
            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-light rounded-circle">
                    <i class="bi bi-bell"></i>
                </button>
                <div class="text-end">
                    <div class="fw-semibold" style="font-size: 11px;">
                        Arya Ramdani
                    </div>
                    <small class="text-secondary" style="font-size: 9px;">
                        Ketua RT 04
                    </small>
                </div>
            </div>
        </div>
        <!-- CONTENT -->
        <div class="p-4">
            <!-- Greeting -->
            <div class="mb-3">
                <h4 class="fw-bold mb-1">
                    Selamat Datang, Admin!
                </h4>
                <p class="text-secondary small mb-0">
                    Pantau data kependudukan dan sebaran warga komplek
                    RT 04 RW 11 dengan mudah hari ini.
                </p>
            </div>
            <!-- STATISTIK -->
            <div class="row g-4 mb-3">
                <!-- Total Warga -->
                <div class="col-md-3">
                    <div class="card border rounded-3 shadow-sm">
                        <div class="card-body d-flex align-items-center gap-3 p-4">
                            <div class="bg-primary-subtle text-primary rounded-3 p-2">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <div>
                                <small class="text-secondary">
                                    Total Warga
                                </small>
                                <h5 class="fw-bold mb-0">
                                    150 Orang
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Total Rumah -->
                <div class="col-md-3">
                    <div class="card border rounded-3 shadow-sm">
                        <div class="card-body d-flex align-items-center gap-3 p-4">
                            <div class="bg-success-subtle text-success rounded-3 p-2">
                                <i class="fa-solid fa-house"></i>
                            </div>
                            <div>
                                <small class="text-secondary">
                                    Total Rumah
                                </small>
                                <h5 class="fw-bold mb-0">
                                    150 Unit
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Total KK -->
                <div class="col-md-3">
                    <div class="card border rounded-3 shadow-sm">
                        <div class="card-body d-flex align-items-center gap-3 p-4">
                            <div class="bg-warning-subtle text-warning rounded-3 p-2">
                                <i class="fa-regular fa-address-card"></i>
                            </div>
                            <div>
                                <small class="text-secondary">
                                    Total KK
                                </small>
                                <h5 class="fw-bold mb-0">
                                    80 Keluarga
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Komplek -->
                <div class="col-md-3">
                    <div class="card border rounded-3 shadow-sm">
                        <div class="card-body d-flex align-items-center gap-3 p-4">
                            <div class="bg-purple-subtle text-purple rounded-3 p-2">
                                <i class="fa-vellum fa-solid fa-house"></i>
                            </div>
                            <div>
                                <small class="text-secondary">
                                    Komplek Wilayah
                                </small>
                                <h5 class="fw-bold mb-0">
                                    3 Blok (E1-E3)
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PENCARIAN -->
            <div class="card border rounded-3 shadow-sm mb-3">
                <div class="card-body p-4">
                    <h6 class="fw-bold mb-3">
                        Pencarian Cepat Warga
                    </h6>
                    <div class="d-flex gap-2">
                        <div class="input-group">
                            <span class="input-group-text bg-white">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </span>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Cari nama warga, NIK, atau nomor KK..."
                            >
                        </div>
                        <button class="btn btn-primary px-4">
                            Cari
                        </button>
                    </div>
                </div>
            </div>
            <!-- AKSES CEPAT -->
            <!-- AKSES CEPAT -->
<h6 class="fw-bold mb-3">
    Akses Cepat Menu
</h6>

<div class="row g-3">

    <!-- Data Warga -->
    <div class="col-md-6">
        <div class="card border rounded-3 shadow-sm h-100">
            <div class="card-body p-4">

                <div class="bg-primary-subtle text-primary rounded-3
                            d-flex justify-content-center align-items-center mb-3"
                     style="width: 40px; height: 40px;">
                    <i class="bi bi-people fs-5"></i>
                </div>

                <h6 class="fw-bold mb-2">
                    Kelola Data Warga
                </h6>

                <p class="text-secondary small mb-4">
                    Lihat, tambah, edit, atau hapus database warga
                    RT 04 yang tinggal di blok E1, E2, dan E3.
                </p>

                <a href="#" class="text-primary text-decoration-none
                                   small fw-semibold">
                    Buka Data Warga
                    <i class="bi bi-chevron-right ms-1"></i>
                </a>

            </div>
        </div>
    </div>


    <!-- Peta -->
    <div class="col-md-6">
        <div class="card border rounded-3 shadow-sm h-100">
            <div class="card-body p-4">

                <div class="bg-success-subtle text-success rounded-3
                            d-flex justify-content-center align-items-center mb-3"
                    style="width: 40px; height: 40px;">
                    <i class="bi bi-map fs-5"></i>
                </div>

                <h6 class="fw-bold mb-2">
                    Peta Komplek Rumah
                </h6>

                <p class="text-secondary small mb-4">
                    Visualisasikan peta letak rumah warga di sepanjang
                    blok RT 04 RW 11 untuk monitoring wilayah.
                </p>

                <a href="#" class="text-success text-decoration-none
                                small fw-semibold">
                    Buka Peta Komplek
                    <i class="bi bi-chevron-right ms-1"></i>
                </a>

            </div>
        </div>
    </div>

</div>

@endsection()

