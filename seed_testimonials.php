<?php

use App\Models\Testimonial;

require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$testimonials = [
    [
        'name' => 'Alex Chohan',
        'position' => 'Director',
        'company' => 'Accurate Themes',
        'content' => 'Sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'is_active' => true,
        'order' => 1
    ],
    [
        'name' => 'Johnson Brown',
        'position' => 'Marketing Head',
        'company' => 'Spyro Themes',
        'content' => 'Sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'is_active' => true,
        'order' => 2
    ],
    [
        'name' => 'Devid Miller',
        'position' => 'Founder',
        'company' => 'Theme Ocean',
        'content' => 'Sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'is_active' => true,
        'order' => 3
    ],
    [
        'name' => 'Maya Khan',
        'position' => 'Chairman',
        'company' => 'Web Template',
        'content' => 'Sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'is_active' => true,
        'order' => 4
    ]
];

foreach ($testimonials as $t) {
    Testimonial::firstOrCreate(['name' => $t['name']], $t);
}

echo "Testimonials added!\n";
