@include("website.includes.header")

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb"
    style=" background: linear-gradient(rgba(0, 18, 72, 0.7), rgba(0, 18, 72, 0.7)), url(/assets/img/about-3.jpg); background-position: center center;">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Projects</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-secondary">Project</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Projects Start -->
<div class="container-fluid project py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <p class="text-uppercase text-secondary fs-5 mb-0">Our Projects</p>
            <h2 class="display-4 text-capitalize mb-3">Recent Completed Projects</h2>
        </div>
        <div class="row g-5">
            @foreach ($project as $item)

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="{{ $item->id * 0.2 }}s">
                <div class="project-item">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="project-img">
                                <img src="/storage/{{ $item->image }}" class="img-fluid w-100 pt-3 ps-3" alt="">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="project-content mb-4">
                                <p class="fs-5 text-secondary mb-2">{{ $item->name }}</p>
                                <a href="#" class="h4">{{ $item->name }}</a>
                                <p class="mb-0 mt-3">{!!
                                    \Illuminate\Support\Str::limit(strip_tags($item->description), 100) !!}</p>
                            </div>
                            <a class="btn btn-primary py-2 px-4" href="{{ route('ps', $item->id)}}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Projects End -->

@include("website.includes.footer")