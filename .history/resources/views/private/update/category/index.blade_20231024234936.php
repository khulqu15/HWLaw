@extends('private')

@section('title', 'HW Lawyer - Kategori Informasi')

@section('navbar', 'Kategori Informasi')

@section('content')
<div class="w-full relative p-8 bg-white">
    <div class="space-y-3">
        <div class="flex justify-between items-center gap-x-3">
            <div class="tabs tabs-boxed">
                <a href="/private/news" class="tab">Informasi</a>
                <a href="/private/news/categories" class="tab tab-active">Kategori</a>
            </div>
            <div>
                <a href="/private/news/add" class="btn bg-blue-900 hover:bg-blue-700 text-white">Tambahkan baru</a>
            </div>
        </div>
        <div class="flex items-center gap-x-3 justify-between">
            <div class="form_control grow w-full">
                <input id="name_input" type="text" class="input text-sm w-full input-bordered" placeholder="Cari Berdasarkan Nama">
            </div>
            <div class="form_control grow w-full">
                <select id="category_input" class="select select-bordered w-full">
                    <option value="">Semua Kategori</option>
                    <option value="">Berita</option>
                    <option value="">Artikel</option>
                </select>
            </div>
            <button class="btn bg-ghost text-black/70">
                <iconify-icon icon="fa:sort"></iconify-icon>
            </button>
        </div>
    </div>
</div>
@endsection
