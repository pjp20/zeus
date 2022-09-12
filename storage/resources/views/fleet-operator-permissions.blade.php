@extends('main')
@section('content')
    <div class="content-page">
        <div class="content" style="">
            <!-- Start Content-->
            <div class="container-fluid mt-10">
                <div class="paymentRecieved">
                    <div class="top-row">
                        <div>
                            <a href="control-panel">
                                <p class="sectionTitle text-inter pl-3 pb-0 pl-0">
                                    <img src="{{ asset('assets/images/arrow-left.svg') }}" class="mr-1" alt="">
                                    Control Panel
                                </p>
                            </a>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div id="sidebar-menu">
                                <ul class="metismenu" id="side-menu">
                                    <li class="maintenanceCostLink">
                                        <a class="sideLink subSideLink" href="control-panel">
                                            <span>Maintenance Cost </span>
                                        </a>
                                    </li>

                                    <li class="accountConfigLink">
                                        <a class="sideLink subSideLink activeSubLink">
                                            <span>Account Configuration</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="sideLink subSideLink" href="/">
                                            <span>System Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class=" subSideLink" href="/">
                                            <span>Other Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="sideLink subSideLink" href="/">
                                            <span>Notification</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12 col-lg-4 account-section-2 ty-40">
                            <div class="top-dd">
                                <p class="title-permissions">Fleet Operator Permissions</p>
                                {{-- <p class="lead-permissions">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Explicabo
                                    optio voluptate vero
                                    similique quibusdam id molestias facilis</p> --}}

                                <div class="form-search mb-3">
                                    <input type="text" placeholder="Search" class="searchInput2">
                                    <button class="searchBtn2">
                                        <i class='bx bx-search'></i>
                                    </button>
                                </div>
                            </div>
                            <form action="" method="post">
                                @csrf
                                <div class="permissions-main">
                                    <p class="overviewTitle" id="fleet">Fleet / Vehicle Management</p>
                                    {{-- <span class="lead-permissions">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Vel hacconvallis vestibulum eget quam vestibulum amet, sed.</span> --}}

                                    <div class="permissions-main-sub">
                                        <div class="form-check">
                                            <input class="form-check-input checkInput" name="addVehicle" type="checkbox"
                                                value="" id="" checked>
                                            <label class="form-check-label" for="">
                                                Add Vehicle to Fleet
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input checkInput" name="assignVehicleDriver"
                                                type="checkbox" value="" id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Assign Vehicle to Driver
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input checkInput" name="addWorkshop" type="checkbox"
                                                value="" id="" checked>
                                            <label class="form-check-label" for="">
                                                Add Workshop to Fleet
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input checkInput" name="editDeleteWorkshop"
                                                type="checkbox" value="" id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Edit / Delete Workshop
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input checkInput" name="assignVehicleWorkshop"
                                                type="checkbox" value="" id="" checked>
                                            <label class="form-check-label" for="">
                                                Assign Vehicle to Workshop
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input checkInput" name="createUser" type="checkbox"
                                                value="" id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Create User Account
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input checkInput" name="editDeleteUser" type="checkbox"
                                                value="" id="">
                                            <label class="form-check-label" for="">
                                                Edit / Delete User Account
                                            </label>
                                        </div>
                                    </div>

                                    {{-- payments and commission --}}
                                    <p class="overviewTitle" id="payment">Payments & Commission</p>
                                    {{-- <span class="lead-permissions">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Vel hac convallis vestibulum eget quam vestibulum amet, sed.</span> --}}
                                    <div class="permissions-main-sub">
                                        <div class="form-check">
                                            <input class="form-check-input checkInput" name="enableShareCommission"
                                                type="checkbox" data-toggle="collapse" data-target="#share"
                                                aria-expanded="false" aria-controls="share" id="">
                                            <label class="form-check-label" for="">
                                                Share Commision
                                            </label>
                                        </div>
                                        <div class="collapse" id="share">
                                            <div class="value-number mb-2">
                                                <span class="valueText">Value or Percentage</span>
                                                <input type="number" value="15" name="shareCommissionValue"
                                                    class="value2">
                                            </div>
                                        </div>
                                        {{-- <div class="form-check">
                                            <input class="form-check-input checkInput" name = "allowUserRemittanceValue" type="checkbox" value="" id="">
                                            <label class="form-check-label" for="">
                                                Allow User Account Define Remittance Value
                                            </label>
                                        </div> --}}
                                        <div class="form-check">
                                            <input class="form-check-input checkInput" name="enableActivateRemittance"
                                                type="checkbox" value="" id="" data-toggle="collapse"
                                                data-target="#activateRemittance" aria-expanded="false"
                                                aria-controls="activateRemittance">
                                            <label class="form-check-label" for="">
                                                Remittance Deposit Configuration
                                            </label>
                                        </div>
                                        <div class="collapse" id="activateRemittance">
                                            <div class="value-number mb-2">
                                                <span class="valueText">General Remittance</span>
                                                <input type="number" value="75" name="generalRemittance"
                                                    class="value2">
                                            </div>
                                            <div class="value-number mb-2">
                                                <span class="valueText">Maintenance Contribution</span>
                                                <input type="number" value="2" name="maintenaceContribution"
                                                    class="value2">
                                            </div>
                                            <div class="value-number mb-2">
                                                <span class="valueText">Account Commission</span>
                                                <input type="number" value="15" name="accountCommission"
                                                    class="value2">
                                            </div>
                                            <div class="value-number mb-2">
                                                <span class="valueText">Union Due / Fees</span>
                                                <input type="number" value="15" name="unionfee" class="value2">
                                            </div>
                                        </div>



                                        <div class="form-check">
                                            <input class="form-check-input checkInput" type="checkbox" value=""
                                                data-toggle="collapse" data-target="#soft" name = "enableSoftpurse" aria-expanded="false"
                                                aria-controls="soft" id="">
                                            <label class="form-check-label" for="">
                                                Enable SoftPurse Contribution
                                            </label>
                                        </div>
                                        <div class="collapse" id="soft">

                                            <div class="value-number mb-2">
                                                <span class="valueText">Softpurse Count/measure</span>
                                                <input type="number" value="1" name = "softpurseCount" class="value2">
                                            </div>
                                        </div>



                                        <div class="form-check">
                                            <input class="form-check-input checkInput" type="checkbox" name = "enableUserAddEditAgentCommission" value=""
                                                data-toggle="collapse" data-target="#agent" aria-expanded="false"
                                                aria-controls="agent" id="">
                                            <label class="form-check-label" for="">
                                                Allow User Account Add/Edit Agent Commssion
                                            </label>
                                        </div>
                                        <div class="collapse" id="agent">
                                            <div class="value-number mb-2">
                                                <span class="valueText">Agent Commission</span>
                                                <input type="number" value="4" name="userAddEditAgentCommission" class="value2">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- finance and wallet --}}
                                    <p class="overviewTitle" id="finance">Finance & Wallet</p>
                                    {{-- <span class="lead-permissions">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Vel hac convallis vestibulum eget quam vestibulum amet, sed.</span> --}}
                                    <div class="permissions-main-sub">
                                        <div class="form-check">
                                            <input class="form-check-input checkInput" type="checkbox" value="" name = "walletTopuo"
                                                id="" checked>
                                            <label class="form-check-label" for="">
                                                Make Wallet Top
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input checkInput" type="checkbox" value="" name = "requestWithdrawal"
                                                id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Request wallet withdrawal
                                            </label>
                                        </div>
                                        {{-- <div class="form-check">
                                            <input class="form-check-input checkInput" type="checkbox" value="" name = ""
                                                id="">
                                            <label class="form-check-label" for="">
                                                Another wallet related activity
                                            </label>
                                        </div> --}}
                                    </div>

                                    {{-- reporting and activity log --}}
                                    <p class="overviewTitle" id="reporting">Reporting & Activity Log</p>
                                    {{-- <span class="lead-permissions">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Vel hacconvallis vestibulum eget quam vestibulum amet, sed.</span> --}}

                                    <div class="permissions-main-sub">
                                        <div class="form-check">
                                            <input class="form-check-input checkInput" type="checkbox" value="" name = "allowUserDownloadReport"
                                                id="" checked>
                                            <label class="form-check-label" for="">
                                                Allow User Account Download Report(s)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input checkInput" type="checkbox" value="" name = "requestWithdrawal"
                                                id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Request wallet withdrawal
                                            </label>
                                        </div>
                                        {{-- <div class="form-check">
                                            <input class="form-check-input checkInput" type="checkbox" value=""
                                                id="">
                                            <label class="form-check-label" for="">
                                                Another wallet related activity
                                            </label>
                                        </div> --}}
                                    </div>

                                </div>


                        </div>

                        <div class="col-sm-6 col-md-5 account-section-3 ty-40">
                            <div class="top-btn">
                                <button class="saveUpdateBtn" data-bs-toggle="modal" data-bs-target="#update">SAVE
                                    & UPDATE</button>
                                <button class="resetBtn">RESET</button>
                            </div>

                            <p class="overviewTitle">Overview</p>
                            <ul class="links-permissions">
                                <li>
                                    <a href="#fleet">Fleet / Vehicle Management</a>
                                </li>
                                <li>
                                    <a href="#payment">Payments & Commission</a>
                                </li>
                                <li>
                                    <a href="#finance">Finance & Wallet</a>
                                </li>
                                <li>
                                    <a href="#reporting">Reporting & Activity Log</a>
                                </li>
                                <li>
                                    <a href="">Other Affairs</a>
                                </li>
                            </ul>
                        </div>
                        </form>


                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="update" tabindex="-1" aria-labelledby="updateLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-sm">
                    <div class="modal-content">
                        <div class="modal-header border-bottom-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Authorization Access</label>
                                <input type="text" class="form-control authorizationInput" placeholder="* * * * *">

                                <svg width="15" height="19" class="iconLock" viewBox="0 0 18 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.25 15C8.25 15.4142 8.58579 15.75 9 15.75C9.41421 15.75 9.75 15.4142 9.75 15H8.25ZM9.75 13C9.75 12.5858 9.41421 12.25 9 12.25C8.58579 12.25 8.25 12.5858 8.25 13H9.75ZM5 7.75H13V6.25H5V7.75ZM16.25 11V17H17.75V11H16.25ZM13 20.25H5V21.75H13V20.25ZM1.75 17V11H0.25V17H1.75ZM5 20.25C3.20508 20.25 1.75 18.7949 1.75 17H0.25C0.25 19.6234 2.37665 21.75 5 21.75V20.25ZM16.25 17C16.25 18.7949 14.7949 20.25 13 20.25V21.75C15.6234 21.75 17.75 19.6234 17.75 17H16.25ZM13 7.75C14.7949 7.75 16.25 9.20507 16.25 11H17.75C17.75 8.37665 15.6234 6.25 13 6.25V7.75ZM5 6.25C2.37665 6.25 0.25 8.37665 0.25 11H1.75C1.75 9.20507 3.20507 7.75 5 7.75V6.25ZM5.75 7V5H4.25V7H5.75ZM12.25 5V7H13.75V5H12.25ZM9 1.75C10.7949 1.75 12.25 3.20507 12.25 5H13.75C13.75 2.37665 11.6234 0.25 9 0.25V1.75ZM5.75 5C5.75 3.20507 7.20507 1.75 9 1.75V0.25C6.37665 0.25 4.25 2.37665 4.25 5H5.75ZM9.75 15V13H8.25V15H9.75Z"
                                        fill="#888888" />
                                </svg>
                            </div>
                            <button type="button" class="btn addBtn sizeBtn" data-bs-dismiss="modal"
                                data-bs-toggle="modal" data-bs-target="#success">
                                <svg width="15" height="19" class="mr-2" viewBox="0 0 18 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.25 15C8.25 15.4142 8.58579 15.75 9 15.75C9.41421 15.75 9.75 15.4142 9.75 15H8.25ZM9.75 13C9.75 12.5858 9.41421 12.25 9 12.25C8.58579 12.25 8.25 12.5858 8.25 13H9.75ZM5 7.75H13V6.25H5V7.75ZM16.25 11V17H17.75V11H16.25ZM13 20.25H5V21.75H13V20.25ZM1.75 17V11H0.25V17H1.75ZM5 20.25C3.20508 20.25 1.75 18.7949 1.75 17H0.25C0.25 19.6234 2.37665 21.75 5 21.75V20.25ZM16.25 17C16.25 18.7949 14.7949 20.25 13 20.25V21.75C15.6234 21.75 17.75 19.6234 17.75 17H16.25ZM13 7.75C14.7949 7.75 16.25 9.20507 16.25 11H17.75C17.75 8.37665 15.6234 6.25 13 6.25V7.75ZM5 6.25C2.37665 6.25 0.25 8.37665 0.25 11H1.75C1.75 9.20507 3.20507 7.75 5 7.75V6.25ZM5.75 7V5H4.25V7H5.75ZM12.25 5V7H13.75V5H12.25ZM9 1.75C10.7949 1.75 12.25 3.20507 12.25 5H13.75C13.75 2.37665 11.6234 0.25 9 0.25V1.75ZM5.75 5C5.75 3.20507 7.20507 1.75 9 1.75V0.25C6.37665 0.25 4.25 2.37665 4.25 5H5.75ZM9.75 15V13H8.25V15H9.75Z"
                                        fill="white" />
                                </svg>
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- successs modal --}}
            <div class="modal fade" id="success" tabindex="-1" aria-labelledby="success" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" style="width: 400px">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="success-info">
                                <div class="cover-circle">
                                    <div class="circle-success">
                                        <svg width="32" height="20" viewBox="0 0 51 35" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M47.8215 3L17.9403 31.5228L3 17.2614" stroke="#4A4AFF"
                                                stroke-width="6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>

                                <span class="success-info">Successful</span>
                                <span class="success-desc">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum sunt numquam non
                                    vero, officiis earum dolorum itaque explicabo, soluta debitis illo dolorem saepe rem
                                    vel?
                                </span>
                                <button class="btn addBtn">Continue</button>
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
