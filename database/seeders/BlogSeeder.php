<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            ['title' => 'Tiktok Illegally collecting data sharing', 'category' => 'Marketing', 'author' => 'Admin', 'excerpt' => 'Sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur elit.', 'image' => 'assets/img/blog/1.jpg'],
            ['title' => 'How can use our latest news by Monoline', 'category' => 'Design', 'author' => 'Admin', 'excerpt' => 'Sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur elit.', 'image' => 'assets/img/blog/2.jpg'],
            ['title' => 'Learning and growing in the first year', 'category' => 'Agency', 'author' => 'Admin', 'excerpt' => 'Sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur elit.', 'image' => 'assets/img/blog/3.jpg'],
            ['title' => 'The five devices you need to work anytime', 'category' => 'Marketing', 'author' => 'Admin', 'excerpt' => 'Sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur elit.', 'image' => 'assets/img/blog/4.jpg'],
            ['title' => 'Where and how to watch live stream today', 'category' => 'Design', 'author' => 'Admin', 'excerpt' => 'Sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur elit.', 'image' => 'assets/img/blog/5.jpg'],
            ['title' => 'Convincing reasons you need to learn coding', 'category' => 'Agency', 'author' => 'Admin', 'excerpt' => 'Sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur elit.', 'image' => 'assets/img/blog/6.jpg'],
        ];

        foreach ($posts as $i => $post) {
            Blog::create(array_merge($post, [
                'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.',
                'is_published' => true,
                'published_at' => now()->subDays($i * 3),
            ]));
        }
    }
}
