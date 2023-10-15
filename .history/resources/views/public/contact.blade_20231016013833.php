@extends('public')

@section('title', 'Contact - HW Lawfirm')

@section('content')

@include('public.components.navbar')

<div class="h-[80vh] flex items-center pt-20 justify-center w-full relative bg-blue-900">
    <img src="/assets/images/5.jpg" alt="HW Lawyer" class="absolute left-0 top-0 w-full h-full object-cover object-center opacity-20">
    <div class="text-white text-center relative">
        <h1 class="lg:text-4xl md:text-3xl font-semibold text-2xl">Contact Us</h1>
        <div class="flex items-center justify-center gap-x-5 mt-6">
            <span>HOME</span>
            <span><iconify-icon class="text-2xl text-yellow-400" icon="icon-park-outline:right"></iconify-icon></span>
            <span>CONTACT</span>
        </div>
    </div>
</div>

<div class="bg-gray-100">
    <div class="w-full py-20 container relative mx-auto md:px-12 px-4">
        <div class="grid md:grid-cols-2 grid-cols-1 gap-6 relative">
            <div>
                <p class="text-red-600 letter-wider uppercase mb-3">Hubungi Kami</p>
                <h1 class="lg:text-4xl md:text-3xl text-2xl font-bold mb-6">GET IN TOUCH</h1>
                <p class="text-black/70">Jika Anda memiliki pertanyaan atau ingin melakukan konsultasi, silahkan hubungi kami melalui form atau informasi kontak yang ada di halaman ini. Dengan senang hati kami akan membalas pesan Anda secepatnya.</p>
                <div class="flex gap-x-3 my-4">
                    <div class="bg-blue-900 text-white h-12 w-12 flex items-center justify-center">
                        <iconify-icon icon="heroicons:map-pin-solid" class="text-2xl text-white"></iconify-icon>
                    </div>
                    <div>
                        <h5 class="text-xl mt-2 font-semibold mb-1">Lokasi Kami</h5>
                        <span class="text-sm text-black/80">Jalan Alamat Kantor HW Lawfirm, Tulungangung, Indonesia, 60192</span>
                    </div>
                </div>
                <div class="flex gap-x-3 mb-4">
                    <div class="bg-red-500 text-white h-12 w-12 flex items-center justify-center">
                        <iconify-icon icon="eva:email-outline" class="text-2xl text-black"></iconify-icon>
                    </div>
                    <div>
                        <h5 class="text-xl mt-2 font-semibold mb-1">Email Kami</h5>
                        <span class="text-sm text-black/80">admin@hwlawfirm.id</span>
                    </div>
                </div>
                <div class="flex items-center flex-wrap gap-x-3 mb-4">
                    <div class="bg-red-500 text-white h-12 w-12 flex items-center justify-center">
                        <iconify-icon icon="ph:phone-fill" class="text-2xl text-black"></iconify-icon>
                    </div>
                    <div>
                        <h5 class="text-xl mt-2 font-semibold mb-1">Nomor HP Kami</h5>
                        <span class="text-sm text-black/80">+021-7997973 / 0895-3960-0495</span>
                    </div>
                </div>
            </div>
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d209325.40098661926!2d111.79401016478059!3d-8.148639388461183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78e2fac4fe1167%3A0x4027a76e3532000!2sTulungagung%2C%20Kabupaten%20Tulungagung%2C%20Jawa%20Timur!5e1!3m2!1sid!2sid!4v1697395103752!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>

@include('public.components.footer')

@endsection
