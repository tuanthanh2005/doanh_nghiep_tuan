<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class PortfolioLivewire extends Component
{
    public function render()
    {
        // Data được PortfolioFilter component xử lý
        return view('pages.portfolio.index')
            ->layout('layouts.app');
    }
}
