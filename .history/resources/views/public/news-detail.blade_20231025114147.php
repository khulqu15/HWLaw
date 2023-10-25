@extends('public')

@section('title', "HWLawyer - $news->title" )

@section('content')

@include('public.components.navbar')

<div class="w-full pt-32">
    <div class="w-full min-h-[50vh] relative">
        <img src="/assets/images/{{ $news->cover }}" class="absolute w-full h-full object-center object-cover" alt="{{ $news->cover }}">
    </div>
</div>

@include('public.components.footer')

@endsection
