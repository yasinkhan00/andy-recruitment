@extends('layouts.main')
@section('title')
Job Detail
@endsection
@section('content')


    <!-- Start home -->
    <section class="bg-half page-next-level"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Job Detail</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="{{route('home')}}" class="text-uppercase font-weight-bold">Home</a></li>
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">Job Detail</span> 
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- JOB DETAILS START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="text-dark mb-3">{{$job_search->job_title}}</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="job-detail border rounded p-4">
                        <div class="job-detail-content">
                            <img src="images/featured-job/img-4.png" alt="" class="img-fluid float-left mr-md-3 mr-2 mx-auto d-block">
                            <div class="job-detail-com-desc overflow-hidden d-block">
                                <h4 class="mb-2">{{$job_search->job_title}}</h4>
                                <p class="text-muted mb-0"><i class="mdi mdi-link-variant mr-2"></i>{{$job_search->company_details->company_name}}</p>
                                <p class="text-muted mb-0"><i class="mdi mdi-map-marker mr-2"></i>{{$job_search->job_location->location_name}} {{','.$job_search->job_location->address_line_1}}{{','.$job_search->job_location->address_line_2}}{{','.$job_search->job_location->postcode}}</p>
                            </div>
                        </div>

                        <div class="job-detail-desc mt-4">
                            
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-dark mt-4">Job Description :</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail border rounded mt-2 p-4">
                                <div class="job-detail-desc">
                                    <p class="text-muted mb-3"><?php echo $job_search->job_description; ?></p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-dark mt-4">Qualification :</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail border rounded mt-2 p-4">
                                <div class="job-detail-desc">
                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <!-- <i class="mdi mdi-send text-primary"></i> -->
                                        </div>
                                        <p class="text-muted mb-2"><?php echo $job_search->job_qualification; ?></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-dark mt-4">Primary Responsibilities :</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail border rounded mt-2 p-4">
                                <div class="job-detail-desc">
                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <!-- <i class="mdi mdi-send text-primary"></i> -->
                                        </div>
                                        <p class="text-muted mb-2"><?php echo $job_search->job_responsibilities; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-5 mt-4 mt-sm-0">
                    <div class="job-detail border rounded p-4">
                        <h5 class="text-muted text-center pb-2"><i class="mdi mdi-map-marker mr-2"></i>Location</h5>

                        <div class="job-detail-location pt-4 border-top">
                            <div class="job-details-desc-item">
                                <div class="float-left mr-2">
                                    <i class="mdi mdi-bank text-muted"></i>
                                </div>
                                <p class="text-muted mb-2">: {{$job_search->company_details->company_name}}</p>
                            </div>

                            <div class="job-details-desc-item">
                                <div class="float-left mr-2">
                                    <i class="mdi mdi-email text-muted"></i>
                                </div>
                                <p class="text-muted mb-2">: {{$job_search->company_details->email}}</p>
                            </div>

                            <div class="job-details-desc-item">
                                <div class="float-left mr-2">
                                    <i class="mdi mdi-web text-muted"></i>
                                </div>
                                <p class="text-muted mb-2">: {{$job_search->company_details->website}}</p>
                            </div>

                            <div class="job-details-desc-item">
                                <div class="float-left mr-2">
                                    <i class="mdi mdi-cellphone-iphone text-muted"></i>
                                </div>
                                <p class="text-muted mb-2">: {{$job_search->company_details->phone}}</p>
                            </div>

                            <div class="job-details-desc-item">
                                <div class="float-left mr-2">
                                    <i class="mdi mdi-currency-usd text-muted"></i>
                                </div>
                                <p class="text-muted mb-2">: £{{$job_search->job_salary->salary_min}} - £{{$job_search->job_salary->salary_max}}</p>
                            </div>

                            <div class="job-details-desc-item">
                                <div class="float-left mr-2">
                                    <i class="mdi mdi-security text-muted"></i>
                                </div>
                                <p class="text-muted mb-2">: {{$job_search->other_details->experience}}</p>
                            </div>


                            <h6 class="text-dark f-17 mt-3 mb-0">Share Job :</h6>
                            <ul class="social-icon list-inline mt-3 mb-0">
                                <li class="list-inline-item"><a href="job-details.html#" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="job-details.html#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="job-details.html#" class="rounded"><i class="mdi mdi-google-plus"></i></a></li>
                                <li class="list-inline-item"><a href="job-details.html#" class="rounded"><i class="mdi mdi-whatsapp"></i></a></li>
                                <li class="list-inline-item"><a href="job-details.html#" class="rounded"><i class="mdi mdi-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="job-detail border rounded mt-4 p-4">
                        <h5 class="text-muted text-center pb-2"><i class="mdi mdi-clock-outline mr-2"></i>Job Timing</h5>

                        <div class="job-detail-time border-top pt-4">
                            <ul class="list-inline mb-0">
                                
                               
                                <li class="clearfix text-muted border-bottom pb-3">
                                    <div class="float-left">{{$job_search->job_days->days}} Days/week</div>
                                    <div class="float-right">
                                        <h5 class="f-13 mb-0">{{$job_search->job_timing->job_time_from}} - {{$job_search->job_timing->job_time_to}}</h5>
                                    </div>
                                </li>
                                
                                
                            </ul>
                        </div>
                    </div>

                    <div class="job-detail border rounded mt-4">
                        <a href="{{route('apply',[$job_search->id])}}" class="btn btn-primary btn-block">Apply For Job</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- JOB DETAILS END -->

@endsection