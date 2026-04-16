<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Setting;

class SettingsForm extends Component
{
    public string $hero_title = 'Dịch vụ thiết kế website chuyên nghiệp';
    public string $hero_subtitle = 'Uy tín - Chất lượng - Giá cả hợp lý';

    public string $home_service_title = 'Our Services';
    public string $home_service_subtitle = 'Khám phá các giải pháp công nghệ tiếp thị mạnh mẽ giúp doanh nghiệp của bạn vượt qua giới hạn và dẫn đầu thị trường.';

    public string $counter1_num = '32652';
    public string $counter1_label = 'Khách hàng hài lòng';
    public string $counter2_num = '21821';
    public string $counter2_label = 'Dự án hoàn thành';
    public string $counter3_num = '5660';
    public string $counter3_label = 'Năm hoạt động';
    public string $counter4_num = '11859';
    public string $counter4_label = 'Hỗ trợ khách hàng';

    public function mount()
    {
        $this->hero_title = Setting::get('hero_title', $this->hero_title);
        $this->hero_subtitle = Setting::get('hero_subtitle', $this->hero_subtitle);

        $this->home_service_title = Setting::get('home_service_title', $this->home_service_title);
        $this->home_service_subtitle = Setting::get('home_service_subtitle', $this->home_service_subtitle);

        $this->counter1_num = Setting::get('counter1_num', $this->counter1_num);
        $this->counter1_label = Setting::get('counter1_label', $this->counter1_label);
        $this->counter2_num = Setting::get('counter2_num', $this->counter2_num);
        $this->counter2_label = Setting::get('counter2_label', $this->counter2_label);
        $this->counter3_num = Setting::get('counter3_num', $this->counter3_num);
        $this->counter3_label = Setting::get('counter3_label', $this->counter3_label);
        $this->counter4_num = Setting::get('counter4_num', $this->counter4_num);
        $this->counter4_label = Setting::get('counter4_label', $this->counter4_label);
    }

    public function save()
    {
        Setting::set('hero_title', $this->hero_title);
        Setting::set('hero_subtitle', $this->hero_subtitle);

        Setting::set('home_service_title', $this->home_service_title);
        Setting::set('home_service_subtitle', $this->home_service_subtitle);

        Setting::set('counter1_num', $this->counter1_num);
        Setting::set('counter1_label', $this->counter1_label);
        Setting::set('counter2_num', $this->counter2_num);
        Setting::set('counter2_label', $this->counter2_label);
        Setting::set('counter3_num', $this->counter3_num);
        Setting::set('counter3_label', $this->counter3_label);
        Setting::set('counter4_num', $this->counter4_num);
        Setting::set('counter4_label', $this->counter4_label);

        session()->flash('success', 'Đã lưu cấu hình thành công!');
    }

    public function render()
    {
        return view('livewire.admin.settings-form')
            ->layout('layouts.admin', ['title' => 'Cấu hình trang chủ']);
    }
}
