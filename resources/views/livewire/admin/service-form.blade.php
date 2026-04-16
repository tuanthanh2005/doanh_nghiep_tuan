<div>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fs-3 mb-0">{{ $serviceId ? 'Sửa sản phẩm AI' : 'Thêm sản phẩm AI' }}</h1>
        <a href="{{ route('admin.services.index') }}" class="btn btn-outline-secondary btn-sm">
            <i class="ti ti-arrow-left me-1"></i> Quay lại
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-4">
            <form wire:submit.prevent="save">
                <div class="row g-3">
                    <div class="col-md-8">
                        <label class="form-label fw-semibold">Tên sản phẩm <span class="text-danger">*</span></label>
                        <input type="text" wire:model.blur="title" class="form-control @error('title') is-invalid @enderror" placeholder="Tên sản phẩm (VD: ChatGPT Plus)">
                        @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-semibold">Biểu tượng (Icon)</label>
                        <input type="text" wire:model="icon" class="form-control" placeholder="research.png">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label fw-semibold">Giá niêm yết</label>
                        <div class="input-group">
                            <input type="number" wire:model="price" class="form-control @error('price') is-invalid @enderror" placeholder="0">
                            <span class="input-group-text">đ</span>
                        </div>
                        @error('price') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-semibold">Giá khuyến mãi</label>
                        <div class="input-group">
                            <input type="number" wire:model="sale_price" class="form-control @error('sale_price') is-invalid @enderror" placeholder="0">
                            <span class="input-group-text">đ</span>
                        </div>
                        @error('sale_price') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-semibold">Nhãn (Badge)</label>
                        <input type="text" wire:model="badge" class="form-control" placeholder="VD: Hot, Sale, Mới">
                    </div>

                    <div class="col-12">
                        <label class="form-label fw-semibold">Mô tả sản phẩm</label>
                        <x-admin.richtext model="description" />
                    </div>

                    <div class="col-md-4">
                        <label class="form-label fw-semibold">Thứ tự ưu tiên</label>
                        <input type="number" wire:model="order" class="form-control" min="0">
                    </div>
                    <div class="col-md-4 d-flex align-items-end">
                        <div class="form-check form-switch pb-2">
                            <input class="form-check-input" type="checkbox" wire:model="is_active" id="is_active">
                            <label class="form-check-label fw-semibold" for="is_active">Đang bán</label>
                        </div>
                    </div>
                    <div class="col-12 pt-3">
                        <button type="submit" class="btn btn-primary px-4" wire:loading.attr="disabled">
                            <span wire:loading.remove><i class="ti ti-device-floppy me-1"></i> Lưu sản phẩm</span>
                            <span wire:loading><span class="spinner-border spinner-border-sm me-1"></span> Đang lưu...</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


