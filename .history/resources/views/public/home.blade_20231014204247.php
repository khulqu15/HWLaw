@extends('public')

@section('title', 'Home')

@section('content')

@include('public.components.navbar')

<div class="w-full h-[80vh] overflow-hidden bg-blue-900 relative">
  <div class="carousel w-full">
      <div id="slide1" class="carousel-item relative w-full">
        <div class="w-full h-[80vh] bg-blue-500 relative">
            <img src="/assets/images/1.jpg" class="w-full h-full object-cover" />
        </div>
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
          <a href="#slide4" class="btn btn-circle">❮</a>
          <a href="#slide2" class="btn btn-circle">❯</a>
        </div>
      </div>
      <div id="slide2" class="carousel-item relative w-full">
        <div class="w-full h-[80vh] bg-blue-500 relative">
            <img src="/assets/images/2.jpg" class="w-full h-full object-cover" />
        </div>
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
          <a href="#slide1" class="btn btn-circle">❮</a>
          <a href="#slide3" class="btn btn-circle">❯</a>
        </div>
      </div>
      <div id="slide3" class="carousel-item relative w-full">
        <div class="w-full h-[80vh] bg-blue-500 relative">
            <img src="/assets/images/3.jpg" class="w-full h-full object-cover" />
        </div>
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
          <a href="#slide2" class="btn btn-circle">❮</a>
          <a href="#slide4" class="btn btn-circle">❯</a>
        </div>
      </div>
      <div id="slide4" class="carousel-item relative w-full">
        <div class="w-full h-[80vh] bg-blue-500 relative">
            <img src="/assets/images/4.jpg" class="w-full h-full object-cover" />
        </div>
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
          <a href="#slide3" class="btn btn-circle">❮</a>
          <a href="#slide1" class="btn btn-circle">❯</a>
        </div>
      </div>
    </div>
    <div class="flex justify-center w-full py-2 gap-2">
        <a href="#item1" class="btn btn-xs">1</a>
        <a href="#item2" class="btn btn-xs">2</a>
        <a href="#item3" class="btn btn-xs">3</a>
        <a href="#item4" class="btn btn-xs">4</a>
    </div>
</div>

<div></div>

@endsection
