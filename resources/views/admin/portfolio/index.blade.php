<div>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fs-3 mb-1">Portfolio</h1>
            <p class="text-muted mb-0">Quản lý dự án</p>
        </div>
        <a href="{{ route('admin.portfolio.create') }}" class="btn btn-primary">
            <i class="ti ti-plus me-1"></i> Thêm dự án
        </a>
    </div>
    @livewire('tables.portfolio-table')
</div>
