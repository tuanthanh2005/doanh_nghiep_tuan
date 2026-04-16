<?php

namespace App\Http\Livewire\Admin\Pages;

use Livewire\Component;

class TestimonialIndexPage extends Component
{
    public function render()
    {
        return view('admin.testimonial.index')
            ->layout('layouts.admin', ['title' => 'Quản lý Đánh giá']);
    }
}
