<div class="container d-flex align-items-center justify-content-center min-vh-100">
    <style>
        body {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            color: #f8fafc;
        }
        .register-card {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 450px;
            overflow: hidden;
        }
        .register-header {
            padding: 40px 40px 20px;
            text-align: center;
        }
        .register-body {
            padding: 20px 40px 40px;
        }
        .form-control {
            background: rgba(15, 23, 42, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            color: #f8fafc;
            padding: 12px 16px;
            transition: all 0.3s ease;
        }
        .form-control:focus {
            background: rgba(15, 23, 42, 0.8);
            border-color: #38bdf8;
            box-shadow: 0 0 0 4px rgba(56, 189, 248, 0.1);
            color: #fff;
        }
        .form-label {
            font-weight: 500;
            margin-bottom: 8px;
            color: #94a3b8;
        }
        .btn-register {
            background: linear-gradient(to right, #0ea5e9, #2563eb);
            border: none;
            border-radius: 12px;
            color: white;
            font-weight: 600;
            padding: 12px;
            margin-top: 10px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .btn-register:hover {
            transform: translateY(-1px);
            box-shadow: 0 10px 15px -3px rgba(37, 99, 235, 0.4);
            color: white;
        }
        .btn-register:active {
            transform: translateY(0);
        }
        .invalid-feedback {
            color: #fb7185;
        }
        .logo-placeholder {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #38bdf8 0%, #2563eb 100%);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            box-shadow: 0 10px 20px -5px rgba(37, 99, 235, 0.5);
        }
        .logo-placeholder span {
            font-size: 24px;
            font-weight: 700;
            color: white;
        }
    </style>

    <div class="register-card">
        <div class="register-header">
            <div class="logo-placeholder">
                <span>M</span>
            </div>
            <h2 class="h4 fw-bold mb-1">Tạo tài khoản Admin</h2>
            <p class="text-secondary small">Hệ thống quản trị Monoline</p>
        </div>

        <div class="register-body">
            <form wire:submit.prevent="register">
                <div class="mb-3">
                    <label class="form-label">Tên hiển thị</label>
                    <input type="text" wire:model.lazy="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nhập họ tên...">
                    @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Địa chỉ Email</label>
                    <input type="email" wire:model.lazy="email" class="form-control @error('email') is-invalid @enderror" placeholder="admin@example.com">
                    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Mật khẩu</label>
                    <input type="password" wire:model.lazy="password" class="form-control @error('password') is-invalid @enderror" placeholder="••••••••">
                    @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label">Xác nhận mật khẩu</label>
                    <input type="password" wire:model.lazy="password_confirmation" class="form-control" placeholder="••••••••">
                </div>

                <button type="submit" class="btn btn-register w-100" wire:loading.attr="disabled">
                    <span wire:loading.remove>Đăng kí tài khoản</span>
                    <span wire:loading>Đang khởi tạo...</span>
                </button>
            </form>
            
            <div class="text-center mt-4">
                <a href="{{ route('login') }}" class="text-decoration-none small text-secondary">
                    Đã có tài khoản? <span class="text-info">Đăng nhập</span>
                </a>
            </div>
        </div>
    </div>
</div>
