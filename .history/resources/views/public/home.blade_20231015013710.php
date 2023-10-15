@extends('public')

@section('title', 'Home')

@section('content')

@include('public.components.navbar')

<div class="w-full h-[100vh] bg-blue-900 relative">
  <div class="carousel w-full">
      <div id="slide1" class="carousel-item relative w-full">
        <div class="w-full h-[100vh] bg-blue-500 relative">
            <img src="/assets/images/1.png" class="w-full h-full object-cover" />
            <div class="absolute space-y-3 h-full w-full bg-blue-900/80 p-8 bottom-0 items-center justify-center flex left-0 rounded-tr-2xl">
                <div class="grid grid-cols-2 text-center space-y-3 lg:w-3/4 w-full px-4">
                    <div class="text-left">
                        <p class="text-white tracking-wider uppercase">Integritas yang Tak Tergoyahkan</p>
                    </div>
                    <div>
                        <img src="/assets/images/LOGO.png" alt="HW Logo" class="w-48 inline-block">
                        <div class="bg-blue-900 px-4 mt-4 rounded-lg py-2 text-white">
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

<div class="min-h-screen relative">

</div>

@endsection
