<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Setting;

class FooterSettingsForm extends Component
{
    public string $footer_about = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis dignissim.';
    public string $footer_fb = '#';
    public string $footer_yt = '#';
    public string $footer_ig = '#';
    public string $footer_li = '#';
    public string $footer_col1_title = 'Quick Links';
    public string $footer_col2_title = 'Company';
    public string $footer_col3_title = 'Subscribe for updates';
    public string $footer_copyright = 'Monoline. All Rights Reserved.';

    public function mount()
    {
        $this->footer_about = Setting::get('footer_about', $this->footer_about);
        $this->footer_fb = Setting::get('footer_fb', $this->footer_fb);
        $this->footer_yt = Setting::get('footer_yt', $this->footer_yt);
        $this->footer_ig = Setting::get('footer_ig', $this->footer_ig);
        $this->footer_li = Setting::get('footer_li', $this->footer_li);
        $this->footer_col1_title = Setting::get('footer_col1_title', $this->footer_col1_title);
        $this->footer_col2_title = Setting::get('footer_col2_title', $this->footer_col2_title);
        $this->footer_col3_title = Setting::get('footer_col3_title', $this->footer_col3_title);
        $this->footer_copyright = Setting::get('footer_copyright', $this->footer_copyright);
    }

    public function save()
    {
        Setting::set('footer_about', $this->footer_about);
        Setting::set('footer_fb', $this->footer_fb);
        Setting::set('footer_yt', $this->footer_yt);
        Setting::set('footer_ig', $this->footer_ig);
        Setting::set('footer_li', $this->footer_li);
        Setting::set('footer_col1_title', $this->footer_col1_title);
        Setting::set('footer_col2_title', $this->footer_col2_title);
        Setting::set('footer_col3_title', $this->footer_col3_title);
        Setting::set('footer_copyright', $this->footer_copyright);

        session()->flash('success', 'Đã lưu cấu hình Footer thành công!');
    }

    public function render()
    {
        return view('livewire.admin.footer-settings-form')
            ->layout('layouts.admin', ['title' => 'Cấu hình Footer']);
    }
}
