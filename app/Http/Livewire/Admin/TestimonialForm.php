<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Testimonial;

class TestimonialForm extends Component
{
    public ?int    $testimonialId = null;
    public string  $name = '';
    public string  $position = '';
    public string  $company = '';
    public string  $content = '';
    public bool    $is_active = true;
    public int     $order = 0;

    protected function rules(): array
    {
        return [
            'name'     => 'required|max:255',
            'position' => 'required|max:255',
            'company'  => 'required|max:255',
            'content'  => 'required',
            'is_active'=> 'boolean',
            'order'    => 'integer|min:0',
        ];
    }

    public function mount(?int $id = null): void
    {
        if ($id) {
            $t = Testimonial::findOrFail($id);
            $this->testimonialId = $t->id;
            $this->name          = $t->name;
            $this->position      = $t->position;
            $this->company       = $t->company;
            $this->content       = $t->content;
            $this->is_active     = $t->is_active;
            $this->order         = $t->order;
        }
    }

    public function save(): void
    {
        $this->validate();

        $data = [
            'name'     => $this->name,
            'position' => $this->position,
            'company'  => $this->company,
            'content'  => $this->content,
            'is_active'=> $this->is_active,
            'order'    => $this->order,
        ];

        if ($this->testimonialId) {
            Testimonial::findOrFail($this->testimonialId)->update($data);
            session()->flash('success', 'Đánh giá đã được cập nhật.');
        } else {
            Testimonial::create($data);
            session()->flash('success', 'Đánh giá đã được tạo.');
        }

        $this->redirect(route('admin.testimonials.index'));
    }

    public function render()
    {
        return view('livewire.admin.testimonial-form')
            ->layout('layouts.admin', ['title' => $this->testimonialId ? 'Sửa đánh giá' : 'Thêm đánh giá']);
    }
}
