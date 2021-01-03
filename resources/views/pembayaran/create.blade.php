<!DOCTYPE html>
<html>

<head>
    <!-- Site made with Mobirise Website Builder v5.2.0, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.2.0, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/text-128x78-1.png" type="image/x-icon">
    <meta name="description" content="">


    <title>Pembayaran</title>
    @if(!Auth::guest() && Auth::user()->isKamiSama())
    <link rel="stylesheet" href="{{asset('assets-t/tether/tether.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets-t/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets-t/bootstrap/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets-t/bootstrap/css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets-t/facebook-plugin/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets-t/dropdown/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets-t/animatecss/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets-t/formstyler/jquery.formstyler.css')}}">
    <link rel="stylesheet" href="{{asset('assets-t/formstyler/jquery.formstyler.theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets-t/datepicker/jquery.datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets-t/socicon/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets-t/theme/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets-t/mobirise/css/mbr-additional.css')}}" type="text/css">
    <link rel="preload" as="style" href="{{asset('assets-t/mobirise/css/mbr-additional.css')}}">
    @else
    <link rel="stylesheet" href="{{asset('assets-t/tether/tether.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets-t/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets-t/bootstrap/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets-t/bootstrap/css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets-t/facebook-plugin/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets-t/dropdown/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets-t/animatecss/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets-t/formstyler/jquery.formstyler.css')}}">
    <link rel="stylesheet" href="{{asset('assets-t/formstyler/jquery.formstyler.theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets-t/datepicker/jquery.datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets-t/socicon/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets-t/theme/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets-t/mobirise/css/mbr-additional.css')}}" type="text/css">
    <link rel="preload" as="style" href="{{asset('assets-t/mobirise/css/mbr-additional.css')}}">

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
    <link rel="stylesheet" href="{{asset('assets/mobirise/css/mbr-additional.css')}}" type="text/css">
    <link rel="preload" as="style" href="{{asset('assets/mobirise/css/mbr-additional.css')}}">
    @endif

    
</head>

<body>
    @if(!Auth::guest() && Auth::user()->isKamiSama())
    @include('pages.navbartutor')
    @else
    <section class="menu menu1 cid-sfXvYXKxbA" once="menu" id="menu1-1f">
        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
            <div class="container-fluid">
                <div class="navbar-brand">
                    <span class="navbar-caption-wrap"><a class="navbar-caption text-black text-primary display-7"
                            href="/">MESES</a></span>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                        <li class="nav-item"><a class="nav-link link text-black text-primary display-4"
                                href="/kelases">
                                Kelas</a></li>
                        <li class="nav-item"><a class="nav-link link text-black text-primary display-4"
                                href="/videos">
                                Video</a></li>
                        <li class="nav-item"><a class="nav-link link text-black text-primary display-4"
                                href="/soals">Soal</a>
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
    @endif

    <section class="form5 cid-sgFyRxCXub" id="form5-1z">


        <div class="container">
            <div class="mbr-section-head">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                    <strong>Pembayaran</strong></h3>

            </div>
            <br><br>
            <div class="mbr-section-head">
                <h5 class="mbr-section-title mbr-fonts-style align-left mb-0 display-7">
                    Berikut ini merupakan beberapa rekening resmi untuk melakukan pembayaran MESES untuk account Anda, diantaranya sebagai berikut:</h5>

            </div>
            <br><br>
            <div class="card">
                <div class="card-wrapper">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-2">
                            <div class="image-wrapper">
                                <img src="{{asset('assets/images/logo-bca.jpg')}}" alt="Mobirise" title="">
                            </div>
                        </div>
                        <div class="col-12 col-md">
                            <div class="card-box">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="bottom-line">
                                            <p class="mbr-text mbr-fonts-style m-0 display-5">BCA</p>
                                            <p class="mbr-text mbr-fonts-style m-0 display-7">Nomor Rekening</p>
                                            <p class="mbr-text mbr-fonts-style m-0 display-7">Atas Nama</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-wrapper">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-2">
                            <div class="image-wrapper">
                                <img src="{{asset('assets/images/logo-bni.jpg')}}" alt="Mobirise" title="">
                            </div>
                        </div>
                        <div class="col-12 col-md">
                            <div class="card-box">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="bottom-line">
                                            <p class="mbr-text mbr-fonts-style m-0 display-5">BNI</p>
                                            <p class="mbr-text mbr-fonts-style m-0 display-7">Nomor Rekening</p>
                                            <p class="mbr-text mbr-fonts-style m-0 display-7">Atas Nama</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-wrapper">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-2">
                            <div class="image-wrapper">
                                <img src="{{asset('assets/images/logo-mandiri.jpg')}}" alt="Mobirise" title="">
                            </div>
                        </div>
                        <div class="col-12 col-md">
                            <div class="card-box">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="bottom-line">
                                            <p class="mbr-text mbr-fonts-style m-0 display-5">Mandiri</p>
                                            <p class="mbr-text mbr-fonts-style m-0 display-7">Nomor Rekening</p>
                                            <p class="mbr-text mbr-fonts-style m-0 display-7">Atas Nama</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="mbr-section-head rounded" style="background:#CEDDB9; padding: 20px">
                <h5 class="mbr-section-title mbr-fonts-style align-left mb-0 display-7 ">
                    Jam Kerja Pembayaran: 09:00 - 17:00 WIB</h5>

            </div>
            <br>
            <div class="row justify-content-center mt-4">
                <div class="col-lg-8 mx-auto mbr-form">
                        {!! Form::open(['action' => 'PembayaranController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            <div class="form-group mbr-fonts-style display-7">
                                &nbsp;&nbsp;&nbsp;
                                {{Form::label('bank', 'Bank yang digunakan', ['class' => 'mbr-text mbr-fonts-style display-7'])}}
                                &nbsp; &nbsp; &nbsp; &nbsp;
                                {{Form::select('bank', ['BCA' => 'BCA','BNI' => 'BNI','Mandiri' => 'Mandiri'])}}
                            </div>
                            <div class="form-group">
                                {{Form::text('norek', '', ['class' => 'form-control', 'placeholder' => 'Nomor Rekening'])}}
                            </div>
                            <div class="form-group">
                                {{Form::text('pemilikrek', '', ['class' => 'form-control', 'placeholder' => 'Pemilik Rekening'])}}
                            </div>
                            <div class="form-group">
                                {{Form::date('tgltransfer', '', ['class' => 'form-control', 'placeholder' => 'Tanggal Transfer'])}}
                            </div>
                            <div class="form-group mbr-fonts-style display-7">
                                &nbsp;&nbsp;&nbsp;
                                {{Form::label('jumlah', 'Paket yang dipilih', ['class' => 'mbr-text mbr-fonts-style display-7'])}}
                                &nbsp; &nbsp; &nbsp; &nbsp;
                                {{Form::select('jumlah', ['Rp 1.000.000'  => 'Paket Bulanan - Rp 1.000.000',
                                                          'Rp 5.000.000'  => 'Paket Semester - Rp 5.000.000',
                                                          'Rp 9.000.000'  => 'Paket Tahunan - Rp 9.000.000',
                                                          'Rp 35.000.000' => 'Paket Sarjana - Rp 35.000.000'])}}
                            </div>
                            <div class="form-group">
                                {{Form::textarea('berita', '', ['class' => 'form-control', 'placeholder' => 'Berita Transfer'])}}
                            </div>
                            <div class="form-group mbr-fonts-style display-7">
                                &nbsp;&nbsp;&nbsp;
                                {{Form::label('caratransfer', 'Cara Transfer', ['class' => 'mbr-text mbr-fonts-style display-7'])}}
                                &nbsp; &nbsp; &nbsp; &nbsp;
                                {{Form::select('caratransfer', ['Setor Tunai' => 'Setor Tunai','ATM' => 'ATM','Mobile Banking' => 'Mobile Banking','Internet Banking' =>'Internet Banking'])}}
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn">
                            {{Form::submit('Tambahkan Pembayaran', ['class'=>'btn btn-primary display-4'])}}
                            </div>
                        {!! Form::close() !!}    
                </div>
            </div>
        </div>
    </section>

    <section class="footer3 cid-sgFyRyTXHh" once="footers" id="footer3-21">





        <div class="container-fluid">
            <div class="media-container-row align-center mbr-white">
                <div class="row row-links">
                    <ul class="foot-menu">





                        <li class="foot-menu-item mbr-fonts-style display-7"></li>
                        <li class="foot-menu-item mbr-fonts-style display-7"></li>
                        <li class="foot-menu-item mbr-fonts-style display-7">&nbsp;&nbsp;</li>
                        <li class="foot-menu-item mbr-fonts-style display-7"></li>
                        <li class="foot-menu-item mbr-fonts-style display-7"></li>
                    </ul>
                </div>
                <div class="row social-row">
                    <div class="social-list align-right pb-2">
                        <div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.youtube.com/c/mobirise" target="_blank">
                                <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://instagram.com/mobirise" target="_blank">
                                <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                                <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.behance.net/Mobirise" target="_blank">
                                <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row row-copirayt">
                    <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                        © Copyright 2020 MESES. All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section
        style="display: none" style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;">
        <a href="https://mobirise.site/p" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a>
        <p style="flex: 0 0 auto; margin:0; padding-right:1rem;"><a href="https://mobirise.site/q"
                style="color:#aaa;">This web page</a> was started with Mobirise web theme</p>
    </section>
    <script src="{{ asset('assets-t/web/assets/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets-t/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets-t/tether/tether.min.js') }}"></script>
    <script src="{{ asset('assets-t/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5"></script>
    <script src="https://apis.google.com/js/plusone.js"></script>
    <script src="{{ asset('assets-t/facebook-plugin/facebook-script.js') }}"></script>
    <script src="{{ asset('assets-t/smoothscroll/smooth-scroll.js') }}"></script>
    <script src="{{ asset('assets-t/dropdown/js/nav-dropdown.js') }}"></script>
    <script src="{{ asset('assets-t/dropdown/js/navbar-dropdown.js') }}"></script>
    <script src="{{ asset('assets-t/touchswipe/jquery.touch-swipe.min.js') }}"></script>
    <script src="{{ asset('assets-t/formstyler/jquery.formstyler.js') }}"></script>
    <script src="{{ asset('assets-t/viewportchecker/jquery.viewportchecker.js') }}"></script>
    <script src="{{ asset('assets-t/formstyler/jquery.formstyler.min.js') }}"></script>
    <script src="{{ asset('assets-t/datepicker/jquery.datetimepicker.full.js') }}"></script>
    <script src="{{ asset('assets-t/formoid/formoid.min.js') }}"></script>
    <script src="{{ asset('assets-t/theme/js/script.js') }}"></script>

    <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i
                class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
</body>

</html>