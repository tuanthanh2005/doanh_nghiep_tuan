<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Service;

class ServiceForm extends Component
{
    public ?int    $serviceId   = null;
    public string  $title       = '';
    public string  $description = '';
    public string  $icon        = '';
    public $price = '';
    public $sale_price = '';
    public string $badge = '';
    public bool    $is_active   = true;
    public int     $order       = 0;

    protected function rules(): array
    {
        return [
            'title'       => 'required|min:2|max:255',
            'description' => 'nullable',
            'icon'        => 'nullable|max:100',
            'price'       => 'nullable|numeric|min:0',
            'sale_price'  => 'nullable|numeric|min:0',
            'badge'       => 'nullable|string|max:50',
            'is_active'   => 'boolean',
            'order'       => 'integer|min:0',
        ];
    }

    public function mount(?int $id = null): void
    {
        if ($id) {
            $s = Service::findOrFail($id);
            $this->serviceId   = $s->id;
            $this->title       = $s->title;
            $this->description = $s->description ?? '';
            $this->icon        = $s->icon ?? '';
            $this->price       = $s->price;
            $this->sale_price  = $s->sale_price;
            $this->badge       = $s->badge ?? '';
            $this->is_active   = $s->is_active;
            $this->order       = $s->order;
        }
    }

    public function save(): void
    {
        $this->validate();

        $data = [
            'title'       => $this->title,
            'description' => $this->description,
            'icon'        => $this->icon,
            'price'       => $this->price ?: null,
            'sale_price'  => $this->sale_price ?: null,
            'badge'       => $this->badge,
            'is_active'   => $this->is_active,
            'order'       => $this->order,
        ];

        if ($this->serviceId) {
            Service::findOrFail($this->serviceId)->update($data);
            session()->flash('success', 'Sản phẩm đã được cập nhật.');
        } else {
            Service::create($data);
            session()->flash('success', 'Sản phẩm đã được tạo.');
        }

        $this->redirect(route('admin.services.index'));
    }

    public function render()
    {
        return view('livewire.admin.service-form')
            ->layout('layouts.admin', ['title' => $this->serviceId ? 'Sửa sản phẩm AI' : 'Thêm sản phẩm AI']);
    }
}
