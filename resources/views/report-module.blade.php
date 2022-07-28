@extends('main')
@section('content')
    <div class="content-page bg-light-grey">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid mt-10">
                <div class="main-report">
                    <!-- text-inter -->
                    <div class="top-row">
                        <div>
                            <p class="sectionTitle text-inter pb-0 pl-0">Report Module</p>
                        </div>
                        <!-- end super filter modal -->
                        <div class="filter-calender reportModuleFilter">
                            <div class="filterIcon">
                                <img src="{{ asset('assets/images/filter.svg') }}" alt="" />
                            </div>
                            <div class="filterCalender">
                                <span>FILTER:<span class="font-weight-bold">CUSTOM RANGE</span></span>
                                <img src="{{ asset('assets/images/calender.png') }}" alt="" />
                            </div>
                        </div>
                        <div class="filterModal">
                            <div class="topFilter">
                                <h3>Super Filter</h3>
                                <span class="closeBtn">X</span>
                            </div>
                            <ul class="filterList">
                                <li> <a href="{{ route('report-module') }}"> Default / Live </a></li>
                                <li> <a href="{{ route('reportModuleFilter2', ['date' => '30']) }}"> Past 30 days </a> </li>
                                <li> <a href="{{ route('reportModuleFilter2', ['date' => '90']) }}"> Last 3 months </a>
                                </li>
                                <li> <a href="{{ route('reportModuleFilter2', ['date' => '180']) }}"> Last 6 months </a>
                                </li>
                                <li> <a href="{{ route('reportModuleFilter2', ['date' => '365']) }}"> Last Year </a> </li>
                            </ul>
                            <form action="{{ route('reportModuleFilter') }}" method="post">
                                @csrf
                                <div class="row row-dates">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">START</label>
                                            <input type="date" name="startDate" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">STOP</label>
                                            <input type="date" name="endDate" class="form-control" />
                                        </div>
                                    </div>
                                </div>

                                <div class="filterFooter">
                                    <button class="btn text-dark closeBtn"
                                        style=" border: none; background: transparent; font-weight: bold; ">
                                        RESET</button>
                                    <button type="submit" class="btn ml-3"
                                        style=" background: #4a4aff; color: #fff; border-radius: 8px; font-weight: bold; ">
                                        SUBMIT
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="row mt-3 g-2">
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="boxInfo">
                                <div class="topInfo">
                                    <div class="vectorBox bg-light-blue">
                                        <img src="{{ asset('assets/images/graph.svg') }}" alt="" />
                                    </div>
                                    <span>PROJECTED INCOME</span>
                                </div>
                                <div class="bottomInfo">
                                    <div class="leftBottom">
                                        <span class="lft1">REVENUE EXPECTED</span><br />
                                        <span class="lft2 text-inter" id="project"><span>&#8358;</span> <span
                                                id="load">{{ number_format($income, 2) }}</span> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="boxInfo text-dark">
                                <div class="topInfo">
                                    <div class="vectorBox2 bg-light-green">
                                        <img src="{{ asset('assets/images/shield.svg') }}" alt="" />
                                    </div>
                                    <span>PAID USERS</span>
                                </div>
                                <div class="bottomInfo">
                                    <div class="leftBottom">
                                        <span class="lft1">ALL PAYMENT EXPECTED</span><br />
                                        <span class="lft2 text-inter text-dark" id="paidUser"><span>&#8358;</span> <span
                                                id="load2">{{ number_format($paid, 2) }}</span> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="boxInfo text-dark">
                                <div class="topInfo">
                                    <div class="vectorBox">
                                        <img src="{{ asset('assets/images/vector.svg') }}" alt="" />
                                    </div>
                                    <span>UNPAID USERS</span>
                                </div>
                                <div class="bottomInfo">
                                    <div class="leftBottom">
                                        <span class="lft1">TOTAL OUTSTANDING PAYMENT</span><br />
                                        <span class="lft2 text-inter text-dark " id="unpaid"> <span>&#8358;</span> <span
                                                id="load3">{{ number_format($unpaid, 2) }}</span> </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="boxInfo light-red">
                                <div class="topInfo">
                                    <div class="vectorBox bg-light-purple">
                                        <img src="{{ asset('assets/images/warning.svg') }}" alt="" />
                                    </div>
                                    <span class="black-text">PAYMENT DEPOT</span>
                                </div>
                                <div class="bottomInfo">
                                    <div class="leftBottom">
                                        <span class="lft1 text-bold black-text">ALL OVERDUE &amp; OUTSTANDING
                                            PAYMENTS</span><br />
                                        <span class="lft2 text-inter" id="depot"> <span>&#8358;</span> <span
                                                id="load4">{{ number_format($depot, 2) }}</span> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- graph -->
                    <div class="graph-section2">
                        <h4 class="header-title">REVENUE BY TREND</h4>

                        <div id="chart" dir="ltr"></div>
                        {{-- <img src="{{ asset('assets/images/stats.svg') }}" alt="" /> --}}
                    </div>
                </div>

                <!-- sub tab -->
                <ul class="sub-tabs pt-2">
                    <li class="list-payment bbd">
                        <a href="all-payments">Payments Recieved</a>
                    </li>
                    <li class="list-due-payment">
                        <a href="due-payments">Due Payments</a>
                    </li>
                    <li class="list-overdue-payment">
                        <a href="overdue-payments">Overdue Payments</a>
                    </li>
                    <li class="list-critical-payment">
                        <a href="critical-payments">Critical Payments</a>
                    </li>
                    <li class="list-color">
                        <a href="code-red">Code Red</a>
                    </li>
                </ul>
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end content -->
    </div>
    {{-- <script>
        $(document).ready(function() {
            $('#load').html(
                '<img src="{{ asset('assets/images/loader.gif') }}" width="25" height="25"/>'
            );
            $('#load2').html(
                '<img src="{{ asset('assets/images/loader.gif') }}" width="25" height="25"/>'
            );
            $('#load3').html(
                '<img src="{{ asset('assets/images/loader.gif') }}" width="25" height="25"/>'
            );
            $('#load4').html(
                '<img src="{{ asset('assets/images/loader.gif') }}" width="25" height="25"/>'
            );

            jQuery(window).on("load", function() {
                console.log("hello word");
                var delay = 2000;
                $.ajax({
                    type: "GET",
                    url: "{{ route('reportModule') }}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]')
                            .attr('content')
                    },
                    beforeSend: function() {
                        // $('#load').html(
                        //     '<img src="{{ asset('assets/images/loader.gif') }}" width="25" height="25"/>'
                        // );
                        // $('#load2').html(
                        //     '<img src="{{ asset('assets/images/loader.gif') }}" width="25" height="25"/>'
                        // );
                        // $('#load3').html(
                        //     '<img src="{{ asset('assets/images/loader.gif') }}" width="25" height="25"/>'
                        // );
                        // $('#load4').html(
                        //     '<img src="{{ asset('assets/images/loader.gif') }}" width="25" height="25"/>'
                        // );
                    },
                    success: function(data) {
                        console.log(data);
                        $('#project').html("<span>&#8358;</span> " + data.income);
                        $('#paidUser').html("<span>&#8358;</span> " + data.paid);
                        $('#unpaid').html("<span>&#8358;</span> " + data.unpaid);
                        $('#depot').html("<span>&#8358;</span> " + data.depot);
                        // setTimeout(function() {
                        //     if (data == 1) {
                        //         $('#pinStatus').html(
                        //             '<div class = "alert alert-success">Success</div>'
                        //         );
                        //         $('#pinChange').text(
                        //             'submit');

                        //     } else if (data == 00) {
                        //         $('#pinStatus').html(
                        //             '<div class = "alert alert-danger">Password Error</div>'
                        //         );
                        //         $('#pinChange').text(
                        //             'submit');
                        //         // console.log(data);
                        //     }
                        // }, delay);

                    },
                    error: function(data) {
                        console.log(
                            data) //===Show Error Message====
                    }
                });

            });

        });
    </script> --}}
@endsection
