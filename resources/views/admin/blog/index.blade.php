<div>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fs-3 mb-1">Blog</h1>
            <p class="text-muted mb-0">Quản lý bài viết</p>
        </div>
        <a href="{{ route('admin.blog.create') }}" class="btn btn-primary">
            <i class="ti ti-plus me-1"></i> Thêm bài viết
        </a>
    </div>
    @livewire('tables.blog-table')
</div>
