<div>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fs-3 mb-1">{{ $testimonialId ? 'Sửa Đánh giá' : 'Thêm Đánh giá' }}</h1>
        </div>
        <a href="{{ route('admin.testimonials.index') }}" class="btn btn-outline-secondary">
            <i class="ti ti-arrow-left me-1"></i> Quay lại
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-4">
            <form wire:submit.prevent="save">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Tên khách hàng <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="name">
                        @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Chức vụ <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('position') is-invalid @enderror" wire:model="position">
                        @error('position') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Công ty <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('company') is-invalid @enderror" wire:model="company">
                    @error('company') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Nội dung đánh giá <span class="text-danger">*</span></label>
                    <x-admin.richtext model="content" />
                    @error('content') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                </div>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input" type="checkbox" role="switch" id="is_active" wire:model="is_active">
                            <label class="form-check-label" for="is_active">Hiển thị</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Thứ tự hiển thị</label>
                        <input type="number" class="form-control @error('order') is-invalid @enderror" wire:model="order">
                        @error('order') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                </div>

                <hr>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary px-4">
                        <i class="ti ti-device-floppy me-1"></i> Lưu Đánh giá
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

