@extends('main')
@section('content')
    <div class="content-page" style="background: #fff">
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
                    <li class="listFinanceOverview bbd" id="test">
                        General Overview
                    </li>
                    <li class="list_finance_transaction">Transaction Table</li>
                    <li class="list_finance_remittance">Remittance Table</li>
                </ul>
                <!-- overview -->
                <div class="finance_general_overview">
                    <div class="row g-2">
                        <div class="col-sm-6 col-md-12 col-lg-4">
                            <div class="boxInfo">
                                <div class="topInfo">
                                    <div class="vectorBox">
                                        <img :src="'../assets/images/vector.png'" alt="" />
                                    </div>
                                    <i class="bx bx-dots-vertical-rounded adjust"></i>
                                </div>
                                <div class="bottomInfo">
                                    <div class="leftBottom">
                                        <span class="lft1">ACCOUNT BALANCE</span><br />
                                        <span class="lft2 text-inter">$5,600.00</span>
                                    </div>
                                    <span
                                        class="
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
                        <div class="col-sm-6 col-md-12 col-lg-4">
                            <div class="boxInfo">
                                <div class="topInfo">
                                    <div class="vectorBox">
                                        <img :src="'../assets/images/vector.png'" alt="" />
                                    </div>
                                    <i class="bx bx-dots-vertical-rounded adjust"></i>
                                </div>
                                <div class="bottomInfo">
                                    <div class="leftBottom">
                                        <span class="lft1">TOTAL WITHDRAWN</span><br />
                                        <span class="lft2 text-inter">$2, 505</span>
                                    </div>
                                    <span
                                        class="
                      rightBottom
                      bg-light-green
                      green-text
                      font-weight-bold
                    ">
                                        <i class="bx bx-down-arrow-alt"></i>
                                        <span>22.5%</span> <span>APRIL</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-12 col-lg-4">
                            <div class="boxInfo">
                                <div class="topInfo">
                                    <div class="vectorBox">
                                        <img :src="'../assets/images/vector.png'" alt="" />
                                    </div>
                                    <i class="bx bx-dots-vertical-rounded adjust"></i>
                                </div>
                                <div class="bottomInfo">
                                    <div class="leftBottom">
                                        <span class="lft1">TRANSACTION COUNT</span><br />
                                        <span class="lft2 text-inter">350</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3 g-2">
                        <div class="col-sm-6 col-md-12 col-lg-8">
                            <div class="graph-section"></div>
                        </div>
                        <div class="col-sm-6 col-md-12 col-lg-4">
                            <div class="map-sec"></div>
                        </div>
                    </div>
                </div>

                <!-- fleet -->
                <div class="finance_transaction_table">
                    <!-- table -->
                    <div class="row">
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
                                            <th>TRANSACTION ID</th>
                                            <th>DATE</th>
                                            <th>CHANNEL</th>
                                            <th>AMOUNT</th>
                                            <th>DESCRIPTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="check" />
                                            </td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
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
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- track -->
                <div class="container-fluid mt-3 g-2" class="finance_remittance_table">
                    <div class="row mt-3 g-2">
                        <div class="col-sm-6 col-md-12 col-lg-4">
                            <div class="boxInfo">
                                <div class="topInfo">
                                    <div class="vectorBox">
                                        <img :src="'../assets/images/vector.png'" alt="" />
                                    </div>
                                    <i class="bx bx-dots-vertical-rounded adjust"></i>
                                </div>
                                <div class="bottomInfo">
                                    <div class="leftBottom">
                                        <span class="lft1">Total Payment(s)</span><br />
                                        <span class="lft2 text-inter">$5,600.00</span>
                                    </div>
                                    <span class="rightBottom bg-light-red red-text font-weight-bold">
                                        <i class="bx bx-down-arrow-alt"></i>
                                        <span>22.5%</span> <span>APRIL</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-12 col-lg-4">
                            <div class="boxInfo">
                                <div class="topInfo">
                                    <div class="vectorBox">
                                        <img :src="'../assets/images/vector.png'" alt="" />
                                    </div>
                                    <i class="bx bx-dots-vertical-rounded adjust"></i>
                                </div>
                                <div class="bottomInfo">
                                    <div class="leftBottom">
                                        <span class="lft1">Paid Users (45 drivers)</span><br />
                                        <span class="lft2 text-inter">$2, 505</span>
                                    </div>
                                    <span
                                        class="
                      rightBottom
                      bg-light-green
                      green-text
                      font-weight-bold
                    ">
                                        <i class="bx bx-down-arrow-alt"></i>
                                        <span>22.5%</span> <span>APRIL</span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-12 col-lg-4">
                            <div class="boxInfo">
                                <div class="topInfo">
                                    <div class="vectorBox">
                                        <img :src="'../assets/images/vector.png'" alt="" />
                                    </div>
                                    <i class="bx bx-dots-vertical-rounded adjust"></i>
                                </div>
                                <div class="bottomInfo">
                                    <div class="leftBottom">
                                        <span class="lft1">Unpaid / Pending drivers (13 drivers)</span><br />
                                        <span class="lft2 text-inter">$2, 505</span>
                                    </div>
                                    <span
                                        class="
                      rightBottom
                      bg-light-green
                      green-text
                      font-weight-bold
                    ">
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
                                            <th>TRANSACTION ID</th>
                                            <th>DATE</th>
                                            <th>CHANNEL</th>
                                            <th>AMOUNT</th>
                                            <th>DESCRIPTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="check" />
                                            </td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
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
