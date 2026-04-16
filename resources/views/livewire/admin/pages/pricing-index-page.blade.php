<div>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Quản lý Bảng giá (Pricing)</h4>
        <a href="{{ route('admin.pricing.create') }}" class="btn btn-primary">
            <i class="ti ti-plus me-1"></i> Thêm Gói cước
        </a>
    </div>
    @livewire('tables.pricing-table')
</div>
