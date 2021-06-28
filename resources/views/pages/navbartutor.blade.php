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
