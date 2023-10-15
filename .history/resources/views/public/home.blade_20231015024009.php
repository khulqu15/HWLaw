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
                        <h3 class="text-4xl text-white font-bold mb-2">Biarkan Keadilan Berdiri, <br> Meski Semesta Berkecamuk.</h3>
                        <p class="text-white text-sm">HW Lawfirm adalah kantor hukum yang menawarkan berbagai jenis bantuan hukum yang komprehensif kepada klien, termasuk dalam urusan bisnis dan perselisihan korporasi di lintas bidang industri</p>
                        <div class="flex gap-x-3">
                            <button class="btn bg-red-500 hover:bg-red-600 border-0 text-white mt-4">Hubungi Kami</button>
                            <button class="btn btn-ghost border-1 border-white text-white mt-4">Tentang Kami</button>
                        </div>
                    </div>
                    <div class="flex items-center justify-center gap-x-3 text-left">
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
    <div class="relative text-center">
        <img src="/assets/images/pak.png" class="w-1/2 mx-auto" alt="Pak Harry HW Lawyer">
        <div class="flex items-stretch text-left">
            <div class="bg-blue-900 p-4 text-white">
                <h5 class="text-lg font-semibold">Advokat Terpercaya di Indonesia</h5>
                <p class="text-sm text-white/80">Mengkomunikasikan dengan Ahli, Efisien, Penuh Semangat, Optimis, Melampaui Ekspektasi.</p>
            </div>
            <div class="bg-gray-200 p-4 text-white">
                <p class="text-sm">Tahun Pengalaman</p>
                <h5 class="text-lg font-semibold">5+</h5>
            </div>
            <div class="bg-blue-900 p-4 text-white">
                <p class="text-sm">Telah Menyelesaikan</p>
                <h5 class="text-lg font-semibold">204</h5>
            </div>
            <div class="bg-blue-900 p-4 text-white">
                <p class="text-sm">Telah Menyelesaikan</p>
                <h5 class="text-lg font-semibold">204</h5>
            </div>
        </div>
    </div>
    <div>
        <h1 class="text-6xl font-bold mb-6">Kami Sangat Menghargai Prinsip Keadilan.</h1>
        <p>HW Lawfirm berdiri berdasarkan hasrat mendalam untuk menawarkan layanan hukum terkini, dinamis, dan ahli dengan tim Advokat, personel, dan sistem manajemen unggulan yang berkomitmen pada etika, keahlian, dan dedikasi tinggi dalam memberikan layanan kepada klien.</p>
        <button class="btn bg-blue-900 py-3 px-5 mt-4 text-white">Pelajari Lebih Lanjut</button>
    </div>
</div>

@endsection
