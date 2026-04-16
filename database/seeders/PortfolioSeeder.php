<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Portfolio;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['title' => 'Website Design Agency', 'category' => 'webtemplate', 'image' => 'assets/img/portfolio/1.jpg', 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'order' => 1],
            ['title' => 'Product Marketing',     'category' => 'branding',    'image' => 'assets/img/portfolio/2.jpg', 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'order' => 2],
            ['title' => 'App Development',       'category' => 'digital',     'image' => 'assets/img/portfolio/3.jpg', 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'order' => 3],
            ['title' => 'Business Strategy',     'category' => 'seo',         'image' => 'assets/img/portfolio/4.jpg', 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'order' => 4],
            ['title' => 'Brand Identity',        'category' => 'branding',    'image' => 'assets/img/portfolio/5.jpg', 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'order' => 5],
        ];

        foreach ($items as $item) {
            Portfolio::create(array_merge($item, ['is_active' => true]));
        }
    }
}
