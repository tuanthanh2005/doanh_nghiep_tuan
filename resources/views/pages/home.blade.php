<div>
    {{-- HOME --}}
    <section data-stellar-background-ratio="0.3" id="home" class="home_bg"
        style="background-image:url({{ asset(\App\Models\Setting::get('media_hero_bg', 'assets/img/bg/home-bg.jpg')) }});background-size:cover;background-position:center center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="hero-text">
                        <h2>{{ \App\Models\Setting::get('hero_title', 'Sản phẩm AI giá rẻ nhất thị trường') }}</h2>
                        <p>{{ \App\Models\Setting::get('hero_subtitle', 'Tài khoản ChatGPT, Midjourney, Canva và nhiều hơn thế nữa') }}</p>
                        <a href="{{ route('about') }}">Tìm hiểu thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FEATURES --}}
    <section class="feature_area">
        <div class="container">
            <div class="row feature_bg">
                <div class="section-title text-center">
                    <h2>{{ \App\Models\Setting::get('home_service_title', 'Sản phẩm AI phổ biến') }}</h2>
                    <p>{{ \App\Models\Setting::get('home_service_subtitle', 'Nâng cao hiệu suất công việc với các công cụ AI mạnh mẽ nhất hiện nay.') }}</p>
                </div>
                @foreach($services as $service)
                <div class="col-lg-4 col-sm-6 col-xs-12 no-padding wow fadeInUp">
                    <div class="single_feature text-center">
                        <img src="{{ asset('assets/img/icon/' . str_replace('.png', '', $service->icon) . '.png') }}" alt="{{ $service->title }}" style="height: 60px; object-fit: contain;"/>
                        <h4 class="mt-3">{{ $service->title }}</h4>
                        <div class="mb-2">
                            @if($service->sale_price)
                                <b class="text-danger">{{ number_format($service->sale_price) }}đ</b>
                            @elseif($service->price)
                                <b class="text-primary">{{ number_format($service->price) }}đ</b>
                            @else
                                <span class="text-muted small">Liên hệ</span>
                            @endif
                        </div>
                        <p>{{ \Str::limit(strip_tags($service->description), 80) }}</p>
                        <a href="{{ route('services.show', $service->slug) }}" class="btn btn-sm btn-outline-primary rounded-pill px-3">Chi tiết</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- COUNTER --}}
    <section data-stellar-background-ratio="0.3" class="counter_feature section-padding">
        <div class="container">
            <div class="row text-center">
                @foreach([
                    ['counter-1', \App\Models\Setting::get('counter1_num', '32652'), \App\Models\Setting::get('counter1_label', 'Khách hàng hài lòng')], 
                    ['counter-2', \App\Models\Setting::get('counter2_num', '21821'), \App\Models\Setting::get('counter2_label', 'Dự án hoàn thành')], 
                    ['counter-3', \App\Models\Setting::get('counter3_num', '5660'), \App\Models\Setting::get('counter3_label', 'Năm hoạt động')], 
                    ['counter-4', \App\Models\Setting::get('counter4_num', '11859'), \App\Models\Setting::get('counter4_label', 'Hỗ trợ khách hàng')]
                ] as [$img, $num, $label])
                    <div class="col-lg-3 col-sm-6 col-xs-12 no-padding wow fadeInUp">
                        <div class="single-project">
                            <img src="{{ asset('assets/img/icon/' . $img . '.png') }}" alt="{{ $label }}" />
                            <h2 class="counter-num">{{ $num }}</h2>
                            <h4>{{ $label }}</h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- PORTFOLIO FILTER --}}
    <section id="portfolio" class="portfolio_area section-padding">
        <div class="container-fluid">
            <div class="section-title text-center">
                <h2>Dự án tiêu biểu</h2>
                <p>Một số dự án tiêu biểu của chúng tôi</p>
            </div>
            @livewire('portfolio-filter')
        </div>
    </section>

    {{-- TESTIMONIALS --}}
    <div class="testimonial_area section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h2>Đánh giá từ khách hàng</h2>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row">
                        @foreach($testimonials as $t)
                            <div class="col-lg-6 col-sm-12 wow fadeInUp">

                                                                       <div class="single_testimonial">
                                    <div class="testimonial_img">
                                        <img src="{{ asset('assets/img/testimonial/' . $loop->iteration . '.jpg') }}" alt="{{ $t->name }}" />
                                    </div>
                                    <p>{{ $t->content }}</p>
                                    <h4>{{ $t->name }}</h4>
                                    <h5>{{ $t->position }}, {{ $t->company }}</h5>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- LATEST BLOG --}}
    <section class="blog_area section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h2>Bài viết mới nhất</h2>
            </div>
            <div class="row text-center">
                @foreach($latestPosts as $post)

                               <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp">
                        <div class="home_single_blog">
                            <img src="{{ asset('assets/img/blog/' . $loop->iteration . '.jpg') }}" class="img-fluid" alt="{{ $post->title }}" />
                            <div class="home_blog_content">
                                <div class="blog_title_info">
                                    <h2><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h2>
                                    <span>{{ $post->published_at?->format('d/m/Y') }}</span>
                                    <span><a href="{{ route('blog.index') }}">{{ $post->category }}</a></span>
                                </div>
                                <p>{{ $post->excerpt }}</p>
                                <a class="home_b_btn" href="{{ route('blog.show', $post->slug) }}">Xem Thêm</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CONTACT FORM --}}
    <div id="contact" class="contact_area section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="section-title-white">Xin chào, hãy tạo nên sự khác biệt ngay hôm nay</h2>
            </div>
            <div class="row">
                <div class="offset-lg-1 col-lg-10 col-sm-12 text-center wow fadeInUp">
                    @livewire('forms.contact-form')
                </div>
            </div>
        </div>
    </div>

    {{-- PARTNER LOGOS --}}
    @include('components.partner-logos')
</div>
