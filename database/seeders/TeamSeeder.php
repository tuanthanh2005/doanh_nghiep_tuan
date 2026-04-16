<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    public function run(): void
    {
        $members = [
            ['name' => 'Gary Hunt',       'position' => 'Marketer',         'photo' => 'assets/img/team/1.jpg', 'order' => 1],
            ['name' => 'Ayoub Fennouni',  'position' => 'Manager',          'photo' => 'assets/img/team/2.jpg', 'order' => 2],
            ['name' => 'Mark Linomit',    'position' => 'Python Developer',  'photo' => 'assets/img/team/3.jpg', 'order' => 3],
            ['name' => 'Thompson Luis',   'position' => 'Developer',         'photo' => 'assets/img/team/4.jpg', 'order' => 4],
            ['name' => 'Sarah Johnson',   'position' => 'UI/UX Designer',    'photo' => 'assets/img/team/5.jpg', 'order' => 5],
            ['name' => 'David Chen',      'position' => 'SEO Specialist',    'photo' => 'assets/img/team/6.jpg', 'order' => 6],
            ['name' => 'Emma Wilson',     'position' => 'Content Writer',    'photo' => 'assets/img/team/7.jpg', 'order' => 7],
            ['name' => 'James Brown',     'position' => 'Project Manager',   'photo' => 'assets/img/team/8.jpg', 'order' => 8],
        ];

        foreach ($members as $m) {
            Team::create(array_merge($m, ['is_active' => true]));
        }
    }
}
