<?php

$dir = __DIR__ . '/app/Http/Livewire/Tables';
$files = ['BlogTable.php', 'PortfolioTable.php', 'ContactTable.php'];

foreach ($files as $name) {
    $file = $dir . '/' . $name;
    if(!file_exists($file)) continue;

    $content = file_get_contents($file);
    
    // Check if it already has the action field
    if (strpos($content, "->add('action'") === false) {
        $entity = strtolower(str_replace('Table.php', '', $name));
        if ($entity == 'contact') $entity = 'contacts';
        
        $actionLogic = "            ->add('action', function(\$row) {
                if ('$entity' === 'contacts') {
                    return '<button class=\"btn btn-sm btn-outline-danger\" wire:click=\"delete(' . \$row->id . ')\" onclick=\"confirm(\'Xóa mục này?\') || event.stopImmediatePropagation()\">Xóa</button>';
                }
                return '<a class=\"btn btn-sm btn-outline-primary me-1\" href=\"'.route('admin.$entity.edit', \$row->id).'\">Sửa</a>
                        <button class=\"btn btn-sm btn-outline-danger\" wire:click=\"delete(' . \$row->id . ')\" onclick=\"confirm(\'Xóa mục này?\') || event.stopImmediatePropagation()\">Xóa</button>';
            });\n    }";

        $content = preg_replace("/(\->add\([^;]+\);)\s*\n    \}/s", "$1\n$actionLogic", $content);
        file_put_contents($file, $content);
    }
}
echo "Done fixing missing action fields!";
