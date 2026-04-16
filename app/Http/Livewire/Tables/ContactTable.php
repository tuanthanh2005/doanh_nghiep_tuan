<?php

namespace App\Http\Livewire\Tables;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Button;

class ContactTable extends PowerGridComponent
{
    public string $tableName = 'contact-table';

    public function datasource(): Builder
    {
        return Contact::query()->latest();
    }

    public function fields(): PowerGridFields
    {
        return (new PowerGridFields())
            ->add('id')
            ->add('name')
            ->add('email')
            ->add('subject')
            ->add('created_at_formatted', fn($row) => $row->created_at->format('d/m/Y H:i'))
            ->add('is_read_label', fn($row) => $row->is_read ? '✅ Đã đọc' : '🔴 Mới')
            ->add('action', function($row) {
                if ('contacts' === 'contacts') {
                    return '<button class="btn btn-sm btn-outline-danger" wire:click="delete(' . $row->id . ')" onclick="confirm(\'Xóa mục này?\') || event.stopImmediatePropagation()">Xóa</button>';
                }
                return '<a class="btn btn-sm btn-outline-primary me-1" href="'.route('admin.contacts.edit', $row->id).'">Sửa</a>
                        <button class="btn btn-sm btn-outline-danger" wire:click="delete(' . $row->id . ')" onclick="confirm(\'Xóa mục này?\') || event.stopImmediatePropagation()">Xóa</button>';
            });
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')->sortable(),
            Column::make('Tên', 'name')->sortable()->searchable(),
            Column::make('Email', 'email')->sortable()->searchable(),
            Column::make('Chủ đề', 'subject')->sortable()->searchable(),
            Column::make('Ngày gửi', 'created_at_formatted'),
            Column::make('Trạng thái', 'is_read_label'),
            Column::make('Hành động', 'action'),
        ];
    }

    public function filters(): array
    {
        return [
            Filter::inputText('name')->placeholder('Tìm tên...'),
            Filter::inputText('email')->placeholder('Tìm email...'),
        ];
    }

    public function markRead(int $id): void
    {
        Contact::findOrFail($id)->update(['is_read' => true]);
    }

    public function delete(int $id): void
    {
        Contact::findOrFail($id)->delete();
    }
}

