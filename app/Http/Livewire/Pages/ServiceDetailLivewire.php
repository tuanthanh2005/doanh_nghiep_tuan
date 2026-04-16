<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\Service;

class ServiceDetailLivewire extends Component
{
    public string $slug = '';

    public function mount(string $slug): void
    {
        $this->slug = $slug;
    }

    public function render()
    {
        return view('pages.service.show', [
            'service' => Service::where('slug', $this->slug)->firstOrFail(),
        ])->layout('layouts.app');
    }
}
