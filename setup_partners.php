<?php

use App\Models\Partner;

require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

\Illuminate\Support\Facades\Artisan::call('migrate');

$partners = ['Urban', 'The Retro', 'Iconic', 'Hipster', 'Urban', 'Natural'];
foreach ($partners as $i => $name) {
    Partner::create([
        'name' => $name,
        'image' => 'assets/img/partner/' . ($i+1) . '.png',
        'is_active' => true,
        'order' => $i+1
    ]);
}
echo "Seeded partners.\n";

$cmds = [
    'copy app/Http/Livewire/Admin/Pages/TestimonialIndexPage.php app/Http/Livewire/Admin/Pages/PartnerIndexPage.php',
    'copy app/Http/Livewire/Admin/TestimonialForm.php app/Http/Livewire/Admin/PartnerForm.php',
    'copy app/Http/Livewire/Tables/TestimonialTable.php app/Http/Livewire/Tables/PartnerTable.php',
    'mkdir resources\views\admin\partner',
    'copy resources\views\admin\testimonial\index.blade.php resources\views\admin\partner\index.blade.php',
    'copy resources\views\livewire\admin\testimonial-form.blade.php resources\views\livewire\admin\partner-form.blade.php',
];
foreach ($cmds as $cmd) {
    shell_exec(str_replace('/', DIRECTORY_SEPARATOR, $cmd));
}

$files = [
    'app/Http/Livewire/Admin/Pages/PartnerIndexPage.php' => [
        'TestimonialIndexPage' => 'PartnerIndexPage',
        'admin.testimonials.index' => 'admin.partners.index',
        'Quản lý Đánh giá' => 'Logo đối tác',
        'testimonial.index' => 'partner.index'
    ],
    'app/Http/Livewire/Admin/PartnerForm.php' => [
        'TestimonialForm' => 'PartnerForm',
        'App\Models\Testimonial' => 'App\Models\Partner',
        'public ?int    $testimonialId = null;' => 'public ?int $partnerId = null;',
        '$this->testimonialId' => '$this->partnerId',
        'public string  $name = \'\';' => 'public string $name = \'\'; public $image;',
        '\'name\'     => \'required|max:255\',' => '\'name\' => \'required|max:255\', \'image\' => \'nullable|image|max:2048\',',
        '$this->name          = $t->name;' => '$this->name = $t->name;',
        '$t = Testimonial::findOrFail($id);' => '$t = Partner::findOrFail($id);',
        '\'name\'     => $this->name,' => '\'name\' => $this->name,',
        'Testimonial::findOrFail' => 'Partner::findOrFail',
        'Testimonial::create' => 'Partner::create',
        'admin.testimonials.index' => 'admin.partners.index',
        'Sửa đánh giá' => 'Sửa logo',
        'Thêm đánh giá' => 'Thêm logo',
        'Đánh giá đã được cập nhật' => 'Logo đã được cập nhật',
        'Đánh giá đã được tạo' => 'Logo đã được tạo',
        'public string  $position = \'\';' => 'public ?string $existingImage = null;',
        'public string  $company = \'\';' => '',
        'public string  $content = \'\';' => '',
        '\'position\' => \'required|max:255\',' => '',
        '\'company\'  => \'required|max:255\',' => '',
        '\'content\'  => \'required\',' => '',
        '$this->position      = $t->position;' => '$this->existingImage = $t->image;',
        '$this->company       = $t->company;' => '',
        '$this->content       = $t->content;' => '',
        '\'position\' => $this->position,' => '',
        '\'company\'  => $this->company,' => '',
        '\'content\'  => $this->content,' => '',
        'admin.testimonial-form' => 'admin.partner-form',
        'use Livewire\Component;' => "use Livewire\Component;\nuse Livewire\WithFileUploads;",
        'class PartnerForm extends Component' => "class PartnerForm extends Component\n{\n    use WithFileUploads;",
        '$this->validate();' => "\$this->validate();\n        \$imagePath = \$this->existingImage;\n        if (\$this->image) {\n            \$imagePath = \$this->image->store('partners', 'public');\n        }",
        '$data = [' => "\$data = [\n            'image' => \$imagePath,"
    ],
    'app/Http/Livewire/Tables/PartnerTable.php' => [
        'TestimonialTable' => 'PartnerTable',
        'testimonial-table' => 'partner-table',
        'App\Models\Testimonial' => 'App\Models\Partner',
        'Testimonial::query' => 'Partner::query',
        'Testimonial $row' => 'Partner $row',
        'Testimonial::findOrFail' => 'Partner::findOrFail',
        '->add(\'position\')' => '->add(\'image\', fn($row) => \'<img src="\'.asset($row->image).\'" width="50" />\')',
        'Column::make(\'Chức vụ\', \'position\')' => 'Column::make(\'Hình ảnh\', \'image\')',
        'admin.testimonials.edit' => 'admin.partners.edit',
        'Xóa đánh giá này?' => 'Xóa logo này?'
    ],
    'resources/views/admin/partner/index.blade.php' => [
        'Đánh giá' => 'Logo đối tác',
        'Quản lý đánh giá' => 'Logo đối tác',
        'Thêm đánh giá' => 'Thêm logo',
        'admin.testimonials.create' => 'admin.partners.create',
        'tables.testimonial-table' => 'tables.partner-table'
    ],
    'resources/views/livewire/admin/partner-form.blade.php' => [
        'Đánh giá' => 'Logo đối tác',
        'Tên khách hàng' => 'Tên đối tác',
        'admin.testimonials.index' => 'admin.partners.index',
    ]
];

foreach ($files as $file => $replacements) {
    if (!file_exists($file)) { echo "File $file not found\n"; continue; }
    $content = file_get_contents($file);
    foreach ($replacements as $search => $replace) {
        $content = str_replace($search, $replace, $content);
    }
    file_put_contents($file, $content);
}
echo "Done replacing setup scripts";
