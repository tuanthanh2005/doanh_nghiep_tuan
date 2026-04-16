<?php

namespace App\Http\Livewire\Tables;

use App\Models\Faq;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;

class FaqTable extends PowerGridComponent
{
    public string $tableName = 'faq-table';

    public function datasource(): Builder
    {
        return Faq::query()->orderBy('order')->orderBy('category');
    }

    public function fields(): PowerGridFields
    {
        return (new PowerGridFields())
            ->add('id')
            ->add('question')
            ->add('category')
            ->add('order')
            ->add('is_active_label', fn($row) => $row->is_active ? '✅ Hiển thị' : '❌ Ẩn')
            ->add('action', function($row) {
                return '<a class="btn btn-sm btn-outline-primary me-1" href="'.route('admin.faqs.edit', $row->id).'">Sửa</a>
                        <button class="btn btn-sm btn-outline-danger" wire:click="delete(' . $row->id . ')" onclick="confirm(\'Xóa câu hỏi này?\') || event.stopImmediatePropagation()">Xóa</button>';
            });
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')->sortable(),
            Column::make('Chuyên mục', 'category')->sortable()->searchable(),
            Column::make('Câu hỏi', 'question')->sortable()->searchable(),
            Column::make('Thứ tự', 'order')->sortable(),
            Column::make('Trạng thái', 'is_active_label'),
            Column::make('Hành động', 'action'),
        ];
    }

    public function filters(): array
    {
        return [
            Filter::inputText('question')->placeholder('Tìm câu hỏi...'),
            Filter::inputText('category')->placeholder('Tìm chuyên mục...'),
        ];
    }

    public function delete(int $id): void
    {
        Faq::findOrFail($id)->delete();
    }
}
