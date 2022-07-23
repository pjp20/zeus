@extends('main')
@section('content')
    <div class="content-page" style="background: #fff">
        <div class="content">
            <!-- Start Content-->
            <div class="">
                <!-- text-inter -->
                <div class="row userInfo-row">
                    <div class="col-sm-6 col-md-8">
                        <div class="container-dm">
                            <div class="top-row m-25">
                                <div class="fixed-section">
                                    <p class="sectionTitle text-inter pb-0 pl-0">
                                        Setting Up a new User Account
                                    </p>
                                    <p class="subTitle">
                                        This entire process takes less than 10 mins to fillout the
                                        information required to create a new user account.
                                    </p>
                                </div>
                            </div>

                            <div class="form-area">
                                <div class="form-group">
                                    <label for="">User ID:</label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="">First Name</label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="">Last Name</label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="">Gender</label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="">Date of Birth</label>
                                    <input type="date" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="">User Type</label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="">Phone Number</label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="form-row">
                                    <div class="col-sm-6 col-md-8">
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <button class="addBtn mt-2">
                                    <i class="bx bx-shopping-bag"></i>
                                    <span class="ml-1">SAVE AND CREATE</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="side-ribbon">
                            <div class="ribbon-area">
                                <div class="ribbon-one">
                                    <img src="{{asset('assets/images/zeus.svg')}}" alt="" />
                                </div>
                                <div class="ribbon-two">
                                    <p class="ribbon-text">
                                        A tool designed to help you automate the mobility
                                        experience
                                    </p>
                                    <p class="ribbon-name">- Team Zeus</p>
                                </div>
                                <div class="ribbon-three">
                                    <img src="{{asset('assets/images/ribbon.png')}}" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end container-fluid -->
            </div>
        </div>
        <!-- end content -->
    </div>
@endsection
