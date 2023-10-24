@extends('private')

@section('title', 'HWLawyer - Add New Update Information')

@section('navbar', 'Add New Information')

@section('header')
    <script type="module" src="/assets/js/custom/navbar.js"></script>
@endsection

@section('content')
    <div class="w-full bg-white p-8 relative">
        <div>
            <label role="button" id="image1_label" for="image1_input" class="image_form w-full border hover:bg-gray-100 border-blue-900 relative overflow-hidden p-4 rounded-xl flex items-center justify-center">
                <div id="image1_placeholder" class="text-center">
                    <iconify-icon class="text-4xl" icon="basil:image-outline"></iconify-icon>
                    <p>Foto HWLawyer 1</p>
                </div>
                <input type="file" id="image1_input" class="hidden" accept="image/png, image/jpeg">
            </label>
            <span class="text-sm text-black/70">Klik untuk mengganti gambar</span>
        </div>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus architecto laboriosam in eum voluptatem quae voluptates omnis, dolore, ipsa nemo optio cumque tempore incidunt dolorum accusantium at officiis cum iure. Esse, quas amet repudiandae quisquam vero quasi temporibus vel debitis, quis necessitatibus ratione, sed cupiditate explicabo error tenetur ad est beatae accusantium quos cum magni. Aliquam iste harum repellendus vitae dolorum sed architecto, fugit quia, et nostrum facilis aperiam laboriosam ipsam quod maiores sapiente omnis. Optio nesciunt quam in mollitia nostrum illo necessitatibus, aspernatur delectus id suscipit deleniti enim molestiae sequi culpa quidem. Sequi ipsum aperiam blanditiis libero soluta necessitatibus.
    </div>
@endsection

