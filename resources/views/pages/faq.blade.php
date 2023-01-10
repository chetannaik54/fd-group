@extends('pages.template.layout')

@section('content')

<section class="relative pt-24 pb-0 bg-blueGray-50 overflow-hidden">
  <img class="absolute bottom-0 left-1/2 transform -translate-x-1/2" src="flaro-assets/images/faqs/gradient.svg" alt="">
  <div class="relative z-10 container px-4 mx-auto">
    <div class="mx-auto">

        <div class="grid grid-cols-2 gap-4">
            <div>
                <p class="mb-7 text-sm text-indigo-600 text-center font-semibold uppercase tracking-px">Have any questions?</p>
                <h2 class="mb-16 text-6xl md:text-8xl xl:text-5xl text-center font-bold font-heading tracking-px-n leading-none">Frequently Asked <br> Questions</h2>

                <div class="relative text-gray-600 mt-8 lg:mr-16">
                  <input x-ref="searchField" x-model="search" x-on:keydown.window.prevent.slash="$refs.searchField.focus()" type="search" name="serch" placeholder="Search" class="bg-white w-full h-10 px-5 rounded-full text-sm focus:outline-none">
                  <button type="submit" class="focus:outline-none absolute right-0 top-0 mt-3 mr-4">
                    <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                      <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                    </svg>
                  </button>
                </div>
              
                <div class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                    <div class="flex flex-col pb-3">
                        <a class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Business Processes</a>
                    </div>
                    <div class="flex flex-col py-3">
                        <a class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Products</a>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Staffing solutions</dt>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Applications</dt>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Platform And Infrastructure</dt>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Learning Academy</dt>
                    </div>
                  </div>

            </div>


            {{-- <div class="item px-6 py-6" x-data="{isOpen : false}">
                <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                    <h4 :class="{'text-green-400 font-medium' : isOpen == true}">Lorem Ipsum ?</h4>
                    <svg 
                    :class="{'transform rotate-180' : isOpen == true}"
                    class="w-5 h-5 text-gray-500"
                        fill="none" stroke-linecap="round" 
                        stroke-linejoin="round" stroke-width="2" 
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{'text-gray-600' : isOpen == true}">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div> --}}

            <div class="mb-11 flex flex-wrap -m-1">
                <div class="w-full p-1">
                  <a href="#">
                    <div class="py-7 px-8 bg-white bg-opacity-60 border border-gray-200 hover:border-gray-300 rounded-2xl shadow-10xl">
                      <div class="flex flex-wrap justify-between -m-2">
                        <div class="flex-1 p-2">
                          <h3 class="text-lg font-semibold leading-normal">How to claim your 25% discount offer?</h3>
                        </div>
                        <div class="w-auto p-2">
                          <svg class="relative top-1" width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.25 6.75L9 12L3.75 6.75" stroke="#18181B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="w-full p-1">
                  <a href="#">
                    <div class="py-7 px-8 bg-white bg-opacity-60 border border-gray-200 hover:border-gray-300 rounded-2xl shadow-10xl">
                      <div class="flex flex-wrap justify-between -m-2">
                        <div class="flex-1 p-2">
                          <h3 class="text-lg font-semibold leading-normal">What&rsquo;s your refund policy?</h3>
                        </div>
                        <div class="w-auto p-2">
                          <svg class="relative top-1" width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.25 6.75L9 12L3.75 6.75" stroke="#18181B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="w-full p-1">
                  <a href="#">
                    <div class="py-7 px-8 bg-white bg-opacity-60 border border-gray-200 hover:border-gray-300 rounded-2xl shadow-10xl">
                      <div class="flex flex-wrap justify-between -m-2">
                        <div class="flex-1 p-2">
                          <h3 class="text-lg font-semibold leading-normal">How to get support for the product?</h3>
                        </div>
                        <div class="w-auto p-2">
                          <svg class="relative top-1" width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.25 6.75L9 12L3.75 6.75" stroke="#18181B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="w-full p-1">
                    <a href="#">
                      <div class="py-7 px-8 bg-white bg-opacity-60 border border-gray-200 hover:border-gray-300 rounded-2xl shadow-10xl">
                        <div class="flex flex-wrap justify-between -m-2">
                          <div class="flex-1 p-2">
                            <h3 class="text-lg font-semibold leading-normal">How to get support for the product?</h3>
                          </div>
                          <div class="w-auto p-2">
                            <svg class="relative top-1" width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.25 6.75L9 12L3.75 6.75" stroke="#18181B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>

                  <div class="w-full p-1">
                    <a href="#">
                      <div class="py-7 px-8 bg-white bg-opacity-60 border border-gray-200 hover:border-gray-300 rounded-2xl shadow-10xl">
                        <div class="flex flex-wrap justify-between -m-2">
                          <div class="flex-1 p-2">
                            <h3 class="text-lg font-semibold leading-normal">How to get support for the product?</h3>
                          </div>
                          <div class="w-auto p-2">
                            <svg class="relative top-1" width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.25 6.75L9 12L3.75 6.75" stroke="#18181B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>

                  <div class="m-auto text-center py-4">
                        <p class="text-gray-600 text-center font-medium">
                        <span>Still have any questions?</span>
                        <a class="font-semibold text-indigo-600 hover:text-indigo-700" href="#">Contact us</a>
                      </p>
                  </div>
              </div>        
        </div>

    </div>
  </div>
</section>

@endsection