@extends('public')

@section('title', 'Home')

@section('content')

@include('public.components.navbar')

<div class="w-full h-[100vh] bg-blue-900 relative">
  <div class="carousel w-full">
      <div id="slide1" class="carousel-item relative w-full">
        <div class="w-full h-[100vh] bg-blue-500 relative">
            <img src="/assets/images/1.png" class="w-full h-full object-cover" />
            <div class="absolute space-y-3 h-full w-full bg-black/60 p-8 bottom-0 items-center justify-center flex left-0 rounded-tr-2xl">
                <div class="grid md:grid-cols-2 grid-cols-1 gap-x-8 space-y-3 lg:w-10/12 pt-12 w-full px-4">
                    <div class="text-left space-y-4">
                        <p class="text-yellow-400 mb-4 tracking-wider uppercase">Integritas yang Tak Tergoyahkan</p>
                        <h3 class="lg:text-4xl md:text-3xl text-2xl text-white font-bold mb-2">Biarkan Keadilan Berdiri, <br> Meski Semesta Berkecamuk.</h3>
                        <p class="text-white text-sm">HW Lawfirm adalah kantor hukum yang menawarkan berbagai jenis bantuan hukum yang komprehensif kepada klien, termasuk dalam urusan bisnis dan perselisihan korporasi di lintas bidang industri</p>
                        <div class="flex flex-wrap gap-x-3">
                            <button class="btn bg-red-500 hover:bg-red-600 border-0 text-white mt-4">Hubungi Kami</button>
                            <button class="btn btn-ghost border-1 border-white text-white mt-4">Tentang Kami</button>
                        </div>
                    </div>
                    <div class="items-center justify-center gap-x-3 text-left lg:flex hidden">
                        <img src="/assets/images/LOGO.png" alt="HW Logo" class="w-24 inline-block">
                        <div class="px-4 inline-block mt-4 rounded-lg py-2 text-white">
                            <h2 class="text-2xl font-bold">Membela Keadilan, Menghargai Klien.</h2>
                            <p class="text-sm my-1">Mengatasi Tantangan Hukum dengan Keahlian</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
          <a href="#slide4" class="btn btn-circle">❮</a>
          <a href="#slide2" class="btn btn-circle">❯</a>
        </div>
      </div>
      <div id="slide2" class="carousel-item relative w-full">
        <div class="w-full h-[100vh] bg-blue-500 relative">
            <img src="/assets/images/2.jpg" class="w-full h-full object-cover" />
            <div class="absolute space-y-3 lg:w-1/2 text-white md:w-3/4 w-full p-8 bg-blue-900 bottom-0 left-0 rounded-tr-2xl">
                <h2 class="text-xl">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus</h2>
                <div class="flex justify-start items-center gap-x-3">
                    <div class="flex items-center gap-x-1">
                        <iconify-icon class="text-xl" icon="solar:calendar-date-bold"></iconify-icon>
                        <p class="text-sm">20 Maret 2023</p>
                    </div>
                    <div class="flex items-center gap-x-1">
                        <iconify-icon class="text-xl" icon="heroicons:map-pin-20-solid"></iconify-icon>
                        <p class="text-sm">Tulungagung, Jawa timur</p>
                    </div>
                </div>
                <p class="text-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam vel voluptatem nesciunt maiores praesentium iusto quam nemo corporis, ipsa consequatur nobis ex placeat ...</p>
            </div>
        </div>
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
          <a href="#slide1" class="btn btn-circle">❮</a>
          <a href="#slide3" class="btn btn-circle">❯</a>
        </div>
      </div>
      <div id="slide3" class="carousel-item relative w-full">
        <div class="w-full h-[100vh] bg-blue-500 relative">
            <img src="/assets/images/3.jpg" class="w-full h-full object-cover" />
            <div class="absolute space-y-3 lg:w-1/2 text-white md:w-3/4 w-full p-8 bg-blue-900 bottom-0 left-0 rounded-tr-2xl">
                <h2 class="text-xl">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus</h2>
                <div class="flex justify-start items-center gap-x-3">
                    <div class="flex items-center gap-x-1">
                        <iconify-icon class="text-xl" icon="solar:calendar-date-bold"></iconify-icon>
                        <p class="text-sm">20 Maret 2023</p>
                    </div>
                    <div class="flex items-center gap-x-1">
                        <iconify-icon class="text-xl" icon="heroicons:map-pin-20-solid"></iconify-icon>
                        <p class="text-sm">Tulungagung, Jawa timur</p>
                    </div>
                </div>
                <p class="text-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam vel voluptatem nesciunt maiores praesentium iusto quam nemo corporis, ipsa consequatur nobis ex placeat ...</p>
            </div>
        </div>
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
          <a href="#slide2" class="btn btn-circle">❮</a>
          <a href="#slide4" class="btn btn-circle">❯</a>
        </div>
      </div>
      <div id="slide4" class="carousel-item relative w-full">
        <div class="w-full h-[100vh] bg-blue-500 relative">
            <img src="/assets/images/4.jpg" class="w-full h-full object-cover" />
            <div class="absolute space-y-3 lg:w-1/2 text-white md:w-3/4 w-full p-8 bg-blue-900 bottom-0 left-0 rounded-tr-2xl">
                <h2 class="text-xl">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus</h2>
                <div class="flex justify-start items-center gap-x-3">
                    <div class="flex items-center gap-x-1">
                        <iconify-icon class="text-xl" icon="solar:calendar-date-bold"></iconify-icon>
                        <p class="text-sm">20 Maret 2023</p>
                    </div>
                    <div class="flex items-center gap-x-1">
                        <iconify-icon class="text-xl" icon="heroicons:map-pin-20-solid"></iconify-icon>
                        <p class="text-sm">Tulungagung, Jawa timur</p>
                    </div>
                </div>
                <p class="text-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam vel voluptatem nesciunt maiores praesentium iusto quam nemo corporis, ipsa consequatur nobis ex placeat ...</p>
            </div>
        </div>
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
          <a href="#slide3" class="btn btn-circle">❮</a>
          <a href="#slide5" class="btn btn-circle">❯</a>
        </div>
      </div>
      <div id="slide5" class="carousel-item relative w-full">
        <div class="w-full h-[100vh] bg-blue-500 relative">
            <img src="/assets/images/1.jpg" class="w-full h-full object-cover" />
            <div class="absolute space-y-3 lg:w-1/2 text-white md:w-3/4 w-full p-8 bg-blue-900 bottom-0 left-0 rounded-tr-2xl">
                <h2 class="text-xl">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus</h2>
                <div class="flex justify-start items-center gap-x-3">
                    <div class="flex items-center gap-x-1">
                        <iconify-icon class="text-xl" icon="solar:calendar-date-bold"></iconify-icon>
                        <p class="text-sm">20 Maret 2023</p>
                    </div>
                    <div class="flex items-center gap-x-1">
                        <iconify-icon class="text-xl" icon="heroicons:map-pin-20-solid"></iconify-icon>
                        <p class="text-sm">Tulungagung, Jawa timur</p>
                    </div>
                </div>
                <p class="text-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam vel voluptatem nesciunt maiores praesentium iusto quam nemo corporis, ipsa consequatur nobis ex placeat ...</p>
            </div>
        </div>
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
          <a href="#slide4" class="btn btn-circle">❮</a>
          <a href="#slide1" class="btn btn-circle">❯</a>
        </div>
      </div>
    </div>
    <div class="flex justify-end w-full py-2 gap-2 relative -top-[60px] right-8">
        <a href="#slide1" class="btn btn-xs">1</a>
        <a href="#slide2" class="btn btn-xs">2</a>
        <a href="#slide3" class="btn btn-xs">3</a>
        <a href="#slide4" class="btn btn-xs">4</a>
        <a href="#slide5" class="btn btn-xs">5</a>
    </div>
</div>

<div class="min-h-screen grid md:grid-cols-2 grid-cols-1 gap-x-8 items-center relative px-12">
    <div class="relative text-center md:mt-0 mt-12">
        <img src="/assets/images/LOGO.png" class="absolute w-5/12 left-[5%] opacity-40 top-0" alt="LOGO HW Lawyer">
        <div class="relative">
            <img src="/assets/images/pak.png" class="w-1/2 mx-auto" alt="Pak Harry HW Lawyer">
            <div class="flex flex-wrap items-stretch text-left">
                <div class="bg-blue-900 py-4 pr-4 pl-6 text-white lg:rounded-l-2xl w-full lg:w-1/4">
                    <h5 class="text-lg font-semibold">Advokat Terpercaya di Indonesia</h5>
                    <p class="text-xs text-white/80">Mengkomunikasikan dengan Ahli, Efisien, Penuh Semangat</p>
                </div>
                <div class="bg-gray-200 flex items-center p-4 text-blue-900 w-full md:w-4/12 lg:w-1/4">
                    <div>
                        <p class="text-sm font-semibold">Lawyer Berpengalaman</p>
                        <h5 class="text-3xl font-semibold">5+</h5>
                        <p class="text-xs">Tahun</p>
                    </div>
                </div>
                <div class="bg-red-500 flex items-center p-4 text-white w-full md:w-4/12 lg:w-1/4">
                    <div>
                        <p class="text-sm font-semibold">Telah Menyelesaikan</p>
                        <h5 class="text-3xl font-semibold">204</h5>
                        <p class="text-xs">Legal Problems</p>
                    </div>
                </div>
                <div class="bg-gray-100 p-4 flex items-center text-red-600 lg:rounded-r-2xl w-full md:w-4/12 lg:w-1/4">
                    <div>
                        <p class="text-sm font-semibold">Area Praktikum</p>
                        <h5 class="text-3xl font-semibold">21+</h5>
                        <p class="text-xs">Area</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <p class="text-red-600 mb-4 tracking-wider uppercase md:pt-0 pt-12">Tentang Kami HW LAWYER</p>
        <h1 class="lg:text-6xl md:text-4xl text-2xl font-bold mb-12">Kami Sangat Menghargai Prinsip Keadilan.</h1>
        <p>HW Lawfirm berdiri berdasarkan hasrat mendalam untuk menawarkan layanan hukum terkini, dinamis, dan ahli dengan tim Advokat, personel, dan sistem manajemen unggulan yang berkomitmen pada etika, keahlian, dan dedikasi tinggi dalam memberikan layanan kepada klien.</p>
        <button class="btn bg-blue-900 py-3 px-5 mt-12 text-white">Pelajari Lebih Lanjut</button>
    </div>
</div>

<div class="grid md:grid-cols-2 grid-cols-1 gap-x-8 relative items-center md:p-20 p-12 bg-blue-900 relative bg-fixed bg-cover bg-center" style="background-image: url('/assets/images/6.jpg')">
    <div class="absolute w-full h-full bg-blue-900/80"></div>
    <div class="absolute w-full h-48 left-0 bottom-0 bg-white"></div>
    <div class="relative text-white">
        <h4 class="text-4xl font-bold mb-3">Meeting Your Legal Justice Requirements</h4>
        <p class="text-sm">HW Lawfirm, berdiri sejak 2021 dengan 17 tahun keahlian hukum, adalah kantor hukum responsif dan kontemporer di Indonesia. Kami fokus pada integritas dan up-to-date dengan perubahan hukum, menawarkan layanan di bidang pidana, perdata, korporasi, dan lainnya. Kebenaran dan keadilan adalah misi kami dalam memberikan konsultasi</p>
    </div>
    <div class="relative">
        <img src="/assets/images/pak1.png" class="w-64 object-center object-cover mx-auto" alt="Pak Harry Lawyer">
    </div>
    <div class="md:col-span-2 relative">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 w-full">
            <div class="service-content w-full h-64 p-6 border-b-[1px] border-blue-900 bg-blue-900 transition-all text-white">
                <iconify-icon icon="octicon:law-24" class="text-6xl icon-service"></iconify-icon>
                <h3 class="text-2xl font-semibold mb-2">Hukum Perdata</h3>
                <p>HW Lawfirm berpengalaman dalam menangani perkara pidana, baik melakukan pendampingan di kepolisian...</p>
            </div>
            <div class="service-content w-full h-64 p-6 border-b-[1px] border-blue-900 bg-gray-100 hover:bg-blue-900 transition-all hover:text-white">
                <iconify-icon icon="uit:bag" class="text-6xl icon-service"></iconify-icon>
                <h3 class="text-2xl font-semibold mb-2">Hukum Kontrak</h3>
                <p>AG Lawfirm memiliki keahlian dalam memberikan nasihat hukum, mendampingi klien dalam penyusunan naskah perjanjian bisnis, regulasi ...</p>
            </div>
            <div class="service-content w-full h-64 p-6 border-x-[1px] border-b-[1px] border-blue-900 bg-gray-100 hover:bg-blue-900 transition-all hover:text-white">
                <iconify-icon icon="teenyicons:contract-outline" class="text-6xl icon-service"></iconify-icon>
                <h3 class="text-2xl font-semibold mb-2">Hukum Pidana</h3>
                <p>HW Lawfirm memiliki keahlian dalam menyelesaikan kasus pelanggaran hukum serta tuntutan ...</p>
            </div>
            <div class="service-content w-full h-64 p-6 bg-gray-100 hover:bg-blue-900 transition-all hover:text-white">
                <iconify-icon icon="guidance:bank" class="text-6xl icon-service"></iconify-icon>
                <h3 class="text-2xl font-semibold mb-2">Hukum Perbankan</h3>
                <p>HW Lawfirm memiliki keahlian dalam memberikan nasihat hukum, mewakili klien dalam proses pendirian institusi keuangan dan transaksi lainnya...</p>
            </div>
            <div class="service-content w-full h-64 p-6 border-x-[1px] border-blue-900 bg-gray-100 hover:bg-blue-900 transition-all hover:text-white">
                <iconify-icon icon="cil:industry" class="text-6xl icon-service"></iconify-icon>
                <h3 class="text-2xl font-semibold mb-2">Hukum Pidana</h3>
                <p>HW Lawfirm berpengalaman dalam menangani perkara pidana, baik melakukan pendampingan di kepolisian...</p>
            </div>
            <div class="service-content w-full h-64 p-6 border-blue-900 bg-gray-100 hover:bg-blue-900 transition-all hover:text-white">
                <iconify-icon icon="iconoir:page-search" class="text-6xl icon-service"></iconify-icon>
                <h3 class="text-2xl font-semibold mb-2">Hukum Kepailitan</h3>
                <p>HW Lawfirm memiliki keahlian dalam menangani proses PKPU dan Kepailitan, mewakili baik pihak pemberi pinjaman maupun penerima pinjaman...</p>
            </div>
        </div>
    </div>
</div>

@endsection
