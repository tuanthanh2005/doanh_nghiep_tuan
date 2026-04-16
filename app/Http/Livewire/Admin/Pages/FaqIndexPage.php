<?php

namespace App\Http\Livewire\Admin\Pages;

use Livewire\Component;

class FaqIndexPage extends Component
{
    public function render()
    {
        return view('livewire.admin.pages.faq-index-page')
            ->layout('layouts.admin', ['title' => 'Quản lý FAQ']);
    }
}
