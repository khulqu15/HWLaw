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
                <a href="/private/news/add" class="btn bg-blue-900 hover:bg-blue-700 text-white">Tambahkan baru</a>
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
                <table class="table table-zebra">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Job</th>
                            <th>Favorite Color</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>Cy Ganderton</td>
                            <td>Quality Control Specialist</td>
                            <td>Blue</td>
                        </tr>
                    </tbody>
                </table>
              </div>
        </div>
    </div>
</div>
@endsection
