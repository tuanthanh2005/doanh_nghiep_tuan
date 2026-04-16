<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Blog;

class BlogLivewire extends Component
{
    use WithPagination;

    public string $search   = '';
    public string $category = '';

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function render()
    {
        $posts = Blog::where('is_published', true)
            ->when($this->search,   fn($q) => $q->where('title', 'like', "%{$this->search}%"))
            ->when($this->category, fn($q) => $q->where('category', $this->category))
            ->latest()
            ->paginate(6);

        return view('pages.blog.index', compact('posts'))
            ->layout('layouts.app');
    }
}
