<?php

namespace App\Http\Livewire\Tables;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Button;

class BlogTable extends PowerGridComponent
{
    public string $tableName = 'blog-table';

    public function datasource(): Builder
    {
        return Blog::query()->latest();
    }

    public function fields(): PowerGridFields
    {
        return (new PowerGridFields())
            ->add('id')
            ->add('title')
            ->add('category')
            ->add('author')
            ->add('published_at_formatted', fn($row) => $row->published_at?->format('d/m/Y') ?? '—')
            ->add('is_published_label', fn($row) => $row->is_published ? '✅ Đã đăng' : '⏳ Nháp')
            ->add('action', function($row) {
                if ('blog' === 'contacts') {
                    return '<button class="btn btn-sm btn-outline-danger" wire:click="delete(' . $row->id . ')" onclick="confirm(\'Xóa mục này?\') || event.stopImmediatePropagation()">Xóa</button>';
                }
                return '<a class="btn btn-sm btn-outline-primary me-1" href="'.route('admin.blog.edit', $row->id).'">Sửa</a>
                        <button class="btn btn-sm btn-outline-danger" wire:click="delete(' . $row->id . ')" onclick="confirm(\'Xóa mục này?\') || event.stopImmediatePropagation()">Xóa</button>';
            });
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')->sortable(),
            Column::make('Tiêu đề', 'title')->sortable()->searchable(),
            Column::make('Danh mục', 'category')->sortable()->searchable(),
            Column::make('Tác giả', 'author')->sortable(),
            Column::make('Ngày đăng', 'published_at_formatted'),
            Column::make('Trạng thái', 'is_published_label'),
            Column::make('Hành động', 'action'),
        ];
    }

    public function filters(): array
    {
        return [
            Filter::inputText('title')->placeholder('Tìm tiêu đề...'),
            Filter::inputText('category')->placeholder('Tìm danh mục...'),
        ];
    }

    public function delete(int $id): void
    {
        Blog::findOrFail($id)->delete();
    }
}

