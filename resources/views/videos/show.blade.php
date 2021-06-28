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


    <title>Video</title>

    @if(!Auth::guest() && Auth::user()->isKamiSama())
    <link rel="stylesheet" href="{{asset('assets-t/web/assets/mobirise-icons2/mobirise2.css')}}">
    <link rel="stylesheet" href="{{asset('assets-t/tether/tether.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets-t/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets-t/bootstrap/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets-t/bootstrap/css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets-t/facebook-plugin/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets-t/dropdown/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets-t/animatecss/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets-t/socicon/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets-t/theme/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets-t/mobirise/css/mbr-additional.css')}}" type="text/css">
    <link rel="preload" as="style" href="{{asset('assets-t/mobirise/css/mbr-additional.css')}}">
    @else
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
    @endif

</head>

<body>

    @if(!Auth::guest() && Auth::user()->isKamiSama())
    @include('pages.navbartutor')
    @else
    <section class="menu menu1 cid-sfXkj8RjUf" once="menu" id="menu1-18">


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
    @endif

    <section class="content4 cid-sfXvhjKpPo" id="content4-1c">


        <div class="container">
            <div class="row justify-content-center">
                <div class="title col-md-12 col-lg-12">
                    <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2">
                        <strong>{{$video->title}}</strong></h3>


                </div>
            </div>
        </div>
    </section>

    <section class="video1 cid-sfXveH6b89" id="video1-1b">
        {{-- <div class="align-center container">
            <div class="mbr-section-head">


            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-12 col-lg-12">
                    <div class="box">
                        <div class="mbr-media show-modal align-center" data-modal=".modalWindow">
                            <img src="assets/images/video1.jpg" alt="Mobirise">
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
            {!!$video->link!!}
        </div>
        <style>
            iframe{
                height:600px;
            }
        </style>
    </section>

    <section class="content5 cid-sfXvKKwuY8" id="content5-1e">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12">


                    <p class="mbr-text mbr-fonts-style display-7">
                        {{$video->body}}</p>
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
        <a href="https://mobirise.site/p" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a>
        <p style="flex: 0 0 auto; margin:0; padding-right:1rem;"><a href="https://mobirise.site/t"
                style="color:#aaa;">Created</a> with Mobirise bootstrap web theme</p>
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
    <script src="{{ asset('assets/theme/js/script.js') }}"></script>

    <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i
                class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
</body>

</html>
