@extends('pages.template.layout')

@section('content')

<div class="bg-white">
    <div>
      <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-black bg-opacity-25"></div>
  
        <div class="fixed inset-0 z-40 flex">

          <div class="relative ml-auto flex h-full w-full max-w-xs flex-col overflow-y-auto bg-white py-4 pb-12 shadow-xl">
            <div class="flex items-center justify-between px-4">
              <h2 class="text-lg font-medium text-gray-900">Filters</h2>
              <button type="button" class="-mr-2 flex h-10 w-10 items-center justify-center rounded-md bg-white p-2 text-gray-400">
                <span class="sr-only">Close menu</span>
                <!-- Heroicon name: outline/x-mark -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
  
            <!-- Filters -->
            <form class="mt-4 border-t border-gray-200">
              <h3 class="sr-only">Categories</h3>
              <ul role="list" class="px-2 py-3 font-medium text-gray-900">
                <li>
                  <a href="#" class="block px-2 py-3">Totes</a>
                </li>
  
                <li>
                  <a href="#" class="block px-2 py-3">Backpacks</a>
                </li>
  
                <li>
                  <a href="#" class="block px-2 py-3">Travel Bags</a>
                </li>
  
                <li>
                  <a href="#" class="block px-2 py-3">Hip Bags</a>
                </li>
  
                <li>
                  <a href="#" class="block px-2 py-3">Laptop Sleeves</a>
                </li>
              </ul>
  
              <div class="border-t border-gray-200 px-4 py-6">
                <h3 class="-mx-2 -my-3 flow-root">
                  <!-- Expand/collapse section button -->
                  <button type="button" class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500" aria-controls="filter-section-mobile-0" aria-expanded="false">
                    <span class="font-medium text-gray-900">Color</span>
                    <span class="ml-6 flex items-center">
                      <!--
                        Expand icon, show/hide based on section open state.
  
                        Heroicon name: mini/plus
                      -->
                      <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                      </svg>
                      <!--
                        Collapse icon, show/hide based on section open state.
  
                        Heroicon name: mini/minus
                      -->
                      <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                      </svg>
                    </span>
                  </button>
                </h3>
                <!-- Filter section, show/hide based on section state. -->
                <div class="pt-6" id="filter-section-mobile-0">
                  <div class="space-y-6">
                    <div class="flex items-center">
                      <input id="filter-mobile-color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-mobile-color-0" class="ml-3 min-w-0 flex-1 text-gray-500">White</label>
                    </div>
  
                    <div class="flex items-center">
                      <input id="filter-mobile-color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-mobile-color-1" class="ml-3 min-w-0 flex-1 text-gray-500">Beige</label>
                    </div>
  
                    <div class="flex items-center">
                      <input id="filter-mobile-color-2" name="color[]" value="blue" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-mobile-color-2" class="ml-3 min-w-0 flex-1 text-gray-500">Blue</label>
                    </div>
  
                    <div class="flex items-center">
                      <input id="filter-mobile-color-3" name="color[]" value="brown" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-mobile-color-3" class="ml-3 min-w-0 flex-1 text-gray-500">Brown</label>
                    </div>
  
                    <div class="flex items-center">
                      <input id="filter-mobile-color-4" name="color[]" value="green" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-mobile-color-4" class="ml-3 min-w-0 flex-1 text-gray-500">Green</label>
                    </div>
  
                    <div class="flex items-center">
                      <input id="filter-mobile-color-5" name="color[]" value="purple" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-mobile-color-5" class="ml-3 min-w-0 flex-1 text-gray-500">Purple</label>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="border-t border-gray-200 px-4 py-6">
                <h3 class="-mx-2 -my-3 flow-root">
                  <!-- Expand/collapse section button -->
                  <button type="button" class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500" aria-controls="filter-section-mobile-1" aria-expanded="false">
                    <span class="font-medium text-gray-900">Category</span>
                    <span class="ml-6 flex items-center">
                      <!--
                        Expand icon, show/hide based on section open state.
  
                        Heroicon name: mini/plus
                      -->
                      <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                      </svg>
                      <!--
                        Collapse icon, show/hide based on section open state.
  
                        Heroicon name: mini/minus
                      -->
                      <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                      </svg>
                    </span>
                  </button>
                </h3>
                <!-- Filter section, show/hide based on section state. -->
                <div class="pt-6" id="filter-section-mobile-1">
                  <div class="space-y-6">
                    <div class="flex items-center">
                      <input id="filter-mobile-category-0" name="category[]" value="new-arrivals" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-mobile-category-0" class="ml-3 min-w-0 flex-1 text-gray-500">Latest Job openings</label>
                    </div>
  
                    <div class="flex items-center">
                      <input id="filter-mobile-category-1" name="category[]" value="sale" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-mobile-category-1" class="ml-3 min-w-0 flex-1 text-gray-500">Sale</label>
                    </div>
  
                    <div class="flex items-center">
                      <input id="filter-mobile-category-2" name="category[]" value="travel" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-mobile-category-2" class="ml-3 min-w-0 flex-1 text-gray-500">Travel</label>
                    </div>
  
                    <div class="flex items-center">
                      <input id="filter-mobile-category-3" name="category[]" value="organization" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-mobile-category-3" class="ml-3 min-w-0 flex-1 text-gray-500">Organization</label>
                    </div>
  
                    <div class="flex items-center">
                      <input id="filter-mobile-category-4" name="category[]" value="accessories" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-mobile-category-4" class="ml-3 min-w-0 flex-1 text-gray-500">Accessories</label>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="border-t border-gray-200 px-4 py-6">
                <h3 class="-mx-2 -my-3 flow-root">
                  <!-- Expand/collapse section button -->
                  <button type="button" class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500" aria-controls="filter-section-mobile-2" aria-expanded="false">
                    <span class="font-medium text-gray-900">Size</span>
                    <span class="ml-6 flex items-center">
                      <!--
                        Expand icon, show/hide based on section open state.
  
                        Heroicon name: mini/plus
                      -->
                      <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                      </svg>
                      <!--
                        Collapse icon, show/hide based on section open state.
  
                        Heroicon name: mini/minus
                      -->
                      <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                      </svg>
                    </span>
                  </button>
                </h3>
                <!-- Filter section, show/hide based on section state. -->
                <div class="pt-6" id="filter-section-mobile-2">
                  <div class="space-y-6">
                    <div class="flex items-center">
                      <input id="filter-mobile-size-0" name="size[]" value="2l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-mobile-size-0" class="ml-3 min-w-0 flex-1 text-gray-500">2L</label>
                    </div>
  
                    <div class="flex items-center">
                      <input id="filter-mobile-size-1" name="size[]" value="6l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-mobile-size-1" class="ml-3 min-w-0 flex-1 text-gray-500">6L</label>
                    </div>
  
                    <div class="flex items-center">
                      <input id="filter-mobile-size-2" name="size[]" value="12l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-mobile-size-2" class="ml-3 min-w-0 flex-1 text-gray-500">12L</label>
                    </div>
  
                    <div class="flex items-center">
                      <input id="filter-mobile-size-3" name="size[]" value="18l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-mobile-size-3" class="ml-3 min-w-0 flex-1 text-gray-500">18L</label>
                    </div>
  
                    <div class="flex items-center">
                      <input id="filter-mobile-size-4" name="size[]" value="20l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-mobile-size-4" class="ml-3 min-w-0 flex-1 text-gray-500">20L</label>
                    </div>
  
                    <div class="flex items-center">
                      <input id="filter-mobile-size-5" name="size[]" value="40l" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-mobile-size-5" class="ml-3 min-w-0 flex-1 text-gray-500">40L</label>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
  
      <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex items-baseline justify-between border-b border-gray-200 pt-24 pb-6">
          <h1 class="text-4xl font-bold tracking-tight text-gray-900">New Arrivals</h1>
  
          <div class="flex items-center">
            <div class="relative inline-block text-left">
              <div>
                <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" id="menu-button" aria-expanded="false" aria-haspopup="true">
                  Sort
                  <!-- Heroicon name: mini/chevron-down -->
                  <svg class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                  </svg>
                </button>
              </div>
  
              <!--
                Dropdown menu, show/hide based on menu state.
  
                Entering: "transition ease-out duration-100"
                  From: "transform opacity-0 scale-95"
                  To: "transform opacity-100 scale-100"
                Leaving: "transition ease-in duration-75"
                  From: "transform opacity-100 scale-100"
                  To: "transform opacity-0 scale-95"
              -->
              {{-- <div class="absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                <div class="py-1" role="none">
                  <!--
                    Active: "bg-gray-100", Not Active: ""
  
                    Selected: "font-medium text-gray-900", Not Selected: "text-gray-500"
                  -->
                  <a href="#" class="font-medium text-gray-900 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Most Popular</a>
  
                  <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Best Rating</a>
  
                  <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Newest</a>
  
                  <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-3">Price: Low to High</a>
  
                  <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-4">Price: High to Low</a>
                </div>
              </div> --}}
            </div>
  
            <button type="button" class="-m-2 ml-5 p-2 text-gray-400 hover:text-gray-500 sm:ml-7">
              <span class="sr-only">View grid</span>
              <!-- Heroicon name: mini/squares-2x2 -->
              <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M4.25 2A2.25 2.25 0 002 4.25v2.5A2.25 2.25 0 004.25 9h2.5A2.25 2.25 0 009 6.75v-2.5A2.25 2.25 0 006.75 2h-2.5zm0 9A2.25 2.25 0 002 13.25v2.5A2.25 2.25 0 004.25 18h2.5A2.25 2.25 0 009 15.75v-2.5A2.25 2.25 0 006.75 11h-2.5zm9-9A2.25 2.25 0 0011 4.25v2.5A2.25 2.25 0 0013.25 9h2.5A2.25 2.25 0 0018 6.75v-2.5A2.25 2.25 0 0015.75 2h-2.5zm0 9A2.25 2.25 0 0011 13.25v2.5A2.25 2.25 0 0013.25 18h2.5A2.25 2.25 0 0018 15.75v-2.5A2.25 2.25 0 0015.75 11h-2.5z" clip-rule="evenodd" />
              </svg>
            </button>
            <button type="button" class="-m-2 ml-4 p-2 text-gray-400 hover:text-gray-500 sm:ml-6 lg:hidden">
              <span class="sr-only">Filters</span>
              <!-- Heroicon name: mini/funnel -->
              <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 01.628.74v2.288a2.25 2.25 0 01-.659 1.59l-4.682 4.683a2.25 2.25 0 00-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 018 18.25v-5.757a2.25 2.25 0 00-.659-1.591L2.659 6.22A2.25 2.25 0 012 4.629V2.34a.75.75 0 01.628-.74z" clip-rule="evenodd" />
              </svg>
            </button>
          </div>
        </div>
  
        <section aria-labelledby="products-heading" class="pt-6 pb-24">
          <h2 id="products-heading" class="sr-only">Products</h2>
  
          <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
            <!-- Filters -->
            <form class="hidden lg:block">
              <h3 class="sr-only">Categories</h3>
              <ul role="list" class="space-y-4 border-b border-gray-200 pb-6 text-sm font-medium text-gray-900">
                <li>
                  <a href="#">Software</a>
                </li>
  
                <li>
                  <a href="#">Sales & Business</a>
                </li>
  
                <li>
                  <a href="#">IT & Information security</a>
                </li>
  
                <li>
                  <a href="#">Human Resources</a>
                </li>
  
                <li>
                  <a href="#">Devops</a>
                </li>
              </ul>
  
              <div class="border-b border-gray-200 py-6">
                <h3 class="-my-3 flow-root">
                  <!-- Expand/collapse section button -->
                  <button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-0" aria-expanded="false">
                    <span class="font-medium text-gray-900">Location</span>
                    <span class="ml-6 flex items-center">
                      <!--
                        Expand icon, show/hide based on section open state.
  
                        Heroicon name: mini/plus
                      -->
                      <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                      </svg>
                      <!--
                        Collapse icon, show/hide based on section open state.
  
                        Heroicon name: mini/minus
                      -->
                      <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                      </svg>
                    </span>
                  </button>
                </h3>
                <!-- Filter section, show/hide based on section state. -->
                <div class="pt-6" id="filter-section-0">
                  <div class="space-y-4">
                    <div class="flex items-center">
                      <input id="filter-color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-color-0" class="ml-3 text-sm text-gray-600">Bangalore</label>
                    </div>
  
                    <div class="flex items-center">
                      <input id="filter-color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-color-1" class="ml-3 text-sm text-gray-600">Hyderabad</label>
                    </div>
  
                    <div class="flex items-center">
                      <input id="filter-color-2" name="color[]" value="blue" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-color-2" class="ml-3 text-sm text-gray-600">Mumbai</label>
                    </div>
  
                    <div class="flex items-center">
                      <input id="filter-color-3" name="color[]" value="brown" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-color-3" class="ml-3 text-sm text-gray-600">Pune</label>
                    </div>
  
                    <div class="flex items-center">
                      <input id="filter-color-4" name="color[]" value="green" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-color-4" class="ml-3 text-sm text-gray-600">Gurgaon</label>
                    </div>
  
                    <div class="flex items-center">
                      <input id="filter-color-5" name="color[]" value="purple" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-color-5" class="ml-3 text-sm text-gray-600">Others</label>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="border-b border-gray-200 py-6">
                <h3 class="-my-3 flow-root">
                  <!-- Expand/collapse section button -->
                  <button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-1" aria-expanded="false">
                    <span class="font-medium text-gray-900">Educations</span>
                    <span class="ml-6 flex items-center">
                      <!--
                        Expand icon, show/hide based on section open state.
  
                        Heroicon name: mini/plus
                      -->
                      <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                      </svg>
                      <!--
                        Collapse icon, show/hide based on section open state.
  
                        Heroicon name: mini/minus
                      -->
                      <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                      </svg>
                    </span>
                  </button>
                </h3>
                <!-- Filter section, show/hide based on section state. -->
                <div class="pt-6" id="filter-section-1">
                  <div class="space-y-4">
                    <div class="flex items-center">
                      <input id="filter-category-0" name="category[]" value="new-arrivals" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-category-0" class="ml-3 text-sm text-gray-600">Any postgraduate</label>
                    </div>
  
                    <div class="flex items-center">
                      <input id="filter-category-1" name="category[]" value="sale" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-category-1" class="ml-3 text-sm text-gray-600">MCA</label>
                    </div>
  
                    <div class="flex items-center">
                      <input id="filter-category-2" name="category[]" value="travel" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-category-2" class="ml-3 text-sm text-gray-600">Any Graduate</label>
                    </div>
  
                    <div class="flex items-center">
                      <input id="filter-category-3" name="category[]" value="organization" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-category-3" class="ml-3 text-sm text-gray-600">B.Tech</label>
                    </div>
  
                    <div class="flex items-center">
                      <input id="filter-category-4" name="category[]" value="accessories" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-category-4" class="ml-3 text-sm text-gray-600">BCA</label>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="border-b border-gray-200 py-6">
                <h3 class="-my-3 flow-root">
                  <!-- Expand/collapse section button -->
                  <button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-2" aria-expanded="false">
                    <span class="font-medium text-gray-900">Salary</span>
                    <span class="ml-6 flex items-center">
                      <!--
                        Expand icon, show/hide based on section open state.
  
                        Heroicon name: mini/plus
                      -->
                      <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                      </svg>
                      <!--
                        Collapse icon, show/hide based on section open state.
  
                        Heroicon name: mini/minus
                      -->
                      <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                      </svg>
                    </span>
                  </button>
                </h3>
                <!-- Filter section, show/hide based on section state. -->
                <div class="pt-6" id="filter-section-2">
                  <div class="space-y-4">
                    <div class="flex items-center">
                      <input id="filter-size-0" name="size[]" value="2l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-size-0" class="ml-3 text-sm text-gray-600">2L-5L</label>
                    </div>
  
                    <div class="flex items-center">
                      <input id="filter-size-1" name="size[]" value="6l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-size-1" class="ml-3 text-sm text-gray-600">6L-11L</label>
                    </div>
  
                    <div class="flex items-center">
                      <input id="filter-size-2" name="size[]" value="12l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-size-2" class="ml-3 text-sm text-gray-600">12L-17L</label>
                    </div>
  
                    <div class="flex items-center">
                      <input id="filter-size-3" name="size[]" value="18l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-size-3" class="ml-3 text-sm text-gray-600">18L-20L</label>
                    </div>
  
                    <div class="flex items-center">
                      <input id="filter-size-4" name="size[]" value="20l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-size-4" class="ml-3 text-sm text-gray-600">20L-30L</label>
                    </div>
  
                    <div class="flex items-center">
                      <input id="filter-size-5" name="size[]" value="40l" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                      <label for="filter-size-5" class="ml-3 text-sm text-gray-600">40L></label>
                    </div>
                  </div>
                </div>
              </div>
            </form>
  
            <!-- Product grid -->
            <div class="lg:col-span-3">
              <!-- Replace with your content -->
              <div class="h-96 rounded-lg border-2 border-dashed border-gray-200 lg:h-full p-6">

                <div class="lg:flex lg:items-center lg:justify-between shadow p-5 my-4">
                  <div class="min-w-0 flex-1">
                      <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">Back End Developer</h2>
                      <div class="mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap sm:space-x-6">
                          <div class="mt-2 flex items-center text-sm text-gray-500">
                              <!-- Heroicon name: mini/briefcase -->
                              <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                  <path fill-rule="evenodd" d="M6 3.75A2.75 2.75 0 018.75 1h2.5A2.75 2.75 0 0114 3.75v.443c.572.055 1.14.122 1.706.2C17.053 4.582 18 5.75 18 7.07v3.469c0 1.126-.694 2.191-1.83 2.54-1.952.599-4.024.921-6.17.921s-4.219-.322-6.17-.921C2.694 12.73 2 11.665 2 10.539V7.07c0-1.321.947-2.489 2.294-2.676A41.047 41.047 0 016 4.193V3.75zm6.5 0v.325a41.622 41.622 0 00-5 0V3.75c0-.69.56-1.25 1.25-1.25h2.5c.69 0 1.25.56 1.25 1.25zM10 10a1 1 0 00-1 1v.01a1 1 0 001 1h.01a1 1 0 001-1V11a1 1 0 00-1-1H10z" clip-rule="evenodd" />
                                  <path d="M3 15.055v-.684c.126.053.255.1.39.142 2.092.642 4.313.987 6.61.987 2.297 0 4.518-.345 6.61-.987.135-.041.264-.089.39-.142v.684c0 1.347-.985 2.53-2.363 2.686a41.454 41.454 0 01-9.274 0C3.985 17.585 3 16.402 3 15.055z" />
                              </svg>
                              Full-time
                          </div>
                          <div class="mt-2 flex items-center text-sm text-gray-500">
                              <!-- Heroicon name: mini/map-pin -->
                              <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                  <path fill-rule="evenodd"
                                      d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z"
                                      clip-rule="evenodd" />
                              </svg>
                              Remote
                          </div>
                          <div class="mt-2 flex items-center text-sm text-gray-500">
                              <!-- Heroicon name: mini/currency-dollar -->
                              <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                  <path
                                      d="M10.75 10.818v2.614A3.13 3.13 0 0011.888 13c.482-.315.612-.648.612-.875 0-.227-.13-.56-.612-.875a3.13 3.13 0 00-1.138-.432zM8.33 8.62c.053.055.115.11.184.164.208.16.46.284.736.363V6.603a2.45 2.45 0 00-.35.13c-.14.065-.27.143-.386.233-.377.292-.514.627-.514.909 0 .184.058.39.202.592.037.051.08.102.128.152z" />
                                  <path fill-rule="evenodd"
                                      d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-6a.75.75 0 01.75.75v.316a3.78 3.78 0 011.653.713c.426.33.744.74.925 1.2a.75.75 0 01-1.395.55 1.35 1.35 0 00-.447-.563 2.187 2.187 0 00-.736-.363V9.3c.698.093 1.383.32 1.959.696.787.514 1.29 1.27 1.29 2.13 0 .86-.504 1.616-1.29 2.13-.576.377-1.261.603-1.96.696v.299a.75.75 0 11-1.5 0v-.3c-.697-.092-1.382-.318-1.958-.695-.482-.315-.857-.717-1.078-1.188a.75.75 0 111.359-.636c.08.173.245.376.54.569.313.205.706.353 1.138.432v-2.748a3.782 3.782 0 01-1.653-.713C6.9 9.433 6.5 8.681 6.5 7.875c0-.805.4-1.558 1.097-2.096a3.78 3.78 0 011.653-.713V4.75A.75.75 0 0110 4z"
                                      clip-rule="evenodd" />
                              </svg>
                              $120k &ndash; $140k
                          </div>
                          <div class="mt-2 flex items-center text-sm text-gray-500">
                              <!-- Heroicon name: mini/calendar -->
                              <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                  <path fill-rule="evenodd"
                                      d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                      clip-rule="evenodd" />
                              </svg>
                              Closing on January 9, 2023
                          </div>
                      </div>
                  </div>
                  <div class="mt-5 flex lg:mt-0 lg:ml-4">
              
                      <span class="ml-3 hidden sm:block">
                          <button type="button"
                              class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                              <!-- Heroicon name: mini/link -->
                              <svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                  fill="currentColor" aria-hidden="true">
                                  <path
                                      d="M12.232 4.232a2.5 2.5 0 013.536 3.536l-1.225 1.224a.75.75 0 001.061 1.06l1.224-1.224a4 4 0 00-5.656-5.656l-3 3a4 4 0 00.225 5.865.75.75 0 00.977-1.138 2.5 2.5 0 01-.142-3.667l3-3z" />
                                  <path
                                      d="M11.603 7.963a.75.75 0 00-.977 1.138 2.5 2.5 0 01.142 3.667l-3 3a2.5 2.5 0 01-3.536-3.536l1.225-1.224a.75.75 0 00-1.061-1.06l-1.224 1.224a4 4 0 105.656 5.656l3-3a4 4 0 00-.225-5.865z" />
                              </svg>
                              Share
                          </button>
                      </span>
              
                      <span class="sm:ml-3">
                          <button type="button" class="inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                              <!-- Heroicon name: mini/check -->
                              <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                              </svg>
                              Apply Now                                
                          </button>
                      </span>
              
                      <!-- Dropdown -->
                      <div class="relative ml-3 sm:hidden">
                          <button type="button" class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" id="mobile-menu-button" aria-expanded="false" aria-haspopup="true">
                              More
                              <!-- Heroicon name: mini/chevron-down -->
                              <svg class="-mr-1 ml-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                              </svg>
                          </button>

                          <div class="absolute right-0 z-10 mt-2 -mr-1 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="mobile-menu-button" tabindex="-1">
                              <!-- Active: "bg-gray-100", Not Active: "" -->
                              <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="mobile-menu-item-0">Edit</a>
                              <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="mobile-menu-item-1">View</a>
                          </div>
                      </div>
                  </div>
                </div>

                <div class="lg:flex lg:items-center lg:justify-between shadow p-5 my-4">
                  <div class="min-w-0 flex-1">
                      <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">Devops Engineer</h2>
                      <div class="mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap sm:space-x-6">
                          <div class="mt-2 flex items-center text-sm text-gray-500">
                              <!-- Heroicon name: mini/briefcase -->
                              <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                  <path fill-rule="evenodd" d="M6 3.75A2.75 2.75 0 018.75 1h2.5A2.75 2.75 0 0114 3.75v.443c.572.055 1.14.122 1.706.2C17.053 4.582 18 5.75 18 7.07v3.469c0 1.126-.694 2.191-1.83 2.54-1.952.599-4.024.921-6.17.921s-4.219-.322-6.17-.921C2.694 12.73 2 11.665 2 10.539V7.07c0-1.321.947-2.489 2.294-2.676A41.047 41.047 0 016 4.193V3.75zm6.5 0v.325a41.622 41.622 0 00-5 0V3.75c0-.69.56-1.25 1.25-1.25h2.5c.69 0 1.25.56 1.25 1.25zM10 10a1 1 0 00-1 1v.01a1 1 0 001 1h.01a1 1 0 001-1V11a1 1 0 00-1-1H10z" clip-rule="evenodd" />
                                  <path d="M3 15.055v-.684c.126.053.255.1.39.142 2.092.642 4.313.987 6.61.987 2.297 0 4.518-.345 6.61-.987.135-.041.264-.089.39-.142v.684c0 1.347-.985 2.53-2.363 2.686a41.454 41.454 0 01-9.274 0C3.985 17.585 3 16.402 3 15.055z" />
                              </svg>
                              Full-time
                          </div>
                          <div class="mt-2 flex items-center text-sm text-gray-500">
                              <!-- Heroicon name: mini/map-pin -->
                              <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                  <path fill-rule="evenodd"
                                      d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z"
                                      clip-rule="evenodd" />
                              </svg>
                              Remote
                          </div>
                          <div class="mt-2 flex items-center text-sm text-gray-500">
                              <!-- Heroicon name: mini/currency-dollar -->
                              <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                  <path
                                      d="M10.75 10.818v2.614A3.13 3.13 0 0011.888 13c.482-.315.612-.648.612-.875 0-.227-.13-.56-.612-.875a3.13 3.13 0 00-1.138-.432zM8.33 8.62c.053.055.115.11.184.164.208.16.46.284.736.363V6.603a2.45 2.45 0 00-.35.13c-.14.065-.27.143-.386.233-.377.292-.514.627-.514.909 0 .184.058.39.202.592.037.051.08.102.128.152z" />
                                  <path fill-rule="evenodd"
                                      d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-6a.75.75 0 01.75.75v.316a3.78 3.78 0 011.653.713c.426.33.744.74.925 1.2a.75.75 0 01-1.395.55 1.35 1.35 0 00-.447-.563 2.187 2.187 0 00-.736-.363V9.3c.698.093 1.383.32 1.959.696.787.514 1.29 1.27 1.29 2.13 0 .86-.504 1.616-1.29 2.13-.576.377-1.261.603-1.96.696v.299a.75.75 0 11-1.5 0v-.3c-.697-.092-1.382-.318-1.958-.695-.482-.315-.857-.717-1.078-1.188a.75.75 0 111.359-.636c.08.173.245.376.54.569.313.205.706.353 1.138.432v-2.748a3.782 3.782 0 01-1.653-.713C6.9 9.433 6.5 8.681 6.5 7.875c0-.805.4-1.558 1.097-2.096a3.78 3.78 0 011.653-.713V4.75A.75.75 0 0110 4z"
                                      clip-rule="evenodd" />
                              </svg>
                              $120k &ndash; $140k
                          </div>
                          <div class="mt-2 flex items-center text-sm text-gray-500">
                              <!-- Heroicon name: mini/calendar -->
                              <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                  <path fill-rule="evenodd"
                                      d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                      clip-rule="evenodd" />
                              </svg>
                              Closing on January 9, 2023
                          </div>
                      </div>
                  </div>
                  <div class="mt-5 flex lg:mt-0 lg:ml-4">

                      <span class="ml-3 hidden sm:block">
                          <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" type="button"><svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path d="M12.232 4.232a2.5 2.5 0 013.536 3.536l-1.225 1.224a.75.75 0 001.061 1.06l1.224-1.224a4 4 0 00-5.656-5.656l-3 3a4 4 0 00.225 5.865.75.75 0 00.977-1.138 2.5 2.5 0 01-.142-3.667l3-3z"/> <path d="M11.603 7.963a.75.75 0 00-.977 1.138 2.5 2.5 0 01.142 3.667l-3 3a2.5 2.5 0 01-3.536-3.536l1.225-1.224a.75.75 0 00-1.061-1.06l-1.224 1.224a4 4 0 105.656 5.656l3-3a4 4 0 00-.225-5.865z"/> </svg> Share</button>
                          <!-- Dropdown menu -->
                          <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700" aria-labelledby="dropdownDefaultButton">
                            <div class="sharing-buttons flex flex-wrap">
                              <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition py-1 px-2 text-sm text-white border-blue-600 bg-blue-600 hover:bg-blue-700 hover:border-blue-700" target="_blank" rel="noopener" href="https://facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%3A8001%2Fcareers%2Fjob-listing" aria-label="Share on Facebook">
                                <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                                  <title>Facebook</title>
                                  <path d="M379 22v75h-44c-36 0-42 17-42 41v54h84l-12 85h-72v217h-88V277h-72v-85h72v-62c0-72 45-112 109-112 31 0 58 3 65 4z">
                                  </path>
                                </svg>
                                <span class="ml-1">Share on Facebook</span>
                              </a>
                              <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition py-1 px-2 text-sm text-white border-blue-600 bg-blue-600 hover:bg-blue-700 hover:border-blue-700" target="_blank" rel="noopener" href="https://twitter.com/intent/tweet?url=http%3A%2F%2Flocalhost%3A8001%2Fcareers%2Fjob-listing&amp;text=Get%20hired%20fast" aria-label="Share on Twitter">
                                <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                                  <title>Twitter</title>
                                  <path d="m459 152 1 13c0 139-106 299-299 299-59 0-115-17-161-47a217 217 0 0 0 156-44c-47-1-85-31-98-72l19 1c10 0 19-1 28-3-48-10-84-52-84-103v-2c14 8 30 13 47 14A105 105 0 0 1 36 67c51 64 129 106 216 110-2-8-2-16-2-24a105 105 0 0 1 181-72c24-4 47-13 67-25-8 24-25 45-46 58 21-3 41-8 60-17-14 21-32 40-53 55z">
                                  </path>
                                </svg>
                                <span class="ml-1">Share on Twitter</span>
                              </a>
                              <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition py-1 px-2 text-sm text-white border-blue-600 bg-blue-600 hover:bg-blue-700 hover:border-blue-700" target="_blank" rel="noopener" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Flocalhost%3A8001%2Fcareers%2Fjob-listing&amp;title=Get%20hired%20fast&amp;summary=Get%20hired%20fast&amp;source=http%3A%2F%2Flocalhost%3A8001%2Fcareers%2Fjob-listing" aria-label="Share on Linkedin">
                                <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                                  <title>Linkedin</title>
                                  <path d="M136 183v283H42V183h94zm6-88c1 27-20 49-53 49-32 0-52-22-52-49 0-28 21-49 53-49s52 21 52 49zm333 208v163h-94V314c0-38-13-64-47-64-26 0-42 18-49 35-2 6-3 14-3 23v158h-94V183h94v41c12-20 34-48 85-48 62 0 108 41 108 127z">
                                  </path>
                                </svg>
                                <span class="ml-1">Share on Linkedin</span>
                              </a>
                              <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition py-1 px-2 text-sm text-white border-blue-600 bg-blue-600 hover:bg-blue-700 hover:border-blue-700" target="_blank" rel="noopener" href="https://wa.me/?text=Get%20hired%20fast%20http%3A%2F%2Flocalhost%3A8001%2Fcareers%2Fjob-listing" aria-label="Share on Whatsapp" draggable="false">
                                <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                                  <title>Whatsapp</title>
                                  <path d="M413 97A222 222 0 0 0 64 365L31 480l118-31a224 224 0 0 0 330-195c0-59-25-115-67-157zM256 439c-33 0-66-9-94-26l-7-4-70 18 19-68-4-7a185 185 0 0 1 287-229c34 36 56 82 55 131 1 102-84 185-186 185zm101-138c-5-3-33-17-38-18-5-2-9-3-12 2l-18 22c-3 4-6 4-12 2-32-17-54-30-75-66-6-10 5-10 16-31 2-4 1-7-1-10l-17-41c-4-10-9-9-12-9h-11c-4 0-9 1-15 7-5 5-19 19-19 46s20 54 23 57c2 4 39 60 94 84 36 15 49 17 67 14 11-2 33-14 37-27s5-24 4-26c-2-2-5-4-11-6z">
                                  </path>
                                </svg>
                                <span class="ml-1">Share on Whatsapp</span>
                              </a>
                              <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition py-1 px-2 text-sm text-white border-blue-600 bg-blue-600 hover:bg-blue-700 hover:border-blue-700" target="_blank" rel="noopener" href="https://telegram.me/share/url?text=Get%20hired%20fast&amp;url=http%3A%2F%2Flocalhost%3A8001%2Fcareers%2Fjob-listing" aria-label="Share on Telegram" draggable="false">
                                <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                                  <title>Telegram</title>
                                  <path d="M256 8a248 248 0 1 0 0 496 248 248 0 0 0 0-496zm115 169c-4 39-20 134-28 178-4 19-10 25-17 25-14 2-25-9-39-18l-56-37c-24-17-8-25 6-40 3-4 67-61 68-67l-1-4-5-1q-4 1-105 70-15 10-27 9c-9 0-26-5-38-9-16-5-28-7-27-16q1-7 18-14l145-62c69-29 83-34 92-34 2 0 7 1 10 3l4 7a43 43 0 0 1 0 10z">
                                  </path>
                                </svg>
                                <span class="ml-1">Share on Telegram</span>
                              </a>
                              <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition py-1 px-2 text-sm text-white border-blue-600 bg-blue-600 hover:bg-blue-700 hover:border-blue-700" target="_blank" rel="noopener" href="mailto:?subject=Get%20hired%20fast&amp;body=http%3A%2F%2Flocalhost%3A8001%2Fcareers%2Fjob-listing" aria-label="Share by Email" draggable="false">
                                <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                                  <title>Email</title>
                                  <path d="M464 64a48 48 0 0 1 29 86L275 314c-11 8-27 8-38 0L19 150a48 48 0 0 1 29-86h416zM218 339c22 17 54 17 76 0l218-163v208c0 35-29 64-64 64H64c-35 0-64-29-64-64V176l218 163z">
                                  </path>
                                </svg>
                                <span class="ml-1">Share by Email</span>
                              </a>
                            </div>
                          </div>
                      </span>

                      <span class="sm:ml-3">
                          <a href="{{ url('/careers/jobs/backend-developer') }}" class="inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                              <!-- Heroicon name: mini/check -->
                              <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                              </svg>
                              Apply Now                                
                          </a>
                      </span>

                  </div>
                </div>


              </div>
              <!-- /End replace -->
            </div>
          </div>
        </section>
      </main>
    </div>
  </div>
  
@endsection