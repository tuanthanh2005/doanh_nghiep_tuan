<div>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fs-3 mb-0">Cấu hình Footer</h1>
    </div>

    <form wire:submit.prevent="save">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-header bg-white fw-bold">Thông tin chung (Cột 1)</div>
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <label class="form-label">Đoạn giới thiệu ngắn</label>
                            <textarea class="form-control" wire:model="footer_about" rows="4"></textarea>
                        </div>
                        <h6 class="mt-4 mb-3 fw-bold">Mạng xã hội</h6>
                        <div class="mb-3">
                            <label class="form-label"><i class="ti ti-brand-facebook text-primary"></i> Link Facebook</label>
                            <input type="text" class="form-control" wire:model="footer_fb">
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><i class="ti ti-brand-youtube text-danger"></i> Link Youtube</label>
                            <input type="text" class="form-control" wire:model="footer_yt">
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><i class="ti ti-brand-instagram text-warning"></i> Link Instagram</label>
                            <input type="text" class="form-control" wire:model="footer_ig">
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><i class="ti ti-brand-linkedin text-info"></i> Link LinkedIn</label>
                            <input type="text" class="form-control" wire:model="footer_li">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-header bg-white fw-bold">Tiêu đề các cột & Bản quyền</div>
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <label class="form-label">Tiêu đề Cột 2 (Vd: Liên kết nhanh)</label>
                            <input type="text" class="form-control" wire:model="footer_col1_title">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tiêu đề Cột 3 (Vd: Công ty)</label>
                            <input type="text" class="form-control" wire:model="footer_col2_title">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tiêu đề Cột 4 (Vd: Đăng ký nhận tin)</label>
                            <input type="text" class="form-control" wire:model="footer_col3_title">
                        </div>
                        <hr>
                        <div class="mb-3">
                            <label class="form-label">Dòng Bản quyền (Bỏ qua năm, hệ thống tự lấy năm hiện tại)</label>
                            <input type="text" class="form-control" wire:model="footer_copyright" placeholder="Monoline. All Rights Reserved.">
                        </div>
                    </div>
                </div>
                
                <div class="text-end">
                    <button type="submit" class="btn btn-primary px-5">
                        <i class="ti ti-device-floppy me-1"></i> Lưu cấu hình Footer
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
