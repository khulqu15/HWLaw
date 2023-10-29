@extends('private')

@section('title', 'HWLawyer - Formulir Area Praktek')

@section('navbar')
    @if (!isset($practice)) Tambah Gallery
    @else Edit Gallery
    @endif
@endsection

@section('header')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script type="module" src="/assets/js/custom/navbar.js"></script>
@endsection

@section('content')
    <div class="w-full bg-white p-8 relative">
        <form id="practice_form" class="space-y-4">
            <a href="/private/galleries" class="btn btn-ghost border border-gray-300">Kembali</a>
            <div>
                <label role="button" id="image_label" for="image_input" class="image_form w-full border hover:bg-gray-100 border-blue-900 relative overflow-hidden p-4 h-72 rounded-xl flex items-center justify-center">
                    <div id="image_placeholder" class="text-center">
                        <iconify-icon class="text-4xl" icon="basil:image-outline"></iconify-icon>
                        <p>Foto HWLawyer 1</p>
                    </div>
                    <input type="file" id="image_input" class="hidden" accept="image/png, image/jpeg">
                    @if (isset($practice))
                        <img id="image_preview" src="/assets/images/{{ $practice->image }}" class="absolute image_preview w-full h-full object-image object-center" alt="">
                    @else
                        <img id="image_preview" src="/assets/images/1.png" class="absolute hidden image_preview w-full h-full object-image object-center" alt="">
                    @endif
                </label>
                <span class="text-sm text-black/70">Klik untuk mengganti gambar</span>
            </div>
            <input id="id_input" value="{{ !isset($practice) ? '' : $practice->id }}" type="hidden">
            <div class="form-control">
                <label for="name_input" class="block mb-2">Nama Kegiatan</label>
                <input id="name_input" value="{{ !isset($practice) ? '' : $practice->name }}" type="text" required maxlength="42" class="input input-bordered w-full" placeholder="cth. Informasi Update Terkini Di Kota Tulungagung">
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

document.getElementById('image_input').addEventListener('change', function(event) {
    if (event.target.files && event.target.files[0]) {
        let reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('image_preview').src = e.target.result;
            document.getElementById('image_preview').classList.remove('hidden');
        }
        reader.readAsDataURL(event.target.files[0]);
    }
})

document.getElementById('practice_form').addEventListener('submit', function(e) {
    e.preventDefault()
    const title_input = document.getElementById('title_input').value
    const image_input = document.getElementById('image_input')
    const description_input = quill.root.innerHTML
    const id = document.getElementById('id_input').value
    let endpoint = ''
    if(id == '') endpoint = '/private/practice/store'
    else endpoint = '/private/practice/update/'+id


    const formData = new FormData()
    formData.append('title', title_input)
    formData.append('image', image_input.files[0])
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

