<div>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fs-3 mb-1">Logo đối tác</h1>
            <p class="text-muted mb-0">Logo đối tác</p>
        </div>
        <a href="{{ route('admin.partners.create') }}" class="btn btn-primary">
            <i class="ti ti-plus me-1"></i> Thêm logo
        </a>
    </div>
    @livewire('tables.partner-table')
</div>
