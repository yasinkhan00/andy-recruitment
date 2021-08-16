@extends('layouts.main')
@section('title')
Apply for Job
@endsection
@section('content')



 <!-- Start home -->
    <section class="bg-half page-next-level"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">{{$job->job_title}}</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><span class="text-uppercase font-weight-bold">{{$job->job_location->location_name}}</span></li>
                            <!-- <li><a href="create-resume.html#" class="text-uppercase font-weight-bold">Pages</a></li> 
                            <li><a href="create-resume.html#" class="text-uppercase font-weight-bold">Candidates</a></li> 
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">Creat Resume</span> 
                            </li> --> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- CREATE RESUME START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="text-dark">General Information :</h5>
                </div>
 
                <div class="col-12 mt-3">
                    <div class="custom-form p-4 border rounded">
                       
                        <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
                        	@csrf
                            <div class="row mt-4">
                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">First Name<span class="text-danger">*</span> :</label>
                                        <input id="first-name" type="text" name="first_name" class="form-control resume" placeholder="First Name :">
                                        <input type="hidden" name="job_id" value="{{$job->id}}">
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Surname<span class="text-danger">*</span> :</label>
                                        <input id="surname-name" name="surname" type="text" class="form-control resume" placeholder="Surname :">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Phone<span class="text-danger">*</span> :</label>
                                        <input id="phone" name="phone" type="number" class="form-control resume">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Email<span class="text-danger">*</span> :</label>
                                        <div class="form-button">
                                            <input id="email" name="email" type="email" class="form-control resume">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Upload CV <span class="text-danger">*</span>:</label>
                                        <div class="form-button">
                                            <input id="cv" name="cv" type="file" class="form-control resume">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 mt-4">
                    				<input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Apply">
                				</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            
        </div>
    </section>
    <!-- CREATE RESUME END -->






@endsection