@section('header')
<!DOCTYPE html>
<html lang="zxx">

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__widget">
            <a href="#"><i class="fa fa-cart-plus"></i></a>
            <a href="#" class="search-switch"><i class="fa fa-search"></i></a>
            <a href="#" class="primary-btn">Add Car</a>
        </div>
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <ul class="offcanvas__widget__add">
            <!-- <li><i class="fa fa-clock-o"></i> Week day: 08:00 am to 18:00 pm</li> -->
            <li><i class="fa fa-envelope-o"></i> Info.colorlib@gmail.com</li>
        </ul>
        <div class="offcanvas__phone__num">
            <i class="fa fa-phone"></i>
            <span>(+12) 345 678 910</span>
        </div>
        <div class="offcanvas__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <!-- <span style="font-size: 15px; color: #fff; margin-left: 5px;">(+62) 81312494084</span> -->
                        <!-- <ul class="header__top__widget">
                            <li><i class="fa fa-clock-o"></i> Week day: 08:00 am to 18:00 pm</li>
														<li><i class="fa fa-envelope-o"></i> Info.colorlib@gmail.com</li>
                        </ul> -->
                    </div>
                    <div class="col-lg-5">
                        <div class="header__top__right">
                            <!-- <div class="header__top__phone">
                                <i class="fa fa-phone"></i>
                                <span>(+12) 345 678 910</span>
														</div> -->
                            <!-- <span style="font-size: 15px; color: #fff; margin-right: 5px;">admin@admin.com</span> -->
                            <div class="header__top__social">
                                <!-- <a href="#"><i class="fa fa-facebook"></i></a> -->
                                <a href="http://wa.me/6281312494084" title="WhatsApp"><i class="fa fa-whatsapp"></i></a>
                                <a href="mailto:rullrubber@gmail.com" title="Gmail"><i class="fa fa-envelope-o"></i></a>
                                <!-- <a href="#"><i class="fa fa-google"></i></a> -->
                                <!-- <a href="#"><i class="fa fa-instagram"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="{{ url('/home') }}"
                            style="text-decoration: none; color: #000; font-size: 24px; font-weight: bold;">
                            <!-- <img src="img/logo.png" alt=""> -->RULL RUBBER</a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav">
                        <nav class="header__menu">
                            <ul>
                                <li class="active"><a href="{{ url('/home') }}">Beranda</a></li>
                                <li><a href="{{ url('/product') }}">Produk</a></li>
                                <li><a href="{{ url('/about') }}">Tentang Kami</a></li>
                                <li><a href="{{ url('/contact') }}">Hubungi Kami</a></li>
                            </ul>
                        </nav>
                        <div class="header__nav__widget">
                            <div class="header__nav__widget__btn">
                                <a href="#"><i class="fa fa-cart-plus"></i></a>
                                {{-- <a href="#" class="search-switch"><i class="fa fa-search"></i></a> --}}
                            </div>
                            <a href="{{ url('/contact') }}" class="primary-btn">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    @endsection
