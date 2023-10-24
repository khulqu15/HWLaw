@extends('private')

@section('title', 'HW Lawyer - Admin Update Informasi')

@section('navbar', 'Update Informasi')

@section('footer_script')
<script type="module" src="/assets/js/custom/news.js"></script>
@endsection

@section('content')
<div class="w-full relative p-8 bg-white">
    <div class="space-y-3">
        <div class="flex justify-between items-center gap-x-3">
            <div class="tabs tabs-boxed">
                <a href="/private/news" class="tab tab-active">Informasi</a>
                <a href="/private/news/categories" class="tab">Kategori</a>
            </div>
            <div>
                <a href="/private/news/add" class="btn bg-blue-900 hover:bg-blue-700 text-white">Tambahkan baru</a>
            </div>
        </div>
        <form class="flex items-center gap-x-3 justify-between">
            <div class="form_control grow w-full">
                <input id="name_input" type="text" class="input text-sm w-full input-bordered" placeholder="Cari Berdasarkan Judul">
            </div>
            <div class="form_control grow w-full">
                <select id="category_input" class="select select-bordered w-full">
                    <option value="">Semua Kategori</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn bg-ghost text-black/70">
                <iconify-icon icon="fa:sort"></iconify-icon>
            </button>
        </form>
        <div>
            @if ($count_news > 0)
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1">
                @foreach ($news as $item)
                <div class="card card-compact bg-base-100 shadow-xl">
                    <figure><img src="/assets/images/{{$item->cover}}" class="w-full h-48 object-cover object-center" alt="Album"/></figure>
                    <div class="card-body">
                        <h2 class="card-title text-lg">{{ $item->title }}</h2>
                        <div class="flex justify-start items-center gap-x-3">
                            <div class="flex items-center gap-x-1">
                                <iconify-icon class="text-xl text-blue-900" icon="solar:calendar-date-bold"></iconify-icon>
                                <p class="text-sm">{{ $item->date }}</p>
                            </div>
                            <div class="flex items-center gap-x-1">
                                <iconify-icon class="text-xl text-blue-900" icon="heroicons:map-pin-20-solid"></iconify-icon>
                                <p class="text-sm">{{ $item->location }}</p>
                            </div>
                        </div>
                        <div>
                            {!! $item->text !!}
                        </div>
                        <div class="justify-between items-center flex mt-3">
                            <a class="btn btn-success btn-sm" href="/private/news/edit/{{$item->id}}">Edit</a>
                            <form action="/private/news/delete/{{$item->id}}" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <button onclick="return confirm('Yakin Hapus Kategori ?')" class="btn btn-error bg-red-400 btn-sm" type="submit">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div id="pagination" class="flex space-x-3 justify-end mt-6">
                <div class="join space-x-3">
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
</div>
@endsection
