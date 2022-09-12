@extends('main')
@section('content')
    <div class="content-page" style="background: #fff;">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid m15">
                <!-- text-inter -->
                {{-- <div class="top-row">
                    <div>
                        <p class="sectionTitle text-inter pb-0 pl-0">
                            Vehicle Management
                        </p>
                    </div>
                    <a href="/add-vehicle" class="addBtn addNew">ADD NEW</a>
                </div> --}}
                <ul class="sub-tabs">
                    <li class="vehicle-list-overview bbd">Overview</li>
                    <li class="vehicle-list-fleet">Fleet Status</li>
                    <li class="vehicle-list-track"> <a href="track-web">Track Web</a> </li>
                </ul>

                <!-- overview -->
                @include('components.vehicle.overview')

                <!-- fleet -->
            @include('components.vehicle.fleet')

                <!-- track -->
                <div class="container-fluid mt-3 g-2 track_section">
                    {{-- <div class="track-map">
                    <img src="{{ asset('assets/images/big-graph.png') }}" alt="">
                </div> --}}
                    <div class="main-track-section">
                        <div class="left-track-cord"></div>
                        <div class="right-track-map"></div>
                        <!-- track -->
                        <div class="container-fluid mt-3 g-2 track_section">
                            <div class="track-map">
                                <img src="{{ asset('assets/images/big-graph.png') }}" alt="">
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
                        ['Active Accounts', 11],
                        ['In-Active Accounts', 2],
                    ]);

                    var options = {
                        // title: 'Maintenance Summary',
                        pieHole: 0.6,
                        colors: ['#FFAC32', '#ffac75']
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
                g
                google.charts.load('current', {
                    'packages': ['bar']
                });
                google.charts.setOnLoadCallback(drawStuff);

                function drawStuff() {
                    var data = new google.visualization.arrayToDataTable([
                        ['Move', 'Percentage', {
                            role: 'style'
                        }],
                        ["1", 300, 'color: gray'],
                        ["2", 400, 'color: gray'],
                        ["3", 760, 'color: gray'],
                        ["4", 500, 'color: gray'],
                        ["5", 400, 'color: gray'],
                        ["6", 790, 'color: gray'],
                        ["7", 300, 'color: gray'],
                        ["8", 320, 'color: gray'],
                        ["9", 450, 'color: gray'],
                        ['10', 550, 'color: gray'],
                        ["11", 100, 'color: gray'],
                        ["12", 810, 'color: gray'],
                    ]);

                    var options = {
                        width: 800,
                        legend: {
                            position: 'none'
                        },
                        chart: {
                            title: 'Fleet Trend',
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
        @endsection
