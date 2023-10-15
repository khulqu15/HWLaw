@extends('public')

@section('title', 'About - HW Lawfirm')

@section('content')

@include('public.components.navbar')

<div class="h-[60vh] flex items-center justify-center w-full relative bg-blue-900">
    <div class="text-white text-center">
        <h1 class="lg:text-4xl md:text-3xl text-2xl">About Us</h1>
        <div class="flex items-center gap-x-5 mt-6">
            <span>HOME</span>
            <span><iconify-icon class="text-2xl text-yellow-400" icon="icon-park:right"></iconify-icon></span>
            <span>ABOUT</span>
        </div>
    </div>
</div>

<div class="min-h-screen w-full relative bg-white">

</div>

@include('public.components.footer')

@endsection
