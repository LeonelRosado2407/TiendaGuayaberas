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
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewbox="0 0 16 17" fill="none">
                    <g clip-path="url(#clip0_249_3699)">
                      <path d="M7.99999 12.6733L3.29799 15.3053L4.34799 10.02L0.391327 6.36131L5.74266 5.72665L7.99999 0.833313L10.2573 5.72665L15.6087 6.36131L11.652 10.02L12.702 15.3053L7.99999 12.6733Z" fill="#FFA800"></path>
                    </g>
                    <defs><clippath><rect width="16" height="16" fill="white" transform="translate(0 0.5)"></rect></clippath></defs>
                  </svg>
                  <span class="text-gray-500 text-sm font-semibold">4.9</span>
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