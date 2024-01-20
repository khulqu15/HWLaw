@extends('public')

@section('title', 'About - HW Lawfirm')

@section('content')

@include('public.components.navbar')

<div class="h-[80vh] flex items-center pt-20 justify-center w-full relative bg-blue-900">
    <img src="/assets/images/3.jpg" alt="HW Lawyer" class="absolute left-0 top-0 w-full h-full object-cover object-center opacity-20">
    <div class="text-white text-center relative">
        <h1 class="lg:text-4xl md:text-3xl font-semibold text-2xl">About Us</h1>
        <div class="flex items-center justify-center gap-x-5 mt-6">
            <span>HOME</span>
            <span><iconify-icon class="text-2xl text-yellow-400" icon="icon-park-outline:right"></iconify-icon></span>
            <span>ABOUT</span>
        </div>
    </div>
</div>

<div class="w-full py-20 relative bg-white container mx-auto">
    <div class="grid md:grid-cols-2 grid-cols-1 items-center justify-center justify-items-center">
        <div class="relative w-3/4 h-96">
            <div class="bg-white/50 backdrop-blur-md rounded-lb-xl w-1/4 h-28 -left-0 flex items-center justify-center text-center top-0 absolute">
                <img src="/assets/images/LOGO.png" class="h-20 inline-block" alt="Logo HW Lawyer Logo">
            </div>
            <img src="/assets/images/{{ $about->cover_image }}" class="w-full h-full object-cover object-center" alt="">
        </div>
        <div class="w-full relative md:px-0 px-12">
            <div class="relative md:-left-28 left-0 md:top-0 -top-16 p-6 rounded-xl bg-white/50 backdrop-blur-md">
                <h2 class="lg:text-4xl md:text-3xl text-2xl mb-3 text-blue-900 font-bold">{{ $about->about_title }}</h2>
                <p>{{ $about->about_description }}</p>
            </div>
        </div>
    </div>
</div>

<div class="bg-gray-100">
    <div class="w-full py-20 container relative mx-auto md:px-12 px-4">
        <div class="grid md:grid-cols-2 grid-cols-1 gap-6 relative">
            <div>
                <p class="text-red-600 letter-wider uppercase mb-3">{{ $about->content_motto }}</p>
                <h1 class="lg:text-4xl md:text-3xl text-2xl font-bold mb-6">{{ $about->content_title }}</h1>
                <p class="text-black/70">{{ $about->description }}</p>
                @if (count($benefit) > 0)
                    <div class="mt-6 grid md:grid-cols-2 grid-cols-1">
                        @php
                            $randomImages = [
                                '<div class="w-16 h-16 bg-blue-900 text-white flex items-center justify-items-center justify-center"><iconify-icon icon="octicon:law-24" class="text-3xl"></iconify-icon></div>',
                                '<div class="w-16 h-16 bg-red-400 text-black flex items-center justify-items-center justify-center"><iconify-icon icon="akar-icons:hammer" class="text-3xl"></iconify-icon></div>',
                            ];
                        @endphp
                        @foreach ($benefit as $item)
                            <div class="relative p-6 shadow-xl rounded-xl">
                                @if ($item->image)
                                    <img src="/assets/images/{{ $item->image }}" alt="image benefit" class="w-16 h-16 object-center object-cover">
                                @else
                                    {!! $randomImages[array_rand($randomImages)] !!}
                                @endif
                                <h3 class="text-xl font-semibold my-2">{{ $item->title }}</h3>
                                <p class="text-sm text-black/70">{{ $item->description }}</p>
                                <form action="/private/benefit/destroy" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input value="{{ $item->id }}" name="id" type="hidden" id="benefit_title" required class="input input-bordered w-full">
                                    <button type="submit" class="btn bg-red-500 text-white btn-sm mt-3">Hapus</button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
            <div>
                <div class="grid grid-cols-2 items-center">
                    <div class="w-full">
                        <div class="w-full p-12 bg-blue-900 flex items-center text-white">
                            <div class="space-y-4">
                                <h2 class="text-white font-bold">Visi Kami</h2>
                                <p class="text-sm text-white/80">{{ $about->vission }}</p>
                            </div>
                        </div>
                        <div class="w-full relative h-72">
                            <img src="/assets/images/{{ $about->image1 }}" alt="GROWTH MINDSET" class="w-full h-full object-cover object-center">
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="w-full relative h-72">
                            <img src="/assets/images/{{ $about->image2 }}" alt="GROWTH MINDSET" class="w-full h-full object-cover object-center">
                        </div>
                        <div class="w-full p-12 bg-red-400 flex items-center text-white">
                            <div class="space-y-4">
                                <h2 class="text-black font-bold">Misi Kami</h2>
                                <p class="text-sm text-black/80">{{ $about->mission }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('public.components.footer')

@endsection
