<?php

namespace App\Http\Livewire\Admin\Pages;

use Livewire\Component;

class CategoryIndexPage extends Component
{
    public function render()
    {
        return view('admin.category.index')
            ->layout('layouts.admin', ['title' => 'Quản lý Danh mục Blog']);
    }
}
