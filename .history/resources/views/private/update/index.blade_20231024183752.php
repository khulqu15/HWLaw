@extends('private')

@section('title', 'HW Lawyer')

@section('navbar', 'Update Informasi')

@section('header')
<script type="module" src="/assets/js/custom/news.js"></script>
@endsection

@section('content')
<div class="w-full relative p-8 bg-white">
    <div class="space-y-3">
        <div class="tabs tabs-boxed">
            <a class="tab tab-active">Informasi</a>
            <a class="tab">Kategori</a>
        </div>
        <div class="flex items-center justify-between">
            <div class="form_control">
                <input type="text" class="input text-sm input-bordered" placeholder="Cari Berdasarkan Judul">
            </div>
            <div class="form_control">
                <input type="text" class="input text-sm input-bordered" placeholder="Cari Berdasarkan Judul">
            </div>
            <div class="form_control">
                <input type="text" class="input text-sm input-bordered" placeholder="Cari Berdasarkan Judul">
            </div>
        </div>
    </div>
</div>
@endsection
