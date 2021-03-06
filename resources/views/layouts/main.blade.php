<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Andy Recruitment - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" charset="UTF-8" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Andy Recruitment" />

    <link rel="shortcut icon" href="{{asset('public/images/ar.jpg')}}">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/materialdesignicons.min.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('public/css/fontawesome.css')}}" />

    <!-- selectize css -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/selectize.css')}}" />

    <!--Slider-->
    <link rel="stylesheet" href="{{asset('public/css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{asset('public/css/owl.theme.css')}}" />
    <link rel="stylesheet" href="{{asset('public/css/owl.transitions.css')}}" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/style.css')}}" />

</head>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    <!-- Navigation Bar-->
    <header id="topnav" class="defaultscroll scroll-active">
        <!-- Tagline STart -->
        <div class="tagline">
            <div class="container">
                <div class="float-left">
                    <div class="phone">
                        <i class="mdi mdi-phone-classic"></i> +44 123 456 789
                    </div>
                  
                </div>
                <div class="float-right">
                    <div class="email">
                        <a href="mailto:info@andyrecruitment.co.uk">
                            <i class="mdi mdi-email"></i> info@andyrecruitment.co.uk
                        </a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Tagline End -->

        <!-- Menu Start -->
        <div class="container">
            <!-- Logo container-->
            <div>
                <a href="{{route('home')}}" class="logo">
                    <img src="{{asset('public/images/ar.jpg')}}" alt="" class="logo-light" height="80" />
                    <img src="{{asset('public/images/ar.jpg')}}" alt="" class="logo-dark" height="80" />
                </a>
            </div>                 
            <!-- <div class="buy-button">
                <a href="post-a-job.html" class="btn btn-primary"><i class="mdi mdi-cloud-upload"></i> Post a Job</a>
            </div> --><!--end login button-->
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>
    
            <div id="navigation">
                <!-- Navigation Menu-->   
                <ul class="navigation-menu">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('about')}}">About Us</a></li>
                    <li><a href="{{route('team')}}">Team</a></li>
                    <li><a href="{{route('contact')}}">contact</a></li>
                </ul><!--end navigation menu-->
            </div><!--end navigation-->
        </div><!--end container-->
        <!--end end-->
        <div class="container">
        <div class="container-fluid">
                @if ($errors->any())
                    <div class="alert alert-danger">
                    <ul style="list-style-type: none;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    </div>
                @endif

                @if (session()->has('msg-success'))
                <div class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('msg-success') }}</div>
                @elseif (session()->has('msg-error'))
                <div class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('msg-error') }}
                </div>
                
                @endif
                

            </div>
        
    </div>
    </header><!--end header-->
    <!-- Navbar End -->


   @yield('content')
   <!-- subscribe start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="float-left position-relative notification-icon mr-2">
                        <i class="mdi mdi-bell-outline text-primary"></i>
                        <span class="badge badge-pill badge-danger">1</span>
                    </div>
                    <h5 class="mt-2 mb-0">Your Job Notification</h5>
                </div>
                <div class="col-lg-8 col-md-7 mt-4 mt-sm-0">
                    <form>
                        <div class="form-group mb-0">
                            <div class="input-group mb-0">
                                <input name="email" id="email" type="email" class="form-control" placeholder="Your email :" required="" aria-describedby="newssubscribebtn">
                                <div class="input-group-append">
                                    <button class="btn btn-primary submitBnt" type="submit" id="newssubscribebtn">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe end -->

    <!-- footer start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                    <a href="javascript:void(0)"><img src="{{asset('public/images/ar.jpg')}}" height="70" alt=""></a>
                    <p class="mt-4">At vero eos et accusamus et iusto odio dignissim os ducimus qui blanditiis praesentium</p>
                    <ul class="social-icon social list-inline mb-0">
                        <li class="list-inline-item"><a href="index.html#" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="index.html#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="index.html#" class="rounded"><i class="mdi mdi-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="index.html#" class="rounded"><i class="mdi mdi-google"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title">Company</p>
                    <ul class="list-unstyled footer-list">
                        <li><a href="{{route('about')}}" class="text-foot"><i class="mdi mdi-chevron-right"></i> About Us</a></li>
                        <li><a href="{{route('team')}}" class="text-foot"><i class="mdi mdi-chevron-right"></i> Team</a></li>
                        <li><a href="{{route('contact')}}" class="text-foot"><i class="mdi mdi-chevron-right"></i> Contact Us</a></li>
                        <!-- <li><a href="index.html#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Blog</a></li> -->
                        <!-- <li><a href="index.html#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Pricing</a></li> -->
                        <!-- <li><a href="index.html#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Marketing</a></li> -->
                        <!-- <li><a href="index.html#" class="text-foot"><i class="mdi mdi-chevron-right"></i> CEOs </a></li> -->
                        <!-- <li><a href="index.html#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Agencies</a></li> -->
                        <!-- <li><a href="index.html#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Our Apps</a></li> -->
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title">Resources</p>
                    <ul class="list-unstyled footer-list">
                        <!-- <li><a href="index.html#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Support</a></li> -->
                        <li><a href="index.html#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Privacy Policy</a></li>
                        <li><a href="index.html#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Terms</a></li>
                        <!-- <li><a href="index.html#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Accounting </a></li> -->
                        <!-- <li><a href="index.html#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Billing</a></li> -->
                        <!-- <li><a href="index.html#" class="text-foot"><i class="mdi mdi-chevron-right"></i> F.A.Q.</a></li> -->
                    </ul>
                </div>
            
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title f-17">Business Hours</p>
                    <ul class="list-unstyled text-foot mt-4 mb-0">
                        <li>Monday - Friday : 9:00 to 17:00</li>
                        <li class="mt-2">Saturday : Day Off (Holiday)</li>
                        <li class="mt-2">Sunday : Day Off (Holiday)</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->
    <hr>
    <footer class="footer footer-bar">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="">
                        <p class="mb-0">?? 2021 Andy Recruitment.</p>
                    </div>
                </div>
            </div>
        </div><!--end container-->
    </footer><!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="index.html#" class="back-to-top rounded text-center" id="back-to-top"> 
        <i class="mdi mdi-chevron-up d-block"> </i> 
    </a>
    <!-- Back to top -->

    <!-- javascript -->
    <script src="{{asset('public/js/jquery.min.js')}}"></script>
    <script src="{{asset('public/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('public/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('public/js/plugins.js')}}"></script>

    <!-- selectize js -->
    <script src="{{asset('public/js/selectize.min.js')}}"></script>
    <script src="{{asset('public/js/jquery.nice-select.min.js')}}"></script>

    <script src="{{asset('public/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/js/counter.int.js')}}"></script>

    <script src="{{asset('public/js/app.js')}}"></script>
    <script src="{{asset('public/js/home.js')}}"></script>
    <script src="{{asset('public/js/custom.js')}}"></script>

</body>
</html>