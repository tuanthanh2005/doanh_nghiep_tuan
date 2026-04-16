<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            ['title' => 'Email Marketing',           'description' => 'Giải pháp gửi email tự động, tối ưu tỉ lệ mở và chuyển đổi đơn hàng hiệu quả.', 'icon' => 'research.png', 'order' => 1],
            ['title' => 'Offline SEO',               'description' => 'Tối ưu Local SEO, Google Maps giúp khách hàng địa phương tìm thấy bạn nhanh nhất.', 'icon' => 'brand.png',    'order' => 2],
            ['title' => 'Social Media Marketing',    'description' => 'Xây dựng thương hiệu mạnh mẽ trên Facebook, Tiktok, Instagram với nội dung sáng tạo.', 'icon' => 'web.png',      'order' => 3],
            ['title' => 'Lead Generation',           'description' => 'Tìm kiếm và thu thập dữ liệu khách hàng tiềm năng chất lượng cao cho doanh nghiệp.', 'icon' => 'strategy.png', 'order' => 4],
            ['title' => 'Thiết kế Web',              'description' => 'Xây dựng website chuẩn SEO, giao diện hiện đại, chuyên nghiệp và tối ưu trải nghiệm.', 'icon' => 'design.png',   'order' => 5],
            ['title' => 'Tối ưu SEO',                'description' => 'Đưa website của bạn lên TOP công cụ tìm kiếm Google bền vững và hiệu quả.', 'icon' => 'photo.png',    'order' => 6],
        ];

        foreach ($services as $s) {
            Service::create(array_merge($s, ['is_active' => true]));
        }
    }
}
