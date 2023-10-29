@extends('private')

@section('title', 'HWLawyer - Formulir Area Praktek')

@section('navbar')
    @if (!isset($practice)) Tambah Area Praktek
    @else Edit Area Praktek
    @endif
@endsection

@section('header')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script type="module" src="/assets/js/custom/navbar.js"></script>
@endsection

@section('content')
    <div class="w-full bg-white p-8 relative">
        <form id="practice_form" class="space-y-4">
            <a href="/private/practices" class="btn btn-ghost border border-gray-300">Kembali</a>
            <div>
                <label role="button" id="cover_label" for="cover_input" class="image_form w-full border hover:bg-gray-100 border-blue-900 relative overflow-hidden p-4 h-72 rounded-xl flex items-center justify-center">
                    <div id="cover_placeholder" class="text-center">
                        <iconify-icon class="text-4xl" icon="basil:image-outline"></iconify-icon>
                        <p>Foto HWLawyer 1</p>
                    </div>
                    <input type="file" id="cover_input" class="hidden" accept="image/png, image/jpeg">
                    @if (isset($practice))
                        <img id="cover_preview" src="/assets/images/{{ $practice->cover }}" class="absolute image_preview w-full h-full object-cover object-center" alt="">
                    @else
                        <img id="cover_preview" src="/assets/images/1.png" class="absolute hidden image_preview w-full h-full object-cover object-center" alt="">
                    @endif
                </label>
                <span class="text-sm text-black/70">Klik untuk mengganti gambar</span>
            </div>
            <input id="id_input" value="{{ !isset($practice) ? '' : $practice->id }}" type="hidden">
            <div class="form-control">
                <label for="title_input" class="block mb-2">Judul Informasi</label>
                <input id="title_input" value="{{ !isset($practice) ? '' : $practice->title }}" type="text" required maxlength="42" class="input input-bordered w-full" placeholder="cth. Informasi Update Terkini Di Kota Tulungagung">
            </div>
            <div class="form_control">
                <label for="description_" class="block mb-2">Deskripsi Profil HWLawyer</label>
                <textarea id="description_" required class="textarea w-full textarea-bordered h-32" placeholder="cth. Didirikan pada tahun 2021, HW Lawfirm membawa tradisi 17 tahun keahlian dalam dunia hukum...">{{ !isset($gallery) ? '' : $gallery->name }}</textarea>
            </div>
            <div>
                <label for="description_input" class="block mb-2">Isi Informasi</label>
                <div id="quil_editor">{!! !isset($practice) ? '' : $practice->text !!}</div>
            </div>
            <div class="w-full mt-3 flex justify-end justify-items-end items-center gap-x-3">
                <a href="/private/practices" class="btn btn-ghost border border-gray-300">Batal</a>
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

function showToast(type, msg) {
    const toast = document.querySelector('.toast');
    const successToast = toast.querySelector('.alert-success');
    const errorToast = toast.querySelector('.alert-danger');
    if(type == 'success') {
        successToast.querySelector('span').textContent = msg;
        successToast.classList.remove('hidden');
        setTimeout(() => {
            successToast.classList.add('hidden');
        }, 3000);
    } else if(type == 'error') {
        errorToast.querySelector('span').textContent = msg;
        errorToast.classList.remove('hidden');
        setTimeout(() => {
            errorToast.classList.add('hidden');
        }, 3000);
    }
}

document.getElementById('cover_input').addEventListener('change', function(event) {
    if (event.target.files && event.target.files[0]) {
        let reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('cover_preview').src = e.target.result;
            document.getElementById('cover_preview').classList.remove('hidden');
        }
        reader.readAsDataURL(event.target.files[0]);
    }
})

document.getElementById('practice_form').addEventListener('submit', function(e) {
    e.preventDefault()
    const title_input = document.getElementById('title_input').value
    const cover_input = document.getElementById('cover_input')
    const description_ = document.getElementById('description_input').value
    const description_input = quill.root.innerHTML
    const id = document.getElementById('id_input').value
    let endpoint = ''
    if(id == '') endpoint = '/private/practice/store'
    else endpoint = '/private/practice/update/'+id


    const formData = new FormData()
    formData.append('title', title_input)
    formData.append('cover', cover_input.files[0])
    formData.append('description', description_)
    formData.append('text', description_input)

    fetch(endpoint, {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if(data.status == 'success') {
            showToast('success', data.message)
            image1Input.value = ''
            image2Input.value = ''
            setTimeout(() => {
                window.location = '/private/links'
            }, 2000);
        }
        else showToast('error', data.message)
    }).catch(error => {
        showToast('error', error)
    })
})
</script>
@endsection

