<div>
    <x-section-top :title="$service->title" />

    <section class="single_service_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center wow fadeInUp">
                    <img src="{{ asset('assets/img/icon/' . str_replace('.png', '', $service->icon) . '.png') }}" alt="{{ $service->title }}" class="mb-4" style="height: 100px;" />
                    <h2 class="fw-bold mb-3">{{ $service->title }}</h2>
                    
                    <div class="mb-4">
                        @if($service->sale_price)
                            <span class="fs-2 fw-bold text-danger">{{ number_format($service->sale_price) }}đ</span>
                            <del class="text-muted ms-3 fs-5">{{ number_format($service->price) }}đ</del>
                        @elseif($service->price)
                            <span class="fs-2 fw-bold text-primary">{{ number_format($service->price) }}đ</span>
                        @else
                            <span class="fs-2 fw-bold text-muted">Liên hệ báo giá</span>
                        @endif
                    </div>

                    <div class="description-content text-start p-4 bg-light rounded-4 mb-4">
                        {!! $service->description !!}
                    </div>
                    
                    <a class="btn btn-primary rounded-pill px-5 py-3 fw-bold fs-5" href="https://zalo.me/0123456789" target="_blank">
                        MUA NGAY <i class="ti ti-brand-whatsapp ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    @include('components.partner-logos')
</div>
