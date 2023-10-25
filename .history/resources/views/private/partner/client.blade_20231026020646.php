@extends('private')

@section('title', 'HW Lawyer - Data Client')

@section('navbar', 'Data Client')

@section('content')
<div class="w-full relative p-8 bg-white">
    <div class="space-y-3">
        <div>
            <a href="/private/practice/add" class="btn bg-blue-900 hover:bg-blue-700 text-white">Tambahkan baru</a>
        </div>
        <div>
            @if ($count_clients > 0)
            <div class="grid lg:grid-cols-2 gap-3 grid-cols-1">
                @foreach ($clients as $item)
                <div class="card card-compact bg-base-100 shadow-xl">
                    <div class="card-body">
                        <div class="justify-between items-center flex mt-3">
                            <a class="btn btn-success btn-sm" href="/private/practice/edit/{{$item->id}}">Edit</a>
                            <form action="/private/practice/delete/{{$item->id}}" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <button onclick="return confirm('Yakin Hapus Kategori ?')" class="btn btn-error bg-red-400 btn-sm" type="submit">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="collapse collapse-plus bg-base-200">
                    <input type="radio" name="my-accordion-3" checked="checked" />
                    <div class="collapse-title text-xl font-medium">
                        <h2 class="text-lg">{{ $item->name }}</h2>
                        <span>{{ $item->phone }} {{ $item->phone != null && $item->email != null ? '|' : '' }} {{ $item->email }}</span>
                    </div>
                    <div class="collapse-content">
                        <p>hello</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div id="pagination" class="flex space-x-3 justify-end mt-6">
                <div class="join space-x-3">
                    {{ $clients->links() }}
                </div>
            </div>
            @else
            <div class="alert alert-error">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <span>Data Area Praktek Masih Kosong !</span>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
