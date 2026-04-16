<?php

$dir = __DIR__ . '/app/Http/Livewire/Tables';
$files = glob($dir . '/*.php');

foreach ($files as $file) {
    if(!is_file($file)) continue;
    $content = file_get_contents($file);
    
    // Replace something like:
    // );
    // ->add('action', function($row) {
    // with:
    // )
    // ->add('action', function($row) {
    $content = preg_replace("/\);\s*->add\('action'/", ")\n            ->add('action'", $content);

    file_put_contents($file, $content);
}

echo "Cleaned up semi-colons syntax error!\n";
