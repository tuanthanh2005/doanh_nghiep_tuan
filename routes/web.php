<?php

use Illuminate\Support\Facades\Route;

// Frontend Pages
use App\Http\Livewire\Pages\HomeLivewire;
use App\Http\Livewire\Pages\AboutLivewire;
use App\Http\Livewire\Pages\ServiceLivewire;
use App\Http\Livewire\Pages\ServiceDetailLivewire;
use App\Http\Livewire\Pages\PortfolioLivewire;
use App\Http\Livewire\Pages\PortfolioDetailLivewire;
use App\Http\Livewire\Pages\BlogLivewire;
use App\Http\Livewire\Pages\BlogDetailLivewire;
use App\Http\Livewire\Pages\PricingLivewire;
use App\Http\Livewire\Pages\FaqLivewire;
use App\Http\Livewire\Pages\ContactLivewire;

// Admin Pages
use App\Http\Livewire\Admin\Pages\DashboardPage;
use App\Http\Livewire\Admin\Pages\BlogIndexPage;
use App\Http\Livewire\Admin\Pages\ServiceIndexPage;
use App\Http\Livewire\Admin\Pages\PortfolioIndexPage;
use App\Http\Livewire\Admin\Pages\ContactIndexPage;

// Admin Forms
use App\Http\Livewire\Admin\BlogForm;
use App\Http\Livewire\Admin\ServiceForm;
use App\Http\Livewire\Admin\PortfolioForm;

/*
|--------------------------------------------------------------------------
| Auth
|--------------------------------------------------------------------------
*/
Route::get('/login', \App\Http\Livewire\Auth\LoginPage::class)
    ->name('login')
    ->middleware('guest');

Route::post('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect()->route('login');
})->name('logout')->middleware('auth');

Route::get('/register/admin/admin/register', \App\Http\Livewire\Auth\AdminRegisterPage::class)
    ->name('register.admin')
    ->middleware('guest');

/*
|--------------------------------------------------------------------------
| Frontend
|--------------------------------------------------------------------------
*/
Route::get('/',                 HomeLivewire::class)->name('home');
Route::get('/about',            AboutLivewire::class)->name('about');
Route::get('/services',         ServiceLivewire::class)->name('services.index');
Route::get('/services/{slug}',  ServiceDetailLivewire::class)->name('services.show');
Route::get('/portfolio',        PortfolioLivewire::class)->name('portfolio.index');
Route::get('/portfolio/{slug}', PortfolioDetailLivewire::class)->name('portfolio.show');
Route::get('/blog',             BlogLivewire::class)->name('blog.index');
Route::get('/blog/{slug}',      BlogDetailLivewire::class)->name('blog.show');
Route::get('/pricing',          PricingLivewire::class)->name('pricing.index');
Route::get('/faq',              FaqLivewire::class)->name('faq.index');
Route::get('/contact',          ContactLivewire::class)->name('contact.index');

/*
|--------------------------------------------------------------------------
| Admin  →  prefix: admin  →  middleware: auth
|--------------------------------------------------------------------------
|  /admin                    admin.dashboard
|  /admin/blog               admin.blog.index
|  /admin/blog/create        admin.blog.create
|  /admin/blog/{id}/edit     admin.blog.edit
|  /admin/services           admin.services.index
|  /admin/services/create    admin.services.create
|  /admin/services/{id}/edit admin.services.edit


|  /admin/portfolio/{id}/edit admin.portfolio.edit
|  /admin/portfolio/create   admin.portfolio.create
|  /admin/portfolio/{id}/edit admin.portfolio.edit
|  /admin/contacts           admin.contacts.index
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->middleware(['auth', 'role:admin'])->group(function () {

    Route::get('',                   DashboardPage::class)->name('dashboard');

    Route::get('blog',               BlogIndexPage::class)->name('blog.index');
    Route::get('blog/create',        BlogForm::class)->name('blog.create');
    Route::get('blog/{id}/edit',     BlogForm::class)->name('blog.edit');

    Route::get('services',           ServiceIndexPage::class)->name('services.index');
    Route::get('services/create',    ServiceForm::class)->name('services.create');
    Route::get('services/{id}/edit', ServiceForm::class)->name('services.edit');

    Route::get('portfolio',           PortfolioIndexPage::class)->name('portfolio.index');    Route::get('portfolio/create',    PortfolioForm::class)->name('portfolio.create');
    Route::get('portfolio/{id}/edit', PortfolioForm::class)->name('portfolio.edit');

    Route::get('categories',           \App\Http\Livewire\Admin\Pages\CategoryIndexPage::class)->name('categories.index');
    Route::get('categories/create',    \App\Http\Livewire\Admin\CategoryForm::class)->name('categories.create');
    Route::get('categories/{id}/edit', \App\Http\Livewire\Admin\CategoryForm::class)->name('categories.edit');

    Route::get('pricing',           \App\Http\Livewire\Admin\Pages\PricingIndexPage::class)->name('pricing.index');
    Route::get('pricing/create',    \App\Http\Livewire\Admin\PricingForm::class)->name('pricing.create');
    Route::get('pricing/{id}/edit', \App\Http\Livewire\Admin\PricingForm::class)->name('pricing.edit');

    Route::get('faqs',           \App\Http\Livewire\Admin\Pages\FaqIndexPage::class)->name('faqs.index');
    Route::get('faqs/create',    \App\Http\Livewire\Admin\FaqForm::class)->name('faqs.create');
    Route::get('faqs/{id}/edit', \App\Http\Livewire\Admin\FaqForm::class)->name('faqs.edit');

    Route::get('partners',           \App\Http\Livewire\Admin\Pages\PartnerIndexPage::class)->name('partners.index');
    Route::get('partners/create',    \App\Http\Livewire\Admin\PartnerForm::class)->name('partners.create');
    Route::get('partners/{id}/edit', \App\Http\Livewire\Admin\PartnerForm::class)->name('partners.edit');

    Route::get('testimonials',           \App\Http\Livewire\Admin\Pages\TestimonialIndexPage::class)->name('testimonials.index');
    Route::get('testimonials/create',    \App\Http\Livewire\Admin\TestimonialForm::class)->name('testimonials.create');
    Route::get('testimonials/{id}/edit', \App\Http\Livewire\Admin\TestimonialForm::class)->name('testimonials.edit');

    Route::get('settings', \App\Http\Livewire\Admin\SettingsForm::class)->name('settings');
    Route::get('footer-settings', \App\Http\Livewire\Admin\FooterSettingsForm::class)->name('footer-settings');
    Route::get('media-settings', \App\Http\Livewire\Admin\MediaSettingsForm::class)->name('media-settings');

    Route::get('contacts',           ContactIndexPage::class)->name('contacts.index');
});
