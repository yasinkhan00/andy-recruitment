@extends('layouts.main')
@section('title')
Our Team
@endsection
@section('content')

    <!-- Start home -->
    <section class="bg-half page-next-level"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Team</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="{{route('home')}}" class="text-uppercase font-weight-bold">Home</a></li>
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">Team</span> 
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- TEAM START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="team-box position-relative overflow-hidden text-center bg-white">
                        <div class="team-img position-relative overflow-hidden d-block">
                            <img src="{{asset('public/images/employers/img-1.jpg')}}" alt="" class="img-fluid d-block rounded">
                            <div class="team-name p-2 rounded-bottom">
                                <h6 class="text-white mb-0">Stormy Bush</h6>
                            </div>
                        </div>
                        <div class="team-content text-center pb-0 pt-3">
                            <div class="">
                                <p class="mb-0"><a href="team.html#" class="text-dark font-weight-bold">Web Developer</a></p>
                                <p class="text-muted mb-0">Maecenas tellus eget condimentum.</p>
                                <ul class="list-unstyled social-icon mt-3 mb-0">
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-whatsapp"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="team-box position-relative overflow-hidden text-center bg-white">
                        <div class="team-img position-relative overflow-hidden d-block">
                            <img src="{{asset('public/images/employers/img-2.jpg')}}" alt="" class="img-fluid d-block rounded">
                            <div class="team-name p-2 rounded-bottom">
                                <h6 class="text-white mb-0">Darryl Abell</h6>
                            </div>
                        </div>
                        <div class="team-content text-center pb-0 pt-3">
                            <div class="">
                                <p class="mb-0"><a href="team.html#" class="text-dark font-weight-bold">Graphic Designer</a></p>
                                <p class="text-muted mb-0">Phasellus ullamcorper ipsum nunc nunc nonummy metus.</p>
                                <ul class="list-unstyled social-icon mt-3 mb-0">
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-whatsapp"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="team-box position-relative overflow-hidden text-center bg-white">
                        <div class="team-img position-relative overflow-hidden d-block">
                            <img src="{{asset('public/images/employers/img-3.jpg')}}" alt="" class="img-fluid d-block rounded">
                            <div class="team-name p-2 rounded-bottom">
                                <h6 class="text-white mb-0">Roger Utz</h6>
                            </div>
                        </div>
                        <div class="team-content text-center pb-0 pt-3">
                            <div class="">
                                <p class="mb-0"><a href="team.html#" class="text-dark font-weight-bold">Web Designer</a></p>
                                <p class="text-muted mb-0">Etiam ultricies nisi augue Curabitur ullamcorper ultricies.</p>
                                <ul class="list-unstyled social-icon mt-3 mb-0">
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-whatsapp"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="team-box position-relative overflow-hidden text-center bg-white">
                        <div class="team-img position-relative overflow-hidden d-block">
                            <img src="{{asset('public/images/employers/img-4.jpg')}}" alt="" class="img-fluid d-block rounded">
                            <div class="team-name p-2 rounded-bottom">
                                <h6 class="text-white mb-0">Sylvia Mace</h6>
                            </div>
                        </div>
                        <div class="team-content text-center pb-0 pt-3">
                            <div class="">
                                <p class="mb-0"><a href="team.html#" class="text-dark font-weight-bold">UI/UX Designer</a></p>
                                <p class="text-muted mb-0">Nunc nec neque a leo dolor tempus non hendrerit nisi.</p>
                                <ul class="list-unstyled social-icon mt-3 mb-0">
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-whatsapp"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="team-box position-relative overflow-hidden text-center bg-white">
                        <div class="team-img position-relative overflow-hidden d-block">
                            <img src="{{asset('public/images/employers/img-5.jpg')}}" alt="" class="img-fluid d-block rounded">
                            <div class="team-name p-2 rounded-bottom">
                                <h6 class="text-white mb-0">Mark Mitchell</h6>
                            </div>
                        </div>
                        <div class="team-content text-center pb-0 pt-3">
                            <div class="">
                                <p class="mb-0"><a href="team.html#" class="text-dark font-weight-bold">PHP Developer</a></p>
                                <p class="text-muted mb-0">Phasellus ullamcorper ipsum nunc nunc nonummy metus.</p>
                                <ul class="list-unstyled social-icon mt-3 mb-0">
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-whatsapp"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="team-box position-relative overflow-hidden text-center bg-white">
                        <div class="team-img position-relative overflow-hidden d-block">
                            <img src="{{asset('public/images/employers/img-6.jpg')}}" alt="" class="img-fluid d-block rounded">
                            <div class="team-name p-2 rounded-bottom">
                                <h6 class="text-white mb-0">Juan Bluford</h6>
                            </div>
                        </div>
                        <div class="team-content text-center pb-0 pt-3">
                            <div class="">
                                <p class="mb-0"><a href="team.html#" class="text-dark font-weight-bold">Web Designer</a></p>
                                <p class="text-muted mb-0">Nunc nec neque a leo dolor tempus non hendrerit nisi.</p>
                                <ul class="list-unstyled social-icon mt-3 mb-0">
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-whatsapp"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="team-box position-relative overflow-hidden text-center bg-white">
                        <div class="team-img position-relative overflow-hidden d-block">
                            <img src="{{asset('public/images/employers/img-7.jpg')}}" alt="" class="img-fluid d-block rounded">
                            <div class="team-name p-2 rounded-bottom">
                                <h6 class="text-white mb-0">Robin Douglas</h6>
                            </div>
                        </div>
                        <div class="team-content text-center pb-0 pt-3">
                            <div class="">
                                <p class="mb-0"><a href="team.html#" class="text-dark font-weight-bold">Web Developer</a></p>
                                <p class="text-muted mb-0">Maecenas tellus eget condimentum sem quam.</p>
                                <ul class="list-unstyled social-icon mt-3 mb-0">
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-whatsapp"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="team-box position-relative overflow-hidden text-center bg-white">
                        <div class="team-img position-relative overflow-hidden d-block">
                            <img src="{{asset('public/images/employers/img-8.jpg')}}" alt="" class="img-fluid d-block rounded">
                            <div class="team-name p-2 rounded-bottom">
                                <h6 class="text-white mb-0">John Nixon</h6>
                            </div>
                        </div>
                        <div class="team-content text-center pb-0 pt-3">
                            <div class="">
                                <p class="mb-0"><a href="team.html#" class="text-dark font-weight-bold">Graphic Designer</a></p>
                                <p class="text-muted mb-0">Etiam ultricies nisi augue Curabitur ullamcorper ultricies.</p>
                                <ul class="list-unstyled social-icon mt-3 mb-0">
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-whatsapp"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="team-box position-relative overflow-hidden text-center bg-white">
                        <div class="team-img position-relative overflow-hidden d-block">
                            <img src="{{asset('public/images/images/employers/img-9.jpg')}}" alt="" class="img-fluid d-block rounded">
                            <div class="team-name p-2 rounded-bottom">
                                <h6 class="text-white mb-0">Nia Griffith</h6>
                            </div>
                        </div>
                        <div class="team-content text-center pb-0 pt-3">
                            <div class="">
                                <p class="mb-0"><a href="team.html#" class="text-dark font-weight-bold">Graphic Designer</a></p>
                                <p class="text-muted mb-0">Etiam ultricies nisi augue Curabitur ullamcorper ultricies.</p>
                                <ul class="list-unstyled social-icon mt-3 mb-0">
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-whatsapp"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="team-box position-relative overflow-hidden text-center bg-white">
                        <div class="team-img position-relative overflow-hidden d-block">
                            <img src="{{asset('public/images/images/employers/img-3.jpg')}}" alt="" class="img-fluid d-block rounded">
                            <div class="team-name p-2 rounded-bottom">
                                <h6 class="text-white mb-0">John Stuber</h6>
                            </div>
                        </div>
                        <div class="team-content text-center pb-0 pt-3">
                            <div class="">
                                <p class="mb-0"><a href="team.html#" class="text-dark font-weight-bold">UI/UX Designer</a></p>
                                <p class="text-muted mb-0">Phasellus ullamcorper ipsum nunc nunc nonummy metus.</p>
                                <ul class="list-unstyled social-icon mt-3 mb-0">
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-whatsapp"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="team-box position-relative overflow-hidden text-center bg-white">
                        <div class="team-img position-relative overflow-hidden d-block">
                            <img src="{{asset('public/images/images/employers/img-1.jpg')}}" alt="" class="img-fluid d-block rounded">
                            <div class="team-name p-2 rounded-bottom">
                                <h6 class="text-white mb-0">Alma Ramirez</h6>
                            </div>
                        </div>
                        <div class="team-content text-center pb-0 pt-3">
                            <div class="">
                                <p class="mb-0"><a href="team.html#" class="text-dark font-weight-bold">Web Designer</a></p>
                                <p class="text-muted mb-0">Nunc nec neque a leo dolor tempus non hendrerit nisi.</p>
                                <ul class="list-unstyled social-icon mt-3 mb-0">
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-whatsapp"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="team-box position-relative overflow-hidden text-center bg-white">
                        <div class="team-img position-relative overflow-hidden d-block">
                            <img src="{{asset('public/images/images/employers/img-2.jpg')}}" alt="" class="img-fluid d-block rounded">
                            <div class="team-name p-2 rounded-bottom">
                                <h6 class="text-white mb-0">Alan Lee</h6>
                            </div>
                        </div>
                        <div class="team-content text-center pb-0 pt-3">
                            <div class="">
                                <p class="mb-0"><a href="team.html#" class="text-dark font-weight-bold">PHP Developer</a></p>
                                <p class="text-muted mb-0">Maecenas tellus eget condimentum sem quam.</p>
                                <ul class="list-unstyled social-icon mt-3 mb-0">
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-whatsapp"></i></a></li>
                                    <li class="list-inline-item"><a href="team.html#" class="rounded"><i class="mdi mdi-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TEAM END -->

   

@endsection