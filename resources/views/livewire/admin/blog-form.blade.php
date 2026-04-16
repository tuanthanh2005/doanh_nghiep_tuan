<div>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fs-3 mb-0">{{ $blogId ? 'Sửa bài viết' : 'Thêm bài viết' }}</h1>
        <a href="{{ route('admin.blog.index') }}" class="btn btn-outline-secondary btn-sm">
            <i class="ti ti-arrow-left me-1"></i> Quay lại
        </a>
    </div>

    <form wire:submit.prevent="save">
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Tiêu đề <span class="text-danger">*</span></label>
                            <input type="text" wire:model.blur="title" class="form-control @error('title') is-invalid @enderror" placeholder="Nhập tiêu đề bài viết">
                            @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Tóm tắt</label>
                            <textarea wire:model="excerpt" rows="3" class="form-control @error('excerpt') is-invalid @enderror" placeholder="Tóm tắt ngắn..."></textarea>
                            @error('excerpt') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nội dung <span class="text-danger">*</span></label>
                            <x-admin.richtext model="content" />
                            @error('content') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card mb-3">
                    <div class="card-header bg-white fw-semibold">Thông tin</div>
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Danh mục <span class="text-danger">*</span></label>
                            <select wire:model="category" class="form-select @error('category') is-invalid @enderror">
                                <option value="">-- Chọn danh mục --</option>
                                @foreach(\App\Models\Category::all() as $cat)
                                <option value="{{ $cat->slug }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                            @error('category') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Tác giả <span class="text-danger">*</span></label>
                            <input type="text" wire:model="author" class="form-control @error('author') is-invalid @enderror" placeholder="Tên tác giả">
                            @error('author') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="mb-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" wire:model="is_published" id="is_published">
                                <label class="form-check-label" for="is_published">Đăng bài</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header bg-white fw-semibold">Ảnh bìa</div>
                    <div class="card-body p-4">
                        @if($existingImage && !$image)
                            <img src="{{ asset($existingImage) }}" class="img-fluid rounded mb-2" alt="Current image">
                        @endif
                        @if($image)
                            <img src="{{ $image->temporaryUrl() }}" class="img-fluid rounded mb-2" alt="Preview">
                        @endif
                        <input type="file" wire:model="image" class="form-control @error('image') is-invalid @enderror" accept="image/*">
                        @error('image') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        <div wire:loading wire:target="image" class="text-muted small mt-1">Đang tải...</div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100" wire:loading.attr="disabled">
                    <span wire:loading.remove><i class="ti ti-device-floppy me-1"></i> Lưu bài viết</span>
                    <span wire:loading>Đang lưu...</span>
                </button>
            </div>
        </div>
    </form>
</div>

