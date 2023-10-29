@extends('public')

@section('title', 'Update News - HW Lawfirm')

@section('content')

@include('public.components.navbar')

<div class="h-[80vh] flex items-center pt-20 justify-center w-full relative bg-blue-900">
    <img src="/assets/images/3.jpg" alt="HW Lawyer" class="absolute left-0 top-0 w-full h-full object-cover object-center opacity-20">
    <div class="text-white text-center relative">
        <h1 class="lg:text-4xl md:text-3xl font-semibold text-2xl uppercase">UPDATE {{ request('category') ? request('category') : 'INFORMATION' }}</h1>
        <div class="flex items-center justify-center gap-x-5 mt-6">
            <span>HOME</span>
            <span><iconify-icon class="text-2xl text-yellow-400" icon="icon-park-outline:right"></iconify-icon></span>
            <span class="uppercase">UPDATE {{ request('category') ? request('category') : 'INFORMATION' }}</span>
        </div>
    </div>
</div>

<div class="bg-gray-100">
    <div class="w-full pb-20 container relative mx-auto md:px-12 px-4">
        <form class="flex relative -top-6 rounded-xl gap-x-3 items-center mb-8 p-6 bg-white shadow-2xl">
            <div class="grow w-full form-control">
                <div class="input-group">
                    <input value="{{ request('title') }}" type="text" name="title" placeholder="Cari Berdasarkan Nama Kegiatan" class="input input-bordered w-full" />
                    <button class="btn bg-primary" type="submit">
                        <iconify-icon icon="iconamoon:search-bold"></iconify-icon>
                    </button>
                </div>
            </div>
            <div>
                <input type="hidden" value="{{ request('sort') == 'ASC' ? 'DESC' : 'ASC' }}" name="sort">
                <button type="submit" class="w-12 btn border rounded-lg p-1">
                    <iconify-icon icon="basil:sort-solid" class="text-black/60 text-xl"></iconify-icon>
                </button>
            </div>
        </form>
        @if ($count_news > 0)
        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 grid-cols-1 gap-6 relative">
            @foreach ($news as $item)
                <label for="show_data" class="card card-compact bg-base-100 shadow-xl"
                    data-name="{{ $item->name }}"
                    data-date="{{ date('d M Y', strtotime($item->created_at)) }}"
                    data-description="{{ $item->description }}"
                    data-image="/assets/images/{{ $item->image }}">
                    <figure><img src="/assets/images/{{ $item->image }}" class="w-full h-64 object-cover object-center" alt="Album"/></figure>
                    <div class="card-body">
                        <h2 class="card-title text-lg break-words">{{ strlen($item->name) > 50 ? substr($item->name, 0, 50) . '...' : $item->name }}</h2>
                        <div class="flex justify-start items-center gap-x-3">
                            <div class="flex items-center gap-x-1">
                                <iconify-icon class="text-xl text-blue-900" icon="solar:calendar-date-bold"></iconify-icon>
                                <p class="text-sm break-words">{{ date('d M Y', strtotime($item->created_at)) }}</p>
                            </div>
                        </div>
                    </div>
                </label>
            @endforeach
            <input type="checkbox" id="show_data" class="modal-toggle" />
            <div class="modal">
                <div class="modal-box relative max-w-5xl">
                    <div class="modal-action absolute right-4 top-0">
                        <label for="show_data" class="btn">X</label>
                    </div>
                    <h3 class="font-bold text-lg" id="itemName">Hello!</h3>
                    <div class="flex items-center gap-x-1 mb-3">
                        <iconify-icon class="text-xl text-blue-900" icon="solar:calendar-date-bold"></iconify-icon>
                        <p class="text-sm break-words" id="itemDate"></p>
                    </div>
                    <img src="/assets/images/1.png" class="w-full object-cover object-center" alt="Album"/>
                    <p class="py-4" id="itemDescription">This modal works with a hidden checkbox!</p>
                </div>
            </div>
        </div>
        <div class="flex justify-end">
            <div class="btn-group">
                {{ $news->links() }}
            </div>
        </div>
        @else
        <div class="alert alert-error">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            <span>Informasi Masih Kosong !</span>
        </div>
        @endif
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.card-compact');
    cards.forEach(card => {
        card.addEventListener('click', function() {
            const modalTitle = document.getElementById('itemName');
            const modalDate = document.getElementById('itemDate');
            const modalDescription = document.getElementById('itemDescription');
            const modalImage = modalDescription.nextElementSibling;

            modalTitle.textContent = card.getAttribute('data-name');
            modalDate.textContent = card.getAttribute('data-date');
            modalDescription.textContent = card.getAttribute('data-description');
            modalImage.src = card.getAttribute('data-image');
        });
    });
});

</script>

@include('public.components.footer')

@endsection
