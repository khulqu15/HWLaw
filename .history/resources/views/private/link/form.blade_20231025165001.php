@extends('private')

@section('title', 'HW Lawyer - Formulir Link Kontak')

@section('navbar')
    @if (!isset($link)) Tambah Link Kontak
    @else Edit Link Kontak
    @endif
@endsection

@section('header')
<script type="module" src="/assets/js/custom/link.js"></script>
@endsection

@section('content')
<div class="w-full relative p-8 bg-white">
    <div class="space-y-3">
        <a href="/private/news/categories" class="btn btn-ghost border border-gray-300">Kembali</a>
        <form id="link_form" class="space-y-3">
            <div class="form-control">
                <input id="id_input" value="{{ !isset($link) ? '' : $link->id }}" type="hidden">
                <label for="name_input" class="block mb-3">Nama Link Contact</label>
                <div class="input-group">
                    <input id="name_input_text" name="name" value="{{ !isset($link) ? '' : $link->name }}" required maxlength="50" placeholder="cth. Whatsapp, Facebook, Twitter, Youtube" type="text" class="w-full input input-bordered hidden" >
                    <select id="name_input_select" name="name" class="select select-bordered w-full">
                        <option value="">Pilih Platform</option>
                        <option value="facebook">Facebook</option>
                        <option value="instagram">Instagram</option>
                        <option value="twitter">Twitter</option>
                        <option value="youtube">Youtube</option>
                        <option value="linkedin">Linkedin</option>
                        <option value="github">Github</option>
                        <option value="email">Email</option>
                        <option value="whatsapp">Whatsapp</option>
                        <option value="telegram">Telegram</option>
                    </select>
                    <button class="btn btn-primary" id="name_input_toggle" type="button">
                        <iconify-icon icon="tabler:edit" class="text-2xl"></iconify-icon>
                    </button>
                </div>
            </div>
            <div class="form-control">
                <label for="category_input" class="block mb-3">Kategori Link</label>
                <div class="input-group">
                    <select required name="category" id="category_input_select" class="select select-bordered w-full">
                        <option value="">Pilih Kategori</option>
                        <option value="media">Media Sosial</option>
                        <option value="kontak">Kontak</option>
                    </select>
                    <input id="category_input_text" name="category" value="{{ !isset($link) ? '' : $link->category }}" required maxlength="50" placeholder="cth. Berita, Artikel" type="text" class="w-full input hidden input-bordered" >
                    <button class="btn btn-primary" id="category_input_toggle" type="button">
                        <iconify-icon icon="tabler:edit" class="text-2xl"></iconify-icon>
                    </button>
                </div>
            </div>
            <div class="form-control">
                <label for="link_input" class="block mb-3">Link / Kontak</label>
                <input id="link_input" value="{{ !isset($link) ? '' : $link->link }}" required maxlength="50" placeholder="cth. github.com/khulqu15" type="text" class="w-full input input-bordered" >
            </div>
            <div class="w-full mt-3 flex justify-end justify-items-end items-center gap-x-3">
                <a href="/private/news/categories" class="btn btn-ghost border border-gray-300">Batal</a>
                <button class="btn bg-blue-900 hover:bg-blue-800 btn-wide text-white" type="sumbit">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
