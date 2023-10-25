@extends('public')

@section('title', "HWLawyer - $news->title" )

@section('content')

@include('public.components.navbar')

<div class="w-full pt-32 pb-12">
    <div class="w-full min-h-[50vh] relative">
        <img src="/assets/images/{{ $news->cover }}" class="absolute top-0 left-0 w-full h-96 object-center object-cover opacity-40" alt="{{ $news->cover }}">
        <div class="absolute top-0 left-0 w-full h-96 object-center object-cover bg-gradient-to-t from-white to-transparent"></div>
        <div class="relative container mx-auto px-8 pt-24">
            <img src="/assets/images/{{ $news->cover }}" alt="{{ $news->cover }}" class="w-full rounded-xl">
            <h1 class="text-3xl break-words mt-4 mb-2 font-bold">{{ $news->title }}</h1>
            <div class="flex justify-start items-center gap-x-3">
                <div class="flex items-center gap-x-1">
                    <iconify-icon class="text-xl text-blue-900" icon="solar:calendar-date-bold"></iconify-icon>
                    <p class="break-words">{{ date('d M Y', strtotime($news->date)) }}</p>
                </div>
                <div class="flex items-center gap-x-1">
                    <iconify-icon class="text-xl text-blue-900" icon="heroicons:map-pin-20-solid"></iconify-icon>
                    <p class="break-words">{{ $news->location }} </p>
                </div>
            </div>
            <div class="break-all mt-5">
                {!! $news->text !!}
            </div>
        </div>
    </div>
</div>

@include('public.components.footer')

@endsection
