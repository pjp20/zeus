<!-- fleet -->
<div class="fleet_section">
    {{-- <div class="row mt-3 g-2">
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
                        <span class="lft2 text-inter text-light">{{ count($allVehicle) - $onlineDevice }}</span>
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
                    <span class="
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
    </div> --}}

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
                            <th>PACKAGE</th>
                            <th>GPS STATUS</th>
                            <th>LAST UPDATED</th>
                            <th>TODAY MILEAGE</th>
                            <th>RATING</th>
                            <th>TYPE</th>

                            <th>DATE CREATED</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($status as $item)
                        <tr>
                                <td>
                                    <input type="checkbox" class="check" />
                                </td>
                                <td><a href="{{ route('operational', ['plate' => $item->vehno]) }}">{{ $item->vehno }}</a>
                                </td>
                                <td>{{ $item->fleet }}</td>
                                <td>
                                    @if ($item->offlineStatus == 'Offline')
                                        <button class="btn btn-danger">Offline</button>
                                    @else
                                        <button class="btn btn-success">Online</button>
                                    @endif
                                </td>
                                <td>{{ $item->time }}</td>

                                <td>{{ number_format($item->todayMiles / 1000) }} KM</td>
                                <td>{{ $item->miles }}</td>

                                <td>3</td>
                                <td>{{ \Carbon\Carbon::parse($item->createtime)->format('Y-m-d') }}</td>



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



{{-- <div class="fleet_section">
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
                    <span class="rightBottom  bg-light-red  red-text font-weight-bold">
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
                    style=" border-collapse: collapse;  border-spacing: 0; width: 100%;">
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

                                </div>
                                @foreach ($status as $item)
                        <tr>
                            <td>
                                <input type="checkbox" class="check" />
                            </td>
                            <td>{{ $item->vehno }}</td>
                            <td>{{ $item->fleet }}</td>
                            <td>

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
</div> --}}
