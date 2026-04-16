<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Portfolio;

class PortfolioFilter extends Component
{
    public string $activeCategory = 'all';

    public function getCategoriesProperty(): array
    {
        $services = \App\Models\Service::where('is_active', true)->orderBy('order')->pluck('title', 'slug')->toArray();
        return array_merge(['all' => 'Tất cả'], $services);
    }

    public function filterBy(string $category): void
    {
        $this->activeCategory = $category;
    }

    public function render()
    {
        $portfolios = Portfolio::when(
            $this->activeCategory !== 'all',
            fn($q) => $q->where('category', $this->activeCategory)
        )->where('is_active', true)->orderBy('order')->get();

        return view('livewire.portfolio-filter', compact('portfolios'));
    }
}
