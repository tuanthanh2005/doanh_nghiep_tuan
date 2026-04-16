<?php

namespace App\Http\Livewire\Forms;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class NewsletterForm extends Component
{
    public string $email      = '';
    public bool   $subscribed = false;

    protected function rules(): array
    {
        return ['email' => 'required|email|unique:newsletter_subscribers,email'];
    }

    protected function messages(): array
    {
        return [
            'email.required' => 'Vui lòng nhập email.',
            'email.email'    => 'Email không hợp lệ.',
            'email.unique'   => 'Email này đã đăng ký rồi.',
        ];
    }

    public function subscribe(): void
    {
        $this->validate();

        DB::table('newsletter_subscribers')->insert([
            'email'      => $this->email,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        try {
            \Illuminate\Support\Facades\Mail::raw("Có người đăng ký nhận tin mới: " . $this->email, function ($message) {
                $message->to('support@tuancode.cloud')
                    ->subject('Đăng ký nhận tin mới');
            });
        } catch (\Exception $e) {
            \Log::error('Newsletter mail fail: ' . $e->getMessage());
        }

        $this->reset('email');
        $this->subscribed = true;
    }

    public function render()
    {
        return view('livewire.forms.newsletter-form');
    }
}
