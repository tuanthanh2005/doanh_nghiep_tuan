<div>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fs-3 mb-1">Đánh giá</h1>
            <p class="text-muted mb-0">Quản lý đánh giá</p>
        </div>
        <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary">
            <i class="ti ti-plus me-1"></i> Thêm đánh giá
        </a>
    </div>
    @livewire('tables.testimonial-table')
</div>
