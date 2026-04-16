<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['name' => 'Nguyễn Văn A', 'position' => 'Giám đốc', 'company' => 'Accurate Themes', 'content' => 'Tôi rất hài lòng với dịch vụ của công ty. Thiết kế website đẹp, chuyên nghiệp và tối ưu SEO tốt.', 'photo' => 'assets/img/testimonial/1.jpg', 'order' => 1],
            ['name' => 'Trần Thị B', 'position' => 'Trưởng phòng Marketing', 'company' => 'Spyro Themes', 'content' => 'Dịch vụ chăm sóc khách hàng rất tốt, luôn hỗ trợ 24/7.', 'photo' => 'assets/img/testimonial/2.jpg', 'order' => 2],
            ['name' => 'Lê Văn C', 'position' => 'Giám đốc', 'company' => 'Theme Ocean', 'content' => 'Giá cả hợp lý, chất lượng tốt, rất đáng để đầu tư.', 'photo' => 'assets/img/testimonial/3.jpg', 'order' => 3],
            ['name' => 'Phạm Thị D', 'position' => 'Chủ tịch', 'company' => 'Web Template', 'content' => 'Rất chuyên nghiệp và hiệu quả, tôi sẽ tiếp tục sử dụng dịch vụ của công ty.', 'photo' => 'assets/img/testimonial/4.jpg', 'order' => 4],
        ];

        foreach ($items as $item) {
            Testimonial::create(array_merge($item, ['is_active' => true]));
        }
    }
}
