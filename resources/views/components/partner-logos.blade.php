<div class="partner-logo section-padding">
    <div class="container">
        <div class="row text-center">
            @php $partners = \App\Models\Partner::where('is_active', true)->orderBy('order')->get(); @endphp
            @foreach($partners as $index => $partner)
            <div class="col-lg-2 col-sm-4 col-xs-12 no-padding wow fadeInUp">
                <div class="single_logo {{ $index % 2 !== 0 ? 'single_logo_bm' : '' }}">
                    <a href="#"><img src="{{ asset($partner->image) }}" alt="{{ $partner->name }}" class="img-fluid"/></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
