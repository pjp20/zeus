@extends('main')
@section('content')
    <title>Zeus | Vehicle Profile</title>
    <div class="content-page" style="background: #E5E5E51C; height: 90vh">
        <div class="content card-bg">
            <div class="container-fluid">
                <div class="top-row">
                    <div>
                        <p class="sectionTitle text-inter pb-0 pl-0 ml-3">
                            Operational Data
                        </p>
                    </div>
                </div>
                <ul class="vehicle-top-list border-bottom-0">
                    <li class="active-top-list specBtn">GPS & ANALYTICS</li>
                    <li class="ownerBtn">BASIC INFORMATION</li>
                    <li class="driverBtn">ALERT(S)</li>
                </ul>

                @include('components.operational.gps-section')
                @include('components.operational.basic-info')
                @include('components.operational.alert-section')


            </div>
            <!-- end content -->
        </div>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <script>
            // first section
            let specBtn = document.querySelector('.specBtn');
            let ownerBtn = document.querySelector('.ownerBtn');
            let driverBtn = document.querySelector('.driverBtn');
            let gpsSec = document.querySelector('.gps-section');
            let basicInfoSec = document.querySelector('.basic-info-section');
            let alertSec = document.querySelector('.alert-section');

            specBtn.addEventListener('click', () => {
                specBtn.classList.add('active-top-list');
                driverBtn.classList.remove('active-top-list');
                ownerBtn.classList.remove('active-top-list');
                gpsSec.style.display = 'block';
                basicInfoSec.style.display = 'none';
                alertSec.style.display = 'none';
            })
            ownerBtn.addEventListener('click', () => {
                specBtn.classList.remove('active-top-list');
                driverBtn.classList.remove('active-top-list');
                ownerBtn.classList.add('active-top-list');
                gpsSec.style.display = 'none';
                basicInfoSec.style.display = 'block';
                alertSec.style.display = 'none';
            })
            driverBtn.addEventListener('click', () => {
                specBtn.classList.remove('active-top-list');
                driverBtn.classList.add('active-top-list');
                ownerBtn.classList.remove('active-top-list');
                gpsSec.style.display = 'none';
                basicInfoSec.style.display = 'none';
                alertSec.style.display = 'block';
            })
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
                    ['Move', 'Percentage', {
                        role: 'style'
                    }],
                    ["1", 300, 'color: gray'],
                    ["2", 400, 'color: gray'],
                    ["3", 760, 'color: gray'],
                    ["4", 500, 'color: gray'],
                    ["5", 400, 'color: gray'],
                    ["6", 490, 'color: gray'],
                    ["7", 300, 'color: gray'],
                    ["8", 320, 'color: gray'],
                    ["9", 450, 'color: gray'],
                    ['10', 550, 'color: gray'],
                    ["11", 100, 'color: gray'],
                    ["12", 110, 'color: gray'],
                ]);

                var options = {
                    width: 390,
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
                        groupWidth: "80%"
                    }
                };

                var chart = new google.charts.Bar(document.getElementById('top_x_div'));
                // Convert the Classic options to Material options.
                chart.draw(data, google.charts.Bar.convertOptions(options));
            };
        </script>
    @endsection
