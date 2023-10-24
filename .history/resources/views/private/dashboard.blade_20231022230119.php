@extends('private')

@section('title', 'HWLawyer - Admin Dashboard')

@section('content')
    <div class="p-6 w-full relative">
        <div class="grid-cols-3 grid gap-4">
            <div class="md:col-span-2 col-span-3 w-full p-6 bg-blue-900 rounded-xl text-white">
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
            <div class="md:col-span-1 col-span-3 w-full p-5 bg-red-600 rounded-xl text-white">
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
        </div>

        <div class="w-full relative mt-8" id="about_form">
            <h4 class="text-xl font-bold">Manajemen Profil HWLawyer</h4>
            <div class="grid grid-cols-2 items-center gap-x-6">
                <label for="image1" class="w-full border border-blue-900 p-4 rounded-xl flex items-center justify-center">
                    Foto HWLawyer 1
                </label>
            </div>
            <form id="form_about" class="space-y-4 mt-4">
                <div class="form_control">
                    <label for="description" class="block mb-2">Deskripsi Profil HWLawyer</label>
                    <textarea id="description_input" required class="textarea w-full textarea-bordered h-32" placeholder="cth. Didirikan pada tahun 2021, HW Lawfirm membawa tradisi 17 tahun keahlian dalam dunia hukum..."></textarea>
                </div>
                <div class="text-right">
                    <button class="btn btn-wide bg-blue-900 hover:bg-blue-800 text-white" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
