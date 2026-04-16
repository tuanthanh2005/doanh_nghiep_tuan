<div>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">{{ $pricingId ? 'Sửa Gói cước' : 'Thêm Gói cước' }}</h4>
        <a href="{{ route('admin.pricing.index') }}" class="btn btn-outline-secondary">
            Quay lại
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-4">
            <form wire:submit.prevent="save">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Tên Gói</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="name">
                        @error('name') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-3 mb-3">
                        <label class="form-label">Giá</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" wire:model="price">
                        @error('price') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-3 mb-3">
                        <label class="form-label">Kỳ hạn (VD: /mo, /year)</label>
                        <input type="text" class="form-control @error('duration') is-invalid @enderror" wire:model="duration">
                        @error('duration') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label">Các dịch vụ đi kèm (Mỗi dòng là 1 dịch vụ/tính năng)</label>
                        <textarea class="form-control @error('features_text') is-invalid @enderror" rows="6" wire:model="features_text" placeholder="Ghi nhận lượng lớn data
Phân tích SEO
Chăm sóc tự động..."></textarea>
                        @error('features_text') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Thứ tự hiển thị</label>
                        <input type="number" class="form-control" wire:model="order">
                    </div>

                    <div class="col-md-4 mb-3 d-flex align-items-end">
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="is_active" wire:model="is_active">
                            <label class="form-check-label" for="is_active">Kích hoạt hiển thị</label>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-3 d-flex align-items-end">
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="is_featured" wire:model="is_featured">
                            <label class="form-check-label text-warning fw-bold" for="is_featured">Đánh dấu Nổi bật (Featured)</label>
                        </div>
                    </div>
                </div>

                <div class="mt-4 text-end">
                    <button type="submit" class="btn btn-primary px-4">
                        <i class="ti ti-device-floppy me-1"></i> Lưu thông tin
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
