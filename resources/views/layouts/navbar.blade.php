<div class="navbar-header">
    <div class="d-flex">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <a href="dashboard.html" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="assets/images/logo.png" alt="" height="30">
                </span>
                <span class="logo-lg">
                    <img src="assets/images/logo.png" alt="" height="30">
                </span>
            </a>

            <a href="dashboard.html" class="logo logo-light">
                <span class="logo-sm">
                    <img src="assets/images/logo.png" alt="" height="30">
                </span>
                <span class="logo-lg">
                    <img src="assets/images/logo.png" alt="" height="30">
                </span>
            </a>
        </div>

        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
            <i class="fa fa-fw fa-bars"></i>
        </button>
        <form class=" d-none d-lg-block">
            <div class="position-relative">
                <select class="form-control align-self-center ml-4">
                    <option>Tahun Ajar</option>
                    <option selected>Tahun Ajar 2021/2022</option>
                    <option>Tahun Ajar 2022/2023</option>
                </select>
            </div>
        </form>
    </div>

    <div class="d-flex">
        <div class="dropdown d-inline-block d-lg-none ml-2">
            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="uil-calendar-alt"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" >
    
                <form class="p-3">
                    <select class="form-control w-100 m-0">
                        <option>Tahun Ajar</option>
                        <option selected>Tahun Ajar 2021/2022</option>
                        <option>Tahun Ajar 2022/2023</option>
                    </select>
                </form>
            </div>
        </div>
        <div class="dropdown d-lg-inline-block ml-1">
            <button type="button" class="btn header-item noti-icon waves-effect"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="uil-apps"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div class="px-lg-2">
                    <div class="row no-gutters">
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="assets/images/brands/github.png" alt="Github">
                                <span>GitHub</span>
                            </a>
                        </div>
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                <span>Bitbucket</span>
                            </a>
                        </div>
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                <span>Dribbble</span>
                            </a>
                        </div>
                    </div>

                    <div class="row no-gutters">
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                <span>Dropbox</span>
                            </a>
                        </div>
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                <span>Mail Chimp</span>
                            </a>
                        </div>
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="assets/images/brands/slack.png" alt="slack">
                                <span>Slack</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="uil-bell"></i>
                <span class="badge badge-danger badge-pill">3</span>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                aria-labelledby="page-header-notifications-dropdown">
                <div class="p-3">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="m-0 font-size-16"> Notifications </h5>
                        </div>
                        <div class="col-auto">
                            <a href="#!" class="small"> Mark all as read</a>
                        </div>
                    </div>
                </div>
                <div data-simplebar style="max-height: 230px;">
                    <a href="#" class="text-reset notification-item">
                        <div class="media">
                            <div class="avatar-xs mr-3">
                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                    <i class="uil-shopping-basket"></i>
                                </span>
                            </div>
                            <div class="media-body">
                                <h6 class="mt-0 mb-1">Your order is placed</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-reset notification-item">
                        <div class="media">
                            <img src="assets/images/users/avatar-3.jpg"
                                class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                            <div class="media-body">
                                <h6 class="mt-0 mb-1">James Lemire</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-1">It will seem like simplified English.</p>
                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-reset notification-item">
                        <div class="media">
                            <div class="avatar-xs mr-3">
                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                    <i class="uil-truck"></i>
                                </span>
                            </div>
                            <div class="media-body">
                                <h6 class="mt-0 mb-1">Your item is shipped</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="text-reset notification-item">
                        <div class="media">
                            <img src="assets/images/users/avatar-4.jpg"
                                class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                            <div class="media-body">
                                <h6 class="mt-0 mb-1">Salena Layfield</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="p-2 border-top">
                    <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                        <i class="uil-arrow-circle-right mr-1"></i> View More..
                    </a>
                </div>
            </div>
        </div> -->

        <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/users/avatar-4.jpg') }}"
                    alt="Header Avatar">
                <span class="d-none d-xl-inline-block ml-1 font-weight-medium font-size-15">Marcus</span>
                <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
                <!-- item-->
                <a class="dropdown-item" href="#"><i class="uil uil-user-circle font-size-18 align-middle text-muted mr-1"></i> <span class="align-middle">View Profile</span></a>
                <a class="dropdown-item" href="#"><i class="uil uil-wallet font-size-18 align-middle mr-1 text-muted"></i> <span class="align-middle">My Wallet</span></a>
                <a class="dropdown-item d-block" href="#"><i class="uil uil-cog font-size-18 align-middle mr-1 text-muted"></i> <span class="align-middle">Settings</span> <span class="badge badge-soft-success badge-pill mt-1 ml-2">03</span></a>
                <a class="dropdown-item" href="#"><i class="uil uil-lock-alt font-size-18 align-middle mr-1 text-muted"></i> <span class="align-middle">Lock screen</span></a>
                <a class="dropdown-item" href="#"><i class="uil uil-sign-out-alt font-size-18 align-middle mr-1 text-muted"></i> <span class="align-middle">Sign out</span></a>
            </div>
        </div>

    </div>
</div>