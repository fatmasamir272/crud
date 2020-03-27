<div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
        <a href="{{ url('admin') }}" class="logo">
            <span>
                <!--img src="{{ asset("backend/assets/images/logo.png") }}" alt="" height="16"-->
                    <span style="color: #fff" height="16">Admin</span>
            </span>
            <i>
            <!--img src="{{asset ("backend/assets/images/logo_sm.png") }}" alt="" height="28"-->
                <i style="color: #fff" height="28">Admin</i>
            </i>
        </a>
    </div>

    <nav class="navbar-custom">

        <ul class="list-unstyled topbar-right-menu float-right mb-0">




            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <img src="{{ asset("backend/assets/images/users/avatar-1.jpg") }}" alt="user" class="rounded-circle">
                    <span class="ml-1">@if(Auth::check()) {{ Auth::user()->name }} @endif <i class="mdi mdi-chevron-down"></i> </span>
                </a>
                <div class="dropdown-menu dropdown-menu-left profile-dropdown ">

                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fi-head"></i> <span>{{ __('topbar.myAccount') }}</span>
                    </a>

                    <!--a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fi-cog"></i> <span>Settings</span>
                    </a-->

                    <!-- item-->

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fi-power"></i>
                        <span>
                            <span href="{{ route('logout') }}"
                                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('topbar.logout') }}
                            </span>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </span>
                    </a>

                </div>
            </li>

        </ul>

        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left waves-light waves-effect">
                    <i class="dripicons-menu"></i>
                </button>
            </li>
            <li class="hide-phone app-search">
                <form role="search" class="">
                    <input type="text" placeholder="{{ __('topbar.search') }}" class="form-control">
                    <a href=""><i class="fa fa-search"></i></a>
                </form>
            </li>
        </ul>

    </nav>

</div>