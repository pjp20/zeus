@extends('main')
@section('content')
    <title>Zeus | Finance Office</title>
    <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid m15">
                <!-- text-inter -->
                <div class="top-row">
                    <div>
                        <p class="sectionTitle text-inter pb-0 pl-0">Finance Office</p>
                    </div>
                </div>
                <ul class="sub-tabs">
                    <li class="listFinanceOverview bbd">
                        <a href="finance-office">General Overview</a>
                    </li>
                    <li class="list_finance_transaction">
                        <a href="deposit-module">Deposit Module</a>
                    </li>
                    <li class="list_finance_remittance">
                        <a href="payout-manager">
                            Payout Manager
                        </a>
                    </li>
                </ul>
                <!-- overview -->
                <div class="finance_general_overview">
                    <div class="row g-2">
                        <div class="col-sm-6 col-md-12 col-lg-4">
                            <div class="boxInfo">
                                <div class="topInfo">
                                    <div class="vectorBox">
                                        <img :src="'../assets/images/vector.png'" alt="" />
                                    </div>
                                    <i class="bx bx-dots-vertical-rounded adjust"></i>
                                </div>
                                <div class="bottomInfo">
                                    <div class="leftBottom">
                                        <span class="lft1">ACCOUNT BALANCE</span><br />
                                        <span class="lft2 text-inter">$5,600.00</span>
                                    </div>
                                    <span class="rightBottom bg-light-red red-text font-weight-bold">
                                        <i class="bx bx-down-arrow-alt"></i>
                                        <span>22.5%</span> <span>APRIL</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-12 col-lg-4">
                            <div class="boxInfo">
                                <div class="topInfo">
                                    <div class="vectorBox">
                                        <img :src="'../assets/images/vector.png'" alt="" />
                                    </div>
                                    <i class="bx bx-dots-vertical-rounded adjust"></i>
                                </div>
                                <div class="bottomInfo">
                                    <div class="leftBottom">
                                        <span class="lft1">TOTAL WITHDRAWN</span><br />
                                        <span class="lft2 text-inter">$2, 505</span>
                                    </div>
                                    <span class="rightBottom bg-light-green green-text font-weight-bold">
                                        <i class="bx bx-down-arrow-alt"></i>
                                        <span>22.5%</span> <span>APRIL</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-12 col-lg-4">
                            <div class="boxInfo">
                                <div class="topInfo">
                                    <div class="vectorBox">
                                        <img :src="'../assets/images/vector.png'" alt="" />
                                    </div>
                                    <i class="bx bx-dots-vertical-rounded adjust"></i>
                                </div>
                                <div class="bottomInfo">
                                    <div class="leftBottom">
                                        <span class="lft1">TRANSACTION COUNT</span><br />
                                        <span class="lft2 text-inter">350</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col-sm-6 col-md-12 col-lg-8">
                            <div class="graph-section"></div>
                        </div>
                        <div class="col-sm-6 col-md-12 col-lg-4">
                            <div class="map-sec"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end content -->
    </div>
@endsection
