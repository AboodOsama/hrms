<div class="sidebar-wrapper" sidebar-layout="stroke-svg" style="background-color: #262932; color: #fff !important;">
    <div>
        <div class="logo-wrapper"><a href="#"><img style="width: 70px" class="img-fluid for-light"
                    src="{{ asset('assets/images/logo/logo.png') }}" alt=""><img style="width: 70px"
                    class="img-fluid for-dark" src="{{ asset('assets/images/logo/logo_dark.png') }}" alt=""></a>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="#"><img style="width: 30px" class="img-fluid"
                    src="{{ asset('assets/images/logo/logo-icon.png') }}" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>

                    @if ($user && $user->auth == 1)

                        <li class="sidebar-main-title">
                            <div>
                                <h6 class="">Admin</h6>
                            </div>
                        </li>
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title" href="#">
                                <i class="icofont icofont-users"></i>
                                <span class="">المستخدمين</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li><a href="{{ route('UserAdd') }}">إضافة مستخدم</a></li>
                                <li><a href="{{ route('UsersList') }}">إدارة المستخدمين</a></li>
                            </ul>
                        </li>

                                  </li>
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title" href="#">
                                <i class="icofont icofont-users"></i>
                                <span class="">إدارة الأقسام</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li><a href="">إضافة مستخدم</a></li>
                                <li><a href="">إدارة المستخدمين</a></li>
                            </ul>
                        </li>
                        {{-- <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title" href="#">
                                <i class="icofont icofont-building-alt"></i>
                                <span class="">الشركات</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li><a href="{{ route('CompanyAdd') }}">إضافة شركة</a></li>
                                <li><a href="{{ route('ListCompanies') }}">إدارة الشركات</a></li>
                            </ul>
                        </li> --}}

                    @endif




                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
