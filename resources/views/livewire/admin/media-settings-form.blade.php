<div class="card border-0 shadow-sm">
    <div class="card-header bg-white py-3">
        <h5 class="card-title mb-0">Quản lý Hình ảnh Hệ thống</h5>
        <p class="text-muted small mb-0">Nơi thay thế các hình ảnh nền, banner và ảnh tĩnh trên toàn trang web.</p>
    </div>
    <div class="card-body">
        <form wire:submit.prevent="save">
            <div class="row">
                <!-- Banner Section -->
                <div class="col-12 mb-3 mt-2">
                    <h6 class="text-primary border-bottom pb-2">Hình nền & Banners</h6>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card h-100 border p-3">
                        <label class="fw-bold small mb-0">Ảnh nền Banner Chính</label>
                        <span class="text-danger small mb-2">(Kích thước: 1920x1080px)</span>
                        <div class="mb-3">
                            <img src="{{ asset($existing_hero_bg) }}" class="img-fluid rounded mb-2" style="height: 120px; width: 100%; object-fit: cover;">
                        </div>
                        <input type="file" wire:model="hero_bg" class="form-control form-control-sm">
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card h-100 border p-3">
                        <label class="fw-bold small mb-0">Ảnh nền Tiêu đề Trang</label>
                        <span class="text-danger small mb-2">(Kích thước: 1920x400px)</span>
                        <div class="mb-3">
                            <img src="{{ asset($existing_breadcrumb_bg) }}" class="img-fluid rounded mb-2" style="height: 120px; width: 100%; object-fit: cover;">
                        </div>
                        <input type="file" wire:model="breadcrumb_bg" class="form-control form-control-sm">
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card h-100 border p-3">
                        <label class="fw-bold small mb-0">Ảnh nền Chân trang</label>
                        <span class="text-danger small mb-2">(Kích thước: 1920x600px)</span>
                        <div class="mb-3">
                            <img src="{{ asset($existing_footer_bg) }}" class="img-fluid rounded mb-2" style="height: 120px; width: 100%; object-fit: cover;">
                        </div>
                        <input type="file" wire:model="footer_bg" class="form-control form-control-sm">
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card h-100 border p-3">
                        <label class="fw-bold small mb-0">Ảnh nền Bảng giá (Dịch vụ)</label>
                        <span class="text-danger small mb-2">(Kích thước: 1920x1080px)</span>
                        <div class="mb-3">
                            <img src="{{ asset($existing_pricing_bg) }}" class="img-fluid rounded mb-2" style="height: 120px; width: 100%; object-fit: cover;">
                        </div>
                        <input type="file" wire:model="pricing_bg" class="form-control form-control-sm">
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card h-100 border p-3">
                        <label class="fw-bold small mb-0">Ảnh nền Tầm nhìn (About)</label>
                        <span class="text-danger small mb-2">(Kích thước: 1920x800px)</span>
                        <div class="mb-3">
                            <img src="{{ asset($existing_about_vision_bg) }}" class="img-fluid rounded mb-2" style="height: 120px; width: 100%; object-fit: cover;">
                        </div>
                        <input type="file" wire:model="about_vision_bg" class="form-control form-control-sm">
                    </div>
                </div>

                <!-- Branding Section -->
                <div class="col-12 mb-3 mt-4">
                    <h6 class="text-primary border-bottom pb-2">Thương hiệu & Khác</h6>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card h-100 border p-3">
                        <label class="fw-bold small mb-0">Logo Website (Dạng ảnh)</label>
                        <span class="text-danger small mb-2">(Kích thước: 400x150px - PNG)</span>
                        <div class="mb-3 text-center bg-light p-2 rounded">
                            <img src="{{ asset($existing_site_logo) }}" class="img-fluid mb-2" style="max-height: 80px; object-fit: contain;">
                        </div>
                        <input type="file" wire:model="site_logo" class="form-control form-control-sm">
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card h-100 border p-3">
                        <label class="fw-bold small mb-0">Favicon (Biểu tượng TB)</label>
                        <span class="text-danger small mb-2">(Kích thước: 32x32px hoặc 64x64px)</span>
                        <div class="mb-3 text-center bg-light p-2 rounded">
                            <img src="{{ asset($existing_site_favicon) }}" class="img-fluid mb-2" style="height: 32px; width: 32px; object-fit: contain;">
                        </div>
                        <input type="file" wire:model="site_favicon" class="form-control form-control-sm">
                    </div>
                </div>
            </div>

            <div class="mt-4 border-top pt-3 d-flex align-items-center">
                <button type="submit" class="btn btn-primary px-5 py-2 fw-bold shadow-sm">
                    <i class="ti ti-device-floppy me-2"></i> Lưu tất cả thay đổi
                </button>
                <div wire:loading class="ms-3 text-primary animate-pulse">
                    <span class="spinner-border spinner-border-sm me-2"></span> Đang tải ảnh...
                </div>
            </div>
        </form>
    </div>
</div>
