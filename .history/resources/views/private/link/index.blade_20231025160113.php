@extends('private')

@section('title', 'HW Lawyer - Admin Kontak')

@section('navbar', 'Kontak Link')

@section('footer_script')
<script type="module" src="/assets/js/custom/news.js"></script>
@endsection

@section('content')
<div class="w-full relative p-8 bg-white">
    <div class="space-y-3">
        <div>
            <a href="/private/news/category/add" class="btn bg-blue-900 hover:bg-blue-700 text-white">Tambahkan baru</a>
        </div>
        <div>
            <div class="overflow-x-auto">
                @if ($count_links > 0)
                <table class="table table-zebra">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Link</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($links as $link)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $link->name }}</td>
                            <td>{{ $link->category }}</td>
                            <td>{{ $link->link }}</td>
                            <td class="flex items-center gap-x-3">
                                <a class="btn btn-success btn-sm" href="/private/link/edit/{{$link->id}}">Edit</a>
                                <form action="/private/link/delete/{{$link->id}}" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button onclick="return confirm('Yakin Hapus Kategori ?')" class="btn btn-error bg-red-400 btn-sm" type="submit">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div id="pagination" class="flex space-x-3 justify-end mt-6">
                    <div class="join space-x-3">
                        {{ $links->links() }}
                    </div>
                </div>
                @else
                <div class="alert alert-error">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <span>Kontak Link Masih Kosong !</span>
                </div>
                @endif
              </div>
        </div>
    </div>
</div>
@endsection
