@extends('layouts.main')
@section('title')
About Us
@endsection
@section('content')
    <!-- Start home -->
    <section class="bg-half page-next-level"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">About Us</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="{{route('home')}}" class="text-uppercase font-weight-bold">Home</a></li> 
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">About</span> 
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->
 <!-- ABOUT US START -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-4">
                    <img src="{{asset('public/images/about.jpg')}}" class="img-fluid rounded shadow" alt="">
                </div>

                <div class="col-lg-7 col-md-8">
                    <div class="about-desc ml-lg-4">
                        <h4 class="text-dark">About us</h4>

                        <p class="text-muted">Aenean eros et nisl sagittis as vestibulum at Nullam nulla eros ultricies site amet nonummy id imperdiet feugiat pede as Sed lectuse Donec mollis hendrerit Phasellus at nec sem in at pellentesque facilisis at Praesent congue erat at massa Sed sit cursus turpis vitae tortor that a Donec posuere as vulputate arcu Phasellus accumsan velit.</p>

                        <p class="text-muted">Maecenas tempus tellus eget as that condimentum rhoncus sem quam semper libero amete adipiscing sem neque sed ipsum Nam quam nunce blandit at luctus pulvinar hendrerit id lorem Maecenas nec et ante tincidunt tempus.</p>

                        <p class="text-muted">Sed consequat leo eget bibendum sodales augue at velit cursus nunc.</p>

                        <!-- <a href="javascript:void(0)" class="btn btn-primary">Apply now</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT US END -->

    <!-- COUNTER START -->
    <section class="section bg-light">
        <div class="container">
            <div class="blog-post-counter">
                <div class="row" id="counter">
                    <div class="col-md-3 col-6 border-right">
                        <div class="p-4">
                            <div class="blog-post counter-content text-center">
                                <h1 class="counter-value font-weight-light text-dark mb-2" data-count="2030">0</h1>
                                <p class="counter-name text-muted f-15 text-uppercase mb-2">Jobs</p>
                                <i class="mdi mdi-account-multiple h3 text-muted"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-6 border-right">
                        <div class="p-4">
                            <div class="blog-post counter-content text-center">
                                <h1 class="counter-value font-weight-light text-dark mb-2" data-count="3500">0</h1>
                                <p class="counter-name text-muted f-15 text-uppercase mb-2">Applications</p>
                                <i class="mdi mdi-file h3 text-muted"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-6 border-right">
                        <div class="p-4">
                            <div class="blog-post counter-content text-center">
                                <h1 class="counter-value font-weight-light text-dark mb-2" data-count="1250">0</h1>
                                <p class="counter-name text-muted f-15 text-uppercase mb-2">Companies</p>
                                <i class="mdi mdi-bank h3 text-muted"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="p-4">
                            <div class="blog-post counter-content text-center">
                                <h1 class="counter-value font-weight-light text-dark mb-2" data-count="4000">0</h1>
                                <p class="counter-name text-muted f-15 text-uppercase mb-2">Employers</p>
                                <i class="mdi mdi-account-group h3 text-muted"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- COUNTER END -->

    <!-- COMPANY TESTIMONIAL START -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <h4 class="text-dark font-weight-">Company Testimonial</h4>
                    <div class="blog-post-border mt-3 mb-3"></div>
                    <h5 class="text-muted mb-1">Andyrecruitment</h5>
                    <p class="mb-4 f-16"><a href="about.html" class="text-muted"><i class="mdi mdi-earth mr-2"></i>Andyrecruitment.co.uk</a></p>
                    <p class="text-muted f-14">Maecenas tempus tellus et condimentum that as rhoncus sem quam semper adipiscing sem neque sed ipsum Nam quam nunc blandit at luctus at id lorem maecenas nec odio et ante tincidunt tempus Donec vitae venenatis faucibus quis ante.</p>
                    <div class="job-details-desc-item">
                        <div class="float-left mr-3">
                            <i class="mdi mdi-minus text-muted f-16"></i>
                        </div>
                        <p class="text-muted f-14 mb-1">Aenean leo ligula porttitor eu consequat eleifend enim.</p>
                    </div>
                    <div class="job-details-desc-item">
                        <div class="float-left mr-3">
                            <i class="mdi mdi-minus text-muted f-16"></i>
                        </div>
                        <p class="text-muted f-14 mb-1">Quisque rutrum Aenean imperdiet nisi vel augue.</p>
                    </div>
                    <div class="job-details-desc-item mb-4">
                        <div class="float-left mr-3">
                            <i class="mdi mdi-minus text-muted f-16"></i>
                        </div>
                        <p class="text-muted f-14 mb-1">Maecenas tempus tellus sem semper libero.</p>
                    </div>
                    

                    <ul class="list-inline pt-4 border-top mb-4">
                       
                        <li class="list-inline-item float-right mt-2">
                            <ul class="list-inline bolg-post-icon mb-0">
                                <li class="list-inline-item f-20"><a href="about.html" class=""><i class="mdi mdi-facebook"></i></a></li>
                                <li class="list-inline-item f-20"><a href="about.html" class=""><i class="mdi mdi-twitter"></i></a></li>
                                <li class="list-inline-item f-20"><a href="about.html" class=""><i class="mdi mdi-whatsapp"></i></a></li>
                                <li class="list-inline-item f-20"><a href="about.html" class=""><i class="mdi mdi-instagram"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-7">
                    <div class="blog-post-testi">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-12">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                        <div>
                                            <img src="{{asset('public/images/blog/img-7.jpg')}}" alt="" class="img-fluid mx-auto d-block rounded">
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                        <div>
                                            <img src="{{asset('public/images/blog/img-8.jpg')}}" alt="" class="img-fluid mx-auto d-block rounded">
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                        <div>
                                            <img src="{{asset('public/images/blog/img-9.jpg')}}" alt="" class="img-fluid mx-auto d-block rounded">
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                        <div>
                                            <img src="{{asset('public/images/blog/img-10.jpg')}}" alt="" class="img-fluid mx-auto d-block rounded">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- COMPANY TESTIMONIAL START -->

    

    <!-- ABOUT CLIENTS START -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title title-line pb-5">Our Client's</h4>
                        <p class="text-muted para-desc mx-auto mb-1">Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2 text-center">
                    <img src="{{asset('public/images/clients/1.png')}}" height="50" alt="">
                </div><!--end col-->
                <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2 text-center">
                    <img src="{{asset('public/images/clients/2.png')}}" height="50" alt="">
                </div><!--end col-->
                <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2 text-center">
                    <img src="{{asset('public/images/clients/3.png')}}" height="50" alt="">
                </div><!--end col-->
                <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2 text-center">
                    <img src="{{asset('public/images/clients/4.png')}}" height="50" alt="">
                </div><!--end col-->
                <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2 text-center">
                    <img src="{{asset('public/images/clients/1.png')}}" height="50" alt="">
                </div><!--end col-->
                <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2 text-center">
                    <img src="{{asset('public/images/clients/2.png')}}" height="50" alt="">
                </div><!--end col-->
            </div>
        </div>
    </section>
    <!-- ABOUT CLIENTS END -->

    



@endsection