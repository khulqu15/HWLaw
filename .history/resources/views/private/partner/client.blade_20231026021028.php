@extends('private')

@section('title', 'HW Lawyer - Data Client')

@section('navbar', 'Data Client')

@section('content')
<div class="w-full relative p-8 bg-white">
    <div class="space-y-3">
        <div>
            @if ($count_clients > 0)
            <div class="grid lg:grid-cols-1 gap-3 grid-cols-1">
                @foreach ($clients as $item)
                <div class="collapse collapse-plus bg-base-200">
                    <input type="radio" name="my-accordion-3" checked="checked" />
                    <div class="collapse-title font-medium">
                        <h2 class="text-lg">{{ $item->name }}</h2>
                        <span class="text-sm font-normal">{{ $item->phone }} {{ $item->phone != null && $item->email != null ? '|' : '' }} {{ $item->email }}</span>
                    </div>
                    <div class="collapse-content p-4">
                        <div class="bg-white rounded-lg p-6">
                            <h4 class="text-lg font-semibold">{{ $item->subject }}</h4>
                        </div>
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
