@extends('admin.index')
@section('content')
    <div class="dashboard-content-wrap">
        <div class="dashboard-bread dashboard--bread dashboard-bread-2">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title font-size-30 text-white">Activities Application</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="{{route('user.home')}}" class="text-white">Home</a></li>
                                <li>Dashboard</li>
                                <li>Activities Application</li>
                            </ul>
                        </div><!-- end breadcrumb-list -->
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
            </div>
        </div>
        <div class="dashboard-main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-box">
                            <div class="form-title-wrap">
                                <h3 class="title">Activities Application Lists</h3>
                                {{-- <p class="font-size-14">Showing 1 to 8 of 20 entries</p> --}}
                                {{-- <a  type="button" href="{{route('activities.create')}}" class="btn btn-primary">Add</a> --}}
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    {{-- <a  type="button" href="{{route('activities.create')}}" class="btn btn-primary">Add</a> --}}
                                </div>
                                <div class="col-sm-6 ">
                                    <form class="float-end" action="{{ route('activities.show') }}" method="GET"
                                        style="margin: 20px" autocomplete="off">
                                        <div class="input-group ">

                                            <div class="form-group ">
                                                <input type="search" name="search" placeholder="Search" id="form1"
                                                    value="{{ request('search') }}"class="form-control" />

                                            </div>
                                            <button class="btn btn-primary " type="submit"><i
                                                    class="la la-search"></i></button>
                                            </button>

                                        </div>

                                    </form>
                                </div>
                                <div class="col-sm-4 ">
                                    <a type="button" href="{{ route('activities.create') }}"
                                        class="btn btn-primary float-left">Add</a>
                                </div>
                            </div>
                            <div class="form-content">
                                <div class="table-form table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Country</th>
                                                <th scope="col">city</th>
                                                <th scope="col">Tour Type</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                                <tr>
                                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                                    <td>
                                                        <div class="table-content">
                                                            <h3 class="title">{{ $item->name }}</h3>
                                                        </div>
                                                    </td>
                                                    <td>{{ $item->country }}</td>
                                                    <td>{{ $item->city }}</td>
                                                    <td>{{ $item->tour_type }}</td>
                                                    <td><span class="badge badge-warning text-white py-1 px-2">New</span>
                                                    </td>
                                                    <td>
                                                        <div class="table-content">
                                                            <a href="{{ route('activities.view', $item->id) }}" class="theme-btn theme-btn-small mr-2"
                                                                data-toggle="tooltip" data-placement="top" title="View"><i
                                                                    class="la la-eye"></i></a>
                                                            <a href="{{ route('activities.edit', $item->id) }}"
                                                                class="theme-btn theme-btn-small" data-toggle="tooltip"
                                                                data-placement="top" title="Edit"><i
                                                                    class="la la-edit"></i></a>
                                                            <a href="{{ route('activities.delete', $item->id) }}"
                                                                class="theme-btn theme-btn-small" data-toggle="tooltip"
                                                                data-placement="top" title="delete"><i
                                                                    class="la la-trash"></i></a>

                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="row">{{ $data->links() }}</div>
                                </div>
                            </div>
                        </div><!-- end form-box -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
                {{-- <div class="row">
            <div class="col-lg-12">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link page-link-nav" href="#" aria-label="Previous">
                                <span aria-hidden="true"><i class="la la-angle-left"></i></span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link page-link-nav" href="#">1</a></li>
                        <li class="page-item active">
                            <a class="page-link page-link-nav" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link page-link-nav" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link page-link-nav" href="#" aria-label="Next">
                                <span aria-hidden="true"><i class="la la-angle-right"></i></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div> --}}
                <div class="border-top mt-5"></div>
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="copy-right padding-top-30px">
                            <p class="copy__desc">
                                &copy; Copyright Trizen 2020. Made with
                                <span class="la la-heart"></span> by <a
                                    href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a>
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
