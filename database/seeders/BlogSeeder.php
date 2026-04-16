<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            ['title' => 'Tiktok thu thập dữ liệu người dùng trái phép', 'category' => 'Marketing', 'author' => 'Admin', 'excerpt' => 'Phân tích về cách thức Tiktok thu thập thông tin và ảnh hưởng đến quyền riêng tư.', 'image' => 'assets/img/blog/1.jpg'],
            ['title' => 'Cách tận dụng tin tức mới nhất từ hệ thống', 'category' => 'Thiết kế', 'author' => 'Admin', 'excerpt' => 'Hướng dẫn cập nhật thông tin hữu ích để tối ưu hóa quy trình làm việc của bạn.', 'image' => 'assets/img/blog/2.jpg'],
            ['title' => 'Học tập và phát triển trong năm đầu khởi nghiệp', 'category' => 'Agency', 'author' => 'Admin', 'excerpt' => 'Chia sẻ những kinh nghiệm thực chiến quý báu khi vận hành một Agency công nghệ.', 'image' => 'assets/img/blog/3.jpg'],
            ['title' => '5 thiết bị bạn cần để làm việc linh hoạt mọi nơi', 'category' => 'Marketing', 'author' => 'Admin', 'excerpt' => 'Danh sách các công cụ phần cứng giúp bạn duy trì hiệu suất công việc di động.', 'image' => 'assets/img/blog/4.jpg'],
            ['title' => 'Làm thế nào để xem livestream hiệu quả hôm nay', 'category' => 'Thiết kế', 'author' => 'Admin', 'excerpt' => 'Bí quyết tương tác và khai thác giá trị từ các buổi phát sóng trực tiếp.', 'image' => 'assets/img/blog/5.jpg'],
            ['title' => 'Lý do thuyết phục bạn cần học lập trình ngay', 'category' => 'Agency', 'author' => 'Admin', 'excerpt' => 'Tại sao tư duy lập trình lại quan trọng trong kỷ nguyên trí tuệ nhân tạo AI.', 'image' => 'assets/img/blog/6.jpg'],
        ];

        foreach ($posts as $i => $post) {
            Blog::create(array_merge($post, [
                'content' => 'Đây là nội dung chi tiết của bài viết. Nội dung này cung cấp các thông tin chuyên sâu và bổ ích cho người đọc về lĩnh vực marketing công nghệ và giải pháp số.',
                'is_published' => true,
                'published_at' => now()->subDays($i * 3),
            ]));
        }
    }
}
