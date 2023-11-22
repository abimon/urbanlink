@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-xlg-3 col-md-12">
            <div class="white-box">
                <div class="user-bg"> <img width="100%" alt="user" src="{{asset('storage/profile/'.Auth()->user()->path)}}">
                    <div class="overlay-box">
                        <div class="user-content">
                            <a href="javascript:void(0)"><img src="{{asset('storage/profile/'.Auth()->user()->path)}}" class="thumb-lg img-circle" alt="img"></a>
                            <h4 class="text-white mt-2">{{Auth()->user()->fname}} {{Auth()->user()->mname}} {{Auth()->user()->lname}}</h4>
                            <h5 class="text-white mt-2">{{Auth()->user()->email}}</h5>
                        </div>
                    </div>
                </div>
                <div class="user-btm-box mt-5 d-md-flex">
                    <div class=" text-center">
                        <h1>+{{Auth()->user()->contact}}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-xlg-9 col-md-12">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-material" action="/UserUpdate">
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Full Name</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" value="{{Auth()->user()->fname}} {{Auth()->user()->mname}} {{Auth()->user()->lname}}" class="form-control p-0 border-0" disabled>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">ID No.</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" value="{{Auth()->user()->national_id}}" class="form-control p-0 border-0" disabled>
                            </div>
                        </div>
                        <!--
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Middle Name</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" value="{{Auth()->user()->mname}}" class="form-control p-0 border-0" disabled>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Last Name</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" value="{{Auth()->user()->lname}}" class="form-control p-0 border-0" disabled>
                            </div>
                        </div>
                        -->
                        <div class="form-group mb-4">
                            <label for="example-email" class="col-md-12 p-0">Email</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="email" value="{{Auth()->user()->email}}" class="form-control p-0 border-0" name="example-email" id="example-email">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Phone No</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" value="{{Auth()->user()->contact}}" class="form-control p-0 border-0">
                            </div>
                        </div>
                        <!--
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Message</label>
                            <div class="col-md-12 border-bottom p-0">
                                <textarea rows="5" class="form-control p-0 border-0"></textarea>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-sm-12">Select Country</label>

                            <div class="col-sm-12 border-bottom">
                                <select class="form-select shadow-none p-0 border-0 form-control-line">
                                    <option>London</option>
                                    <option>India</option>
                                    <option>Usa</option>
                                    <option>Canada</option>
                                    <option>Thailand</option>
                                </select>
                            </div>
                        </div>
                        -->
                        <div class="form-group mb-4">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success">Update Profile</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

