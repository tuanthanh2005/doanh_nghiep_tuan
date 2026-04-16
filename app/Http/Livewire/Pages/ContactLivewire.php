<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class ContactLivewire extends Component
{
    public function render()
    {
        // Form logic nằm trong Forms\ContactForm component
        return view('pages.contact')
            ->layout('layouts.app');
    }
}
