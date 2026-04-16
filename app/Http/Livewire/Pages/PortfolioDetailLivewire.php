<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\Portfolio;

class PortfolioDetailLivewire extends Component
{
    public string $slug = '';

    public function mount(string $slug): void
    {
        $this->slug = $slug;
    }

    public function render()
    {
        return view('pages.portfolio.show', [
            'project' => Portfolio::where('slug', $this->slug)->firstOrFail(),
        ])->layout('layouts.app');
    }
}
