<?php

namespace App\Http\Livewire\Tables;

use App\Models\Partner;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Button;

class PartnerTable extends PowerGridComponent
{
    public string $tableName = 'partner-table';

    public function datasource(): Builder
    {
        return Partner::query()->orderBy('order');
    }

    public function fields(): PowerGridFields
    {
        return (new PowerGridFields())
            ->add('id')
            ->add('name')
            ->add('image', fn($row) => '<img src="'.asset($row->image).'" width="50" />')
            ->add('order')
            ->add('is_active_label', fn($row) => $row->is_active ? '✅ Hiển thị' : '❌ Ẩn')
            ->add('action', function($row) {
                if ('services' === 'contacts') {
                    return '<button class="btn btn-sm btn-outline-danger" wire:click="delete(' . $row->id . ')" onclick="confirm(\'Xóa mục này?\') || event.stopImmediatePropagation()">Xóa</button>';
                }
                return '<a class="btn btn-sm btn-outline-primary me-1" href="'.route('admin.partners.edit', $row->id).'">Sửa</a>
                        <button class="btn btn-sm btn-outline-danger" wire:click="delete(' . $row->id . ')" onclick="confirm(\'Xóa mục này?\') || event.stopImmediatePropagation()">Xóa</button>';
            });
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')->sortable(),
            Column::make('Tên', 'name')->sortable()->searchable(),
            Column::make('Hình ảnh', 'image')->sortable(),
            Column::make('Thứ tự', 'order')->sortable(),
            Column::make('Trạng thái', 'is_active_label'),
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
        Partner::findOrFail($id)->delete();
    }
}

