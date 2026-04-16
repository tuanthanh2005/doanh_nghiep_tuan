<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Faq;

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

Faq::truncate();

$faqs = [
    // Web Design
    ['category' => 'Web Design', 'question' => 'Thiết kế website có chuẩn SEO không?', 'answer' => 'Có, mọi website chúng tôi thiết kế đều được tối ưu hóa cấu trúc chuẩn SEO, tốc độ tải trang nhanh và thân thiện với các công cụ tìm kiếm chuẩn Quốc tế.', 'order' => 1],
    ['category' => 'Web Design', 'question' => 'Thời gian hoàn thành một website là bao lâu?', 'answer' => 'Trung bình từ 2-4 tuần tùy thuộc vào quy mô và độ phức tạp của dự án cũng như mức độ sẵn sàng nội dung từ phía doanh nghiệp.', 'order' => 2],

    // Search Engine Optimization
    ['category' => 'Search Engine Optimization', 'question' => 'SEO mất bao lâu để thấy kết quả?', 'answer' => 'SEO là một chiến lược dài hạn. Thông thường, bạn sẽ bắt đầu thấy những sự thay đổi và cải thiện vị trí thứ hạng sau 3-6 tháng.', 'order' => 1],
    ['category' => 'Search Engine Optimization', 'question' => 'Chi phí SEO được tính như thế nào?', 'answer' => 'Chi phí dựa trên độ khó của từ khóa, mức độ cạnh tranh của ngành và tình trạng trang web hiện tại của bạn.', 'order' => 2],

    // Offline SEO
    ['category' => 'Offline SEO', 'question' => 'Offline SEO / Local SEO là gì?', 'answer' => 'Là tối ưu hóa sự hiện diện của doanh nghiệp bạn trên bản đồ (Google Maps) và trong phạm vi khu vực địa lý cụ thể để thu hút khách hàng địa phương.', 'order' => 1],
    ['category' => 'Offline SEO', 'question' => 'Google Business Profile có quan trọng không?', 'answer' => 'Rất quan trọng. Nó giúp hiển thị doanh nghiệp trực tiếp trên trang nhất ngay lập tức khi tìm kiếm địa phương, gia tăng tương tác thực tế tới 60%.', 'order' => 2],

    // Email Marketing
    ['category' => 'Email Marketing', 'question' => 'Email Marketing có còn hiệu quả?', 'answer' => 'Hoàn toàn hiệu quả. Với tỷ lệ ROI có thể lên tới 4400%, đây vẫn là một trong những kênh giữ chân khách hàng mạnh nhất.', 'order' => 1],
    ['category' => 'Email Marketing', 'question' => 'Tỉ lệ vào hộp thư rác (Spam) có bị cao không?', 'answer' => 'Chúng tôi sử dụng thuật toán làm ấm tên miền, xác thực chuyên sâu (DKIM, SPF) để đảm bảo trên 95% email vào thẳng Inbox.', 'order' => 2],

    // Social Media Marketing
    ['category' => 'Social Media Marketing', 'question' => 'Kênh mạng xã hội nào phù hợp với tôi?', 'answer' => 'Phụ thuộc vào tệp khách hàng. B2B tập trung ở LinkedIn, Facebook; trong khi B2C trẻ sẽ phù hợp với TikTok, Instagram hơn.', 'order' => 1],
    ['category' => 'Social Media Marketing', 'question' => 'Chúng tôi có cần đăng bài mỗi ngày?', 'answer' => 'Không bắt buộc mỗi ngày, quan trọng là tần suất đều đặn và chất lượng nội dung mang tính giải quyết nhu cầu người đọc.', 'order' => 2],

    // Lead Generation
    ['category' => 'Lead Generation', 'question' => 'Chiến dịch Lead Gen hoạt động thế nào?', 'answer' => 'Chúng tôi thiết lập mồi nhử mkt (nam châm thu hút), kết hợp Landing page và quảng cáo chuyển đổi sâu để lấy data khách hàng chất lượng.', 'order' => 1],
    ['category' => 'Lead Generation', 'question' => 'Lead có đảm bảo chất lượng không?', 'answer' => 'Các chiến dịch được tinh chỉnh tối đa thuật toán lọc phễu khách hàng. Hệ thống đo lường loại bỏ các cú click ảo và nhắm trúng đối tượng chuẩn xác.', 'order' => 2],
];

foreach ($faqs as $faq) {
    Faq::create(array_merge($faq, ['is_active' => true]));
}

echo "FAQs updated successfully!\n";
