<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.2.0, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.2.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="{{asset('assets-t/images/text-128x78-1.png')}}" type="image/x-icon">
  <meta name="description" content="">


  <title>Tambah Soal</title>
  <link rel="stylesheet" href="{{asset('assets-t/tether/tether.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets-t/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets-t/bootstrap/css/bootstrap-grid.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets-t/bootstrap/css/bootstrap-reboot.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets-t/facebook-plugin/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets-t/formstyler/jquery.formstyler.css')}}">
  <link rel="stylesheet" href="{{asset('assets-t/formstyler/jquery.formstyler.theme.css')}}">
  <link rel="stylesheet" href="{{asset('assets-t/datepicker/jquery.datetimepicker.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets-t/animatecss/animate.css')}}">
  <link rel="stylesheet" href="{{asset('assets-t/dropdown/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets-t/socicon/css/styles.css')}}">
  <link rel="stylesheet" href="{{asset('assets-t/theme/css/style.css')}}">
  <link rel="preload" as="style" href="{{asset('assets-t/mobirise/css/mbr-additional.css')}}">
  <link rel="stylesheet" href="{{asset('assets-t/mobirise/css/mbr-additional.css')}}" type="text/css">
</head>
<body>

  <section class="menu menu1 cid-sgFzdPtcTC" once="menu" id="menu1-23">
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-brand">

                <span class="navbar-caption-wrap"><a class="navbar-caption text-black text-primary display-7" href="/tutor">MESES TUTOR</a></span>
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
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item dropdown"><a class="nav-link link text-black text-primary dropdown-toggle display-4" href="#" data-toggle="dropdown-submenu" aria-expanded="false">
                            Materi</a><div class="dropdown-menu"><a class="text-black text-primary dropdown-item display-4" href="/kelases">Daftar Materi</a><a class="text-black text-primary dropdown-item display-4" href="/kelases/create">Tambah Materi</a></div></li>
                    <li class="nav-item dropdown"><a class="nav-link link text-black text-primary dropdown-toggle display-4" href="#" data-toggle="dropdown-submenu" aria-expanded="false">
                            Video</a><div class="dropdown-menu"><a class="text-black text-primary dropdown-item display-4" href="/videos">Daftar Video</a><a class="text-black text-primary dropdown-item display-4" href="/videos/create">Tambah Video</a></div></li><li class="nav-item dropdown"><a class="nav-link link text-black text-primary dropdown-toggle display-4" href="#" aria-expanded="false" data-toggle="dropdown-submenu">
                            Soal</a><div class="dropdown-menu"><a class="text-black text-primary dropdown-item display-4" href="/soals" aria-expanded="false">Daftar Soal</a><a class="text-black text-primary dropdown-item display-4" href="/soals/create" aria-expanded="false">Tambah Soal</a></div></li>
                            <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="/aboutus">
                                Tentang Kami</a>
                            </li>
                        </ul>


            </div>
        </div>
    </nav>
</section>

<section class="form5 cid-sgFzdP2n6c" id="form5-22">


    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>Tambah Soal</strong>
            </h3>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form">
                {!! Form::open(['action' => 'SoalController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="form-group">
                        {{Form::label('body_soal', 'Isi Soal', ['class' => 'mbr-text mbr-fonts-style display-7'])}}
                        {{Form::textarea('body_soal', '', ['class' => 'form-control', 'placeholder' => 'Isi Soal Disini'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('a', 'Opsi Jawaban 1', ['class' => 'mbr-text mbr-fonts-style display-7'])}}
                        {{Form::text('a', '', ['class' => 'form-control', 'placeholder' => 'Opsi Jawaban 1 Disini'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('b', 'Opsi Jawaban 2', ['class' => 'mbr-text mbr-fonts-style display-7'])}}
                        {{Form::text('b', '', ['class' => 'form-control', 'placeholder' => 'Opsi Jawaban 2 Disini'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('c', 'Opsi Jawaban 3', ['class' => 'mbr-text mbr-fonts-style display-7'])}}
                        {{Form::text('c', '', ['class' => 'form-control', 'placeholder' => 'Opsi Jawaban 3 Disini'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('d', 'Opsi Jawaban 4', ['class' => 'mbr-text mbr-fonts-style display-7'])}}
                        {{Form::text('d', '', ['class' => 'form-control', 'placeholder' => 'Opsi Jawaban 4 Disini'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('jawaban', 'Jawaban Benar', ['class' => 'mbr-text mbr-fonts-style display-7'])}}
                        {{Form::text('jawaban', '', ['class' => 'form-control', 'placeholder' => 'Jawaban Benar Disini'])}}
                    </div>

                    <div class="form-group mbr-fonts-style display-7">
                        {{Form::label('kategori_id', 'Blok Soal', ['class' => 'mbr-text mbr-fonts-style display-7'])}}
                        &nbsp; &nbsp; &nbsp; &nbsp;
                        {{Form::select('kategori_id', $kategoris)}}
                    </div>

                    <div class="form-group mbr-fonts-style display-7">
                        {{Form::file('cover_image')}}
                    </div>
                    {{Form::submit('Tambahkan', ['class'=>'btn btn-primary display-4', 'style'=>'float:right'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>

<section class="footer3 cid-sgFzdQdG3Y" once="footers" id="footer3-24">
    <div class="container-fluid">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">





                <li class="foot-menu-item mbr-fonts-style display-7"></li><li class="foot-menu-item mbr-fonts-style display-7"></li><li class="foot-menu-item mbr-fonts-style display-7">&nbsp;&nbsp;</li><li class="foot-menu-item mbr-fonts-style display-7"></li><li class="foot-menu-item mbr-fonts-style display-7"></li></ul>
            </div>
            <div class="row social-row">
                <div class="social-list align-right pb-2">






                <div class="soc-item">
                        <a href="https://twitter.com/mobirise" target="_blank">
                            <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                            <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.youtube.com/c/mobirise" target="_blank">
                            <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://instagram.com/mobirise" target="_blank">
                            <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                            <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.behance.net/Mobirise" target="_blank">
                            <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div></div>
            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                    © Copyright 2020 MESES. All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
</section><section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;">
<a href="https://mobirise.site/d" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a>
<p style="flex: 0 0 auto; margin:0; padding-right:1rem;">Created with Mobirise - <a href="https://mobirise.site/m" style="color:#aaa;">Go here</a></p></section>
<script src="{{asset('assets-t/web/assets/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets-t/popper/popper.min.js')}}"></script>
<script src="{{asset('assets-t/tether/tether.min.js')}}"></script>
<script src="{{asset('assets-t/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5"></script>
<script src="https://apis.google.com/js/plusone.js"></script>
<script src="{{asset('assets-t/facebook-plugin/facebook-script.js')}}"></script>
<script src="{{asset('assets-t/smoothscroll/smooth-scroll.js')}}"></script>
<script src="{{asset('assets-t/formstyler/jquery.formstyler.js')}}"></script>
<script src="{{asset('assets-t/formstyler/jquery.formstyler.min.js')}}"></script>
<script src="{{asset('assets-t/datepicker/jquery.datetimepicker.full.js')}}"></script>
<script src="{{asset('assets-t/viewportchecker/jquery.viewportchecker.js')}}"></script>
<script src="{{asset('assets-t/dropdown/js/nav-dropdown.js')}}"></script>
<script src="{{asset('assets-t/dropdown/js/navbar-dropdown.js')}}"></script>
<script src="{{asset('assets-t/touchswipe/jquery.touch-swipe.min.js')}}"></script>
<script src="{{asset('assets-t/theme/js/script.js')}}"></script>
<script src="{{asset('assets-t/formoid/formoid.min.js')}}"></script>


 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>
