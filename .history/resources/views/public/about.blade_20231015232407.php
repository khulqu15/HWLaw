@extends('public')

@section('title', 'About - HW Lawfirm')

@section('content')

@include('public.components.navbar')

<div class="h-[80vh] flex items-center pt-20 justify-center w-full relative bg-blue-900">
    <img src="/assets/images/2.jpg" alt="HW Lawyer" class="absolute left-0 top-0 w-full h-full object-cover object-center opacity-20">
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
        <div class="grid md:grid-cols-2 grid-cols-1 gap-6 relative">
            <div>
                <p class="text-red-600 letter-wider uppercase mb-3">Tentang Kami HW Lawfirm</p>
                <h1 class="lg:text-4xl md:text-3xl text-2xl font-bold mb-6">Pilihan Anda dalam Mengejar Keadilan</h1>
                <p class="text-black/70">HW Lawfirm berdiri berdasarkan visi untuk menjadi tempat layanan hukum kontemporer, dinamis, dan berintegritas. Dengan tim Advokat berkualitas, personel yang handal, dan sistem manajemen yang efisien, kami berkomitmen untuk memegang teguh nilai-nilai etika, profesionalitas, dan dedikasi dalam memberikan layanan hukum kepada setiap klien kami.</p>
                <div class="mt-6 grid grid-cols-2">
                    <div class="relative">
                        <div class="w-16 h-16 bg-blue-900 text-white flex items-center justify-items-center justify-center">
                            <iconify-icon icon="octicon:law-24" class="text-3xl"></iconify-icon>
                        </div>
                        <h3 class="text-xl font-semibold my-2">Berkompeten</h3>
                        <p class="text-sm text-black/70">Dibackup oleh tim yang memiliki keahlian spesifik di area mereka, serta telah membangun kolaborasi dengan berbagai institusi dan spesialis.</p>
                    </div>
                    <div class="relative">
                        <div class="w-16 h-16 bg-red-400 text-black flex items-center justify-items-center justify-center">
                            <iconify-icon icon="akar-icons:hammer" class="text-3xl"></iconify-icon>
                        </div>
                        <h3 class="text-xl font-semibold my-2">Bermartabat</h3>
                        <p class="text-sm text-black/70">Menyediakan layanan hukum dengan mempertahankan standar profesional tinggi dan memprioritaskan kebutuhan mereka yang mencari kebenaran dan keadilan.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="grid grid-cols-2 items-center">
                    <div class="w-full">
                        <div class="w-full p-12 bg-blue-900 flex items-center text-white">
                            <div class="space-y-4">
                                <h2 class="text-white font-bold">Visi Kami</h2>
                                <p class="text-sm text-white/80">Menjadi Pelaksana Keadilan yang objektif, kompeten, berintegritas, dan terhormat.</p>
                            </div>
                        </div>
                        <div class="w-full relative h-72">
                            <img src="/assets/images/2.jpg" alt="GROWTH MINDSET" class="w-full h-full object-cover object-center">
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="w-full relative h-72">
                            <img src="/assets/images/3.jpg" alt="GROWTH MINDSET" class="w-full h-full object-cover object-center">
                        </div>
                        <div class="w-full p-12 bg-red-400 flex items-center text-white">
                            <div class="space-y-4">
                                <h2 class="text-black font-bold">Misi Kami</h2>
                                <p class="text-sm text-black/80">Merealisasikan layanan hukum yang ahli dengan prioritas pada penerapan regulasi, standar etik profesi, serta nilai-nilai dan etika.</p>
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
