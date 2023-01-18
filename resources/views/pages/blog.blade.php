@extends('pages.template.layout')

@section('customcss')
    <style>
        .timedot {
            left: -22px !important
        }
    </style>
@endsection

@section('content')

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -mx-4 -my-8">

                @for($i =0; $i<=3; $i++)
                <div class="py-8 px-4 lg:w-1/3">
                    <div class="h-full flex items-start">
                        <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                            <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">February</span>
                            <span class="font-medium text-lg text-gray-800 title-font leading-none">2021</span>
                        </div>
                        <div class="flex-grow pl-6">
                            <h2 class="tracking-widest text-xs title-font font-medium text-indigo-500 mb-1">CATEGORY</h2>
                            <img src="https://api.lorem.space/image?w=400&h=225" alt="From-Fidelis-CEO" class="" style="max-width: 400px;">
                            <h1 class="title-font text-xl font-medium text-gray-900 mb-3">Deep Rooted thoughts from the CEO of Fidelis Group</h1>
                            <p class="leading-relaxed mb-5">I remember as if it was still yesterday, we had just laid down the foundation of Fidelis Group in the year 2010.
                                <a href="/article/Deep-Rooted-thoughts-from-the-CEO-of-Fidelis-Group" class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">Read more 
                                    <svg class="ml-2 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </p>
                            {{-- Author --}}
                            <a class="inline-flex items-center">
                                <img alt="blog" src="https://api.lorem.space/image/face?w=150&h=150" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
                                <span class="flex-grow flex flex-col pl-3">
                                    <span class="title-font font-medium text-gray-900">Nilesh</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                @endfor

            </div>
        </div>
    </section>

@endsection
