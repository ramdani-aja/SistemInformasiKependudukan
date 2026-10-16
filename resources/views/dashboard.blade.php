@extends('layouts.app')

@section('title', 'Dashboard - SIK RT 04/11')
@section('page-heading', 'Dashboard Utama')

@section('content')

<div class="p-4">

    {{-- GREETING --}}
    <div class="mb-4">
        <h4 class="fw-bold mb-1">Selamat Datang, Admin!</h4>
        <p class="text-secondary mb-0">
            Pantau data kependudukan dan sebaran warga komplek
            RT 04 RW 11 dengan mudah hari ini.
        </p>
    </div>
    
    {{-- STATISTIK --}}
    <div class="row g-3 mb-4">
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border h-100">
                <div class="card-body p-4 d-flex align-items-center gap-3">
                    <div class="bg-primary-subtle text-primary rounded-3
                                d-flex align-items-center justify-content-center"
                        style="width:48px;height:48px;flex-shrink:0;">
                        <i class="fa-solid fa-users fs-5"></i>
                    </div>
                    <div>
                        <div class="text-secondary small">Total Warga</div>
                        <h4 class="fw-bold mb-0">150 Orang</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border h-100">
                <div class="card-body p-4 d-flex align-items-center gap-3">
                    <div class="bg-success-subtle text-success rounded-3
                                d-flex align-items-center justify-content-center"
                        style="width:48px;height:48px;flex-shrink:0;">
                        <i class="fa-solid fa-house fs-5"></i>
                    </div>
                    <div>
                        <div class="text-secondary small">Total Rumah</div>
                        <h4 class="fw-bold mb-0">150 Unit</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border h-100">
                <div class="card-body p-4 d-flex align-items-center gap-3">
                    <div class="bg-warning-subtle text-warning rounded-3
                                d-flex align-items-center justify-content-center"
                        style="width:48px;height:48px;flex-shrink:0;">
                        <i class="fa-regular fa-address-card fs-5"></i>
                    </div>
                    <div>
                        <div class="text-secondary small">Total KK</div>
                        <h4 class="fw-bold mb-0">80 Keluarga</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border h-100">
                <div class="card-body p-4 d-flex align-items-center gap-3">
                    <div class="bg-info-subtle text-info rounded-3
                                d-flex align-items-center justify-content-center"
                         style="width:48px;height:48px;flex-shrink:0;">
                        <i class="fa-solid fa-map-location-dot fs-5"></i>
                    </div>
                    <div>
                        <div class="text-secondary small">Komplek Wilayah</div>
                        <h4 class="fw-bold mb-0">3 Blok</h4>
                        <small class="text-secondary">E1, E2, dan E3</small>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- PENCARIAN --}}
    <div class="card border mb-4">
        <div class="card-body p-4">

            <h6 class="fw-bold mb-3">Pencarian Cepat Warga</h6>

            <div class="row g-2">
                <div class="col">
                    <div class="input-group">
                        <span class="input-group-text bg-white">
                            <i class="fa-solid fa-magnifying-glass text-secondary"></i>
                        </span>
                        <input type="text"
                               class="form-control"
                               placeholder="Cari nama warga, NIK, atau nomor KK...">
                    </div>
                </div>

                <div class="col-auto">
                    <button type="button" class="btn btn-primary px-4">
                        Cari
                    </button>
                </div>
            </div>

        </div>
    </div>

    {{-- AKSES CEPAT --}}
    <h6 class="fw-bold mb-3">Akses Cepat Menu</h6>

    <div class="row g-3">

        <div class="col-12 col-lg-6">
            <div class="card border h-100">
                <div class="card-body p-4">

                    <div class="bg-primary-subtle text-primary rounded-3
                                d-flex align-items-center justify-content-center mb-3"
                        style="width:48px;height:48px;">
                        <i class="fa-solid fa-users fs-5"></i>
                    </div>

                    <h6 class="fw-bold">Kelola Data Warga</h6>

                    <p class="text-secondary mb-3">
                        Lihat, tambah, edit, dan kelola data warga
                        di komplek E1, E2, dan E3.
                    </p>

                    <a href="{{ route('data-warga.store') }}"
                        class="text-primary text-decoration-none fw-semibold">
                        Buka Data Warga
                        <i class="fa-solid fa-chevron-right ms-1"></i>
                    </a>

                </div>
            </div>
        </div>

        <div class="col-12 col-lg-6">
            <div class="card border h-100">
                <div class="card-body p-4">

                    <div class="bg-success-subtle text-success rounded-3
                                d-flex align-items-center justify-content-center mb-3"
                        style="width:48px;height:48px;">
                        <i class="fa-solid fa-map fs-5"></i>
                    </div>

                    <h6 class="fw-bold">Peta Komplek Rumah</h6>

                    <p class="text-secondary mb-3">
                        Lihat lokasi rumah warga berdasarkan blok
                        E1, E2, dan E3.
                    </p>

                    <a href=""
                        class="text-success text-decoration-none fw-semibold">
                        Buka Peta Komplek
                        <i class="fa-solid fa-chevron-right ms-1"></i>
                    </a>

                </div>
            </div>
        </div>

    </div>

</div>

@endsection
