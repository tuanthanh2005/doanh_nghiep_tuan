<?php

namespace App\Http\Livewire\Admin\Pages;

use Livewire\Component;

class PricingIndexPage extends Component
{
    public function render()
    {
        return view('livewire.admin.pages.pricing-index-page')->layout('layouts.admin', ['title' => 'Quản lý Bảng giá']);
    }
}
