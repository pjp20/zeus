@extends('main')
@section('content')
    <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid mt-10">
                <div class="paymentRecieved">
                    <div class="top-row">
                        <div>
                            <p class="sectionTitle text-inter pl-3 pb-0 pl-0">
                                Control Panel
                            </p>
                        </div>
                    </div>

                    <!-- create new user modal -->

                    <!-- end of create new modal -->

                    <!-- single record modal -->

                    <!-- end of single record modal -->

                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div id="sidebar-menu">
                                <ul class="metismenu" id="side-menu">
                                    <li>
                                        <A class="sideLink subSideLink" href="/">
                                            <img src="{{ asset('assets/images/star.svg') }}" alt="" />
                                            <span>System Settings</span>
                                        </A>
                                    </li>

                                    <li>
                                        <A class="sideLink subSideLink" href="/">
                                            <img src="{{ asset('assets/images/control.png') }}" alt="" />
                                            <span>Maintenance Cost </span>
                                        </A>
                                    </li>
                                    <li>
                                        <A class="sideLink subSideLink" href="/">
                                            <img src="{{ asset('assets/images/notification.svg') }}" alt="" />
                                            <span>Configure Fleet</span>
                                        </A>
                                    </li>

                                    <li>
                                        <A class="sideLink subSideLink" href="/">
                                            <img src="{{ asset('assets/images/general.svg') }}" alt="" />
                                            <span>General Payment</span>
                                        </A>
                                    </li>
                                    <li>
                                        <A class="sideLink subSideLink" href="/">
                                            <img src="{{ asset('assets/images/notification.svg') }}" alt="" />
                                            <span>Notification</span>
                                        </A>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="modal fade" id="createNew" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">MAINTENANCE COST</h5>
                                        {{-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam excepturi
                                            numquam voluptatibus corrupti eaque amet laudantium esse sequi sit consectetur.
                                        </p> --}}
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="formSec">
                                            <div class="form-group">
                                                <label for="">Choose Fleet</label>
                                                <select class="form-control infoInput">
                                                    <option value="">--Please Select--</option>
                                                    <option value="MyGarage Abuja">MyGarage Abuja</option>
                                                    <option value="AutoChek Lagos">AutoChek Lagos</option>
                                                    <option value="Brekete Taxi">Brekete Taxi</option>
                                                    <option value="7Central Logistics">
                                                        7Central Logistics
                                                    </option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Package</label>
                                                <select class="form-control infoInput">
                                                    <option value="">--Please Select--</option>
                                                    <option value="Short Rental">Short Rental</option>
                                                    <option value="Hire Purchase">Hire Purchase</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Payee</label>
                                                <select class="form-control infoInput">
                                                    <option value="">--Please Select--</option>
                                                    <option value="Driver">Driver</option>
                                                    <option value="Vehicle Owner">Vehicle Owner</option>
                                                </select>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-sm-6 col-md-7">
                                                    <div class="form-group">
                                                        <label for="">Assign Workshop</label>
                                                        <select class="form-control infoInput">
                                                            <option value="">--Please Select--</option>
                                                            <option value="Short Rental">
                                                                AutoChek Lugbe Centre
                                                            </option>
                                                            <option value="Dabo Tire Ltd">Dabo Tire Ltd</option>
                                                            <option value="7Central Technologies">
                                                                7Central Technologies
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-5">
                                                    <label for="" style="visibility: hidden">Info</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text brd-none" id="basic-addon1">₦</span>
                                                        <input type="number" class="form-control infoInput brd-none" />
                                                        <small class="bottomText">workshop service commission</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">CLOSE</button>
                                        <button type="button" class="btn" style="background: #4a4aff;">SUBMIT</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-8">
                            <div class="maintenanceCost">
                                <div>
                                    <p class="sectionTitle text-inter p-0">Maintenance Cost</p>
                                    <p class="subTitle">
                                        The amount to be dedcted for routine maintenance from
                                        drivers wallet cost
                                    </p>
                                </div>
                                <button class="addBtn" data-bs-toggle="modal" data-bs-target="#createNew">
                                    CREATE NEW
                                </button>
                            </div>

                            <div class="card-box table-responsive">
                                <table id="datatable" class="table table-bordered nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead class="text-inter">
                                        <tr>
                                            <th>
                                                <input type="checkbox" class="check" />
                                            </th>
                                            <th>REFERENCE</th>
                                            <th>AMOUNT</th>
                                            <th>FLEET</th>
                                            <th>PACKAGE</th>
                                            <th>AMOUNT</th>
                                            <th>PAYEE</th>
                                        </tr>
                                    </thead>

                                    <!-- Modal -->
                                    <div class="modal fade" id="requestPayment" tabindex="-1"
                                        aria-labelledby="requestPaymentLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="requestPaymentLabel">MAINTENANCE COST
                                                        DETAILS
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="everyInfo">
                                                        <p class="info-text-top">
                                                            GENERATED FROM MOTORAFRICA ON 12-09-2022 12:49
                                                        </p>
                                                        <div class="formSec container-fluid"
                                                            style="background: #fafafa; border-radius: 6px; height: auto">
                                                            <div>
                                                                <div class="row mb-3">
                                                                    <div class="col-6 side1">Date</div>
                                                                    <div class="col-6 side2">30 Sep, 2022</div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <div class="col-6 side1">Amount</div>
                                                                    <div class="col-6 side2">N1,500</div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <div class="col-6 side1">Fleet</div>
                                                                    <div class="col-6 side2">MyGarage</div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <div class="col-6 side1">Package</div>
                                                                    <div class="col-6 side2">Hire Purchase</div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <div class="col-6 side1">Payee</div>
                                                                    <div class="col-6 side2">Driver</div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <div class="col-6 side1">Workshop</div>
                                                                    <div class="col-6 side2">AutoChek Lugbe Centre</div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <div class="col-6 side1">Reference</div>
                                                                    <div class="col-6 side2">3456WTY</div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="main2">
                                                        <div class="form-group mt-3">
                                                            <button class="submitBtn btn">SUMBIT</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="check" />
                                            </td>
                                            <td>
                                                <span class="text-primary" data-bs-toggle="modal"
                                                    data-bs-target="#requestPayment">lorem</span>
                                            </td>
                                            <td>lorem</td>
                                            <td>lorem</td>
                                            <td>lorem</td>
                                            <td>lorem</td>
                                            <td>lorem</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="check" />
                                            </td>
                                            <td>lorem</td>
                                            <td>lorem</td>
                                            <td>lorem</td>
                                            <td>lorem</td>
                                            <td>lorem</td>
                                            <td>lorem</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="check" />
                                            </td>
                                            <td>lorem</td>
                                            <td>lorem</td>
                                            <td>lorem</td>
                                            <td>lorem</td>
                                            <td>lorem</td>
                                            <td>lorem</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end content -->
    </div>
@endsection
