@props(['title'])
<section class="section-top" style="background-image:url({{ asset(\App\Models\Setting::get('media_breadcrumb_bg', 'assets/img/bg/section-top.png')) }});background-size:cover;background-position:center center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-top-title">
                    <h1>{{ $title }}</h1>
                </div>
            </div>
        </div>
    </div>
</section>
