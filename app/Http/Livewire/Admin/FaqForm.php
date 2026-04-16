<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Faq;

class FaqForm extends Component
{
    public $faqId = null;
    public $question;
    public $answer;
    public $category = 'Thiết kế website';
    public $is_active = true;
    public $order = 0;

    protected $rules = [
        'question' => 'required|string|max:255',
        'answer' => 'required|string',
        'category' => 'required|string|max:255',
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    public function mount($id = null)
    {
        if ($id) {
            $faq = Faq::findOrFail($id);
            $this->faqId = $faq->id;
            $this->question = $faq->question;
            $this->answer = $faq->answer;
            $this->category = $faq->category;
            $this->is_active = $faq->is_active;
            $this->order = $faq->order;
        }
    }

    public function save()
    {
        $this->validate();

        Faq::updateOrCreate(
            ['id' => $this->faqId],
            [
                'question' => $this->question,
                'answer' => $this->answer,
                'category' => $this->category,
                'is_active' => $this->is_active,
                'order' => $this->order,
            ]
        );

        session()->flash('success', 'Đã lưu FAQ thành công!');
        return redirect()->route('admin.faqs.index');
    }

    public function render()
    {
        return view('livewire.admin.faq-form')
            ->layout('layouts.admin', ['title' => $this->faqId ? 'Sửa FAQ' : 'Thêm FAQ']);
    }
}
