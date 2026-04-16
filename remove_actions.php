<?php

$dir = __DIR__ . '/app/Http/Livewire/Tables';
$files = glob($dir . '/*.php');

foreach ($files as $file) {
    if(!is_file($file)) continue;
    $content = file_get_contents($file);
    
    // Use regex to remove the entire public function actions(...) { ... } block
    // We match from "public function actions(" up to the closing brace BEFORE "public function delete" or end of class
    $content = preg_replace('/public function actions\([^\)]+\)\s*:\s*array\s*\{.*?\n    \}\s*/s', '', $content);

    file_put_contents($file, $content);
}

echo "Cleaned up actions method!\n";
