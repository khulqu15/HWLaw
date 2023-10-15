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
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 w-full">
            <div class="service-content relative overflow-hidden w-full h-64 p-6 border-b-[1px] border-blue-900/20 bg-blue-900 transition-all text-white">
                <div class="absolute service-cover transition-all w-1/2 h-full right-0 top-0">
                    <div class="absolute left-0 h-full w-full top-0 bg-gradient-to-r from-blue-900 to-blue-900/40"></div>
                    <img src="/assets/images/1.jpg" class="h-full w-full object-cover object-center" alt="Service Image HW Lawyer">
                </div>
                <div class="relative">
                    <iconify-icon icon="octicon:law-24" class="text-6xl service-icon transition-all"></iconify-icon>
                    <h3 class="text-2xl font-semibold mb-2">Hukum Perdata</h3>
                    <p>HW Lawfirm berpengalaman dalam menangani perkara pidana, baik melakukan pendampingan di kepolisian...</p>
                </div>
                <div class="text-right mt-3 service-button absolute bottom-0 right-0 p-4">
                    <button class="btn btn-ghost text-yellow-400">Selengkapnya</button>
                </div>
            </div>
            <div class="service-content relative overflow-hidden w-full h-64 p-6 border-b-[1px] border-blue-900/20 bg-gray-100 hover:bg-blue-900 transition-all hover:text-white">
                <div class="absolute service-cover opacity-0 transition-all w-1/2 h-full right-0 top-0">
                    <div class="absolute left-0 h-full w-full top-0 bg-gradient-to-r from-blue-900 to-blue-900/40"></div>
                    <img src="/assets/images/2.jpg" class="h-full w-full object-cover object-center" alt="Service Image HW Lawyer">
                </div>
                <div class="relative">
                    <iconify-icon icon="uit:bag" class="text-6xl service-icon transition-all"></iconify-icon>
                    <h3 class="text-2xl font-semibold mb-2">Hukum Kontrak</h3>
                    <p>HW Lawfirm memiliki keahlian dalam memberikan nasihat hukum, mendampingi klien dalam penyusunan naskah perjanjian bisnis, regulasi ...</p>
                </div>
                <div class="text-right mt-3 service-button absolute bottom-0 right-0 p-4">
                    <button class="btn btn-ghost text-yellow-400">Selengkapnya</button>
                </div>
            </div>
            <div class="service-content relative overflow-hidden w-full h-64 p-6 border-x-[1px] border-b-[1px] border-blue-900/20 bg-gray-100 hover:bg-blue-900 transition-all hover:text-white">
                <div class="absolute service-cover opacity-0 transition-all w-1/2 h-full right-0 top-0">
                    <div class="absolute left-0 h-full w-full top-0 bg-gradient-to-r from-blue-900 to-blue-900/40"></div>
                    <img src="/assets/images/3.jpg" class="h-full w-full object-cover object-center" alt="Service Image HW Lawyer">
                </div>
                <div class="relative">
                    <iconify-icon icon="teenyicons:contract-outline" class="text-6xl service-icon transition-all"></iconify-icon>
                    <h3 class="text-2xl font-semibold mb-2">Hukum Pidana</h3>
                    <p>HW Lawfirm memiliki keahlian dalam menyelesaikan kasus pelanggaran hukum serta tuntutan ...</p>
                </div>
                <div class="text-right mt-3 service-button absolute bottom-0 right-0 p-4">
                    <button class="btn btn-ghost text-yellow-400">Selengkapnya</button>
                </div>
            </div>
            <div class="service-content relative overflow-hidden w-full h-64 p-6 bg-gray-100 hover:bg-blue-900 transition-all hover:text-white">
                <div class="absolute service-cover opacity-0 transition-all w-1/2 h-full right-0 top-0">
                    <div class="absolute left-0 h-full w-full top-0 bg-gradient-to-r from-blue-900 to-blue-900/40"></div>
                    <img src="/assets/images/4.jpg" class="h-full w-full object-cover object-center" alt="Service Image HW Lawyer">
                </div>
                <div class="relative">
                    <iconify-icon icon="guidance:bank" class="text-6xl service-icon transition-all"></iconify-icon>
                    <h3 class="text-2xl font-semibold mb-2">Hukum Perbankan</h3>
                    <p>HW Lawfirm memiliki keahlian dalam memberikan nasihat hukum, mewakili klien dalam proses pendirian institusi keuangan dan transaksi lainnya...</p>
                </div>
                <div class="text-right mt-3 service-button absolute bottom-0 right-0 p-4">
                    <button class="btn btn-ghost text-yellow-400">Selengkapnya</button>
                </div>
            </div>
            <div class="service-content relative overflow-hidden w-full h-64 p-6 border-x-[1px] border-blue-900/20 bg-gray-100 hover:bg-blue-900 transition-all hover:text-white">
                <div class="absolute service-cover opacity-0 transition-all w-1/2 h-full right-0 top-0">
                    <div class="absolute left-0 h-full w-full top-0 bg-gradient-to-r from-blue-900 to-blue-900/40"></div>
                    <img src="/assets/images/5.jpg" class="h-full w-full object-cover object-center" alt="Service Image HW Lawyer">
                </div>
                <div class="relative">
                    <iconify-icon icon="cil:industry" class="text-6xl service-icon transition-all"></iconify-icon>
                    <h3 class="text-2xl font-semibold mb-2">Hukum Pidana</h3>
                    <p>HW Lawfirm berpengalaman dalam menangani perkara pidana, baik melakukan pendampingan di kepolisian...</p>
                </div>
                <div class="text-right mt-3 service-button absolute bottom-0 right-0 p-4">
                    <button class="btn btn-ghost text-yellow-400">Selengkapnya</button>
                </div>
            </div>
            <div class="service-content relative overflow-hidden w-full h-64 p-6 border-blue-900 bg-gray-100 hover:bg-blue-900 transition-all hover:text-white">
                <div class="absolute service-cover opacity-0 transition-all w-1/2 h-full right-0 top-0">
                    <div class="absolute left-0 h-full w-full top-0 bg-gradient-to-r from-blue-900 to-blue-900/40"></div>
                    <img src="/assets/images/6.jpg" class="h-full w-full object-cover object-center" alt="Service Image HW Lawyer">
                </div>
                <div class="relative">
                    <iconify-icon icon="iconoir:page-search" class="text-6xl service-icon transition-all"></iconify-icon>
                    <h3 class="text-2xl font-semibold mb-2">Hukum Kepailitan</h3>
                    <p>HW Lawfirm memiliki keahlian dalam menangani proses PKPU dan Kepailitan, mewakili baik pihak pemberi pinjaman maupun penerima pinjaman...</p>
                </div>
                <div class="text-right mt-3 service-button absolute bottom-0 right-0 p-4">
                    <button class="btn btn-ghost text-yellow-400">Selengkapnya</button>
                </div>
            </div>
        </div>
    </div>
</div>

@include('public.components.footer')

@endsection
