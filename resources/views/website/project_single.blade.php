@include("website.includes.header")


<!-- Header Start -->
<div class="container-fluid bg-breadcrumb" style=" background: linear-gradient(rgba(0, 18, 72, 0.7), rgba(0, 18, 72, 0.7)), url(/storage/{{ $project->image }}); 
    background-position: center center;
        ">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{ $project->name }}</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Projects</a></li>
            <li class="breadcrumb-item active text-secondary">About</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="about-item-image d-flex">
                    <img src="/storage/{{ $project->image }}" class="img-1 img-fluid w-50" alt="">
                    <div class="about-item-image-content">
                        <img src="/storage/{{ $project->image }}" class="img-fluid w-100 h-100"
                            style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.1s">
                <div class="about-item-content">
                    <p class="text-uppercase text-secondary fs-5 mb-0">{{ $project->name }} </p>
                    {{-- <h2 class="display-4 text-capitalize mb-3">Making your vision come true.</h2> --}}
                    <p class="mb-4 fs-5">{!! $project->description !!}
                    </p>

                    <div class="row gy-0 gx-4 justify-content-between pb-4">
                        <div class="col-lg-6">
                            <p class="text-dark">Project Status: {{ $project->status }}</p>
                            <p class="text-dark">Location: {{ $project->location }}</p>
                            {{-- <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> Trained Employees</p> --}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

@include("website.includes.whyus")
@include("website.includes.counter")




@include("website.includes.footer")