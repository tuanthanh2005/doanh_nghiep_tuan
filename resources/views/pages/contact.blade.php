<div>
    <x-section-top title="Liên hệ" />

    <section class="address_area section-padding">
        <div class="container">
            <div class="row items-center">
                <div class="col-lg-4 col-sm-6 text-center mb-4 wow fadeInUp">
                    <div class="single_address card border-0 shadow-sm p-4 rounded-4 h-100">
                        <div class="icon-circle bg-success text-white mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; border-radius: 50%;">
                            <i class="ti ti-brand-whatsapp fs-2"></i>
                        </div>
                        <h4 class="fw-bold">Liên hệ Zalo</h4>
                        <p class="text-muted">Hỗ trợ nhanh chóng qua Zalo</p>
                        <a href="https://zalo.me/0708910952" target="_blank" class="btn btn-success rounded-pill px-4">
                            Kết nối ngay
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center mb-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="single_address card border-0 shadow-sm p-4 rounded-4 h-100">
                        <div class="icon-circle bg-info text-white mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; border-radius: 50%;">
                            <i class="ti ti-brand-telegram fs-2"></i>
                        </div>
                        <h4 class="fw-bold">Telegram</h4>
                        <p class="text-muted">Chat với chúng tôi qua Telegram</p>
                        <a href="https://t.me/specademy" target="_blank" class="btn btn-info text-white rounded-pill px-4">
                            @specademy
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center mb-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="single_address card border-0 shadow-sm p-4 rounded-4 h-100">
                        <div class="icon-circle bg-primary text-white mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; border-radius: 50%;">
                            <i class="ti ti-mail fs-2"></i>
                        </div>
                        <h4 class="fw-bold">Email</h4>
                        <p class="text-muted">Gửi yêu cầu qua hòm thư</p>
                        <a href="mailto:devitvn00@gmail.com" class="text-decoration-none fw-semibold text-primary">
                            Gửi Email <i class="ti ti-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="map px-lg-5 py-4">
        <div class="rounded-4 overflow-hidden shadow-sm">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125413.56580974636!2d106.602264!3d10.797204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529292e8d3dd1%3A0xf11f5ad7491ac79d!2zVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1713222000000!5m2!1svi!2s"
                style="border:0;width:100%;height:450px;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>

    <div id="contact" class="contact_area section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="section-title-white">Liên hệ với chúng tôi</h2>
            </div>
            <div class="row">
                <div class="offset-lg-1 col-lg-10 text-center wow fadeInUp">
                    @livewire('forms.contact-form')
                </div>
            </div>
        </div>
    </div>

    @include('components.partner-logos')
</div>
