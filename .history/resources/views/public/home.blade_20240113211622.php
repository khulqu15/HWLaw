@extends('public')

@section('title', 'Home - HW Lawfirm')

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
                        <p class="text-yellow-400 mb-4 tracking-wider uppercase">{{ $content->header_motto }}</p>
                        <h3 class="lg:text-4xl md:text-3xl text-2xl text-white font-bold mb-2">{{ $content->header_title }}.</h3>
                        <p class="text-white text-sm">{{ $content->header_description }}</p>
                        <div class="flex flex-wrap gap-x-3">
                            <a href="#contact_us" class="btn bg-red-500 hover:bg-red-600 border-0 text-white mt-4">Hubungi Kami</a>
                            <a href="/about" class="btn btn-ghost border-1 border-white text-white mt-4">Tentang Kami</a>
                        </div>
                    </div>
                    <div class="items-center justify-center gap-x-3 text-left lg:flex hidden">
                        <img src="/assets/images/LOGO.png" alt="HW Logo" class="w-24 inline-block">
                        <div class="px-4 inline-block mt-4 rounded-lg py-2 text-white">
                            <h2 class="text-2xl font-bold">{{ $content->header_motivation_title }}</h2>
                            <p class="text-sm my-1">{{ $content->header_motivation_subtitle }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
          <a href="#slide5" class="btn btn-circle">❮</a>
          <a href="#slide2" class="btn btn-circle">❯</a>
        </div>
      </div>
      @foreach ($post as $item)
      <div id="slide{{$loop->iteration + 1}}" class="carousel-item relative w-full">
        <div class="w-full h-[100vh] bg-blue-500 relative">
            <img src="/assets/images/{{ $item->cover }}" class="w-full h-full object-cover" />
            <div class="absolute space-y-3 lg:w-1/2 text-white md:w-3/4 w-full p-8 bg-blue-900 bottom-0 left-0 rounded-tr-2xl">
                <h2 class="text-xl break-words">{{ $item->title }}</h2>
                <div class="flex justify-start items-center gap-x-3">
                    <div class="flex items-center gap-x-1">
                        <iconify-icon class="text-xl" icon="solar:calendar-date-bold"></iconify-icon>
                        <p class="text-sm">{{ date('d MM Y', strtotime($item->date)) }}</p>
                    </div>
                    <div class="flex items-center gap-x-1">
                        <iconify-icon class="text-xl" icon="heroicons:map-pin-20-solid"></iconify-icon>
                        <p class="text-sm">{{ $item->location }}</p>
                    </div>
                    <div class="flex items-center gap-x-1">
                        <p class="text-sm">{{ $item->category->name }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
          <a href="#slide{{$loop->iteration + 1 == 2 ? '1' : $loop->iteration }}" class="btn btn-circle">❮</a>
          <a href="#slide{{$loop->iteration >= 4 ? '1' : $loop->iteration + 2}}" class="btn btn-circle">❯</a>
        </div>
      </div>
      @endforeach
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
                        <h5 class="text-3xl font-semibold">{{ date('Y') - $about->year }}+</h5>
                        <p class="text-xs">Tahun</p>
                    </div>
                </div>
                <div class="bg-red-500 flex items-center p-4 text-white w-full md:w-4/12 lg:w-1/4">
                    <div>
                        <p class="text-sm font-semibold">Telah Menyelesaikan</p>
                        <h5 class="text-3xl font-semibold">{{ $about->completed_case }}</h5>
                        <p class="text-xs">Legal Problems</p>
                    </div>
                </div>
                <div class="bg-gray-100 p-4 flex items-center text-red-600 lg:rounded-r-2xl w-full md:w-4/12 lg:w-1/4">
                    <div>
                        <p class="text-sm font-semibold">Area Praktikum</p>
                        <h5 class="text-3xl font-semibold">21</h5>
                        <p class="text-xs">Area</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <p class="text-red-600 mb-4 tracking-wider uppercase md:pt-0 pt-12">{{ $content->area_motto }}</p>
        <h1 class="lg:text-6xl md:text-4xl text-2xl font-bold mb-12">{{ $content->area_title }}</h1>
        <p>{{ $content->area_description }}</p>
        <a href="/about" class="btn bg-blue-900 py-3 px-5 mt-12 text-white">Pelajari Lebih Lanjut</a>
    </div>
</div>

@if (count($practices) > 0 && !is_null($practices))
<div id="practice" class="grid md:grid-cols-2 grid-cols-1 gap-x-8 relative items-center md:p-20 p-12 bg-blue-900 relative bg-fixed bg-cover bg-center" style="background-image: url('/assets/images/6.jpg')">
    <div class="absolute w-full h-full bg-blue-900/80"></div>
    <div class="absolute w-full h-48 left-0 bottom-0 bg-white"></div>
    <div class="relative text-white">
        <h4 class="text-4xl font-bold mb-3">{{ $content->about_title }}</h4>
        <p class="text-sm">{{ $content->about_description }}</p>
    </div>
    <div class="relative">
        <img src="/assets/images/pak1.png" class="w-64 object-center object-cover mx-auto" alt="Pak Harry Lawyer">
    </div>
    <div class="md:col-span-2 relative">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 w-full">
            @foreach ($practices as $practice)
                @if ($loop->iteration == 1)
                <div class="service-content relative overflow-hidden w-full h-64 p-6 border-b-[1px] border-blue-900 bg-blue-900 transition-all text-white">
                    <div class="absolute service-cover transition-all w-1/2 h-full right-0 top-0">
                        <div class="absolute left-0 h-full w-full top-0 bg-gradient-to-r from-blue-900 to-blue-900/40"></div>
                        <img src="/assets/images/{{ $practice->cover }}" class="h-full w-full object-cover object-center" alt="Service Image HW Lawyer">
                    </div>
                @else
                <div class="service-content relative overflow-hidden w-full h-64 p-6 border-b-[1px] border-blue-900 bg-gray-100 hover:bg-blue-900 transition-all hover:text-white">
                    <div class="absolute service-cover opacity-0 transition-all w-1/2 h-full right-0 top-0">
                        <div class="absolute left-0 h-full w-full top-0 bg-gradient-to-r from-blue-900 to-blue-900/40"></div>
                        <img src="/assets/images/{{ $practice->cover }}" class="h-full w-full object-cover object-center" alt="Service Image HW Lawyer">
                    </div>
                @endif
                <div class="relative">
                    <iconify-icon icon="octicon:law-24" class="text-6xl service-icon transition-all"></iconify-icon>
                    <h3 class="text-2xl font-semibold mb-2">{{ $practice->title }}</h3>
                    <p>{{ $practice->description ? $practice->description : '' }}</p>
                </div>
                <div class="text-right mt-3 service-button absolute bottom-0 right-0 p-4">
                    <a href="/practice/{{ $practice->slug }}" class="btn btn-ghost text-yellow-400">Selengkapnya</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif

<div class="relative w-full bg-white pr-12 md:pl-0 pl-12 py-12">
    <div class="flex w-full justify-center text-center mb-12">
        <div>
            <p class="text-red-600 mb-4 tracking-wider uppercase md:pt-0 pt-12">DAR TIM HW LAWYER UNTUK MASYARAKAT</p>
            <h1 class="lg:text-4xl md:text-3xl text-2xl font-bold">WAWASAN & ARTIKEL HUKUM TERBARU</h1>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-6 justify-center justify-items-center mt-5">
        <div class="lg:col-span-5 md:col-span-7 col-span-12 w-full h-96 bg-blue-500 text-white md:rounded-l-none rounded-l-xl rounded-r-xl overflow-hidden relative">
            <img src="/assets/images/1.jpg" class="w-full relative h-full object-cover object-center" alt="HW Lawyer Berita 1">
            <div class="w-full h-full top-0 absolute left-0 bg-gradient-to-t from-black to-black/10"></div>
            <div class="w-full py-6 px-6 absolute left-0 bottom-0 bg-gradient-to-t from-black to-transparent">
                <h3 class="md:text-xl text-lg font-bold mb-2 break-words">{{ $article[0]->title }}</h3>
                <div class="flex gap-x-3 items-center mb-2">
                    <div class="flex items-center gap-x-1">
                        <p class="text-xs">{{ $article[0]->category->name }}</p>
                    </div>
                    <div class="flex items-center gap-x-1">
                        <iconify-icon class="text-lg" icon="solar:calendar-date-bold"></iconify-icon>
                        <p class="text-xs">{{ date('d M Y', strtotime($article[0]->date)) }}</p>
                    </div>
                    <div class="flex items-center gap-x-1">
                        <iconify-icon class="text-lg" icon="heroicons:map-pin-20-solid"></iconify-icon>
                        <p class="text-xs">{{ $article[0]->location }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:col-span-4 md:col-span-5 col-span-12 space-y-6 w-full">
            <div class="w-full h-[11.25rem] overflow-hidden bg-blue-900 rounded-xl relative">
                <img src="/assets/images/{{ $article[1]->cover }}" class="w-full relative h-full object-cover object-center" alt="HW Lawyer Berita 1">
                <div class="w-full h-full top-0 absolute left-0 bg-gradient-to-l from-black to-black/20"></div>
                <div class="w-3/4 left-1/4 py-6 px-6 absolute text-white left-0 top-0 h-full bg-gradient-to-l from-black to-transparent">
                    <h3 class="text-lg font-bold mb-2">{{ $article[1]->title }}</h3>
                    <div class="flex gap-x-3 items-center mb-2">
                        <div class="flex items-center gap-x-1">
                            <p class="text-xs">{{ $article[1]->category->name }}</p>
                        </div>
                        <div class="flex items-center gap-x-1">
                            <iconify-icon class="text-lg" icon="solar:calendar-date-bold"></iconify-icon>
                            <p class="text-xs">{{ date('d M Y', strtotime($article[1]->date)) }}</p>
                        </div>
                        <div class="flex items-center gap-x-1">
                            <iconify-icon class="text-lg" icon="heroicons:map-pin-20-solid"></iconify-icon>
                            <p class="text-xs">{{ $article[1]->location }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full h-[11.25rem] overflow-hidden bg-blue-900 rounded-xl relative">
                <img src="/assets/images/{{ $article[2]->cover }}" class="w-full relative h-full object-cover object-center" alt="HW Lawyer Berita 1">
                <div class="w-full h-full top-0 absolute left-0 bg-gradient-to-l from-black to-black/20"></div>
                <div class="w-3/4 left-1/4 py-6 px-6 absolute text-white left-0 top-0 h-full bg-gradient-to-l from-black to-transparent">
                    <h3 class="text-lg font-bold mb-2">{{ $article[2]->title }}</h3>
                    <div class="flex gap-x-3 items-center mb-2">
                        <div class="flex items-center gap-x-1">
                            <p class="text-xs">{{ $article[2]->category->name }}</p>
                        </div>
                        <div class="flex items-center gap-x-1">
                            <iconify-icon class="text-lg" icon="solar:calendar-date-bold"></iconify-icon>
                            <p class="text-xs">{{ date('d M Y', strtotime($article[2]->date)) }}</p>
                        </div>
                        <div class="flex items-center gap-x-1">
                            <iconify-icon class="text-lg" icon="heroicons:map-pin-20-solid"></iconify-icon>
                            <p class="text-xs">{{ $article[2]->location }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:col-span-3 col-span-12 space-y-6 w-full">
            <div class="w-full rounded-xl relative flex items-center gap-x-3">
                <img src="/assets/images/{{ $article[3]->cover }}" class="w-24 h-28 rounded-xl object-cover object-center relative" alt="Hallo Moshi Moshi">
                <div class="relative">
                    <div class="flex items-center gap-x-1">
                        <p class="text-xs">{{ $article[3]->category->name }}</p>
                    </div>
                    <h3 class="font-semibold text-md mb-2">{{ $article[3]->title }}</h3>
                    <div class="flex gap-x-3 items-center mb-2">
                        <div class="flex items-center gap-x-1">
                            <iconify-icon class="text-lg" icon="solar:calendar-date-bold"></iconify-icon>
                            <p class="text-xs">{{ date('d M Y', strtotime($article[3]->date)) }}</p>
                        </div>
                        <div class="flex items-center gap-x-1">
                            <iconify-icon class="text-lg" icon="heroicons:map-pin-20-solid"></iconify-icon>
                            <p class="text-xs">{{ $article[3]->location }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full rounded-xl relative flex items-center gap-x-3">
                <img src="/assets/images/{{ $article[4]->cover }}" class="w-24 h-28 rounded-xl object-cover object-center relative" alt="Hallo Moshi Moshi">
                <div class="relative">
                    <div class="flex items-center gap-x-1">
                        <p class="text-xs">{{ $article[4]->category->name }}</p>
                    </div>
                    <h3 class="font-semibold text-md mb-2">{{ $article[4]->title }}</h3>
                    <div class="flex gap-x-3 items-center mb-2">
                        <div class="flex items-center gap-x-1">
                            <iconify-icon class="text-lg" icon="solar:calendar-date-bold"></iconify-icon>
                            <p class="text-xs">{{ date('d M Y', strtotime($article[4]->date)) }}</p>
                        </div>
                        <div class="flex items-center gap-x-1">
                            <iconify-icon class="text-lg" icon="heroicons:map-pin-20-solid"></iconify-icon>
                            <p class="text-xs">{{ $article[4]->location }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full rounded-xl relative flex items-center gap-x-3">
                <img src="/assets/images/{{ $article[5]->cover }}" class="w-24 h-28 rounded-xl object-cover object-center relative" alt="Hallo Moshi Moshi">
                <div class="relative">
                    <div class="flex items-center gap-x-1">
                        <p class="text-xs">{{ $article[5]->category->name }}</p>
                    </div>
                    <h3 class="font-semibold text-md mb-2">{{ $article[5]->title }}</h3>
                    <div class="flex gap-x-3 items-center mb-2">
                        <div class="flex items-center gap-x-1">
                            <iconify-icon class="text-lg" icon="solar:calendar-date-bold"></iconify-icon>
                            <p class="text-xs">{{ date('d M Y', strtotime($article[5]->date)) }}</p>
                        </div>
                        <div class="flex items-center gap-x-1">
                            <iconify-icon class="text-lg" icon="heroicons:map-pin-20-solid"></iconify-icon>
                            <p class="text-xs">{{ $article[5]->location }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex w-full justify-center text-center mb-12 mt-8">
        <a href="/news" class="btn bg-blue-900 hover:bg-blue-800 text-white btn-wide">Lebih Banyak</a>
    </div>
</div>

@if (count($youtube_media) > 0)
<div class="bg-white p-12 relative bg-fixed bg-center bg-cover">
    {{-- <div class="absolute w-full left-0 top-0 h-full bg-blue-900/80"></div> --}}
    <div class="relative flex w-full justify-center text-center mb-12">
        <div>
            <p class="text-red-600 mb-4 tracking-wider uppercase md:pt-0 pt-12">KEGIATAN BERMUTU</p>
            <h1 class="lg:text-4xl md:text-3xl text-2xl font-bold">VIDEO KAMI DI HW LAWFIRM</h1>
        </div>
    </div>
    <div class="flex flex-wrap relative items-center justify-center gap-6">
        @foreach($youtube_media as $link)
            <div class="youtube-video" data-url="{{ $link->link }}"></div>
        @endforeach
    </div>
</div>
@endif

{{-- <div class="bg-white p-12 relative">
    <div class="relative flex w-full justify-center text-center mb-12">
        <div>
            <p class="text-red-600 mb-4 tracking-wider uppercase md:pt-0 pt-12">KAMI TIDAK BEKERJA SENDIRI</p>
            <h1 class="lg:text-4xl md:text-3xl text-2xl font-bold">PARTNER KERJA SAMA KAMI</h1>
        </div>
    </div>
    <div class="grid lg:grid-cols-4 md:grid-cols-2 pb-12 gap-6 grid-cols-1 justify-items-center relative items-center justify-center gap-6">
        <div class="text-center"><img src="/assets/images/partner1.png" class="h-16 mx-auto inline-block" alt="Partner HW Lawyer 1"></div>
        <div class="text-center"><img src="/assets/images/partner2.png" class="h-16 mx-auto inline-block" alt="Partner HW Lawyer 2"></div>
        <div class="text-center"><img src="/assets/images/partner3.png" class="h-16 mx-auto inline-block" alt="Partner HW Lawyer 3"></div>
        <div class="text-center"><img src="/assets/images/partner4.png" class="h-16 mx-auto inline-block" alt="Partner HW Lawyer 4"></div>
        <div class="text-center"><img src="/assets/images/partner5.png" class="h-16 mx-auto inline-block" alt="Partner HW Lawyer 5"></div>
        <div class="text-center"><img src="/assets/images/partner6.png" class="h-16 mx-auto inline-block" alt="Partner HW Lawyer 6"></div>
    </div>
</div> --}}

@include('public.components.footer')

@endsection
