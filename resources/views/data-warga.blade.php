@extends('layouts.app')

@section('title', 'Dashboard - SIK RT 04/11')
@section('page-heading', 'Daa Warga')

@section('content')
<div class="min-vh-100 bg-light">

    <div class="container-fluid px-3 px-md-4 py-4">

        {{-- JUDUL --}}
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
            <div>
                <h5 class="fw-bold mb-1">Data Warga RT 04/11</h5>
                <p class="text-secondary small mb-0">
                    Kelola semua data penduduk tetap dan sementara
                </p>
            </div>

            <a href="{{ route('tambah-data-warga') }}"
                class="btn btn-primary align-self-start align-self-md-center">
                <i class="fa-solid fa-plus me-1"></i>
                Tambah Data Warga
            </a>
        </div>

        {{-- PENCARIAN DAN FILTER --}}
        <div class="card border-0 shadow-sm rounded-3 mb-3">
            <div class="card-body p-3">
                <div class="row g-3 align-items-center">

                    <div class="col-12 col-lg">
                        <div class="input-group">
                            <span class="input-group-text bg-white">
                                <i class="fa-solid fa-magnifying-glass text-secondary"></i>
                            </span>
                            <input type="text"
                                class="form-control"
                                placeholder="Cari nama warga...">
                        </div>
                    </div>

                    <div class="col-12 col-lg-auto">
                        <div class="d-flex flex-wrap gap-2">
                            <button type="button" class="btn btn-primary btn-sm px-3">
                                Semua
                            </button>
                            <button type="button" class="btn btn-light border btn-sm px-3">
                                E1
                            </button>
                            <button type="button" class="btn btn-light border btn-sm px-3">
                                E2
                            </button>
                            <button type="button" class="btn btn-light border btn-sm px-3">
                                E3
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{-- TABEL DATA WARGA --}}
        <div class="card border-0 shadow-sm rounded-3 overflow-hidden">

            <div class="card-header bg-white border-0 px-3 px-md-4 py-3">
                <h6 class="fw-bold mb-0">Daftar Warga</h6>
                <small class="text-secondary">
                    Data penduduk komplek E1, E2, dan E3
                </small>
            </div>

            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0 warga-table">

                    <thead class="table-light">
                        <tr>
                            <th class="ps-4">No.</th>
                            <th>Nama Warga</th>
                            <th>NIK</th>
                            <th>Hubungan</th>
                            <th>Komplek</th>
                            <th>Rumah</th>
                            <th class="text-center pe-4">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php
                            $warga = [
                                ['Budi Santoso', '3171012903780002', 'Kepala Keluarga', 'E1', 'No. 12'],
                                ['Siti Aminah', '3171016511810001', 'Istri', 'E1', 'No. 12'],
                                ['Ahmad Hidayat', '3171010304050003', 'Anak', 'E1', 'No. 12'],
                                ['Dedi Hermawan', '3171011508820004', 'Kepala Keluarga', 'E2', 'No. 05'],
                                ['Rina Kartika', '3171015212850002', 'Istri', 'E2', 'No. 05'],
                                ['Bambang Wijaya', '3171012140669001', 'Kepala Keluarga', 'E3', 'No. 18'],
                                ['Sri Wahyuni', '3171025510730005', 'Istri', 'E3', 'No. 18'],
                            ];
                        @endphp

                        @foreach ($warga as $index => $item)
                            <tr>
                                <td class="ps-4 text-secondary">
                                    {{ $index + 1 }}
                                </td>

                                <td class="fw-semibold text-nowrap">
                                    {{ $item[0] }}
                                </td>

                                <td class="text-secondary small">
                                    {{ $item[1] }}
                                </td>

                                <td>
                                    <span class="badge bg-light text-dark border fw-normal">
                                        {{ $item[2] }}
                                    </span>
                                </td>

                                <td>
                                    <span class="badge bg-primary-subtle text-primary">
                                        {{ $item[3] }}
                                    </span>
                                </td>

                                <td class="text-nowrap">
                                    {{ $item[4] }}
                                </td>

                                <td class="text-center pe-4">
                                    <div class="d-flex justify-content-center gap-2">

                                        <button type="button"
                                            class="btn btn-light border btn-sm"
                                            title="Lihat detail">
                                            <i class="fa-solid fa-eye text-primary"></i>
                                        </button>

                                        <button type="button"
                                            class="btn btn-warning btn-sm text-white"
                                            title="Ubah status warga">
                                            <i class="fa-solid fa-user-xmark"></i>
                                        </button>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

            {{-- PAGINATION --}}
            <div class="card-footer bg-white border-top px-3 px-md-4 py-3">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">

                    <small class="text-secondary">
                        Menampilkan 1–7 dari 150 warga
                    </small>

                    <nav aria-label="Navigasi halaman">
                        <ul class="pagination pagination-sm mb-0 flex-wrap">

                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-disabled="true">
                                    Sebelumnya
                                </a>
                            </li>

                            <li class="page-item active">
                                <a class="page-link" href="#" aria-current="page">1</a>
                            </li>

                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>

                            <li class="page-item">
                                <a class="page-link" href="#">Selanjutnya</a>
                            </li>

                        </ul>
                    </nav>

                </div>
            </div>

        </div>

    </div>
</div>

<style>
    .warga-table th,
    .warga-table td {
        padding-top: 14px;
        padding-bottom: 14px;
        vertical-align: middle;
    }

    .warga-table th {
        font-size: 12px;
        font-weight: 600;
        color: #64748b;
        white-space: nowrap;
    }

    .warga-table td {
        font-size: 13px;
    }

    .warga-table tbody tr:last-child td {
        border-bottom: 0;
    }

    .warga-table .btn {
        width: 32px;
        height: 32px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }
</style>
@endsection
