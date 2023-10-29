@extends('private')

@section('title', 'HW Lawyer - Admin Area Praktek')

@section('navbar', 'Data Gallery')

@section('footer_script')
<script type="module" src="/assets/js/custom/practice.js"></script>
@endsection

@section('content')
<div class="w-full relative p-8 bg-white">
    <div class="space-y-3">
        <div>
            <a href="/private/gallery/add" class="btn bg-blue-900 hover:bg-blue-700 text-white">Tambahkan baru</a>
        </div>
        <div>
            @if ($count_galleries > 0)
            <div class="grid lg:grid-cols-2 gap-3 grid-cols-1">
                @foreach ($galleries as $item)
                <div class="card card-compact bg-base-100 shadow-xl">
                    <figure><img src="/assets/images/{{$item->image}}" class="w-full h-48 object-cover object-center" alt="Album"/></figure>
                    <div class="card-body">
                        <h2 class="card-title text-lg">{{ $item->name }}</h2>
                        <div class="justify-between items-center flex mt-3">
                            <a class="btn btn-success btn-sm" href="/private/practice/edit/{{$item->id}}">Edit</a>
                            <form action="/private/practice/delete/{{$item->id}}" method="POST">
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
                    {{ $galleries->links() }}
                </div>
            </div>
            @else
            <div class="alert alert-error">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <span>Data Gallery Masih Kosong !</span>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
