@extends('main')
@section('content')
    <title>Zeus | Deposit Module</title>
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
                    <li class="listFinanceOverview ">
                        <a href="finance-office">General Overview</a>
                    </li>
                    <li class="list_finance_transaction bbd">
                        <a href="deposit-module">Deposit Module</a>
                    </li>
                    <li class="list_finance_remittance">
                        <a href="payout-manager">
                            Payout Manager
                        </a>
                    </li>
                </ul>
                <!-- fleet -->
                <div class="finance_transaction_table">
                    {{-- first section --}}
                    <div class="row index_finance_transaction_section">
                        <div class="col-sm-6 col-md-12 col-lg-3 mb-2">
                            <div class="finance_section">
                                <span class="top-text">Deposit by category</span>
                                <div class="chart_total_deposit mb-3 mt-3">

                                </div>
                                <span class="top-text mt-3">
                                    Deposit Details
                                </span>
                                <div class="notice_section">
                                    <div class="deposit_details_info">
                                        <div class="single_deposit_detail sd1">
                                            <span class="notice notice_pink"></span>
                                            <span class="notice_desc">General Remittance</span>
                                            <span class="notice_amount">N30,000,000.00</span>
                                        </div>
                                    </div>
                                    <div class="deposit_details_info">
                                        <div class="single_deposit_detail sd2">
                                            <span class="notice notice_pink_200"></span>
                                            <span class="notice_desc">Maintenance Contr.</span>
                                            <span class="notice_amount">N30,000,000.00</span>
                                        </div>
                                    </div>
                                    <div class="deposit_details_info">
                                        <div class="single_deposit_detail sd3">
                                            <span class="notice notice_purple"></span>
                                            <span class="notice_desc">Platform Commission</span>
                                            <span class="notice_amount">N30,000,000.00</span>
                                        </div>
                                    </div>
                                    <div class="deposit_details_info">
                                        <div class="single_deposit_detail sd4">
                                            <span class="notice notice_purple_200"></span>
                                            <span class="notice_desc">Union Due/Fees</span>
                                            <span class="notice_amount">N30,000,000.00</span>
                                        </div>
                                    </div>
                                    <div class="deposit_details_info">
                                        <div class="single_deposit_detail sd5">
                                            <span class="notice notice_blue"></span>
                                            <span class="notice_desc">Softpurse Repayment</span>
                                            <span class="notice_amount">N30,000,000.00</span>
                                        </div>
                                    </div>
                                    <div class="deposit_details_info">
                                        <div class="single_deposit_detail sd6">
                                            <span class="notice notice_light_blue"></span>
                                            <span class="notice_desc">Agent Commission</span>
                                            <span class="notice_amount">N30,000,000.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-12 col-lg-9">
                            <div class="row">
                                <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="finance_section">
                                        <div class="chart_deposit_statistics"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-12">
                                    <div class="finance_section">
                                        <div class="card-box table-responsive">
                                            <table id="datatable" class="table table-bordered nowrap"
                                                style=" border-collapse: collapse;  border-spacing: 0; width: 100%;">
                                                <thead class="text-inter">
                                                    <tr>
                                                        <th>
                                                            <input type="checkbox" class="check" />
                                                        </th>
                                                        <th>PLATE NO.</th>
                                                        <th>DRIVER NAME</th>
                                                        <th>FLEET</th>
                                                        <th>AMOUNT</th>
                                                        <th>REFERENCE</th>
                                                        <th>DATE</th>
                                                        <th>REASON </th>
                                                        <th>STATUS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-bs-toggle="modal" data-bs-target="#singleRecord">
                                                        <td>
                                                            <input type="checkbox" class="check" />
                                                        </td>
                                                        <td>
                                                            RBC123XY
                                                        </td>
                                                        <td>dEMAJI BANKOLE</td>
                                                        <td>BREKETE, NG</td>
                                                        <td>₦35,000.00</td>
                                                        <td>DX23RM345</td>
                                                        <td>23 Feb, 2021</td>
                                                        <td>Remittance</td>
                                                        <td>SUCCESS</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="check" />
                                                        </td>
                                                        <td>
                                                            RBC123XY
                                                        </td>
                                                        <td>dEMAJI BANKOLE</td>
                                                        <td>BREKETE, NG</td>
                                                        <td>₦35,000.00</td>
                                                        <td>DX23RM345</td>
                                                        <td>23 Feb, 2021</td>
                                                        <td>Remittance</td>
                                                        <td>SUCCESS</td>
                                                    </tr>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="singleRecord" tabindex="-1"
                                                        aria-labelledby="singleRecordLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header"
                                                                    style="background: #F5F5F5; padding: 30px;">
                                                                    <div class="d-flex align-items-center modal-title"
                                                                        id="singleRecordLabel">
                                                                        <img src="{{ asset('assets/images/logo.jpeg') }}"
                                                                            alt="" width="50" height="50">
                                                                        <div class="ml-2">
                                                                            <span class="titleModal">Zeus Systems</span>
                                                                            <span class="font-weight-bold">Transaction
                                                                                Details</span>
                                                                        </div>
                                                                    </div>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="modalInfo">
                                                                        <span>Trans ID:</span>
                                                                        <span>#1234WSD</span>
                                                                    </div>
                                                                    <div class="modalInfo">
                                                                        <span>Date:</span>
                                                                        <span>23 Feb, 2021 - 05:35PM</span>
                                                                    </div>
                                                                    <div class="modalInfo">
                                                                        <span>Channel:</span>
                                                                        <span>USSD</span>
                                                                    </div>
                                                                    <div class="modalInfo">
                                                                        <span>Amount:</span>
                                                                        <span>₦25,450.00</span>
                                                                    </div>
                                                                    <div class="modalInfo">
                                                                        <span>Description:</span>
                                                                        <span>CR: Transfer from Seun Akinlola</span>
                                                                    </div>
                                                                    <div class="modalInfo">
                                                                        <span>Platform Commission:</span>
                                                                        <span>₦450.00</span>
                                                                    </div>
                                                                    <div class="modalInfo">
                                                                        <span>Status:</span>
                                                                        <span class="text-success">Successful</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- general remittance --}}
                    <div class="row general_remittance_section">
                        <div class="col-sm-6 col-md-12 col-lg-3 mb-2">
                            <div class="finance_section">
                                <span class="top-text"> <img class="mr-1" onclick="returnIndex()"
                                        src="{{ asset('assets/images/arrow-left.svg') }}" class=""
                                        alt="" />General
                                    Remmittance</span>
                                <div class="chart_total_deposit mb-3 mt-3">

                                </div>
                                <span class="top-text mt-3">
                                    Deposit by Trend
                                </span>
                                {{-- <span class="filter_date_remittance"></span> --}}
                                <div class="notice_section">
                                    <img src="{{ asset('assets/images/side_bar.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-12 col-lg-9">
                            <div class="finance_section">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4">
                                        <div class="row_top_info">
                                            <div class="top3">
                                                <span>Project Payment(s)</span>
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
                                    <div class="col-sm-6 col-md-4">
                                        <div class="row_top_info">
                                            <div class="top3">
                                                <span>Paid Users</span>
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
                                    <div class="col-sm-6 col-md-4">
                                        <div class="row_top_info">
                                            <div class="top3">
                                                <span>Pending User(s)</span>
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
                                                        <th>PLATE NO.</th>
                                                        <th>DRIVER NAME</th>
                                                        <th>FLEET</th>
                                                        <th>AMOUNT</th>
                                                        <th>REFERENCE</th>
                                                        <th>DATE</th>
                                                        <th>REASON </th>
                                                        <th>STATUS</th>
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
                                                        <td>dEMAJI BANKOLE</td>
                                                        <td>BREKETE, NG</td>
                                                        <td>₦35,000.00</td>
                                                        <td>DX23RM345</td>
                                                        <td>23 Feb, 2021</td>
                                                        <td>Remittance</td>
                                                        <td>SUCCESS</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="check" />
                                                        </td>
                                                        <td>
                                                            RBC123XY
                                                        </td>
                                                        <td>dEMAJI BANKOLE</td>
                                                        <td>BREKETE, NG</td>
                                                        <td>₦35,000.00</td>
                                                        <td>DX23RM345</td>
                                                        <td>23 Feb, 2021</td>
                                                        <td>Remittance</td>
                                                        <td>SUCCESS</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- maintenance commission --}}
                    <div class="row maintenance_contribution_section">
                        <div class="col-sm-6 col-md-12 col-lg-3 mb-2">
                            <div class="finance_section">
                                <span class="top-text"> <img class="mr-1" onclick="returnIndex()"
                                        src="{{ asset('assets/images/arrow-left.svg') }}" class=""
                                        alt="" />Maintenance
                                    Contr.</span>
                                <div class="chart_total_deposit mb-3 mt-3">

                                </div>
                                <span class="top-text mt-3">
                                    Deposit by Trend
                                </span>
                                {{-- <span class="filter_date_remittance"></span> --}}
                                <div class="notice_section">
                                    <img src="{{ asset('assets/images/side_bar.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-12 col-lg-9">
                            <div class="finance_section">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4">
                                        <div class="row_top_info">
                                            <div class="top3">
                                                <span>Project Payment(s)</span>
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
                                    <div class="col-sm-6 col-md-4">
                                        <div class="row_top_info">
                                            <div class="top3">
                                                <span>Paid Users</span>
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
                                    <div class="col-sm-6 col-md-4">
                                        <div class="row_top_info">
                                            <div class="top3">
                                                <span>Pending User(s)</span>
                                                <span class="arrow_box">
                                                    <img src="{{ asset('assets/images/arrow-down.svg') }}"
                                                        alt="">
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
                                                        <th>PLATE NO.</th>
                                                        <th>DRIVER NAME</th>
                                                        <th>FLEET</th>
                                                        <th>AMOUNT</th>
                                                        <th>REFERENCE</th>
                                                        <th>DATE</th>
                                                        <th>REASON </th>
                                                        <th>STATUS</th>
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
                                                        <td>dEMAJI BANKOLE</td>
                                                        <td>BREKETE, NG</td>
                                                        <td>₦35,000.00</td>
                                                        <td>DX23RM345</td>
                                                        <td>23 Feb, 2021</td>
                                                        <td>Remittance</td>
                                                        <td>SUCCESS</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="check" />
                                                        </td>
                                                        <td>
                                                            RBC123XY
                                                        </td>
                                                        <td>dEMAJI BANKOLE</td>
                                                        <td>BREKETE, NG</td>
                                                        <td>₦35,000.00</td>
                                                        <td>DX23RM345</td>
                                                        <td>23 Feb, 2021</td>
                                                        <td>Remittance</td>
                                                        <td>SUCCESS</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- platform commission --}}
                    <div class="row platform_contribution_section">
                        <div class="col-sm-6 col-md-12 col-lg-3 mb-2">
                            <div class="finance_section">
                                <span class="top-text"> <img class="mr-1" onclick="returnIndex()"
                                        src="{{ asset('assets/images/arrow-left.svg') }}" class=""
                                        alt="" />Platform
                                    Commission.</span>
                                <div class="chart_total_deposit mb-3 mt-3">

                                </div>
                                <span class="top-text mt-3">
                                    Deposit by Trend
                                </span>
                                {{-- <span class="filter_date_remittance"></span> --}}
                                <div class="notice_section">
                                    <img src="{{ asset('assets/images/side_bar.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-12 col-lg-9">
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
                                                        <th>PLATE NO.</th>
                                                        <th>DRIVER NAME</th>
                                                        <th>FLEET</th>
                                                        <th>AMOUNT</th>
                                                        <th>REFERENCE</th>
                                                        <th>DATE</th>
                                                        <th>REASON </th>
                                                        <th>STATUS</th>
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
                                                        <td>dEMAJI BANKOLE</td>
                                                        <td>BREKETE, NG</td>
                                                        <td>₦35,000.00</td>
                                                        <td>DX23RM345</td>
                                                        <td>23 Feb, 2021</td>
                                                        <td>Remittance</td>
                                                        <td>SUCCESS</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="check" />
                                                        </td>
                                                        <td>
                                                            RBC123XY
                                                        </td>
                                                        <td>dEMAJI BANKOLE</td>
                                                        <td>BREKETE, NG</td>
                                                        <td>₦35,000.00</td>
                                                        <td>DX23RM345</td>
                                                        <td>23 Feb, 2021</td>
                                                        <td>Remittance</td>
                                                        <td>SUCCESS</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- union due fees --}}
                    <div class="row union_contribution_section">
                        <div class="col-sm-6 col-md-12 col-lg-3 mb-2">
                            <div class="finance_section">
                                <span class="top-text"> <img class="mr-1" onclick="returnIndex()"
                                        src="{{ asset('assets/images/arrow-left.svg') }}" class=""
                                        alt="" />Union
                                    Due/Fees.</span>
                                <div class="chart_total_deposit mb-3 mt-3">

                                </div>
                                <span class="top-text mt-3">
                                    Deposit by Trend
                                </span>
                                {{-- <span class="filter_date_remittance"></span> --}}
                                <div class="notice_section">
                                    <img src="{{ asset('assets/images/side_bar.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-12 col-lg-9">
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
                                                        <th>PLATE NO.</th>
                                                        <th>DRIVER NAME</th>
                                                        <th>FLEET</th>
                                                        <th>AMOUNT</th>
                                                        <th>REFERENCE</th>
                                                        <th>DATE</th>
                                                        <th>REASON </th>
                                                        <th>STATUS</th>
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
                                                        <td>dEMAJI BANKOLE</td>
                                                        <td>BREKETE, NG</td>
                                                        <td>₦35,000.00</td>
                                                        <td>DX23RM345</td>
                                                        <td>23 Feb, 2021</td>
                                                        <td>Remittance</td>
                                                        <td>SUCCESS</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="check" />
                                                        </td>
                                                        <td>
                                                            RBC123XY
                                                        </td>
                                                        <td>dEMAJI BANKOLE</td>
                                                        <td>BREKETE, NG</td>
                                                        <td>₦35,000.00</td>
                                                        <td>DX23RM345</td>
                                                        <td>23 Feb, 2021</td>
                                                        <td>Remittance</td>
                                                        <td>SUCCESS</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- softpurse repayment --}}
                    <div class="row softpurse_contribution_section">
                        <div class="col-sm-6 col-md-12 col-lg-3 mb-2">
                            <div class="finance_section">
                                <span class="top-text"> <img class="mr-1" onclick="returnIndex()"
                                        src="{{ asset('assets/images/arrow-left.svg') }}" class=""
                                        alt="" />Softpurse
                                    Repayment</span>
                                <div class="chart_total_deposit mb-3 mt-3">

                                </div>
                                <span class="top-text mt-3">
                                    Deposit by Trend
                                </span>
                                {{-- <span class="filter_date_remittance"></span> --}}
                                <div class="notice_section">
                                    <img src="{{ asset('assets/images/side_bar.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-12 col-lg-9">
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
                                                        <th>PLATE NO.</th>
                                                        <th>DRIVER NAME</th>
                                                        <th>FLEET</th>
                                                        <th>AMOUNT</th>
                                                        <th>REFERENCE</th>
                                                        <th>DATE</th>
                                                        <th>REASON </th>
                                                        <th>STATUS</th>
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
                                                        <td>dEMAJI BANKOLE</td>
                                                        <td>BREKETE, NG</td>
                                                        <td>₦35,000.00</td>
                                                        <td>DX23RM345</td>
                                                        <td>23 Feb, 2021</td>
                                                        <td>Remittance</td>
                                                        <td>SUCCESS</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="check" />
                                                        </td>
                                                        <td>
                                                            RBC123XY
                                                        </td>
                                                        <td>dEMAJI BANKOLE</td>
                                                        <td>BREKETE, NG</td>
                                                        <td>₦35,000.00</td>
                                                        <td>DX23RM345</td>
                                                        <td>23 Feb, 2021</td>
                                                        <td>Remittance</td>
                                                        <td>SUCCESS</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-- agent commission --}}
                    <div class="row agent_commission_section">
                        <div class="col-sm-6 col-md-12 col-lg-3 mb-2">
                            <div class="finance_section">
                                <span class="top-text"> <img class="mr-1" onclick="returnIndex()"
                                        src="{{ asset('assets/images/arrow-left.svg') }}" alt="" />Agent
                                    Commission</span>
                                <div class="chart_total_deposit mb-3 mt-3">

                                </div>
                                <span class="top-text mt-3">
                                    Deposit by Trend
                                </span>
                                {{-- <span class="filter_date_remittance"></span> --}}
                                <div class="notice_section">
                                    <img src="{{ asset('assets/images/side_bar.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-12 col-lg-9">
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
                                                        <th>PLATE NO.</th>
                                                        <th>DRIVER NAME</th>
                                                        <th>FLEET</th>
                                                        <th>AMOUNT</th>
                                                        <th>REFERENCE</th>
                                                        <th>DATE</th>
                                                        <th>REASON </th>
                                                        <th>STATUS</th>
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
                                                        <td>dEMAJI BANKOLE</td>
                                                        <td>BREKETE, NG</td>
                                                        <td>₦35,000.00</td>
                                                        <td>DX23RM345</td>
                                                        <td>23 Feb, 2021</td>
                                                        <td>Remittance</td>
                                                        <td>SUCCESS</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="check" />
                                                        </td>
                                                        <td>
                                                            RBC123XY
                                                        </td>
                                                        <td>dEMAJI BANKOLE</td>
                                                        <td>BREKETE, NG</td>
                                                        <td>₦35,000.00</td>
                                                        <td>DX23RM345</td>
                                                        <td>23 Feb, 2021</td>
                                                        <td>Remittance</td>
                                                        <td>SUCCESS</td>
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
        let index_finance_transaction_section = document.querySelector('.index_finance_transaction_section');
        let general_remittance_section = document.querySelector('.general_remittance_section');
        let maintenance_contribution_section = document.querySelector('.maintenance_contribution_section');
        let platform_contribution_section = document.querySelector('.platform_contribution_section');
        let union_contribution_section = document.querySelector('.union_contribution_section');
        let softpurse_contribution_section = document.querySelector('.softpurse_contribution_section');
        let agent_commission_section = document.querySelector('.agent_commission_section');
        // let loadIndex = document.querySelector('.returnIndex');

        let sd1 = document.querySelector('.sd1');
        let sd2 = document.querySelector('.sd2');
        let sd3 = document.querySelector('.sd3');
        let sd4 = document.querySelector('.sd4');
        let sd5 = document.querySelector('.sd5');
        let sd6 = document.querySelector('.sd6');

        function returnIndex() {
            general_remittance_section.style.display = 'none';
            maintenance_contribution_section.style.display = 'none';
            platform_contribution_section.style.display = 'none';
            union_contribution_section.style.display = 'none';
            softpurse_contribution_section.style.display = 'none';
            agent_commission_section.style.display = 'none';
            index_finance_transaction_section.style.display = 'flex';
        }

        sd1.addEventListener('click', () => {
            general_remittance_section.style.display = 'flex';
            maintenance_contribution_section.style.display = 'none';
            platform_contribution_section.style.display = 'none';
            union_contribution_section.style.display = 'none';
            softpurse_contribution_section.style.display = 'none';
            agent_commission_section.style.display = 'none';
            index_finance_transaction_section.style.display = 'none';
        });
        sd2.addEventListener('click', () => {
            general_remittance_section.style.display = 'none';
            maintenance_contribution_section.style.display = 'flex';
            platform_contribution_section.style.display = 'none';
            union_contribution_section.style.display = 'none';
            softpurse_contribution_section.style.display = 'none';
            agent_commission_section.style.display = 'none';
            index_finance_transaction_section.style.display = 'none';
        });
        sd3.addEventListener('click', () => {
            general_remittance_section.style.display = 'none';
            maintenance_contribution_section.style.display = 'none';
            platform_contribution_section.style.display = 'flex';
            union_contribution_section.style.display = 'none';
            softpurse_contribution_section.style.display = 'none';
            agent_commission_section.style.display = 'none';
            index_finance_transaction_section.style.display = 'none';
        });
        sd4.addEventListener('click', () => {
            general_remittance_section.style.display = 'none';
            maintenance_contribution_section.style.display = 'none';
            platform_contribution_section.style.display = 'none';
            union_contribution_section.style.display = 'flex';
            softpurse_contribution_section.style.display = 'none';
            agent_commission_section.style.display = 'none';
            index_finance_transaction_section.style.display = 'none';
        });
        sd5.addEventListener('click', () => {
            general_remittance_section.style.display = 'none';
            maintenance_contribution_section.style.display = 'none';
            platform_contribution_section.style.display = 'none';
            union_contribution_section.style.display = 'none';
            softpurse_contribution_section.style.display = 'flex';
            agent_commission_section.style.display = 'none';
            index_finance_transaction_section.style.display = 'none';
        });
        sd6.addEventListener('click', () => {
            general_remittance_section.style.display = 'none';
            maintenance_contribution_section.style.display = 'none';
            platform_contribution_section.style.display = 'none';
            union_contribution_section.style.display = 'none';
            softpurse_contribution_section.style.display = 'none';
            agent_commission_section.style.display = 'flex';
            index_finance_transaction_section.style.display = 'none';
        });
    </script>
@endsection
