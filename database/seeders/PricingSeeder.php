<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pricing;

class PricingSeeder extends Seeder
{
    public function run(): void
    {
        $plans = [
            [
                'name'        => 'Gói Cơ Bản',
                'price'       => 29,
                'duration'    => '/tháng',
                'features'    => ['Thiết kế Website', 'Tối ưu SEO Cơ bản', 'Hỗ trợ 24/7', 'Bảo mật SSL', 'Quản trị nội dung'],
                'is_featured' => false,
                'order'       => 1,
            ],
            [
                'name'        => 'Gói Nâng Cao',
                'price'       => 59,
                'duration'    => '/tháng',
                'features'    => ['Thiết kế Website Chuyên nghiệp', 'Tối ưu SEO Chuyên sâu', 'Hỗ trợ Ưu tiên', 'Tích hợp Thanh toán', 'Tài khoản AI Hỗ trợ'],
                'is_featured' => true,
                'order'       => 2,
            ],
            [
                'name'        => 'Gói Doanh Nghiệp',
                'price'       => 99,
                'duration'    => '/tháng',
                'features'    => ['Thiết kế Website theo yêu cầu', 'SEO Matrix Phủ sóng', 'Chiến lược Marketing Toàn diện', 'Hệ thống Email Marketing', 'Tư vấn Chuyển đổi số'],
                'is_featured' => false,
                'order'       => 3,
            ],
        ];

        foreach ($plans as $plan) {
            Pricing::create(array_merge($plan, ['is_active' => true]));
        }
    }
}
