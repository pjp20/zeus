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
                                 (  {{ number_format(count($data) )}} )
                               </span>

                            </p>
                        </div>
                        <div class="filter-calender">
                            <div class="filterIcon">
                                <img src="{{ asset('assets/images/filter.svg') }}" alt="" />
                            </div>
                            <div class="filterCalender">
                                <span>FILTER:<b>CUSTOM RANGE</b></span>
                                <img src="{{ asset('assets/images/calender.png') }}" alt="" />
                            </div>
                        </div>
                    </div>

                    <!-- table -->
                    <div class="row pt-2">
                        <div class="col-12">
                            <div class="card-box table-responsive">
                                <table id="datatable-buttons" class="table table-bordered nowrap"
                                style="
                border-collapse: collapse;
                border-spacing: 0;
                width: 100%;
              ">
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
                                        <th>PAYMENT DATE</th>
                                        <th>LAST PAYMENT DATE</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($data as $item)
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="check" />
                                        </td>
                                        <td>  <a
                                            href="{{ route('userInfo', ['phone' => $item->Vehicle->driverphone, 'plate' => $item->Vehicle->vehno, 'investorphone' => $item->Vehicle->investorphone]) }}">
                                            {{ $item->Vehicle->vehno }}
                                        </a></td>
                                        <td>{{ $item->Vehicle->drivername }}</td>
                                        <td>{{ $item->Vehicle->driverphone }}</td>
                                        <td> GPS </td>
                                        <td><span>&#8358;</span> {{ number_format( $item->needpayment, 2 )}}</td>
                                        <td>{{ $item->Vehicle->bodytypename }}</td>
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
                    <li class="list-color bbd">
                        <a href="code-red">Code Red</a>
                    </li>
                </ul>
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end content -->
    </div>
@endsection
