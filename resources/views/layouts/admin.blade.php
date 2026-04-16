<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Bảng điều khiển' }} - Tuấn Code Cloud Admin</title>
    <link rel="icon" href="{{ asset(\App\Models\Setting::get('media_site_favicon', 'favicon.ico')) }}">
    {{-- Bootstrap 5 + Tabler Icons (CDN, không dùng npm) --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css">
    <style>
        :root {
            --sidebar-width: 240px;
        }

        body {
            background: #f5f6fa;
        }

        .topbar {
            height: 56px;
            z-index: 1030;
            left: var(--sidebar-width);
            right: 0;
            transition: left .25s;
        }

        .topbar.collapsed {
            left: 0;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: var(--sidebar-width);
            height: 100vh;
            background: #fff;
            border-right: 1px solid #e9ecef;
            z-index: 1040;
            transition: transform .25s;
            overflow-y: auto;
        }

        .sidebar.collapsed {
            transform: translateX(calc(-1 * var(--sidebar-width)));
        }

        .sidebar .logo-area {
            padding: 1rem 1.25rem;
            border-bottom: 1px solid #e9ecef;
        }

        .sidebar .nav-link {
            display: flex;
            align-items: center;
            gap: .6rem;
            padding: .5rem 1.25rem;
            color: #495057;
            border-radius: .375rem;
            margin: 2px .5rem;
            font-size: .875rem;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background: #e7f1ff;
            color: #0d6efd;
        }

        .sidebar .nav-link i {
            font-size: 1.1rem;
        }

        .content {
            margin-left: var(--sidebar-width);
            padding-top: 80px !important;
            min-height: 100vh;
            transition: margin-left .25s;
        }

        .content.collapsed {
            margin-left: 0;
        }

        .overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, .4);
            z-index: 1035;
        }

        .overlay.show {
            display: block;
        }

        .avatar {
            object-fit: cover;
        }

        .avatar-sm {
            width: 32px;
            height: 32px;
        }

        .avatar-md {
            width: 40px;
            height: 40px;
        }

        .btn-icon {
            width: 36px;
            height: 36px;
            padding: 0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .icon-shape {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: .5rem;
        }

        .icon-md {
            width: 44px;
            height: 44px;
        }

        @media(max-width:991px) {
            .topbar {
                left: 0 !important;
            }

            .content {
                margin-left: 0 !important;
            }

            .sidebar {
                transform: translateX(calc(-1 * var(--sidebar-width)));
            }

            .sidebar.mobile-open {
                transform: translateX(0);
            }
        }
    </style>
    @stack('styles')
    @livewireStyles
    {{-- Summernote CSS / JS --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</head>

<body>
    <div id="overlay" class="overlay"></div>

    {{-- TOPBAR --}}
    <nav id="topbar" class="navbar bg-white border-bottom fixed-top topbar px-3 d-flex justify-content-between">
        <div class="d-flex align-items-center gap-2">
            <button id="toggleBtn" class="d-none d-lg-inline-flex btn btn-light btn-icon btn-sm">
                <i class="ti ti-layout-sidebar-left-expand"></i>
            </button>
            <button id="mobileBtn" class="btn btn-light btn-icon btn-sm d-lg-none">
                <i class="ti ti-layout-sidebar-left-expand"></i>
            </button>
        </div>
        <ul class="list-unstyled d-flex align-items-center mb-0 gap-1">
            <li class="ms-3 dropdown">
                <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="fw-semibold small">{{ auth()->user()->name ?? 'Admin' }}</span>
                    <i class="ti ti-chevron-down ms-1"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end p-0" style="min-width:200px">
                    <div class="p-3 border-bottom">
                        <p class="mb-0 small fw-semibold">{{ auth()->user()->name ?? 'Admin' }}</p>
                        <p class="mb-0 small text-muted">{{ auth()->user()->email ?? '' }}</p>
                    </div>
                    <div class="p-2">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item text-danger">
                                <i class="ti ti-logout me-2"></i> Đăng xuất
                            </button>
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </nav>

    {{-- SIDEBAR --}}
    <aside id="sidebar" class="sidebar">
        <div class="logo-area">
            <a href="{{ route('admin.dashboard') }}" class="d-inline-flex align-items-center text-decoration-none">
                <span
                    style="font-family: 'Oswald', sans-serif; font-weight: 700; font-size: 1.2rem; background: linear-gradient(45deg, #ff9a9e 0%, #fad0c4 99%, #fad0c4 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; text-transform: uppercase; letter-spacing: 1px;">
                    Tuấn Code Cloud
                </span>
            </a>
        </div>
        <ul class="nav flex-column mt-2">
            <li class="px-4 py-2"><small class="text-muted text-uppercase" style="font-size:.7rem">Chính</small></li>
            <li>
                <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
                    href="{{ route('admin.dashboard') }}">
                    <i class="ti ti-home"></i><span>Tổng quan</span>
                </a>
            </li>

            <li class="px-4 py-2 mt-2"><small class="text-muted text-uppercase" style="font-size:.7rem">Nội dung</small>
            </li>
            <li>
                <a class="nav-link {{ request()->routeIs('admin.categories*') ? 'active' : '' }}"
                    href="{{ route('admin.categories.index') }}">
                    <i class="ti ti-tags"></i><span>Danh mục Blog</span>
                </a>
            </li>
            <li>
                <a class="nav-link {{ request()->routeIs('admin.blog*') ? 'active' : '' }}"
                    href="{{ route('admin.blog.index') }}">
                    <i class="ti ti-article"></i><span>Blog</span>
                </a>
            </li>
            <li>
                <a class="nav-link {{ request()->routeIs('admin.services*') ? 'active' : '' }}"
                    href="{{ route('admin.services.index') }}">
                    <i class="ti ti-robot"></i><span>Sản phẩm AI</span>
                </a>
            </li>
            <li>
                <a class="nav-link {{ request()->routeIs('admin.portfolio*') ? 'active' : '' }}"
                    href="{{ route('admin.portfolio.index') }}">
                    <i class="ti ti-layout-grid"></i><span>Portfolio</span>
                </a>
            </li>
            <li>
                <a class="nav-link {{ request()->routeIs('admin.pricing*') ? 'active' : '' }}"
                    href="{{ route('admin.pricing.index') }}">
                    <i class="ti ti-businessplan"></i><span>Bảng giá (Pricing)</span>
                </a>
            </li>
            <li>
                <a class="nav-link {{ request()->routeIs('admin.testimonials*') ? 'active' : '' }}"
                    href="{{ route('admin.testimonials.index') }}">
                    <i class="ti ti-message-circle"></i><span>Đánh giá</span>
                </a>
            </li>
            <li>
                <a class="nav-link {{ request()->routeIs('admin.partners*') ? 'active' : '' }}"
                    href="{{ route('admin.partners.index') }}">
                    <i class="ti ti-handshake"></i><span>Logo đối tác</span>
                </a>
            </li>
            <li>
                <a class="nav-link {{ request()->routeIs('admin.faqs*') ? 'active' : '' }}"
                    href="{{ route('admin.faqs.index') }}">
                    <i class="ti ti-help"></i><span>Hỏi đáp (FAQ)</span>
                </a>
            </li>
            <li>
                <a class="nav-link {{ request()->routeIs('admin.contacts*') ? 'active' : '' }}"
                    href="{{ route('admin.contacts.index') }}">
                    <i class="ti ti-mail"></i><span>Liên hệ</span>
                </a>
            </li>
            <li>
                <a class="nav-link {{ request()->routeIs('admin.settings*') ? 'active' : '' }}"
                    href="{{ route('admin.settings') }}">
                    <i class="ti ti-settings"></i><span>Cấu hình trang chủ</span>
                </a>
            </li>
            <li>
                <a class="nav-link {{ request()->routeIs('admin.footer-settings*') ? 'active' : '' }}"
                    href="{{ route('admin.footer-settings') }}">
                    <i class="ti ti-layout-bottombar"></i><span>Cấu hình Footer</span>
                </a>
            </li>
            <li>
                <a class="nav-link {{ request()->routeIs('admin.media-settings*') ? 'active' : '' }}"
                    href="{{ route('admin.media-settings') }}">
                    <i class="ti ti-photo"></i><span>Quản lý Hình ảnh</span>
                </a>
            </li>

            <li class="px-4 py-2 mt-2"><small class="text-muted text-uppercase" style="font-size:.7rem">Tài
                    khoản</small></li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="nav-link w-100 text-start border-0 bg-transparent text-danger">
                        <i class="ti ti-logout"></i><span>Đăng xuất</span>
                    </button>
                </form>
            </li>
        </ul>
    </aside>

    {{-- MAIN CONTENT --}}
    <main id="content" class="content px-3">
        <div class="container-fluid">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            {{ $slot }}

            <footer class="text-center py-3 mt-4 text-muted small border-top">
                &copy; {{ date('Y') }} Trang quản trị Tuấn Code Cloud
            </footer>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const sidebar = document.getElementById('sidebar');
        const content = document.getElementById('content');
        const topbar = document.getElementById('topbar');
        const overlay = document.getElementById('overlay');

        document.getElementById('toggleBtn')?.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
            content.classList.toggle('collapsed');
            topbar.classList.toggle('collapsed');
        });
        document.getElementById('mobileBtn')?.addEventListener('click', () => {
            sidebar.classList.toggle('mobile-open');
            overlay.classList.toggle('show');
        });
        overlay.addEventListener('click', () => {
            sidebar.classList.remove('mobile-open');
            overlay.classList.remove('show');
        });
    </script>
    @stack('scripts')
    @livewireScripts
</body>

</html>