<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.2.0, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.2.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="{{asset('assets/images/logo.png')}}" type="image/x-icon">
  <meta name="description" content="">


  <title>Login</title>
  <link rel="stylesheet" href="{{asset('assets/tether/tether.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-grid.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-reboot.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/facebook-plugin/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/dropdown/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/animatecss/animate.css')}}">
  <link rel="stylesheet" href="{{asset('assets/formstyler/jquery.formstyler.css')}}">
  <link rel="stylesheet" href="{{asset('assets/formstyler/jquery.formstyler.theme.css')}}">
  <link rel="stylesheet" href="{{asset('assets/datepicker/jquery.datetimepicker.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/socicon/css/styles.css')}}">
  <link rel="stylesheet" href="{{asset('assets/theme/css/style.css')}}">
  <link rel="preload" as="style" href="{{asset('assets/mobirise/css/mbr-additional.css')}}"><link rel="stylesheet" href="{{asset('assets/mobirise/css/mbr-additional.css')}}" type="text/css">




</head>
<body>

  <section class="menu menu1 cid-sfXkj8RjUf" once="menu" id="menu1-o">


    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-brand">

                <span class="navbar-caption-wrap"><a class="navbar-caption text-black text-primary display-7" href="/">MESES</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                    <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="/kelas">
                            Kelas</a></li>
                    <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="/videos">
                            Video</a></li>
                    <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="/soals">
                        Soal</a>
                    </li>
                    <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="/aboutus">
                        Tentang Kami</a>
                    </li>
                </ul>
                @if(!Auth::guest())
                    <div class="navbar-buttons mbr-section-btn">
                        <a class="btn btn-primary display-4" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Keluar') }}
                         </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                             @csrf
                         </form>
                    </div>
                @endif

            </div>
        </div>
    </nav>
</section>

<section class="form7 cid-sfXkj9xX6g" id="form7-p">
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>Login</strong></h3>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form">
                <form action="{{ route('login') }}" method="POST" class="mbr-form form-with-styler mx-auto">
                    @csrf
                    <div class="">
                        <div hidden="hidden" class="alert alert-success col-12">Berhasil Login!
                        </div>
                        <div hidden="hidden" class="alert alert-danger col-12">Oops...!
                            some problem!</div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="email">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div data-for="password" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label style="font-family: 'Ubuntu', sans-serif;"class="text-black text-primary" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                        <div class="col-auto mbr-section-btn align-center">
                            <button type="submit" class="btn btn-primary display-4">Login</button>
                            <a style="text-decoration: none; font-family: 'Ubuntu', sans-serif;" class="btn btn-link" href="/register">
                                Belum Punya Akun? Register disini
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;">
<a href="https://mobirise.site/o" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a>
<p style="flex: 0 0 auto; margin:0; padding-right:1rem;display:none">Designed with Mobirise - <a href="https://mobirise.site/m" style="color:#aaa;">See it</a></p>
</section>
<script src="{{asset('assets/web/assets/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/popper/popper.min.js')}}"></script>
<script src="{{asset('assets/tether/tether.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5"></script>
<script src="https://apis.google.com/js/plusone.js"></script>
<script src="{{asset('assets/facebook-plugin/facebook-script.js')}}"></script>
<script src="{{asset('assets/smoothscroll/smooth-scroll.js')}}"></script>
<script src="{{asset('assets/dropdown/js/nav-dropdown.js')}}"></script>
<script src="{{asset('assets/dropdown/js/navbar-dropdown.js')}}"></script>
<script src="{{asset('assets/touchswipe/jquery.touch-swipe.min.js')}}"></script>
<script src="{{asset('assets/viewportchecker/jquery.viewportchecker.js')}}"></script>
<script src="{{asset('assets/formstyler/jquery.formstyler.js')}}"></script>
<script src="{{asset('assets/formstyler/jquery.formstyler.min.js')}}"></script>
<script src="{{asset('assets/datepicker/jquery.datetimepicker.full.js')}}"></script>
<script src="{{asset('assets/theme/js/script.js')}}"></script>
<script src="{{asset('assets/formoid/formoid.min.js')}}"></script>


 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>
