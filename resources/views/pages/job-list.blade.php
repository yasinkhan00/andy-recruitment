@extends('layouts.main')
@section('title')
Job List
@endsection
@section('content')

  
    <!-- Start home -->
    <section class="bg-half page-next-level"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Job List view</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="{{route('home')}}" class="text-uppercase font-weight-bold">Home</a></li>
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">Job Listing</span> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <div class="container">
        <div class="home-form-position">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="home-registration-form job-list-reg-form bg-light shadow p-4 mb-3">
                        <form action="{{route('search')}}" method="GET" >
                            <div class="row">
                                <div class="col-lg-8 col-md-6">
                                    <div class="registration-form-box">
                                        <i class="fa fa-briefcase"></i>
                                        <input name="keyword" type="text" id="exampleInputName1" class="form-control rounded registration-input-box" placeholder="Job keybords...">
                                    </div>
                                </div>
                               
                                <div class="col-lg-4 col-md-6">
                                    <div class="registration-form-box">
                                        <button id="submit" class="submitBnt btn btn-primary btn-block">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JOB LIST START -->
    <section class="section pt-0">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title title-line pb-5">@if(isset($keyword)) {{$keyword}} @else all @endif jobs for you</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <div class="left-sidebar">
                        <div class="accordion" id="accordionExample">
                            

                            <!-- collapse one end -->
                            <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="job-list.html#collapsetwo" class="job-list" aria-expanded="true" aria-controls="collapsetwo">
                                    <div class="card-header" id="headingtwo">
                                        <h6 class="mb-0 text-dark f-18">Categories</h6>
                                    </div>
                                </a>
                                <div id="collapsetwo" class="collapse show" aria-labelledby="headingtwo">
                                    <div class="card-body p-0">
                                        <?php 

                                        $categ = [];
                                        $exp = [];
                                        $gender = [];

                                        ?>
                                        @if(isset($job_search))
                                        @foreach($job_search as $data)
                                            <?php
                                                
                                                array_push($categ,$data->job_category->category_name);
                                                array_push($exp,$data->other_details->experience);
                                                array_push($gender,$data->other_details->gender);

                                            ?>

                                        @endforeach
                                        @endif

                                        @if(isset($categ))
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="all-cat" name="category" class="custom-control-input all-cat" onclick="allcateg(this.value)">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="all-cat">All</label>
                                        </div>
                                        @foreach(array_unique($categ) as $c)
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="{!! str_replace(' ','-',$c) !!}" name="category" class="custom-control-input catclass" onclick="categ_func('{!! str_replace(' ','-',$c) !!}')">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="{!! str_replace(' ','-',$c) !!}">{{$c}}</label>
                                        </div>
                                        @endforeach
                                        @endif

                                    </div>
                                </div>
                            </div>
                            <!-- collapse one end -->
                            <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="job-list.html#collapsethree" class="job-list" aria-expanded="true" aria-controls="collapsethree">
                                    <div class="card-header" id="headingthree">
                                        <h6 class="mb-0 text-dark f-18">Experince</h6>
                                    </div>
                                </a>
                                <div id="collapsethree" class="collapse show" aria-labelledby="headingthree">
                                    <div class="card-body p-0">
                                        
                                         @if(isset($exp))
                                         <div class="custom-control custom-radio">
                                            <input type="radio" id="all-exp" name="experience" class="custom-control-input all-exp" onclick="allexpfunc(this.value)">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="all-exp">All</label>
                                        </div>
                                         @foreach(array_unique($exp) as $ex)
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="{!! str_replace(' ','-',$ex) !!}" name="experience" class="custom-control-input expclass" onclick="expfunc('{!! str_replace(' ','-',$ex) !!}')">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="{!! str_replace(' ','-',$ex) !!}">{{$ex}}</label>
                                        </div>
                                        @endforeach
                                        @endif

                                    </div>
                                </div>
                            </div>
                            <!-- collapse one end -->
                            <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="job-list.html#collapsefour" class="job-list" aria-expanded="true" aria-controls="collapsefour">
                                    <div class="card-header" id="headingfour">
                                        <h6 class="mb-0 text-dark f-18">Gender</h6>
                                    </div>
                                </a>
                                <div id="collapsefour" class="collapse show" aria-labelledby="headingfour">
                                    <div class="card-body p-0">

                                         @if(isset($gender))
                                         @foreach(array_unique($gender) as $g)
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="{!! str_replace(' ','-',$g) !!}" name="gender" class="custom-control-input gendclass" onclick="gendfunc('{!! str_replace(' ','-',$g) !!}')">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="{!! str_replace(' ','-',$g) !!}">{{$g}}</label>
                                        </div>
                                         @endforeach
                                         @endif

                                    </div>
                                </div>
                            </div>
                            <!-- collapse one end -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 mt-4 pt-2">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="show-results">
                                <div class="float-left">
                                    <h5 class="text-dark mb-0 pt-2 f-18">Showing results {{count($job_search)}}</h5>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        
                        @if(isset($job_search))
                        @foreach($job_search as $job)
                        <div class="col-lg-12 mt-4 pt-2 {!! str_replace(' ','-',$job->job_category->category_name) !!} {!! str_replace(' ','-',$job->other_details->experience) !!} {!! str_replace(' ','-',$job->other_details->gender) !!} commonclass">
                            <div class="job-list-box border rounded">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col-lg-2">
                                            <div class="company-logo-img">
                                                <img src="images/featured-job/img-1.png" alt="" class="img-fluid mx-auto d-block">
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-9">
                                            <div class="job-list-desc">
                                                <h6 class="mb-2"><a href="{{route('jobdetail',[$job->id])}}" class="text-dark">{{$job->job_title}}</a></h6>
                                                <p class="text-muted mb-0"><i class="mdi mdi-bank mr-2"></i>{{$job->company_details->company_name}}</p>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item mr-3">
                                                        <p class="text-muted mb-0"><i class="mdi mdi-map-marker mr-2"></i>{{$job->job_location->location_name}}, {{$job->job_location->address_line_1}}, {{$job->job_location->address_line_2}}, {{$job->job_location->postcode}}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div class="job-list-button-sm text-right">
                                                @if($job->job_type->job_type_name=='Full Time')
                                                <span class="badge badge-success">Full-Time</span>
                                                @else
                                                <span class="badge badge-success">Part-Time</span>
                                                @endif

                                                <div class="mt-3">
                                                    <a href="{{route('jobdetail',[$job->id])}}" class="btn btn-sm btn-primary">Apply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- JOB LIST START -->

   
<script type="text/javascript">
    
    // alert($categ);
    function categ_func(val){
        $(".commonclass").css('display','none');
        $("."+val).css('display','block');
        $(".all-exp").prop('checked', false);
        $(".expclass").prop('checked', false);
        $(".gendclass").prop('checked', false);

    }

    function allcateg(val){

        //alert(val);
        $(".commonclass").css('display','block');
        $(".all-exp").prop('checked', false);
        $(".expclass").prop('checked', false);
        $(".gendclass").prop('checked', false);
    }

    function expfunc(val){

        $(".commonclass").css('display','none');
        $("."+val).css('display','block');
        $(".all-cat").prop('checked', false);
        $(".catclass").prop('checked', false);
        $(".gendclass").prop('checked', false);
    }

    function allexpfunc(){

        $(".commonclass").css('display','block');
        $(".all-cat").prop('checked', false);
        $(".catclass").prop('checked', false);
        $(".gendclass").prop('checked', false);
    }

    function gendfunc(val){

        $(".commonclass").css('display','none');
        $("."+val).css('display','block');
        $(".all-cat").prop('checked', false);
        $(".catclass").prop('checked', false);
        $(".all-exp").prop('checked', false);
        $(".expclass").prop('checked', false);
        

    }


</script>
    
@endsection