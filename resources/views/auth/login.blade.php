<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Login</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css" />
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    {{-- custom css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <script src="../assets/vendor/js/helpers.js"></script>

</head>

<body>
    <div class="login-bg">
        <div class="container-xxl">
            <div class="authentication-wrapper authentication-basic container-p-y">

                <div class="authentication-inner">
                    {{-- <div class="pb-5">
                        <h3 class="mb-2 text-center text-white">Welcome to Login Page! 👋</h3>
                    </div> --}}
                    <div class="card card-area ">
                        <div class="card-body card-area-body card-area-body-login">
                            <!-- Logo -->
                            <div class=" m-auto mb-3">
                                <div class="text-center">
                                    <a href="{{ url('/') }}" class="d-inline-flex align-items-center gap-2">
                                        <img src="{{ asset('assets/img/logo/logo.jpg') }}" width="100"
                                            class="rounded mb-2">
                                    </a>
                                    <h6 class="demo text-body text-bodyf fw-bolder pt-2 fs-4">Rayhan Enterprise</h6>
                                </div>
                            </div>
                            <!-- /Logo -->
                            <!-- Session Status -->
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST">
                                @csrf
                                <!-- Email Address -->
                                <div class="mb-3">
                                    <label for="email" class="form-label form-labelf">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{ old('email') }}" required />
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Password -->
                                <div class="mb-3 form-password-toggle">
                                    <div class="d-flex justify-content-between">
                                        <label for="password" class="form-label form-labelf">Password</label>
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}">
                                                <small>Forgot Password?</small>
                                            </a>
                                        @endif
                                    </div>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" class="form-control" name="password"
                                            required />
                                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                    </div>
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Remember Me -->
                                <div class="mb-3 form-check">
                                    <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
                                    <label class="form-check-label form-check-labelf" for="remember_me">Remember Me</label>
                                </div>

                                <!-- Submit Button -->
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary btn-primary-login d-grid w-100">Log in</button>
                                </div>
                            </form>

                            <p class="text-center ">
                                <span>New on our platform?</span>
                                <a class="text-center-login" href="{{ route('register') }}">
                                    <span class="text-primary fw-bold">Create an account</span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Core JS -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>
    <script src="../assets/js/main.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
