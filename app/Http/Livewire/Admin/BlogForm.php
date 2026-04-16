<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Blog;

class BlogForm extends Component
{
    use WithFileUploads;

    public ?int    $blogId        = null;
    public string  $title         = '';
    public string  $excerpt       = '';
    public string  $content       = '';
    public string  $category      = '';
    public string  $author        = '';
    public bool    $is_published  = false;
    public         $image         = null;
    public ?string $existingImage = null;

    protected function rules(): array
    {
        return [
            'title'        => 'required|min:3|max:255',
            'excerpt'      => 'nullable|max:500',
            'content'      => 'required|min:10',
            'category'     => 'required',
            'author'       => 'required',
            'is_published' => 'boolean',
            'image'        => 'nullable|image|max:2048',
        ];
    }

    public function mount(?int $id = null): void
    {
        if ($id) {
            $blog = Blog::findOrFail($id);
            $this->blogId        = $blog->id;
            $this->title         = $blog->title;
            $this->excerpt       = $blog->excerpt ?? '';
            $this->content       = $blog->content ?? '';
            $this->category      = $blog->category ?? '';
            $this->author        = $blog->author ?? '';
            $this->is_published  = $blog->is_published;
            $this->existingImage = $blog->image;
        }
    }

    public function save(): void
    {
        $this->validate();

        $imagePath = $this->existingImage;
        if ($this->image) {
            $imagePath = $this->image->store('blogs', 'public_uploads');
        }

        $data = [
            'title'        => $this->title,
            'excerpt'      => $this->excerpt,
            'content'      => $this->content,
            'category'     => $this->category,
            'author'       => $this->author,
            'is_published' => $this->is_published,
            'image'        => $imagePath,
            'published_at' => $this->is_published ? now() : null,
        ];

        if ($this->blogId) {
            Blog::findOrFail($this->blogId)->update($data);
            session()->flash('success', 'Bài viết đã được cập nhật.');
        } else {
            Blog::create($data);
            session()->flash('success', 'Bài viết đã được tạo.');
        }

        $this->redirect(route('admin.blog.index'));
    }

    public function render()
    {
        return view('livewire.admin.blog-form')
            ->layout('layouts.admin', ['title' => $this->blogId ? 'Sửa bài viết' : 'Thêm bài viết']);
    }
}
