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
                <div class="flex mt-3 gap-3 items-center flex-wrap">
                    <div class="py-2 px-4 rounded-lg border border-white">
                        <span class="font-semibold">12</span>
                        <span class="text-sm">Berita</span>
                    </div>
                    <div class="py-2 px-4 rounded-lg border border-white">
                        <span class="text-xl font-semibold">12</span>
                        <span class="text-sm">Artikel</span>
                    </div>
                    <div class="py-2 px-4 rounded-lg border border-white">
                        <span class="text-xl font-semibold">12</span>
                        <span class="text-sm">SIP-R</span>
                    </div>
                    <div class="py-2 px-4 rounded-lg border border-white">
                        <span class="text-xl font-semibold">12</span>
                        <span class="text-sm">Press Release</span>
                    </div>
                </div>
            </div>
            <div class="w-full p-5 bg-blue-900 rounded-xl"></div>
        </div>
    </div>
@endsection
