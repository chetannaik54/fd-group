@extends('pages.template.layout')

@section('content')

    <form class="flex items-center">   
        <label for="simple-search" class="sr-only">Search</label>
        <div class="relative w-full">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>
            <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
        </div>
        <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            <span class="sr-only">Search</span>
        </button>
    </form>

    <div class="py-4">
        <p>Search result for : keyword</p>
    </div>

    <div aria-label="group of cards" tabindex="0" class="focus:outline-none py-8 w-full">
        <div class="lg:flex items-center justify-center w-full">
            <div tabindex="0" aria-label="card 1" class="focus:outline-none lg:w-4/12 lg:mr-7 lg:mb-0 mb-7 bg-white dark:bg-gray-800  p-6 shadow rounded">
                <div class="flex items-center border-b border-gray-200 dark:border-gray-700  pb-6">
                    <img src="https://cdn.tuk.dev/assets/components/misc/doge-coin.png" alt="coin avatar" class="w-12 h-12 rounded-full" />
                    <div class="flex items-start justify-between w-full">
                        <div class="pl-3 w-full">
                            <p tabindex="0" class="focus:outline-none text-xl font-medium leading-5 text-gray-800 dark:text-white "> Applications</p>
                            <p tabindex="0" class="focus:outline-none text-sm leading-normal pt-2 text-gray-500 dark:text-gray-200 ">Pages</p>
                        </div>
                        <div role="img" aria-label="bookmark">
                            <svg class="focus:outline-none dark:text-white text-gray-800" width="28" height="28"
                                viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.5001 4.66667H17.5001C18.1189 4.66667 18.7124 4.9125 19.15 5.35009C19.5876 5.78767 19.8334 6.38117 19.8334 7V23.3333L14.0001 19.8333L8.16675 23.3333V7C8.16675 6.38117 8.41258 5.78767 8.85017 5.35009C9.28775 4.9125 9.88124 4.66667 10.5001 4.66667Z"
                                    stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="px-2">
                    <p tabindex="0" class="focus:outline-none text-sm leading-5 py-4 text-gray-600 dark:text-gray-200 ">A
                        group of people interested in dogecoin, the currency and a bit of side for the meme and dof that we
                        all know and love. These cases are perfectly simple and easy to distinguish.</p>
                    <div tabindex="0" class="focus:outline-none flex">
                        <div class="py-2 px-4 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">#dogecoin</div>
                        <div class="py-2 px-4 ml-3 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">#crypto
                        </div>
                    </div>
                </div>
            </div>
            <div aria-label="card 2" tabindex="0"
                class="focus:outline-none lg:w-4/12 lg:mr-7 lg:mb-0 mb-7 bg-white dark:bg-gray-800  p-6 shadow rounded">
                <div class="flex items-center border-b border-gray-200 dark:border-gray-700  pb-6">
                    <div class="w-12 h-12 bg-gray-300 dark:bg-gray-900  rounded-full flex flex-shrink-0"></div>
                    <div class="flex items-start justify-between w-full">
                        <div class="pl-3 w-full">
                            <p tabindex="0"
                                class="focus:outline-none text-xl font-medium leading-5 text-gray-800 dark:text-white">Sample Blog</p>
                            <p tabindex="0" class="focus:outline-none text-sm leading-normal pt-2 text-gray-500 dark:text-gray-200 ">Blogs</p>
                        </div>
                        <div aria-label="bookmark" role="img">
                            <svg class="focus:outline-none dark:text-white text-gray-800" width="28" height="28"
                                viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.5001 4.66667H17.5001C18.1189 4.66667 18.7124 4.9125 19.15 5.35009C19.5876 5.78767 19.8334 6.38117 19.8334 7V23.3333L14.0001 19.8333L8.16675 23.3333V7C8.16675 6.38117 8.41258 5.78767 8.85017 5.35009C9.28775 4.9125 9.88124 4.66667 10.5001 4.66667Z"
                                    stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="px-2">
                    <p tabindex="0" class="focus:outline-none text-sm leading-5 py-4 text-gray-600 dark:text-gray-200 ">A
                        group of people interested in dogecoin, the currency and a bit of side for the meme and dof that we
                        all know and love. These cases are perfectly simple and easy to distinguish.</p>
                    <div tabindex="0" class="focus:outline-none flex">
                        <div class="py-2 px-4 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">#Buy</div>
                        <div class="py-2 px-4 ml-3 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">#Sell</div>
                        <div class="py-2 px-4 ml-3 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">#Rent</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:flex items-center justify-center w-full mt-7">
            <div aria-label="card 3" tabindex="0"
                class="focus:outline-none lg:w-4/12 lg:mr-7 lg:mb-0 mb-7 bg-white dark:bg-gray-800  p-6 shadow rounded">
                <div class="flex items-center border-b border-gray-200 dark:border-gray-700  pb-6">
                    <div class="w-12 h-12 bg-gray-300 dark:bg-gray-900  rounded-full flex flex-shrink-0"></div>
                    <div class="flex items-start justify-between w-full">
                        <div class="pl-3 w-full">
                            <p tabindex="0"
                                class="focus:outline-none text-xl font-medium leading-5 text-gray-800 dark:text-white ">
                                Family guy : A thread</p>
                            <p tabindex="0"
                                class="focus:outline-none text-sm leading-normal pt-2 text-gray-500 dark:text-gray-200 ">pages</p>
                        </div>
                        <div role="img" aria-label="bookmark">
                            <svg class="focus:outline-none dark:text-white text-gray-800" width="28" height="28"
                                viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.5001 4.66667H17.5001C18.1189 4.66667 18.7124 4.9125 19.15 5.35009C19.5876 5.78767 19.8334 6.38117 19.8334 7V23.3333L14.0001 19.8333L8.16675 23.3333V7C8.16675 6.38117 8.41258 5.78767 8.85017 5.35009C9.28775 4.9125 9.88124 4.66667 10.5001 4.66667Z"
                                    stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="px-2">
                    <p tabindex="0" class="focus:outline-none text-sm leading-5 py-4 text-gray-600 dark:text-gray-200 ">A
                        group of people interested in dogecoin, the currency and a bit of side for the meme and dof that we
                        all know and love. These cases are perfectly simple and easy to distinguish.</p>
                    <div tabindex="0" class="focus:outline-none flex">
                        <div class="py-2 px-4 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">#dogecoin</div>
                        <div class="py-2 px-4 ml-3 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">#crypto
                        </div>
                    </div>
                </div>
            </div>
            <div aria-label="card 4" tabindex="0"
                class="focus:outline-none lg:w-4/12 lg:mr-7 lg:mb-0 mb-7 bg-white dark:bg-gray-800  p-6 shadow rounded">
                <div class="flex items-center border-b border-gray-200 dark:border-gray-700  pb-6">
                    <div class="w-12 h-12 bg-gray-300 dark:bg-gray-900  rounded-full flex flex-shrink-0"></div>
                    <div class="flex items-start justify-between w-full">
                        <div class="pl-3 w-full">
                            <p tabindex="0"
                                class="focus:outline-none text-xl font-medium leading-5 text-gray-800 dark:text-white ">DC
                                vs Marvel</p>
                            <p tabindex="0"
                                class="focus:outline-none text-sm leading-normal pt-2 text-gray-500 dark:text-gray-200 ">pages</p>
                        </div>
                        <div role="img" aria-label="bookmark">
                            <svg class="focus:outline-none dark:text-white text-gray-800" width="28" height="28"
                                viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.5001 4.66667H17.5001C18.1189 4.66667 18.7124 4.9125 19.15 5.35009C19.5876 5.78767 19.8334 6.38117 19.8334 7V23.3333L14.0001 19.8333L8.16675 23.3333V7C8.16675 6.38117 8.41258 5.78767 8.85017 5.35009C9.28775 4.9125 9.88124 4.66667 10.5001 4.66667Z"
                                    stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="px-2">
                    <p tabindex="0" class="focus:outline-none text-sm leading-5 py-4 text-gray-600 dark:text-gray-200 ">
                        A group of people interested in dogecoin, the currency and a bit of side for the meme and dof that
                        we all know and love. These cases are perfectly simple and easy to distinguish.</p>
                    <div tabindex="0" class="focus:outline-none flex">
                        <div class="py-2 px-4 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">#dogecoin</div>
                        <div class="py-2 px-4 ml-3 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">#crypto
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:flex items-center justify-center w-full mt-7">
            <div aria-label="card 5" tabindex="0"
                class="focus:outline-none lg:w-4/12 lg:mr-7 lg:mb-0 mb-7 bg-white dark:bg-gray-800  p-6 shadow rounded">
                <div class="flex items-center border-b border-gray-200 dark:border-gray-700  pb-6">
                    <div class="w-12 h-12 bg-gray-300 dark:bg-gray-900  rounded-full flex flex-shrink-0"></div>
                    <div class="flex items-start justify-between w-full">
                        <div class="pl-3 w-full">
                            <p tabindex="0"
                                class="focus:outline-none text-xl font-medium leading-5 text-gray-800 dark:text-white ">
                                Rick & Morty</p>
                            <p tabindex="0"
                                class="focus:outline-none text-sm leading-normal pt-2 text-gray-500 dark:text-gray-200 ">pages</p>
                        </div>
                        <div role="img" aria-label="bookmark">
                            <svg class="focus:outline-none dark:text-white text-gray-800" width="28" height="28"
                                viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.5001 4.66667H17.5001C18.1189 4.66667 18.7124 4.9125 19.15 5.35009C19.5876 5.78767 19.8334 6.38117 19.8334 7V23.3333L14.0001 19.8333L8.16675 23.3333V7C8.16675 6.38117 8.41258 5.78767 8.85017 5.35009C9.28775 4.9125 9.88124 4.66667 10.5001 4.66667Z"
                                    stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="px-2">
                    <p tabindex="0" class="focus:outline-none text-sm leading-5 py-4 text-gray-600 dark:text-gray-200 ">
                        A group of people interested in dogecoin, the currency and a bit of side for the meme and dof that
                        we all know and love. These cases are perfectly simple and easy to distinguish.</p>
                    <div tabindex="0" class="focus:outline-none flex">
                        <div class="py-2 px-4 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">#dogecoin</div>
                        <div class="py-2 px-4 ml-3 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">#crypto
                        </div>
                    </div>
                </div>
            </div>
            <div aria-label="card 6" tabindex="0"
                class="focus:outline-none lg:w-4/12 lg:mr-7 lg:mb-0 mb-7 bg-white dark:bg-gray-800  p-6 shadow rounded">
                <div class="flex items-center border-b border-gray-200 dark:border-gray-700  pb-6">
                    <div class="w-12 h-12 bg-gray-300 dark:bg-gray-900  rounded-full flex flex-shrink-0"></div>
                    <div class="flex items-start justify-between w-full">
                        <div class="pl-3 w-full">
                            <p tabindex="0"
                                class="focus:outline-none text-xl font-medium leading-5 text-gray-800 dark:text-white ">La
                                Liga: A history</p>
                            <p tabindex="0"
                                class="focus:outline-none text-sm leading-normal pt-2 text-gray-500 dark:text-gray-200  dark:text-gray-200 ">
                                36 members</p>
                        </div>
                        <div role="img" aria-label="bookmark">
                            <svg class="focus:outline-none dark:text-white text-gray-800" width="28" height="28"
                                viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.5001 4.66667H17.5001C18.1189 4.66667 18.7124 4.9125 19.15 5.35009C19.5876 5.78767 19.8334 6.38117 19.8334 7V23.3333L14.0001 19.8333L8.16675 23.3333V7C8.16675 6.38117 8.41258 5.78767 8.85017 5.35009C9.28775 4.9125 9.88124 4.66667 10.5001 4.66667Z"
                                    stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="px-2">
                    <p tabindex="0"
                        class="focus:outline-none text-sm leading-5 py-4 text-gray-600 dark:text-gray-200  dark:text-gray-200 ">
                        A group of people interested in dogecoin, the currency and a bit of side for the meme and dof that
                        we all know and love. These cases are perfectly simple and easy to distinguish.</p>
                    <div tabindex="0" class="focus:outline-none flex">
                        <div class="py-2 px-4 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">#dogecoin</div>
                        <div class="py-2 px-4 ml-3 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">#crypto
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
