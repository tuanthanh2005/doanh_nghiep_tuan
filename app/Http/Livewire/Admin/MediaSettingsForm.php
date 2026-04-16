<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Setting;

class MediaSettingsForm extends Component
{
    use WithFileUploads;

    public $hero_bg;
    public $footer_bg;
    public $breadcrumb_bg;
    public $about_vision_bg;
    public $pricing_bg;
    public $site_logo;
    public $site_favicon;
    
    public string $existing_hero_bg = 'assets/img/bg/home-bg.jpg';
    public string $existing_footer_bg = 'assets/img/bg/footer.png';
    public string $existing_breadcrumb_bg = 'assets/img/bg/section-top.png';
    public string $existing_about_vision_bg = 'assets/img/bg/slider_bg.jpg';
    public string $existing_pricing_bg = 'assets/img/bg/pricing-bg.jpg';
    public string $existing_site_logo = 'assets/img/logo.png';
    public string $existing_site_favicon = 'favicon.ico';

    public function mount()
    {
        $this->existing_hero_bg = Setting::get('media_hero_bg', $this->existing_hero_bg);
        $this->existing_footer_bg = Setting::get('media_footer_bg', $this->existing_footer_bg);
        $this->existing_breadcrumb_bg = Setting::get('media_breadcrumb_bg', $this->existing_breadcrumb_bg);
        $this->existing_about_vision_bg = Setting::get('media_about_vision_bg', $this->existing_about_vision_bg);
        $this->existing_pricing_bg = Setting::get('media_pricing_bg', $this->existing_pricing_bg);
        $this->existing_site_logo = Setting::get('media_site_logo', $this->existing_site_logo);
        $this->existing_site_favicon = Setting::get('media_site_favicon', $this->existing_site_favicon);
    }

    public function save()
    {
        $mediaToUpdate = [
            'hero_bg' => 'media_hero_bg',
            'footer_bg' => 'media_footer_bg',
            'breadcrumb_bg' => 'media_breadcrumb_bg',
            'about_vision_bg' => 'media_about_vision_bg',
            'pricing_bg' => 'media_pricing_bg',
            'site_logo' => 'media_site_logo',
            'site_favicon' => 'media_site_favicon',
        ];

        foreach ($mediaToUpdate as $property => $settingKey) {
            if ($this->$property) {
                $path = $this->$property->store('media', 'public_uploads');
                Setting::set($settingKey, $path);
                $this->{"existing_" . $property} = $path;
            }
        }

        session()->flash('success', 'Đã cập nhật tất cả hình ảnh hệ thống thành công!');
        $this->reset(['hero_bg', 'footer_bg', 'breadcrumb_bg', 'about_vision_bg', 'pricing_bg', 'site_logo', 'site_favicon']);
    }

    public function render()
    {
        return view('livewire.admin.media-settings-form')
            ->layout('layouts.admin', ['title' => 'Quản lý Hình ảnh Hệ thống']);
    }
}
