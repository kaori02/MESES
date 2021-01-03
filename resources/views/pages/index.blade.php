<!DOCTYPE html>
<html>

<head>
    <!-- Site made with Mobirise Website Builder v5.2.0, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.2.0, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <meta name="description" content="">


    <title>Home</title>
    <link rel="stylesheet" href="{{asset('assets/web/assets/mobirise-icons/mobirise-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/web/assets/mobirise-icons2/mobirise2.css')}}">
    <link rel="stylesheet" href="{{asset('assets/tether/tether.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/facebook-plugin/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dropdown/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/animatecss/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/as-pie-progress/css/progress.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/socicon/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/theme/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/mobirise/css/mbr-additional.css')}}" type="text/css">
    <link rel="preload" as="style" href="{{asset('assets/mobirise/css/mbr-additional.css')}}">

</head>

<body>

    <section class="menu menu1 cid-sfWX4aK29w" once="menu" id="menu1-5">


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

    <section class="cid-sfWVWPR0KV mbr-fullscreen mbr-parallax-background" id="header2-1">



        <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(35, 35, 35);"></div>

        <div class="container align-center">
            <div class="row justify-content-md-center">
                <div class="mbr-white col-md-10">
                    <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                        Medical Courses</h1>
                    <p class="mbr-text pb-3 mbr-fonts-style display-5">Your One Stop Course</p>
                    @if(Auth::guest())
                    <div class="mbr-section-btn"><a class="btn btn-md btn-primary display-4" href="/register">Daftar
                            Sekarang</a>
                        <a class="btn btn-md btn-white display-4" href="/login">Sudah punya akun? Masuk</a></div>
                    @endif
                    @if(!Auth::guest())
                    @if (Auth::user()->isKamiSama())
                    <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="/tutor">Masuk bagian tutor
                            sekarang</a>
                        {{-- <a class="btn btn-md btn-white display-4" href="/login">Sudah punya akun? Masuk</a> --}}
                    </div>
                    @endif
                    @endif

                    @if(!Auth::guest())
                    @if (Auth::user()->isSubbed())
                    <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="/subscription">Cek Subskripsimu Disini</a>
                    </div>
                    @endif
                    @endif
                </div>
            </div>
        </div>
        <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
            <a href="#next">
                <i class="mbri-down mbr-iconfont"></i>
            </a>
        </div>
    </section>

    <section class="content6 cid-sfXawcbEx5" id="content6-d">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <hr class="line">
                    <p class="mbr-text align-center mbr-fonts-style my-4 display-5">"Gunakan waktu sebaik
                        mungkin,<br>jangan lewatkan kesempatan yang ada."<br><br>- William Shakespeare -</p>
                    <hr class="line">
                </div>
            </div>
        </div>
    </section>

    <section class="features3 cid-sfXaCC9IwZ" id="features3-e">




        <div class="container">
            <div class="media-container-row">
                <div class="card p-3 col-12 col-md-6 col-lg-4">
                    <div class="card-wrapper">
                        <div class="card-img">
                            <img src="assets/images/mbr-674x449.jpg" alt="Mobirise">
                        </div>
                        <div class="card-box">
                            <h4 class="card-title mbr-fonts-style display-7">Materi Komprehensif</h4>
                            <p class="mbr-text mbr-fonts-style display-7">Materi yang singkat, padat, dan jelas untuk memaksimalkan waktu belajar</p>
                        </div>
                        <div class="mbr-section-btn text-center">
                            <a href="/kelases" class="btn btn-primary display-4">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card p-3 col-12 col-md-6 col-lg-4">
                    <div class="card-wrapper">
                        <div class="card-img">
                            <img src="assets/images/mbr-626x313.jpg" alt="Mobirise">
                        </div>
                        <div class="card-box">
                            <h4 class="card-title mbr-fonts-style display-7">Tutorial&nbsp;</h4>
                            <p class="mbr-text mbr-fonts-style display-7">
                                Dengan Video tutorial dan penjelasan materi yang komperhensif, mahasiswa dapat lebih mudah memahami materi
                            </p>
                        </div>
                        <div class="mbr-section-btn text-center">
                            <a href="/videos" class="btn btn-primary display-4">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card p-3 col-12 col-md-6 col-lg-4">
                    <div class="card-wrapper">
                        <div class="card-img">
                            <img src="assets/images/background3.jpg" alt="Mobirise">
                        </div>
                        <div class="card-box">
                            <h4 class="card-title mbr-fonts-style display-7">Tutor Berpengalaman</h4>
                            <p class="mbr-text mbr-fonts-style display-7">
                                Tutor Berpengalaman membantu anda dengan diskusi interaktif untuk memperdalam pemahaman mahasiswa terhadap materi
                            </p>
                        </div>
                        <div class="mbr-section-btn text-center">
                            <a href="/tutorus" class="btn btn-primary display-4">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="services3 cid-sfXe6eRwyY" id="services3-f">
        <!---->

        <!---->
        <!--Overlay-->

        <!--Container-->
        <div class="container">
            <div class="row">
                <!--Titles-->
                <div class="title pb-5 col-12">
                    <h2 class="align-left mbr-fonts-style display-2">
                        Daftar Materi Blok</h2>

                </div>
                <!--Card-1-->
                <div class="card px-3 col-12 col-md-6">
                    <div class="card-wrapper media-container-row media-container-row">
                        <div class="card-box">
                            <div class="top-line pb-1">
                                <h4 class="card-title mbr-fonts-style display-5">
                                    Saraf
                                </h4>
                                <p class="mbr-text card-title cost mbr-fonts-style m-0 display-5">...</p>
                            </div>
                            <div class="bottom-line">
                                {{-- <p class="mbr-text mbr-fonts-style display-7">
                                    Lorem ipsum dolor sit amet, coasdasdasdasdsadsadnsectetur adipisicing elit.
                                    Doloribus, odit?
                                </p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!--Card-2-->
                <div class="card px-3 col-12 col-md-6">
                    <div class="card-wrapper media-container-row media-container-row">
                        <div class="card-box">
                            <div class="top-line pb-3">
                                <h4 class="card-title mbr-fonts-style display-5">
                                    Psikiatri
                                </h4>
                                <p class="mbr-text card-title cost mbr-fonts-style m-0 display-5">
                                    ...
                                </p>
                            </div>
                            <div class="bottom-line">
                                {{-- <p class="mbr-text mbr-fonts-style display-7">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, odit?
                                </p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!--Card-3-->
                <div class="card px-3 col-12 col-md-6">
                    <div class="card-wrapper media-container-row media-container-row">
                        <div class="card-box">
                            <div class="top-line pb-3">
                                <h4 class="card-title mbr-fonts-style display-5">
                                    THT
                                </h4>
                                <p class="mbr-text card-title cost mbr-fonts-style m-0 display-5">
                                    ...
                                </p>
                            </div>
                            <div class="bottom-line">
                                {{-- <p class="mbr-text mbr-fonts-style display-7">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, odit?
                                </p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!--Card-4-->
                <div class="card px-3 col-12 col-md-6">
                    <div class="card-wrapper media-container-row media-container-row">
                        <div class="card-box">
                            <div class="top-line pb-3">
                                <h4 class="card-title mbr-fonts-style display-5">
                                    Mata
                                </h4>
                                <p class="mbr-text card-title cost mbr-fonts-style m-0 display-5">
                                    ...
                                </p>
                            </div>
                            <div class="bottom-line">
                                {{-- <p class="mbr-text mbr-fonts-style display-7">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, odit?
                                </p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!--Card-5-->
                <div class="card px-3 col-12 col-md-6">
                    <div class="card-wrapper media-container-row media-container-row">
                        <div class="card-box">
                            <div class="top-line pb-3">
                                <h4 class="card-title mbr-fonts-style display-5">
                                    Respirasi
                                </h4>
                                <p class="mbr-text card-title cost mbr-fonts-style m-0 display-5">
                                    ...
                                </p>
                            </div>
                            <div class="bottom-line">
                                {{-- <p class="mbr-text mbr-fonts-style display-7">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, odit?
                                </p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!--Card-6-->
                <div class="card px-3 col-12 col-md-6">
                    <div class="card-wrapper media-container-row media-container-row">
                        <div class="card-box">
                            <div class="top-line pb-3">
                                <h4 class="card-title mbr-fonts-style display-5">
                                    Kardiologi
                                </h4>
                                <p class="mbr-text card-title cost mbr-fonts-style m-0 display-5">
                                    ...
                                </p>
                            </div>
                            <div class="bottom-line">
                                {{-- <p class="mbr-text mbr-fonts-style display-7">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, odit?
                                </p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!--Card-7-->
                <div class="card px-3 col-12 col-md-6">
                    <div class="card-wrapper media-container-row media-container-row">
                        <div class="card-box">
                            <div class="top-line pb-3">
                                <h4 class="card-title mbr-fonts-style display-5">
                                    Gastrohepato
                                </h4>
                                <p class="mbr-text card-title cost mbr-fonts-style m-0 display-5">
                                    ...
                                </p>
                            </div>
                            <div class="bottom-line">
                                {{-- <p class="mbr-text mbr-fonts-style display-7">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, odit?
                                </p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!--Card-8-->
                <div class="card px-3 col-12 col-md-6">
                    <div class="card-wrapper media-container-row media-container-row">
                        <div class="card-box">
                            <div class="top-line pb-3">
                                <h4 class="card-title mbr-fonts-style display-5">
                                    Ginjal
                                </h4>
                                <p class="mbr-text card-title cost mbr-fonts-style m-0 display-5">
                                    ...
                                </p>
                            </div>
                            <div class="bottom-line">
                                {{-- <p class="mbr-text mbr-fonts-style display-7">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, odit?
                                </p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!--Card-9-->
                <div class="card px-3 col-12 col-md-6">
                    <div class="card-wrapper media-container-row media-container-row">
                        <div class="card-box">
                            <div class="top-line pb-3">
                                <h4 class="card-title mbr-fonts-style display-5">
                                    Reproduksi
                                </h4>
                                <p class="mbr-text card-title cost mbr-fonts-style m-0 display-5">
                                    ...
                                </p>
                            </div>
                            <div class="bottom-line">
                                {{-- <p class="mbr-text mbr-fonts-style display-7">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, odit?
                                </p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!--Card-10-->
                <div class="card px-3 col-12 col-md-6">
                    <div class="card-wrapper media-container-row media-container-row">
                        <div class="card-box">
                            <div class="top-line pb-3">
                                <h4 class="card-title mbr-fonts-style display-5">
                                    Endokrin
                                </h4>
                                <p class="mbr-text card-title cost mbr-fonts-style m-0 display-5">
                                    ...
                                </p>
                            </div>
                            <div class="bottom-line">
                                {{-- <p class="mbr-text mbr-fonts-style display-7">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, odit?
                                </p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!--Card-11-->
                <div class="card px-3 col-12 col-md-6">
                    <div class="card-wrapper media-container-row media-container-row">
                        <div class="card-box">
                            <div class="top-line pb-3">
                                <h4 class="card-title mbr-fonts-style display-5">
                                    Hematoimuno
                                </h4>
                                <p class="mbr-text card-title cost mbr-fonts-style m-0 display-5">
                                    ...
                                </p>
                            </div>
                            <div class="bottom-line">
                                {{-- <p class="mbr-text mbr-fonts-style display-7">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, odit?
                                </p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!--Card-12-->
                <div class="card px-3 col-12 col-md-6">
                    <div class="card-wrapper media-container-row media-container-row">
                        <div class="card-box">
                            <div class="top-line pb-3">
                                <h4 class="card-title mbr-fonts-style display-5">
                                    Muskuloskeletal
                                </h4>
                                <p class="mbr-text card-title cost mbr-fonts-style m-0 display-5">
                                    ...
                                </p>
                            </div>
                            <div class="bottom-line">
                                {{-- <p class="mbr-text mbr-fonts-style display-7">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, odit?
                                </p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="counters1 counters cid-sfX37KdytC" id="counters1-a">





        <div class="container">
            <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">
                Data saat ini</h2>
            <h3 class="mbr-section-subtitle mbr-fonts-style display-5">
                Apa aja yang sudah ikut
            </h3>

            <div class="container pt-4 mt-2">
                <div class="media-container-row">
                    <div class="card p-3 align-center col-12 col-md-6 col-lg-4">
                        <div class="panel-item p-3">
                            <div class="card-img pb-3">
                                <span class="mbr-iconfont mobi-mbri-users mobi-mbri"></span>
                            </div>

                            <div class="card-text">
                                <h3 class="count pt-3 pb-3 mbr-fonts-style display-2">
                                    {{$userc}}
                                </h3>
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                    Mahasiswa</h4>
                            </div>
                        </div>
                    </div>


                    <div class="card p-3 align-center col-12 col-md-6 col-lg-4">
                        <div class="panel-item p-3">
                            <div class="card-img pb-3">
                                <span class="mbr-iconfont mbri-users"></span>
                            </div>
                            <div class="card-text">
                                <h3 class="count pt-3 pb-3 mbr-fonts-style display-2">
                                    {{$tutorc}}
                                </h3>
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                    Tutor</h4>
                            </div>
                        </div>
                    </div>

                    <div class="card p-3 align-center col-12 col-md-6 col-lg-4">
                        <div class="panel-item p-3">
                            <div class="card-img pb-3">
                                <span class="mbr-iconfont socicon-buffer socicon"></span>
                            </div>
                            <div class="card-text">
                                <h3 class="count pt-3 pb-3 mbr-fonts-style display-2">{{$kelasc}}</h3>
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                    Blok Materi</h4>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>

    <section class="testimonails3 carousel slide testimonials-slider cid-sfXa9RuStR" data-interval="false" id="testimonials3-c">
        <div class="text-center container">
            <h3 class="mb-4 mbr-fonts-style display-2">
                <strong>Testimoni</strong>
            </h3>

            <div class="carousel slide" role="listbox" data-pause="true" data-keyboard="false" data-ride="carousel"
                data-interval="8000">
                <div class="carousel-inner">


                    <div class="carousel-item">
                        <div class="user col-md-8">
                            <div class="user_image">
                                <img src="assets/images/team3.jpg">
                            </div>
                            <div class="user_text mb-4">
                                <p class="mbr-fonts-style display-7">
                                    MESES telah membantu saya dalam banyak hal - hal yang berkaitan dengan materi kuliah saya. Terima kasih kepada MESES, saya telah menemukan sumber materi yang mumpuni untuk perkuliahan saya. Saya merekomendasikan MESES untuk para mahasiswa kedokteran yang membutuhkan referensi materi yang notabene sulit untuk diakses, terlebih pada masa pandemi kali ini
                                </p>
                            </div>
                            <div class="user_name mbr-fonts-style mb-2 display-7">
                                <strong>Liona Marzia</strong>
                            </div>
                            <div class="user_desk mbr-fonts-style display-7">
                                Mahasiswa Kedokteran
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="user col-md-8">
                            <div class="user_image">
                                <img src="assets/images/kita2.jpg">
                            </div>
                            <div class="user_text mb-4">
                                <p class="mbr-fonts-style display-7">
                                    Keren, materi yang di berikan sangat jelas dan mudah dipahami. Saya bisa mengimplementasikan materi pada MESES dengan praktikum kedokteran yang saya ikuti. Serta, soal - soal yang diberikan pada MESES sangat sesuai dengan soal - soal yang diujikan di perkuliahan. Memang terbaik!!
                                </p>
                            </div>
                            <div class="user_name mbr-fonts-style mb-2 display-7">
                                <strong>Kintani Shurabi</strong>
                            </div>
                            <div class="user_desk mbr-fonts-style display-7">
                                Mahasiswa Kedokteran
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-controls">
                    <a class="carousel-control-prev" role="button" data-slide="prev">
                        <span aria-hidden="true" class="mobi-mbri mobi-mbri-arrow-prev mbr-iconfont"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next" role="button" data-slide="next">
                        <span aria-hidden="true" class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing2 cid-sfX2HlteAh" id="pricing2-7">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 align-center col-lg-6">
                    <div class="plan">
                        <div class="plan-header">
                            <h6 class="plan-title mbr-fonts-style mb-3 display-5">
                                <strong>Bulanan</strong>
                            </h6>
                            <div class="plan-price">
                                <p class="price mbr-fonts-style m-0 display-2"><strong>Rp 1.000.000</strong></p>
                                {{-- <p class="price-term mbr-fonts-style mb-3 display-7"><strong>Per bulan</strong> --}}
                                </p>
                            </div>
                        </div>
                        <div class="plan-body">
                            <div class="plan-list mb-4">
                                <ul class="list-group mbr-fonts-style list-group-flush display-7">
                                    {{-- <li style="opacity: 0.5;" class="list-group-item">Rangkuman Materi <span style="color: red">&#10008;</span>
                                    </li>
                                    <li class="list-group-item">Akses Gratis 1 Video
                                    </li>
                                    <li style="opacity: 0.5;" class="list-group-item">Latihan Soal <span style="color: red">&#10008;</span>
                                    </li>
                                    <li style="opacity: 0.5;" class="list-group-item">Forum QnA Bersama Tutor <span style="color: red">&#10008;</span></li> --}}
                                    <li class="list-group-item">Rangkuman Materi
                                    </li>
                                    <li class="list-group-item">Akses Seluruh Video
                                    </li>
                                    <li class="list-group-item">Latihan Soal
                                    </li>
                                    <li class="list-group-item">Forum QnA Bersama Tutor</li>
                                </ul>
                            </div>
                            <div class="mbr-section-btn text-center">
                                <a href="/pembayaran/create" class="btn btn-primary display-4">Dapatkan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 align-center col-lg-6 pb-5">
                    <div class="plan">
                        <div class="plan-header">
                            <h6 class="plan-title mbr-fonts-style mb-3 display-5">
                                <strong>Semester</strong>
                            </h6>
                            <div class="plan-price">
                                <p class="price mbr-fonts-style m-0 display-2"><strong>Rp 5.000.000</strong></p>
                                {{-- <p class="price-term mbr-fonts-style mb-3 display-7"><strong>Per bulan</strong> --}}
                                </p>
                            </div>
                        </div>
                        <div class="plan-body">
                            <div class="plan-list mb-4">
                                <ul class="list-group mbr-fonts-style list-group-flush display-7">
                                    <li class="list-group-item">Rangkuman Materi
                                    </li>
                                    <li class="list-group-item">Akses Seluruh Video
                                    </li>
                                    <li class="list-group-item">Latihan Soal
                                    </li>
                                    <li class="list-group-item">Forum QnA Bersama Tutor</li>
                                </ul>
                            </div>
                            <div class="mbr-section-btn text-center">
                                <a href="/pembayaran/create" class="btn btn-primary display-4">Dapatkan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 col-md-6 align-center col-lg-6">
                    <div class="plan">
                        <div class="plan-header">
                            <h6 class="plan-title mbr-fonts-style mb-3 display-5">
                                <strong>Tahunan</strong>
                            </h6>
                            <div class="plan-price">
                                <p class="price mbr-fonts-style m-0 display-2"><strong>Rp 9.000.000</strong></p>
                                </p>
                            </div>
                        </div>
                        <div class="plan-body">
                            <div class="plan-list mb-4">
                                <ul class="list-group mbr-fonts-style list-group-flush display-7">
                                    <li class="list-group-item">Rangkuman Materi
                                    </li>
                                    <li class="list-group-item">Akses Seluruh Video
                                    </li>
                                    <li class="list-group-item">Latihan Soal
                                    </li>
                                    <li class="list-group-item">Forum QnA Bersama Tutor</li>
                                </ul>
                            </div>
                            <div class="mbr-section-btn text-center">
                                <a href="/pembayaran/create" class="btn btn-primary display-4">Dapatkan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 align-center col-lg-6">
                    <div class="plan">
                        <div class="plan-header">
                            <h6 class="plan-title mbr-fonts-style mb-3 display-5">
                                <strong>Sarjana</strong>
                            </h6>
                            <div class="plan-price">
                                <p class="price mbr-fonts-style m-0 display-2"><strong>Rp 35.000.000</strong></p>
                                <p class="price-term mbr-fonts-style mb-3 display-7"><strong>4 tahun</strong>
                                </p>
                            </div>
                        </div>
                        <div class="plan-body">
                            <div class="plan-list mb-4">
                                <ul class="list-group mbr-fonts-style list-group-flush display-7">
                                    <li class="list-group-item">Rangkuman Materi
                                    </li>
                                    <li class="list-group-item">Akses Seluruh Video
                                    </li>
                                    <li class="list-group-item">Latihan Soal
                                    </li>
                                    <li class="list-group-item">Forum QnA Bersama Tutor</li>
                                </ul>
                            </div>
                            <div class="mbr-section-btn text-center">
                                <a href="/pembayaran/create" class="btn btn-primary display-4">Dapatkan Sekarang</a>                                
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="footer3 cid-sfXBI85u46" once="footers" id="footer3-1s">





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
    <section style="display:none"
        style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;">
        <a href="https://mobirise.site/g" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a>
        <p style="flex: 0 0 auto; margin:0; padding-right:1rem;">Mobirise web page software - <a
                href="https://mobirise.site/p" style="color:rgb(32, 167, 126);">Go here</a></p>
    </section>
    <script src="{{ asset('assets/web/assets/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets/tether/tether.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5"></script>
    <script src="https://apis.google.com/js/plusone.js"></script>
    <script src="{{ asset('assets/facebook-plugin/facebook-script.js') }}"></script>
    <script src="{{ asset('assets/smoothscroll/smooth-scroll.js') }}"></script>
    <script src="{{ asset('assets/dropdown/js/nav-dropdown.js') }}"></script>
    <script src="{{ asset('assets/touchswipe/jquery.touch-swipe.min.js') }}"></script>
    <script src="{{ asset('assets/dropdown/js/navbar-dropdown.js') }}"></script>
    <script src="{{ asset('assets/viewportchecker/jquery.viewportchecker.js') }}"></script>
    <script src="{{ asset('assets/as-pie-progress/jquery-as-pie-progress.min.js') }}"></script>
    <script src="{{ asset('assets/parallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js') }}"></script>
    <script src="{{ asset('assets/mbr-testimonials-slider/mbr-testimonials-slider.js') }}"></script>
    <script src="{{ asset('assets/theme/js/script.js') }}"></script>


    <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i
                class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
</body>

</html>
