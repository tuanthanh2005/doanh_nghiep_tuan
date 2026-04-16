<?php

use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Blog;
use App\Models\Pricing;
use App\Models\Testimonial;

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

echo "Bắt đầu cập nhật dữ liệu tiếng Việt...\n";

// Services
$services = [
    'Email Marketing'            => ['title' => 'Email Marketing',           'description' => 'Giải pháp gửi email tự động, tối ưu tỉ lệ mở và chuyển đổi đơn hàng hiệu quả.'],
    'Offline SEO'                => ['title' => 'Offline SEO',               'description' => 'Tối ưu Local SEO, Google Maps giúp khách hàng địa phương tìm thấy bạn nhanh nhất.'],
    'Social Media Marketing'     => ['title' => 'Social Media Marketing',    'description' => 'Xây dựng thương hiệu mạnh mẽ trên Facebook, Tiktok, Instagram với nội dung sáng tạo.'],
    'Lead Generation'            => ['title' => 'Lead Generation',           'description' => 'Tìm kiếm và thu thập dữ liệu khách hàng tiềm năng chất lượng cao cho doanh nghiệp.'],
    'Web Design'                 => ['title' => 'Thiết kế Web',              'description' => 'Xây dựng website chuẩn SEO, giao diện hiện đại, chuyên nghiệp và tối ưu trải nghiệm.'],
    'Search Engine Optimization' => ['title' => 'Tối ưu SEO',                'description' => 'Đưa website của bạn lên TOP công cụ tìm kiếm Google bền vững và hiệu quả.'],
];

foreach ($services as $oldTitle => $data) {
    Service::where('title', $oldTitle)->update($data);
}
echo "Đã cập nhật Services.\n";

// Pricing
$plans = [
    'Business'     => ['name' => 'Gói Cơ Bản',     'duration' => '/tháng'],
    'Standard'     => ['name' => 'Gói Nâng Cao',   'duration' => '/tháng'],
    'Professional' => ['name' => 'Gói Doanh Nghiệp', 'duration' => '/tháng'],
];

foreach ($plans as $oldName => $data) {
    Pricing::where('name', $oldName)->update($data);
}
// Update features separately as they are likely JSON/Array
$pricingItems = Pricing::all();
foreach ($pricingItems as $item) {
    if ($item->name == 'Gói Cơ Bản') {
        $item->features = ['Thiết kế Website', 'Tối ưu SEO Cơ bản', 'Hỗ trợ 24/7', 'Bảo mật SSL', 'Quản trị nội dung'];
    } elseif ($item->name == 'Gói Nâng Cao') {
        $item->features = ['Thiết kế Website Chuyên nghiệp', 'Tối ưu SEO Chuyên sâu', 'Hỗ trợ Ưu tiên', 'Tích hợp Thanh toán', 'Tài khoản AI Hỗ trợ'];
    } elseif ($item->name == 'Gói Doanh Nghiệp') {
        $item->features = ['Thiết kế Website theo yêu cầu', 'SEO Matrix Phủ sóng', 'Chiến lược Marketing Toàn diện', 'Hệ thống Email Marketing', 'Tư vấn Chuyển đổi số'];
    }
    $item->save();
}
echo "Đã cập nhật Pricing.\n";

// Portfolios
$items = [
    'Website Design Agency' => ['title' => 'Thiết kế Web Agency', 'description' => 'Dự án thiết kế website chuyên nghiệp cho các doanh nghiệp Agency.'],
    'Product Marketing'     => ['title' => 'Marketing Sản phẩm',  'description' => 'Chiến dịch marketing bứt phá doanh thu cho sản phẩm mới.'],
    'App Development'       => ['title' => 'Phát triển Ứng dụng', 'description' => 'Xây dựng ứng dụng di động hiện đại, tích hợp công nghệ AI.'],
    'Business Strategy'     => ['title' => 'Chiến lược Kinh doanh', 'description' => 'Tư vấn và thực thi chiến lược tăng trưởng doanh nghiệp.'],
    'Brand Identity'        => ['title' => 'Nhận diện Thương hiệu', 'description' => 'Thiết kế bộ nhận diện thương hiệu độc bản và ấn tượng.'],
];

foreach ($items as $oldTitle => $data) {
    Portfolio::where('title', $oldTitle)->update($data);
}
echo "Đã cập nhật Portfolios.\n";

// Blogs
$posts = [
    'Tiktok Illegally collecting data sharing' => ['title' => 'Tiktok thu thập dữ liệu người dùng trái phép', 'category' => 'Marketing', 'excerpt' => 'Phân tích về cách thức Tiktok thu thập thông tin và ảnh hưởng đến quyền riêng tư.'],
    'How can use our latest news by Monoline' => ['title' => 'Cách tận dụng tin tức mới nhất từ hệ thống', 'category' => 'Thiết kế', 'excerpt' => 'Hướng dẫn cập nhật thông tin hữu ích để tối ưu hóa quy trình làm việc của bạn.'],
    'Learning and growing in the first year' => ['title' => 'Học tập và phát triển trong năm đầu khởi nghiệp', 'category' => 'Agency', 'excerpt' => 'Chia sẻ những kinh nghiệm thực chiến quý báu khi vận hành một Agency công nghệ.'],
    'The five devices you need to work anytime' => ['title' => '5 thiết bị bạn cần để làm việc linh hoạt mọi nơi', 'category' => 'Marketing', 'excerpt' => 'Danh sách các công cụ phần cứng giúp bạn duy trì hiệu suất công việc di động.'],
    'Where and how to watch live stream today' => ['title' => 'Làm thế nào để xem livestream hiệu quả hôm nay', 'category' => 'Thiết kế', 'excerpt' => 'Bí quyết tương tác và khai thác giá trị từ các buổi phát sóng trực tiếp.'],
    'Convincing reasons you need to learn coding' => ['title' => 'Lý do thuyết phục bạn cần học lập trình ngay', 'category' => 'Agency', 'excerpt' => 'Tại sao tư duy lập trình lại quan trọng trong kỷ nguyên trí tuệ nhân tạo AI.'],
];

foreach ($posts as $oldTitle => $data) {
    Blog::where('title', $oldTitle)->update($data);
}
echo "Đã cập nhật Blogs.\n";

echo "Hoàn tất cập nhật dữ liệu!\n";
