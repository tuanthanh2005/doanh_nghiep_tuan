<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\Blog;

class BlogDetailLivewire extends Component
{
    public string $slug = '';

    public function mount(string $slug): void
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $post     = Blog::where('slug', $this->slug)->where('is_published', true)->firstOrFail();
        $related  = Blog::where('category', $post->category)
                        ->where('id', '!=', $post->id)
                        ->where('is_published', true)
                        ->take(3)->get();

        return view('pages.blog.show', compact('post', 'related'))
            ->layout('layouts.app');
    }
}
