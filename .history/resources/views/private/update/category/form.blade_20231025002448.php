@extends('private')

@section('title', 'HW Lawyer - Tambah Kategori Informasi')

@section('navbar', 'Tambah Kategori')

@section('content')
<div class="w-full relative p-8 bg-white">
    <div class="space-y-3">
        <form id="category_form">
            <div class="form_control">
                <label for="name_input" class="block mb-3">Nama Kategori</label>
                <input id="name_input" placeholder="cth. Berita, Artikel" type="text" class="w-full input input-bordered" >
            </div>
            <div class="w-full flex justify-end justify-items-end items-center">
                <a class="btn btn-ghost border border-gray-300">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection
