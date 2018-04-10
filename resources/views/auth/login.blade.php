<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Meroauto | Login</title>

    <link href="/assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="/assets/admin/css/animate.css" rel="stylesheet">

    <link href="/assets/admin/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">
                <img src="/assets/admin/img/Meroauto.png" alt="" class="img-responsive">
            </h1>

        </div>
        <h3>Welcome to Meroauto</h3>
        <p>Login to see it in action.</p>
        <form class="m-t" role="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required
                       autofocus placeholder="Email">
                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="form-group">
                <input id="password" type="password" class="form-control" name="password" required
                       placeholder="Password">

                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

            <a href="{{ route('password.request') }}">
                <small>Forgot password?</small>
            </a>
        </form>
        <p class="m-t">
            <small>&copy; Proxy Infotech Solutions Pvt. Ltd. {{date('Y')}}</small>
        </p>
    </div>
</div>
<!-- Mainly scripts -->
<script src="/assets/admin/js/jquery-3.1.1.min.js"></script>
<script src="/assets/admin/js/bootstrap.min.js"></script>
</body>

</html>
