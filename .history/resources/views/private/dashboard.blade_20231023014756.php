@extends('private')

@section('title', 'HWLawyer - Admin Dashboard')

@section('header')
<script type="module" src="/assets/js/custom/dashboard.js"></script>
@endsection

@section('content')
    <div class="p-6 w-full relative">
        <div class="grid-cols-4 grid gap-4">
            <div class="col-span-4 w-full p-6 bg-blue-900 rounded-xl text-white">
                <div class="flex items-center justify-between">
                    <h3 class="font-semibold">Data Publikasi Informasi</h3>
                    <h1 class="text-2xl font-bold">90</h1>
                </div>
                <div class="flex mt-3 gap-3 items-center flex-wrap">
                    <div class="py-2 px-4 rounded-lg border border-white">
                        <span class="font-semibold">12</span>
                        <span class="text-sm">Berita</span>
                    </div>
                    <div class="py-2 px-4 rounded-lg border border-white">
                        <span class="text-xl font-semibold">12</span>
                        <span class="text-sm">Artikel</span>
                    </div>
                    <div class="py-2 px-4 rounded-lg border border-white">
                        <span class="text-xl font-semibold">12</span>
                        <span class="text-sm">SIP-R</span>
                    </div>
                    <div class="py-2 px-4 rounded-lg border border-white">
                        <span class="text-xl font-semibold">12</span>
                        <span class="text-sm">Press Release</span>
                    </div>
                    <div class="py-2 px-4 rounded-lg border border-white">
                        <span class="text-xl font-semibold">12</span>
                        <span class="text-sm">Legality</span>
                    </div>
                </div>
            </div>
            <div class="md:col-span-2 col-span-4 w-full p-5 bg-red-600 rounded-xl text-white">
                <div class="flex items-center justify-between">
                    <h3 class="font-semibold">Data Permintaan Client</h3>
                    <h1 class="text-2xl font-bold">90</h1>
                </div>
                <div class="flex mt-3 gap-3 items-center flex-wrap">
                    <div class="py-2 px-4 rounded-lg border border-white">
                        <span class="font-semibold">12</span>
                        <span class="text-sm">Web Form</span>
                    </div>
                    <div class="py-2 px-4 rounded-lg border border-white">
                        <span class="text-xl font-semibold">12</span>
                        <span class="text-sm">Whatsapp</span>
                    </div>
                </div>
            </div>
            <div class="md:col-span-2 col-span-4 w-full p-5 bg-red-600 rounded-xl text-white">
                <div class="flex items-center justify-between">
                    <h3 class="font-semibold">Data Area Praktik</h3>
                    <h1 class="text-2xl font-bold">90</h1>
                </div>
            </div>
        </div>

        <div class="w-full relative mt-8" id="about_form">
            <h4 class="text-xl font-bold">Manajemen Profil HWLawyer</h4>
            <div class="grid grid-cols-2 mt-4 items-center gap-x-6">
                <label role="button" id="image1_label" for="image1" class="image_form w-full border hover:bg-gray-100 border-blue-900 relative overflow-hidden p-4 rounded-xl flex items-center justify-center">
                    <div id="image1_placeholder" class="text-center">
                        <iconify-icon class="text-4xl" icon="basil:image-outline"></iconify-icon>
                        <p>Foto HWLawyer 1</p>
                    </div>
                    <input type="file" id="image1_input" class="hidden">
                    <img id="image1_preview" src="/assets/images/1.jpg" class="absolute hidden w-full h-full object-cover object-center" alt="">
                </label>
                <label role="button" id="image2_label" for="image2" class="image_form w-full border hover:bg-gray-100 border-blue-900 relative overflow-hidden p-4 rounded-xl flex items-center justify-center">
                    <div id="image2_placeholder" class="text-center">
                        <iconify-icon class="text-4xl" icon="basil:image-outline"></iconify-icon>
                        <p>Foto HWLawyer 2</p>
                    </div>
                    <input type="file" id="image2_input" class="hidden">
                    <img id="image2_preview" src="/assets/images/1.jpg" class="absolute hidden w-full h-full object-cover object-center" alt="">
                </label>
            </div>
            <form id="form_about" class="space-y-4 mt-4">
                <div class="grid grid-cols-2 items-center gap-x-3">
                    <div class="form_control">
                        <label for="year_input" class="block mb-2">Didirikan pada tahun</label>
                        <input value="{{ $about->year }}" type="number" id="year_input" placeholder="cth. 2002" required max="2150" min="1945" class="input input-bordered w-full">
                    </div>
                    <div class="form_control">
                        <label for="cases_input" class="block mb-2">Jumlah kasus yang telah diselesaikan</label>
                        <input value="{{ $about->completed_case }}" type="number" id="cases_input" placeholder="cth. 100" required max="999999" min="0" class="input input-bordered w-full">
                    </div>
                </div>
                <div class="grid grid-cols-2 items-center gap-x-3">
                    <div class="form_control">
                        <label for="vission_input" class="block mb-2">Visi</label>
                        <input value="{{ $about->vission }}" type="text" id="vission_input" placeholder="cth. Menjadi Pelaksana Keadilan yang objektif..." required maxlength="255" class="input input-bordered w-full">
                    </div>
                    <div class="form_control">
                        <label for="mission_input" class="block mb-2">Misi</label>
                        <input value="{{ $about->mission }}" type="text" id="mission_input" placeholder="cth. Merealisasikan layanan hukum yang ahli dengan..." required maxlength="255" class="input input-bordered w-full">
                    </div>
                </div>
                <div class="form_control">
                    <label for="description_input" class="block mb-2">Deskripsi Profil HWLawyer</label>
                    <textarea id="description_input" required class="textarea w-full textarea-bordered h-32" placeholder="cth. Didirikan pada tahun 2021, HW Lawfirm membawa tradisi 17 tahun keahlian dalam dunia hukum...">{{ $about->description }}</textarea>
                </div>
                <div class="text-right">
                    <button class="btn btn-wide bg-blue-900 hover:bg-blue-800 text-white" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
