@extends('main')
@section('content')
    <title>Zeus | Payout Manager</title>
    <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid m15">
                <!-- text-inter -->
                <div class="top-row">
                    <div>
                        <p class="sectionTitle text-inter pb-0 pl-0">Finance Office</p>
                    </div>
                </div>
                <ul class="sub-tabs">
                    <li class="listFinanceOverview">
                        <a href="finance-office">General Overview</a>
                    </li>
                    <li class="list_finance_transaction">
                        <a href="deposit-module">Deposit Module</a>
                    </li>
                    <li class="list_finance_remittance bbd">
                        <a href="payout-manager">Payout Manager</a>
                    </li>
                </ul>
                <!-- track -->
                <div class="container-fluid mt-3 g-2 finance_remittance_table">
                    <div class="row">
                        <div class="col-sm-6 col-md-12 col-lg-3 mb-2">
                            <div class="row">
                                <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="payment_console blue_shade">
                                        <div class="top_blue sky_shade" id="tb1">
                                            <img src="{{ asset('assets/images/logout.svg') }}" alt="">
                                        </div>
                                        <div class="desc_payment">
                                            <span>Payment Console</span>
                                            <span></span>
                                        </div>
                                        <span>700 new entries pending</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-12">
                                    <div class="payout_requests">
                                        <div class="top_blue sky_shade" id="tb2">
                                            <img src="{{ asset('assets/images/logout.svg') }}" alt="">
                                            {{-- <img src="{{ asset('assets/images/calabash.svg') }}" alt=""> --}}
                                        </div>
                                        <div class="desc_payment">
                                            <span>Payment Console</span>
                                            <span></span>
                                        </div>
                                        <span>700 new entries pending</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-12 col-lg-9 payout_manager_section">
                            <div class="finance_section">
                                <div class="row">
                                    <div class="col-sm-6 col-md-12 col-lg-4">
                                        <div class="row_top_info">
                                            <div class="top3">
                                                <span>Total Disbursed(s)</span>
                                                <span class="arrow_box">
                                                    <img src="{{ asset('assets/images/arrow-up.svg') }}" alt="">
                                                </span>
                                            </div>
                                            <span class="deposit_amount">
                                                ₦345,000,000.00
                                            </span>
                                            <span class="total_info">
                                                Total from 345 entries
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-12 col-lg-4">
                                        <div class="row_top_info">
                                            <div class="top3">
                                                <span>Processing Payment(s)</span>
                                                <span class="arrow_box">
                                                    <img src="{{ asset('assets/images/arrow-down.svg') }}" alt="">
                                                </span>
                                            </div>
                                            <span class="deposit_amount">
                                                ₦345,000,000.00
                                            </span>
                                            <span class="total_info">
                                                Total from 300 entries
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-12 col-lg-4">
                                        <div class="row_top_info">
                                            <div class="top3">
                                                <span>Pending Payment(s)</span>
                                                <span class="arrow_box">
                                                    <img src="{{ asset('assets/images/arrow-down.svg') }}" alt="">
                                                </span>
                                            </div>
                                            <span class="deposit_amount">
                                                ₦45,000,000.00
                                            </span>
                                            <span class="total_info">
                                                Total from 45 entries
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-12 mt-2">
                                    <div class="finance_section">
                                        <div class="card-box table-responsive">
                                            <table id="datatable" class="table table-bordered nowrap"
                                                style=" border-collapse: collapse;  border-spacing: 0; width: 100%;">
                                                <thead class="text-inter">
                                                    <tr>
                                                        <th>
                                                            <input type="checkbox" class="check" />
                                                        </th>
                                                        <th>REFERENCE NO.</th>
                                                        <th>FLEET</th>
                                                        <th>AMOUNT DUE</th>
                                                        <th>STATUS</th>
                                                        <th>DATE</th>
                                                        <th>AGENT</th>
                                                        <th>AMOUNT DISBURSED </th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="check" />
                                                        </td>
                                                        <td>
                                                            RBC123XY
                                                        </td>
                                                        <td>MGA ABUJA</td>
                                                        <td>₦35,000.00</td>
                                                        <td>PENDING</td>
                                                        <td>23 Feb, 2021</td>
                                                        <td>GODWIN ADEJOH</td>
                                                        <td>₦35,000.00</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <div class="iconBox">
                                                                    <i class="icon-options text-dark pt-2 dropdown-toggle"
                                                                        data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Pending</a></li>
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Processing</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Active</a></li>
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Assigned</a></li>
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Suspend</a></li>

                                                                    </ul>

                                                                </div>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="check" />
                                                        </td>
                                                        <td>
                                                            RBC123XY
                                                        </td>
                                                        <td>MGA ABUJA</td>
                                                        <td>₦35,000.00</td>
                                                        <td>PENDING</td>
                                                        <td>23 Feb, 2021</td>
                                                        <td>GODWIN ADEJOH</td>
                                                        <td>₦35,000.00</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <div class="iconBox">
                                                                    <i class="icon-options text-dark pt-2 dropdown-toggle"
                                                                        data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Pending</a></li>
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Processing</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Active</a></li>
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Assigned</a></li>
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Suspend</a></li>

                                                                    </ul>

                                                                </div>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="check" />
                                                        </td>
                                                        <td>
                                                            RBC123XY
                                                        </td>
                                                        <td>MGA ABUJA</td>
                                                        <td>₦35,000.00</td>
                                                        <td>PENDING</td>
                                                        <td>23 Feb, 2021</td>
                                                        <td>GODWIN ADEJOH</td>
                                                        <td>₦35,000.00</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <div class="iconBox">
                                                                    <i class="icon-options text-dark pt-2 dropdown-toggle"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-expanded="false"></i>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Pending</a></li>
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Processing</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Active</a></li>
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Assigned</a></li>
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Suspend</a></li>

                                                                    </ul>

                                                                </div>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="check" />
                                                        </td>
                                                        <td>
                                                            RBC123XY
                                                        </td>
                                                        <td>MGA ABUJA</td>
                                                        <td>₦35,000.00</td>
                                                        <td>PENDING</td>
                                                        <td>23 Feb, 2021</td>
                                                        <td>GODWIN ADEJOH</td>
                                                        <td>₦35,000.00</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <div class="iconBox">
                                                                    <i class="icon-options text-dark pt-2 dropdown-toggle"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-expanded="false"></i>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Pending</a></li>
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Processing</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Active</a></li>
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Assigned</a></li>
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Suspend</a></li>

                                                                    </ul>

                                                                </div>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="check" />
                                                        </td>
                                                        <td>
                                                            RBC123XY
                                                        </td>
                                                        <td>MGA ABUJA</td>
                                                        <td>₦35,000.00</td>
                                                        <td>PENDING</td>
                                                        <td>23 Feb, 2021</td>
                                                        <td>GODWIN ADEJOH</td>
                                                        <td>₦35,000.00</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <div class="iconBox">
                                                                    <i class="icon-options text-dark pt-2 dropdown-toggle"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-expanded="false"></i>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Pending</a></li>
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Processing</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Active</a></li>
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Assigned</a></li>
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Suspend</a></li>

                                                                    </ul>

                                                                </div>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="check" />
                                                        </td>
                                                        <td>
                                                            RBC123XY
                                                        </td>
                                                        <td>MGA ABUJA</td>
                                                        <td>₦35,000.00</td>
                                                        <td>PROCESSING</td>
                                                        <td>23 Feb, 2021</td>
                                                        <td>GODWIN ADEJOH</td>
                                                        <td>₦35,000.00</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <div class="iconBox">
                                                                    <i class="icon-options text-dark pt-2 dropdown-toggle"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-expanded="false"></i>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Pending</a></li>
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Processing</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Active</a></li>
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Assigned</a></li>
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Suspend</a></li>

                                                                    </ul>

                                                                </div>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="check" />
                                                        </td>
                                                        <td>
                                                            RBC123XY
                                                        </td>
                                                        <td>MGA ABUJA</td>
                                                        <td>₦35,000.00</td>
                                                        <td>DISBURSED</td>
                                                        <td>23 Feb, 2021</td>
                                                        <td>GODWIN ADEJOH</td>
                                                        <td>₦35,000.00</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <div class="iconBox">
                                                                    <i class="icon-options text-dark pt-2 dropdown-toggle"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-expanded="false"></i>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Pending</a></li>
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Processing</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Active</a></li>
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Assigned</a></li>
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Suspend</a></li>

                                                                    </ul>

                                                                </div>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-12 col-lg-9 payout_request_section">
                            <div class="finance_section">
                                <div class="row">
                                    <div class="col-sm-6 col-md-12 col-lg-4">
                                        <div class="row_top_info">
                                            <div class="top3">
                                                <span>Total Request(s)</span>
                                                <span class="arrow_box">
                                                    <img src="{{ asset('assets/images/arrow-up.svg') }}" alt="">
                                                </span>
                                            </div>
                                            <span class="deposit_amount">
                                                ₦345,000,000.00
                                            </span>
                                            <span class="total_info">
                                                Total from 345 entries
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-12 col-lg-4">
                                        <div class="row_top_info">
                                            <div class="top3">
                                                <span>Processing Payment(s)</span>
                                                <span class="arrow_box">
                                                    <img src="{{ asset('assets/images/arrow-down.svg') }}" alt="">
                                                </span>
                                            </div>
                                            <span class="deposit_amount">
                                                ₦345,000,000.00
                                            </span>
                                            <span class="total_info">
                                                Total from 300 entries
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-12 col-lg-4">
                                        <div class="row_top_info">
                                            <div class="top3">
                                                <span>Pending Payment(s)</span>
                                                <span class="arrow_box">
                                                    <img src="{{ asset('assets/images/arrow-down.svg') }}" alt="">
                                                </span>
                                            </div>
                                            <span class="deposit_amount">
                                                ₦45,000,000.00
                                            </span>
                                            <span class="total_info">
                                                Total from 45 entries
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-12 mt-2">
                                    <div class="finance_section">
                                        <div class="card-box table-responsive">
                                            <table id="datatable-buttons" class="table table-bordered nowrap"
                                                style=" border-collapse: collapse;  border-spacing: 0; width: 100%;">
                                                <thead class="text-inter">
                                                    <tr>
                                                        <th>
                                                            <input type="checkbox" class="check" />
                                                        </th>
                                                        <th>REFERENCE NO.</th>
                                                        <th>AMOUNT DUE</th>
                                                        <th>ORDER ID</th>
                                                        <th>STATUS</th>
                                                        <th>DATE</th>
                                                        <th>BENEFICIARY </th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="check" />
                                                        </td>
                                                        <td>
                                                            RBC123XY
                                                        </td>
                                                        <td>₦35,000.00</td>
                                                        <td>MGA ABUJA</td>
                                                        <td>PENDING</td>
                                                        <td>23 Feb, 2021</td>
                                                        <td>GODWIN ADEJOH</td>
                                                        <td>
                                                            <button class="payNow">PAY NOW</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="check" />
                                                        </td>
                                                        <td>
                                                            RBC123XY
                                                        </td>
                                                        <td>MGA ABUJA</td>
                                                        <td>₦35,000.00</td>
                                                        <td>PENDING</td>
                                                        <td>23 Feb, 2021</td>
                                                        <td>GODWIN ADEJOH</td>
                                                        <td>
                                                            <button class="payNow">PAY NOW</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="check" />
                                                        </td>
                                                        <td>
                                                            RBC123XY
                                                        </td>
                                                        <td>MGA ABUJA</td>
                                                        <td>₦35,000.00</td>
                                                        <td>PENDING</td>
                                                        <td>23 Feb, 2021</td>
                                                        <td>GODWIN ADEJOH</td>
                                                        <td>
                                                            <button class="payNow">PAY NOW</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="check" />
                                                        </td>
                                                        <td>
                                                            RBC123XY
                                                        </td>
                                                        <td>MGA ABUJA</td>
                                                        <td>₦35,000.00</td>
                                                        <td>PENDING</td>
                                                        <td>23 Feb, 2021</td>
                                                        <td>GODWIN ADEJOH</td>
                                                        <td>
                                                            <button class="payNow">PAY NOW</button>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="check" />
                                                        </td>
                                                        <td>
                                                            RBC123XY
                                                        </td>
                                                        <td>MGA ABUJA</td>
                                                        <td>₦35,000.00</td>
                                                        <td>PENDING</td>
                                                        <td>23 Feb, 2021</td>
                                                        <td>GODWIN ADEJOH</td>
                                                        <td>
                                                            <button class="payNow">PAY NOW</button>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="check" />
                                                        </td>
                                                        <td>
                                                            RBC123XY
                                                        </td>
                                                        <td>MGA ABUJA</td>
                                                        <td>₦35,000.00</td>
                                                        <td>PROCESSING</td>
                                                        <td>23 Feb, 2021</td>
                                                        <td>GODWIN ADEJOH</td>
                                                        <td>
                                                            <button class="payNow">PAY NOW</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="check" />
                                                        </td>
                                                        <td>
                                                            RBC123XY
                                                        </td>
                                                        <td>MGA ABUJA</td>
                                                        <td>₦35,000.00</td>
                                                        <td>DISBURSED</td>
                                                        <td>23 Feb, 2021</td>
                                                        <td>GODWIN ADEJOH</td>
                                                        <td>
                                                            <button class="payNow">PAY NOW</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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

    <script>
        let payment_console = document.querySelector('.payment_console');
        let payout_requests = document.querySelector('.payout_requests');

        let payout_manager_section = document.querySelector('.payout_manager_section');
        let payout_request_section = document.querySelector('.payout_request_section');

        let tb1 = document.querySelector('#tb1');
        let tb2 = document.querySelector('#tb2');


        payment_console.addEventListener('click', () => {
            payment_console.classList.add('blue_shade');
            payout_requests.classList.remove('blue_shade');

            // tb1.classList.add('blue_shade');
            // tb1.classList.remove('sky_shade');
            // tb2.classList.add('sky_shade');
            // tb2.classList.remove('blue_shade');
            payout_manager_section.style.display = 'block';
            payout_request_section.style.display = 'none';
        });
        payout_requests.addEventListener('click', () => {
            // tb2.classList.add('blue_shade');
            // tb2.classList.remove('sky_shade');
            // tb1.classList.remove('blue_shade');
            // tb1.classList.add('sky_shade');
            payment_console.classList.remove('blue_shade');
            payout_requests.classList.add('blue_shade');


            payout_manager_section.style.display = 'none';
            payout_request_section.style.display = 'block';
        });
    </script>
@endsection
