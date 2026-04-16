<?php

// Seed some categories
use App\Models\Category;

require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$cats = ['Marketing', 'Design', 'Agency', 'Development', 'SEO'];
foreach ($cats as $c) {
    Category::firstOrCreate(['name' => $c, 'slug' => \Illuminate\Support\Str::slug($c)]);
}
echo "Seeded categories.\n";

// Copy files
$cmds = [
    'copy app/Http/Livewire/Admin/Pages/TestimonialIndexPage.php app/Http/Livewire/Admin/Pages/CategoryIndexPage.php',
    'copy app/Http/Livewire/Admin/TestimonialForm.php app/Http/Livewire/Admin/CategoryForm.php',
    'copy app/Http/Livewire/Tables/TestimonialTable.php app/Http/Livewire/Tables/CategoryTable.php',
    'mkdir resources\views\admin\category',
    'copy resources\views\admin\testimonial\index.blade.php resources\views\admin\category\index.blade.php',
    'copy resources\views\livewire\admin\testimonial-form.blade.php resources\views\livewire\admin\category-form.blade.php',
];
foreach ($cmds as $cmd) {
    shell_exec(str_replace('/', DIRECTORY_SEPARATOR, $cmd));
}

$files = [
    'app/Http/Livewire/Admin/Pages/CategoryIndexPage.php' => [
        'TestimonialIndexPage' => 'CategoryIndexPage',
        'admin.testimonials.index' => 'admin.categories.index',
        'Quản lý Đánh giá' => 'Quản lý Danh mục Blog',
        'testimonial.index' => 'category.index'
    ],
    'app/Http/Livewire/Admin/CategoryForm.php' => [
        'TestimonialForm' => 'CategoryForm',
        'App\Models\Testimonial' => 'App\Models\Category',
        'public ?int    $testimonialId = null;' => 'public ?int $categoryId = null;',
        '$this->testimonialId' => '$this->categoryId',
        'public string  $name = \'\';' => 'public string $name = \'\'; public string $slug = \'\';',
        '\'name\'     => \'required|max:255\',' => '\'name\' => \'required|max:255\', \'slug\' => \'required|max:255\',',
        '$this->name          = $t->name;' => '$this->name = $t->name; $this->slug = $t->slug;',
        '$t = Testimonial::findOrFail($id);' => '$t = Category::findOrFail($id);',
        '\'name\'     => $this->name,' => '\'name\' => $this->name, \'slug\' => $this->slug,',
        'Testimonial::findOrFail' => 'Category::findOrFail',
        'Testimonial::create' => 'Category::create',
        'admin.testimonials.index' => 'admin.categories.index',
        'Sửa đánh giá' => 'Sửa danh mục',
        'Thêm đánh giá' => 'Thêm danh mục',
        'Đánh giá đã được cập nhật' => 'Danh mục đã được cập nhật',
        'Đánh giá đã được tạo' => 'Danh mục đã được tạo',
        'public string  $position = \'\';' => '',
        'public string  $company = \'\';' => '',
        'public string  $content = \'\';' => '',
        'public bool    $is_active = true;' => '',
        'public int     $order = 0;' => '',
        '\'position\' => \'required|max:255\',' => '',
        '\'company\'  => \'required|max:255\',' => '',
        '\'content\'  => \'required\',' => '',
        '\'is_active\'=> \'boolean\',' => '',
        '\'order\'    => \'integer|min:0\',' => '',
        '$this->position      = $t->position;' => '',
        '$this->company       = $t->company;' => '',
        '$this->content       = $t->content;' => '',
        '$this->is_active     = $t->is_active;' => '',
        '$this->order         = $t->order;' => '',
        '\'position\' => $this->position,' => '',
        '\'company\'  => $this->company,' => '',
        '\'content\'  => $this->content,' => '',
        '\'is_active\'=> $this->is_active,' => '',
        '\'order\'    => $this->order,' => '',
        'admin.testimonial-form' => 'admin.category-form'
    ],
    'app/Http/Livewire/Tables/CategoryTable.php' => [
        'TestimonialTable' => 'CategoryTable',
        'testimonial-table' => 'category-table',
        'App\Models\Testimonial' => 'App\Models\Category',
        'Testimonial::query' => 'Category::query',
        'Testimonial $row' => 'Category $row',
        'Testimonial::findOrFail' => 'Category::findOrFail',
        '->add(\'position\')' => '->add(\'slug\')',
        'Column::make(\'Chức vụ\', \'position\')' => 'Column::make(\'Slug\', \'slug\')',
        'admin.testimonials.edit' => 'admin.categories.edit',
        'Xóa đánh giá này?' => 'Xóa danh mục này?',
        'Column::make(\'Thứ tự\', \'order\')->sortable(),' => '',
        'Column::make(\'Trạng thái\', \'is_active_label\'),' => '',
        '->add(\'order\')' => '',
        '->add(\'is_active_label\', fn($row) => $row->is_active ? \'✅ Hiển thị\' : \'❌ Ẩn\')' => '',
    ],
    'resources/views/admin/category/index.blade.php' => [
        'Đánh giá' => 'Danh mục Blog',
        'Quản lý đánh giá' => 'Quản lý danh mục Blog',
        'Thêm đánh giá' => 'Thêm danh mục',
        'admin.testimonials.create' => 'admin.categories.create',
        'tables.testimonial-table' => 'tables.category-table'
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
echo "Done replacing setup scripts";
