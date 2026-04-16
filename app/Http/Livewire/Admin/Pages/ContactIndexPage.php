<?php

namespace App\Http\Livewire\Admin\Pages;

use Livewire\Component;

class ContactIndexPage extends Component
{
    public function render()
    {
        return view('admin.contact.index')
            ->layout('layouts.admin', ['title' => 'Quản lý Liên hệ']);
    }
}
