@extends('public')

@section('title', 'About - HW Lawfirm')

@section('content')

@include('public.components.navbar')

<div class="h-[60vh] flex items-center pt-20 justify-center w-full relative bg-blue-900">
    <img src="/assets/images/2.jpg" alt="HW Lawyer" class="absolute left-0 top-0 w-full h-full object-cover object-center opacity-70">
    <div class="text-white text-center">
        <h1 class="lg:text-4xl md:text-3xl font-semibold text-2xl">About Us</h1>
        <div class="flex items-center gap-x-5 mt-6">
            <span>HOME</span>
            <span><iconify-icon class="text-2xl text-yellow-400" icon="icon-park-outline:right"></iconify-icon></span>
            <span>ABOUT</span>
        </div>
    </div>
</div>

<div class="min-h-screen w-full relative bg-white">

</div>

@include('public.components.footer')

@endsection
