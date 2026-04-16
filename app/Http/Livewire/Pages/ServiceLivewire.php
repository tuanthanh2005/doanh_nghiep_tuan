<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\Service;
use App\Models\Pricing;

class ServiceLivewire extends Component
{
    public function render()
    {
        return view('pages.service.index', [
            'services' => Service::where('is_active', true)->orderBy('order')->get(),
            'plans'    => Pricing::where('is_active', true)->orderBy('order')->get(),
        ])->layout('layouts.app');
    }
}
