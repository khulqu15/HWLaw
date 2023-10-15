@extends('public')

@section('title', 'Home')

@section('content')

@include('public.components.navbar')

<div class="w-full h-[80vh] bg-blue-900 relative">
  <div class="carousel w-full">
      <div id="slide1" class="carousel-item relative w-full">
        <div class="w-full h-[80vh] bg-blue-500 relative">
            <img src="/assets/images/1.jpg" class="w-full h-full object-cover" />
            <div class="absolute lg:w-1/2 text-white md:w-3/4 w-full p-8 bg-blue-900 bottom-0 left-0 rounded-tr-xl">
                <h2 class="text-2xl">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, excepturi.</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam vel voluptatem nesciunt maiores praesentium iusto quam nemo corporis, ipsa consequatur nobis ex placeat tempora quia delectus molestias impedit eos, est quis deleniti provident. Quis!</p>
            </div>
        </div>
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
          <a href="#slide4" class="btn btn-circle">❮</a>
          <a href="#slide2" class="btn btn-circle">❯</a>
        </div>
      </div>
      <div id="slide2" class="carousel-item relative w-full">
        <div class="w-full h-[80vh] bg-blue-500 relative">
            <img src="/assets/images/2.jpg" class="w-full h-full object-cover" />
            <div class="absolute lg:w-1/2 md:w-3/4 w-full p-4 bg-blue-900 bottom-0 left-0 rounded-tr-xl"></div>
        </div>
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
          <a href="#slide1" class="btn btn-circle">❮</a>
          <a href="#slide3" class="btn btn-circle">❯</a>
        </div>
      </div>
      <div id="slide3" class="carousel-item relative w-full">
        <div class="w-full h-[80vh] bg-blue-500 relative">
            <img src="/assets/images/3.jpg" class="w-full h-full object-cover" />
            <div class="absolute lg:w-1/2 md:w-3/4 w-full p-4 bg-blue-900 bottom-0 left-0 rounded-tr-xl"></div>
        </div>
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
          <a href="#slide2" class="btn btn-circle">❮</a>
          <a href="#slide4" class="btn btn-circle">❯</a>
        </div>
      </div>
      <div id="slide4" class="carousel-item relative w-full">
        <div class="w-full h-[80vh] bg-blue-500 relative">
            <img src="/assets/images/4.jpg" class="w-full h-full object-cover" />
            <div class="absolute lg:w-1/2 md:w-3/4 w-full p-4 bg-blue-900 bottom-0 left-0 rounded-tr-xl"></div>
        </div>
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
          <a href="#slide3" class="btn btn-circle">❮</a>
          <a href="#slide1" class="btn btn-circle">❯</a>
        </div>
      </div>
    </div>
    <div class="flex justify-end w-full py-2 gap-2 relative -top-[60px] right-8">
        <a href="#slide1" class="btn btn-xs">1</a>
        <a href="#slide2" class="btn btn-xs">2</a>
        <a href="#slide3" class="btn btn-xs">3</a>
        <a href="#slide4" class="btn btn-xs">4</a>
    </div>
</div>

<div></div>

@endsection
