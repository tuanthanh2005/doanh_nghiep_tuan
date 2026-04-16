<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryForm extends Component
{
    public ?int $categoryId = null;
    public string $name = ''; 
    public string $slug = '';

    protected function rules(): array
    {
        return [
            'name' => 'required|max:255', 
            'slug' => 'required|max:255|unique:categories,slug,' . $this->categoryId,
        ];
    }
    
    public function updatedName($value)
    {
        if (empty($this->slug)) {
            $this->slug = Str::slug($value);
        }
    }

    public function mount(?int $id = null): void
    {
        if ($id) {
            $t = Category::findOrFail($id);
            $this->categoryId = $t->id;
            $this->name = $t->name; 
            $this->slug = $t->slug;
        }
    }

    public function save(): void
    {
        $this->validate();

        $data = [
            'name' => $this->name, 
            'slug' => $this->slug,
        ];

        if ($this->categoryId) {
            Category::findOrFail($this->categoryId)->update($data);
            session()->flash('success', 'Danh mục đã được cập nhật.');
        } else {
            Category::create($data);
            session()->flash('success', 'Danh mục đã được tạo.');
        }

        $this->redirect(route('admin.categories.index'));
    }

    public function render()
    {
        return view('livewire.admin.category-form')
            ->layout('layouts.admin', ['title' => $this->categoryId ? 'Sửa danh mục' : 'Thêm danh mục']);
    }
}
