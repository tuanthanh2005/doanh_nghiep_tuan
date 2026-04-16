<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            ['title' => 'Email Marketing',           'description' => 'Sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur elit.', 'icon' => 'research.png', 'order' => 1],
            ['title' => 'Offline SEO',               'description' => 'Sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur elit.', 'icon' => 'brand.png',    'order' => 2],
            ['title' => 'Social Media Marketing',    'description' => 'Sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur elit.', 'icon' => 'web.png',      'order' => 3],
            ['title' => 'Lead Generation',           'description' => 'Sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur elit.', 'icon' => 'strategy.png', 'order' => 4],
            ['title' => 'Web Design',                'description' => 'Sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur elit.', 'icon' => 'design.png',   'order' => 5],
            ['title' => 'Search Engine Optimization','description' => 'Sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur elit.', 'icon' => 'photo.png',    'order' => 6],
        ];

        foreach ($services as $s) {
            Service::create(array_merge($s, ['is_active' => true]));
        }
    }
}
