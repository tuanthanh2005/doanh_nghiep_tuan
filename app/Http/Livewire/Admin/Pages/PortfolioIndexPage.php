<?php

namespace App\Http\Livewire\Admin\Pages;

use Livewire\Component;

class PortfolioIndexPage extends Component
{
    public function render()
    {
        return view('admin.portfolio.index')
            ->layout('layouts.admin', ['title' => 'Quản lý Portfolio']);
    }
}
