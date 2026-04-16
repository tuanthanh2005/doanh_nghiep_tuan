<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Pricing;

class PricingForm extends Component
{
    public $pricingId = null;
    public $name;
    public $price;
    public $duration;
    public $features_text = "";
    public $is_featured = false;
    public $is_active = true;
    public $order = 0;

    protected $rules = [
        'name' => 'required|string|max:255',
        'price' => 'required|string|max:255',
        'duration' => 'nullable|string|max:255',
        'features_text' => 'nullable|string',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    public function mount($id = null)
    {
        if ($id) {
            $pricing = Pricing::findOrFail($id);
            $this->pricingId = $pricing->id;
            $this->name = $pricing->name;
            $this->price = $pricing->price;
            $this->duration = $pricing->duration;
            $this->features_text = is_array($pricing->features) ? implode("\n", $pricing->features) : '';
            $this->is_featured = $pricing->is_featured;
            $this->is_active = $pricing->is_active;
            $this->order = $pricing->order;
        }
    }

    public function save()
    {
        $this->validate();

        $featuresArr = array_filter(array_map('trim', explode("\n", $this->features_text)));

        Pricing::updateOrCreate(
            ['id' => $this->pricingId],
            [
                'name' => $this->name,
                'price' => $this->price,
                'duration' => $this->duration,
                'features' => $featuresArr,
                'is_featured' => $this->is_featured,
                'is_active' => $this->is_active,
                'order' => $this->order,
            ]
        );

        session()->flash('success', 'Lưu bảng giá thành công!');
        return redirect()->route('admin.pricing.index');
    }

    public function render()
    {
        return view('livewire.admin.pricing-form')->layout('layouts.admin', ['title' => $this->pricingId ? 'Sửa Bảng giá' : 'Thêm Bảng giá']);
    }
}
