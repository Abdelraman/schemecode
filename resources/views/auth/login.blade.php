<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Log in</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    {{--<!-- Bootstrap 3.3.7 -->--}}
    <link rel="stylesheet" href="{{ asset('dashboard/css/bootstrap.min.css') }}">

    @if (app()->getLocale() == 'ar')
        {{--<!-- Bootstrap 3.3.7 -->--}}
        <link rel="stylesheet" href="{{ asset('dashboard/css/bootstrap-rtl.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dashboard/css/AdminLTE-rtl.min.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">

        <style>
            body {
                font-family: 'Cairo', sans-serif;
            }
        </style>
    @else
        <link rel="stylesheet" href="{{ asset('dashboard/css/AdminLTE.min.css') }}">
    @endif

    {{--<!-- iCheck -->--}}
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/icheck/square/blue.css') }}">

    {{--ie--}}
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    {{--<!-- Google Font -->--}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>

    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        @include('dashboard.partials._errors')

        <form action="{{ route('login') }}" method="post">

            {{ csrf_field() }}

            <div class="form-group has-feedback">
                <input type="email" name="email" class="form-control" placeholder="@lang('site.email')" required>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="@lang('site.password')" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>


            <div class="checkbox icheck">
                <label>
                    <input type="checkbox" name="remember"> @lang('site.remember_me')
                </label>
            </div>

            <button type="submit" class="btn btn-primary btn-block">@lang('site.login')</button>

        </form>

        <div style="margin-top: 10px">
            <a href="#">I forgot my password</a><br>
            <a href="register.html" class="text-center">Register a new membership</a>
        </div>

    </div>

</div>

{{--<!-- jQuery 3 -->--}}
<script src="{{ asset('dashboard/js/jquery.min.js') }}"></script>
{{--<!-- Bootstrap 3.3.7 -->--}}
<script src="{{ asset('dashboard/js/bootstrap.min.js') }}"></script>
{{--<!-- iCheck -->--}}
<script src="{{ asset('dashboard/plugins/icheck/icheck.min.js') }}"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>
</body>
</html>
