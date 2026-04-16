<div>
    <x-section-top title="Sản phẩm AI giá rẻ" />

    <section class="service_area section-padding">
        <div class="container">
            <div class="row">
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp">
                        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden"
                            style="transition: transform .3s">
                            <div class="p-4 text-center position-relative">
                                @if($service->badge)
                                    <span
                                        class="position-absolute top-0 end-0 bg-danger text-white px-3 py-1 m-3 rounded-pill small fw-bold">{{ $service->badge }}</span>
                                @endif
                                <div class="mb-3">
                                    <img src="{{ asset('assets/img/icon/' . str_replace('.png', '', $service->icon) . '.png') }}"
                                        alt="{{ $service->title }}" class="img-fluid"
                                        style="height: 64px; object-fit: contain;">
                                </div>
                                <h4 class="fw-bold mb-3">{{ $service->title }}</h4>
                                <div class="mb-3">
                                    @if($service->sale_price)
                                        <span class="fs-4 fw-bold text-danger">{{ number_format($service->sale_price) }}đ</span>
                                        <del class="text-muted ms-2 small">{{ number_format($service->price) }}đ</del>
                                    @elseif($service->price)
                                        <span class="fs-4 fw-bold text-primary">{{ number_format($service->price) }}đ</span>
                                    @else
                                        <span class="fs-4 fw-bold text-muted">Liên hệ</span>
                                    @endif
                                </div>
                                <div class="text-muted small mb-4"
                                    style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                                    {!! $service->description !!}
                                </div>
                                <div class="d-grid gap-2">
                                    <a class="btn btn-primary rounded-pill py-2 fw-semibold"
                                        href="{{ route('services.show', $service->slug) }}">Chi tiết</a>
                                    <a class="btn btn-outline-success rounded-pill py-2 fw-semibold"
                                        href="https://zalo.me/0123456789" target="_blank">
                                        Mua ngay <i class="ti ti-brand-whatsapp ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="pricing-table-area section-padding"
        style="background-image:url({{ asset(\App\Models\Setting::get('media_pricing_bg', 'assets/img/bg/pricing-bg.jpg')) }});background-size:cover;">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="section-title-white">Bảng giá Website</h2>
            </div>
            <div class="row">
                @foreach($plans as $plan)
                    <div class="col-lg-4 col-sm-6 wow fadeInUp">
                        <div class="pricingTable blue">
                            <div class="pricingTable-header">
                                <div class="price-value">
                                    <span class="amount">{{ number_format($plan->price, 0, ',', '.') }}</span>
                                    <span class="currency">đ</span>
                                    <span class="duration">{{ $plan->duration }}</span>
                                </div>
                            </div>
                            <div class="pricing-content">
                                <h3 class="title">{{ $plan->name }}</h3>
                                <ul>
                                    @foreach($plan->features as $feature)
                                        <li>{{ $feature }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="pricingTable-signup">
                                <a href="{{ route('contact.index') }}">Đặt hàng ngay</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @include('components.partner-logos')
</div>