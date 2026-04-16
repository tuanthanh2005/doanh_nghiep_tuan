<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LoginPage extends Component
{
    public string $email    = '';
    public string $password = '';
    public bool   $remember = false;

    protected function rules(): array
    {
        return [
            'email'    => 'required|email',
            'password' => 'required|min:6',
        ];
    }

    public function login(): void
    {
        $this->validate();

        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            $this->addError('email', 'Email hoặc mật khẩu không đúng.');
            return;
        }

        session()->regenerate();

        // Kiểm tra role — chỉ admin mới vào được
        if (!Auth::user()->hasRole('admin')) {
            Auth::logout();
            $this->addError('email', 'Bạn không có quyền truy cập trang quản trị.');
            return;
        }

        $this->redirect(route('admin.dashboard'));
    }

    public function render()
    {
        return view('auth.login')
            ->layout('layouts.auth');
    }
}
