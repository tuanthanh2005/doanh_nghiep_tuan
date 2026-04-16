<div>
    <x-section-top :title="$project->title" />

    <section class="portfolio_project_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single_project">
                        <img src="{{ asset($project->image ?? 'assets/img/portfolio/1.jpg') }}" class="img-fluid" alt="{{ $project->title }}" />
                        <h2>{{ $project->title }}</h2>
                        <p>{{ $project->description }}</p>
                        <a class="btn_one" href="{{ route('portfolio.index') }}">Quay lại dự án</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
