<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starberriee - Handmade Beads</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #FFF8F3; color: #333; }
        .navbar { background-color: #561C24 !important; }
        .navbar-brand { font-weight: 700; letter-spacing: 2px; color: #FFF !important; }
        .nav-link { color: rgba(255, 255, 255, 0.8) !important; font-weight: 500; margin-left: 15px; }
        .nav-link:hover { color: #FFF !important; }
        .footer { background-color: #561C24; color: #FFF; padding: 25px 0; text-align: center; margin-top: 50px; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm py-3">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">STARBERRIEE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('shop') }}">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('custom-order') }}">Custom Order</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('faqs') }}">FAQs</a></li>
                    
                    <!-- MENU ADMIN HANYA MUNCUL JIKA YANG LOGIN ADALAH ADMIN -->
                    @if(Auth::check() && Auth::user()->role === 'admin')
                        <li class="nav-item"><a class="nav-link text-warning fw-bold" href="{{ route('admin.products.index') }}">🛠 Admin</a></li>
                    @endif

                    <!-- TOMBOL AUTH DINAMIS -->
                    @auth
                        <li class="nav-item dropdown ms-3">
                            <a class="nav-link dropdown-toggle text-white fw-semibold" href="#" role="button" data-bs-toggle="dropdown">
                                Hi, {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end border-0 shadow-sm">
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item text-danger">Logout 🚪</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item ms-3">
                            <a class="btn btn-sm btn-outline-light px-3" href="{{ route('login') }}" style="border-radius: 8px;">Login</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- NOTIFIKASI GLOBAL -->
    @if(session('error'))
        <div class="container mt-4">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        </div>
    @endif

    <main>
        @yield('content')
    </main>

    <footer class="footer mt-auto">
        <div class="container">
            <p class="mb-1">© 2026 <strong>Starberriee</strong>. All Rights Reserved.</p>
            <p class="small text-white-50 mb-0">Handmade Beads & Accessories with Love ✨</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>