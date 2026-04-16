<div>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fs-3 mb-1">Sản phẩm AI</h1>
            <p class="text-muted mb-0">Quản lý danh sách sản phẩm AI giá rẻ</p>
        </div>
        <a href="{{ route('admin.services.create') }}" class="btn btn-primary">
            <i class="ti ti-plus me-1"></i> Thêm sản phẩm
        </a>
    </div>
    @livewire('tables.service-table')
</div>
