<div>
    <x-section-top :title="$post->title" />

    <section class="blog_single_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="single_blog_content">
                        <img src="{{ asset($post->image ?? 'assets/img/blog/1.jpg') }}" class="img-fluid mb-4" alt="{{ $post->title }}" />
                        <div class="blog_meta mb-3">
                            <span>{{ $post->published_at?->format('d/m/Y') }}</span> |
                            <span>{{ $post->category }}</span> |
                            <span>{{ $post->author }}</span>
                        </div>
                        <h2>{{ $post->title }}</h2>
                        <div>{!! nl2br(e($post->content)) !!}</div>
                    </div>

                    @if($related->count())
                    <div class="related_posts mt-5">
                        <h3>Bài viết liên quan</h3>
                        <div class="row">
                            @foreach($related as $r)
                            <div class="col-lg-4">
                                <h5><a href="{{ route('blog.show', $r->slug) }}">{{ $r->title }}</a></h5>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    @include('components.partner-logos')
</div>
