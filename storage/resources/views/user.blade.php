@extends('main')
@section('content')
    <title>Zeus | User Account</title>
    <style>
        div.scroll {
            /* background-color: #fed9ff; */
            /* width: 600px; */
            height: 500px;
            overflow-x: hidden;
            overflow-y: auto;
            /* text-align: center; */
            padding: 20px;
            margin-top: 230px;
        }
    </style>
    <div class="content-page">
        <div class="content">
            <form action="{{ route('editUserAccount') }}" method="post">
                @csrf
                <div class="row fixedbanner">
                    <div class="col-sm-6 col-md-9">
                        <div class="p-4 no-radius bg-light-banner" style="width:100%">
                            <div class="row">
                                <div class="col-sm-6 col-md-3">
                                    <div class="box-col align-items-center">
                                        <a href="/user-management">
                                            <img src="{{ asset('assets/images/arrow-left.svg') }}" class="image-padding"
                                                alt="" />
                                        </a>
                                        <div class="avatar">
                                            <img src="{{ $user->image }}" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-5">
                                    <div class="box-col align-items-start">
                                        <span class="staff-name">{{ $user->name }}</span>
                                        <span class="staff-id">Date created: {{ $user->created_at }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="sideProfile">
                            <div class="firstInfo">
                                <span>Control Panel</span>
                                <span>
                                    This component provides the Admin the ability to view and
                                    change account settings.
                                </span>
                            </div>
                            <div class="secondInfo">
                                <ul class="sideLists border-sideLists">
                                    <li>
                                        <a href="/account-permissions">Account Permissions</a>
                                    </li>
                                    <li>
                                        <a href="">Filing & Documents</a>
                                    </li>
                                    <li>
                                        <a href="">Wallet / Finance</a>
                                    </li>
                                    <li>
                                        <a href="">Activity Log</a>
                                    </li>
                                    <li>
                                        <a href="" class="text-danger">Password Reset</a>
                                    </li>
                                    <li>
                                        <a href="" class="text-danger">Archive User</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="thirdInfo">
                                <button class="submitBtn" type = "submit" >SAVE AND UPDATE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="scroll">

                    <div class="">
                        <p class="infoForm">Basic User Information</p>
                        <div class="container">
                            <div class="row info-section mt-1">
                                <div class="col-sm-6 col-md-10 mb-1">
                                    <div class="form-group">
                                        <label for="">User Account ID:</label>
                                        <input type="text" class="form-control infoInput" value="{{ $user->user_id }}"
                                            disabled />
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-10 mb-1">
                                    <div class="form-group">
                                        <label for="">User Account Type*</label>
                                        <select class="form-control infoInput">
                                            <option value="Fleet Operator">{{ $user->category }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-10 mb-1">
                                    <div class="form-group">
                                        <label for="">User Location</label>
                                        <select class="form-control infoInput">
                                            <option value="Lagos">{{ $user->address }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="infoForm">Contact Information</p>
                        <div class="container">
                            <div class="row info-section mt-1">
                                <div class="col-sm-6 col-md-10 mb-1">
                                    <div class="form-group">
                                        <label for="">Phone Number</label>
                                        <input type="text" class="form-control infoInput" value="{{ $user->phone }}" />
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-10 mb-1">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control infoInput" value="{{ $user->email }}" />
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-10 mb-1">
                                    <div class="form-group">
                                        <label for="">Address</label>
                                        <textarea rows="2" class="form-control infoInput">{{ $user->address }}</textarea>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-6 col-md-8">
                                            <select class="form-control infoInput">
                                                <option value="">--Select City--</option>
                                                <option value="Lagos">Lagos</option>
                                                <option value="Abuja">Abuja</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <input type="text" placeholder="Zip Code" class="form-control infoInput" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="infoForm">Bank Information</p>
                        <div class="container">
                            <div class="row info-section mt-1">
                                <div class="col-sm-6 col-md-10 mb-1">
                                    <div class="form-group">
                                        <label for="">Bank Name</label>
                                        <input type="text" class="form-control infoInput" value="{{ $user->phone }}" />
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-10 mb-1">
                                    <div class="form-group">
                                        <label for="">Designated Account Number</label>
                                        <input type="text" class="form-control infoInput"
                                            value="{{ $user->phone }}" />
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-10 mb-1">
                                    <div class="form-group">
                                        <label for=""> Account Name</label>
                                        <input type="text" class="form-control infoInput"
                                            value="{{ $user->phone }}" />
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
    </div>
@endsection

{{-- <div class="container">
                <div class="row">
                    @include('components.message')
                </div>
                <div class="row top-70">
                    <div class="col-sm-6 col-md-2">
                        <div class="profile">
                            <div class="profileImage">
                                <img src="{{ $user->image }}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-9 offset-md-1">
                        <form action="{{ route('editUserAccount') }}" method="post">
                            @csrf
                            <div class="row pr-3 pl-3">
                                <input type="hidden" name="email" value="{{ $user->email }}">
                                <div class="col-sm-6 col-md-5">
                                    <p class="subText">USER DATA</p>
                                    <div class="form-campaign">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text" value="{{ $user->name }}" name="name"
                                                class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="email" value="{{ $user->email }}"  class="form-control"
                                                disabled />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Gender</label>
                                            <select class="form-control" name="gender">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Address</label>
                                            <input type="text" class="form-control" name="address"
                                                value="{{ $user->address }}" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">NIN</label>
                                            <input type="number" class="form-control" name="nin"
                                                value="{{ $user->nin }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-5">
                                    <p class="subText empty">Empty</p>
                                    <div class="form-campaign">
                                        <div class="form-group">
                                            <label for="">User Type ({{ $user->category }})</label>
                                            <select class="form-control" name="category">
                                                <option value="driver">Driver</option>
                                                <option value="investor">Investors</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Phone</label>
                                            <input type="text" class="form-control" name="phone"
                                                value="{{ $user->phone }}" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Date of Birth</label>
                                            <input type="date" class="form-control" name="dob"
                                                value="{{ $user->dob }}" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Town</label>
                                            <input type="text" value="{{ $user->town }}" name="town"
                                                class="form-control" />
                                        </div>
                                        <div class="form-group  p-3">
                                            <button type="submit" class="btn btn-primary">UPDATE</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> --}}
