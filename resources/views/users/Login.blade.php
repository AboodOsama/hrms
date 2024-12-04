<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <title>عالم الإدارة | WOM PIONEERS</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('/assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('/assets/images/favicon.png') }}" type="image/x-icon">
    <title>Cuba - Premium Admin Template</title>
    <!-- Google font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/vendors/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/vendors/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/vendors/prism.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('/assets/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/responsive.css') }}">
</head>

<body>
    <!-- login page start-->
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card login-dark">
                    <div>
                        <div><a style="text-align: -webkit-center;" class="logo" href=""><img
                                    style="height: 100px;" class="img-fluid for-light"
                                    src="{{ asset('/assets/images/logo/logo.png') }}" alt=""><img
                                    style="height: 100px;" class="img-fluid for-dark"
                                    src="{{ asset('/assets/images/logo/logo_dark.png') }}" alt=""></a></div>
                        <div class="login-main">
                            <form class="theme-form" method="POST" action="{{ url('/UserAuth') }}">
                                @csrf
                                <h4>بوابة النظام الآلي</h4>
                                <p>تسجيل الدخول</p>
                                <!-- Display error message for invalid credentials -->
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label class="col-form-label">الإيميل</label>
                                    <input class="form-control" type="email" value="{{ old('email') }}"
                                        placeholder="Test@womyemen.com" name="email" required="">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">كلمة السر</label>
                                    <div class="form-input position-relative">
                                        <input class="form-control" type="password" name="password" required=""
                                            placeholder="*********">
                                        <div class="show-hide"><span class=""> </span></div>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <div class="checkbox p-0">
                                        <div class="text-end mt-3">
                                            <button class="btn btn-primary btn-block w-100"
                                                type="submit">تأكيد</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                const showHideSpan = document.querySelector('.show-hide span');
                showHideSpan.textContent = 'Show'; // Set initial text for the span

                document.querySelector('.show-hide').addEventListener('click', function() {
                    let passwordInput = document.querySelector('input[name="password"]');
                    if (passwordInput.type === 'password') {
                        passwordInput.type = 'text';
                        showHideSpan.textContent = 'Hide'; // Change text to 'Hide'
                    } else {
                        passwordInput.type = 'password';
                        showHideSpan.textContent = 'Show'; // Change text to 'Show'
                    }
                });
            });
        </script>

        <!-- latest jquery-->
        <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
        <!-- Bootstrap js-->
        <script src="{{ asset('/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
        <!-- feather icon js-->
        <script src="{{ asset('/assets/js/icons/feather-icon/feather.min.js') }}"></script>
        <script src="{{ asset('/assets/js/icons/feather-icon/feather-icon.js') }}"></script>
        <!-- scrollbar js-->
        <script src="{{ asset('/assets/js/scrollbar/simplebar.js') }}"></script>
        <script src="{{ asset('/assets/js/scrollbar/custom.js') }}"></script>
        <!-- Sidebar jquery-->
        <script src="{{ asset('/assets/js/config.js') }}"></script>
        <!-- Plugins JS start-->
        <script src="{{ asset('/assets/js/sidebar-menu.js') }}"></script>
        <script src="{{ asset('/assets/js/sidebar-pin.js') }}"></script>
        <script src="{{ asset('/assets/js/slick/slick.min.js') }}"></script>
        <script src="{{ asset('/assets/js/slick/slick.js') }}"></script>
        <script src="{{ asset('/assets/js/header-slick.js') }}"></script>
        <script src="{{ asset('/assets/js/prism/prism.min.js') }}"></script>
        <script src="{{ asset('/assets/js/clipboard/clipboard.min.js') }}"></script>
        <script src="{{ asset('/assets/js/custom-card/custom-card.js') }}"></script>
        <script src="{{ asset('/assets/js/typeahead/handlebars.js') }}"></script>
        <script src="{{ asset('/assets/js/typeahead/typeahead.bundle.js') }}"></script>
        <script src="{{ asset('/assets/js/typeahead/typeahead.custom.js') }}"></script>
        <script src="{{ asset('/assets/js/typeahead-search/handlebars.js') }}"></script>
        <script src="{{ asset('/assets/js/typeahead-search/typeahead-custom.js') }}"></script>
        <!-- Plugins JS Ends-->
        <!-- Theme js-->
        <script src="{{ asset('/assets/js/script.js') }}"></script>
        <script src="{{ asset('/assets/js/theme-customizer/customizer.js') }}) }}"></script>
    </div>
</body>

</html>
