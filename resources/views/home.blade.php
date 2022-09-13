@extends('main')
@section('content')
    <div class="content-page" style="background: #fff">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid mt-2">
                <!-- text-inter -->
                <div class="top-row">
                    <span class="sectionTitle text-inter pb-0 pl-0">
                        Dashboard
                    </span>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-12 col-lg-8">
                        <div class="top-banner-100">
                            <div class="top-row-banner">
                                <span class="title-100">Hello, {{ auth()->user()->name }} (Admin)</span>
                                <span class="title-200">Welcome back, here's a Zeus of your fleet today...</span>
                                <img src="{{ asset('assets/images/computer.png') }}" class="computer_img" alt="">
                            </div>
                            <div class="mt-1 graph-home w-100 d-flex justify-content-center align-items-center">
                                <div id="top_x_div" style="width: 800px; height: 200px;"></div>
                            </div>
                            <div class="row pt-2" style="margin-bottom:5px">
                                <div class="col-sm-6 col-md-6 pl-4 pr-4 pb-2 pt-2 first-col-100">
                                    <div class="revenue-balance">
                                        <span class="inner-sub-100">Total Transaction(s)</span>
                                        <span class="inner-sub-100"><span class="counter">0</span></span>
                                    </div>
                                    <div class="revenue-balance">
                                        <span class="inner-sub-100">Total Revenue</span>
                                        <span class="inner-sub-100">₦<span class="counter">0</span></span>
                                    </div>
                                    <div class="revenue-balance">
                                        <span class="inner-sub-100">Platform Commission</span>
                                        <span class="inner-sub-100">₦<span class="counter">0</span></span>
                                    </div>
                                    <div class="sideLine-col"></div>
                                </div>

                                <div class="col-sm-6 col-md-6 pl-4 pr-4 pb-2 pt-2">
                                    <div class="revenue-balance">
                                        <span class="inner-sub-100">Total Asset Value</span>
                                        <span class="inner-sub-100">₦<span class="counter">0</span></span>
                                    </div>
                                    <div class="revenue-balance">
                                        <span class="inner-sub-100">Total Est. Fuel Cost</span>
                                        <span class="inner-sub-100">₦<span class="counter">0</span></span>
                                    </div>
                                    <div class="revenue-balance">
                                        <span class="inner-sub-100">Active Locations</span>
                                        <span class="inner-sub-100"><span class="counter">0</span></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="chart-summary">
                            <div class="row">
                                <div class="col-sm-6 col-md-12 col-lg-6">
                                    <div class="chart-summary-info">
                                        <div class="top-finance-heading pl-4 pr-2">
                                            <span class="title-250">Document Status</span>
                                        </div>
                                        <div id="donutchart" style="width: 100%; height: 190px;"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-12 col-lg-6 mb-3">
                                    <div class="chart-summary-info">
                                        <div class="top-finance-heading pl-4 pr-2">
                                            <span class="title-250">Maintenance Summary</span>
                                        </div>
                                        <div id="donutchart-2" style="width: 100%; height: 190px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-12 col-lg-4">
                        <div class="row">
                            <div class="col-sm-6 col-md-12">
                                <div class="right-side-home">
                                    <div class="top-finance-heading pl-4 pr-2">
                                        <span class="title-250">User Overview</span>
                                        <a href="add-user" class="addBtn-100">ADD NEW</a>
                                    </div>
                                    <div id="donutchart-3" style=" height: 190px; padding-bottom:5px; font-size: 20px;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-12">
                                <div class="right-side-home-2">
                                    <div class="top-finance-heading pl-4 pr-2">
                                        <span class="title-250">Fleet Overview</span>
                                        <a href="add-vehicle" class="addBtn-100">ADD NEW</a>
                                    </div>
                                    <div id="donutchart-4" style=" height: 190px; padding-bottom:5px; font-size: 20px;">
                                    </div>

                                    <div class="base-right-side">
                                        <div class="base-22">
                                            <span class="dot-1"></span>
                                            <div class="base-inner-val">
                                                <span class="base-inner-100">Offline Vehicles</span>
                                                <span class="base-inner-200">0</span>
                                            </div>
                                        </div>
                                        <div class="base-22">
                                            <span class="dot-2"></span>
                                            <div class="base-inner-val">
                                                <span class="base-inner-100">Offline Vehicles</span>
                                                <span class="base-inner-200">0</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end container-fluid -->
        </div>
        <!-- end content -->
    </div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Active', 11],
                ['Due soon', 2],
                ['Expired', 7]
            ]);

            var options = {
                pieHole: 0.6,
                colors: ['#79D2DE', '#FFB619', '#FF4A4A']
            };

            var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
            chart.draw(data, options);
        }
    </script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Active', 11],
                ['Due soon', 2],
                ['Expired', 7]
            ]);

            var options = {
                pieHole: 0.6,
                colors: ['#87DE79', '#FFB619', '#FF4A4A']
            };

            var chart = new google.visualization.PieChart(document.getElementById('donutchart-2'));
            chart.draw(data, options);
        }
    </script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Active Accounts', 11],
                ['In-Active Accounts', 2],
            ]);

            var options = {
                // title: 'Maintenance Summary',
                pieHole: 0.6,
                colors: ['#FFAC32', '#FFB619']
            };

            var chart = new google.visualization.PieChart(document.getElementById('donutchart-3'));
            chart.draw(data, options);
        }
    </script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Total Assigned', 11],
                ['Un-Assigned', 3],
                ['Other', 5],
            ]);

            var options = {
                // title: 'Maintenance Summary',
                pieHole: 0.6,
                colors: ['#75E76B', '#79f99B', '#44953D']
            };

            var chart = new google.visualization.PieChart(document.getElementById('donutchart-4'));
            chart.draw(data, options);
        }
    </script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['bar']
        });
        google.charts.setOnLoadCallback(drawStuff);

        function drawStuff() {
            var data = new google.visualization.arrayToDataTable([
                ['Move', 'Percentage'],
                ["0", 4],
                ["1", 3],
                ["2", 2],
                ["3", 10],
                ["4", 9],
                ["5", 7],
                ["6", 4],
                ["7", 7],
                ["8", 8],
                ["9", 3],
                ["10", 9],
                ["11", 5],
                ['12', 4]
            ]);

            var options = {
                width: 800,
                legend: {
                    position: 'none'
                },
                chart: {
                    title: 'Revenue Trend',
                    subtitle: ''
                },
                axes: {
                    x: {
                        0: {
                            side: 'bottom',
                            label: ''
                        } // Top x-axis.
                    }
                },
                bar: {
                    groupWidth: "60%"
                }
            };

            var chart = new google.charts.Bar(document.getElementById('top_x_div'));
            // Convert the Classic options to Material options.
            chart.draw(data, google.charts.Bar.convertOptions(options));
        };
    </script>
@endsection

{{-- <div class="container-fluid mt-10">
    <div class="row g-2">
        <div class="col-sm-6 col-md-12 col-lg-4">
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
                        <span class="rightBottom bg-light-red red-text font-weight-bold">
                            <i class="bx bx-down-arrow-alt"></i>
                            <span>22.5%</span> <span>APRIL</span>
                        </span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-md-12 col-lg-4">
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
                    <span class="rightBottom bg-light-red red-text font-weight-bold">
                        <i class="bx bx-down-arrow-alt"></i>
                        <span>22.5%</span> <span>APRIL</span>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-12 col-lg-4">
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
                        <span class="rightBottom bg-light-dark text-light font-weight-bold">
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
        <div class="col-sm-6 col-md-12 col-lg-4">
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
                                    class="rightBottom bg-light-green green-text font-weight-bold">
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
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="bottom-row">
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="bottom-row">
            </div>
        </div>
    </div>
</div> --}}




{{-- @extends('main')
@section('content')
    <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid mt-10">
                <!-- text-inter -->
                <div class="row g-2">
                    <div class="col-sm-6 col-md-12 col-lg-4">
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
                                    <span class="rightBottom bg-light-red red-text font-weight-bold">
                                        <i class="bx bx-down-arrow-alt"></i>
                                        <span>22.5%</span> <span>APRIL</span>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-12 col-lg-4">
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
                                <span class="rightBottom bg-light-red red-text font-weight-bold">
                                    <i class="bx bx-down-arrow-alt"></i>
                                    <span>22.5%</span> <span>APRIL</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-12 col-lg-4">
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
                                    <span class="rightBottom bg-light-dark text-light font-weight-bold">
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
                    <div class="col-sm-6 col-md-12 col-lg-4">
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
                                                class="rightBottom bg-light-green green-text font-weight-bold">
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
                    </div>
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
@endsection --}}
