@extends('layouts.app')

@section('title', 'Dashboard - SIK RT 04/11')
@section('page-heading', 'Tambah Data Warga')

@section('content')
<div class="d-flex min-vh-100 bg-light">

    {{-- MAIN --}}
    <div class="flex-grow-1">
        {{-- CONTENT --}}
        <main class="p-3 p-md-4">

            {{-- KEMBALI --}}
            <div class="mb-4">
                <a href="#"
                    class="text-decoration-none text-dark d-flex align-items-center gap-3">

                    <span class="bg-white border rounded-circle d-flex justify-content-center align-items-center flex-shrink-0"
                        style="width: 38px; height: 38px;">
                        <i class="fa-solid fa-arrow-left"></i>
                    </span>

                    <div>
                        <div class="fw-bold">Kembali ke Data Warga</div>
                        <small class="text-secondary">
                            Formulir pendaftaran warga RT 04/11
                        </small>
                    </div>
                </a>
            </div>

            {{-- FORM --}}
            <form action="{{ route('tambah-data-warga.store') }}" method="POST">

                @csrf

                <div class="row g-4">

                    {{-- KOLOM KIRI --}}
                    <div class="col-12 col-xl-6">

                        {{-- IDENTITAS PRIBADI --}}
                        <div class="card border-0 shadow-sm rounded-3 mb-4">
                            <div class="card-body p-4">

                                <h6 class="fw-bold mb-4">Identitas Pribadi</h6>

                                <div class="mb-3">
                                    <label class="form-label small fw-semibold">Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap"
                                        class="form-control"
                                        placeholder="Masukkan nama lengkap">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label small fw-semibold">Nomor Induk Kependudukan (NIK)</label>
                                    <input type="text" name="nik"
                                        class="form-control"
                                        placeholder="Masukkan NIK">
                                </div>

                                <div class="row g-3 mb-3">
                                    <div class="col-12 col-md-6">
                                        <label class="form-label small fw-semibold">Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir"
                                            class="form-control"
                                            placeholder="Contoh: Bogor">
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <label class="form-label small fw-semibold">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir"
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="row g-3 mb-3">
                                    <div class="col-12 col-md-6">
                                        <label class="form-label small fw-semibold">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" class="form-select">
                                            <option value="" selected disabled>Pilih jenis kelamin</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <label class="form-label small fw-semibold">Agama</label>
                                        <select name="agama" class="form-select">
                                            <option value="" selected disabled>Pilih agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row g-3">
                                    <div class="col-12 col-md-6">
                                        <label class="form-label small fw-semibold">Pekerjaan</label>
                                        <input type="text" name="pekerjaan"
                                            class="form-control"
                                            placeholder="Contoh: Karyawan Swasta">
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <label class="form-label small fw-semibold">Nomor Handphone</label>
                                        <input type="text" name="no_hp"
                                            class="form-control"
                                            placeholder="08xxxxxxxxxx">
                                    </div>
                                </div>

                            </div>
                        </div>

                        {{-- STATUS WARGA --}}
                        <div class="card border-0 shadow-sm rounded-3">
                            <div class="card-body p-4">

                                <h6 class="fw-bold mb-4">Status Warga</h6>

                                <div class="row g-3">
                                    <div class="col-12 col-md-6">
                                        <label class="form-label small fw-semibold">Status Pernikahan</label>
                                        <select name="status_pernikahan" class="form-select">
                                            <option value="Belum Menikah">Belum Menikah</option>
                                            <option value="Menikah">Menikah</option>
                                        </select>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <label class="form-label small fw-semibold">Asal Warga</label>
                                        <select name="asal_warga" class="form-select">
                                            <option value="Asli Ciburuy">Asli Ciburuy</option>
                                            <option value="Pendatang">Pendatang</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    {{-- KOLOM KANAN --}}
                    <div class="col-12 col-xl-6">

                        {{-- ALAMAT & RUMAH --}}
                        <div class="card border-0 shadow-sm rounded-3 mb-4">
                            <div class="card-body p-4">

                                <h6 class="fw-bold mb-4">Alamat & Rumah</h6>

                                <div class="row g-3">
                                    <div class="col-12 col-md-6">
                                        <label class="form-label small fw-semibold">Komplek (Blok)</label>
                                        <select name="komplek" class="form-select">
                                            <option value="E1">E1</option>
                                            <option value="E2">E2</option>
                                            <option value="E3">E3</option>
                                        </select>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <label class="form-label small fw-semibold">Nomor Rumah</label>
                                        <input type="text" name="nomor_rumah"
                                            class="form-control"
                                            placeholder="Contoh: 14A">
                                    </div>
                                </div>

                            </div>
                        </div>

                        {{-- KELUARGA & DOKUMEN --}}
                        <div class="card border-0 shadow-sm rounded-3 mb-4">
                            <div class="card-body p-4">

                                <h6 class="fw-bold mb-4">Keluarga & Dokumen</h6>

                                <div class="row g-3 mb-3">
                                    <div class="col-12 col-md-6">
                                        <label class="form-label small fw-semibold">Nomor Kartu Keluarga (KK)</label>
                                        <input type="text" name="no_kk"
                                            class="form-control"
                                            placeholder="Masukkan nomor KK">
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <label class="form-label small fw-semibold">Hubungan Keluarga</label>
                                        <select name="hubungan_keluarga" class="form-select">
                                            <option value="Kepala Keluarga">Kepala Keluarga</option>
                                            <option value="Istri">Istri</option>
                                            <option value="Anak">Anak</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row g-3">
                                    <div class="col-12 col-md-6">
                                        <label class="form-label small fw-semibold">Upload Foto KTP</label>
                                        <input type="file" name="foto_ktp"
                                            class="form-control"
                                            accept="image/*">
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <label class="form-label small fw-semibold">Upload Foto KK</label>
                                        <input type="file" name="foto_kk"
                                            class="form-control"
                                            accept="image/*">
                                    </div>
                                </div>

                            </div>
                        </div>

                        {{-- ANGGOTA KELUARGA --}}
                        <div class="card border-0 shadow-sm rounded-3">
                            <div class="card-body p-4">

                                <h6 class="fw-bold mb-4">Anggota Keluarga Inti</h6>

                                <div class="mb-3">
                                    <label class="form-label small fw-semibold">Nama Pasangan</label>
                                    <input type="text" name="nama_pasangan"
                                        class="form-control"
                                        placeholder="Masukkan nama pasangan">
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

                {{-- TOMBOL SIMPAN --}}
                <div class="d-flex flex-column flex-sm-row justify-content-end gap-2 mt-4">
                    <a href="#"
                        class="btn btn-light border px-4">
                        Batal
                    </a>

                    <button type="submit" class="btn btn-primary px-4">
                        <i class="fa-solid fa-floppy-disk me-1"></i>
                        Simpan Data Warga
                    </button>
                </div>

            </form>

        </main>
    </div>
</div>
@endsection
