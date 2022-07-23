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
                                <table id="datatable-buttons" class="table table-bordered nowrap" style=" border-collapse: collapse; border-spacing: 0;                     width: 100%;">
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
                                            <th>DATE</th>
                                            <th>DESCRIPTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            {{-- {{dd($data)}} --}}

                                        @foreach ($data as $item)
                                            <tr>
                                                <td> <input type="checkbox" class="check" /></td>
                                                <td>
                                                    {{-- <a
                                                        href="{{ route('userInfo', ['phone' => $item->driverPhone,
                                                        'plate' => $item->vehiclePlateNo, 'investorphone' => $item->driverPhone]) }}">
                                                        {{ $item->vehiclePlateNo }}
                                                    </a> --}}

                                                    <a href="" data-toggle="modal" data-target="#modelId">
                                                        {{ $item->vehiclePlateNo }}
                                                    </a>

                                                </td>
                                                <td>{{ $item->driverName }}</td>
                                                <td>{{ $item->driverPhone }}</td>
                                                <td>ONLINE</td>
                                                <td><span>&#8358;</span> {{ number_format($item->amount,2) }}</td>
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


                <!-- Modal -->
                <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body">
                                Body
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save</button>
                            </div>
                        </div>
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
@endsection
