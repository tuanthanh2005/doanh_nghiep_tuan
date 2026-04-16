<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Portfolio;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['title' => 'Thiết kế Web Agency', 'category' => 'webtemplate', 'image' => 'assets/img/portfolio/1.jpg', 'description' => 'Dự án thiết kế website chuyên nghiệp cho các doanh nghiệp Agency.', 'order' => 1],
            ['title' => 'Marketing Sản phẩm',  'category' => 'branding',    'image' => 'assets/img/portfolio/2.jpg', 'description' => 'Chiến dịch marketing bứt phá doanh thu cho sản phẩm mới.', 'order' => 2],
            ['title' => 'Phát triển Ứng dụng', 'category' => 'digital',     'image' => 'assets/img/portfolio/3.jpg', 'description' => 'Xây dựng ứng dụng di động hiện đại, tích hợp công nghệ AI.', 'order' => 3],
            ['title' => 'Chiến lược Kinh doanh','category' => 'seo',         'image' => 'assets/img/portfolio/4.jpg', 'description' => 'Tư vấn và thực thi chiến lược tăng trưởng doanh nghiệp.', 'order' => 4],
            ['title' => 'Nhận diện Thương hiệu','category' => 'branding',    'image' => 'assets/img/portfolio/5.jpg', 'description' => 'Thiết kế bộ nhận diện thương hiệu độc bản và ấn tượng.', 'order' => 5],
        ];

        foreach ($items as $item) {
            Portfolio::create(array_merge($item, ['is_active' => true]));
        }
    }
}
