@extends('main')
@section('content')
    <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid mt-10">
                <div class="paymentRecieved">
                    <div class="top-row">
                        <div>
                            <p class="sectionTitle text-inter pb-0 pl-0">
                                <img src="{{ asset('assets/images/arrow-left.svg') }}" alt="" />
                                Report Module / Total Payments
                                <span class="ml-2">
                                    ( <span>&#8358;</span> {{ number_format($totalAmount, 2) }} )
                                </span>
                                / Payment Count
                                <span class="ml-2">
                                    ( {{ number_format(count($data)) }} )
                                </span>

                            </p>
                        </div>
                        <div class="filter-calender reportModuleFilter">
                            <div class="filterIcon">
                                <img src="{{ asset('assets/images/filter.svg') }}" alt="" />
                            </div>
                            <div class="filterCalender">
                                <span>FILTER:<b>CUSTOM RANGE</b></span>
                                <img src="{{ asset('assets/images/calender.png') }}" alt="" />
                            </div>
                        </div>
                        <div class="filterModal">
                            <div class="topFilter">
                                <h3>Super Filter</h3>
                                <span class="closeBtn">X</span>
                            </div>
                            <ul class="filterList">
                                <li> <a href="{{route("code-red")}}">  Default / Live </a></li>
                                <li> <a href="{{route("codeRedFilter2",['date' => "30"])}}"> Past 30 days </a> </li>
                                <li> <a href="{{route("codeRedFilter2",['date' => "90"])}}"> Last 3 months </a> </li>
                                <li> <a href="{{route("codeRedFilter2",['date' => "180"])}}"> Last 6 months </a> </li>
                                <li> <a href="{{route("codeRedFilter2",['date' => "365"])}}"> Last Year </a> </li>


                            </ul>
                            <form action="{{ route('codeRedFilter') }}" method="post">
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
                                        style=" border: none;background: transparent; font-weight: bold; ">
                                        RESET</button>
                                    <button type="submit" class="btn ml-3"
                                        style=" background: #4a4aff; color: #fff; border-radius: 8px; font-weight: bold; ">
                                        SUBMIT
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>

                    <!-- table -->
                    <div class="row pt-2">
                        <div class="col-12">
                            <div class="card-box table-responsive">
                                <table id="datatable-buttons" class="table table-bordered nowrap"
                                    style=" border-collapse: collapse; border-spacing: 0; width: 100%; ">
                                    <thead class="text-inter">
                                        <tr>
                                            <th>
                                                <input type="checkbox" class="check" />
                                            </th>
                                            <th>PLATE NO.</th>
                                            <th>DRIVER NAME</th>
                                            <th>PHONE NO.</th>
                                            <th>GPS STATUS</th>
                                            <th>AMOUNT</th>
                                            <th>FLEET</th>
                                            <th>DUE DATE</th>
                                            <th>LAST PAYMENT DATE</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($data as $item)
                                            <tr>
                                                <td>
                                                    <input type="checkbox" class="check" />
                                                </td>
                                                <td> <a
                                                        href="{{ route('userInfo', ['phone' => $item->driverphone, 'plate' => $item->vehno, 'investorphone' => $item->investorphone]) }}">
                                                        {{ $item->vehno }}
                                                    </a></td>
                                                <td>{{ $item->drivername }}</td>
                                                <td>{{ $item->driverphone }}</td>
                                                <td>
                                                    @if (!empty($item->time))
                                                        {{ \Carbon\Carbon::parse($item->time)->diffForHumans() }}
                                                    @else
                                                        UNKNOW
                                                    @endif
                                                </td>
                                                <td><span>&#8358;</span> {{ number_format($item->needpayment, 2) }}</td>
                                                <td>{{ $item->bodytypename }}</td>
                                                <td>{{ $item->duetime }}</td>
                                                <td>{{ $item->createtime }}</td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- sub tab -->
                <ul class="sub-tabs pt-2">
                    <li class="list-payment">
                        <a href="{{route("all-payments")}}">Payments Recieved</a>
                    </li>
                    <li class="list-due-payment">
                        <a href="{{route("due-payments")}}">Due Payments</a>
                    </li>
                    <li class="list-overdue-payment">
                        <a href="{{route("overdue-payments")}}">Overdue Payments</a>
                    </li>
                    <li class="list-critical-payment">
                        <a href="{{route("critical-payments")}}">Critical Payments</a>
                    </li>
                    <li class="list-color bbd">
                        <a href="{{route("code-red")}}">Code Red</a>
                    </li>
                </ul>
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end content -->
    </div>
@endsection
