<div class="navbar-custom">
    <div class="logo-box d-flex pl-3">
      <a href="/" class="logo text-center">
        <div class="logo-lg d-flex justify-content-center align-items-center">
          <img
            src="{{asset('/assets/images/zeus.svg')}}"
            alt=""
            height="40"
            width="40"
            style="border-radius: 5px"
          />
          <div class="ml-2">
            <span class="text-inter logo-lg-text-light">The Zeus</span><br />
            <small class="m-0 text-light text-inter">Admin console</small>
          </div>
        </div>
        <span class="logo-sm">
          <img src="{{asset('assets/images/logo.jpeg')}}" alt="" height="28" />
        </span>
      </a>
    </div>

    <ul
      class="
        list-unstyled
        topnav-menu topnav-menu-left
        m-0
        d-flex
        align-items-center
      "
    >
      <li>
        <button class="button-menu-mobile waves-effect waves-light">
          <i class="fe-menu text-dark"></i>
        </button>
      </li>

      <li class="d-none d-sm-block text-inter">
        {{-- {{ moment().format("ll") }} --}}
      </li>
    </ul>
  </div>
