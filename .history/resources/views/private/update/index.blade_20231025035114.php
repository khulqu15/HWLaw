@extends('private')

@section('title', 'HW Lawyer - Admin Update Informasi')

@section('navbar', 'Update Informasi')

@section('footer_script')
<script type="module" src="/assets/js/custom/news.js"></script>
@endsection

@section('content')
<div class="w-full relative p-8 bg-white">
    <div class="space-y-3">
        <div class="flex justify-between items-center gap-x-3">
            <div class="tabs tabs-boxed">
                <a href="/private/news" class="tab tab-active">Informasi</a>
                <a href="/private/news/categories" class="tab">Kategori</a>
            </div>
            <div>
                <a href="/private/news/add" class="btn bg-blue-900 hover:bg-blue-700 text-white">Tambahkan baru</a>
            </div>
        </div>
        <div class="flex items-center gap-x-3 justify-between">
            <div class="form_control grow w-full">
                <input id="name_input" type="text" class="input text-sm w-full input-bordered" placeholder="Cari Berdasarkan Judul">
            </div>
            <div class="form_control grow w-full">
                <select id="category_input" class="select select-bordered w-full">
                    <option value="">Semua Kategori</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn bg-ghost text-black/70">
                <iconify-icon icon="fa:sort"></iconify-icon>
            </button>
        </div>
        <div>
            @foreach ($news as $item)
            <div class="card card-compact bg-base-100 shadow-xl">
                <figure><img src="/assets/images/{{$item->cover}}" class="w-full h-64 object-cover object-center" alt="Album"/></figure>
                <div class="card-body">
                    <h2 class="card-title text-lg">{{ $item->title }}</h2>
                    <div class="flex justify-start items-center gap-x-3">
                        <div class="flex items-center gap-x-1">
                            <iconify-icon class="text-xl text-blue-900" icon="solar:calendar-date-bold"></iconify-icon>
                            <p class="text-sm">{{ $item->date }}</p>
                        </div>
                        <div class="flex items-center gap-x-1">
                            <iconify-icon class="text-xl text-blue-900" icon="heroicons:map-pin-20-solid"></iconify-icon>
                            <p class="text-sm">Tulungagung</p>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non doloribus ullam nam...</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
