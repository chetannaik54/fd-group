@extends('pages.template.layout')

@section('customcss')
    <style>
        .timedot {
            left: -22px !important
        }
    </style>
@endsection

@section('content')

<section class="bg-white dark:bg-gray-900">
    <div class="pb-8 px-4 mx-auto max-w-screen-2xl lg:pb-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
            <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">We use an agile approach to solve issues and connect with the needs of your audience early and often.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-6 gap-5 sm:gap-6 2xl:gap-8">
            @for ($i = 0; $i < 11; $i++)
            <div class="relative flex flex-col sm:col-span-3 lg:col-span-2 transition duration-0 hover:duration-700 hover:scale-110">
                <a href="#" class="block flex-shrink-0 relative w-full rounded-3xl overflow-hidden z-0 aspect-w-4 aspect-h-3">
                    <div class="overflow-hidden z-0">
                        <img src="https://api.lorem.space/image?w=450&h=450&t={{ $i }}" alt="Deep Rooted Thoughts from the CEO of Fidelis Group" class="object-cover w-full h-full" loading="lazy" sizes="(max-width: 768px) 100vw, 768px" />
                    </div>
                    <span class="bg-neutral-900 bg-opacity-30"></span>
                </a>
                <a href="https://ncmaz.chisnghiax.com/delectus-optio-nulla-iste-fuga-alias/" class="absolute inset-0"></a>
                <span class="absolute top-3 inset-x-3">
                    <div class="flow-root">
                        <div class="flex flex-wrap space-x-2 -my-1">
                            <a href="/" class="transition-colors hover:text-white duration-300 inline-flex px-2.5 py-1 rounded-full font-medium text-xs relative my-1 text-[10px] sm:text-xs text-yellow-800 bg-yellow-100 hover:bg-yellow-800"> Computing </a>
                            <a href="/" class="transition-colors hover:text-white duration-300 inline-flex px-2.5 py-1 rounded-full font-medium text-xs relative my-1 text-[10px] sm:text-xs text-green-800 bg-green-100 hover:bg-green-800">Solutions</a>
                        </div>
                    </div>
                </span>
                <div class="w-11/12 transform -mt-32">
                    <div class="px-5 flex items-center space-x-4">
                            <div class="px-4 py-1 flex items-center justify-center rounded-full bg-neutral-50 text-primary-500 cursor-pointer text-sm text-neutral-500">
                                February 11, 2022
                            </div>
                    </div>
                    <div class="p-5 mt-5 bg-white dark:bg-neutral-900 shadow-xl dark:shadow-2xl rounded-3xl rounded-tl-none flex flex-col flex-grow">
                        <h3 class="block text-base sm:text-lg lg:text-xl font-semibold text-neutral-900 dark:text-neutral-100">
                            <a href="/" class="line-clamp-2" title="Deep Rooted Thoughts from the CEO of Fidelis Group">Deep Rooted Thoughts from the CEO of Fidelis Group</a>
                        </h3>
                        <span class="hidden sm:block text-sm text-neutral-500 dark:text-neutral-400 mt-3 mb-5">
                            <span class="line-clamp-2">
                                <p>
                                    I remember as if it was still yesterday, we had just laid down the foundation of Fidelis Group in the year 2010
                                </p>
                            </span>
                        </span>
                        <div class="mt-3 flex items-end justify-between sm:mt-auto">
                            <div class="flex items-center space-x-2 relative">
                                <div class="relative">
                                    <button class="relative items-center min-w-[68px] rounded-full text-neutral-6000 bg-neutral-50 transition-colors dark:text-neutral-200 dark:bg-neutral-800 hover:bg-teal-50 dark:hover:bg-teal-100 hover:text-teal-600 dark:hover:text-teal-500 hidden sm:flex px-3 h-8 text-xs focus:outline-none" data-postid="320" data-siteid="1" data-groupid="1" data-favoritecount="49" style="">
                                        <lord-icon src="https://cdn.lordicon.com/pnhskdva.json" trigger="hover" style="width:32px;height:32px"></lord-icon>
                                        <span class="simplefavorite-button-count" style="">49</span>
                                    </button>
                                </div>
                                <a href="https://ncmaz.chisnghiax.com/delectus-optio-nulla-iste-fuga-alias/#comments"                            class="relative items-center min-w-[68px] rounded-full text-neutral-6000 bg-neutral-50 transition-colors dark:text-neutral-200 dark:bg-neutral-800 hover:bg-teal-50 dark:hover:bg-teal-100 hover:text-teal-600 dark:hover:text-teal-500 hidden sm:flex px-3 h-8 text-xs focus:outline-none" title="Comments">
                                    <lord-icon src="https://cdn.lordicon.com/hpivxauj.json" trigger="hover" style="width:32px;height:32px"></lord-icon>
                                    <span class="ml-1 text-neutral-900 dark:text-neutral-200">0</span>
                                </a>
                            </div>
                            <div class="relative inline-block text-left" data-headlessui-state="">
                                <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" style="width:32px;height:32px"></lord-icon>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endfor            
        </div>       

    </div>
</section>
@endsection