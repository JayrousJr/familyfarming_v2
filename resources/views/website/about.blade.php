@include("website.includes.header")

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb"
    style=" background: linear-gradient(rgba(0, 18, 72, 0.7), rgba(0, 18, 72, 0.7)), url(/assets/img/about-3.jpg); background-position: center center;">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
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
                    <img src="/assets/img/about.jpg" class="img-1 img-fluid w-50" alt="">
                    <img src="/assets/img/about-3.jpg" class="img-2 img-fluid w-50" alt="">
                    <div class="about-item-image-content">
                        <img src="/assets/img/about-1.png" class="img-fluid w-100 h-100" style="object-fit: cover;"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.1s">
                <div class="about-item-content">
                    <p class="text-uppercase text-secondary fs-5 mb-0">WE PROVIDE QUALITY SERVICES</p>
                    <h2 class="display-4 text-capitalize mb-3">Making your vision come true at the basics.</h2>
                    <p class="mb-4 fs-5">Our company operates in three areas, Building and Construction, Transprtation
                        service and Agriculture activities. We have worked on many projects and we own big geographical
                        areas for Agricuture.
                    </p>
                    <div class="pb-4 mb-4 border-bottom">
                        <div class="row g-4">
                            <div class="col-lg-4">
                                <div class="about-item-content-img">
                                    <img src="/assets/img/about-2.jpg" class="img-fluid w-100" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="d-flex mb-4">
                                    <div class="text-secondary">
                                        <i class="fas fa-user-shield fa-3x"></i>
                                    </div>
                                    <h4 class="ms-3">Creating quality standards</h4>
                                </div>
                                <div class="d-flex">
                                    <div class="text-secondary">
                                        <i class="fas fa-users-cog fa-3x"></i>
                                    </div>
                                    <h4 class="ms-3">Certified engineer’s team</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gy-0 gx-4 justify-content-between pb-4">
                        <div class="col-lg-6">
                            <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> 100% Satisfaction</p>
                            <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> Trained Workers</p>
                        </div>
                        <div class="col-lg-6">
                            <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> Annual Pass Programs
                            </p>
                            <p class="text-dark mb-0"><i class="fas fa-check text-secondary me-1"></i> Flexible and cost
                                effective</p>
                        </div>
                    </div>
                    <a class="btn btn-secondary d-inline-block py-3 px-5 me-2 flex-shrink-0 wow fadeInUp"
                        data-wow-delay="0.1s" href="#">Discover More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Features Start -->
@include("website.includes.whyus")
<!-- Features End -->

<!-- Fact Counter -->
@include("website.includes.counter")
<!-- Fact Counter -->

<!-- Team Start -->
<div class="container-fluid team py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <p class="text-uppercase text-secondary fs-5 mb-0">Our Team</p>
            <h2 class="display-4 text-capitalize mb-3">Company Leadership</h2>
        </div>
        <div class="row g-4">
            @foreach ($user as $item)
            <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="team-item border border-primary p-1">

                    <div class="team-img">
                        <img src="storage/{{$item->profile_photo_path}}" class="img-fluid w-100" alt="">

                    </div>
                    <div class="text-center border border-top-0 bg-white py-3">
                        <h4 class="mb-0">{{$item->name}}</h4>
                        <p class="mb-0">{{$item->position}}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Team End -->

@include("website.includes.footer")