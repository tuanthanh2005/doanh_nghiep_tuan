<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\Team;

class AboutLivewire extends Component
{
    public function render()
    {
        return view('pages.about', [
            'members' => Team::where('is_active', true)->orderBy('order')->get(),
        ])->layout('layouts.app');
    }
}
