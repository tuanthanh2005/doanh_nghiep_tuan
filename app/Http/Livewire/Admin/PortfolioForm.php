<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Portfolio;

class PortfolioForm extends Component
{
    use WithFileUploads;

    public ?int    $portfolioId   = null;
    public string  $title         = '';
    public string  $description   = '';
    public string  $category      = 'branding';
    public bool    $is_active     = true;
    public int     $order         = 0;
    public         $image         = null;
    public ?string $existingImage = null;

    public function getCategoriesProperty(): array
    {
        return \App\Models\Service::where('is_active', true)->orderBy('order')->pluck('title', 'slug')->toArray();
    }

    protected function rules(): array
    {
        return [
            'title'       => 'required|min:2|max:255',
            'description' => 'nullable',
            'category'    => 'required',
            'is_active'   => 'boolean',
            'order'       => 'integer|min:0',
            'image'       => 'nullable|image|max:2048',
        ];
    }

    public function mount(?int $id = null): void
    {
        if ($id) {
            $p = Portfolio::findOrFail($id);
            $this->portfolioId   = $p->id;
            $this->title         = $p->title;
            $this->description   = $p->description ?? '';
            $this->category      = $p->category;
            $this->is_active     = $p->is_active;
            $this->order         = $p->order;
            $this->existingImage = $p->image;
        }
    }

    public function save(): void
    {
        $this->validate();

        $imagePath = $this->existingImage;
        if ($this->image) {
            $imagePath = $this->image->store('portfolio', 'public_uploads');
        }

        $data = [
            'title'       => $this->title,
            'description' => $this->description,
            'category'    => $this->category,
            'is_active'   => $this->is_active,
            'order'       => $this->order,
            'image'       => $imagePath,
        ];

        if ($this->portfolioId) {
            Portfolio::findOrFail($this->portfolioId)->update($data);
            session()->flash('success', 'Portfolio đã được cập nhật.');
        } else {
            Portfolio::create($data);
            session()->flash('success', 'Portfolio đã được tạo.');
        }

        $this->redirect(route('admin.portfolio.index'));
    }

    public function render()
    {
        return view('livewire.admin.portfolio-form')
            ->layout('layouts.admin', ['title' => $this->portfolioId ? 'Sửa portfolio' : 'Thêm portfolio']);
    }
}
