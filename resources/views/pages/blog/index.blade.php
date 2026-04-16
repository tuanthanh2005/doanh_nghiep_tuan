<div>
    <x-section-top title="Tin tức" />

    <section class="blog_area section-padding">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-6 offset-lg-3">
                    <input type="text" wire:model.live.debounce.400ms="search"
                        class="form-control" placeholder="Tìm kiếm bài viết...">
                </div>
            </div>
            <div class="row text-center">
                @forelse($posts as $post)
                <div class="col-lg-4 col-sm-6 wow fadeInUp">
                    <div class="home_single_blog">
                        <img src="{{ asset($post->image ?? 'assets/img/blog/1.jpg') }}" class="img-fluid" alt="{{ $post->title }}" />
                        <div class="home_blog_content">
                            <div class="blog_title_info">
                                <h2><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h2>
                                <span>{{ $post->published_at?->format('d/m/Y') }}</span>
                                <span>{{ $post->category }}</span>
                            </div>
                            <p>{{ $post->excerpt }}</p>
                            <a class="home_b_btn" href="{{ route('blog.show', $post->slug) }}">Xem thêm</a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12"><p>Không có bài viết nào.</p></div>
                @endforelse
            </div>
            <div class="row mt-4">
                <div class="col-12 d-flex justify-content-center">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </section>

    @include('components.partner-logos')
</div>
