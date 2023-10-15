@extends('public')

@section('title', 'Home')

@section('content')
<!-- preloader start here -->
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- preloader ending here -->


<!-- Search Area start here-->
<div class="search">
    <div class="search__close">
        <i class="fa-solid fa-circle-xmark"></i>
    </div>
    <div class="search__area">
        <form action="#">
            <input type="text" name="s" placeholder="Sarch Here...">
            <button type="submit"><img src="assets/images/header/icon/04.png" alt="rajib raj"></button>
        </form>
    </div>
</div>
<!-- Search Area ending here -->


<!-- ==========Header Section Starts Here========== -->
<header class="header header--two">
    <div class="header__top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-6">
                    <div class="logo">
                        <a href="index.html"><img src="assets/images/header/logo/02.png" alt="rajib raj"></a>
                    </div>
                </div>
                <div class="col-xl-6 col-12 d-none d-xl-block">
                    <div class="info">
                        <ul>
                            <li>
                                <div class="info__icon">
                                    <img src="assets/images/header/icon/01.png" alt="rajib raj">
                                </div>
                                <div class="info__content">
                                    <p>Email Address</p>
                                    <p><b>admin@hwlawyer.com</b></p>
                                </div>
                            </li>
                            <li>
                                <div class="info__icon">
                                    <img src="assets/images/header/icon/03.png" alt="rajib raj">
                                </div>
                                <div class="info__content">
                                    <p>Office Location</p>
                                    <p><b>Tulugagung, Jawatimur</b></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 d-xl-none">
                    <div class="header__bararea justify-content-end">
                        <div class="header__bar d-xl-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__bottom">
        <div class="container">
            <div class="area">
                <div class="main-menu">
                    <div class="menu">
                        <ul>
                            <li>
                                <a href="#0" class="active">Home</a>
                                <ul>
                                    <li><a href="index.html">Home One</a></li>
                                    <li><a href="index-2.html" class="active">Home Two</a></li>
                                    <li><a href="index-3.html">Home Three</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#0">Pages</a>
                                <ul>
                                    <li>
                                        <a href="#0">About</a>
                                        <ul>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="about-2.html">About Two</a></li>
                                            <li><a href="about-3.html">About Three</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="mission.html">Mission</a></li>
                                    <li>
                                        <a href="#0">Team</a>
                                        <ul>
                                            <li><a href="team.html">Team</a></li>
                                            <li><a href="team-single.html">Team Single</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#0">blog</a>
                                <ul>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-2.html">Blog with sidebar</a></li>
                                    <li><a href="blog-3.html">Blog Classic View</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">contact</a></li>
                        </ul>
                        <div class="d-flex flex-wrap">
                            <a href="contact.html" class="lab-btn">Mulai Konsultasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ==========Header Section Ends Here========== -->


<!-- ==========Banner Section Start Here========== -->
<div class="banner banner--two bg-img" style="background-image: url(assets/images/banner/bg/01.jpg);">
    <div class="container">
        <div class="row align-items-center g-5 g-xl-4">
            <div class="col-12 wow fadeInUp" data-wow-delay=".5s">
                <div class="banner__content text-center">
                    <img src="assets/images/banner/icon/01.png" alt="rajibraj">
                    <h5 style="color: black">Selamat Datang di HW Lawyer</h5>
                    <h2 style="color: black">professional <span class="typewrite theme-color" data-period="3500" data-type='["Criminal Law", "Civil low"]'><span class="theme-color">law firm</span></h2>
                    <h6 style="color: black">Para pengacara memiliki pengalaman serta keahlian yang tinggi.</h6>
                    <div class="lab_btn_group">
                        <a href="about.html" class="lab-btn">Selengkapnya</a>
                        <a style="color: black; border-color: black" href="contact.html" class="lab-btn bg-transparate">Konsultasi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ==========Banner Section Ends Here========== -->


<!-- ==========Feature Section Start Here========== -->
<div class="feature feature--one">
    <div class="container">
        <div class="feature__area">
            <div class="row justify-content-center align-items-center g-4">
                <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="feature__item text-center">
                        <div class="feature__thumb">
                            <img src="assets/images/feature/01.png" alt="rajib raj">
                        </div>
                        <div class="feature__content">
                            <h5>Pengalaman dan Keahlian yang Mendalam</h5>
                            <p>HW & Lawyer Firm Tulungagung dikelola oleh tim hukum yang memiliki pengalaman bertahun-tahun di berbagai bidang hukum.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="feature__item text-center">
                        <div class="feature__thumb">
                            <img src="assets/images/feature/02.png" alt="rajib raj">
                        </div>
                        <div class="feature__content">
                            <h5>Pendekatan Personalisasi untuk Setiap Klien</h5>
                            <p>Kami mendengarkan dengan seksama kebutuhan dan kepentingan setiap klien, sehingga kami dapat memberikan saran dan strategi hukum yang paling sesuai.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="feature__item text-center">
                        <div class="feature__thumb">
                            <img src="assets/images/feature/03.png" alt="rajib raj">
                        </div>
                        <div class="feature__content">
                            <h5>Integritas dan Transparansi</h5>
                            <p>Kami berkomitmen untuk bekerja dengan integritas tertinggi dan selalu transparan dalam setiap langkah proses hukum. Klien kami selalu diberi informasi lengkap mengenai perkembangan kasus mereka.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ==========Feature Section Ends Here========== -->



<!-- ==========About Section Starts Here========== -->
<div class="about about--three padding-tb">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 col-12 ps-lg-4">
                <div class="about__content">
                    <h5>Apa yang kami lakukan</h5>
                    <h2>Membutuhkan Bantuan Hukum? Hubungi Tim Lawyer Kami!</h2>
                    <p>Bagi Anda yang serius ingin memiliki lebih, melakukan lebih, memberi lebih, dan menjadi lebih, kesuksesan dapat dicapai dengan disiplin dalam perencanaan, pelaksanaan rencana tersebut, dan keyakinan bahwa Anda dapat mewujudkan keinginan Anda.</p>
                    <ul class="progressbararea">
                        <li>
                            <div class="title">
                                <h5>Cases Served</h5>
                                <h5>90%</h5>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <h5>Cases Winning</h5>
                                <h5>80%</h5>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                    </ul>
                    <div class="lab_btn_group">
                        <a href="about.html" class="lab-btn">explore more</a>
                        <a href="contact.html" class="lab-btn bg-title">get in touch</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="about__thumb">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="thumb">
                                <img src="assets/images/about/02.jpg" alt="about" class="w-100">
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="thumb">
                                <img src="assets/images/about/03.jpg" alt="about" class="w-100">
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="thumb">
                                <img src="assets/images/about/04.jpg" alt="about" class="w-100">
                                <div class="abs-content">
                                    {{-- <img src="assets/images/about/icon/01.png" alt="rajibraj"> --}}
                                    {{-- <h5>24+ Years</h5>
                                    <h5>of Experiences</h5> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ==========About Section Ends Here========== -->



<!-- ==========Feature Section Start Here========== -->
<div class="service service--two padding-tb bg-img" style="background-image: url(assets/images/bg/04.jpg);">
    <div class="container">
        <div class="section__header text-center wow fadeInUp" data-wow-delay=".5s">
            <h5>Discover Some More Areas</h5>
            <h2>Kami hadir untuk melawan segala bentuk kekerasan dengan pengalaman.</h2>
        </div>
        <div class="section__wrapper">
            <div class="service__slider overflow-hidden">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="service__item text-center">
                            <div class="service__thumb">
                                <img src="assets/images/service/icon/01.png" alt="rajib raj">
                            </div>
                            <div class="service__content">
                                <h5><a href="service-single.html">Family law</a></h5>
                                <p>Kami memahami betapa pentingnya masalah keluarga dan hubungan personal. Hukum Keluarga mencakup berbagai isu seperti perceraian, dan masalah hukum lainnya yang terkait dengan keluarga.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service__item text-center">
                            <div class="service__thumb">
                                <img src="assets/images/service/icon/02.png" alt="rajib raj">
                            </div>
                            <div class="service__content">
                                <h5><a href="service-single.html">civil low</a></h5>
                                <p>Masalah kontrak, sengketa tanah, atau gugatan perdata lainnya, tim kami memiliki keahlian dan pengalaman untuk mewakili dan membantu klien mencapai solusi yang adil.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service__item text-center">
                            <div class="service__thumb">
                                <img src="assets/images/service/icon/03.png" alt="rajib raj">
                            </div>
                            <div class="service__content">
                                <h5><a href="service-single.html">Criminal Law</a></h5>
                                <p>Menangani kasus yang berkaitan dengan tindak pidana dan pelanggaran terhadap hukum yang dapat mengakibatkan sanksi pidana. Dari penasihat hukum hingga perwakilan di pengadilan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <div class="service__pagination"></div>
            </div>
        </div>
    </div>
</div>
<!-- ==========Feature Section Ends Here========== -->



<!-- ==========Counter Section Ends Here========== -->
<div class="counter counter--two">
    <div class="container">
        <div class="section__wrapper">
            <div class="row justify-content-center g-0">
                <div class="col-lg-3 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="counter__item">
                        <div class="counter__count">
                            <h3 class="odometer" data-odometer-final="999">0</h3>
                        </div>
                        <div class="counter__title">
                            <h6>Project Done</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="counter__item">
                        <div class="counter__count">
                            <h3 class="odometer" data-odometer-final="249">0</h3>
                        </div>
                        <div class="counter__title">
                            <h6>Case Dismissed</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="counter__item">
                        <div class="counter__count">
                            <h3 class="odometer" data-odometer-final="140">0</h3>
                        </div>
                        <div class="counter__title">
                            <h6>Offices In World</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="counter__item">
                        <div class="counter__count">
                            <h3 class="odometer" data-odometer-final="1490">0</h3>
                        </div>
                        <div class="counter__title">
                            <h6>Happy Clients</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ==========Counter Section Ends Here========== -->

{{-- <!-- ==========Project Section Start Here========== -->
<div class="project project--three padding-tb">
    <div class="container">
        <div class="section__header text-center wow fadeInUp" data-wow-delay=".5s">
            <h5>Discover The Best Works</h5>
            <h2>Check our portfolio which is built with our experience</h2>
        </div>
        <div class="section__wrapper">
            <ul class="filters-button-group d-flex flex-wrap justify-content-center wow fadeInUp" data-wow-delay=".5s">
                <li class="filter-btn is-checked" data-filter="*">view all</li>
                <li class="filter-btn" data-filter=".business">business</li>
                <li class="filter-btn" data-filter=".education">education</li>
                <li class="filter-btn" data-filter=".criminal">criminal</li>
                <li class="filter-btn" data-filter=".estate">real estate</li>
            </ul>
            <div class="project__grid grid">
                <div class="row justify-content-center g-4">
                    <div class="col-lg-6 col-12 business wow fadeInUp" data-wow-delay=".5s">
                        <div class="project__item">
                            <div class="project__thumb">
                                <img src="assets/images/project/10.jpg" alt="rajib raj">
                            </div>
                            <div class="project__content">
                                <h5><a href="portfolio-single.html">Super Secret Project</a></h5>
                                <span>Business</span>
                                <a href="portfolio-single.html" class="project__icon">
                                    <img src="assets/images/project/icon.png" alt="ukilo">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 education criminal wow fadeInUp" data-wow-delay=".5s">
                        <div class="project__item">
                            <div class="project__thumb">
                                <img src="assets/images/project/11.jpg" alt="rajib raj">
                            </div>
                            <div class="project__content">
                                <h5><a href="portfolio-single.html">Super Secret Project</a></h5>
                                <span>Business</span>
                                <a href="portfolio-single.html" class="project__icon">
                                    <img src="assets/images/project/icon.png" alt="ukilo">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 criminal estate wow fadeInUp" data-wow-delay=".5s">
                        <div class="project__item">
                            <div class="project__thumb">
                                <img src="assets/images/project/12.jpg" alt="rajib raj">
                            </div>
                            <div class="project__content">
                                <h5><a href="portfolio-single.html">Super Secret Project</a></h5>
                                <span>Business</span>
                                <a href="portfolio-single.html" class="project__icon">
                                    <img src="assets/images/project/icon.png" alt="ukilo">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 education business wow fadeInUp" data-wow-delay=".5s">
                        <div class="project__item">
                            <div class="project__thumb">
                                <img src="assets/images/project/13.jpg" alt="rajib raj">
                            </div>
                            <div class="project__content">
                                <h5><a href="portfolio-single.html">Super Secret Project</a></h5>
                                <span>Business</span>
                                <a href="portfolio-single.html" class="project__icon">
                                    <img src="assets/images/project/icon.png" alt="ukilo">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 estate wow fadeInUp" data-wow-delay=".5s">
                        <div class="project__item">
                            <div class="project__thumb">
                                <img src="assets/images/project/14.jpg" alt="rajib raj">
                            </div>
                            <div class="project__content">
                                <h5><a href="portfolio-single.html">Super Secret Project</a></h5>
                                <span>Business</span>
                                <a href="portfolio-single.html" class="project__icon">
                                    <img src="assets/images/project/icon.png" alt="ukilo">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 education estate wow fadeInUp" data-wow-delay=".5s">
                        <div class="project__item">
                            <div class="project__thumb">
                                <img src="assets/images/project/15.jpg" alt="rajib raj">
                            </div>
                            <div class="project__content">
                                <h5><a href="portfolio-single.html">Super Secret Project</a></h5>
                                <span>Business</span>
                                <a href="portfolio-single.html" class="project__icon">
                                    <i class="fa-solid fa-link"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5 wow fadeInUp" data-wow-delay=".5s">
                <a href="portfolio.html" class="lab-btn bg-title">view all projects</a>
            </div>
        </div>
    </div>
</div>
<!-- ==========Project Section Ends Here========== --> --}}



<!-- ==========Consultancy Section Start Here========== -->
{{-- <div class="consultancy padding-tb bg-img" style="background-image: url(assets/images/consultancy/bg/bg.jpg);">
    <div class="container">
        <div class="row justify-content-center align-items-center g-4">
            <div class="offset-lg-6 col-lg-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                <div class="consultancy__contact">
                    <h2>Free Consultation</h2>
                    <form action="#">
                        <div class="row g-3">
                            <div class="col-sm-6 col-12">
                                <input type="text" placeholder="your name*" name="name" id="name">
                            </div>
                            <div class="col-sm-6 col-12">
                                <input type="text" placeholder="Company*" name="company" id="company">
                            </div>
                            <div class="col-sm-6 col-12">
                                <input type="text" placeholder="Email Address*" name="email" id="email">
                            </div>
                            <div class="col-sm-6 col-12">
                                <input type="text" placeholder="Subjects*" name="subject" id="subject">
                            </div>
                            <div class="col-12">
                                <textarea name="massage" id="massage"  rows="5" placeholder="Massage"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="lab-btn">submit now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- ==========Consultancy Section Ends Here========== -->



<!-- ==========Team Section Start Here========== -->
<div class="team team--two padding-tb">
    <div class="container">
        <div class="section__header text-center wow fadeInUp" data-wow-delay=".5s">
            <h5>Expert lawyer</h5>
            <h2>You will introduce with our expert lawyer</h2>
        </div>
        <div class="section__wrapper">
            <div class="row justify-content-center align-items-center g-4">
                <div class="col-lg-9 col-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="team__item">
                        <div class="team__thumb">
                            <img src="assets/images/team/01.jpg" alt="rajib raj">
                        </div>
                        <div class="team__content">
                            <h5><a href="team-single.html">Harry Widodo</a></h5>
                            <span>Professional Lawyer</span>
                            <p>Selamat datang di HW & Lawyer Firm, Kabupaten Probolinggo. Kami bangga memiliki tim lawyer profesional yang berdedikasi dalam memberikan pelayanan hukum terbaik untuk memenuhi kebutuhan Anda. Dengan integritas, keahlian, dan komitmen yang tak tergoyahkan, kami siap mewakili dan melindungi kepentingan Anda.</p>
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ==========Team Section Ends Here========== -->



<!-- ==========Testimonial Section Starts Here========== -->
{{-- <div class="testimonial testimonial--two padding-tb bg-img" style="background-image: url(assets/images/bg/05.jpg);">
    <div class="container">
        <div class="section__header text-center me-lg-auto">
            <h5>Client Testimonials</h5>
            <h2>What Customer's are Say About our best services</h2>
        </div>
        <div class="section__wrapper">
            <div class="testimonial__rivew overflow-hidden">
                <div class="testimonial__slider__two">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial__item">
                                <div class="testimonial__inner">
                                    <div class="testimonial__thumb">
                                        <div class="thumb">
                                            <img src="assets/images/testimonial/03.jpg" alt="testimonial">
                                            <i class="fa-solid fa-quote-right"></i>
                                        </div>
                                    </div>
                                    <div class="testimonial__content">
                                        <p>Praesen idea and masa suscp venena velitin sapien Phasellus moestiee dictums efficiur ueser era pharetra metus aquet nulla nulla acrer numbr Aenean lobortis.</p>
                                        <div class="testimonial__author">
                                            <div class="name">
                                                <h5>william Thomas</h5>
                                                <span>customer</span>
                                            </div>
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial__item">
                                <div class="testimonial__inner">
                                    <div class="testimonial__thumb">
                                        <div class="thumb">
                                            <img src="assets/images/testimonial/04.jpg" alt="testimonial">
                                            <i class="fa-solid fa-quote-right"></i>
                                        </div>
                                    </div>
                                    <div class="testimonial__content">
                                        <p>Praesen idea and masa suscp venena velitin sapien Phasellus moestiee dictums efficiur ueser era pharetra metus aquet nulla nulla acrer numbr Aenean lobortis.</p>
                                        <div class="testimonial__author">
                                            <div class="name">
                                                <h5>Radhika Roy</h5>
                                                <span>customer</span>
                                            </div>
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <div class="testimonial__pagination__two"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- ==========Testimonial Section Ends Here========== -->



<!-- ==========Blog Section Start Here========== -->
<div class="blog blog--one padding-tb bg-img" style="background-image: url(assets/images/bg/11.jpg);">
    <div class="container">
        <div class="section__header text-center wow fadeInUp" data-wow-delay=".5s">
            <h5>Discover The Best Works</h5>
            <h2>Pelajari Lebih Lanjut Dari Berita Terbaru Kami.</h2>
        </div>
        <div class="section__wrapper">
            <div class="row justify-content-center g-4">
                <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="blog__item">
                        <div class="blog__thumb">
                            <a href="blog-single.html"><img src="assets/images/blog/home/01.jpg" alt="rajib raj"></a>
                            <div class="date">14 March 2023</div>
                        </div>
                        <div class="blog__content">
                            <div class="blog__meta">
                                <ul>
                                    <li><a href="#"><i class="fa-solid fa-user"></i> Admin</a></li>
                                    <li><a href="#"><i class="fa-solid fa-message"></i> 11 Comments</a></li>
                                </ul>
                            </div>
                            <h5><a href="blog-single.html">Tips for achieving success in our Business</a></h5>
                            <a href="blog-single.html" class="lab-btn">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="blog__item">
                        <div class="blog__thumb">
                            <a href="blog-single.html"><img src="assets/images/blog/home/02.jpg" alt="rajib raj"></a>
                            <div class="date">19 March 2023</div>
                        </div>
                        <div class="blog__content">
                            <div class="blog__meta">
                                <ul>
                                    <li><a href="#"><i class="fa-solid fa-user"></i> Admin</a></li>
                                    <li><a href="#"><i class="fa-solid fa-message"></i> 11 Comments</a></li>
                                </ul>
                            </div>
                            <h5><a href="blog-single.html">Changing and grow business faster and better</a></h5>
                            <a href="blog-single.html" class="lab-btn">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="blog__item">
                        <div class="blog__thumb">
                            <a href="blog-single.html"><img src="assets/images/blog/home/03.jpg" alt="rajib raj"></a>
                            <div class="date">24 March 2023</div>
                        </div>
                        <div class="blog__content">
                            <div class="blog__meta">
                                <ul>
                                    <li><a href="#"><i class="fa-solid fa-user"></i> Admin</a></li>
                                    <li><a href="#"><i class="fa-solid fa-message"></i> 11 Comments</a></li>
                                </ul>
                            </div>
                            <h5><a href="blog-single.html">Containing Lorem Ipsumns And More Recently</a></h5>
                            <a href="blog-single.html" class="lab-btn">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ==========Blog Section Ends Here========== -->



<!-- ==========Sponsor Section Start Here========== -->
<div class="sponsor sponsor--one">
    <div class="container">
        <div class="section__wrapper">
            <div class="sponsor__title text-center mb-4 mb-lg-5 wow fadeInUp" data-wow-delay=".5s">
                <h5>Trusted by 1200+ popular companies and Individuals</h5>
            </div>
            <div class="sponsor__slider overflow-hidden wow fadeInUp" data-wow-delay=".5s">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="sponsor__item">
                            <div class="sponsor__thumb">
                                <img src="assets/images/sponsor/01.jpg" alt="rajib raj">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor__item">
                            <div class="sponsor__thumb">
                                <img src="assets/images/sponsor/02.jpg" alt="rajib raj">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor__item">
                            <div class="sponsor__thumb">
                                <img src="assets/images/sponsor/03.jpg" alt="rajib raj">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor__item">
                            <div class="sponsor__thumb">
                                <img src="assets/images/sponsor/04.jpg" alt="rajib raj">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor__item">
                            <div class="sponsor__thumb">
                                <img src="assets/images/sponsor/05.jpg" alt="rajib raj">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor__item">
                            <div class="sponsor__thumb">
                                <img src="assets/images/sponsor/06.jpg" alt="rajib raj">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ==========Sponsor Section Ends Here========== -->


<!-- ==========Footer Section Ends Here========== -->
<footer class="footer bg-img" style="background-image: url(assets/images/bg/footer.jpg);">
    <div class="footer__top">
        <div class="container">
            <div class="row justify-content-center g-4">
                <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="footer__about">
                        <div class="footer__title">
                            <img src="assets/images/header/logo/02.png" alt="rajibraj">
                        </div>
                        <p>We believe that ares boutique practice we are better placed to respond quickly to our client bespoke service a to our clients.</p>
                        <h6>follow us</h6>
                        <ul>
                            <li>
                                <a href="#"><i class="fa-brands fa-facebook-f"></i> <span>Facebook</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-instagram"></i> <span>instagram</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i> <span>linkedin</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-twitter"></i> <span>twitter</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="footer__post">
                        <div class="footer__title">
                            <h5>Our Recent news</h5>
                        </div>
                        <ul>
                            <li>
                                <div class="footer__post--thumb">
                                    <a href="blog-single.html"><img src="assets/images/blog/home/01.jpg" alt="rajib raj"></a>
                                </div>
                                <div class="footer__post--content">
                                    <h6><a href="blog-single.html">A kentucky woman who was accused last year.</a></h6>
                                    <span>15 July 2023</span>
                                </div>
                            </li>
                            <li>
                                <div class="footer__post--thumb">
                                    <a href="blog-single.html"><img src="assets/images/blog/home/02.jpg" alt="rajib raj"></a>
                                </div>
                                <div class="footer__post--content">
                                    <h6><a href="blog-single.html">Food industry leaders soften change their promoter.</a></h6>
                                    <span>19 July 2023</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="footer__gallery">
                        <div class="footer__title">
                            <h5>Our photo gallery</h5>
                        </div>
                        <ul>
                            <li>
                                <a href="assets/images/footer/gallery/01.jpg" data-rel="lightcase"><img src="assets/images/footer/gallery/01.jpg" alt="rajibraj"></a>
                            </li>
                            <li>
                                <a href="assets/images/footer/gallery/02.jpg" data-rel="lightcase"><img src="assets/images/footer/gallery/02.jpg" alt="rajibraj"></a>
                            </li>
                            <li>
                                <a href="assets/images/footer/gallery/03.jpg" data-rel="lightcase"><img src="assets/images/footer/gallery/03.jpg" alt="rajibraj"></a>
                            </li>
                            <li>
                                <a href="assets/images/footer/gallery/04.jpg" data-rel="lightcase"><img src="assets/images/footer/gallery/04.jpg" alt="rajibraj"></a>
                            </li>
                            <li>
                                <a href="assets/images/footer/gallery/05.jpg" data-rel="lightcase"><img src="assets/images/footer/gallery/05.jpg" alt="rajibraj"></a>
                            </li>
                            <li>
                                <a href="assets/images/footer/gallery/06.jpg" data-rel="lightcase"><img src="assets/images/footer/gallery/06.jpg" alt="rajibraj"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__middile py-4">
        <div class="info">
            <div class="container">
                <div class="row justify-content-center g-4">
                    <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="info__item">
                            <div class="info__icon">
                                <img src="assets/images/footer/info/icon/01.png" alt="rajib raj">
                            </div>
                            <div class="info__content">
                                <p>Monday - Friday</p>
                                <h6>8:00 AM - 6: 00 PM</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="info__item">
                            <div class="info__icon">
                                <img src="assets/images/footer/info/icon/02.png" alt="rajib raj">
                            </div>
                            <div class="info__content">
                                <p>Email Address</p>
                                <h6>admin@hwlawyer.com</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="info__item">
                            <div class="info__icon">
                                <img src="assets/images/footer/info/icon/03.png" alt="rajib raj">
                            </div>
                            <div class="info__content">
                                <p>Office Location</p>
                                <h6>Tulungagung, Jawatimur</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay=".5s">
                <p>&copy; Copyright & Design By <a href="https://themeforest.net/user/pixenx">Pixenx</a> - 2023</p>
            </div>
        </div>
    </div>
</footer>
<!-- ==========Footer Section Ends Here========== -->


<!-- scrollToTop start here -->
<a href="#" class="scrollToTop"><i class="fa-solid fa-arrow-turn-up"></i></a>
<!-- scrollToTop ending here -->
@endsection
