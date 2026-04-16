<div>
    <x-section-top title="Về Chúng Tôi" />

    <style>
        .tech-about-area {
            background-color: #f8f9fa;
            color: #495057;
            padding: 80px 0;
            position: relative;
        }
        .tech-about-content {
            position: relative;
            z-index: 2;
        }
        .tech-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: #333;
            margin-bottom: 20px;
        }
        .tech-card {
            background: #ffffff;
            border: 1px solid #e9ecef;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.03);
            transition: all 0.3s ease;
            height: 100%;
        }
        .tech-card:hover {
            transform: translateY(-5px);
            border-color: #0d6efd;
            box-shadow: 0 10px 30px rgba(13,110,253,0.1);
        }
        .tech-icon {
            font-size: 2.5rem;
            color: #0d6efd;
            margin-bottom: 20px;
        }
        .code-block {
            background: #ffffff;
            border-radius: 8px;
            padding: 20px;
            font-family: 'Courier New', Courier, monospace;
            color: #333;
            font-size: 0.9rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            border-left: 4px solid #0d6efd;
            border-top: 1px solid #e9ecef; border-right: 1px solid #e9ecef; border-bottom: 1px solid #e9ecef;
        }
        .code-keyword { color: #0000ff; font-weight: bold; }
        .code-string { color: #a31515; }
        .code-func { color: #795e26; }

        .team_area { background: #f8f9fa; }
        .process_area { background: #ffffff; }
    </style>

    <section class="tech-about-area">
        <div class="container tech-about-content">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 wow fadeInLeft">
                    <h2 class="tech-title">Định hình Tương lai Digital</h2>
                    <p class="lead mb-4 text-secondary">Chúng tôi là agency công nghệ cung cấp nền tảng và dịch vụ toàn diện giúp doanh nghiệp của bạn bứt phá trên môi trường số.</p>
                    <p>Với định hướng áp dụng những công nghệ hiện đại nhất vào tiếp thị kỹ thuật số, chúng tôi không chỉ tạo ra các chiến dịch thông thường mà là các hệ thống sinh ra chuyển đổi thực. Đội ngũ chuyên gia luôn sẵn sàng biến các bài toán kinh doanh thành giải pháp tiếp thị đột phá bằng bộ 6 công cụ cốt lõi.</p>
                    
                    <div class="row mt-5">
                        <div class="col-sm-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="ti ti-chart-line fs-2 text-primary me-3"></i>
                                <div>
                                    <h5 class="mb-0 text-dark">Dữ liệu làm trọng tâm</h5>
                                    <small class="text-muted">Chiến lược đo lường rõ ràng</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="ti ti-target fs-2 text-primary me-3"></i>
                                <div>
                                    <h5 class="mb-0 text-dark">Tối ưu chuyển đổi</h5>
                                    <small class="text-muted">Lead Generation thông minh</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="ti ti-world fs-2 text-primary me-3"></i>
                                <div>
                                    <h5 class="mb-0 text-dark">Xây dựng thương hiệu</h5>
                                    <small class="text-muted">Mạng xã hội và độ phủ sóng</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="ti ti-code fs-2 text-primary me-3"></i>
                                <div>
                                    <h5 class="mb-0 text-dark">Nền tảng vững chắc</h5>
                                    <small class="text-muted">Web Design UI/UX mượt mà</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 wow fadeInRight mt-4 mt-lg-0">
                    <div class="code-block">
                        <div><span class="code-keyword">class</span> MarTech <span class="code-keyword">implements</span> GrowthEngine {</div>
                        <div class="ms-4"><span class="code-keyword">private</span> $channels = [<span class="code-string">"Email"</span>, <span class="code-string">"Social"</span>, <span class="code-string">"Web"</span>, <span class="code-string">"SEO"</span>];</div>
                        <div class="ms-4 mt-2"><span class="code-keyword">public function</span> <span class="code-func">launchCampaign</span>() {</div>
                        <div class="ms-5"><span class="code-keyword">while</span> ($this->leads < $target) {</div>
                        <div class="ms-5 ps-3">WebDesign::createLandingPage();</div>
                        <div class="ms-5 ps-3">SEO::rankKeywords(<span class="code-string">"Global & Local"</span>);</div>
                        <div class="ms-5 ps-3">SocialMedia::distributeContent();</div>
                        <div class="ms-5 ps-3">EmailMarketing::nurtureLeads();</div>
                        <div class="ms-5">}</div>
                        <div class="ms-5"><span class="code-keyword">return</span> Revenue::maximize();</div>
                        <div class="ms-4">}</div>
                        <div>}</div>
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-5 text-center border-top">
                <div class="section-title text-center col-lg-12">
                    <h2>6 Trụ Cột Dịch Vụ Của Chúng Tôi</h2>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="tech-card">
                        <i class="ti ti-browser tech-icon"></i>
                        <h4 class="text-dark mb-3">Web Design</h4>
                        <p class="text-muted mb-0">Thiết kế website với kiến trúc hiện đại, chuẩn UI/UX, tối ưu hóa tốc độ tải và thân thiện với mọi thiết bị di động.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="tech-card">
                        <i class="ti ti-search tech-icon"></i>
                        <h4 class="text-dark mb-3">SEO</h4>
                        <p class="text-muted mb-0">Áp dụng thuật toán kỹ thuật số để tối ưu hóa công cụ tìm kiếm, đưa thương hiệu của bạn bền vững ở TOP 1.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="tech-card">
                        <i class="ti ti-map-pin tech-icon"></i>
                        <h4 class="text-dark mb-3">Offline SEO</h4>
                        <p class="text-muted mb-0">Tối ưu Local SEO, Google My Business để phủ sóng toàn diện khu vực và thu hút khách hàng địa phương thực tế.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="tech-card">
                        <i class="ti ti-mail-forward tech-icon"></i>
                        <h4 class="text-dark mb-3">Email Marketing</h4>
                        <p class="text-muted mb-0">Triển khai hệ thống gửi mail tự động hóa để chăm sóc khách hàng và marketing lại (Remarketing) đầy hiệu quả.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="tech-card">
                        <i class="ti ti-thumb-up tech-icon"></i>
                        <h4 class="text-dark mb-3">Social Media Marketing</h4>
                        <p class="text-muted mb-0">Xây dựng ma trận truyền thông đa kênh mạng xã hội, tương tác mạnh mẽ và tạo dựng cộng đồng trung thành.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="tech-card">
                        <i class="ti ti-magnet tech-icon"></i>
                        <h4 class="text-dark mb-3">Lead Generation</h4>
                        <p class="text-muted mb-0">Thiết lập phễu thu thập dữ liệu tự động giúp thu hút lượng lớn khách hàng tiềm năng chất lượng cao mỗi ngày.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="process_area section-padding bg-white">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h2 class="fw-bold">Quy Trình Triển Khai Tinh Gọn</h2>
                <p class="text-muted">Phương pháp tiếp cận dựa trên dữ liệu giúp tối đa hóa hiệu quả cho từng chiến dịch dự án</p>
            </div>
            <div class="row position-relative">
                <!-- Timeline Line (Visible on md+) -->
                <div class="col-12 d-none d-md-block" style="position: absolute; top: 25px; left: 0; width: 100%; height: 2px; background: #e9ecef; z-index: 1;"></div>
                
                <div class="col-md-3 col-sm-6 text-center mb-4 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 2;">
                    <div style="width: 50px; height: 50px; background: #0d6efd; color: white; border-radius: 50%; line-height: 50px; font-size: 20px; font-weight: bold; margin: 0 auto 20px; border: 4px solid #fff; box-shadow: 0 0 0 2px #0d6efd;">1</div>
                    <h5 class="fw-bold mb-2">Phân Tích Bối Cảnh</h5>
                    <p class="text-muted small">Nghiên cứu thị trường mục tiêu, đối thủ cạnh tranh và kiểm toán (Audit) nền tảng số hiện tại của bạn.</p>
                </div>
                
                <div class="col-md-3 col-sm-6 text-center mb-4 wow fadeInUp" data-wow-delay="0.2s" style="z-index: 2;">
                    <div style="width: 50px; height: 50px; background: #00d2ff; color: white; border-radius: 50%; line-height: 50px; font-size: 20px; font-weight: bold; margin: 0 auto 20px; border: 4px solid #fff; box-shadow: 0 0 0 2px #00d2ff;">2</div>
                    <h5 class="fw-bold mb-2">Lên Chiến Lược</h5>
                    <p class="text-muted small">Thiết lập lộ trình với các kênh hiệu quả (SEO, Social, Email) để tiếp cận đúng phễu khách hàng mục tiêu.</p>
                </div>
                
                <div class="col-md-3 col-sm-6 text-center mb-4 wow fadeInUp" data-wow-delay="0.3s" style="z-index: 2;">
                    <div style="width: 50px; height: 50px; background: #0d6efd; color: white; border-radius: 50%; line-height: 50px; font-size: 20px; font-weight: bold; margin: 0 auto 20px; border: 4px solid #fff; box-shadow: 0 0 0 2px #0d6efd;">3</div>
                    <h5 class="fw-bold mb-2">Thực Thi Chiến Dịch</h5>
                    <p class="text-muted small">Sản xuất nội dung, tinh chỉnh kỹ thuật Web & Local, chạy tự động hóa quá trình thu thập Lead.</p>
                </div>
                
                <div class="col-md-3 col-sm-6 text-center mb-4 wow fadeInUp" data-wow-delay="0.4s" style="z-index: 2;">
                    <div style="width: 50px; height: 50px; background: #00d2ff; color: white; border-radius: 50%; line-height: 50px; font-size: 20px; font-weight: bold; margin: 0 auto 20px; border: 4px solid #fff; box-shadow: 0 0 0 2px #00d2ff;">4</div>
                    <h5 class="fw-bold mb-2">Đo Lường & Tối Ưu</h5>
                    <p class="text-muted small">Theo dõi Analytics liên tục (A/B testing) để cải thiện tỉ lệ chuyển đổi ROI nhanh chóng nhất.</p>
                </div>
            </div>
        </div>
    </section>

    <div id="vision-mission" class="section-padding" style="background: url('{{ asset(\App\Models\Setting::get('media_about_vision_bg', 'assets/img/bg/slider_bg.jpg')) }}') center/cover no-repeat; position: relative; color: white;">
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(11, 15, 25, 0.9);"></div>
        <div class="container" style="position: relative; z-index: 2;">
            <div class="row text-center mb-5">
                <div class="col-12 wow fadeInUp">
                    <h2 class="display-5 fw-bold text-white mb-3">Sứ Mệnh & Tầm Nhìn</h2>
                    <p class="lead text-light" style="max-width: 700px; margin: 0 auto;">Khát vọng của chúng tôi là kiến tạo nên chuẩn mực mới trong lĩnh vực tiếp thị kỹ thuật số và công nghệ phân tích dữ liệu.</p>
                </div>
            </div>
            
            <div class="row align-items-center mt-5">
                <div class="col-md-6 mb-4 wow fadeInLeft">
                    <div class="p-4 tech-card" style="background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(13, 110, 253, 0.3); border-radius: 12px; height: 100%;">
                        <div class="d-flex align-items-center mb-3">
                            <i class="ti ti-rocket text-primary fs-1 me-3"></i>
                            <h3 class="text-white mb-0">Sứ mệnh</h3>
                        </div>
                        <p class="text-light" style="opacity: 0.9;">Đồng hành cùng doanh nghiệp bứt phá doanh thu thực tế thông qua việc xây dựng chiến lược MarTech tự động hóa, thiết kế Web hiện đại và tối ưu hóa SEO bền vững. Chúng tôi chuyển hóa dữ liệu (Data) khô khan thành thành quả kinh doanh.</p>
                    </div>
                </div>
                
                <div class="col-md-6 mb-4 wow fadeInRight">
                    <div class="p-4 tech-card" style="background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(0, 210, 255, 0.3); border-radius: 12px; height: 100%;">
                        <div class="d-flex align-items-center mb-3">
                            <i class="ti ti-eye text-info fs-1 me-3"></i>
                            <h3 class="text-white mb-0">Tầm nhìn 2030</h3>
                        </div>
                        <p class="text-light" style="opacity: 0.9;">Trở thành Top Agency Công nghệ Tiếp thị (Tech-Marketing) hàng đầu, nơi cung cấp những chuẩn mực cao cấp nhất về UI/UX và thuật toán tìm kiếm. Số hóa +10.000 doanh nghiệp vừa và nhỏ vươn tầm ra biển lớn.</p>
                    </div>
                </div>
            </div>

            <div class="row text-center mt-5 pt-4">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.2s">
                    <h3 class="text-white mb-4">Bạn đã sẵn sàng để trở thành người dẫn đầu ngành?</h3>
                    <a href="{{ route('services.index') }}" class="btn btn-primary px-5 py-3 fw-bold rounded-pill me-3 shadow-lg" style="letter-spacing: 0.5px;">Khám Phá Dịch Vụ Của Chúng Tôi</a>
                    <a href="{{ route('contact.index') }}" class="btn btn-outline-light px-5 py-3 fw-bold rounded-pill" style="letter-spacing: 0.5px;">Liên Hệ Nhận Tư Vấn Độc Quyền</a>
                </div>
            </div>
        </div>
    </div>

    @include('components.partner-logos')
</div>
