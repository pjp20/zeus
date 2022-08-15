@extends('main')
@section('content')
    <div class="content-page ">
        <div class="">
            <!-- Start Content-->
            <div class="mt-10">
                <!-- text-inter -->
                <div class="top-row">
                    <div>
                        <p class="sectionTitle text-inter pb-0 pl-0">Track web</p>
                    </div>
                </div>
                <div class="main-track-section">
                    <div class="left-track-info ml-2">
                        <p class="subTitle mt-2">
                            Control Panel
                        </p>
                        <div class="form-search">
                            <input type="text" placeholder="Search" class="searchInput">
                            <button class="searchBtn">
                                <i class='bx bx-search'></i>
                            </button>
                            <img src="{{ asset('assets/images/filterIcon.svg') }}" alt="">
                        </div>

                        <ul class="sub-tabs2 mt-4">
                            <li class="total-vehicles bbd">Total vehicles</li>
                            <li class="online-vehicles">Online vehicles</li>
                            <li class="offline-vehicles">
                                Offline vehicles
                            </li>
                        </ul>

                        <div class="cars-section">
                            <div class="car-info-section" id="openSideNav">
                                <div class="carIcon bg-light-blue">
                                    <img src="{{ asset('assets/images/blue_car.svg') }}" alt="">
                                </div>
                                <div class="plate-number-section">
                                    <div class="plate-number">ABC123XY</div>
                                    <div class="message">Today Mileage: 345KM</div>
                                </div>
                                <span class="driving text-blue bg-light-blue">Driving: 00:00</span>
                                <div class="opt">
                                    <i class='bx bx-dots-vertical-rounded text-dark' data-bs-toggle="dropdown"
                                        aria-expanded="false"></i>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"></a></li>
                                        <li><a class="dropdown-item" href="#"></a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="car-info-section">
                                <div class="carIcon bg-light-grey">
                                    <img src="{{ asset('assets/images/grey_car.svg') }}" alt="">
                                </div>
                                <div class="plate-number-section">
                                    <div class="plate-number">ABC123XY</div>
                                    <div class="message">Today Mileage: 345KM</div>
                                </div>
                                <span class="driving text-grey bg-light-grey">Driving: 00:00</span>
                                <div class="opt">
                                    <i class='bx bx-dots-vertical-rounded text-dark' data-bs-toggle="dropdown"
                                        aria-expanded="false"></i>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"></a></li>
                                        <li><a class="dropdown-item" href="#"></a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="car-info-section">
                                <div class="carIcon bg-light-pink">
                                    <img src="{{ asset('assets/images/pink_car.svg') }}" alt="">
                                </div>
                                <div class="plate-number-section">
                                    <div class="plate-number">ABC123XY</div>
                                    <div class="message">Today Mileage: 345KM</div>
                                </div>
                                <span class="driving text-pink bg-light-pink">Driving: 00:00</span>
                                <div class="opt">
                                    <i class='bx bx-dots-vertical-rounded text-dark' data-bs-toggle="dropdown"
                                        aria-expanded="false"></i>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"></a></li>
                                        <li><a class="dropdown-item" href="#"></a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-track-info">
                        <img src="{{ asset('assets/images/big-graph.png') }}" alt="">
                        <span class="backArrow">
                            <i class='bx bxs-chevrons-left'></i>
                        </span>
                    </div>
                    <div class="side-track-info">
                        <div class="side-region">
                            <p class="sub-title2">Date Added: 23 <span class="text-bold">August, 2022</span></p>
                            <div class="car-slider">
                                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ asset('assets/images/car-red.png') }}" class="d-block w-100"
                                                alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('assets/images/car-red.png') }}" class="d-block w-100"
                                                alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('assets/images/car-red.png') }}" class="d-block w-100"
                                                alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                {{-- <img src="{{ asset('assets/images/car-red.png') }}" alt=""> --}}
                            </div>

                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            <img src="{{ asset('assets/images/driver_info.svg') }}" alt="">
                                            <div class="mid-info">
                                                <span class="t1">Driver Information</span>
                                                <span class="t2">This is a summary of the vehicle operator.</span>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is
                                            intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                            first item's accordion body.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <img src="{{ asset('assets/images/blue_cube.svg') }}" alt="">
                                            <div class="mid-info">
                                                <span class="t1">Vehicle Details</span>
                                                <span class="t2">This is a summary of the vehicle operator, This is a
                                                    summary of the vehicle operator.</span>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is
                                            intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                            second item's accordion body. Let's imagine this being filled with some actual
                                            content.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            <img src="{{ asset('assets/images/location_yellow.svg') }}" alt="">
                                            <div class="mid-info">
                                                <span class="t1">GPS & Telematics</span>
                                                <span class="t2">This is a summary of the vehicle operator.</span>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is
                                            intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                            third item's accordion body. Nothing more exciting happening here in terms of
                                            content, but just filling up the space to make it look, at least at first
                                            glance, a bit more representative of how this would look in a real-world
                                            application.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            <img src="{{ asset('assets/images/heartbreak.svg') }}" alt="">
                                            <div class="mid-info">
                                                <span class="t1">Maintenance Information</span>
                                                <span class="t2">This is a summary of the vehicle operator.</span>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is
                                            intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                            third item's accordion body. Nothing more exciting happening here in terms of
                                            content, but just filling up the space to make it look, at least at first
                                            glance, a bit more representative of how this would look in a real-world
                                            application.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            <img src="{{ asset('assets/images/bag_purple.svg') }}" alt="">
                                            <div class="mid-info">
                                                <span class="t1">Fleet & Payment</span>
                                                <span class="t2">This is a summary of the vehicle operator, This is a
                                                    summary of the vehicle operator.</span>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is
                                            intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                            third item's accordion body. Nothing more exciting happening here in terms of
                                            content, but just filling up the space to make it look, at least at first
                                            glance, a bit more representative of how this would look in a real-world
                                            application.</div>
                                    </div>
                                </div>

                            </div>


                            <span class="frontArrow">
                                <i class='bx bxs-chevrons-right'></i>
                            </span>


                        </div>
                    </div>

                </div>

            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end content -->
    </div>

    <script>
        let openSideNavBtn = document.querySelector('#openSideNav');
        let sideNav = document.querySelector('.side-track-info');
        let rightArrow = document.querySelector('.frontArrow');

        openSideNavBtn.addEventListener('click', () => {
            sideNav.classList.toggle("showNav");
        })
        rightArrow.addEventListener('click', () => {
            sideNav.classList.toggle("showNav");
        })
    </script>
@endsection
