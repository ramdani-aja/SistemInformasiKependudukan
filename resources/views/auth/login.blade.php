@extends('layouts.app')
@section('content')
    <div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center bg-light">
        <div class="card border-0 shadow-sm rounded-4 p-4" style="width: 100%; max-width: 480px;">
            <!-- Logo -->
            <div class="d-flex justify-content-center align-items-center gap-2 mb-3">
                <div class="bg-primary text-white rounded-3 d-flex justify-content-center align-items-center"
                    style="width: 34px; height: 34px;">
                    <i class="bi bi-x-circle"></i>
                </div>
                <div>
                    <div class="fw-bold text-dark ">
                        SIK RT 04/11
                    </div>
                    <small class="text-muted">
                        Sistem Informasi Kependudukan
                    </small>
                </div>
            </div>

            <!-- Judul -->
            <div class="text-center mb-4">
                <h1 class="fs-4 fw-bold text-dark mb-1">
                    Sistem Informasi Kependudukan
                </h1>
                <p class="text-secondary small mb-0">
                    Silakan masuk dengan akun Administrator RT 04 RW 11
                </p>
            </div>
            <!-- Form -->
            <form action="{{ '/' }}" method="POST">
                @csrf
                <!-- Username -->
                <div class="mb-3">
                    <label for="username" class="form-label fw-semibold small">
                        Username
                    </label>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        class="form-control"
                        placeholder="Masukkan username"
                        value="{{ old('username') }}"
                        required
                    >
                </div>
                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label fw-semibold small">
                        Password
                    </label>
                    <div class="position-relative">
                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="form-control"
                            placeholder="Masukkan password"
                            required
                        >
                        <button
                            type="button"
                            class="btn position-absolute top-50 end-0 translate-middle-y border-0 text-secondary"
                            onclick="togglePassword()"
                        >
                            <i class="bi bi-eye-slash" id="passwordIcon"></i>
                        </button>
                    </div>
                </div>
                <!-- Ingat Saya & Lupa Password -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="form-check">
                        <input
                            class="form-check-input"
                            type="checkbox"
                            id="remember"
                            name="remember"
                        >
                        <label
                            class="form-check-label small text-secondary"
                            for="remember"
                        >
                            Ingat Saya
                        </label>
                    </div>
                    <a href="#" class="text-primary text-decoration-none small">
                        Lupa Password?
                    </a>
                </div>
                <!-- Tombol -->
                <button type="submit"class="btn btn-primary w-100 py-2 fw-semibold">
                    <a href="{{ route('dashboard.store')}}" class="text-white text-decoration-none"> Masuk Ke Dashboard</a>
                </button>
            </form>
        </div>
    </div>
@endsection()
