<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'SIK RT 04/11')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            margin: 0;
            background: #f8fafc;
            color: #1e293b;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        .app-wrapper {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 220px;
            flex-shrink: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .sidebar-link {
            display: block;
            padding: 11px 12px;
            border-radius: 6px;
            color: #adb5bd;
            text-decoration: none;
        }

        .sidebar-link:hover,
        .sidebar-link.active {
            background: #2563eb;
            color: white;
        }

        .admin-info {
            margin-top: auto;
        }

        .main-content {
            flex: 1;
            min-width: 0;
        }

        .topbar {
            min-height: 64px;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 170px;
            }
        }
    </style>
</head>

<body>
    <div class="app-wrapper">
        @include('components.navbar')

        {{-- Konten halaman yang berubah --}}
        <div class="main-content">

            <header class="topbar bg-white border-bottom px-4 d-flex justify-content-between align-items-center">
                <h6 class="fw-bold mb-0">@yield('page-heading', 'Dashboard Utama')</h6>

                <div class="text-end">
                    <div class="fw-bold small">Arya Ramdani</div>
                    <small class="text-secondary">Ketua RT 04</small>
                </div>
            </header>

            <main>
                @yield('content')
            </main>

        </div>
    </div>
</body>
</html>
