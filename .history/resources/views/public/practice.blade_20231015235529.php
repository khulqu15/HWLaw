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
            <span>HUKUM PIDANA</span>
        </div>
    </div>
</div>

<div class="bg-gray-100">
    <div class="w-full py-20 container relative mx-auto md:px-12 px-4">
        <p class="text-justify">Dalam bidang hukum pidana, HW Lawfirm memiliki keahlian dalam mengelola kasus-kasus pidana, mulai dari memberikan dukungan hukum di tingkat kepolisian sebagai pelapor, saksi, atau pihak yang dilaporkan, hingga memberikan bantuan hukum di Pengadilan untuk mempertahankan hak-hak seorang terdakwa. Kami memiliki rekam jejak dalam menangani berbagai kasus pidana, termasuk namun tidak terbatas pada, kasus penipuan, pelanggaran kepercayaan, tindak kekerasan, pemalsuan dokumen, pelanggaran privasi properti, serta hukum pidana spesifik seperti kasus lalu lintas, pelanggaran narkoba, pelanggaran UU ITE, tindak pidana korupsi, pelanggaran hukum kehutanan, KDRT, pelanggaran lingkungan, dan banyak lagi. Komitmen kami adalah memberikan upaya maksimal untuk memastikan keadilan bagi klien kami dalam setiap kasus pidana yang kami tangani</p>
    </div>
</div>

@include('public.components.footer')

@endsection
