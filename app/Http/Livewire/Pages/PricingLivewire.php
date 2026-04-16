<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\Pricing;

class PricingLivewire extends Component
{
    public function render()
    {
        return view('pages.pricing', [
            'plans' => Pricing::where('is_active', true)->orderBy('order')->get(),
        ])->layout('layouts.app');
    }
}
