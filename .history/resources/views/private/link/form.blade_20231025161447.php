@extends('private')

@section('title', 'HW Lawyer - Formulir Link Kontak')

@section('navbar')
    @if (!isset($link)) Tambah Link Kontak
    @else Edit Link Kontak
    @endif
@endsection

@section('header')
<script type="module" src="/assets/js/custom/category_news.js"></script>
@endsection

@section('content')
<div class="w-full relative p-8 bg-white">
    <div class="space-y-3">
        <a href="/private/news/categories" class="btn btn-ghost border border-gray-300">Kembali</a>
        <form id="category_form">
            <div class="form_control">
                <input id="id_input" value="{{ !isset($link) ? '' : $link->id }}" type="hidden">
                <label for="name_input" class="block mb-3">Nama Link Contact</label>
                <input id="name_input" value="{{ !isset($link) ? '' : $link->name }}" required maxlength="50" placeholder="cth. Berita, Artikel" type="text" class="w-full input input-bordered" >
            </div>
            <div class="form_control">
                <label for="name_input" class="block mb-3">Kategori Link</label>
                <input id="name_input" value="{{ !isset($link) ? '' : $link->name }}" required maxlength="50" placeholder="cth. Berita, Artikel" type="text" class="w-full input input-bordered" >
            </div>
            <div class="form_control">
                <label for="name_input" class="block mb-3">Link / Kontak</label>
                <input id="name_input" value="{{ !isset($link) ? '' : $link->name }}" required maxlength="50" placeholder="cth. Berita, Artikel" type="text" class="w-full input input-bordered" >
            </div>
            <div class="w-full mt-3 flex justify-end justify-items-end items-center gap-x-3">
                <a href="/private/news/categories" class="btn btn-ghost border border-gray-300">Batal</a>
                <button class="btn bg-blue-900 hover:bg-blue-800 btn-wide text-white" type="sumbit">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
