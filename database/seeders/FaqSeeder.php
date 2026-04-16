<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [
            // Development
            ['question' => 'What is Design?',                       'answer' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'category' => 'development', 'order' => 1],
            ['question' => 'What are the best Web Design Company?', 'answer' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'category' => 'development', 'order' => 2],
            ['question' => 'How to become a web developer?',        'answer' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'category' => 'development', 'order' => 3],
            ['question' => 'What is the best platform for work?',   'answer' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'category' => 'development', 'order' => 4],
            // Design
            ['question' => 'How to as a web developer?',            'answer' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'category' => 'design', 'order' => 1],
            ['question' => 'What are the best Design tools?',       'answer' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'category' => 'design', 'order' => 2],
            ['question' => 'What is the best platform for design?', 'answer' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'category' => 'design', 'order' => 3],
            // Compatibility
            ['question' => 'What browsers are supported?',          'answer' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'category' => 'compatibility', 'order' => 1],
            ['question' => 'Is it mobile responsive?',              'answer' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'category' => 'compatibility', 'order' => 2],
        ];

        foreach ($faqs as $faq) {
            Faq::create(array_merge($faq, ['is_active' => true]));
        }
    }
}
