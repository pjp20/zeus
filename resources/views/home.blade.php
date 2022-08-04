@extends('main')
@section('content')
    <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid mt-10">
                <!-- text-inter -->
                <div class="row g-2">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <a href="finance-office">
                            <div class="boxInfo">
                                <div class="topInfo">
                                    <div class="vectorBox">
                                        <img src="{{ asset('assets/images/deep-vector.svg') }}" alt="">
                                    </div>
                                    <i class="bx bx-dots-vertical-rounded adjust"></i>

                                </div>
                                <div class="bottomInfo">
                                    <div class="leftBottom">
                                        <span class="lft1">Account Balance</span><br />
                                        <span class="lft2 text-inter">$5,600,000</span>
                                    </div>
                                    <span
                                        class="
                    rightBottom
                    bg-light-red
                    red-text
                    font-weight-bold
                  ">
                                        <i class="bx bx-down-arrow-alt"></i>
                                        <span>22.5%</span> <span>APRIL</span>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="boxInfo">
                            <div class="topInfo">
                                <div class="vectorBox">
                                    <img src="{{ asset('assets/images/deep-vector.svg') }}" alt="">
                                </div>
                                <i class="bx bx-dots-vertical-rounded adjust"></i>
                            </div>
                            <div class="bottomInfo">
                                <div class="leftBottom">
                                    <span class="lft1">Total Vehicle(s)</span><br />
                                    <span class="lft2 text-inter">{{ number_format($totalVehicle) }}</span>
                                </div>
                                <span
                                    class="
                    rightBottom
                    bg-light-red
                    red-text
                    font-weight-bold
                  ">
                                    <i class="bx bx-down-arrow-alt"></i>
                                    <span>22.5%</span> <span>APRIL</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <a href="user-management">
                            <div class="boxInfo bg-blk text-light">
                                <div class="topInfo">
                                    <div class="vectorBox2">
                                        <img src="{{ asset('assets/images/deep-vector.svg') }}" alt="">
                                    </div>
                                    <i class="bx bx-dots-vertical-rounded adjust"></i>
                                </div>
                                <div class="bottomInfo">
                                    <div class="leftBottom">
                                        <span class="lft1 text-light">Total User(s)</span><br />
                                        <span class="lft2 text-inter text-light">{{ number_format($totalUsers) }}</span>
                                    </div>
                                    <span
                                        class="
                    rightBottom
                    bg-light-dark
                    text-light
                    font-weight-bold
                  ">
                                        <i class="bx bx-down-arrow-alt"></i>
                                        <span>22.5%</span> <span>APRIL</span>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-sm-6 col-md-12 col-lg-4">
                        <div class="bottom-row d-block">
                            <p class="sectionTitle text-inter">Activity Log</p>
                            <div class="info-activity border-none">
                                <div class="info-info border-none">
                                    <div class="info-icon">
                                        <div class="icon-notice bg-light-blue">
                                            <img src="{{ asset('assets/images/notice.svg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="info-desc">
                                        <span class="infoTop">
                                            GPS device connection lost for RBC123XC
                                        </span>
                                        <span class="infoButtom">16 May, 2022 @ 04:35</span>
                                    </div>
                                </div>
                                <div class="info-info border-none">
                                    <div class="info-icon">
                                        <div class="icon-notice bg-light-blue">
                                            <img src="{{ asset('assets/images/notice.svg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="info-desc">
                                        <span class="infoTop">
                                            GPS device connection lost for RBC123XC
                                        </span>
                                        <span class="infoButtom">16 May, 2022 @ 04:35</span>
                                    </div>
                                </div>
                                <div class="info-info border-none">
                                    <div class="info-icon">
                                        <div class="icon-notice bg-light-blue">
                                            <img src="{{ asset('assets/images/notice.svg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="info-desc">
                                        <span class="infoTop">
                                            GPS device connection lost for RBC123XC
                                        </span>
                                        <span class="infoButtom">16 May, 2022 @ 04:35</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="bottom-row border-none">
                            <div class="row">
                                <div class="col-sm-6 col-md-12">
                                    <div class="boxInfo h-30">
                                        <div class="topInfo">
                                            <div class="vectorBox">
                                                <img src="{{ asset('assets/images/deep-vector.svg') }}" alt="">
                                            </div>
                                            <i class="bx bx-dots-vertical-rounded adjust"></i>
                                        </div>
                                        <div class="bottomInfo">
                                            <div class="leftBottom">
                                                <span class="lft1">Total Ticket(s)</span><br />
                                                <span class="lft2 text-inter">2,100</span>
                                            </div>
                                            <span
                                                class="
                          rightBottom
                          bg-light-green
                          green-text
                          font-weight-bold
                        ">
                                                <i class="bx bx-down-arrow-alt"></i>
                                                <span>22.5%</span> <span>APRIL</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-12">
                                    <div class="boxInfo h-30">

                                        <img class="wide-map" src="{{ asset('assets/images/small-wide.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="bottom-row">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="bottom-row">
                        </div>
                    </div>
                </div>
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end content -->
    </div>
@endsection
