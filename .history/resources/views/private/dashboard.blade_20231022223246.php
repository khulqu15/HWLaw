@extends('private')

@section('title', 'HWLawyer - Admin Dashboard')

@section('content')
    <div class="p-6 w-full relative">
        <div class="grid-cols-2 grid gap-4">
            <div class="md:col-span-1 col-span-2 w-full p-6 bg-blue-900 rounded-xl text-white">
                <div class="flex items-center justify-between">
                    <h3 class="font-semibold">Data Publikasi Informasi</h3>
                    <h1 class="text-2xl font-bold">90</h1>
                </div>
                <div class="flex p-2 rounded-xl border border-white items-center flex-wrap">
                    <div>News</div>
                </div>
            </div>
            <div class="w-full p-5 bg-blue-900 rounded-xl"></div>
        </div>
    </div>
@endsection
