<?php

namespace App\Http\Livewire\Forms;

use Livewire\Component;
use App\Models\Contact;

class ContactForm extends Component
{
    public string $name    = '';
    public string $email   = '';
    public string $subject = '';
    public string $message = '';
    public bool   $sent    = false;

    protected function rules(): array
    {
        return [
            'name'    => 'required|min:2|max:100',
            'email'   => 'required|email|max:100',
            'subject' => 'required|min:3|max:200',
            'message' => 'required|min:10',
        ];
    }

    protected function messages(): array
    {
        return [
            'name.required'    => 'Vui lòng nhập tên.',
            'name.min'         => 'Tên tối thiểu 2 ký tự.',
            'email.required'   => 'Vui lòng nhập email.',
            'email.email'      => 'Email không hợp lệ.',
            'subject.required' => 'Vui lòng nhập chủ đề.',
            'message.required' => 'Vui lòng nhập nội dung.',
            'message.min'      => 'Nội dung tối thiểu 10 ký tự.',
        ];
    }

    public function submit(): void
    {
        $this->validate();

        $data = [
            'name'    => $this->name,
            'email'   => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
        ];

        Contact::create($data);

        try {
            \Illuminate\Support\Facades\Mail::to('support@tuancode.cloud')->send(new \App\Mail\ContactSubmission($data));
        } catch (\Exception $e) {
            \Log::error('Mail sending failed: ' . $e->getMessage());
        }

        $this->reset(['name', 'email', 'subject', 'message']);
        $this->sent = true;
    }

    public function render()
    {
        return view('livewire.forms.contact-form');
    }
}
