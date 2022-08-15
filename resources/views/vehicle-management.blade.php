@extends('main')
@section('content')
    <div class="content-page" style="background: #fff;">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid m15">
                <!-- text-inter -->
                <div class="top-row">
                    <div>
                        <p class="sectionTitle text-inter pb-0 pl-0">
                            Vehicle Management
                        </p>
                    </div>
                    <a href="/add-vehicle" class="addBtn addNew">ADD NEW</a>
                </div>
                <ul class="sub-tabs">
                    <li class="vehicle-list-overview bbd">Overview</li>
                    <li class="vehicle-list-fleet">Fleet Status</li>
                    <li class="vehicle-list-track">
                        <a href="track-web">Track Web</a>
                    </li>
                </ul>

                <!-- overview -->
                <div class="overview_section">
                    <div class="row mt-3 g-2">
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
                                        <span class="lft1">TOTAL VEHICLE(S)</span><br />
                                        <span class="lft2 text-inter">{{ count($allVehicle) }}</span>
                                    </div>
                                    <span
                                        class=" rightBottom bg-light-red
                      red-text
                      font-weight-bold
                    ">
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
                                        <img src="{{ asset('assets/images/vector.png') }}" alt="" />
                                    </div>
                                    <i class="bx bx-dots-vertical-rounded adjust"></i>
                                </div>
                                <div class="bottomInfo">
                                    <div class="leftBottom">
                                        <span class="lft1">ASSIGNED VEHICLE(S)</span><br />
                                        <span
                                            class="lft2 text-inter">{{ number_format(count($allVehicle) - $noDriver) }}</span>
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
                        <div class="col-sm-6 col-md-12 col-lg-4">
                            <div class="boxInfo">
                                <div class="topInfo">
                                    <div class="vectorBox">
                                        <img src="{{ asset('assets/images/vector.png') }}" alt="" />
                                    </div>
                                    <i class="bx bx-dots-vertical-rounded adjust"></i>
                                </div>
                                <div class="bottomInfo">
                                    <div class="leftBottom">
                                        <span class="lft1">UNASSIGNED VEHICLE(S)</span><br />
                                        <span class="lft2 text-inter">{{ number_format($noDriver) }}</span>
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
                    </div>

                    <div class="row mt-3 g-2">
                        <div class="col-sm-6 col-md-12 col-lg-8 mb-3">
                            <div class="graph-section">
                                <h4 class="header-title text-inter font-weight-bolder">
                                    Analysis by Location
                                </h4>
                                <canvas id="myChart"></canvas>
                                {{-- <img src="{{ asset('assets/images/bars.svg') }}" alt=""> --}}
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-12 col-lg-4">
                            <div class="map-sec">
                                <img src="{{ asset('assets/images/map.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- fleet -->
                <div class="fleet_section">
                    <div class="row mt-3 g-2">
                        <div class="col-sm-6 col-md-12 col-lg-3">
                            <div class="boxInfo bg-orange text-light">
                                <div class="topInfo">
                                    <div class="vectorBox bg-red">
                                        <img src="{{ asset('assets/images/white-vector.png') }}" alt="" />
                                    </div>
                                </div>
                                <div class="bottomInfo">
                                    <div class="leftBottom text-light">
                                        <span class="lft1 text-light">OFFLINE DEVICE(S)</span><br />
                                        <span
                                            class="lft2 text-inter text-light">{{ count($allVehicle) - $onlineDevice }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-12 col-lg-3">
                            <div class="boxInfo">
                                <div class="topInfo">
                                    <div class="vectorBox">
                                        <img src="{{ asset('assets/images/vector.png') }}" alt="" />
                                    </div>
                                    <i class="bx bx-dots-vertical-rounded adjust"></i>
                                </div>
                                <div class="bottomInfo">
                                    <div class="leftBottom">
                                        <span class="lft1">ONLINE DEVICE(S)</span><br />
                                        <span class="lft2 text-inter">{{ $onlineDevice }}</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-12 col-lg-3">
                            <div class="boxInfo">
                                <div class="topInfo">
                                    <div class="vectorBox">
                                        <img src="{{ asset('assets/images/vector.png') }}" alt="" />
                                    </div>
                                    <i class="bx bx-dots-vertical-rounded adjust"></i>
                                </div>
                                <div class="bottomInfo">
                                    <div class="leftBottom">
                                        <span class="lft1">MAINTENANCE OVERDUE</span><br />
                                        <span class="lft2 text-inter">23</span>
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
                        <div class="col-sm-6 col-md-12 col-lg-3">
                            <div class="boxInfo">
                                <div class="topInfo">
                                    <div class="vectorBox">
                                        <img src="{{ asset('assets/images/vector.png') }}" alt="" />
                                    </div>
                                    <i class="bx bx-dots-vertical-rounded adjust"></i>
                                </div>
                                <div class="bottomInfo">
                                    <div class="leftBottom">
                                        <span class="lft1">TOTAL MILEAGE</span><br />
                                        <span class="lft2 text-inter">{{ number_format($totalMiles / 1000) }}Km</span>
                                    </div>
                                    <span class=" rightBottom bg-light-red red-text font-weight-bold ">
                                        <i class="bx bx-down-arrow-alt"></i>
                                        <span>22.5%</span> <span>APRIL</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- table -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card-box table-responsive">
                                <table id="datatable-buttons" class="table table-bordered nowrap"
                                    style=" border-collapse: collapse;  border-spacing: 0;
                    width: 100%;
                  ">
                                    <thead class="text-inter">
                                        <tr>
                                            <th>
                                                <input type="checkbox" class="check" />
                                            </th>
                                            <th>PLATE NO.</th>
                                            <th>TYPE</th>
                                            <th>GPS STATUS</th>
                                            <th>MILEAGE</th>
                                            <th>RATING</th>
                                            <th>PACKAGE</th>
                                            <th>CREDIT RATING</th>
                                            <th>DATE CREATED</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="check" />
                                            </td>
                                            <td>
                                                <a href="vehicle-information">1</a>
                                            </td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                            <td>6</td>
                                            <td>7</td>
                                            <td>8</td>
                                            <td>
                                                <div class="iconBox">
                                                    <i class="icon-options text-dark pt-2"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="check" />
                                            </td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                            <td>6</td>
                                            <td>7</td>
                                            <td>8</td>
                                            <td>
                                                <div class="iconBox">
                                                    {{-- <div class="iconBox">
                                                        <Dropdown trigger="click" class="pt-2">
                                                            <a href="javascript:void(0)">
                                                                <i class="icon-options text-dark pt-2"></i>
                                                            </a>
                                                            <DropdownMenu slot="list">
                                                                <DropdownItem>
                                                                    <span>Process</span>
                                                                </DropdownItem>
                                                                <DropdownItem>
                                                                    <span>Active</span>
                                                                </DropdownItem>
                                                                <DropdownItem>
                                                                    <span>Deactivate</span>
                                                                </DropdownItem>
                                                            </DropdownMenu>
                                                        </Dropdown> --}}
                                                </div>
                                        @foreach ($status as $item)
                                            <tr>
                                                <td>
                                                    <input type="checkbox" class="check" />
                                                </td>
                                                <td>{{ $item->vehno }}</td>
                                                <td>{{ $item->fleet }}</td>
                                                <td>
                                                    {{-- @if ($item->Dtstatus == 1)
                                                        <h6 class="text-success text">ONLINE</h6>
                                                    @else
                                                        <h6 class="text-warning text">OFFLINE</h6>
                                                    @endif --}}
                                                    @if (!empty($item->time))
                                                        {{ \Carbon\Carbon::parse($item->time)->diffForHumans() }}
                                                    @else
                                                        UNKNOW
                                                    @endif
                                                </td>
                                                <td>{{ number_format($item->miles / 1000) }} KM</td>
                                                <td>{{ $item->miles }}</td>
                                                <td>2</td>
                                                <td>3</td>
                                                <td>{{ $item->createtime }}</td>


                                                <td>
                                                    <div class="iconBox">
                                                        <i class="icon-options text-dark pt-2"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


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

    <script>
        const ctx = document.getElementById("myChart").getContext("2d");
        const myChart = new Chart(ctx, {
            type: "bar",
            data: {
                labels: ["Abuja", "Portharcort", "Benin", "Lagos"],
                datasets: [{
                    label: "Locations",
                    data: [19, 1, 2, 3],
                    backgroundColor: "#56CCF2",
                }, ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    </script>
@endsection
