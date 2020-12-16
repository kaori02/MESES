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


    <title>Materi</title>
    <link rel="stylesheet" href="{{asset('assets/web/assets/mobirise-icons/mobirise-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/web/assets/mobirise-icons2/mobirise2.css')}}">
    <link rel="stylesheet" href="{{asset('assets/tether/tether.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/facebook-plugin/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dropdown/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/animatecss/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/socicon/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/theme/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/mobirise/css/mbr-additional.css')}}" type="text/css">
    <link rel="preload" as="style" href="{{asset('assets/mobirise/css/mbr-additional.css')}}">




</head>

<body>

    <section class="menu menu1 cid-sfXkj8RjUf" once="menu" id="menu1-r">


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


                </div>
            </div>
        </nav>
    </section>

    <section class="content4 cid-sfXl4B2KP5" id="content4-v">


        <div class="container">
            <div class="row justify-content-center">
                <div class="title col-md-12 col-lg-10">
                    <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2">
                        <strong>{{$kelas->judul}}</strong></h3>
                    <h4 class="mbr-section-subtitle align-center mbr-fonts-style mb-4 display-5">{{$kelas->abstraksi}}</h4>

                </div>
            </div>
        </div>
    </section>

    <section class="video1 cid-sfXkR3iEYI" id="video1-t">
        {{-- <div class="align-center container">
            <div class="mbr-section-head">
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-12 col-lg-10">
                    <div class="box">
                        <div class="mbr-media show-modal align-center" data-modal=".modalWindow">
                            <img src="/assets/images/video1.jpg" alt="Mobirise">
                            <div class="icon-wrap">
                                <a class="text-primary" href="#"><span
                                        class="mbr-iconfont socicon-youtube socicon"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="modalWindow" style="display: none;">
                <div class="modalWindow-container">
                    <div class="modalWindow-video-container">
                        <div class="modalWindow-video">
                            <iframe width="100%" height="100%" frameborder="0" allowfullscreen="1"
                                data-src="https://www.youtube.com/watch?v=VA8PzkQa8d8"></iframe>
                        </div>
                        <a class="close" role="button" data-dismiss="modal">
                            <span aria-hidden="true" class="mbr-iconfont mobi-mbri-close mobi-mbri closeModal"></span>
                            <span class="sr-only">Close</span>
                        </a>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="container" style="padding-top: 0%">
            {!!$kelas->link!!}
        </div>
        <style>
            iframe{
                height:600px;
            }
        </style>
    </section>

    <section class="mbr-section article content1 cid-sfXlcPTAgJ" id="content1-y">



        <div class="container">
            <div class="media-container-row">
                <div class="mbr-text col-12 mbr-fonts-style display-7 col-md-12">
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;
                        {!!$kelas->body!!}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="image1 cid-sfXlsQg4qC" id="image1-z">




        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="image-wrapper">
                        <img src="/assets/images/4.jpg" alt="Mobirise">
                        <p class="mbr-description mbr-fonts-style pt-2 align-center display-4">
                            -</p>
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="text-wrapper">
                        <h3 class="mbr-section-title mbr-fonts-style mb-3 display-5">
                            <strong>{{$kelas->imagesdesc}}</strong></h3>
                        <p class="mbr-text mbr-fonts-style display-7">
                            -</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content7 cid-sfXl5Pg53Y" id="content7-w">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <blockquote>
                        <h5 class="mbr-section-title mbr-fonts-style mb-2 display-7"><strong>Tahukah Kamu?</strong></h5>
                        <p class="mbr-text mbr-fonts-style display-4">{{$kelas->funfact}}</p>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <section class="content8 cid-sfXkSD4lrT" id="content8-u">

        <div class="container">
            <div class="row justify-content-center">
                <div class="counter-container col-md-12 col-lg-10">
                    <h4 class="mbr-section-title mbr-fonts-style mb-4 display-5">
                        Perlu Diingat !!!</h4>
                    <div class="mbr-text mbr-fonts-style display-7">
                        <ul>
                            <li>{!!$kelas->kesimpulan1!!}</li>
                            <br>
                            <li>{!!$kelas->kesimpulan2!!}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content16 cid-sfXl7tK8t5" id="content16-x">




        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="mbr-section-head align-center mb-4">
                        <h3 class="mbr-section-title mb-0 mbr-fonts-style display-2"><strong>FAQ</strong></h3>

                    </div>
                    <div id="bootstrap-accordion_23" class="panel-group accordionStyles accordion" role="tablist"
                        aria-multiselectable="true">
                        <div class="card mb-3">
                            <div class="card-header" role="tab" id="headingOne">
                                <a role="button" class="panel-title collapsed" data-toggle="collapse" data-core=""
                                    href="#collapse1_23" aria-expanded="false" aria-controls="collapse1">
                                    <h6 class="panel-title-edit mbr-fonts-style mb-0 display-7"><strong>{{$kelas->faq1}}</strong>
                                    </h6>
                                    <span class="sign mbr-iconfont mbri-arrow-down"></span>
                                </a>
                            </div>
                            <div id="collapse1_23" class="panel-collapse noScroll collapse" role="tabpanel"
                                aria-labelledby="headingOne" data-parent="#bootstrap-accordion_23">
                                <div class="panel-body">
                                    <p class="mbr-fonts-style panel-text display-4">{{$kelas->ans1}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header" role="tab" id="headingOne">
                                <a role="button" class="panel-title collapsed" data-toggle="collapse" data-core=""
                                    href="#collapse2_23" aria-expanded="false" aria-controls="collapse2">
                                    <h6 class="panel-title-edit mbr-fonts-style mb-0 display-7"><strong>{{$kelas->faq2}}
                                        </strong></h6>
                                    <span class="sign mbr-iconfont mbri-arrow-down"></span>
                                </a>
                            </div>
                            <div id="collapse2_23" class="panel-collapse noScroll collapse" role="tabpanel"
                                aria-labelledby="headingOne" data-parent="#bootstrap-accordion_23">
                                <div class="panel-body">
                                    <p class="mbr-fonts-style panel-text display-4">
                                        {{$kelas->ans2}}</p>
                                </div>
                            </div>
                        </div>

    </section>

    <section class="mbr-section form1 cid-sfXuh4l7U1" id="form1-17">




        <div class="container">
            <div class="row justify-content-center">
                <div class="title col-12 col-lg-8">
                    <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                        Ada pertanyaan lain?</h2>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="media-container-column col-lg-8" data-form-type="formoid">
                    <!---Formbuilder Form--->
                    <form action="https://mobirise.eu/" method="POST" class="mbr-form form-with-styler"
                        data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true"
                            value="EZnP/U76mYpQp2lmf7G61qTKAAGjev9QV2ub4hvzAAWdJKkF+jkBLu7N691ZxvdaRqqrTvnPy3fTX7+sSc3n6UG/vSMMt4qbXIiGr6F9/CP2bScapq3cu8M5fCqZpjc8">
                        <div class="row">
                            <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Terima Kasih Atas
                                Pertanyaannya :)</div>
                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            </div>
                        </div>
                        <div class="dragArea row">



                            <div data-for="message" class="col-md-12 form-group">
                                <label for="message-form1-17"
                                    class="form-control-label mbr-fonts-style display-7">Pertanyaan</label>
                                <textarea name="message" data-form-field="Message" class="form-control display-7"
                                    placeholder="Tulis pertanyaanmu disini" id="message-form1-17"></textarea>
                            </div>
                            <div class="col-md-12 input-group-btn align-center">
                                <button type="submit" class="btn btn-primary btn-form display-4">SEND FORM</button>
                            </div>
                        </div>
                    </form>
                    <!---Formbuilder Form--->
                </div>
            </div>
        </div>
    </section>

    <section class="footer3 cid-sfXBI85u46 mbr-reveal" once="footers" id="footer3-1s">





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
        <a href="https://mobirise.site/h" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a>
        <p style="flex: 0 0 auto; margin:0; padding-right:1rem;">How to build your own website - <a
                href="https://mobirise.site/x" style="color:#aaa;">Click here</a></p>
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
    <script src="{{ asset('assets/playervimeo/vimeo_player.js') }}"></script>
    <script src="{{ asset('assets/mbr-switch-arrow/mbr-switch-arrow.js') }}"></script>
    <script src="{{ asset('assets/theme/js/script.js') }}"></script>
    <script src="{{ asset('assets/formoid/formoid.min.js') }}"></script>

    <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i
                class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
</body>

</html>
