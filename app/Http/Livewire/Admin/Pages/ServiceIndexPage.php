<?php

namespace App\Http\Livewire\Admin\Pages;

use Livewire\Component;

class ServiceIndexPage extends Component
{
    public function render()
    {
        return view('admin.service.index')
            ->layout('layouts.admin', ['title' => 'Quản lý sản phẩm AI']);
    }
}
