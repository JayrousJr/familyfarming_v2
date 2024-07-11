@include("website.includes.header")

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb"
    style=" background: linear-gradient(rgba(0, 18, 72, 0.7), rgba(0, 18, 72, 0.7)), url(/assets/img/about-3.jpg); background-position: center center;">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-secondary">Contact</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Contact Start -->
<div class="container-fluid contact bg-light py-5">
    <div class="container py-5">
        <div class="row g-5 mb-5">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                    <p class="text-uppercase text-secondary fs-5 mb-0">Let’s Connect</p>
                    <h2 class="display-4 text-capitalize mb-3">Send Your Message</h2>
                    <p class="mb-0">send a message and we will get to you ASAP</p>
                </div>
                <form action={{route("processing")}} method="post">
                    <div class="row g-3">
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating border border-secondary">
                                <input type="text" class="form-control" name="name" placeholder="Your Name"
                                    value="{{ old('name') }}">
                                <label for="name">Your Name</label>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating border border-secondary">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    value="{{ old('email') }}">
                                <label for="email">Your Email</label>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating border border-secondary">
                                <textarea class="form-control" placeholder="Leave a message here" id="message"
                                    style="height: 160px">  {{ old('name') }}</textarea>
                                <label for="message">Message</label>
                                @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                <div class="contact-map h-100 w-100">
                    <iframe class="h-100 w-100" style="height: 500px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.33750346623!2d-73.97968099999999!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1694259649153!5m2!1sen!2sbd"
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="d-inline-flex bg-white w-100 border border-secondary p-4">
                    <i class="fas fa-map-marker-alt fa-2x text-secondary me-4"></i>
                    <div>
                        <h4>Address</h4>
                        <p class="mb-0">Morogoro, Tanzania</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="d-inline-flex bg-white w-100 border border-secondary p-4">
                    <i class="fas fa-envelope fa-2x text-secondary me-4"></i>
                    <div>
                        <h4>Mail Us</h4>
                        <p class="mb-0">info@familyfarmingltd.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="d-inline-flex bg-white w-100 border border-secondary p-4">
                    <i class="fa fa-phone-alt fa-2x text-secondary me-4"></i>
                    <div>
                        <h4>Telephone</h4>
                        <p class="mb-0">(+255) 753 901 549</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@include("website.includes.footer")