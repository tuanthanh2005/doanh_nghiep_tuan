<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\Blog;
use App\Models\Portfolio;
use App\Models\Testimonial;

class HomeLivewire extends Component
{
    public function render()
    {
        return view('pages.home', [
            'services'     => \App\Models\Service::where('is_active', true)->orderBy('order')->take(6)->get(),
            'latestPosts'  => Blog::where('is_published', true)->latest()->take(3)->get(),
            'testimonials' => Testimonial::where('is_active', true)->orderBy('order')->get(),
        ])->layout('layouts.app');
    }
}
