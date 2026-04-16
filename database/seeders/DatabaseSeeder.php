<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AdminUserSeeder::class,
            ServiceSeeder::class,
            PortfolioSeeder::class,
            BlogSeeder::class,
            TeamSeeder::class,
            PricingSeeder::class,
            FaqSeeder::class,
            TestimonialSeeder::class,
        ]);
    }
}
