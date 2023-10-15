@extends('public')

@section('title', 'About - HW Lawfirm')

@section('content')

@include('public.components.navbar')

<div class="h-[60vh] flex items-center justify-center w-full relative bg-blue-900">
    <div class="text-white text-center">
        <h1 class="lg:text-4xl md:text-3xl text-2xl">About Us</h1>
        <div class="flex items-center gap-x-5 mt-5">
            <span>HOME</span>
            <span>></span>
            <span>ABOUT</span>
        </div>
    </div>
</div>

<div class="min-h-screen w-full relative bg-white">

</div>

@include('public.components.footer')

@endsection
