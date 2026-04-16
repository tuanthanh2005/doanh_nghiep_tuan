<?php

$dir = __DIR__ . '/app/Http/Livewire/Tables';
$files = glob($dir . '/*.php');

foreach ($files as $file) {
    if(basename($file) == 'TestimonialTable.php') continue; // we generated this one, let's fix it later or now
    $content = file_get_contents($file);
    
    // Find the prefix for route, e.g., admin.team.edit
    $entity = strtolower(str_replace('Table.php', '', basename($file))); // team, service, portfolio, blog, contact
    if ($entity == 'contact') $entity = 'contacts';
    if ($entity == 'service') $entity = 'services';
    
    // Replace Column::action('Hành động') -> Column::make('Hành động', 'action')
    $content = str_replace("Column::action('Hành động')", "Column::make('Hành động', 'action')", $content);
    
    // Add action field
    $addStr = "->add('is_active_label', fn(\$row) => \$row->is_active ? '✅ Hiển thị' : '❌ Ẩn')";
    if (strpos($content, $addStr) !== false) {
        $replacement = $addStr . "\n            ->add('action', function(\$row) {
                if ('$entity' === 'contacts') {
                    return '<button class=\"btn btn-sm btn-outline-danger\" wire:click=\"delete(' . \$row->id . ')\" onclick=\"confirm(\'Xóa mục này?\') || event.stopImmediatePropagation()\">Xóa</button>';
                }
                return '<a class=\"btn btn-sm btn-outline-primary me-1\" href=\"'.route('admin.$entity.edit', \$row->id).'\">Sửa</a>
                        <button class=\"btn btn-sm btn-outline-danger\" wire:click=\"delete(' . \$row->id . ')\" onclick=\"confirm(\'Xóa mục này?\') || event.stopImmediatePropagation()\">Xóa</button>';
            })";
        $content = str_replace($addStr, $replacement, $content);
    } else {
        // Fallback for BlogTable if it doesn't have is_active_label
        $addStr2 = "->add('is_published_label', fn(\$row) => \$row->is_published ? '✅ Đã đăng' : '❌ Nháp')";
        if (strpos($content, $addStr2) !== false) {
            $replacement = $addStr2 . "\n            ->add('action', function(\$row) {
                return '<a class=\"btn btn-sm btn-outline-primary me-1\" href=\"'.route('admin.$entity.edit', \$row->id).'\">Sửa</a>
                        <button class=\"btn btn-sm btn-outline-danger\" wire:click=\"delete(' . \$row->id . ')\" onclick=\"confirm(\'Xóa mục này?\') || event.stopImmediatePropagation()\">Xóa</button>';
            })";
            $content = str_replace($addStr2, $replacement, $content);
        }
    }
    
    file_put_contents($file, $content);
}

echo "Tables replaced correctly.\n";
