<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    public function run(): void
    {
        $members = [
            ['name' => 'Nguyễn Văn Nam',  'position' => 'Chuyên viên Marketing', 'photo' => 'assets/img/team/1.jpg', 'order' => 1],
            ['name' => 'Lê Thị Mai',      'position' => 'Quản lý Dự án',         'photo' => 'assets/img/team/2.jpg', 'order' => 2],
            ['name' => 'Trần Minh Tuấn',  'position' => 'Lập trình viên Python', 'photo' => 'assets/img/team/3.jpg', 'order' => 3],
            ['name' => 'Phạm Thế Anh',    'position' => 'Lập trình viên Web',    'photo' => 'assets/img/team/4.jpg', 'order' => 4],
            ['name' => 'Hoàng Thu Thủy',  'position' => 'Thiết kế UI/UX',        'photo' => 'assets/img/team/5.jpg', 'order' => 5],
            ['name' => 'Đặng Văn Hùng',   'position' => 'Chuyên gia SEO',        'photo' => 'assets/img/team/6.jpg', 'order' => 6],
            ['name' => 'Vũ Quỳnh Chi',    'position' => 'Biên tập nội dung',     'photo' => 'assets/img/team/7.jpg', 'order' => 7],
            ['name' => 'Bùi Minh Đức',    'position' => 'Giám đốc Kỹ thuật',     'photo' => 'assets/img/team/8.jpg', 'order' => 8],
        ];

        foreach ($members as $m) {
            Team::create(array_merge($m, ['is_active' => true]));
        }
    }
}
