<!-- Footer Start -->
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">About Family Farming</h4>
                        <p class="mb-3">We are a multi purpose company dealing with Building Construction,
                            Transportation and Agriculture</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-white mb-4">Explore</h4>
                    <a href="{{route("home")}}"><i class="fas fa-angle-right me-2"></i> Home</a>
                    <a href="{{route("home")}}#service"><i class="fas fa-angle-right me-2"></i> Services</a>
                    <a href="{{route("about")}}"><i class="fas fa-angle-right me-2"></i> About Us</a>
                    <a href="{{route("contact")}}"><i class="fas fa-angle-right me-2"></i> Contact Us</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-white mb-4">Our Services</h4>
                    @foreach ($service as $item)
                    <a href={{route("ss",$item->id)}}><i class="fas fa-angle-right me-2"></i> {{$item->name}}</a>
                    @endforeach

                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-white mb-4">Contact Info</h4>
                    <a href=""><i class="fa fa-map-marker-alt me-2"></i> St Morogoro, Tanzania</a>
                    <a href=""><i class="fas fa-envelope me-2"></i> 0info@familyfarmingltd.com</a>
                    <a href=""><i class="fas fa-phone me-2"></i> +255 753 901 549</a>
                    <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +255 754 219 539</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-md-6 text-center text-md-start mb-md-0">
                <span class="text-body"><a href="#" class="border-bottom text-white"><i
                            class="fas fa-copyright text-light me-2"></i>FamilyFarming</a>, All right reserved.</span>
            </div>
            <div class="col-md-6 text-center text-md-end text-body">
                Designed By <a class="border-bottom text-white" href="https://Legolas.Tech">Legolas Technologies</a>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-secondary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/assets/lib/wow/wow.min.js"></script>
<script src="/assets/lib/easing/easing.min.js"></script>
<script src="/assets/lib/waypoints/waypoints.min.js"></script>
<script src="/assets/lib/counterup/counterup.min.js"></script>
<script src="/assets/lib/owlcarousel/owl.carousel.min.js"></script>
{{--
<script src="/assets/lib/lightbox/js/lightbox.min.js"></script> --}}


<!-- Template Javascript -->
<script src="/assets/js/main.js"></script>
<script>
$(document).ready(function() {
    //hide the notification after 2seconds 
    setTimeout(function() {
        $("#notification").fadeOut('slow');
    }, 3000);
});
</script>
</body>

</html>