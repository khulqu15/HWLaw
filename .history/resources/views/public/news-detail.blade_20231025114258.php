@extends('public')

@section('title', "HWLawyer - $news->title" )

@section('content')

@include('public.components.navbar')

<div class="w-full pt-32">
    <div class="w-full min-h-[50vh] relative">
        <img src="/assets/images/{{ $news->cover }}" class="absolute top-0 left-0 w-full h-72 object-center object-cover opacity-20" alt="{{ $news->cover }}">
    </div>
</div>

@include('public.components.footer')

@endsection
