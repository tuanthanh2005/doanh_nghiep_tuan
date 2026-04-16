<div>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fs-3 mb-1">Cấu hình trang chủ</h1>
    </div>

    <form wire:submit.prevent="save">
        <div class="card shadow-sm border-0 mb-4">
            <div class="card-header bg-white">
                <h5 class="mb-0">Banner (Top)</h5>
            </div>
            <div class="card-body p-4">
                <div class="mb-3">
                    <label class="form-label">Tiêu đề chính (Title)</label>
                    <input type="text" class="form-control" wire:model="hero_title">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mô tả phụ (Subtitle)</label>
                    <textarea class="form-control" wire:model="hero_subtitle" rows="2"></textarea>
                </div>
            </div>
        </div>

        <div class="card shadow-sm border-0 mb-4">
            <div class="card-header bg-white fw-bold">Mục: Dịch vụ (Our Services)</div>
            <div class="card-body p-4">
                <div class="mb-3">
                    <label class="form-label">Tiêu đề khu vực (Ví dụ: Our Services)</label>
                    <input type="text" class="form-control" wire:model="home_service_title">
                </div>
                <div class="mb-3">
                    <label class="form-label">Câu giới thiệu phụ</label>
                    <textarea class="form-control" wire:model="home_service_subtitle" rows="2"></textarea>
                </div>
            </div>
        </div>

        <div class="card shadow-sm border-0 mb-4">
            <div class="card-header bg-white">
                <h5 class="mb-0">Thống kê (Counters)</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label class="form-label">Số liệu 1</label>
                        <input type="text" class="form-control mb-2" wire:model="counter1_num">
                        <input type="text" class="form-control" wire:model="counter1_label" placeholder="Nhãn">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label class="form-label">Số liệu 2</label>
                        <input type="text" class="form-control mb-2" wire:model="counter2_num">
                        <input type="text" class="form-control" wire:model="counter2_label" placeholder="Nhãn">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label class="form-label">Số liệu 3</label>
                        <input type="text" class="form-control mb-2" wire:model="counter3_num">
                        <input type="text" class="form-control" wire:model="counter3_label" placeholder="Nhãn">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label class="form-label">Số liệu 4</label>
                        <input type="text" class="form-control mb-2" wire:model="counter4_num">
                        <input type="text" class="form-control" wire:model="counter4_label" placeholder="Nhãn">
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary px-4">
            <i class="ti ti-device-floppy me-1"></i> Lưu cấu hình
        </button>
    </form>
</div>

