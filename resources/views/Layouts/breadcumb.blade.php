@if (Request::is('product'))
<!-- Breadcrumb Start -->
<div class="breadcrumb-option set-bg" data-setbg="/assets/img/breadcrumb-bg.jpg">
    <!-- <div class="breadcrumb-option set-bg" data-setbg="/assets/img/layanan-bg.jpg"> -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Produk Kami</h2>
                    <div class="breadcrumb__links">
                        <a href="{{ url('/home') }}"><i class="fa fa-home"></i> Beranda</a>
                        <span>Produk</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
@elseif (Request::is('product/details-product'))

<!-- Breadcrumb End -->
<div class="breadcrumb-option set-bg" data-setbg="/assets/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Nama Produk</h2>
                    <div class="breadcrumb__links">
                        <a href="{{ url('/home') }}"><i class="fa fa-home"></i> Beranda</a>
                        <a href="{{ url('/product') }}">Produk</a>
                        <span>Detail Produk</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Begin -->
@elseif (Request::is('about'))

<!-- Breadcrumb End -->
<div class="breadcrumb-option set-bg" data-setbg="/assets/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Tentang Kami</h2>
                    <div class="breadcrumb__links">
                        <a href="{{  url('/home') }}"><i class="fa fa-home"></i> Beranda</a>
                        <span>Tentang</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Begin -->
@elseif (Request::is('contact'))

<!-- Breadcrumb End -->
<div class="breadcrumb-option set-bg" data-setbg="/assets/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Hubungi Kami</h2>
                    <div class="breadcrumb__links">
                        <a href="{{  url('/home') }}"><i class="fa fa-home"></i> Beranda</a>
                        <span>Kontak</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Begin -->
@endif
