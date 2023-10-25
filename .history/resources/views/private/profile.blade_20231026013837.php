@extends('private')

@section('title', 'HWLawyer - Admin Profil')
@section('navbar', 'Admin Profil')

@section('header')
{{-- <script type="module" src="/assets/js/custom/dashboard.js"></script> --}}
@endsection

@section('content')
    <div class="p-6 w-full relative">
        <div class="w-full relative mt-8" id="about_form">
            <h4 class="text-xl font-bold">Manajemen Profil HWLawyer</h4>
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
