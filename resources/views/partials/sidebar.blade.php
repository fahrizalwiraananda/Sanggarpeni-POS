<div class="sidebar">
    <div class="navbar navbar-dark fixed-top bg-blue shadow-card d-flex justify-content-between align-items-center p-3" id="sidebar">
        <div class="container-fluid">
            <div class="button-sidebar d-flex justify-content-center align-items-center">
                <span>
                    <a class="fs-4 text-three d-md-none text-decoration-none me-2" id="sidebar-btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </a>
                </span>
                <span class="fs-6 text-three fw-semibold"><span id="greetings"></span>, {{ $user->name }} !</span>
            </div>
            <div class="profile">
                <ul class="list-unstyled mb-0 d-flex justify-content-between align-items-center">
                    <li class="nav-item me-2">
                        <a class="text-one " href="profil" role="button">                        
                            @if($user->foto)
                                <img src="{{ asset('asset/uploads/foto/'.$user->foto) }}" class="img-thumbnail rounded-circle p-0 m-0" id="image-height"  alt="" alt="">
                            @endif                         
                        </a>
                    </li>
                    <li class="nav-item">
                        <div class="out bg-white-2 rounded-5 mb-0 d-flex justify-content-center align-items-center" id="image-height">
                            <a class="text-one" href="logout" role="button"><i class="fa fa-sign-out text-one" aria-hidden="true"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="offcanvas offcanvas-start sidebar-nav bg-white my-auto border border-0 shadow-sm" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header"> 
                    <img src="../asset/img/logo pos-2.png" class=" p-0 m-0 mx-auto" id="image-logo" alt="">
                </div>
                <div class="offcanvas-body ms-0 p-0" style="font-size: 12px;">
                    <div class="menu-bar">
                        <ul class="navbar-nav mx-auto">
                            <li class="py-1 px-5" >
                                <a href="{{ url('dashboard') }}" class="text-decoration-none text-four" class="text-decoration-none text-one ">
                                    <span class="iem-text d-flex justify-content-start align-items-center fw-semibold ps-2 {{Request::is('dashboard') ? 'active':'' }}">
                                        <div class="icon d-flex justify-content-center" style="width: 30px !important;">
                                            <i class="fa-solid fa-tv"></i>
                                        </div>
                                        Dashboard
                                    </span>
                                </a>
                            </li>
                            <li class="py-1 px-5">
                                <a href="{{ url('produk') }}" class="text-decoration-none text-four" class="text-decoration-none text-one">
                                    <span class="iem-text d-flex justify-content-start align-items-center fw-semibold ps-2  {{Request::is('produk') ? 'active':'' }}">
                                        <div class="icon d-flex justify-content-center" style="width: 30px !important;">
                                            <i class="fa-solid fa-boxes-packing"></i>
                                        </div>
                                        Data Produk
                                    </span>
                                </a>
                            </li>
                            <li class="py-1 px-5">
                                <a href="{{ url('kategori') }}" class="text-decoration-none text-one">
                                    <span class="iem-text d-flex justify-content-start align-items-center fw-semibold ps-2 {{Request::is('kategori') ? 'active':'' }}">
                                        <div class="icon d-flex justify-content-center" style="width: 30px !important;">
                                            <i class="fa-solid fa-boxes-packing"></i>
                                        </div>
                                        Data Kategori
                                    </span>
                                </a>
                            </li>
                            <li class="py-1 px-5">
                                <a href="transaksi-baru" class="text-decoration-none text-one">
                                    <span class="iem-text d-flex justify-content-start align-items-center fw-semibold ps-2">
                                        <div class="icon d-flex justify-content-center" style="width: 30px !important;">
                                            <i class="fa-solid fa-cash-register"></i>
                                        </div>
                                        Transaksi Baru
                                    </span>
                                </a>
                            </li>
                            <li class="py-1 px-5">
                                <a href="data-user.html" class="text-decoration-none text-one">
                                    <span class="iem-text d-flex justify-content-start align-items-center fw-semibold ps-2">
                                        <div class="icon d-flex justify-content-center" style="width: 30px !important;">
                                            <i class="fa fa-bar-chart" aria-hidden="true"></i>
                                        </div>
                                        Penjualan
                                    </span>
                                </a>
                            </li>
                            <li class="py-1 px-5">
                                <a href="{{ url('user') }}" class="text-decoration-none text-one">
                                    <span class="iem-text d-flex justify-content-start align-items-center fw-semibold ps-2 {{Request::is('user') ? 'active':'' }}">
                                        <div class="icon d-flex justify-content-center" style="width: 30px !important;">
                                            <i class="fa-solid fa-user-group"></i></div>
                                        User
                                    </span>
                                </a>
                            </li>
                            <li class="py-1 px-5">
                                <a href="{{ url('member') }}" class="text-decoration-none text-one">
                                    <span class="iem-text d-flex justify-content-start align-items-center fw-semibold ps-2 {{Request::is('member') ? 'active':'' }}">
                                        <div class="icon d-flex justify-content-center" style="width: 30px !important;">
                                            <i class="fa-solid fa-user-group"></i></div>
                                        Member
                                    </span>
                                </a>
                            </li>
                            <li class="py-1 px-5">
                                <a href="{{ url('setting') }}" class="text-decoration-none text-one">
                                    <span class="iem-text d-flex justify-content-start align-items-center fw-semibold ps-2 {{Request::is('setting') ? 'active':'' }}">
                                        <div class="icon d-flex justify-content-center" style="width: 30px !important;">
                                            <i class="fa-solid fa-credit-card"></i></div>
                                        Setting
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="offcanvas-footer  d-flex mx-auto justify-content-start align-items-center fs-6"> 
                    <ul class="navbar-nav "  style="font-size: 12px">
                        <li class=" mx-auto d-flex justify-content-center align-items-center">
                            @if($user->foto)
                                <img src="{{ asset('asset/uploads/foto/'.$user->foto) }}"  class="img-fluid rounded-circle" id="image-profile" alt="">
                            @endif 
                        </li>
                        <li class="mx-auto d-flex justify-content-center align-items-center mb-5">
                            <p class="text-one fw-normal"><a href="profil" class="text-one text-decoration-none">{{ $user->name }}</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<br>