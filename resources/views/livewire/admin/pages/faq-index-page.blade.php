<div>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Quản lý FAQ (Hỏi đáp)</h4>
        <a href="{{ route('admin.faqs.create') }}" class="btn btn-primary">
            <i class="ti ti-plus me-1"></i> Thêm FAQ
        </a>
    </div>
    @livewire('tables.faq-table')
</div>
