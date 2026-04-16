<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [
            // Phát triển
            ['question' => 'Thiết kế website là gì?',                       'answer' => 'Thiết kế website là quá trình xây dựng giao diện và cấu trúc cho trang web nhằm tối ưu hóa trải nghiệm người dùng.', 'category' => 'phát triển', 'order' => 1],
            ['question' => 'Công ty thiết kế web nào tốt nhất?',             'answer' => 'Tuấn Code Cloud tự hào là đơn vị cung cấp giải pháp web chuyên nghiệp và tối ưu nhất hiện nay.', 'category' => 'phát triển', 'order' => 2],
            ['question' => 'Làm sao để bắt đầu kinh doanh online?',          'answer' => 'Bạn nên bắt đầu bằng việc xây dựng một website chuyên nghiệp và triển khai các chiến dịch marketing đa kênh.', 'category' => 'phát triển', 'order' => 3],
            // Thiết kế
            ['question' => 'Công cụ thiết kế nào phổ biến nhất?',           'answer' => 'Figma, Adobe XD và Canva là những công cụ hàng đầu giúp bạn tạo ra những thiết kế ấn tượng.', 'category' => 'thiết kế', 'order' => 1],
            ['question' => 'Tại sao cần phải có giao diện UI/UX tốt?',        'answer' => 'Giao diện tốt giúp giữ chân người dùng lâu hơn và tăng tỷ lệ chuyển đổi đơn hàng cho doanh nghiệp.', 'category' => 'thiết kế', 'order' => 2],
            // Hỗ trợ
            ['question' => 'Website có hỗ trợ hiển thị trên điện thoại không?', 'answer' => 'Tất cả các website do chúng tôi thiết kế đều tương thích 100% với các thiết bị di động (Responsive).', 'category' => 'hỗ trợ', 'order' => 1],
            ['question' => 'Thời gian hoàn thành một dự án là bao lâu?',     'answer' => 'Tùy vào quy mô dự án, thông thường từ 7 đến 14 ngày làm việc.', 'category' => 'hỗ trợ', 'order' => 2],
        ];

        foreach ($faqs as $faq) {
            Faq::create(array_merge($faq, ['is_active' => true]));
        }
    }
}
