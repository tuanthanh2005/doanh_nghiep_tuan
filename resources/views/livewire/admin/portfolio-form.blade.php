<div>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fs-3 mb-0">{{ $portfolioId ? 'Sửa portfolio' : 'Thêm portfolio' }}</h1>
        <a href="{{ route('admin.portfolio.index') }}" class="btn btn-outline-secondary btn-sm">
            <i class="ti ti-arrow-left me-1"></i> Quay lại
        </a>
    </div>

    <div class="card">
        <div class="card-body p-4">
            <form wire:submit.prevent="save">
                <div class="row g-3">
                    <div class="col-md-8">
                        <label class="form-label fw-semibold">Tên dự án <span class="text-danger">*</span></label>
                        <input type="text" wire:model.blur="title" class="form-control @error('title') is-invalid @enderror" placeholder="Tên dự án">
                        @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-semibold">Danh mục <span class="text-danger">*</span></label>
                        <select wire:model="category" class="form-select @error('category') is-invalid @enderror">
                            @foreach($this->categories as $val => $label)
                            <option value="{{ $val }}">{{ $label }}</option>
                            @endforeach
                        </select>
                        @error('category') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-12">
                        <label class="form-label fw-semibold">Mô tả</label>
                        <x-admin.richtext model="description" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Ảnh dự án</label>
                        @if($existingImage && !$image)
                            <img src="{{ asset($existingImage) }}" class="d-block img-fluid rounded mb-2" style="max-height:120px" alt="image">
                        @endif
                        @if($image)
                            <img src="{{ $image->temporaryUrl() }}" class="d-block img-fluid rounded mb-2" style="max-height:120px" alt="preview">
                        @endif
                        <input type="file" wire:model="image" class="form-control @error('image') is-invalid @enderror" accept="image/*">
                        @error('image') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-3">
                        <label class="form-label fw-semibold">Thứ tự</label>
                        <input type="number" wire:model="order" class="form-control" min="0">
                    </div>
                    <div class="col-md-3 d-flex align-items-end">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" wire:model="is_active" id="is_active">
                            <label class="form-check-label" for="is_active">Hiển thị</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">
                            <span wire:loading.remove><i class="ti ti-device-floppy me-1"></i> Lưu</span>
                            <span wire:loading>Đang lưu...</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


