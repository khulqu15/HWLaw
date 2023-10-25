@extends('private')

@section('title', 'HWLawyer - Admin Profile')
@section('navbar', 'Dashboard')

@section('header')
<script type="module" src="/assets/js/custom/dashboard.js"></script>
@endsection

@section('content')
    <div class="p-6 w-full relative">
        <div class="w-full relative mt-8" id="about_form">
            <h4 class="text-xl font-bold">Manajemen Profil HWLawyer</h4>
            <div class="grid grid-cols-2 mt-4 items-center gap-x-6">
                <div>
                    <label role="button" id="avatar_label" for="avatar_input" class="image_form w-full border hover:bg-gray-100 border-blue-900 relative overflow-hidden p-4 rounded-xl flex items-center justify-center">
                        <div id="avatar_placeholder" class="text-center">
                            <iconify-icon class="text-4xl" icon="basil:image-outline"></iconify-icon>
                            <p>Foto HWLawyer 1</p>
                        </div>
                        <input type="file" id="avatar_input" class="hidden" accept="image/png, image/jpeg">
                        @if ($user->avatar)
                            <img id="avatar_preview" src="/assets/images/{{ $about->avatar }}" class="absolute image_preview w-full h-full object-cover object-center" alt="">
                        @endif
                    </label>
                    <span class="text-sm text-black/70">Klik untuk mengganti gambar</span>
                </div>
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
