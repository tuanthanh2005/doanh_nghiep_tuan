<div>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fs-3 mb-1">Team</h1>
            <p class="text-muted mb-0">Quản lý thành viên</p>
        </div>
        <a href="{{ route('admin.team.create') }}" class="btn btn-primary">
            <i class="ti ti-plus me-1"></i> Thêm thành viên
        </a>
    </div>
    @livewire('tables.team-table')
</div>
