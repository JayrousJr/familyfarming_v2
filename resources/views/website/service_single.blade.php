@include("website.includes.header")


<!-- Header Start -->
<div class="container-fluid bg-breadcrumb"
    style=" background: linear-gradient(rgba(0, 18, 72, 0.7), rgba(0, 18, 72, 0.7)), url(/storage/{{ $service_single->image }}); background-position: center center;">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{ $service_single->name }}</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Services</a></li>
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
                    <img src="/storage/{{ $service_single->image }}" class="img-1 img-fluid w-50" alt="">
                    <div class="about-item-image-content">
                        <img src="/storage/{{ $service_single->image }}" class="img-fluid w-100 h-100"
                            style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.1s">
                <div class="about-item-content">
                    <p class="text-uppercase text-secondary fs-5 mb-0">WE ARE {{ $service_single->name }} COMPANY</p>
                    {{-- <h2 class="display-4 text-capitalize mb-3">Making your vision come true.</h2> --}}
                    <p class="mb-4 fs-5">{!! $service_single->description !!}
                    </p>

                    <div class="row gy-0 gx-4 justify-content-between pb-4">
                        <div class="col-lg-6">
                            <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> 100% Satisfaction</p>
                            <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> Trained Employees</p>
                        </div>
                        <div class="col-lg-6">
                            <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> Best Quality</p>
                            <p class="text-dark mb-0"><i class="fas fa-check text-secondary me-1"></i> Flexible and cost
                                effective</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Features Start -->
<div class="container-fluid feature bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <p class="text-uppercase text-secondary fs-5 mb-0">WHy US</p>
            <h2 class="display-4 text-capitalize mb-3">Why Choose Us</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-item text-center border p-5">
                    <div class="feature-img bg-secondary d-inline-flex p-4">
                        <i class="fas fa-city text-primary fa-5x"></i>
                    </div>
                    <a href="#" class="h4 d-block my-4">Expert Engineer</a>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptatem provident
                        incidunt obcaecati.</p>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="feature-item text-center border p-5">
                    <div class="feature-img bg-secondary d-inline-flex p-4">
                        <i class="fas fa-funnel-dollar text-primary fa-5x"></i>
                    </div>
                    <a href="#" class="h4 d-block my-4">Free Estimates</a>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptatem provident
                        incidunt obcaecati.</p>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="feature-item text-center border p-5">
                    <div class="feature-img bg-secondary d-inline-flex p-4">
                        <i class="fas fa-tools text-primary fa-5x"></i>
                    </div>
                    <a href="#" class="h4 d-block my-4">Quality Materials</a>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptatem provident
                        incidunt obcaecati.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->

<!-- Fact Counter -->
<div class="container-fluid counter py-5">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="counter-box">
                    <div class="counter-item">
                        <div class="counter-item-style"></div>
                        <div class="counter-item-inner p-5">
                            <i class="fas fa-thumbs-up fa-4x text-secondary"></i>
                            <h4 class="text-dark my-4">Completed Projects</h4>
                            <div class="counter-counting">
                                <span class="text-secondary fs-2 fw-bold" data-toggle="counter-up">456</span>
                                <span class="h1 fw-bold text-secondary">+</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="counter-box">
                    <div class="counter-item">
                        <div class="counter-item-style"></div>
                        <div class="counter-item-inner p-5">
                            <i class="fas fa-users fa-4x text-secondary"></i>
                            <h4 class="text-dark my-4">Happy Customers</h4>
                            <div class="counter-counting">
                                <span class="text-secondary fs-2 fw-bold" data-toggle="counter-up">513</span>
                                <span class="h1 fw-bold text-secondary">+</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="counter-box">
                    <div class="counter-item">
                        <div class="counter-item-style"></div>
                        <div class="counter-item-inner p-5">
                            <i class="fas fa-user fa-4x text-secondary"></i>
                            <h4 class="text-dark my-4">Qualified Engineers</h4>
                            <div class="counter-counting">
                                <span class="text-secondary fs-2 fw-bold" data-toggle="counter-up">53</span>
                                <span class="h1 fw-bold text-secondary">+</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="counter-box">
                    <div class="counter-item">
                        <div class="counter-item-style"></div>
                        <div class="counter-item-inner p-5">
                            <i class="fas fa-heart fa-4x text-secondary"></i>
                            <h4 class="text-dark my-4">Years Experiance</h4>
                            <div class="counter-counting">
                                <span class="text-secondary fs-2 fw-bold" data-toggle="counter-up">17</span>
                                <span class="h1 fw-bold text-secondary">+</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center pt-4 wow fadeInUp" data-wow-delay="0.9s">
                <a class="counter-btn btn btn-secondary py-3 px-5" href="#">Join With Us</a>
            </div>
        </div>
    </div>
</div>
<!-- Fact Counter -->



@include("website.includes.footer")