@extends('main')
@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container">
                <div class="row top-70">
                    <div class="col-sm-6 col-md-2">
                        <div class="profile">
                            <div class="profileImage">
                                <img src="{{$user->image}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-9 offset-md-1">
                        <div class="row pr-3 pl-3">
                            <div class="col-sm-6 col-md-5">
                                <p class="subText">USER DATA</p>
                                <div class="form-campaign">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" value="{{ $user->name }}" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" value="{{ $user->email }}" class="form-control" />
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
                                        <input type="text" class="form-control" value="{{ $user->address }}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="">NIN</label>
                                        <input type="number" class="form-control" value="{{ $user->nin }}" />
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-6 col-md-5">
                                <p class="subText empty">Empty</p>
                                <div class="form-campaign">
                                    <div class="form-group">
                                        <label for="">User Type</label>
                                        <input type="text" value="{{ $user->category }}" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label for="">Phone</label>
                                        <input type="text" class="form-control" value="{{ $user->phone }}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="">Date of Birth</label>
                                        <input type="date" class="form-control" value="{{ $user->dob }}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="">Town</label>
                                        <input type="text" value="{{ $user->town }}" class="form-control" />
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
