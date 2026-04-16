<?php

namespace App\Http\Livewire\Tables;

use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;

class CategoryTable extends PowerGridComponent
{
    public string $tableName = 'category-table';

    public function datasource(): Builder
    {
        return Category::query()->latest();
    }

    public function fields(): PowerGridFields
    {
        return (new PowerGridFields())
            ->add('id')
            ->add('name')
            ->add('slug')
            ->add('action', function($row) {
                return '<a class="btn btn-sm btn-outline-primary me-1" href="'.route('admin.categories.edit', $row->id).'">Sửa</a>
                        <button class="btn btn-sm btn-outline-danger" wire:click="delete(' . $row->id . ')" onclick="confirm(\'Xóa mục này?\') || event.stopImmediatePropagation()">Xóa</button>';
            });
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')->sortable(),
            Column::make('Tên', 'name')->sortable()->searchable(),
            Column::make('Slug', 'slug')->sortable(),
            Column::make('Hành động', 'action'),
        ];
    }

    public function filters(): array
    {
        return [
            Filter::inputText('name')->placeholder('Tìm tên...'),
        ];
    }

    public function delete(int $id): void
    {
        Category::findOrFail($id)->delete();
    }
}
