<div class="footer"
    style="background-image:url({{ asset(\App\Models\Setting::get('media_footer_bg', 'assets/img/bg/footer.png')) }});background-size:cover;">
    <div class="container">
        <div class="row footer_bg">
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="footer_logo">
                    <h3
                        style="font-family: 'Oswald', sans-serif; font-weight: 700; font-size: 2rem; margin-bottom: 20px; background: linear-gradient(45deg, #ff9a9e 0%, #fad0c4 99%, #fad0c4 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; text-transform: uppercase; letter-spacing: 2px; filter: drop-shadow(2px 2px 4px rgba(0,0,0,0.3)); display: inline-block;">
                        Tuấn Code Cloud
                    </h3>
                    <p>{{ \App\Models\Setting::get('footer_about', 'Thiết kế website chuẩn SEO, tối ưu trải nghiệm. Quản trị website ổn định, bảo mật. Ứng dụng AI tăng hiệu suất. Phát triển mạng xã hội chuyên nghiệp. Cung cấp tài khoản AI giá tốt, hỗ trợ 24/7. Dịch vụ MXH tối ưu quảng cáo, tăng doanh thu.') }}
                    </p>
                </div>
                <div class="social_profile">
                    <ul>
                        <li><a href="https://zalo.me/0708910952" target="_blank" class="f_facebook" title="Zalo"
                                style="display: flex !important; align-items: center; justify-content: center; text-decoration: none;"><i
                                    class="fa fa-whatsapp" style="font-size: 20px;"></i></a></li>
                        <li><a href="https://t.me/specademy" target="_blank" class="f_twitter" title="Telegram"
                                style="display: flex !important; align-items: center; justify-content: center; text-decoration: none;"><i
                                    class="fa fa-paper-plane" style="font-size: 20px;"></i></a></li>
                        <li><a href="mailto:devitvn00@gmail.com" class="f_instagram" title="Email"
                                style="display: flex !important; align-items: center; justify-content: center; text-decoration: none;"><i
                                    class="fa fa-envelope" style="font-size: 20px;"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="single_footer">
                    <h4>{{ \App\Models\Setting::get('footer_col1_title', 'Liên kết nhanh') }}</h4>
                    <ul>
                        <li><a href="{{ route('about') }}">Giới thiệu</a></li>
                        <li><a href="{{ route('services.index') }}">Dịch vụ</a></li>
                        <li><a href="{{ route('portfolio.index') }}">Dự án</a></li>
                        <li><a href="{{ route('blog.index') }}">Tin tức</a></li>
                        <li><a href="{{ route('contact.index') }}">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="single_footer">
                    <h4>{{ \App\Models\Setting::get('footer_col2_title', 'Công ty') }}</h4>
                    <ul>
                        <li><a href="{{ route('faq.index') }}">FAQ</a></li>
                        <li><a href="{{ route('pricing.index') }}">Bảng giá</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="newsletter-form">
                    <h4>{{ \App\Models\Setting::get('footer_col3_title', 'Đăng ký nhận tin') }}</h4>
                    @livewire('forms.newsletter-form')
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="footer_copyright">
                    <p>&copy; {{ date('Y') }}
                        {{ \App\Models\Setting::get('footer_copyright', 'Tuấn Code Cloud. Bảo lưu mọi quyền.') }}
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>