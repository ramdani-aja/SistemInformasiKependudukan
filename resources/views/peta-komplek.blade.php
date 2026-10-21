@extends('layouts.app')

@section('title', 'Dashboard - SIK RT 04/11')
@section('page-heading', 'Peta Komplek')

@section('content')

<div class="container-fluid p-4">

    {{-- Header halaman --}}
    <div class="mb-4">
        <h4 class="fw-bold mb-1">Peta Komplek</h4>
        <p class="text-secondary mb-0">
            Lihat lokasi rumah dan persebaran warga RT 04/11.
        </p>
    </div>

    {{-- Ringkasan --}}
    <div class="row g-3 mb-4">

        <div class="col-12 col-md-4">
            <div class="card border-0 shadow-sm rounded-3">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="bg-primary-subtle text-primary rounded-3 p-3">
                        <i class="fas fa-users fa-lg"></i>
                    </div>
                    <div>
                        <div class="text-secondary small">Total Warga</div>
                        <h4 class="fw-bold mb-0">150</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="card border-0 shadow-sm rounded-3">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="bg-success-subtle text-success rounded-3 p-3">
                        <i class="fas fa-house fa-lg"></i>
                    </div>
                    <div>
                        <div class="text-secondary small">Total Rumah</div>
                        <h4 class="fw-bold mb-0">150</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="card border-0 shadow-sm rounded-3">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="bg-warning-subtle text-warning rounded-3 p-3">
                        <i class="fas fa-map-marked-alt fa-lg"></i>
                    </div>
                    <div>
                        <div class="text-secondary small">Jumlah Komplek</div>
                        <h4 class="fw-bold mb-0">3</h4>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- Konten peta --}}
    <div class="card border-0 shadow-sm rounded-3">
        <div class="card-body p-4">

            <div class="d-flex flex-wrap justify-content-between
                        align-items-center gap-3 mb-3">
                <div>
                    <h5 class="fw-bold mb-1">Lokasi Rumah Warga</h5>
                    <p class="text-secondary small mb-0">
                        Cari warga atau pilih komplek untuk melihat lokasi.
                    </p>
                </div>

                <button type="button" class="btn btn-primary"
                        onclick="map.invalidateSize()">
                    <i class="fas fa-expand me-2"></i>Perbarui Peta
                </button>
            </div>

            {{-- Pencarian dan filter --}}
            <div class="row g-3 mb-3">

                <div class="col-12 col-lg-6">
                    <label for="searchWarga" class="form-label small fw-semibold">
                        Cari Nama Warga
                    </label>
                    <input type="text" id="searchWarga"
                           class="form-control"
                           placeholder="Masukkan nama warga...">
                </div>

                <div class="col-12 col-lg-6">
                    <label for="filterKomplek" class="form-label small fw-semibold">
                        Pilih Komplek
                    </label>
                    <select id="filterKomplek" class="form-select">
                        <option value="Semua">Semua Komplek</option>
                        <option value="E1">Komplek E1</option>
                        <option value="E2">Komplek E2</option>
                        <option value="E3">Komplek E3</option>
                    </select>
                </div>

            </div>

            {{-- Peta --}}
            <div id="mapKomplek"
                 style="height: 450px; width: 100%; border-radius: 12px;">
            </div>

            {{-- Legenda --}}
            <div class="d-flex flex-wrap gap-4 mt-3 small text-secondary">
                <span>
                    <i class="fas fa-location-dot text-primary me-1"></i>
                    Komplek E1
                </span>
                <span>
                    <i class="fas fa-location-dot text-success me-1"></i>
                    Komplek E2
                </span>
                <span>
                    <i class="fas fa-location-dot text-warning me-1"></i>
                    Komplek E3
                </span>
            </div>

            <div class="alert alert-info small mt-3 mb-0">
                <i class="fas fa-circle-info me-1"></i>
                Lokasi penanda berikut masih contoh. Sesuaikan koordinat
                dengan lokasi rumah warga yang sebenarnya.
            </div>

        </div>
    </div>

</div>

{{-- Leaflet --}}
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
    const map = L.map('mapKomplek').setView([-6.595, 106.8167], 15);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    // Data contoh. Ganti dengan koordinat rumah yang sebenarnya.
    const dataWarga = [
        {
            nama: 'Budi Santoso',
            rumah: '01',
            komplek: 'E1',
            lat: -6.5950,
            lng: 106.8167,
            warna: 'blue'
        },
        {
            nama: 'Siti Aminah',
            rumah: '02',
            komplek: 'E2',
            lat: -6.5970,
            lng: 106.8200,
            warna: 'green'
        },
        {
            nama: 'Ahmad Hidayat',
            rumah: '03',
            komplek: 'E3',
            lat: -6.5925,
            lng: 106.8230,
            warna: 'orange'
        }
    ];

    const markerLayer = L.layerGroup().addTo(map);

    function tampilkanWarga() {
        markerLayer.clearLayers();

        const namaCari = document.getElementById('searchWarga')
            .value.toLowerCase().trim();

        const komplekDipilih = document.getElementById('filterKomplek')
            .value;

        dataWarga
            .filter(warga => {
                const cocokNama = warga.nama.toLowerCase().includes(namaCari);
                const cocokKomplek = komplekDipilih === 'Semua'
                    || warga.komplek === komplekDipilih;

                return cocokNama && cocokKomplek;
            })
            .forEach(warga => {
                L.circleMarker([warga.lat, warga.lng], {
                    radius: 9,
                    color: warga.warna,
                    fillColor: warga.warna,
                    fillOpacity: 0.9,
                    weight: 2
                })
                .bindPopup(`
                    <strong>${warga.nama}</strong><br>
                    Komplek ${warga.komplek}<br>
                    Nomor Rumah ${warga.rumah}
                `)
                .addTo(markerLayer);
            });
    }

    document.getElementById('searchWarga')
        .addEventListener('input', tampilkanWarga);

    document.getElementById('filterKomplek')
        .addEventListener('change', tampilkanWarga);

    tampilkanWarga();

    setTimeout(() => map.invalidateSize(), 300);
</script>

@endsection()

