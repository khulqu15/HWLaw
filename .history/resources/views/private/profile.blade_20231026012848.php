@extends('private')

@section('title', 'HWLawyer - Admin Profile')
@section('navbar', 'Dashboard')

@section('header')
{{-- <script type="module" src="/assets/js/custom/dashboard.js"></script> --}}
@endsection

@section('content')
    <div class="p-6 w-full relative">
        <div class="w-full relative mt-8" id="about_form">
            <h4 class="text-xl font-bold">Manajemen Profil HWLawyer</h4>
            <div class="grid grid-cols-2 mt-4 items-center gap-x-6">
                <div>
                    <label role="button" id="avatar_label" for="avatar_input" class="image_form w-full border hover:bg-gray-100 border-blue-900 relative overflow-hidden w-12 h-12 rounded-xl flex items-center justify-center">
                        <div id="avatar_placeholder" class="text-center">
                            <iconify-icon class="text-4xl" icon="basil:image-outline"></iconify-icon>
                        </div>
                        <input type="file" id="avatar_input" class="hidden" accept="image/png, image/jpeg">
                        @if ($user->avatar)
                            <img id="avatar_preview" src="/assets/images/{{ $user->avatar }}" class="absolute image_preview w-full h-full object-cover object-center" alt="">
                        @endif
                    </label>
                    <span class="text-sm text-black/70">Klik untuk mengganti gambar</span>
                </div>
            </div>
            <form method="POST" action="/private/profile/{{ $user->id }}" id="form_about" class="space-y-4 mt-4">
                <div class="grid grid-cols-2 items-center gap-x-3">
                    <div class="form_control">
                        <label for="name_input" class="block mb-2">Nama</label>
                        <input name="name" value="{{ $user->name }}" type="text" id="name_input" placeholder="cth. Admin Keren" required class="input input-bordered w-full">
                    </div>
                    <div class="form_control">
                        <label for="email_input" class="block mb-2">Email</label>
                        <input name="email" value="{{ $user->email }}" type="email" id="cases_input" placeholder="cth. admin@hw.law.com" required class="input input-bordered w-full">
                    </div>
                </div>
                <div class="grid grid-cols-2 items-center gap-x-3">
                    <div class="form_control">
                        <label for="password_input" class="block mb-2">Password</label>
                        <input name="password" type="password" id="password_input" class="input input-bordered w-full">
                    </div>
                    <div class="form_control">
                        <label for="repassword_input" class="block mb-2">Konfirmasi Password</label>
                        <input name="repassword" type="password" id="repassword_input" class="input input-bordered w-full">
                    </div>
                </div>
                <div class="text-right">
                    <button class="btn btn-wide bg-blue-900 hover:bg-blue-800 text-white" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
