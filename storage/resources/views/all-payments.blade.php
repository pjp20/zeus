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
                                <li> <a href="{{ route('all-payments') }}"> Default / Live </a></li>
                                <li> <a href="{{ route('allPaymentFilter2', ['date' => '7']) }}"> Last Week </a> </li>
                                <li> <a href="{{ route('allPaymentFilter2', ['date' => '30']) }}"> Past 30 days </a> </li>
                                <li> <a href="{{ route('allPaymentFilter2', ['date' => '90']) }}"> Last 3 months </a> </li>
                                <li> <a href="{{ route('allPaymentFilter2', ['date' => '180']) }}"> Last 6 months </a> </li>
                                <li> <a href="{{ route('allPaymentFilter2', ['date' => '365']) }}"> Last Year </a> </li>


                            </ul>
                            <form action="{{ route('allPaymentFilter') }}" method="post">
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
                                <table id="datatable-buttons"
                                    class="table table-bordered nowrap"style=" border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                                            <th>TRANS ID</th>
                                            <th>PAYMENT DATE</th>
                                            <th>DESCRIPTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- {{dd($data)}} --}}

                                        @foreach ($data as $item)
                                            <tr>
                                                <td> <input type="checkbox" class="check" /></td>
                                                <td>
                                                    <a href="" data-toggle="modal" data-bs-toggle="modal"
                                                        data-bs-target="#allPayment">
                                                        {{ $item->vehiclePlateNo }}
                                                    </a>
                                                </td>
                                                <td>{{ $item->driverName }}</td>
                                                <td>{{ $item->driverPhone }}</td>
                                                <td>
                                                    @if (!empty($item->time))
                                                        {{ \Carbon\Carbon::parse($item->time)->diffForHumans() }}
                                                    @else
                                                        UNKNOW
                                                    @endif
                                                </td>
                                                <td><span>&#8358;</span> {{ number_format($item->amount, 2) }}</td>
                                                <td>{{ $item->reference }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>{{ $item->note }}</td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- modal --}}
                <div class="modal fade" id="allPayment" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" style="width: 400px">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">TRANSACTION DETAILS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="everyInfo">
                                    <p class="info-text-top">
                                        Generated from MotorAfrica on 12-09-2022 12:49:37
                                    </p>
                                    <div class="formSec container-fluid"
                                        style="background: #fafafa; border-radius: 6px; height: auto">
                                        <div>
                                            <div class="row mb-3">
                                                <div class="col-6 side1">Date:</div>
                                                <div class="col-6 side2">30 Sep, 2021</div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-6 side1">Amount</div>
                                                <div class="col-6 side2">N1,500.00</div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-6 side1">Fleet:</div>
                                                <div class="col-6 side2">MyGarage</div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-6 side1">Package:</div>
                                                <div class="col-6 side2">Hire Purchase</div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-6 side1">Workshop:</div>
                                                <div class="col-6 side2">AutoChek Lugbe Centre</div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-6 side1">Commission:</div>
                                                <div class="col-6 side2">4%</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 side1">Reference:</div>
                                                <div class="col-6 side2">3456WTY</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer footer-row">
                                <button type="button" class="btn w-100 modalWideBtn" style=" ">SHARE</button>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- sub tab -->
                <ul class="sub-tabs pt-2">
                    <li class="list-payment bbd">
                        <a href="{{ route('all-payments') }}">Payments Recieved</a>
                    </li>
                    <li class="list-due-payment">
                        <a href="{{ route('due-payments') }}">Due Payments</a>
                    </li>
                    <li class="list-overdue-payment">
                        <a href="{{ route('overdue-payments') }}">Overdue Payments</a>
                    </li>
                    <li class="list-critical-payment">
                        <a href="{{ route('critical-payments') }}">Critical Payments</a>
                    </li>
                    <li class="list-color">
                        <a href="{{ route('code-red') }}">Code Red</a>
                    </li>
                </ul>
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end content -->
    </div>
@endsection
