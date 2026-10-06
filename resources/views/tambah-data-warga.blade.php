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
            <a href="{{route('dashboard.store')}}" class="text-secondary text-decoration-none rounded-2 px-3 py-2 ">
                <i class="bi bi-grid me-2"></i>
                <small>Dashboard</small>
            </a>
            <a href="{{route('data-warga.store')}}" class="text-white text-decoration-none rounded-2 px-3 py-2 bg-primary">
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

    <!-- MAIN -->
    <div class="flex-grow-1">
        <!-- TOPBAR -->
        <header class="bg-white border-bottom px-4 py-3
            d-flex justify-content-between align-items-center">
            <h6 class="fw-bold mb-0">
                Tambah Data Warga
            </h6>
            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-light border rounded-circled-flex justify-content-center align-items-center"style="width: 32px; height: 32px;">
                    <i class="fa-regular fa-bell text-secondary"
                        style="font-size: 11px;"></i>
                </button>
                <div class="border-start ps-3">
                    <div class="fw-bold" style="font-size: 10px;">
                        Arya Ramdani
                    </div
                    <div class="text-secondary" style="font-size: 8px;">
                        Ketua RT 04
                    </div>
                </div>
            </div>
        </header>
        <!-- CONTENT -->
        <main class="p-4">
            <!-- KEMBALI -->
            <div class="mb-3">
                <a href="#" class="text-decoration-none text-dark d-flex align-items-center gap-2">
                    <span class="bg-white border rounded-circled-flex justify-content-center align-items-center" style="width: 25px; height: 25px;">
                        <i class="fa-solid fa-arrow-left"style="font-size: 10px;"></i>
                    </span>
                    <div>
                        <div class="fw-bold" style="font-size: 13px;">
                            Kembali ke Data Warga
                        </div>
                        <small class="text-secondary">
                            Formulir pendaftaran warga RT 04/11
                        </small>
                    </div>
                </a>
            </div>
            <!-- FORM -->
            <div class="row g-3">
                <!-- KOLOM KIRI -->
                <div class="col-lg-6">
                    <!-- IDENTITAS -->
                    <div class="card border rounded-3 mb-3">
                        <div class="card-body p-3">
                            <h6 class="fw-bold mb-3">
                                Identitas Pribadi
                            </h6>
                            <!-- Nama -->
                            <div class="mb-3">
                                <label class="form-label small fw-semibold">
                                    Nama Lengkap
                                </label>
                                <input type="text" class="form-control form-control-sm" placeholder="Masukkan nama lengkap">
                            </div>
                            <!-- NIK -->
                            <div class="mb-3">
                                <label class="form-label small fw-semibold">
                                    Nomor Induk Kependudukan (NIK)
                                </label>
                                <input type="text" class="form-control form-control-sm" placeholder="Masukkan NIK">
                            </div>
                            <!-- Tempat & Tanggal -->
                            <div class="row g-2 mb-3">
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold">
                                        Tempat Lahir
                                    </label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Contoh: Jakarta">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold">
                                        Tanggal Lahir
                                    </label>
                                    <input type="date" class="form-control form-control-sm">
                                </div>
                            </div>
                            <!-- Jenis Kelamin & Agama -->
                            <div class="row g-2 mb-3">
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold">
                                        Jenis Kelamin
                                    </label>
                                    <select class="form-select form-select-sm">
                                        <option selected disabled>
                                            Pilih jenis kelamin
                                        </option>
                                        <option>Laki-laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold">
                                        Agama
                                    </label>
                                    <select class="form-select form-select-sm">
                                        <option selected disabled>
                                            Pilih agama
                                        </option>
                                        <option>Islam</option>
                                        <option>Kristen</option>
                                        <option>Katolik</option>
                                        <option>Hindu</option>
                                        <option>Buddha</option>
                                        <option>Konghucu</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Pekerjaan & HP -->
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold">
                                        Pekerjaan
                                    </label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Contoh: Karyawan Swasta">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold">
                                        Nomor Handphone
                                    </label>
                                    <inputtype="text"
                                        class="form-control form-control-sm"
                                        placeholder="08xxxxxxxxxx">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- STATUS WARGA -->
                    <div class="card border rounded-3">
                        <div class="card-body p-3">
                            <h6 class="fw-bold mb-3">
                                Status Warga
                            </h6>
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold">
                                        Status Pernikahan
                                    </label>
                                    <select class="form-select form-select-sm">
                                        <option>Belum Menikah</option>
                                        <option>Menikah</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold">
                                        Asal Warga (Domisili)
                                    </label>
                                    <select class="form-select form-select-sm">
                                        <option>Asli Ciburuy</option>
                                        <option>Pendatang</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- KOLOM KANAN -->
                <div class="col-lg-6">
                    <!-- ALAMAT & RUMAH -->
                    <div class="card border rounded-3 mb-3">
                        <div class="card-body p-3">
                            <h6 class="fw-bold mb-3">
                                Alamat & Rumah
                            </h6>
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold">
                                        Komplek (Blok)
                                    </label>
                                    <select class="form-select form-select-sm">
                                        <option>E1</option>
                                        <option>E2</option>
                                        <option>E3</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold">
                                        Nomor Rumah
                                    </label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Contoh: No. 14A">
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- KELUARGA & DOKUMEN -->
                    <div class="card border rounded-3 mb-3">

                        <div class="card-body p-3">

                            <h6 class="fw-bold mb-3">
                                Keluarga & Dokumen
                            </h6>

                            <div class="row g-2 mb-3">

                                <div class="col-md-6">

                                    <label class="form-label small fw-semibold">
                                        Nomor Kartu Keluarga (KK)
                                    </label>

                                    <input
                                        type="text"
                                        class="form-control form-control-sm"
                                        placeholder="Masukkan nomor KK">

                                </div>

                                <div class="col-md-6">

                                    <label class="form-label small fw-semibold">
                                        Hubungan Keluarga
                                    </label>

                                    <select class="form-select form-select-sm">

                                        <option>Kepala Keluarga</option>
                                        <option>Istri</option>
                                        <option>Anak</option>

                                    </select>

                                </div>

                            </div>


                            <!-- Upload -->
                            <div class="row g-2">

                                <div class="col-md-6">

                                    <label class="form-label small fw-semibold">
                                        Upload Foto KTP
                                    </label>

                                    <input
                                        type="file"
                                        class="form-control form-control-sm"
                                        accept="image/*">

                                </div>

                                <div class="col-md-6">

                                    <label class="form-label small fw-semibold">
                                        Upload Foto KK
                                    </label>

                                    <input
                                        type="file"
                                        class="form-control form-control-sm"
                                        accept="image/*">

                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- ANGGOTA KELUARGA -->
                    <div class="card border rounded-3">

                        <div class="card-body p-3">

                            <h6 class="fw-bold mb-3">
                                Anggota Keluarga Inti
                            </h6>

                            <div class="mb-3">

                                <label class="form-label small fw-semibold">
                                    Nama Pasangan (Istri)
                                </label>

                                <input
                                    type="text"
                                    class="form-control form-control-sm"
                                    placeholder="Nama pasangan">

                            </div>


                            <button type="button"
                                class="btn btn-outline-primary btn-sm w-100">

                                <i class="fa-solid fa-plus me-1"></i>
                                Tambah Data Anak

                            </button>

                        </div>

                    </div>

                </div>

            </div>


            <!-- BUTTON BAWAH -->
            <div class="d-flex justify-content-end gap-2 mt-3">

                <button type="button"
                    class="btn btn-light border px-4">

                    Batal

                </button>

                <button type="submit"
                    class="btn btn-primary px-4">

                    <i class="fa-solid fa-floppy-disk me-1"></i>
                    Simpan Data Warga

                </button>

            </div>

        </main>

    </div>
@endsection()
