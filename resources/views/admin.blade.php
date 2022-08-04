@extends('main')
@section('content')
    <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid mt-10">
                <!-- text-inter -->
                <div class="top-row mb-4">
                    <div>
                        <p class="sectionTitle text-inter pb-0 pl-0">
                            Administrator Office
                        </p>
                    </div>
                    <button class="addBtn" data-bs-toggle="modal" data-bs-target="#addUser">ADD USER</button>
                </div>
                <!-- add staff modal -->
                <!-- Modal -->
                <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">USER INFORMATION</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="formSec">
                                    <div class="form-group">
                                        <label for="">First Name</label>
                                        <input class="form-control infoInput" />
                                    </div>
                                    <div class="form-group">
                                        <label for="">Last Name</label>
                                        <input class="form-control infoInput" />
                                    </div>

                                    <div class="form-group">
                                        <label for="">Phone No.</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text brd-left" id="basic-addon1">+234</span>
                                            <input type="number" class="form-control infoInput brd-right" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input class="form-control infoInput" />
                                    </div>

                                    <div class="form-group">
                                        <label for="">Department</label>
                                        <select class="form-control form-control infoInput">
                                            <option value="">--Please Select--</option>
                                            <option value="Driver">Recovery</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn w-100"
                                    style="
                  height: 60px;
                  background: #4a4aff;
                  color: #fff;
                  border-radius: 8px;
                  font-weight: bold;
                ">
                                    ADD STAFF
                                </button>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- end add staff modal -->
                <!-- table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card-box table-responsive">
                            <table id="datatable" class="table table-bordered nowrap"
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
                                        <th>TRANS ID.</th>
                                        <th>FULL NAME</th>
                                        <th>EMAIL</th>
                                        <th>DEPARTMENT</th>
                                        <th>STATUS</th>
                                        <th>START DATE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="check" />
                                        </td>
                                        <td><a href="/staff">lorem</a></td>
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
            <!-- end container-fluid -->
        </div>
        <!-- end content -->
    </div>
@endsection
