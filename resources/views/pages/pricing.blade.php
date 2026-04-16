<div>
    <x-section-top title="Bảng giá" />

    <div class="pricing_page section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h2>Gói dịch vụ Website</h2>
            </div>
            <div class="row">
                @foreach($plans as $plan)
                    <div class="col-lg-4 col-sm-6 wow fadeInUp">
                        <div class="pricingTable blue {{ $plan->is_featured ? 'featured' : '' }}">
                            <div class="pricingTable-header">
                                <div class="price-value">
                                    <span class="currency">$</span>
                                    <span class="amount">{{ $plan->price }}</span>
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
                                <a href="{{ route('contact.index') }}">Đăng ký ngay</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @include('components.partner-logos')
</div>