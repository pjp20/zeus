@extends('main')
@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container">
                <div class="row top-70">
                    <div class="col-sm-6 col-md-2">
                        <div class="profile">
                            <div class="profileImage">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-9 offset-md-1">
                        <div class="row pr-3 pl-3">
                            <div class="col-sm-6 col-md-5">
                                <p class="subText">USER DATA</p>
                                <div class="form-campaign">
                                    <div class="form-group">
                                        <label for="">First Name</label>
                                        <input type="text" value="" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" value="{{$user->email}}" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label for="">Gender</label>
                                        <select class="form-control">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Address</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label for="">NIN</label>
                                        <input type="number" class="form-control" />
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-6 col-md-5">
                                <p class="subText empty">Empty</p>
                                <div class="form-campaign">
                                    <div class="form-group">
                                        <label for="">Last Name</label>
                                        <input type="text" class="form-control" placeholder="" />

                                    </div>
                                    <div class="form-group">
                                        <label for="">Phone</label>
                                        <input type="text" class="form-control" placeholder="" />
                                    </div>
                                    <div class="form-group">
                                        <label for="">Date of Birth</label>
                                        <input type="date" class="form-control" placeholder="" />
                                    </div>
                                    <div class="form-group">
                                        <label for="">State</label>
                                        <select class="form-control">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end content -->
    </div>
@endsection
