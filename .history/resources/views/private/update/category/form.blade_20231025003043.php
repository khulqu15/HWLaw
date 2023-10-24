@extends('private')

@section('title', 'HW Lawyer - Tambah Kategori Informasi')

@section('navbar', 'Tambah Kategori')

@section('header')
<script type="module" src="/assets/js/custom/category_news.js"></script>
@endsection

@section('content')
<div class="w-full relative p-8 bg-white">
    <div class="space-y-3">
        <a href="/private/news/categories" class="btn btn-ghost border border-gray-300">Kembali</a>
        <form id="category_form">
            <div class="form_control">
                <label for="name_input" class="block mb-3">Nama Kategori</label>
                <input id="name_input" required maxlength="50" placeholder="cth. Berita, Artikel" type="text" class="w-full input input-bordered" >
            </div>
            <div class="w-full mt-3 flex justify-end justify-items-end items-center gap-x-3">
                <a href="/private/news/categories" class="btn btn-ghost border border-gray-300">Batal</a>
                <button class="btn bg-blue-900 hover:bg-blue-800 btn-wide text-white" type="sumbit">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
