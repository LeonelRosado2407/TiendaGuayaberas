@extends('layouts.app')
 
@section('extra-css')
    
@endsection
@section('content')
<section class="py-32 bg-black overflow-hidden">
  <div class="container mx-auto px-4">
    <div class="flex flex-wrap -m-6">
      <div class="w-full md:w-1/2 p-6">
        <div class="md:max-w-lg">
          <h2 class="mb-5 font-heading font-bold text-6xl sm:text-7xl text-white">Compra los productos de tu carrito</h2>
          <p class="text-gray-400 text-lg">Las prendas de tu carrito se ve muy elegantes y extraordinarias vamos compremos!!!!!</p>
        </div>
      </div>
      <div class="w-full md:w-1/2 p-6">
        <div class="flex flex-wrap border border-gray-800 divide-y divide-y divide-gray-800">
          <div class="w-full">
            <div class="p-6">
              <div class="flex flex-wrap items-end justify-between -m-2">
                <div class="w-full p-2 sm:flex-1">
                  <img class="h-auto max-w-xs" src="/docs/images/examples/image-1@2x.jpg" alt="image description">
                  <h3 class="mb-1 font-heading font-bold text-lg text-white">Team Leader</h3>
                  <p class="text-gray-500 text-base">Toledo, USA</p>
                </div>
                <div class="w-full sm:w-auto p-2">
                  <button class="group relative font-heading py-2 px-3.5 font-medium text-base text-gray-50 border border-gray-50 hover:border-gray-400 overflow-hidden rounded">
                    <div class="absolute top-0 left-0 transform -translate-y-full group-hover:-translate-y-0 h-full w-full transition ease-in-out duration-500 bg-white"></div>
                    <p class="relative z-10 group-hover:text-black">Apply Now</p>
                  </button>
                </div>
              </div>
            </div>
          </div>
          
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