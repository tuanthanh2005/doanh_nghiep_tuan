<div>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">{{ $faqId ? 'Sửa FAQ' : 'Thêm FAQ' }}</h4>
        <a href="{{ route('admin.faqs.index') }}" class="btn btn-outline-secondary">
            Quay lại
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-4">
            <form wire:submit.prevent="save">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Chọn Chuyên mục</label>
                        <select class="form-control" wire:model="category">
                            <option value="Thiết kế website">Thiết kế website</option>
                            <option value="Quản trị website">Quản trị website</option>
                            <option value="Công nghệ AI">Công nghệ AI</option>
                            <option value="Dịch vụ mạng xã hội">Dịch vụ mạng xã hội</option>
                            <option value="AI giá rẻ">AI giá rẻ</option>
                            <option value="Dịch vụ MXH">Dịch vụ MXH</option>
                        </select>
                        @error('category') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Câu hỏi (Question)</label>
                        <input type="text" class="form-control @error('question') is-invalid @enderror" wire:model="question">
                        @error('question') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label">Câu trả lời (Answer)</label>
                        <textarea class="form-control @error('answer') is-invalid @enderror" rows="4" wire:model="answer"></textarea>
                        @error('answer') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Thứ tự ưu tiên</label>
                        <input type="number" class="form-control" wire:model="order">
                    </div>

                    <div class="col-md-6 mb-3 d-flex align-items-end">
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="is_active" wire:model="is_active">
                            <label class="form-check-label" for="is_active">Kích hoạt hiển thị</label>
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
