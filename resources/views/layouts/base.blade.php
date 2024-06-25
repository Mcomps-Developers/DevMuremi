<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Muremi</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">


    <link href="{{ asset('img/favicon.ico') }}" rel="icon">


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">


    <link href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @livewireStyles()
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-light navbar-light">
        <div class="container-fluid">
            {{-- <a href="/" class="navbar-brand">DevMuremi</a> --}}
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="#home" class="nav-item nav-link active">Home</a>


                    <a href="#about" class="nav-item nav-link">About</a>
                    <a href="#service" class="nav-item nav-link">My Services</a>
                    <a href="#experience" class="nav-item nav-link">Resume</a>
                    <a href="#portfolio" class="nav-item nav-link">Portfolio</a>
                    {{-- <a href="#price" class="nav-item nav-link">Price</a> --}}
                    {{-- <a href="#review" class="nav-item nav-link">Review</a> --}}
                    {{-- <a href="#team" class="nav-item nav-link">Team</a> --}}
                    {{-- <a href="#blog" class="nav-item nav-link">Blog</a> --}}
                    <a href="https://m.mcomps.co.ke/" class="nav-item nav-link">Mcomps</a>
                    <a href="#contact" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->


    <!-- Hero Start -->
    {{ $slot }}


    <!-- Footer Start -->
    <div class="footer wow fadeIn" data-wow-delay="0.3s">
        <div class="container-fluid">
            <div class="container">
                <div class="footer-info">
                    <h2>Bungoma</h2>
                    <h3>Crossrodes, Bungoma, Kenya</h3>
                    <div class="footer-menu">
                        <p>+254 794069346</p>
                        <p>muremi@mcomps.africa</p>
                    </div>
                    <div class="footer-social">
                        <a href="https://wa.me/254794069346?text=Hello%2C%20I%20would%20like%20to%20contact%20you" target="_blank">
                            <i class="fab fa-whatsapp"></i>
                        </a>

                        <a href="https://x.com/alhaji_melvin"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=100085648657027"><i
                                class="fab fa-facebook-f"></i></a>
                        {{-- <a href=""><i class="fab fa-youtube"></i></a> --}}
                        <a href="https://www.instagram.com/alhajike/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/muremi-peter-ab421a231/"><i
                                class="fab fa-linkedin-in"></i></a>
                        <a href="https://github.com/petermuremi351" target="_blank"><i class="fab fa-github"></i></a>
                        ``

                    </div>
                </div>
            </div>
            {{-- <div class="container copyright">
                    <p>&copy; <a href="#">Your Site Name</a>, All Right Reserved |


                    Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                </div> --}}
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to top button -->
    <a href="#" class="btn back-to-top"><i class="fa fa-chevron-up"></i></a>


    <!-- Pre Loader -->
    <div id="loader" class="show">
        <div class="loader"></div>
    </div>


    <!-- JavaScript Libraries -->
    <script src="{{ asset('https://code.jquery.com/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/typed/typed.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
    @livewireScripts
</body>

</html>
