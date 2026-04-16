<div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="card shadow-sm" style="max-width:420px;width:100%">
        <div class="card-body p-5">
            <div class="text-center mb-4">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Monoline" height="40" class="mb-3">
                <h1 class="h5 fw-semibold">Đăng nhập Admin</h1>
            </div>

            <form wire:submit.prevent="login">
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" wire:model="email" class="form-control @error('email') is-invalid @enderror"
                        placeholder="admin@Monoline.com" autofocus>
                    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Mật khẩu</label>
                    <input type="password" wire:model="password"
                        class="form-control @error('password') is-invalid @enderror" placeholder="••••••••">
                    @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" wire:model="remember" id="remember">
                        <label class="form-check-label small" for="remember">Ghi nhớ đăng nhập</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100" wire:loading.attr="disabled">
                    <span wire:loading.remove>Đăng nhập</span>
                    <span wire:loading>Đang xử lý...</span>
                </button>
            </form>
        </div>
    </div>
</div>