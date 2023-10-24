@extends('private')

@section('title', 'HW Lawyer - Kategori Informasi')

@section('navbar', 'Kategori Informasi')

@section('content')
<div class="w-full relative p-8 bg-white">
    <div class="space-y-3">
        <div class="flex justify-between items-center gap-x-3">
            <div class="tabs tabs-boxed">
                <a href="/private/news" class="tab">Informasi</a>
                <a href="/private/news/categories" class="tab tab-active">Kategori</a>
            </div>
            <div>
                <a href="/private/news/category/add" class="btn bg-blue-900 hover:bg-blue-700 text-white">Tambahkan baru</a>
            </div>
        </div>
        <div class="flex items-center gap-x-3 justify-between">
            <div class="form_control grow w-full">
                <input id="name_input" type="text" class="input text-sm w-full input-bordered" placeholder="Cari Berdasarkan Nama">
            </div>
            <button class="btn bg-ghost text-black/70">
                <iconify-icon icon="fa:sort"></iconify-icon>
            </button>
        </div>
        <div>
            <div class="overflow-x-auto">
                @if ($count_categories > 0)
                <table class="table table-zebra">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Kategori</th>
                            <th>Jumlah Data</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $category->name }}</td>
                            <td>{{ count($category->post) }}</td>
                            <td>
                                <a href="/private/news/category/edit/{{$category->id}}">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="flex justify-end mt-6">
                    <div class="join">
                        <button class="join-item btn"><</button>
                        <button class="join-item btn btn-active">1</button>
                        <button class="join-item btn">2</button>
                        <button class="join-item btn">></button>
                    </div>
                </div>
                @else
                <div class="alert alert-error">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <span>Kategori Masih Kosong !</span>
                  </div>
                @endif
              </div>
        </div>
    </div>
</div>
@endsection
