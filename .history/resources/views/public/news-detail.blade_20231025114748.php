@extends('public')

@section('title', "HWLawyer - $news->title" )

@section('content')

@include('public.components.navbar')

<div class="w-full pt-32 pb-12">
    <div class="w-full min-h-[50vh] relative">
        <img src="/assets/images/{{ $news->cover }}" class="absolute top-0 left-0 w-full h-96 object-center object-cover opacity-40" alt="{{ $news->cover }}">
        <div class="absolute top-0 left-0 w-full h-96 object-center object-cover bg-gradient-to-t from-white to-transparent"></div>
        <div class="relative container max-w-md mx-auto px-8 pt-24">
            <img src="/assets/images/{{ $news->cover }}" alt="{{ $news->cover }}" class="w-full">
        </div>
    </div>
</div>

@include('public.components.footer')

@endsection
