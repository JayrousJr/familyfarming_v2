@include("website.includes.header")
@if(session('message'))
<div class="alert alert-success" id="notification">
    {{session('message')}}
</div>
@endif
<!-- Carousel Start -->
<div class="container-fluid overflow-hidden px-0">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1s"
            style="animation-delay: 1s;">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="First slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            @foreach ($slide as $item)
            <div class="carousel-item {{$item->id === 1 ? 'active' : ' '}}">
                <img src="/storage/{{$item->image}}" class="img-fluid w-100" alt="First slide" />
                <div class="carousel-caption">
                    <p class="text-uppercase text-secondary fs-4 mb-0 fadeInUp animate__animated"
                        data-animation="fadeInUp" data-delay="1s" style="animation-delay: 1s;">{{$item->head}}</p>
                    <h1 class="display-1 text-capitalize text-white mb-4 fadeInUp animate__animated"
                        data-animation="fadeInUp" data-delay="1.3s" style="animation-delay: 1.3s;">
                        {!! $item->paragraph!!}</h1>
                    </p>

                </div>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon btn-lg-square fadeInLeft animate__animated" aria-hidden="true"
                data-animation="fadeInLeft" data-delay="1.1s" style="animation-delay: 1.3s;"><i
                    class="fas fa-chevron-left fa-2x"></i></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon btn-lg-square fadeInRight animate__animated" aria-hidden="true"
                data-animation="fadeInRight" data-delay="1.1s" style="animation-delay: 1.3s;"><i
                    class="fas fa-chevron-right fa-2x"></i></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


<!-- Features Start -->
@include("website.includes.whyus")
<!-- Features End -->


<!-- Services Start -->
<div class="container-fluid service bg-light pb-5" id="service">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <p class="text-uppercase text-secondary fs-5 mb-0">Our Services</p>
            <h2 class="display-4 text-capitalize mb-3">our services are Creative and Decent</h2>
        </div>
        <div class="row g-4">
            @foreach ($service as $item)

            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="/storage/{{ $item->image }}" class="img-fluid w-100" alt="Image">
                    </div>
                    <div class="service-content text-center p-4">
                        <div class="bg-secondary btn-xl-square mx-auto" style="width: 120px; height: 120px;">
                            <i class="fas fa-home text-primary fa-4x"></i>
                        </div>
                        <a href="#" class="d-block fs-4 my-4">{{ $item->name }}</a>
                        <div class="pg-paragraph">
                            <p>{!! \Illuminate\Support\Str::limit(strip_tags($item->description), 100) !!}</p>
                        </div>
                        <a class="btn btn-secondary py-2 px-4" href={{ route("ss", $item->id) }}>Read More</a>
                    </div>
                    <div class="service-tytle">
                        <div class="d-flex align-items-center ps-4 w-100">
                            <h4>{{ $item->name }}</h4>
                        </div>
                        <div class="btn-xl-square bg-secondary p-4" style="width: 80px; height: 80px;">
                            <i class="fas fa-home text-primary fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Services End -->

<!-- Fact Counter -->
@include("website.includes.counter")
<!-- Fact Counter -->

<!-- Projects Start -->
<div class="container-fluid project py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <p class="text-uppercase text-secondary fs-5 mb-0">Our Projects</p>
            <h2 class="display-4 text-capitalize mb-3">Recent Completed Projects</h2>
        </div>
        <div class="row g-5">

            @foreach ($project as $item)

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
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
                                <p class="mb-0 mt-3">
                                    {!! \Illuminate\Support\Str::limit(strip_tags($item->description), 100) !!}
                                </p>
                            </div>
                            <a class="btn btn-primary py-2 px-4" href="{{ route('ps', $item->id)}}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                <a class="btn btn-secondary py-3 px-5" href="{{ route('project') }}">More Projects</a>
            </div>
        </div>
    </div>
</div>
<!-- Projects End -->



<!-- Testimonial Start -->
<div class="container-fluid testimonial pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <p class="text-uppercase text-secondary fs-5 mb-0">Testimonials</p>
            <h2 class="display-4 text-capitalize mb-3">Our clients reviews.</h2>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.4s">
            <div class="testimonial-item bg-light p-4">
                <div class="position-relative">
                    <i class="fa fa-quote-right fa-2x text-primary position-absolute"
                        style="bottom: 30px; right: 0;"></i>
                    <div class="mb-4 pb-4 border-bottom border-secondary">
                        <p class="mb-0">I really have got a lot pf technical help and advice from here. I even decided
                            to start a new business.
                        </p>
                    </div>
                    <div class="d-flex align-items-center flex-nowrap">
                        <div class="me-4">
                            <img src="/assets/img/customer3.jpg" class="img-fluid w-100"
                                style="width: 100px; height: 100px;" alt="">
                        </div>
                        <div class="d-block">
                            <h4 class="text-dark">Joshua Jay</h4>
                            <p class="m-0 pb-3">Customer</p>
                            <div class="d-flex text-secondary pe-5">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star text-muted"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-light p-4">
                <div class="position-relative">
                    <i class="fa fa-quote-right fa-2x text-primary position-absolute"
                        style="bottom: 30px; right: 0;"></i>
                    <div class="mb-4 pb-4 border-bottom border-secondary">
                        <p class="mb-0">I am cerisfied with the service, i had a to buld a house so quick, thanks to
                            you.
                        </p>
                    </div>
                    <div class="d-flex align-items-center flex-nowrap">
                        <div class="me-4">
                            <img src="/assets/img/customer1.jpg" class="img-fluid w-100"
                                style="width: 100px; height: 100px;" alt="">
                        </div>
                        <div class="d-block">
                            <h4 class="text-dark">Abdulkadri Umar</h4>
                            <p class="m-0 pb-3">Customer</p>
                            <div class="d-flex text-secondary pe-5">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star text-muted"></i>
                                <i class="fas fa-star text-muted"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-light p-4">
                <div class="position-relative">
                    <i class="fa fa-quote-right fa-2x text-primary position-absolute"
                        style="bottom: 30px; right: 0;"></i>
                    <div class="mb-4 pb-4 border-bottom border-secondary">
                        <p class="mb-0">Since i came to Tanzania, i was so close with this company now i enjoy the
                            service.
                        </p>
                    </div>
                    <div class="d-flex align-items-center flex-nowrap">
                        <div class="me-4">
                            <img src="/assets/img/customer.jpg" class="img-fluid w-100"
                                style="width: 100px; height: 100px;" alt="">
                        </div>
                        <div class="d-block">
                            <h4 class="text-dark">Marko Sebastian</h4>
                            <p class="m-0 pb-3">Customer</p>
                            <div class="d-flex text-secondary pe-5">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
@include("website.includes.footer")