@extends('private')

@section('title', 'HWLawyer - Add New Update Information')

@section('navbar', 'Add New Information')

@section('header')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script type="module" src="/assets/js/custom/navbar.js"></script>
@endsection

@section('content')
    <div class="w-full bg-white p-8 relative">
        <form id="news_form" class="space-y-4">
            <a href="/private/news" class="btn btn-ghost border border-gray-300">Kembali</a>
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
                    <label for="date_input" class="block mb-2">Keterangan Waktu</label>
                    <input type="date" required class="input input-bordered w-full" placeholder="cth. Informasi Update Terkini Di Kota Tulungagung">
                </div>
                <div class="form-control">
                    <label for="location_input" class="block mb-2">Keterangan Tempat</label>
                    <input type="text" required maxlength="150" class="input input-bordered w-full" placeholder="cth. Sukolilo, Surabaya">
                </div>
                <div class="form-control">
                    <label for="category_input" class="block mb-2">Kategori Informasi</label>
                    <select required class="select select-bordered w-full">
                        <option value="">Pilih kategori</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div>
                <label for="description_input" class="block mb-2">Isi Informasi</label>
                <div id="quil_editor"></div>
            </div>
            <div class="w-full mt-3 flex justify-end justify-items-end items-center gap-x-3">
                <a href="/private/news" class="btn btn-ghost border border-gray-300">Batal</a>
                <button class="btn bg-blue-900 hover:bg-blue-800 btn-wide text-white" type="sumbit">Simpan</button>
            </div>
        </form>
    </div>
@endsection

@section('footer_script')
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    var toolbarOptions = [
        ['bold', 'italic', 'underline'],
        [{'header': 1}, {'header': 2}],
        [{'list': 'ordered'}, {'list': 'bullet'}],
        [{'script': 'sub'}, {'script': 'super'}],
        [{'indent': '-1'}, {'indent': '+1'}],
        [{'direction': 'rtl'}],

        [{'size': ['small', false, 'large', 'huge']}],
        [{'header': [1, 2, 3, 4, 5, 6, false]}],

        [{'color': []}, {'background': []}],
        [{'font': []}],
        [{'align': []}],

        ['link', 'image', 'video'],
    ];

    var quill = new Quill('#quil_editor', {
        theme: 'snow',
        modules: {
            toolbar: toolbarOptions
        }
    });
</script>
@endsection

