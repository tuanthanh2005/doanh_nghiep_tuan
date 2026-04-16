<?php

namespace App\Http\Livewire\Tables;

use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Button;

class PortfolioTable extends PowerGridComponent
{
    public string $tableName = 'portfolio-table';

    public function datasource(): Builder
    {
        return Portfolio::query()->orderBy('order');
    }

    public function fields(): PowerGridFields
    {
        return (new PowerGridFields())
            ->add('id')
            ->add('title')
            ->add('category')
            ->add('order')
            ->add('is_active_label', fn($row) => $row->is_active ? '✅ Hiển thị' : '❌ Ẩn')
            ->add('action', function($row) {
                if ('portfolio' === 'contacts') {
                    return '<button class="btn btn-sm btn-outline-danger" wire:click="delete(' . $row->id . ')" onclick="confirm(\'Xóa mục này?\') || event.stopImmediatePropagation()">Xóa</button>';
                }
                return '<a class="btn btn-sm btn-outline-primary me-1" href="'.route('admin.portfolio.edit', $row->id).'">Sửa</a>
                        <button class="btn btn-sm btn-outline-danger" wire:click="delete(' . $row->id . ')" onclick="confirm(\'Xóa mục này?\') || event.stopImmediatePropagation()">Xóa</button>';
            });
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')->sortable(),
            Column::make('Tên dự án', 'title')->sortable()->searchable(),
            Column::make('Danh mục', 'category')->sortable()->searchable(),
            Column::make('Thứ tự', 'order')->sortable(),
            Column::make('Trạng thái', 'is_active_label'),
            Column::make('Hành động', 'action'),
        ];
    }

    public function filters(): array
    {
        return [
            Filter::inputText('title')->placeholder('Tìm dự án...'),
            Filter::inputText('category')->placeholder('Tìm danh mục...'),
        ];
    }

    public function delete(int $id): void
    {
        Portfolio::findOrFail($id)->delete();
    }
}

