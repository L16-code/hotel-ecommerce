@extends('admin.index')
@section('content')
<div class="dashboard-content-wrap">
    <div class="dashboard-bread dashboard--bread dashboard-bread-2">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="sec__title font-size-30 text-white">Order Details</h2>
                        </div>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="breadcrumb-list text-right">
                        <ul class="list-items">
                            <li><a href="index.html" class="text-white">Home</a></li>
                            <li>Dashboard</li>
                            <li>hotels Details</li>
                        </ul>
                    </div><!-- end breadcrumb-list -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div>
    </div><!-- end dashboard-bread -->
    <div class="dashboard-main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-box">
                        <div class="form-title-wrap">
                            <h3 class="title">hotels Detail Lists</h3>
                        </div>
                        <div class="form-content">
                            <ul class="list-items list-items-2 list-items-flush">
                                <li><span>Hotel ID#</span>{{$data->id}}</li>
                                <li><span>Hotel name:</span>{{$data->name}}</li>
                                <li><span>Hotel email:</span> {{$data->email}}</li>
                                <li><span> Role:</span> {{$data->role}}</li>
                                <li><span> Buisness Name:</span> {{$data->business_name}}</li>
                                <li><span> Country:</span> {{$data->country}}</li>
                                <li><span> City:</span> {{$data->city}}</li>
                                <li><span>country_code:</span> {{$data->country_code}}</li>
                                <li><span>s_address:</span> {{$data->s_address}}</li>
                                <li><span>a_address:</span> {{$data->a_address}}</li>
                                <li><span>Phone:</span> {{$data->phone}}</li>
                                <li><span>fax:</span> ${{$data->fax}}</li>
                                <li><span>Enquiry Email:</span>{{$data->inquiry_email}}</li>
                                <li><span>website :</span> {{$data->website}}</li>
                                <li><span>Facebook:</span>{{$data->facebook}}</li>
                                <li><span>instagram:</span>{{$data->instagram}}</li>
                                <li><span>twitter:</span>{{$data->twitter}}</li>
                                <li><span>linkedin:</span>{{$data->linkedin}}</li>
                                <li><span>total rooms:</span>{{$data->total_rooms_suites}}</li>
                                <li><span>Min:</span>{{$data->min}}</li>
                                <li><span>max:</span>{{$data->max}}</li>
                            </ul>
                            <div class="btn-box mt-4">
                                <a href="{{ route('villas.edit', $data->id) }}" class="theme-btn theme-btn-small" ><i class="la la-Pencil mr-1"></i>Edit</a>
                            </div>
                        </div>
                    </div><!-- end form-box -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="border-top mt-5"></div>
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="copy-right padding-top-30px">
                        <p class="copy__desc">
                            &copy; Copyright Trizen 2020. Made with
                            <span class="la la-heart"></span> by <a href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a>
                        </p>
                    </div><!-- end copy-right -->
                </div><!-- end col-lg-7 -->
                <div class="col-lg-5">
                    <div class="copy-right-content text-right padding-top-30px">
                        <ul class="social-profile">
                            <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="#"><i class="lab la-twitter"></i></a></li>
                            <li><a href="#"><i class="lab la-instagram"></i></a></li>
                            <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                        </ul>
                    </div><!-- end copy-right-content -->
                </div><!-- end col-lg-5 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end dashboard-main-content -->
</div><!-- end dashboard-content-wrap -->
@endsection
