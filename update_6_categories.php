<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Service;
use App\Models\Faq;
use Illuminate\Support\Str;

require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$newServices = [
    [
        'title' => 'Thiết kế website',
        'description' => 'Thiết kế website chuẩn SEO, giao diện đẹp, tối ưu trải nghiệm người dùng.',
        'icon' => 'research.png'
    ],
    [
        'title' => 'Quản trị website',
        'description' => 'Quản lý, cập nhật nội dung và bảo trì website hoạt động ổn định.',
        'icon' => 'brand.png'
    ],
    [
        'title' => 'Công nghệ AI',
        'description' => 'Ứng dụng AI vào kinh doanh giúp tự động hóa và tăng hiệu suất.',
        'icon' => 'web.png'
    ],
    [
        'title' => 'Dịch vụ mạng xã hội',
        'description' => 'Xây dựng và phát triển kênh mạng xã hội chuyên nghiệp, thu hút tệp khách hàng tiềm năng.',
        'icon' => 'strategy.png'
    ],
    [
        'title' => 'AI giá rẻ',
        'description' => 'Nơi cung cấp các tài khoản AI giá rẻ + Chính Chủ + Chính Hãng.',
        'icon' => 'design.png'
    ],
    [
        'title' => 'Dịch vụ MXH',
        'description' => 'Chạy quảng cáo và tối ưu hóa chuyển đổi trên đa nền tảng mạng xã hội.',
        'icon' => 'photo.png'
    ],
];

Service::truncate();

foreach ($newServices as $idx => $s) {
    Service::create([
        'title' => $s['title'],
        'slug' => Str::slug($s['title']),
        'description' => $s['description'],
        'icon' => $s['icon'],
        'is_active' => true,
        'order' => $idx + 1
    ]);
}

// Update FAQs to match the exact same categories
Faq::truncate();

$newFaqs = [
    ['category' => 'Thiết kế website', 'question' => 'Website có tương thích trên thiết bị di động không?', 'answer' => 'Có, toàn bộ website do chúng tôi thiết kế đều tương thích chuẩn Responsive 100% trên điện thoại, máy tính bảng.'],
    ['category' => 'Thiết kế website', 'question' => 'Thiết kế website mất bao lâu?', 'answer' => 'Thời gian hoàn thiện thường mất từ 7-14 ngày tùy vào yêu cầu chức năng thực tế của doanh nghiệp.'],

    ['category' => 'Quản trị website', 'question' => 'Dịch vụ quản trị có bao gồm viết bài không?', 'answer' => 'Có. Ngoài bảo trì kỹ thuật, chúng tôi cung cấp gói sản xuất bài viết mới định kỳ để giữ tương tác.'],
    ['category' => 'Quản trị website', 'question' => 'Nếu website bị lỗi thì xử lý thế nào?', 'answer' => 'Hệ thống có giám sát tự động 24/7. Chúng tôi sẽ backup và khôi phục nhanh chóng trong tối đa 30 phút.'],

    ['category' => 'Công nghệ AI', 'question' => 'Doanh nghiệp nhỏ có cần dùng AI không?', 'answer' => 'Rất cần thiết để tinh gọn bộ máy nhân sự. AI giúp xử lý tự động các khâu CSKH và phân tích dữ liệu hiệu quả.'],
    ['category' => 'Công nghệ AI', 'question' => 'Dữ liệu của công ty tôi có bị AI thu thập không?', 'answer' => 'Khởi tạo hệ thống riêng khép kín bằng API bảo mật (Private LLM), dữ liệu của bạn không bị training ra ngoài.'],

    ['category' => 'Dịch vụ mạng xã hội', 'question' => 'Làm sao để ra được đơn hàng từ Fanpage?', 'answer' => 'Cần chiến lược Content giá trị kéo phủ, kết hợp Livestream và ads bám đuổi Target khách hàng thông minh.'],
    ['category' => 'Dịch vụ mạng xã hội', 'question' => 'Bên bạn có đảm nhận việc quay/chụp video không?', 'answer' => 'Chúng tôi có đội ngũ Production tinh nhuệ chuyên sản xuất TVC, short-video Reels, Tiktok chuyên nghiệp.'],

    ['category' => 'AI giá rẻ', 'question' => 'Vì sao mức giá lại rẻ?', 'answer' => 'Thay vì build từ đầu, chúng tôi tích hợp các module AI có sẵn mạnh mẽ, tiết kiệm hàng chục ngàn đô phí hạ tầng.'],
    ['category' => 'AI giá rẻ', 'question' => 'Gói AI giá rẻ giới hạn những tính năng nào?', 'answer' => 'Gói phù hợp nhu cầu trả lời cơ bản và trích xuất dữ liệu. Sẽ không bao gồm tích hợp đa nền tảng phức tạp.'],

    ['category' => 'Dịch vụ MXH', 'question' => 'Ngân sách tối thiểu chạy Ads trên dịch vụ này?', 'answer' => 'Doanh nghiệp có thể bắt đầu với ngưỡng ngân sách cực kỳ nhỏ, khoảng 2-5 triệu mỗi tháng để chạy phễu A/B Testing.'],
];

foreach ($newFaqs as $idx => $f) {
    Faq::create([
        'category' => $f['category'],
        'question' => $f['question'],
        'answer' => $f['answer'],
        'is_active' => true,
        'order' => $idx + 1
    ]);
}

echo "Database successfully rebuilt with new 6 categories!\n";
