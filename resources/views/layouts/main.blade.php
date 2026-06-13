<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Starberriee</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #343a40;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="{{ route('home') }}">Starberriee</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('shop*') ? 'active' : '' }}" href="{{ route('shop') }}">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('custom-order*') ? 'active' : '' }}" href="{{ route('custom-order') }}">Custom Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('faqs*') ? 'active' : '' }}" href="{{ route('faqs') }}">FAQs</a>
                    </li>
                </ul>
                
                <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active fw-semibold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                                <i class="fas fa-user-circle me-1"></i> Hi, {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end border-0 shadow-sm">
                                <li>
                                    <a class="dropdown-item" href="{{ route('admin.products.index') }}">
                                        <i class="fas fa-tachometer-alt me-2 text-primary"></i>Dashboard Admin
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form action="/logout" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="dropdown-item text-danger">
                                            <i class="fas fa-sign-out-alt me-2"></i>Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endauth

                    @guest
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('login') ? 'active' : '' }} fw-semibold" href="/login">
                                <i class="fas fa-sign-in-alt me-1"></i> Login
                            </a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>