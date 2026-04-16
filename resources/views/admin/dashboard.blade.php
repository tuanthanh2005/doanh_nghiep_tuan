<div>
    <div class="mb-4">
        <h1 class="fs-3 mb-1">Dashboard</h1>
        <p class="text-muted">Tổng quan hệ thống Monoline</p>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-lg-3 col-6">
            <a href="{{ route('admin.blog.index') }}" class="text-decoration-none">
                <div class="card p-4 bg-primary bg-opacity-10 border border-primary border-opacity-25 rounded-2">
                    <div class="d-flex gap-3">
                        <div class="icon-shape icon-md bg-primary text-white rounded-2"><i
                                class="ti ti-article fs-4"></i></div>
                        <div>
                            <h6 class="mb-1 text-dark">Blog</h6>
                            <h3 class="fw-bold mb-0 text-dark">{{ $stats['blog'] }}</h3>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-6">
            <a href="{{ route('admin.services.index') }}" class="text-decoration-none">
                <div class="card p-4 bg-success bg-opacity-10 border border-success border-opacity-25 rounded-2">
                    <div class="d-flex gap-3">
                        <div class="icon-shape icon-md bg-success text-white rounded-2"><i
                                class="ti ti-briefcase fs-4"></i></div>
                        <div>
                            <h6 class="mb-1 text-dark">Dịch vụ</h6>
                            <h3 class="fw-bold mb-0 text-dark">{{ $stats['services'] }}</h3>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-6">
            <a href="{{ route('admin.portfolio.index') }}" class="text-decoration-none">
                <div class="card p-4 bg-info bg-opacity-10 border border-info border-opacity-25 rounded-2">
                    <div class="d-flex gap-3">
                        <div class="icon-shape icon-md bg-info text-white rounded-2"><i
                                class="ti ti-layout-grid fs-4"></i></div>
                        <div>
                            <h6 class="mb-1 text-dark">Portfolio</h6>
                            <h3 class="fw-bold mb-0 text-dark">{{ $stats['portfolio'] }}</h3>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-6">
            <a href="{{ route('admin.contacts.index') }}" class="text-decoration-none">
                <div class="card p-4 bg-danger bg-opacity-10 border border-danger border-opacity-25 rounded-2">
                    <div class="d-flex gap-3">
                        <div class="icon-shape icon-md bg-danger text-white rounded-2"><i class="ti ti-mail fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-1 text-dark">Liên hệ mới</h6>
                            <h3 class="fw-bold mb-0 text-dark">{{ $stats['contacts'] }}</h3>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="row g-3">
        <div class="col-lg-6">
            <div class="card h-100">
                <div class="card-header bg-white px-4 py-3 d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Liên hệ mới nhất</h5>
                    <a href="{{ route('admin.contacts.index') }}" class="small text-primary">Xem tất cả</a>
                </div>
                <ul class="list-group list-group-flush">
                    @forelse($recentContacts as $c)
                        <li class="list-group-item d-flex justify-content-between align-items-center px-4">
                            <div>
                                <p class="mb-0 fw-semibold small">{{ $c->name }}</p>
                                <small class="text-muted">{{ Str::limit($c->subject, 40) }}</small>
                            </div>
                            <span class="badge bg-{{ $c->is_read ? 'secondary' : 'danger' }}">
                                {{ $c->is_read ? 'Đã đọc' : 'Mới' }}
                            </span>
                        </li>
                    @empty
                        <li class="list-group-item text-muted text-center py-3">Chưa có liên hệ nào</li>
                    @endforelse
                </ul>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card h-100">
                <div class="card-header bg-white px-4 py-3 d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Blog mới nhất</h5>
                    <a href="{{ route('admin.blog.index') }}" class="small text-primary">Xem tất cả</a>
                </div>
                <ul class="list-group list-group-flush">
                    @forelse($recentBlogs as $b)
                        <li class="list-group-item d-flex justify-content-between align-items-center px-4">
                            <div>
                                <p class="mb-0 fw-semibold small">{{ Str::limit($b->title, 40) }}</p>
                                <small class="text-muted">{{ $b->category }} ·
                                    {{ $b->published_at?->format('d/m/Y') }}</small>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <span class="badge bg-{{ $b->is_published ? 'success' : 'warning' }}">
                                    {{ $b->is_published ? 'Đã đăng' : 'Nháp' }}
                                </span>
                                <a href="{{ route('admin.blog.edit', $b->id) }}"
                                    class="btn btn-sm btn-outline-secondary py-0 px-1">
                                    <i class="ti ti-edit"></i>
                                </a>
                            </div>
                        </li>
                    @empty
                        <li class="list-group-item text-muted text-center py-3">Chưa có bài viết nào</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>