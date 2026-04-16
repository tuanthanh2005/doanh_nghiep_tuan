<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Partner;

class PartnerForm extends Component
{
    use WithFileUploads;

    public ?int $partnerId = null;
    public string $name = ''; public $image;
    public ?string $existingImage = null;
    
    
    public bool    $is_active = true;
    public int     $order = 0;

    protected function rules(): array
    {
        return [
            'name' => 'required|max:255', 'image' => 'nullable|image|max:2048',
            
            
            
            'is_active'=> 'boolean',
            'order'    => 'integer|min:0',
        ];
    }

    public function mount(?int $id = null): void
    {
        if ($id) {
            $t = Partner::findOrFail($id);
            $this->partnerId = $t->id;
            $this->name = $t->name;
            $this->existingImage = $t->image;
            
            
            $this->is_active     = $t->is_active;
            $this->order         = $t->order;
        }
    }

    public function save(): void
    {
        $this->validate();
        $imagePath = $this->existingImage;
        if ($this->image) {
            $imagePath = $this->image->store('partners', 'public_uploads');
        }

        $data = [
            'image' => $imagePath,
            'name' => $this->name,
            
            
            
            'is_active'=> $this->is_active,
            'order'    => $this->order,
        ];

        if ($this->partnerId) {
            Partner::findOrFail($this->partnerId)->update($data);
            session()->flash('success', 'Logo đã được cập nhật.');
        } else {
            Partner::create($data);
            session()->flash('success', 'Logo đã được tạo.');
        }

        $this->redirect(route('admin.partners.index'));
    }

    public function render()
    {
        return view('livewire.admin.partner-form')
            ->layout('layouts.admin', ['title' => $this->partnerId ? 'Sửa logo' : 'Thêm logo']);
    }
}
