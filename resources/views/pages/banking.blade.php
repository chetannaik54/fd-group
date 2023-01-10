@extends('pages.template.layout')

@section('content')
    <section class="bg-white dark:bg-gray-900">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">The Fintech Industry</h2>
                <p class="mb-4">As per the Reserve Bank of India (RBI), India’s banking sector is sufficiently capitalized and well-regulated. Credit, market and liquidity risk studies suggest that Indian banks are generally resilient and have withstood the global downturn well.</p>
                <p class="mb-4">Indian banking industry has recently witnessed the roll out of innovative banking models like payments and small finance banks. RBI’s new measures may go a long way in helping the restructuring of the domestic banking industry.</p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg" src="https://images.pexels.com/photos/4482900/pexels-photo-4482900.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="office content 1">
                <img class="mt-4 w-full lg:mt-10 rounded-lg" src="https://images.pexels.com/photos/7621138/pexels-photo-7621138.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="office content 2">
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-2.png" alt="office content 1">
                <img class="mt-4 w-full lg:mt-10 rounded-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-1.png" alt="office content 2">
            </div>
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Market size</h2>
                <p class="mb-4">The Indian banking system consists of 12 public sector banks, 22 private sector banks, 46 foreign banks, 56 regional rural banks, 1485 urban cooperative banks and 96,000 rural cooperative banks in addition to cooperative credit institutions. As on January 31, 2020, the total number of ATMs in India increased to 210,263 and is further expected to increase to 407,000 by 2021.</p>
            </div>
        </div>
    </section>

    <section class="bg-white">

        <h2 class="text-3xl font-bold sm:text-4xl pt-10">Core Banking Sectors We Cover</h2>
        <p class="font-light text-gray-900 dark:text-white pb-10">We usher in a convergence of global solutions, transformative opportunities, value based governance and emergence to business processes and an interface to collective consulting</p>

        <div class="gap-16 item-center grid grid-cols-4">
            <a href="" class="group flex flex-col justify-between rounded-sm bg-white p-8 shadow-xl transition-shadow hover:shadow-lg">
                <div>
                    <h3 class="text-5xl font-bold text-indigo-600">100+</h3>
                    <div class="mt-4 border-t-2 border-indigo-100 pt-2">
                        <p class="text-sm font-medium uppercase tracking-widest text-gray-500">
                            Retail Banking
                        </p>
                    </div>
                </div>

                <div class="mt-16 inline-flex items-center text-indigo-600">
                    <p class="text-lg font-medium">How we did it</p>

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="ml-3 h-6 w-6 transform transition-transform group-hover:translate-x-3" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </div>
            </a>


            <a href="" class="group flex flex-col justify-between rounded-sm bg-white p-8 shadow-xl transition-shadow hover:shadow-lg">
                <div>
                    <h3 class="text-5xl font-bold text-indigo-600">100+</h3>
                    <div class="mt-4 border-t-2 border-indigo-100 pt-2">
                        <p class="text-sm font-medium uppercase tracking-widest text-gray-500">
                            Commercial Banking
                        </p>
                    </div>
                </div>

                <div class="mt-16 inline-flex items-center text-indigo-600">
                    <p class="text-lg font-medium">How we did it</p>

                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 h-6 w-6 transform transition-transform group-hover:translate-x-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </div>
            </a>

            <a href=""
                class="group flex flex-col justify-between rounded-sm bg-white p-8 shadow-xl transition-shadow hover:shadow-lg">
                <div>
                    <h3 class="text-5xl font-bold text-indigo-600">100+</h3>
                    <div class="mt-4 border-t-2 border-indigo-100 pt-2">
                        <p class="text-sm font-medium uppercase tracking-widest text-gray-500">
                            Investment Banking
                        </p>
                    </div>
                </div>

                <div class="mt-16 inline-flex items-center text-indigo-600">
                    <p class="text-lg font-medium">How we did it</p>

                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 h-6 w-6 transform transition-transform group-hover:translate-x-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </div>
            </a>

            <a href=""
                class="group flex flex-col justify-between rounded-sm bg-white p-8 shadow-xl transition-shadow hover:shadow-lg">
                <div>
                    <h3 class="text-5xl font-bold text-indigo-600">100+</h3>
                    <div class="mt-4 border-t-2 border-indigo-100 pt-2">
                        <p class="text-sm font-medium uppercase tracking-widest text-gray-500">
                            Central Banking
                        </p>
                    </div>
                </div>

                <div class="mt-16 inline-flex items-center text-indigo-600">
                    <p class="text-lg font-medium">How we did it</p>

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="ml-3 h-6 w-6 transform transition-transform group-hover:translate-x-3" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </div>
            </a>

        </div>
    </section>

    <div>
        <div class="mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
                <h2 class="text-2xl font-bold text-gray-900">Other Industries</h2>

                <div class="mt-6 space-y-12 lg:grid lg:grid-cols-5 lg:gap-x-6 lg:space-y-0">
                    <div class="group relative">
                        <div
                            class="relative h-80 w-full overflow-hidden rounded-lg bg-white group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-01.jpg"
                                alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                                class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-6 text-sm text-gray-500">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                            </a>
                        </h3>
                        <p class="text-base font-semibold text-gray-900">Banking</p>
                    </div>

                    <div class="group relative">
                        <div
                            class="relative h-80 w-full overflow-hidden rounded-lg bg-white group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-02.jpg"
                                alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant."
                                class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-6 text-sm text-gray-500">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                            </a>
                        </h3>
                        <p class="text-base font-semibold text-gray-900">Fintech</p>
                    </div>

                    <div class="group relative">
                        <div
                            class="relative h-80 w-full overflow-hidden rounded-lg bg-white group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-03.jpg"
                                alt="Collection of four insulated travel bottles on wooden shelf."
                                class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-6 text-sm text-gray-500">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                            </a>
                        </h3>
                        <p class="text-base font-semibold text-gray-900">Healthcare</p>
                    </div>

                    <div class="group relative">
                        <div
                            class="relative h-80 w-full overflow-hidden rounded-lg bg-white group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-02.jpg"
                                alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant."
                                class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-6 text-sm text-gray-500">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                            </a>
                        </h3>
                        <p class="text-base font-semibold text-gray-900">Manufacturing</p>
                    </div>

                    <div class="group relative">
                        <div
                            class="relative h-80 w-full overflow-hidden rounded-lg bg-white group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-03.jpg"
                                alt="Collection of four insulated travel bottles on wooden shelf."
                                class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-6 text-sm text-gray-500">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                            </a>
                        </h3>
                        <p class="text-base font-semibold text-gray-900">Enterprise Technology</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection