                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="dashboard.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{ asset('assets/images/logo-1.png') }}" alt="" height="30">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="" height="45">
                        </span>
                    </a>

                    <a href="dashboard.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="" height="20">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <div data-simplebar class="sidebar-menu-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>
                            <li>
                                <a href="/">
                                    <i class="uil-home-alt"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="menu-title">Master Data</li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="uil-database-alt"></i>
                                    <span>Master</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li><a href="master-struktur.html">Struktur</a></li>
                                    <li><a href="master-jenis-surat.html">Jenis Surat</a></li>
                                    <li><a href="master-kode-klasifikasi.html">Kode Klasifikasi</a></li>
                                    <li><a href="/master/kode-sifat">Kode Sifat</a></li>
                                    <li><a href="master-kode-urgensi.html">Kode Urgensi</a></li>
                                    <li><a href="master-petunjuk.html">Petunjuk</a></li>
                                </ul>
                            </li>
                            <li class="menu-title">Pengelolaan</li>
                            <li>
                                <a href="surat-masuk.html">
                                    <i class="uil-envelope-download"></i>
                                    <span>Surat Masuk</span>
                                </a>
                            </li>
                            <li>
                                <a href="surat-keluar.html">
                                    <i class="uil-envelope-upload"></i>
                                    <span>Surat Keluar</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>