{{-- <!-- Breadcrumb End -->
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
<!-- Breadcrumb Begin --> --}}

<!-- Car Section Begin -->
<section class="car spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="car__sidebar">
                    <div class="car__search">
                        <h5>Cari Produk</h5>
                        <form action="{{ route('search') }}" method="POST">
                            @csrf
                            <input id="search-product" name="search_product" type="text" placeholder="Cari">
                            <button type="submit" id="search"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="car__filter">
                        <h5>Filter</h5>
                        <form action="{{ route('filter_product') }}" method="POST">
                            @csrf
                            <select name="filter_product">
                                <option data-display="Pilih Tipe">Pilih Tipe</option>
                                <option value="Masker">Masker</option>
                                <option value="Gelang">Gelang</option>
                            </select>
                            <!-- <div class="filter-price">
									<p>Price:</p>
									<div class="price-range-wrap">
										<div class="filter-price-range"></div>
										<div class="range-slider">
											<div class="price-input">
												<input type="text" id="filterAmount">
											</div>
										</div>
									</div>
								</div> -->
                            <div class="car__filter__btn">
                                <button type="submit" class="site-btn">FIlter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="car__filter__option">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="car__filter__option__item">
                                <h6>Tampilkan</h6>
                                <select>
                                    <option value="">9 Produk</option>
                                    <option value="">15 Produk</option>
                                    <option value="">20 Produk</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="car__filter__option__item car__filter__option__item--right">
                                <h6>Urutkan Berdasarkan</h6>
                                <select>
                                    <option value="">Termahal</option>
                                    <option value="">Termurah</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="row-product">
                    @foreach ($products as $p)
                    <div class="col-lg-4 col-md-4">
                        <div class="car__item">
                            <div class="car__item__pic__slider owl-carousel">
                                <img src="{{ URL::to('/') }}/admin/image/{{ $p->image }}" alt="">
                            </div>
                            <div class="car__item__text">
                                <div class="car__item__text__inner">
                                    <div class="label-date">2016</div>
                                    <h5><a href="#">{{ $p->product_name }}</a></h5>
                                    <ul>
                                        <li><span>35,000</span> mi</li>
                                        <li>Auto</li>
                                        <li><span>700</span> hp</li>
                                    </ul>
                                </div>
                                <div class="car__item__price">
                                    <span class="car-option">Beli</span>
                                    <h6>{{ $p->price }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-lg-4 col-md-4">
                        <div class="car__item">
                            <div class="car__item__pic__slider owl-carousel">
                                <img src="/assets/img/produk.jpg" alt="">
                                <img src="/assets/img/produk.jpg" alt="">
                                <img src="/assets/img/produk.jpg" alt="">
                                <img src="/assets/img/produk.jpg" alt="">
                            </div>
                            <div class="car__item__text">
                                <div class="car__item__text__inner">
                                    <div class="label-date">2020</div>
                                    <h5><a href="#">Toyota camry asv50l-jeteku</a></h5>
                                    <ul>
                                        <li><span>35,000</span> mi</li>
                                        <li>Auto</li>
                                        <li><span>700</span> hp</li>
                                    </ul>
                                </div>
                                <div class="car__item__price">
                                    <span class="car-option sale">Beli</span>
                                    <h6>$73,900</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="car__item">
                            <div class="car__item__pic__slider owl-carousel">
                                <img src="/assets/img/produk.jpg" alt="">
                                <img src="/assets/img/produk.jpg" alt="">
                                <img src="/assets/img/produk.jpg" alt="">
                                <img src="/assets/img/produk.jpg" alt="">
                            </div>
                            <div class="car__item__text">
                                <div class="car__item__text__inner">
                                    <div class="label-date">2017</div>
                                    <h5><a href="#">Bmw s1000rr 2019 m</a></h5>
                                    <ul>
                                        <li><span>35,000</span> mi</li>
                                        <li>Auto</li>
                                        <li><span>700</span> hp</li>
                                    </ul>
                                </div>
                                <div class="car__item__price">
                                    <span class="car-option">Beli</span>
                                    <h6>$299<span>/Month</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="car__item">
                            <div class="car__item__pic__slider owl-carousel">
                                <img src="/assets/img/produk.jpg" alt="">
                                <img src="/assets/img/produk.jpg" alt="">
                                <img src="/assets/img/produk.jpg" alt="">
                                <img src="/assets/img/produk.jpg" alt="">
                            </div>
                            <div class="car__item__text">
                                <div class="car__item__text__inner">
                                    <div class="label-date">2018</div>
                                    <h5><a href="#">Audi q8 2020</a></h5>
                                    <ul>
                                        <li><span>35,000</span> mi</li>
                                        <li>Auto</li>
                                        <li><span>700</span> hp</li>
                                    </ul>
                                </div>
                                <div class="car__item__price">
                                    <span class="car-option">Beli</span>
                                    <h6>$319<span>/Month</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="car__item">
                            <div class="car__item__pic__slider owl-carousel">
                                <img src="/assets/img/produk.jpg" alt="">
                                <img src="/assets/img/produk.jpg" alt="">
                                <img src="/assets/img/produk.jpg" alt="">
                                <img src="/assets/img/produk.jpg" alt="">
                            </div>
                            <div class="car__item__text">
                                <div class="car__item__text__inner">
                                    <div class="label-date">2016</div>
                                    <h5><a href="#">Mustang shelby gt500</a></h5>
                                    <ul>
                                        <li><span>35,000</span> mi</li>
                                        <li>Auto</li>
                                        <li><span>700</span> hp</li>
                                    </ul>
                                </div>
                                <div class="car__item__price">
                                    <span class="car-option sale">Beli</span>
                                    <h6>$730,900</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="car__item">
                            <div class="car__item__pic__slider owl-carousel">
                                <img src="/assets/img/produk.jpg" alt="">
                                <img src="/assets/img/produk.jpg" alt="">
                                <img src="/assets/img/produk.jpg" alt="">
                                <img src="/assets/img/produk.jpg" alt="">
                            </div>
                            <div class="car__item__text">
                                <div class="car__item__text__inner">
                                    <div class="label-date">2019</div>
                                    <h5><a href="#">Lamborghini huracan evo</a></h5>
                                    <ul>
                                        <li><span>35,000</span> mi</li>
                                        <li>Auto</li>
                                        <li><span>700</span> hp</li>
                                    </ul>
                                </div>
                                <div class="car__item__price">
                                    <span class="car-option">Beli</span>
                                    <h6>$319<span>/Month</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="car__item">
                            <div class="car__item__pic__slider owl-carousel">
                                <img src="/assets/img/produk.jpg" alt="">
                                <img src="/assets/img/produk.jpg" alt="">
                                <img src="/assets/img/produk.jpg" alt="">
                                <img src="/assets/img/produk.jpg" alt="">
                            </div>
                            <div class="car__item__text">
                                <div class="car__item__text__inner">
                                    <div class="label-date">2020</div>
                                    <h5><a href="#">Lamborghini huracan evo</a></h5>
                                    <ul>
                                        <li><span>35,000</span> mi</li>
                                        <li>Auto</li>
                                        <li><span>700</span> hp</li>
                                    </ul>
                                </div>
                                <div class="car__item__price">
                                    <span class="car-option sale">Beli</span>
                                    <h6>$120,000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="car__item">
                            <div class="car__item__pic__slider owl-carousel">
                                <img src="/assets/img/produk.jpg" alt="">
                                <img src="/assets/img/produk.jpg" alt="">
                                <img src="/assets/img/produk.jpg" alt="">
                                <img src="/assets/img/produk.jpg" alt="">
                            </div>
                            <div class="car__item__text">
                                <div class="car__item__text__inner">
                                    <div class="label-date">2017</div>
                                    <h5><a href="#">Porsche cayenne turbo s</a></h5>
                                    <ul>
                                        <li><span>35,000</span> mi</li>
                                        <li>Auto</li>
                                        <li><span>700</span> hp</li>
                                    </ul>
                                </div>
                                <div class="car__item__price">
                                    <span class="car-option">Beli</span>
                                    <h6>$319<span>/Month</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="car__item">
                            <div class="car__item__pic__slider owl-carousel">
                                <img src="/assets/img/produk.jpg" alt="">
                                <img src="/assets/img/produk.jpg" alt="">
                                <img src="/assets/img/produk.jpg" alt="">
                                <img src="/assets/img/produk.jpg" alt="">
                            </div>
                            <div class="car__item__text">
                                <div class="car__item__text__inner">
                                    <div class="label-date">2020</div>
                                    <h5><a href="#">Toyota camry asv50l-jeteku</a></h5>
                                    <ul>
                                        <li><span>35,000</span> mi</li>
                                        <li>Auto</li>
                                        <li><span>700</span> hp</li>
                                    </ul>
                                </div>
                                <div class="car__item__price">
                                    <span class="car-option sale">Beli</span>
                                    <h6>$73,900</h6>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="pagination__option">
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#"><span class="arrow_carrot-2right"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Car Section End -->
