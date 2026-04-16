<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\Faq;

class FaqLivewire extends Component
{
    public string $activeTab = 'Thiết kế website';

    public function render()
    {
        $faqs = Faq::where('is_active', true)
                   ->orderBy('order')
                   ->get()
                   ->groupBy('category');

        return view('pages.faq', compact('faqs'))
            ->layout('layouts.app');
    }
}
