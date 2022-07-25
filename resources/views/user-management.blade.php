@extends('main')
@section('content')
    <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid mt-10">
                <!-- text-inter -->
                <div class="top-row">
                    <div>
                        <p class="sectionTitle text-inter pb-0 pl-0">User Management</p>
                        <p class="subTitle">
                            A very random description of this module.
                        </p>
                    </div>
                    <a href="/add-user" class="addBtn">ADD USER</a>
                </div>
                <div class="row mt-3 g-2">
                    <div class="col-sm-6 col-md-12 col-lg-4">
                        <div class="boxInfo bg-blk text-light">
                            <div class="topInfo">
                                <div class="vectorBox2">
                                    <img src="{{ asset('assets/images/vector.png') }}" alt="" />
                                </div>
                                <i class="bx bx-dots-vertical-rounded adjust"></i>
                            </div>
                            <div class="bottomInfo">
                                <div class="leftBottom">
                                    <span class="lft1 text-light">Total User(s)</span><br />
                                    <span class="lft2 text-inter text-light">2,400</span>
                                </div>
                                <span
                                    class="
                    rightBottom
                    bg-light-dark
                    text-light
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
                                <div class="vectorBox3">
                                    <img src="{{ asset('assets/images/vector3.svg') }}" alt="" />
                                </div>
                                <i class="bx bx-dots-vertical-rounded adjust"></i>
                            </div>
                            <div class="bottomInfo">
                                <div class="leftBottom">
                                    <span class="lft1">Total Car Owner(s)</span><br />
                                    <span class="lft2 text-inter">1,700</span>
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
                                    <img src="{{ asset('assets/images/vector.png') }}" alt="" />
                                </div>
                                <i class="bx bx-dots-vertical-rounded adjust"></i>
                            </div>
                            <div class="bottomInfo">
                                <div class="leftBottom">
                                    <span class="lft1">Total Drivers(s)</span><br />
                                    <span class="lft2 text-inter">2,100</span>
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
                                        <th>USER ID</th>
                                        <th>USER TYPE</th>
                                        <th>FULL NAME</th>
                                        <th>PHONE NUMBER</th>
                                        <th>EMAIL</th>
                                        <th>FLEET</th>
                                        <th>STATUS</th>
                                        <th>DATE CREATED</th>
                                        <th></th>
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
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>
                                            <div class="iconBox">
                                                <i class="icon-options text-dark pt-2"></i>
                                            </div>
                                        </td>
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
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>
                                            <div class="iconBox">
                                                <div class="iconBox">
                                                    {{-- <Dropdown trigger="click" class="pt-2">
                                                        <a href="javascript:void(0)">
                                                            <i class="icon-options text-dark pt-2"></i>
                                                        </a>
                                                        <DropdownMenu slot="list">
                                                            <DropdownItem>
                                                                <span>Process</span>
                                                            </DropdownItem>
                                                            <DropdownItem>
                                                                <span>Active</span>
                                                            </DropdownItem>
                                                            <DropdownItem>
                                                                <span>Deactivate</span>
                                                            </DropdownItem>
                                                        </DropdownMenu>
                                                    </Dropdown> --}}
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
            <!-- end container-fluid -->
        </div>
        <!-- end content -->
    </div>
@endsection