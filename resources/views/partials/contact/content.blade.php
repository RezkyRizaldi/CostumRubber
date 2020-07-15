<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="contact__text">
                    <div class="section-title">
                        <h2>Kirim Pesan Sekarang</h2>
                        <p>Untuk pembuatan rubber costum design.</p>
                    </div>
                    <!-- <ul>
                        <li><span>Weekday</span> 08:00 am to 18:00 pm</li>
                        <li><span>Saturday:</span> 10:00 am to 16:00 pm</li>
                        <li><span>Sunday:</span> Closed</li>
                    </ul> -->
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="contact__form">
                    @if($message=Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">X</button>
                        <strong>{{$message}}</strong>
                    </div>
                    @endif
                    <form action="{{ route('contact') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Nama" name="username"
                                    class="@error('username') is-invalid @enderror" value="{{ old('username') }}">
                                @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <input type="email" placeholder="Alamat Email" name="email"
                                    class="@error('email') is-invalid @enderror" value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <input type="text" placeholder="Subjek" name="subject"
                            class="@error('subject') is-invalid @enderror" value="{{ old('subject') }}">
                        @error('subject')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <textarea placeholder="Pesan" name="message" class="@error('message') is-invalid @enderror"
                            value="{{ old('message') }}"></textarea>
                        @error('message')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <button type="submit" class="site-btn">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->