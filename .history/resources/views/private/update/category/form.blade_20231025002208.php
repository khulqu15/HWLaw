@extends('private')

@section('title', 'HW Lawyer - Tambah Kategori Informasi')

@section('navbar', 'Tambah Kategori')

@section('content')
<div class="w-full relative p-8 bg-white">
    <div class="space-y-3">
        <div class="form_control">
            <label for="name_input" class="block mb-3">Nama Kategori</label>
            <input id="name_input" type="text" class="w-full input input-bordered" >
        </div>
    </div>
</div>
@endsection
