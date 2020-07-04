<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/assets/img/icon.png">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" type="text/css" href="/auth/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/auth/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="/auth/assets/font/pro/css/all.min.css">

    <title>Login - Rull Rubber</title>
</head>

<body>

    <!-- Container -->
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="{{ route('login') }}" method="POST" autocomplete="off" required>
                @csrf
                <h1>Login</h1>
                <div class="social-container">
                    <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>Masuk Disini</span>
                <div class="form-group">
                    <div class="input-group input-group-sm"
                        style="border-top-left-radius: 50%; border-bottom-left-radius: 50%; border-top-right-radius: 50%;">
                        <div class="input-group-prepend" style="margin-top: 15px;">
                            <span class="input-group-text" id="basic-addon1"><i class="fad fa-user-circle"></i></span>
                        </div>
                        <input id="email" type="email"
                            class="form-control form-control-sm @error('email') is-invalid @enderror"
                            placeholder="E-mail" aria-label="E-mail" aria-describedby="basic-addon1" autofocus=""
                            value="{{ old('email') }}" name="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-group input-group-sm"
                        style="border-top-left-radius: 50%; border-bottom-left-radius: 50%; border-top-right-radius: 50%;">
                        <div class="input-group-prepend" style="margin-top: 15px;">
                            <span class="input-group-text" id="basic-addon1"><i class="fad fa-lock-alt"></i></span>
                        </div>
                        <input class="form-control form-control-sm @error('password') is-invalid @enderror"
                            type="password" name="password" id="password" placeholder="Password" data-toggle="password"
                            name="password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <label>
                        <input type="checkbox" id="methods">
                        <i class="fad fa-eye"></i>
                        <i class="my-icon far fa-low-vision"></i>
                    </label>
                </div>
                <button class="my-btn2" type="submit">Masuk</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            {{-- <form action="#" method="" autocomplete="off" required>
                <h1>Register</h1>
                <div class="social-container">
                    <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>Daftar Disini</span>
                <div class="form-group">
                    <div class="input-group input-group-sm"
                        style="border-top-left-radius: 50%; border-bottom-left-radius: 50%; border-top-right-radius: 50%;">
                        <div class="input-group-prepend" style="margin-top: 15px;`">
                            <span class="input-group-text" id="basic-addon1"><i class="fad fa-user-circle"></i></span>
                        </div>
                        <input type="text" class="form-control form-control-sm" placeholder="Username"
                            aria-label="Username" aria-describedby="basic-addon1" autofocus="">
                    </div>
                    <div class="input-group input-group-sm"
                        style="border-top-left-radius: 50%; border-bottom-left-radius: 50%; border-top-right-radius: 50%;">
                        <div class="input-group-prepend" style="margin-top: 15px;">
                            <span class="input-group-text" id="basic-addon1"><i class="fad fa-lock-alt"></i></span>
                        </div>
                        <input class="form-control form-control-sm" type="password" name="password" id="password"
                            placeholder="Password" data-toggle="password">
                    </div>
                    <label>
                        <input type="checkbox" id="methods">
                        <i class="fad fa-eye"></i>
                        <i class="my-icon far fa-low-vision"></i>
                    </label>
                    <select id="inputState" class="form-control form-control-sm">
                        <option selected>Pilih Level</option>
                        <option>Admin</option>
                        <option>Owner</option>
                        <option>Waiter</option>
                        <option>Cashier</option>
                    </select>
                </div>
                <button class="my-btn">Daftar</button>
            </form> --}}
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Rull Rubber</h1>
                    {{-- <p>sudah punya akun?</p>
                    <button class="ghost" id="signIn">Daftar</button> --}}
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Rull Rubber</h1>
                    {{-- <p>Masuk disini</p> --}}
                    <button class="ghost mt-3" id="signUp">Mulai</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Container -->

    <!-- Footer -->
    <footer>
        <p>Copyright &copy; 2020 All Rights Reserved by Rezky.</p>
    </footer>
    <!-- End Footer -->

    <!-- Script -->
    <script src="/auth/assets/js/script.js"></script>
    <script src="/auth/assets/font/pro/js/all.js"></script>
    <script src="/auth/assets/js/bootstrap-show-password.js"></script>
    <!-- End Script -->

</body>

</html>
