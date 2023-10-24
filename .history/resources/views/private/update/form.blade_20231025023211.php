@extends('private')

@section('title', 'HWLawyer - Add New Update Information')

@section('navbar', 'Add New Information')

@section('header')
    <script type="module" src="/assets/js/custom/navbar.js"></script>
@endsection

@section('content')
    <div class="w-full bg-white p-8 relative">
        <div class="space-y-4">
            <div>
                <label role="button" id="image1_label" for="image1_input" class="image_form w-full border hover:bg-gray-100 border-blue-900 relative overflow-hidden p-4 h-72 rounded-xl flex items-center justify-center">
                    <div id="image1_placeholder" class="text-center">
                        <iconify-icon class="text-4xl" icon="basil:image-outline"></iconify-icon>
                        <p>Foto HWLawyer 1</p>
                    </div>
                    <input type="file" id="image1_input" class="hidden" accept="image/png, image/jpeg">
                    <img id="image1_preview" src="/assets/images/1.jpg" class="absolute image_preview w-full h-full object-cover object-center" alt="">
                </label>
                <span class="text-sm text-black/70">Klik untuk mengganti gambar</span>
            </div>
            <div class="form-control">
                <label for="title_input" class="block mb-2">Judul Informasi</label>
                <input type="text" required maxlength="42" class="input input-bordered w-full" placeholder="cth. Informasi Update Terkini Di Kota Tulungagung">
            </div>
            <div class="grid md:grid-cols-3 grid-cols-1 gap-3">
                <div class="form-control">
                    <label for="title_input" class="block mb-2">Judul Informasi</label>
                    <input type="text" required maxlength="42" class="input input-bordered w-full" placeholder="cth. Informasi Update Terkini Di Kota Tulungagung">
                </div>
                <div class="form-control">
                    <label for="title_input" class="block mb-2">Judul Informasi</label>
                    <input type="text" required maxlength="42" class="input input-bordered w-full" placeholder="cth. Informasi Update Terkini Di Kota Tulungagung">
                </div>
                <div class="form-control">
                    <label for="title_input" class="block mb-2">Judul Informasi</label>
                    <input type="text" required maxlength="42" class="input input-bordered w-full" placeholder="cth. Informasi Update Terkini Di Kota Tulungagung">
                </div>
            </div>
        </div>
    </div>
@endsection

