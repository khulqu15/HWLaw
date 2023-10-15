@extends('public')

@section('title', 'About - HW Lawfirm')

@section('content')

@include('public.components.navbar')

<div class="h-[80vh] flex items-center pt-20 justify-center w-full relative bg-blue-900">
    <img src="/assets/images/2.jpg" alt="HW Lawyer" class="absolute left-0 top-0 w-full h-full object-cover object-center opacity-20">
    <div class="text-white text-center relative">
        <h1 class="lg:text-4xl md:text-3xl font-semibold text-2xl">About Us</h1>
        <div class="flex items-center gap-x-5 mt-6">
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
            <img src="/assets/images/4.jpg" class="w-full h-full object-cover object-center" alt="">
        </div>
        <div class="w-full relative md:px-0 px-12">
            <div class="relative md:-left-28 left-0 md:top-0 -top-16 p-6 rounded-xl bg-white/50 backdrop-blur-md">
                <h2 class="lg:text-4xl md:text-3xl text-2xl mb-3 text-blue-900 font-bold">Kami Berdedikasi untuk Mewujudkan Keadilan</h2>
                <p>Didirikan pada tahun 2021, HW Lawfirm membawa tradisi 17 tahun keahlian dalam dunia hukum, menonjol sebagai kantor hukum yang memiliki integritas, responsif, kontemporer, dan selalu responsif terhadap dinamika hukum di Indonesia. Kami berupaya memberikan layanan prima kepada klien di berbagai sektor hukum, termasuk hukum pidana, perdata, kepailitan, korporasi, perbankan, kontrak, dan hak kekayaan intelektual. Misi kami adalah mewujudkan kebenaran dan keadilan dalam setiap konsultasi, menegaskan dedikasi dan komitmen kami terhadap supremasi hukum sebagai landasan dalam setiap tindakan.</p>
            </div>
        </div>
    </div>
</div>

<div class="bg-gray-100">
    <div class="w-full py-20 container relative mx-auto md:px-12 px-4">
        <div class="grid md:grid-cols-2 grid-cols-1 relative">
            <div>
                <p class="text-red-600 letter-wider uppercase mb-3">Tentang Kami HW Lawfirm</p>
                <h1 class="lg:text-4xl md:text-3xl text-2xl font-bold mb-6">Pilihan Anda dalam Mengejar Keadilan</h1>
                <p class="text-black/70">HW Lawfirm berdiri berdasarkan visi untuk menjadi tempat layanan hukum kontemporer, dinamis, dan berintegritas. Dengan tim Advokat berkualitas, personel yang handal, dan sistem manajemen yang efisien, kami berkomitmen untuk memegang teguh nilai-nilai etika, profesionalitas, dan dedikasi dalam memberikan layanan hukum kepada setiap klien kami.</p>
                <div class="mt-4">
                    <div class="flex">
                        <div class="w-32 h-32 bg-blue-900 text-white">
                            <iconify-icon icon="octicon:law-24"></iconify-icon>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h1 class="md:text-3xl text-2xl font-bold">Opsi Terbaik dalam Mewujudkan Keadilan Anda</h1>
            </div>
        </div>
    </div>
</div>

@include('public.components.footer')

@endsection
