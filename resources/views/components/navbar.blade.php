<header class="site-navbar js-sticky-header site-navbar-target" role="banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6 col-xl-2">
                <h1 class="mb-0 site-logo">
                    <a href="{{ route('home') }}" style="text-decoration: none;">
                        <span style="font-family: 'Oswald', sans-serif; font-weight: 700; font-size: 1.5rem; background: linear-gradient(45deg, #ff9a9e 0%, #fad0c4 99%, #fad0c4 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; text-transform: uppercase; letter-spacing: 1px;">
                            Tuấn Code Claud
                        </span>
                    </a>
                </h1>
            </div>
            <div class="col-12 col-md-10 d-none d-xl-block">
                <nav class="site-navigation position-relative text-right" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                                href="{{ route('home') }}">Trang chủ</a></li>
                        <li><a class="nav-link {{ request()->routeIs('pricing*') ? 'active' : '' }}"
                                href="{{ route('pricing.index') }}">Bảng giá</a></li>
                        <li>
                            <a href="{{ route('services.index') }}"
                                class="nav-link {{ request()->routeIs('services*') ? 'active' : '' }}">Sản phẩm AI</a>
                        </li>
                        <li>
                            <a href="{{ route('portfolio.index') }}"
                                class="nav-link {{ request()->routeIs('portfolio*') ? 'active' : '' }}">Dự án</a>
                        </li>
                        <li class="has-children">
                            <a href="#" class="nav-link">Trang</a>
                            <ul class="dropdown">
                                <li><a href="{{ route('faq.index') }}" class="nav-link">FAQ</a></li>
                                <li><a href="{{ route('about') }}" class="nav-link">Giới thiệu</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('blog.index') }}"
                                class="nav-link {{ request()->routeIs('blog*') ? 'active' : '' }}">Tin tức</a>
                        </li>
                        <li><a class="nav-link {{ request()->routeIs('contact*') ? 'active' : '' }}"
                                href="{{ route('contact.index') }}">Liên hệ</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position:relative;top:3px;">
                <a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
            </div>
        </div>
    </div>
</header>