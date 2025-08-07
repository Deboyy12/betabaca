<!-- ? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="{{ asset('assets/img/logo/loder.png') }}" alt="Loading...">
            </div>
        </div>
    </div>
</div>
<!-- Preloader End -->

<header>
    <!-- Header Start -->
    <div class="header-area header-transparent">
        <div class="main-header">
            <div class="header-bottom header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="{{ route('dashboard') }}">
                                    <img src="{{ asset('assets/img/logo/logobetabaca.png') }}" alt="BetaBaca Logo">
                                </a>
                            </div>
                        </div>

                        <!-- Menu -->
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{ route('dashboard') }}">Beranda</a></li>
                                            <li><a href="{{ route('book') }}">Daftar Buku</a></li>

                                            @auth
                                                <li>
                                                    <a href="#">Profil</a>
                                                    <ul class="submenu">
                                                        <li>
                                                            <a href="{{ route('profile.edit') }}"
                                                                class="d-flex align-items-center gap-2 dropdown-item">
                                                                <i class="ti ti-user fs-10"></i>
                                                                <p class="mb-0 fs-6">My Profile</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <form method="POST" action="{{ route('logout') }}">
                                                                @csrf
                                                                <button type="submit"
                                                                    class="btn btn-outline-primary mx-3 mt-1">
                                                                    Logout
                                                                </button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </li>
                                            @endauth

                                            <li><a href="{{ route('contact') }}">Kontak</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="slider-area slider-area2">
        <div class="slider-active">
            <div class="single-slider slider-height2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-11 col-md-12">
                            <div class="hero__caption hero__caption2">
                                <h1 data-animation="bounceIn" data-delay="0.2s">Beta Baca</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="courses-area section-padding40 fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-55">
                        <h2>Temukan Ilmu, Bangun Literasi<br>
                            Bersama Beta Baca</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header End -->
</header>