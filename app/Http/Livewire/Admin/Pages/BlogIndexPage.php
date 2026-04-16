<?php

namespace App\Http\Livewire\Admin\Pages;

use Livewire\Component;

class BlogIndexPage extends Component
{
    public function render()
    {
        return view('admin.blog.index')
            ->layout('layouts.admin', ['title' => 'Quản lý Blog']);
    }
}
