@extends('layouts.app')
 
@section('extra-css')
    
@endsection
@section('content')
<section class="overflow-hidden" x-data="{ mobileNavOpen: false }">
  <div class="bg-black py-1 px-2">
    <marquee class="text-white " behavior="scroll" direction="left">Las mejoras guayaberas del estado de Yucatán</marquee>
  </div>
  <div class="flex flex-wrap p-10 -m-4">
    <div class="w-full lg:w-5/12 p-4">
      <div class="py-18">
        <div class="flex items-center flex-wrap gap-6 mb-4">
          <div class="w-16 h-px bg-gray-900"></div>
          <a href="#">
            <img class="h-6" src="" alt="">
          </a>
          <a href="#">
            <img class="h-6" src="" alt="">
          </a>
          <a href="#">
            <img class="h-6" src="" alt="">
          </a>
        </div>
        <h1 class="font-heading uppercase text-8xl max-w-lg mb-6">Guayabera yucatecas</h1>
        <p class="text-gray-500 text-lg font-semibold mb-12 max-w-lg">Bienvenido a la tienda oficial de Guaraberas VAZCHA, compra elegancias y frescura</p>
        <div class="flex flex-wrap gap-4"><a href="#" class="bg-gray-900 rounded-full hover:bg-gray-800 focus:ring-4 focus:ring-gray-200 text-white text-sm font-semibold px-8 h-12 inline-flex items-center transition duration-200">Comprar ahora</a><a href="#" class="bg-white border border-gray-200 rounded-full hover:bg-gray-50 focus:ring-4 focus:ring-gray-200 text-sm font-semibold px-8 h-12 inline-flex items-center transition duration-200">Ver mas</a></div>
      </div>
    </div>
    <div class="w-full lg:w-7/12 p-4">
      <div class="flex flex-wrap -m-4">
        <div class="w-full sm:w-8/12 p-4">
          <a href="#" class="group">
            <div class="relative overflow-hidden rounded-2xl" style="height:550px;">
              <img class="rounded-2xl object-cover w-full h-full transform group-hover:scale-105 transition duration-200" src="img/nel.jpg" alt="">
              <img class="absolute left-1/2 top-1/2 transform -translate-y-1/2 -translate-x-1/2" src="shopky-assets/headers/shop-now.svg" alt="">
            </div>
          </a>
        </div>
        <div class="w-1/2 sm:w-2/12 p-4">
          <a href="#" class="group">
            <div class="relative overflow-hidden rounded-2xl" style="height:550px;">
              <img class="rounded-2xl object-cover w-full h-full transform group-hover:scale-105 transition duration-200" src="img/g.jpg" alt="">
              <div class="absolute left-1/2 bottom-32 transform -translate-x-1/2">
                <h2 class="font-heading text-5xl uppercase text-white text-center transform -rotate-90 whitespace-nowrap">#Trending 2023</h2>
              </div>
            </div>
          </a>
        </div>
        <div class="w-1/2 sm:w-2/12 p-4">
          <a href="#" class="group">
            <div class="relative overflow-hidden rounded-2xl" style="height:550px;">
              <img class="rounded-2xl object-cover w-full h-full transform group-hover:scale-105 transition duration-200" src="shopky-assets/headers/woman-picture3.png" alt="">
              <div class="absolute left-1/2 bottom-32 transform -translate-x-1/2">
                <h2 class="font-heading text-5xl uppercase text-white text-center transform -rotate-90 whitespace-nowrap">#Trending 2023</h2>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="flex flex-wrap items-center p-10 -m-4">

  </div>
</section>
@endsection

@section('extra-js')
    
@endsection