<?php
$files = [
    'app/Http/Livewire/Admin/Pages/TestimonialIndexPage.php' => [
        'ServiceIndexPage' => 'TestimonialIndexPage',
        'admin.service.index' => 'admin.testimonial.index',
        'Quản lý Dịch vụ' => 'Quản lý Đánh giá'
    ],
    'app/Http/Livewire/Admin/TestimonialForm.php' => [
        'ServiceForm' => 'TestimonialForm',
        'App\Models\Service' => 'App\Models\Testimonial',
        '$serviceId' => '$testimonialId',
        '$s =' => '$t =',
        '$s->id' => '$t->id',
        '$s->title' => '$t->name',
        '$s->is_active' => '$t->is_active',
        '$s->order' => '$t->order',
        'public string  $title' => 'public string  $name = \'\'; public string $position = \'\'; public string $company = \'\'; public string $content = \'\';',
        '\'title\'       => \'required|min:2|max:255\',' => '\'name\' => \'required\', \'position\' => \'required\', \'company\' => \'required\', \'content\' => \'required\',',
        '\'title\'       => $this->title,' => '\'name\' => $this->name, \'position\'=> $this->position, \'company\' => $this->company, \'content\' => $this->content,',
        'Service::findOrFail' => 'Testimonial::findOrFail',
        'Service::create' => 'Testimonial::create',
        'admin.services.index' => 'admin.testimonials.index',
        'admin.service-form' => 'admin.testimonial-form',
        'Sửa dịch vụ' => 'Sửa đánh giá',
        'Thêm dịch vụ' => 'Thêm đánh giá',
        'Dịch vụ đã được cập nhật' => 'Đánh giá đã được cập nhật',
        'Dịch vụ đã được tạo' => 'Đánh giá đã được tạo'
    ],
    'app/Http/Livewire/Tables/TestimonialTable.php' => [
        'ServiceTable' => 'TestimonialTable',
        'service-table' => 'testimonial-table',
        'App\Models\Service' => 'App\Models\Testimonial',
        'Service::query' => 'Testimonial::query',
        'Service $row' => 'Testimonial $row',
        'Service::findOrFail' => 'Testimonial::findOrFail',
        '->add(\'title\')' => '->add(\'name\')',
        '->add(\'slug\')' => '->add(\'position\')',
        'Column::make(\'Tên dịch vụ\', \'title\')' => 'Column::make(\'Tên\', \'name\')',
        'Column::make(\'Slug\', \'slug\')' => 'Column::make(\'Chức vụ\', \'position\')',
        'Filter::inputText(\'title\')->placeholder(\'Tìm dịch vụ...\')' => 'Filter::inputText(\'name\')->placeholder(\'Tìm tên...\')',
        'admin.services.edit' => 'admin.testimonials.edit',
        'Xóa dịch vụ này?' => 'Xóa đánh giá này?'
    ],
    'resources/views/admin/testimonial/index.blade.php' => [
        'Dịch vụ' => 'Đánh giá',
        'Quản lý dịch vụ' => 'Quản lý đánh giá',
        'Thêm dịch vụ' => 'Thêm đánh giá',
        'admin.services.create' => 'admin.testimonials.create',
        'tables.service-table' => 'tables.testimonial-table'
    ],
    'resources/views/livewire/admin/testimonial-form.blade.php' => [
        'Dịch vụ' => 'Đánh giá',
        'admin.services.index' => 'admin.testimonials.index',
        'title' => 'name',
    ]
];

foreach ($files as $file => $replacements) {
    if (!file_exists($file)) continue;
    $content = file_get_contents($file);
    foreach ($replacements as $search => $replace) {
        $content = str_replace($search, $replace, $content);
    }
    file_put_contents($file, $content);
}
echo "Done replacing";
