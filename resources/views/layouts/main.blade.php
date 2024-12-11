<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Gkj Sedayu')</title>

    <!-- Bootstrap and Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets2/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets2/css/style.css">
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/admin">
                <span style="font-size: 24px; font-weight: bold;">Admin GKJ</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="UserDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-account-circle mdi-24px me-2"></i>
                            <span>{{ Auth::user()->username }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="UserDropdown">
                            <li class="dropdown-header text-center">
                                <p class="mb-1 mt-3 fw-semibold">{{ Auth::user()->username }}</p>
                                <p class="fw-light text-muted mb-0">{{ Auth::user()->email }}</p>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/settings">
                                    <i class="mdi mdi-settings text-primary me-2"></i>Settings
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/notifications">
                                    <i class="mdi mdi-bell text-warning me-2"></i>Notifications
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="mdi mdi-power text-danger me-2"></i>Sign Out
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas bg-light" id="sidebar">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="/pendeta">
                        <i class="mdi mdi-church menu-icon"></i>
                        <span class="menu-title">Pendeta</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/jadwal">
                        <i class="mdi mdi-calendar menu-icon"></i>
                        <span class="menu-title">Jadwal Ibadah</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/adminrenungan">
                        <i class="mdi mdi-book-open-page-variant menu-icon"></i>
                        <span class="menu-title">Renungan Mingguan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pengumuman">
                        <i class="mdi mdi-newspaper menu-icon"></i>
                        <span class="menu-title">Pengumuman</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/adminstruktur">
                        <i class="mdi mdi-account-group menu-icon"></i>
                        <span class="menu-title">Struktur</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/feedback-admin">
                        <i class="mdi mdi-comment-outline menu-icon"></i>
                        <span class="menu-title">Feedback</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Content -->
        <div class="main-panel w-100">
            <div class="content-wrapper">
                @yield('content')
            </div>
        </div>
    </div>

   <!-- Footer -->
    <footer class="footer bg-light py-3 mt-auto">
        <div class="container text-center">
            <span class="text-muted">Copyright © 2023. All rights reserved.</span>
        </div>
    </footer>


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
