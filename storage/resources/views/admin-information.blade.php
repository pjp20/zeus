@extends('main')
@section('content')
    <title>Zeus | Admin Information</title>
    <div class="content-page" style="background: #fff">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid">
                <div class="top-row mb-4">
                    <div>
                        <p class="sectionTitle text-inter pb-0 pl-0">Admin Information</p>
                    </div>
                </div>
                <div class="bannerBox">
                    <div class="row">
                        <div class="col-sm-6 col-md-2">
                            <div class="box-col">
                                <div class="avatar">
                                    <img src="{{ asset('assets/images/dp.png') }}" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-5">
                            <div class="box-col align-items-start p-2">
                                <p class="staff-name">Sharafadeen Mubarak</p>
                                <p class="staff-id">User ID: #23456TUC</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-5">
                            <div class="box-col flex-row">
                                <select class="selectBtn form-control form-select infoInput mr-1">
                                    <option value="Active">ACTIVE</option>
                                    <option value="Inactive">DISABLE</option>
                                </select>
                                <button class="addBtn width-120">SAVE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row info-section">
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" class="form-control infoInput" name = "first_name" value="{{$user->first_name}}"  placeholder="" />
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control infoInput" name = "last_name" value="{{$user->last_name}}"  placeholder="" />
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name = "email" value="{{$user->email}}"  class="form-control infoInput" />
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label for="">Phone No</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text brd-left" name = "phone" value="{{$user->phone}}"  id="basic-addon1">+234</span>
                                    <input type="number" class="form-control infoInput brd-right" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label for="">Department</label>
                                <select class="form-control infoInput">
                                    <option value="Recovery">Recovery</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label for="">Staff Role</label>
                                <input type="text" name = "role" class="form-control infoInput" placeholder="Accountant" />
                            </div>
                        </div>
                    </div>

                    <hr class="hr-line" />
                    <div class="row info-section">
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label for="">Creator</label>
                                <input type="text" name = "creator" class="form-control infoInput" placeholder="" />
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label for="">Start Date</label>
                                <input type="date" name = "date" class="form-control infoInput" />
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label for="">User Permission(s)</label>
                                <input type="text" class="form-control infoInput" />
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label for="">Last Login</label>
                                <input type="date" class="form-control infoInput" />
                            </div>
                        </div>
                    </div>
                    <hr class="hr-line" />
                    <div class="row info-section">
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control infoInput" />
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group">
                                <label class="invisible" for="">Reset</label>
                                <input type="submit" value="RESET PASSWORD" class="form-control infoInput" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </div> -->
        </div>
        <!-- end container-fluid -->
    </div>
@endsection
