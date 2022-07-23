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
                            <div class="modal-dialog">
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
                                            data-bs-dismiss="modal">RESET</button>
                                        <button type="button" class="btn"
                                            style="background: #4a4aff;
                                        color: #fff;
                                        border-radius: 8px;
                                        font-weight: bold;">SUBMIT</button>
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
                                            <th>REFERENCE</th>
                                            <th>AMOUNT</th>
                                            <th>FLEET</th>
                                            <th>PACKAGE</th>
                                            <th>AMOUNT</th>
                                            <th>PAYEE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="check" />
                                            </td>
                                            <td>
                                                <span class="text-primary">lorem</span>
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
