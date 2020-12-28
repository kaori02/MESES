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


    <title>Tambah Video</title>
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
    <style>
        body {font-family: Arial;}
        
        /* Style the tab */
        .tab {
          overflow: hidden;
          border: 1px solid #ccc;
          background-color: #f1f1f1;
        }
        
        /* Style the buttons inside the tab */
        .tab button {
          background-color: inherit;
          float: left;
          border: none;
          outline: none;
          cursor: pointer;
          padding: 14px 16px;
          transition: 0.3s;
          font-size: 17px;
        }
        
        /* Change background color of buttons on hover */
        .tab button:hover {
          background-color: #ddd;
        }
        
        /* Create an active/current tablink class */
        .tab button.active {
          background-color: #ccc;
        }
        
        /* Style the tab content */
        .tabcontent {
          display: none;
          padding: 6px 12px;
          border: 1px solid #ccc;
          border-top: none;
        }
        </style>
</head>

<body>

    <section class="menu menu1 cid-sgFyRy4baw" once="menu" id="menu1-20">


        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
            <div class="container-fluid">
                <div class="navbar-brand">

                    <span class="navbar-caption-wrap"><a class="navbar-caption text-black text-primary display-7"
                            href="/tutor">MESES TUTOR</a></span>
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
                        <li class="nav-item dropdown"><a
                                class="nav-link link text-black text-primary dropdown-toggle display-4" href="#"
                                data-toggle="dropdown-submenu" aria-expanded="false">
                                Materi</a>
                            <div class="dropdown-menu"><a class="text-black text-primary dropdown-item display-4"
                                    href="/kelases">Daftar Materi</a><a
                                    class="text-black text-primary dropdown-item display-4" href="/kelases/create">Tambah
                                    Materi</a></div>
                        </li>
                        <li class="nav-item dropdown"><a
                                class="nav-link link text-black text-primary dropdown-toggle display-4" href="#"
                                data-toggle="dropdown-submenu" aria-expanded="false">
                                Video</a>
                            <div class="dropdown-menu"><a class="text-black text-primary dropdown-item display-4"
                                    href="/videos">Daftar Video</a><a
                                    class="text-black text-primary dropdown-item display-4" href="/videos/create">Tambah
                                    Video</a></div>
                        </li>
                        <li class="nav-item dropdown"><a
                                class="nav-link link text-black text-primary dropdown-toggle display-4" href="#"
                                aria-expanded="false" data-toggle="dropdown-submenu">
                                Soal</a>
                            <div class="dropdown-menu"><a class="text-black text-primary dropdown-item display-4"
                                    href="/soals" aria-expanded="false">Daftar Soal</a><a
                                    class="text-black text-primary dropdown-item display-4" href="/soals/create"
                                    aria-expanded="false">Tambah Soal</a></div>
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

    <section class="form5 cid-sgFyRxCXub" id="form5-1z">


        <div class="container">
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'London')">Edit</button>
                <button class="tablinks" onclick="openCity(event, 'Paris')">Hapus</button>
            </div>
            <div id="London" class="tabcontent">
                <div class="mbr-section-head">
                    <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                        <strong>Edit Materi</strong></h3>

                </div>
                <div class="row justify-content-center mt-4">
                    <div class="col-lg-8 mx-auto mbr-form">
                        {!! Form::open(['action' => ['KelasController@update', $kelas->id_kelas], 'method' =>'POST', 'enctype' => 'multipart/form-data']) !!}
                                <div class="form-group">
                                    {{Form::text('judul', $kelas->judul, ['class' => 'form-control', 'placeholder' => 'Judul'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::textarea('abstraksi', $kelas->abstraksi, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Abstraksi'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::textarea('body', $kelas->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Isi Materi'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::text('link', $kelas->link, ['class' => 'form-control', 'placeholder' => 'Link Embed Video'])}}
                                </div>
                                <div class="form-group">
                                    <p class="mbr-text mbr-fonts-style m-0 display-7">Upload Foto bila ada pengganti</p>
                                    <br>
                                    {{Form::file('images')}}
                                </div>
                                <div class="form-group">
                                    {{Form::textarea('imagesdesc', $kelas->imagesdesc, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Penjelasan Foto'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::textarea('funfact', $kelas->funfact, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Fun Fact'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::text('kesimpulan1', $kelas->kesimpulan1, ['class' => 'form-control', 'placeholder' => 'Kesimpulan pertama'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::text('kesimpulan2', $kelas->kesimpulan2, ['class' => 'form-control', 'placeholder' => 'Kesimpulan kedua'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::textarea('faq1', $kelas->faq1, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'FAQ 1'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::textarea('ans1', $kelas->ans1, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Jawaban FAQ 1'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::textarea('faq2', $kelas->faq2, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'FAQ 2'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::textarea('ans2', $kelas->ans2, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Jawaban FAQ 2'])}}
                                </div>
                                {{Form::hidden('_method','PUT')}}
                                <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn">
                                {{Form::submit('Tambahkan', ['class'=>'btn btn-primary display-4'])}}
                                </div>
                            {!! Form::close() !!}    
                    </div>
                </div>
            </div>
            
            <div id="Paris" class="tabcontent">
                <div class="row justify-content-center">
                            {!!Form::open(['action' => ['KelasController@destroy', $kelas->id_kelas], 'method' => 'POST', 'class' => 'float-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Hapus', ['class' => 'btn btn-secondary display-4'])}}
                            {!!Form::close() !!} 
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
    <script>
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }
    </script>

    <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i
                class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
</body>

</html>