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
    <div class="grid grid-cols-2 items-end justify-center justify-items-center">
        <div class="relative w-3/4 h-96">
            <div class="bg-white/50 backdrop-blur-md w-1/4 h-28 -left-0 flex items-center justify-center text-center top-0 absolute">
                <img src="/assets/images/LOGO.png" class="h-20 inline-block" alt="Logo HW Lawyer Logo">
            </div>
            <img src="/assets/images/4.jpg" class="w-full h-full object-cover object-center" alt="">
        </div>
    </div>
</div>

@include('public.components.footer')

@endsection
