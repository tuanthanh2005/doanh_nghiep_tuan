<?php

namespace App\Http\Livewire\Tables;

use App\Models\Pricing;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;

class PricingTable extends PowerGridComponent
{
    public string $tableName = 'pricing-table';

    public function datasource(): Builder
    {
        return Pricing::query()->orderBy('order');
    }

    public function fields(): PowerGridFields
    {
        return (new PowerGridFields())
            ->add('id')
            ->add('name')
            ->add('price')
            ->add('duration')
            ->add('order')
            ->add('is_active_label', fn($row) => $row->is_active ? '✅ Hiển thị' : '❌ Ẩn')
            ->add('is_featured_label', fn($row) => $row->is_featured ? '🌟 Nổi bật' : '—')
            ->add('action', function($row) {
                return '<a class="btn btn-sm btn-outline-primary me-1" href="'.route('admin.pricing.edit', $row->id).'">Sửa</a>
                        <button class="btn btn-sm btn-outline-danger" wire:click="delete(' . $row->id . ')" onclick="confirm(\'Xóa mục này?\') || event.stopImmediatePropagation()">Xóa</button>';
            });
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')->sortable(),
            Column::make('Gói', 'name')->sortable()->searchable(),
            Column::make('Giá', 'price')->sortable(),
            Column::make('Kỳ hạn', 'duration'),
            Column::make('Thứ tự', 'order')->sortable(),
            Column::make('Nổi bật', 'is_featured_label'),
            Column::make('Trạng thái', 'is_active_label'),
            Column::make('Hành động', 'action'),
        ];
    }

    public function delete(int $id): void
    {
        Pricing::findOrFail($id)->delete();
    }
}
