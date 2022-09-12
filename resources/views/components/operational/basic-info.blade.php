<div class="basic-info-section">
    <div class="row g-0 border-top-line">
        <div class="col-sm-6 col-md-4">
            <div class="operation-data-section">
                <div class="mt-2">
                    <div class="image-car-sample-100">
                        <div class="inner-100">
                            <img src="{{ $data['carFleet']->front ?? '' }}" alt="">
                        </div>
                        <div class="inner-100">
                            <img src="{{ $data['carFleet']->interior ?? '' }}" alt="">
                        </div>
                        <div class="inner-100">
                            <img src="{{ $data['carFleet']->back ?? '' }}" alt="">
                        </div>
                        <div class="inner-100">
                            <img src="{{ $data['carFleet']->diagonal ?? '' }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="baseInfo">
                    <div class="row mb-2">
                        <div class="col-md-5">
                            <span class="ll-text">LICENCE PLATE:</span>
                        </div>
                        <div class="col-md-5">
                            <span class="lr-text">{{ $data['vehicleDetails']->vehno ?? '' }}</span>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-5">
                            <span class="ll-text">TYPE:</span>
                        </div>
                        <div class="col-md-5">
                            <span class="lr-text">{{ $data['carFleet']->type ?? '' }}</span>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-5">
                            <span class="ll-text">MODEL:</span>
                        </div>
                        <div class="col-md-5">
                            <span class="lr-text">{{ $data['carFleet']->model ?? '' }}</span>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-5">
                            <span class="ll-text">YEAR:</span>
                        </div>
                        <div class="col-md-5">
                            <span class="lr-text">{{ $data['carFleet']->year ?? "" }}</span>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-5">
                            <span class="ll-text">CHASSIS:</span>
                        </div>
                        <div class="col-md-5">
                            <span class="lr-text">2T1BU40E49C179680</span>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-5">
                            <span class="ll-text">BODY:</span>
                        </div>
                        <div class="col-md-5">
                            <span class="lr-text">{{ $data['carFleet']->body ?? "" }}</span>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-5">
                            <span class="ll-text">ENGINE:</span>
                        </div>
                        <div class="col-md-5">
                            <span class="lr-text">{{ $data['carFleet']->engine  ?? ""}}</span>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-5">
                            <span class="ll-text">TRANSMISSION:</span>
                        </div>
                        <div class="col-md-5">
                            <span class="lr-text">{{ $data['carFleet']->transmission ?? "" }}</span>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-5">
                            <span class="ll-text">COLOR:</span>
                        </div>
                        <div class="col-md-5">
                            <span class="lr-text">{{ $data['carFleet']->colour ?? ""  }}</span>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-5">
                            <span class="ll-text">DATE ADDED:</span>
                        </div>
                        <div class="col-md-5">
                            <span class="lr-text">{{ $data['carFleet']->created_at ?? "" }}</span>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-5">
                            <span class="ll-text">FLEET:</span>
                        </div>
                        <div class="col-md-5">
                            <span class="lr-text">Not Availabel</span>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-5">
                            <span class="ll-text">SUPORT CENTRE:</span>
                        </div>
                        <div class="col-md-7">
                            <span class="lr-text">Not available</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="operation-data-section">
                <div class="operation-data-balance mt-2 mb-2">
                    <div class="shape-circle-100 ml-2 mr-3">
                        <svg width="20" height="25" viewBox="0 0 20 25" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.4353 9.69889C19.3358 9.50148 19.1836 9.33548 18.9956 9.21928C18.8075 9.10307 18.591 9.04121 18.3699 9.04053H12.3849V1.85852C12.3978 1.596 12.3239 1.33655 12.1746 1.12021C12.0253 0.903878 11.809 0.742688 11.559 0.661523C11.3187 0.582452 11.0595 0.581564 10.8186 0.658984C10.5777 0.736405 10.3676 0.888153 10.2184 1.09244L0.64234 14.2595C0.52236 14.4329 0.450316 14.6349 0.4335 14.8451C0.416684 15.0553 0.455694 15.2662 0.54658 15.4565C0.630277 15.674 0.775672 15.8624 0.96492 15.9985C1.15417 16.1346 1.37903 16.2125 1.61191 16.2225H7.59692V23.4046C7.59711 23.657 7.67708 23.9029 7.82542 24.1071C7.97376 24.3113 8.18287 24.4635 8.42285 24.5417C8.54312 24.579 8.66804 24.5991 8.79392 24.6016C8.98279 24.6021 9.1691 24.5578 9.33761 24.4725C9.50612 24.3872 9.65206 24.2633 9.76349 24.1108L19.3395 10.9438C19.4685 10.7652 19.5457 10.5544 19.5626 10.3348C19.5795 10.1152 19.5354 9.89511 19.4353 9.69889ZM9.99092 19.7178V15.0255C9.99092 14.7081 9.86481 14.4036 9.64033 14.1791C9.41585 13.9547 9.11139 13.8285 8.79392 13.8285H4.00592L9.99092 5.54529V10.2375C9.99092 10.555 10.117 10.8595 10.3415 11.0839C10.566 11.3084 10.8705 11.4345 11.1879 11.4345H15.9759L9.99092 19.7178Z"
                                fill="white" />
                        </svg>

                    </div>
                    <div class="operation-item-100 mb-1">
                        <span class="font-size: 12px">WALLET BALANCE</span>
                        <span style="font-size: 17px; font-weight:bold;">$50,500.00</span>
                    </div>
                </div>

                <span class="top-text-300 mb-4">VEHICLE OWNER</span>
                <div class="row mt-2 mb-3">
                    <div class="-col-sm-6 col-md-3">
                        <div class="vehicle-owner-img"></div>
                    </div>
                    <div class="-col-sm-6 col-md-9">
                        <div class="baseInfo p-0">
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <span class="ll-text">NAME:</span>
                                </div>
                                <div class="col-md-8">
                                    <span class="lr-text">{{ $data['investorInfo']->nickname }}</span>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <span class="ll-text">PHONE NO:</span>
                                </div>
                                <div class="col-md-8">
                                    <span class="lr-text">{{ $data['investorInfo']->phone }}</span>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <span class="ll-text">EMAIL:</span>
                                </div>
                                <div class="col-md-8">
                                    <span class="lr-text">{{ $data['investorInfo']->email }}</span>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <span class="ll-text">USER ID:</span>
                                </div>
                                <div class="col-md-8">
                                    <span class="lr-text">{{ $data['investorInfo']->investorid }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="d-flex align-items-center justify-content-between">
                    <span class="top-text-300 mb-4 mt-4">DRIVER INFORMATION</span>
                    <button class="assign-info" data-bs-toggle="modal" data-bs-target="#exampleModal">ASSIGN /
                        RECALL</button>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">CONFIGURATION & WALLET</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="" class="p-2" style="height: 400px; overflow-y:scroll">
                                    <div class="form-group">
                                        <label for="">ASSIGNED DRIVER</label>
                                        <select class="form-control infoInput">
                                            <option value="">Search</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">PACKAGE</label>
                                        <select class="form-control infoInput">
                                            <option value="">-- Please Select --</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">VEHICLE VALUE</label>
                                        <input type="text" class="infoInput form-control" placeholder="N0.00">
                                    </div>
                                    <div class="form-group">
                                        <label for="">OWNER COMMISSION</label>
                                        <input type="text" class="infoInput form-control" placeholder="%0">
                                    </div>
                                    <div class="form-group">
                                        <label for="">PLATFORM COMMISSION</label>
                                        <input type="text" class="infoInput form-control" placeholder="%0">
                                    </div>
                                    <div class="form-group">
                                        <label for="">FLEET OPERATOR</label>
                                        <input type="text" class="infoInput form-control" placeholder="%0">
                                    </div>
                                    <div class="form-group">
                                        <label for="">MAINTENANCE</label>
                                        <input type="text" class="infoInput form-control" placeholder="%0">
                                    </div>
                                    <div class="form-group">
                                        <label for="">REPAYMENT FREQUENCY</label>
                                        <select class="form-control infoInput">
                                            <option value="">-- Please Select --</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">START DATE</label>
                                        <input type="date" class="infoInput form-control" placeholder="%0">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="addBtn w-100">SUBMIT</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row mt-2">
                    <div class="-col-sm-6 col-md-3">
                        <div class="vehicle-owner-img"></div>
                    </div>
                    <div class="-col-sm-6 col-md-9">
                        <div class="baseInfo p-0">
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <span class="ll-text">NAME:</span>
                                </div>
                                <div class="col-md-8">
                                    <span class="lr-text">{{ $data['driverDetail']->nickname }}</span>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <span class="ll-text">PHONE NO:</span>
                                </div>
                                <div class="col-md-8">
                                    <span class="lr-text">{{ $data['driverDetail']->phone }}</span>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <span class="ll-text">EMAIL:</span>
                                </div>
                                <div class="col-md-8">
                                    <span class="lr-text">{{ $data['driverDetail']->email }}</span>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <span class="ll-text">USER ID:</span>
                                </div>
                                <div class="col-md-8">
                                    <span
                                        class="lr-text">{{ $data['driverDetail']->id ?? 'not available' }}</span>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <span class="ll-text">START DATE:</span>
                                </div>
                                <div class="col-md-8">
                                    <span class="lr-text">not avialable</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-sm-6 col-md-4 pt-3">
            <span class="status-100 mb-4 ml-2">Payment & Integration</span>
            <div class="baseInfo" style="padding-bottom: 10px;">
                <div class="row mb-2">
                    <div class="col-md-5">
                        <span class="ll-text">RENTAL VALUE:</span>
                    </div>
                    <div class="col-md-5">
                        <span class="lr-text">$30.00</span>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-5">
                        <span class="ll-text">PACKAGE:</span>
                    </div>
                    <div class="col-md-5">
                        <span class="lr-text">HIRE PURCHASE</span>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-5">
                        <span class="ll-text">PAYMENT START DATE:</span>
                    </div>
                    <div class="col-md-5">
                        <span class="lr-text">21 AUG, 2021</span>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-5">
                        <span class="ll-text">PAYMENT MODE:</span>
                    </div>
                    <div class="col-md-5">
                        <span class="lr-text">WEEKLY</span>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-5">
                        <span class="ll-text">PLATFORM COMMISSION:</span>
                    </div>
                    <div class="col-md-5">
                        <span class="lr-text">$50.00 (10%)</span>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-5">
                        <span class="ll-text">OWNER COMMISSION:</span>
                    </div>
                    <div class="col-md-5">
                        <span class="lr-text">$250.00 (90%)</span>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-5">
                        <span class="ll-text">VEHICLE COST:</span>
                    </div>
                    <div class="col-md-5">
                        <span class="lr-text">$2500.00</span>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-5">
                        <span class="ll-text">AGENT COMMISSION:</span>
                    </div>
                    <div class="col-md-5">
                        <span class="lr-text">$2.00 (3%)</span>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-5">
                        <span class="ll-text">PAYMENT END DATE:</span>
                    </div>
                    <div class="col-md-5">
                        <span class="lr-text">21 AUG, 2021</span>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-5">
                        <span class="ll-text">SECURITY DEPOSIT:</span>
                    </div>
                    <div class="col-md-5">
                        <span class="lr-text">$300.00</span>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-5">
                        <span class="ll-text">DATA SIZE:</span>
                    </div>
                    <div class="col-md-5">
                        <span class="lr-text">32MB</span>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-5">
                        <span class="ll-text">STATUS:</span>
                    </div>
                    <div class="col-md-5">
                        <span class="lr-text">CONNECTED</span>
                    </div>
                </div>


                <div id="donutchart-4" style=" height: 150px; padding-bottom:5px; font-size: 20px;">

                </div>
            </div>
        </div>
    </div>
</div>
