@extends('public')

@section('title', 'Practice - HW Lawfirm')

@section('content')

@include('public.components.navbar')

<div class="h-[80vh] flex items-center pt-20 justify-center w-full relative bg-blue-900">
    <img src="/assets/images/2.jpg" alt="HW Lawyer" class="absolute left-0 top-0 w-full h-full object-cover object-center opacity-20">
    <div class="text-white text-center relative">
        <h1 class="lg:text-4xl md:text-3xl font-semibold text-2xl">PRACTICE AREA</h1>
        <div class="flex items-center justify-center gap-x-5 mt-6">
            <span>HOME</span>
            <span><iconify-icon class="text-2xl text-yellow-400" icon="icon-park-outline:right"></iconify-icon></span>
            <span>PRACTICE</span>
            <span><iconify-icon class="text-2xl text-yellow-400" icon="icon-park-outline:right"></iconify-icon></span>
            <span class="uppercase">{{ $practice->title }}</span>
        </div>
    </div>
</div>

<div class="bg-gray-100">
    <div class="w-full py-20 container relative mx-auto md:px-12 px-4">
        <div class="grid grid-cols-12 gap-6">
            <div class="lg:col-span-5 col-span-12 relative">
                <img src="/assets/images/{{ $practice->cover }}" class="w-full h-72 object-cover object-center" alt="HWLawfirm Hukum Pidana">
                <h3 class="text-3xl mt-4 font-bold text-blue-900">{{ $practice->title }}</h3>
            </div>
            <div class="lg:col-span-7 relative col-span-12 space-y-4">
                <div class="lg:flex hidden items-center gap-x-4">
                    <img src="/assets/images/LOGO.png" alt="Logo HWLawfirm" class="w-12">
                    <h3 class="text-blue-900 text-2xl font-semibold">HW Lawfirm</h3>
                </div>
                <div class="p-6 bg-white relative lg:-left-24 left-0 lg:top-6 top-0">
                    {!! $practice->text !!}
                </div>
            </div>
        </div>
        <div class="mb-12 mt-16 bg-blue-900 relative w-full overflow-hidden">
            <div class="grid grid-cols-12 text-white">
                <div class="lg:col-span-4 md:col-span-6 col-span-12 p-8 flex items-center">
                    <div class="space-y-3">
                        <h3 class="text-3xl font-semibold">Hukum Pidana</h3>
                        <p class="text-white/70">Jika anda membutuhkan layanan kami, silahkan klik tombol di bawah ini atau silahkan datang ke kantor kami.</p>
                        <div class="mt-6">
                            <button class="btn bg-red-600 hover:bg-red-700 border-3 text-white border-white btn-wide">Hubungi Kami</button>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-4 md:col-span-6 col-span-12 p-8 flex items-center">
                    <div class="space-y-3">
                        <h3 class="text-3xl font-semibold">Kontak Kami</h3>
                        <div class="flex items-center gap-x-3 my-4">
                            <iconify-icon icon="heroicons:map-pin-solid" class="text-2xl text-yellow-400"></iconify-icon>
                            <span class="text-white">Jalan Alamat Kantor HW Lawfirm, Tulungangung, Indonesia, 60192</span>
                        </div>
                        <div class="flex items-center flex-wrap gap-x-3 mb-4">
                            <iconify-icon icon="eva:email-outline" class="text-2xl text-yellow-400"></iconify-icon>
                            <span class="text-white">admin@hwlawfirm.id</span>
                        </div>
                        <div class="flex items-center flex-wrap gap-x-3">
                            <iconify-icon icon="ph:phone-fill" class="text-2xl text-yellow-400"></iconify-icon>
                            <span class="text-white">+021-7997973 / 0895-3960-0495</span>
                        </div>
                        <div class="flex items-center gap-x-3 mt-4 text-white">
                            <div class="p-4 border border-white rounded">
                                <iconify-icon class="text-2xl" icon="ic:baseline-facebook"></iconify-icon>
                            </div>
                            <div class="p-4 border border-white rounded">
                                <iconify-icon class="text-2xl" icon="mdi:youtube"></iconify-icon>
                            </div>
                            <div class="p-4 border border-white rounded">
                                <iconify-icon class="text-2xl" icon="ri:instagram-fill"></iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-4 col-span-12">
                    <img src="/assets/images/pak1.png" alt="Harry Lawyer" class="w-full h-full object-cover object-center">
                </div>
            </div>
        </div>
    </div>
</div>

@include('public.components.footer')

@endsection
