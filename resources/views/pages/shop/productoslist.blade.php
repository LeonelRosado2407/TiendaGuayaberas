@extends('layouts.app')
 
@section('extra-css')
    
@endsection
@section('content')
<section class="pt-10">
  <div class="container mx-auto px-4">
    <div class="flex flex-wrap items-center gap-6 mb-16 px-4">
      <span class="font-semibold">Productos Disponibles :</span>
    </div>
    <div class="flex flex-wrap -m-4">
      <div class="w-full md:w-3/4 p-4 order-2 md:order-1">
        <div class="flex flex-wrap -m-4 pb-10">
          <div class="w-full lg:w-1/2 p-4">
            <div class="flex flex-wrap gap-4">
              <div class="group">
                <div class="relative overflow-hidden rounded-2xl" style="height:230px;width:220px;">
                  <a href="#">
                    <img class="rounded-2xl object-cover w-full h-full transform group-hover:scale-105 transition duration-200" src="shopky-assets/display-product/product1.png" alt="">
                  </a>
                </div>
              </div>
              <div class="py-2">
                <div class="flex items-center flex-wrap gap-1 mb-1">
                  <span class="text-gray-500 text-sm font-semibold">Nuevo modelo</span>
                </div>
                <h3 class="font-heading uppercase text-3xl ">Jacket Winter</h3>
                <h2 class="text-red-700 font-heading text-5xl">$500</h2>
                <h4 class="text-gray-500 text-lg font-semibold line-through mb-10">$600</h4>
                <a href="#" class="bg-gray-900 rounded-full hover:bg-gray-800 focus:ring-4 focus:ring-gray-200 text-white text-xs font-semibold px-4 h-8 inline-flex items-center transition duration-200">Add to cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
@section('extra-js')
    
@endsection