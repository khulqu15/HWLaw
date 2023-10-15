@extends('public')

@section('title', 'Update News - HW Lawfirm')

@section('content')

@include('public.components.navbar')

<div class="h-[80vh] flex items-center pt-20 justify-center w-full relative bg-blue-900">
    <img src="/assets/images/3.jpg" alt="HW Lawyer" class="absolute left-0 top-0 w-full h-full object-cover object-center opacity-20">
    <div class="text-white text-center relative">
        <h1 class="lg:text-4xl md:text-3xl font-semibold text-2xl">UPDATE NEWS</h1>
        <div class="flex items-center justify-center gap-x-5 mt-6">
            <span>HOME</span>
            <span><iconify-icon class="text-2xl text-yellow-400" icon="icon-park-outline:right"></iconify-icon></span>
            <span>UPDATE NEWS</span>
        </div>
    </div>
</div>

<div class="bg-gray-100">
    <div class="w-full pb-20 container relative mx-auto md:px-12 px-4">
        <div class="flex relative -top-6 rounded-xl items-center mb-8 p-6 bg-white shadow-2xl">
            <div class="grow w-full">
                <input type="text" placeholder="Type here" class="input input-bordered w-full" />

            </div>
        </div>
        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 grid-cols-1 gap-6 relative">
            @for ($i=1; $i<12; $i++)
                <div class="card card-compact bg-base-100 shadow-xl">
                    <figure><img src="/assets/images/{{$i}}.jpg" class="w-full h-64 object-cover object-center" alt="Album"/></figure>
                    <div class="card-body">
                        <h2 class="card-title text-lg">Ini Berita dari HWLawyer ke {{$i}}, Insyallah Bermanfaat...</h2>
                        <div class="flex justify-start items-center gap-x-3">
                            <div class="flex items-center gap-x-1">
                                <iconify-icon class="text-xl text-blue-900" icon="solar:calendar-date-bold"></iconify-icon>
                                <p class="text-sm">20 Mar 2023</p>
                            </div>
                            <div class="flex items-center gap-x-1">
                                <iconify-icon class="text-xl text-blue-900" icon="heroicons:map-pin-20-solid"></iconify-icon>
                                <p class="text-sm">Tulungagung</p>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non doloribus ullam nam...</p>
                    </div>
                </div>
            @endfor
        </div>
        <div class="flex justify-end">
            <div class="btn-group">
                <input type="radio" name="options" data-title="1" class="btn" />
                <input type="radio" name="options" data-title="2" class="btn" checked />
                <input type="radio" name="options" data-title="3" class="btn" />
                <input type="radio" name="options" data-title="4" class="btn" />
              </div>
        </div>
    </div>
</div>

@include('public.components.footer')

@endsection
