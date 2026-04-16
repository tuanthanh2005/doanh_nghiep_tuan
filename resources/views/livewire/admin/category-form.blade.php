<div>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fs-3 mb-1">{{ $categoryId ? 'Sửa Danh mục' : 'Thêm Danh mục' }}</h1>
        </div>
        <a href="{{ route('admin.categories.index') }}" class="btn btn-outline-secondary">
            <i class="ti ti-arrow-left me-1"></i> Quay lại
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-4">
            <form wire:submit.prevent="save">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Tên danh mục <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model.blur="name" placeholder="Ví dụ: Lập trình">
                        @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Đường dẫn tĩnh (Slug) <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" wire:model="slug" placeholder="Ví dụ: lap-trinh">
                        @error('slug') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                </div>

                <hr>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary px-4">
                        <i class="ti ti-device-floppy me-1"></i> Lưu Danh mục
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
