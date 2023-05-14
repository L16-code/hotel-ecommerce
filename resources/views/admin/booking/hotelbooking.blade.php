@extends('admin.index')
@section('content')
    <div class="dashboard-content-wrap">
        <div class="dashboard-bread dashboard--bread dashboard-bread-2">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title font-size-30 text-white">Booking</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="index.html" class="text-white">Home</a></li>
                                <li>Dashboard</li>
                                <li>Booking</li>
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
                                <div class="d-flex align-items-center justify-content-between">
                                    <h3 class="title">Booking Results</h3>
                                    <div class="select-contain">
                                        <select class="select-contain-select">
                                            <option value="1">Any Status</option>
                                            <option value="2">Approved</option>
                                            <option value="3">Pending</option>
                                            <option value="4">Cancelled</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-content pb-2">
                                @foreach ($data as $item)
                                    <div class="card-item card-item-list card-item--list">
                                        <div class="card-img">
                                            <img src="{{ asset('images/img1.jpg') }}" alt="hotel-img">
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <h3 class="card-title">{{ $item->hotel_name }}</h3>
                                                <span class="badge badge-warning text-white ml-2">
                                                    @if ($item->status == '0')
                                                        {{ 'pending' }}
                                                    @endif
                                                </span>
                                            </div>
                                            <ul class="list-items list-items-2 pt-2 pb-3">
                                                <li><span>Start date:</span>{{ $item->from_to }}</li>
                                                {{-- <li><span>End date:</span>12 Jun 2020</li> --}}
                                                {{-- @foreach ($add as $value) --}}
                                                <li><span>Booking details:</span> {{ $item->adults }} persons</li>
                                                {{-- @endforeach --}}
                                                <li><span>Client:</span> {{ $item->first_name }}</li>
                                            </ul>
                                            <div class="btn-box">
                                                <a href="#" class="theme-btn theme-btn-small theme-btn-transparent"
                                                    data-toggle="modal" data-target="#modalPopup"><i
                                                        class="la la-envelope mr-1"></i>Send Message</a>
                                            </div>
                                        </div>
                                        <div class="action-btns">
                                            <a href="#" class="theme-btn theme-btn-small mr-2"><i
                                                    class="la la-check-circle mr-1"></i>Approve</a>
                                            <a href="#" class="theme-btn theme-btn-small"><i
                                                    class="la la-times mr-1"></i>Cancel</a>
                                        </div>
                                    </div><!-- end card-item -->
                                @endforeach
                            </div>
                            <div class="row">{{ $data->links() }}</div>
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
    </section><!-- end dashboard-area -->
    <!-- start scroll top -->
    <div id="back-to-top">
        <i class="la la-angle-up" title="Go top"></i>
    </div>
    <!-- end scroll top -->

    <!-- end modal-shared -->
    <div class="modal-popup">
        <div class="modal fade" id="modalPopup" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title title" id="exampleModalLongTitle">Send Message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="la la-close"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="contact-form-action">
                            <form method="post">
                                <div class="input-box">
                                    <div class="form-group mb-0">
                                        <i class="la la-pencil form-icon"></i>
                                        <textarea class="message-control form-control" name="message" placeholder="Write message here..."></textarea>
                                    </div>
                                </div>
                            </form>
                        </div><!-- end contact-form-action -->
                    </div>
                    <div class="modal-footer border-top-0 pt-0">
                        <button type="button" class="btn font-weight-bold font-size-15 color-text-2 mr-2"
                            data-dismiss="modal">Cancel</button>
                        <button type="button" class="theme-btn theme-btn-small">Send Message</button>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end modal-popup -->
@endsection
