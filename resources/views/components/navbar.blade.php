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
            <a href="{{ route('dashboard')}}" class="text-decoration-none rounded-2 px-3 py-2 {{Route::is('dashboard') ? 'text-white bg-primary' : 'text-secondary'}}">
                <i class="bi bi-grid me-2"></i>
                <small>Dashboard</small>
            </a>
            <a href="{{ route('data-warga.store')}}" class="text-decoration-none rounded-2 px-3 py-2 {{Route::is('data-warga') ? 'text-white bg-primary' : 'text-secondary'}}">
                <i class="bi bi-people me-2"></i>
                <small>Data Warga</small>
            </a>
            <a href="{{ route('peta-komplek')}}" class="text-secondary text-decoration-none rounded-2 px-3 py-2 {{Route::is('peta-komplek') ? 'text-white bg-primary' : 'text-secondary'}}">
                <i class="bi bi-map me-2"></i>
                <small>Peta Komplek</small>
            </a>
            <a href="" class="text-secondary text-decoration-none rounded-2 px-3 py-2">
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
