@extends('private')

@section('title', 'HWLawyer - Admin Dashboard')
@section('navbar', 'Dashboard')

@section('header')
<script type="module" src="/assets/js/custom/dashboard.js"></script>
@endsection

@section('content')
    <div class="p-6 w-full relative">
        <div class="w-full relative mt-8" id="about_form">
            <h4 class="text-xl font-bold">Manajemen Halaman Beranda</h4>
            <form id="form_content" class="space-y-4 mt-4 mb-8">
                <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-4 items-center gap-x-6">
                    <div>
                        <label role="button" id="logo_label" for="logo_image" class="image_form w-full border hover:bg-gray-100 border-blue-900 relative overflow-hidden p-12 rounded-xl flex items-center justify-center">
                            <div id="logo_image_placeholder" class="text-center">
                                <iconify-icon class="text-4xl" icon="basil:image-outline"></iconify-icon>
                                <p>Logo</p>
                            </div>
                            <input type="file" id="logo_image" class="hidden" accept="image/png, image/jpeg">
                            @if ($content->logo_image)
                                <img id="logo_image_preview" src="/assets/images/{{ $content->logo_image }}" class="absolute image_preview w-full h-full object-cover object-center" alt="">
                            @else
                                <img id="logo_image_preview" src="/assets/images/1.png" class="absolute hidden image_preview w-full h-full object-cover object-center" alt="">
                            @endif
                        </label>
                        <span class="text-sm text-black/70">Klik untuk mengganti gambar (pastikan ukurannya kurang dari 1mb)</span>
                    </div>
                    <div>
                        <label role="button" id="about_label" for="about_image" class="image_form w-full border hover:bg-gray-100 border-blue-900 relative overflow-hidden p-12 rounded-xl flex items-center justify-center">
                            <div id="about_image_placeholder" class="text-center">
                                <iconify-icon class="text-4xl" icon="basil:image-outline"></iconify-icon>
                                <p>Konten Profil</p>
                            </div>
                            <input type="file" id="about_image" class="hidden" accept="image/png, image/jpeg">
                            @if ($content->about_image)
                                <img id="about_image_preview" src="/assets/images/{{ $content->about_image }}" class="absolute image_preview w-full h-full object-cover object-center" alt="">
                            @else
                                <img id="about_image_preview" src="/assets/images/1.png" class="absolute hidden image_preview w-full h-full object-cover object-center" alt="">
                            @endif
                        </label>
                        <span class="text-sm text-black/70">Klik untuk mengganti gambar (pastikan ukurannya kurang dari 1mb)</span>
                    </div>
                    <div>
                        <label role="button" id="area_label" for="area_image" class="image_form w-full border hover:bg-gray-100 border-blue-900 relative overflow-hidden p-12 rounded-xl flex items-center justify-center">
                            <div id="area_image_placeholder" class="text-center">
                                <iconify-icon class="text-4xl" icon="basil:image-outline"></iconify-icon>
                                <p>Konten Areak Praktek</p>
                            </div>
                            <input type="file" id="area_image" class="hidden" accept="image/png, image/jpeg">
                            @if ($content->area_image)
                                <img id="area_image_preview" src="/assets/images/{{ $content->area_image }}" class="absolute image_preview w-full h-full object-cover object-center" alt="">
                            @else
                                <img id="area_image_preview" src="/assets/images/1.png" class="absolute hidden image_preview w-full h-full object-cover object-center" alt="">
                            @endif
                        </label>
                        <span class="text-sm text-black/70">Klik untuk mengganti gambar (pastikan ukurannya kurang dari 1mb)</span>
                    </div>
                    <div>
                        <label role="button" id="contact_label" for="contact_image" class="image_form w-full border hover:bg-gray-100 border-blue-900 relative overflow-hidden p-12 rounded-xl flex items-center justify-center">
                            <div id="contact_image_placeholder" class="text-center">
                                <iconify-icon class="text-4xl" icon="basil:image-outline"></iconify-icon>
                                <p>Logo</p>
                            </div>
                            <input type="file" id="contact_image" class="hidden" accept="image/png, image/jpeg">
                            @if ($content->contact_image)
                                <img id="contact_image_preview" src="/assets/images/{{ $content->contact_image }}" class="absolute image_preview w-full h-full object-cover object-center" alt="">
                            @else
                                <img id="contact_image_preview" src="/assets/images/1.png" class="absolute hidden image_preview w-full h-full object-cover object-center" alt="">
                            @endif
                        </label>
                        <span class="text-sm text-black/70">Klik untuk mengganti gambar (pastikan ukurannya kurang dari 1mb)</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 items-center gap-x-3">
                    <div class="form_control">
                        <label for="header_motto" class="block mb-2">Motto Bagian Header</label>
                        <input value="{{ $content->header_motto }}" type="text" id="header_motto" required maxlength="200" class="input input-bordered w-full">
                    </div>
                    <div class="form_control">
                        <label for="header_title" class="block mb-2">Judul Bagian Header</label>
                        <input value="{{ $content->header_title }}" type="text" id="header_title" required maxlength="200" class="input input-bordered w-full">
                    </div>
                </div>
                <div class="form_control">
                    <label for="header_description" class="block mb-2">Description Bagian Header</label>
                    <textarea id="header_description" required class="textarea w-full textarea-bordered h-32">{{ $content->header_description }}</textarea>
                </div>
                <div class="grid grid-cols-2 items-center gap-x-3">
                    <div class="form_control">
                        <label for="header_motivation_title" class="block mb-2">Judul Motivasi Bagian Header</label>
                        <input value="{{ $content->header_motivation_title }}" type="text" id="header_motivation_title" required maxlength="200" class="input input-bordered w-full">
                    </div>
                    <div class="form_control">
                        <label for="header_motivation_subtitle" class="block mb-2">Sub-Judul Bagian Header</label>
                        <input value="{{ $content->header_motivation_subtitle }}" type="text" id="header_motivation_subtitle" required maxlength="200" class="input input-bordered w-full">
                    </div>
                </div>
                <div class="grid grid-cols-2 items-center gap-x-3">
                    <div class="form_control">
                        <label for="about_motto" class="block mb-2">Header Bagian Profil</label>
                        <input value="{{ $content->about_motto }}" type="text" id="about_motto" required maxlength="200" class="input input-bordered w-full">
                    </div>
                    <div class="form_control">
                        <label for="about_title" class="block mb-2">Title Bagian Profil</label>
                        <input value="{{ $content->about_title }}" type="text" id="about_title" required maxlength="200" class="input input-bordered w-full">
                    </div>
                </div>
                <div class="form_control">
                    <label for="about_description" class="block mb-2">Description Bagian Profil</label>
                    <textarea id="about_description" required class="textarea w-full textarea-bordered h-32">{{ $content->about_description }}</textarea>
                </div>
                <div class="grid grid-cols-2 items-center gap-x-3">
                    <div class="form_control">
                        <label for="about_point_title" class="block mb-2">Profil Poin 1 Title</label>
                        <input value="{{ $content->about_point_title }}" type="text" id="about_point_title" required maxlength="200" class="input input-bordered w-full">
                    </div>
                    <div class="form_control">
                        <label for="about_point_description" class="block mb-2">Profil Poin 1 Description</label>
                        <input value="{{ $content->about_point_description }}" type="text" id="about_point_description" required maxlength="200" class="input input-bordered w-full">
                    </div>
                </div>
                <div class="grid grid-cols-2 items-center gap-x-3">
                    <div class="form_control">
                        <label for="area_motto" class="block mb-2">Header Bagian Praktek Area</label>
                        <input value="{{ $content->area_motto }}" type="text" id="area_motto" required maxlength="200" class="input input-bordered w-full">
                    </div>
                    <div class="form_control">
                        <label for="area_title" class="block mb-2">Title Bagian Praktek Area</label>
                        <input value="{{ $content->area_title }}" type="text" id="area_title" required maxlength="200" class="input input-bordered w-full">
                    </div>
                </div>
                <div class="form_control">
                    <label for="area_description" class="block mb-2">Description Bagian Praktek Area</label>
                    <textarea id="area_description" required class="textarea w-full textarea-bordered h-32">{{ $content->area_description }}</textarea>
                </div>
                <div class="grid grid-cols-2 items-center gap-x-3">
                    <div class="form_control">
                        <label for="news_motto" class="block mb-2">Header Bagian Informasi</label>
                        <input value="{{ $content->news_motto }}" type="text" id="news_motto" required maxlength="200" class="input input-bordered w-full">
                    </div>
                    <div class="form_control">
                        <label for="news_title" class="block mb-2">Title Bagian Informasi</label>
                        <input value="{{ $content->news_title }}" type="text" id="news_title" required maxlength="200" class="input input-bordered w-full">
                    </div>
                </div>
                <div class="grid grid-cols-2 items-center gap-x-3">
                    <div class="form_control">
                        <label for="video_motto" class="block mb-2">Header Bagian Video</label>
                        <input value="{{ $content->video_motto }}" type="text" id="video_motto" required maxlength="200" class="input input-bordered w-full">
                    </div>
                    <div class="form_control">
                        <label for="video_title" class="block mb-2">Title Bagian Video</label>
                        <input value="{{ $content->video_title }}" type="text" id="video_title" required maxlength="200" class="input input-bordered w-full">
                    </div>
                </div>
                <div class="grid grid-cols-2 items-center gap-x-3">
                    <div class="form_control">
                        <label for="form_contact_motto" class="block mb-2">Header Bagian Formulir Contact</label>
                        <input value="{{ $content->form_contact_motto }}" type="text" id="form_contact_motto" required maxlength="200" class="input input-bordered w-full">
                    </div>
                    <div class="form_control">
                        <label for="form_contact_title" class="block mb-2">Title Bagian Formulir Contact</label>
                        <input value="{{ $content->form_contact_title }}" type="text" id="form_contact_title" required maxlength="200" class="input input-bordered w-full">
                    </div>
                </div>
                <div class="form_control">
                    <label for="form_contact_description" class="block mb-2">Description Bagian Formulir Contact</label>
                    <textarea id="form_contact_description" required class="textarea w-full textarea-bordered h-32">{{ $content->form_contact_description }}</textarea>
                </div>
                <div class="form_control">
                    <label for="contact_title" class="block mb-2">Title Bagian Contact</label>
                    <input value="{{ $content->contact_title }}" type="text" id="contact_title" required maxlength="200" class="input input-bordered w-full">
                </div>
                <div class="form_control">
                    <label for="contact_description" class="block mb-2">Description Bagian Contact</label>
                    <textarea id="contact_description" required class="textarea w-full textarea-bordered h-32">{{ $content->contact_description }}</textarea>
                </div>
                <div class="form_control">
                    <label for="footer_description" class="block mb-2">Description Bagian Footer</label>
                    <textarea id="footer_description" required class="textarea w-full textarea-bordered h-32">{{ $content->footer_description }}</textarea>
                </div>
                <div class="text-right">
                    <button class="btn btn-wide bg-blue-900 hover:bg-blue-800 text-white" type="submit">Simpan</button>
                </div>
            </form>


            <h4 class="text-xl font-bold">Manajemen Profil HWLawyer</h4>
            <div>
                <label role="button" id="cover_image_label" for="cover_image_input" class="image_form w-full border hover:bg-gray-100 border-blue-900 relative overflow-hidden p-32 rounded-xl flex items-center justify-center">
                    <div id="image1_placeholder" class="text-center">
                        <iconify-icon class="text-4xl" icon="basil:image-outline"></iconify-icon>
                        <p>Foto Cover Bagian Profil</p>
                    </div>
                    <input type="file" id="cover_image_input" class="hidden" accept="image/png, image/jpeg">
                    @if ($about->cover_image)
                        <img id="cover_image_preview" src="/assets/images/{{ $about->cover_image }}" class="absolute image_preview w-full h-full object-cover object-center" alt="">
                    @else
                        <img id="cover_image_preview" src="/assets/images/1.png" class="absolute hidden image_preview w-full h-full object-cover object-center" alt="">
                    @endif
                </label>
                <span class="text-sm text-black/70">Klik untuk mengganti gambar (pastikan ukurannya kurang dari 1mb)</span>
            </div>
            <div class="grid grid-cols-2 mt-4 items-center gap-x-6">
                <div>
                    <label role="button" id="image1_label" for="image1_input" class="image_form w-full border hover:bg-gray-100 border-blue-900 relative overflow-hidden p-12 rounded-xl flex items-center justify-center">
                        <div id="image1_placeholder" class="text-center">
                            <iconify-icon class="text-4xl" icon="basil:image-outline"></iconify-icon>
                            <p>Foto HWLawyer 1</p>
                        </div>
                        <input type="file" id="image1_input" class="hidden" accept="image/png, image/jpeg">
                        @if ($about->image1)
                            <img id="image1_preview" src="/assets/images/{{ $about->image1 }}" class="absolute image_preview w-full h-full object-cover object-center" alt="">
                        @else
                            <img id="image1_preview" src="/assets/images/1.png" class="absolute hidden image_preview w-full h-full object-cover object-center" alt="">
                        @endif
                    </label>
                    <span class="text-sm text-black/70">Klik untuk mengganti gambar (pastikan ukurannya kurang dari 1mb)</span>
                </div>
                <div>
                    <label role="button" id="image2_label" for="image2_input" class="image_form w-full border hover:bg-gray-100 border-blue-900 relative overflow-hidden p-12 rounded-xl flex items-center justify-center">
                        <div id="image2_placeholder" class="text-center">
                            <iconify-icon class="text-4xl" icon="basil:image-outline"></iconify-icon>
                            <p>Foto HWLawyer 2</p>
                        </div>
                        <input type="file" id="image2_input" class="hidden" accept="image/png, image/jpeg">
                        @if ($about->image2)
                            <img id="image2_preview" src="/assets/images/{{ $about->image2 }}" class="absolute image_preview w-full h-full object-cover object-center" alt="">
                        @else
                            <img id="image2_preview" src="/assets/images/1.png" class="absolute hidden image_preview w-full h-full object-cover object-center" alt="">
                        @endif
                    </label>
                    <span class="text-sm text-black/70">Klik untuk mengganti gambar (pastikan ukurannya kurang dari 1mb)</span>
                </div>
            </div>
            <form id="form_about" class="space-y-4 mt-4">
                <div class="form_control">
                    <label for="about_title" class="block mb-2">Judul pada halaman profil</label>
                    <input value="{{ $about->about_title }}" type="text" id="about_title" required max="2150" min="1945" class="input input-bordered w-full">
                </div>
                <div class="form_control">
                    <label for="about_description" class="block mb-2">Deskripsi pada halaman profil</label>
                    <textarea id="about_description" required class="textarea w-full textarea-bordered h-32" placeholder="cth. Didirikan pada tahun 2021, HW Lawfirm membawa tradisi 17 tahun keahlian dalam dunia hukum...">{{ $about->about_description }}</textarea>
                </div>
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
                <div class="grid grid-cols-2 items-center gap-x-3">
                    <div class="form_control">
                        <label for="content_motto" class="block mb-2">Header konten profil</label>
                        <input value="{{ $about->content_motto }}" type="text" id="content_motto" placeholder="cth. 2002" required max="2150" min="1945" class="input input-bordered w-full">
                    </div>
                    <div class="form_control">
                        <label for="content_title" class="block mb-2">Judul konten profil</label>
                        <input value="{{ $about->content_title }}" type="text" id="content_title" placeholder="cth. 2002" required max="2150" min="1945" class="input input-bordered w-full">
                    </div>
                </div>
                <div class="form_control">
                    <label for="description_input" class="block mb-2">Deskripsi konten profil</label>
                    <textarea id="description_input" required class="textarea w-full textarea-bordered h-32" placeholder="cth. Didirikan pada tahun 2021, HW Lawfirm membawa tradisi 17 tahun keahlian dalam dunia hukum...">{{ $about->description }}</textarea>
                </div>
                <div class="text-right">
                    <button class="btn btn-wide bg-blue-900 hover:bg-blue-800 text-white" type="submit">Simpan</button>
                </div>
            </form>
            <form id="benefit_form" class="mt-8">
                <h4 class="text-xl font-bold">Benefit pada halaman profile</h4>
                <div class="grid md:grid-cols-3 grid-cols-1 gap-8 mt-4">
                    <div>
                        <label role="button" id="benefit_label" for="benefit_image" class="image_form w-full border hover:bg-gray-100 border-blue-900 relative overflow-hidden p-12 rounded-xl flex items-center justify-center">
                            <div id="benefit_image_placeholder" class="text-center">
                                <iconify-icon class="text-4xl" icon="basil:image-outline"></iconify-icon>
                                <p>Image Preview</p>
                            </div>
                            <input type="file" id="benefit_image" class="hidden" accept="image/png, image/jpeg">
                            <img id="benefit_image_preview" src="/assets/images/1.png" class="absolute hidden image_preview w-full h-full object-cover object-center" alt="">
                        </label>
                        <span class="text-sm text-black/70">Klik untuk mengganti gambar (pastikan ukurannya kurang dari 1mb)</span>
                    </div>
                    <div class="md:col-span-2">
                        <div class="form_control">
                            <label for="benefit_title" class="block mb-2">Judul</label>
                            <input value="" type="text" id="benefit_title" required maxlength="200" class="input input-bordered w-full">
                        </div>
                        <div class="form_control">
                            <label for="benefit_description" class="block mb-2">Deskripsi</label>
                            <textarea id="benefit_description" required class="textarea w-full textarea-bordered h-32"></textarea>
                        </div>
                    </div>
                </div>
                <div class="text-right mt-3">
                    <button class="btn btn-wide bg-blue-900 hover:bg-blue-800 text-white" type="submit">Simpan</button>
                </div>
            </form>
            @if (count($benefit) > 0)
                <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-4">
                    @foreach ($benefit as $item)
                        <div class="relative p-6 shadow-xl rounded-xl">
                            @if ($item->image)
                                <img src="/assets/images/{{ $item->image }}" alt="image benefit" class="w-16 h-16 object-center object-cover">
                            @else
                                <div class="w-16 h-16 bg-blue-900 text-white flex items-center justify-items-center justify-center">
                                    <iconify-icon icon="octicon:law-24" class="text-3xl"></iconify-icon>
                                </div>
                            @endif
                            <h3 class="text-xl font-semibold my-2">{{ $item->title }}</h3>
                            <p class="text-sm text-black/70">{{ $item->description }}</p>
                            <form action="/private/benefit/destroy" method="POST">
                                {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                                <input type="hidden" name="_method" value="DELETE">
                                <input value="{{ $item->id }}" name="id" type="hidden" id="benefit_title" required class="input input-bordered w-full">
                                <button type="submit" class="btn bg-red-500 text-white btn-sm mt-3">Hapus</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            @else
                <div role="alert" class="alert alert-error mt-8">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <span>Belum ada data benefit</span>
                </div>
            @endif
        </div>
    </div>
@endsection
