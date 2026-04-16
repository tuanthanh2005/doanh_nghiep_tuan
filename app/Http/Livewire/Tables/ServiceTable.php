<?php

namespace App\Http\Livewire\Tables;

use App\Models\Service;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Button;

class ServiceTable extends PowerGridComponent
{
    public string $tableName = 'service-table';

    public function datasource(): Builder
    {
        return Service::query()->orderBy('order');
    }

    public function fields(): PowerGridFields
    {
        return (new PowerGridFields())
            ->add('id')
            ->add('title')
            ->add('price_format', fn($row) => $row->sale_price ? '<span class="text-danger fw-bold">'.number_format($row->sale_price).'đ</span> <del class="text-muted small">'.number_format($row->price).'đ</del>' : ($row->price ? number_format($row->price).'đ' : 'Liên hệ'))
            ->add('order')
            ->add('is_active_label', fn($row) => $row->is_active ? '<span class="badge bg-success">Đang bán</span>' : '<span class="badge bg-secondary">Ngừng bán</span>')
            ->add('action', function($row) {
                return '<a class="btn btn-sm btn-outline-primary me-1" href="'.route('admin.services.edit', $row->id).'"><i class="ti ti-edit"></i></a>
                        <button class="btn btn-sm btn-outline-danger" wire:click="delete(' . $row->id . ')" onclick="confirm(\'Xóa sản phẩm này?\') || event.stopImmediatePropagation()"><i class="ti ti-trash"></i></button>';
            });
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')->sortable(),
            Column::make('Sản phẩm', 'title')->sortable()->searchable(),
            Column::make('Giá bán', 'price_format'),
            Column::make('Thứ tự', 'order')->sortable(),
            Column::make('Trạng thái', 'is_active_label'),
            Column::make('Hành động', 'action'),
        ];
    }

    public function filters(): array
    {
        return [
            Filter::inputText('title')->placeholder('Tìm sản phẩm...'),
        ];
    }

    public function delete(int $id): void
    {
        Service::findOrFail($id)->delete();
    }
}
