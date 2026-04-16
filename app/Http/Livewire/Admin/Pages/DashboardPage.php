<?php

namespace App\Http\Livewire\Admin\Pages;

use Livewire\Component;
use App\Models\Blog;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Team;
use App\Models\Contact;

class DashboardPage extends Component
{
    public function render()
    {
        return view('admin.dashboard', [
            'stats' => [
                'blog'      => Blog::count(),
                'services'  => Service::count(),
                'portfolio' => Portfolio::count(),
                'team'      => Team::count(),
                'contacts'  => Contact::where('is_read', false)->count(),
            ],
            'recentContacts' => Contact::latest()->take(5)->get(),
            'recentBlogs'    => Blog::latest()->take(5)->get(),
        ])->layout('layouts.admin', ['title' => 'Dashboard']);
    }
}
