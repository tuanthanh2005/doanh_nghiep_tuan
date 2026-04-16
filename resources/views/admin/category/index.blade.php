<div>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fs-3 mb-1">Danh mục Blog</h1>
            <p class="text-muted mb-0">Quản lý danh mục Blog</p>
        </div>
        <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">
            <i class="ti ti-plus me-1"></i> Thêm danh mục
        </a>
    </div>
    @livewire('tables.category-table')
</div>
