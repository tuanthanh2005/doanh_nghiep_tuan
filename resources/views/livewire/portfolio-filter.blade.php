<div>
    {{-- Filter Tabs --}}
    <div class="col-lg-12 text-center">
        <div class="portfolio_filter">
            <ul>
                @foreach($this->categories as $key => $label)
                    <li class="filter {{ $activeCategory === $key ? 'active' : '' }}"
                        wire:click="filterBy('{{ $key }}')"
                        style="cursor:pointer">
                        {{ $label }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    {{-- Portfolio Grid --}}
    <div class="portfolio-grid">
        <div class="row">
            @foreach($portfolios as $item)
                <div class="col-lg-4 col-sm-6 col-xs-12 portfolio-item">
                    <div class="single-gallery">
                        <img src="{{ asset($item->image ?? 'assets/img/portfolio/1.jpg') }}" class="img-fluid" alt="{{ $item->title }}">
                        <a href="{{ asset($item->image ?? 'assets/img/portfolio/1.jpg') }}" class="gallery_enlarge_icon">
                            <i class="ti-eye"></i>
                        </a>
                        <h4><a href="{{ route('portfolio.show', $item->slug) }}">Xem chi tiết</a></h4>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
