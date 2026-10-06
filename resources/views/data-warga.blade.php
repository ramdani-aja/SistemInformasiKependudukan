@extends('layouts.app')
@section('content')
<div class="d-flex min-vh-100 bg-light">
        <!-- CONTENT -->
        <div class="px-4 py-4">
            <!-- Title -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h5 class="fw-bold mb-1">
                        Data Warga RT 04/11
                    </h5>
                    <div class="text-secondary">
                        Kelola semua data penduduk tetap dan sementara
                    </div>
                </div>
                <a href="{{ route('tambah-data-warga') }}" class="btn btn-primary px-3">
                    <i class="fa-solid fa-plus me-1"></i>
                    Tambah Data Warga
                </a>
            </div>
            <!-- SEARCH -->
            <div class="d-flex gap-2 mb-2">
                <div class="input-group">
                    <span class="input-group-text bg-white" style="height:42px;">
                        <i class="fa-solid fa-magnifying-glass text-secondary"
                            style="font-size:10px;"></i>
                    </span>
                    <input type="text"class="form-control form-control-sm" style="height:42px;" placeholder="Cari nama warga...">
                </div>
                <!-- FILTER -->
                <div class="btn-group border rounded" style="height:42px;">
                    <button class="btn btn-primary">
                        Semua
                    </button>
                    <button class="btn btn-light">
                        E1
                    </button>
                    <button class="btn btn-light">
                        E2
                    </button>
                    <button class="btn btn-light">
                        E3
                    </button>
                </div>
            </div>
            <!-- TABLE -->
            <div class="bg-white border rounded-3 overflow-hidden">
                <div class="table-responsive">
                    <table class="table table-hover mb-0 align-middle warga-table">

                        <thead class="table-light">

                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>Hubungan</th>
                                <th>Komplek</th>
                                <th>Rumah</th>
                                <th>Aksi</th>
                            </tr>

                        </thead>

                        <tbody>

                            <tr>
                                <td>1</td>
                                <td class="fw-semibold">Budi Santoso</td>
                                <td>3171012903780002</td>
                                <td>Kepala Keluarga</td>
                                <td>E1</td>
                                <td>No. 12</td>
                                <td>
                                    <button class="btn btn-light btn-sm action-btn text-primary">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>

                                    <button class="btn btn-warning btn-sm action-btn text-white">
                                        <i class="fa-solid fa-user-xmark"></i>
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td class="fw-semibold">Siti Aminah</td>
                                <td>3171016511810001</td>
                                <td>Istri</td>
                                <td>E1</td>
                                <td>No. 12</td>
                                <td>
                                    <button class="btn btn-light btn-sm action-btn text-primary">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>

                                    <button class="btn btn-warning btn-sm action-btn text-white">
                                        <i class="fa-solid fa-user-xmark"></i>
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td class="fw-semibold">Ahmad Hidayat</td>
                                <td>3171010304050003</td>
                                <td>Anak</td>
                                <td>E1</td>
                                <td>No. 12</td>
                                <td>
                                    <button class="btn btn-light btn-sm action-btn text-primary">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>

                                    <button class="btn btn-warning btn-sm action-btn text-white">
                                        <i class="fa-solid fa-user-xmark"></i>
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td class="fw-semibold">Dedi Hermawan</td>
                                <td>3171011508820004</td>
                                <td>Kepala Keluarga</td>
                                <td>E2</td>
                                <td>No. 05</td>
                                <td>
                                    <button class="btn btn-light btn-sm action-btn text-primary">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>

                                    <button class="btn btn-warning btn-sm action-btn text-white">
                                        <i class="fa-solid fa-user-xmark"></i>
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td class="fw-semibold">Rina Kartika</td>
                                <td>3171015212850002</td>
                                <td>Istri</td>
                                <td>E2</td>
                                <td>No. 05</td>
                                <td>
                                    <button class="btn btn-light btn-sm action-btn text-primary">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>

                                    <button class="btn btn-warning btn-sm action-btn text-white">
                                        <i class="fa-solid fa-user-xmark"></i>
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td class="fw-semibold">Bambang Wijaya</td>
                                <td>3171012140669001</td>
                                <td>Kepala Keluarga</td>
                                <td>E3</td>
                                <td>No. 18</td>
                                <td>
                                    <button class="btn btn-light btn-sm action-btn text-primary">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>

                                    <button class="btn btn-warning btn-sm action-btn text-white">
                                        <i class="fa-solid fa-user-xmark"></i>
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>7</td>
                                <td class="fw-semibold">Sri Wahyuni</td>
                                <td>3171025510730005</td>
                                <td>Istri</td>
                                <td>E3</td>
                                <td>No. 18</td>
                                <td>
                                    <button class="btn btn-light btn-sm action-btn text-primary">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>

                                    <button class="btn btn-warning btn-sm action-btn text-white">
                                        <i class="fa-solid fa-user-xmark"></i>
                                    </button>
                                </td>
                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>


            <!-- FOOTER -->
            <div class="d-flex justify-content-between align-items-center mt-3">

                <small class="text-secondary">
                    Menampilkan 1-7 dari 150 warga
                </small>

                <nav>

                    <ul class="pagination pagination-sm mb-0">

                        <li class="page-item disabled">
                            <a class="page-link">Sebelumnya</a>
                        </li>

                        <li class="page-item active">
                            <a class="page-link">1</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link">Selanjutnya</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection()
