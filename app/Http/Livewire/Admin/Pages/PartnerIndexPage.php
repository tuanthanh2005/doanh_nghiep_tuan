<?php

namespace App\Http\Livewire\Admin\Pages;

use Livewire\Component;

class PartnerIndexPage extends Component
{
    public function render()
    {
        return view('admin.partner.index')
            ->layout('layouts.admin', ['title' => 'Logo đối tác']);
    }
}
