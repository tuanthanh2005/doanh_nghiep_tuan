<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pricing;

class PricingSeeder extends Seeder
{
    public function run(): void
    {
        $plans = [
            [
                'name'        => 'Business',
                'price'       => 20,
                'duration'    => '/month',
                'features'    => ['PSD to HTML', 'WordPress Theme', 'WordPress Plugin', 'Logo Design', 'WordPress Customization'],
                'is_featured' => false,
                'order'       => 1,
            ],
            [
                'name'        => 'Standard',
                'price'       => 60,
                'duration'    => '/month',
                'features'    => ['PSD to HTML', 'WordPress Theme', 'WordPress Plugin', 'Logo Design', 'WordPress Customization'],
                'is_featured' => true,
                'order'       => 2,
            ],
            [
                'name'        => 'Professional',
                'price'       => 90,
                'duration'    => '/month',
                'features'    => ['PSD to HTML', 'WordPress Theme', 'WordPress Plugin', 'Logo Design', 'WordPress Customization'],
                'is_featured' => false,
                'order'       => 3,
            ],
        ];

        foreach ($plans as $plan) {
            Pricing::create(array_merge($plan, ['is_active' => true]));
        }
    }
}
