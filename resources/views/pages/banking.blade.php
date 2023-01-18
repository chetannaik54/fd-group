@extends('pages.template.layout')

@section('content')

    <section class="bg-white dark:bg-gray-900">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400 animate__animated animate__slideInLeft animate__delay-1s">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">The Fintech Industry</h2>
                <p class="mb-4">As per the Reserve Bank of India (RBI), India’s banking sector is sufficiently capitalized and well-regulated. Credit, market and liquidity risk studies suggest that Indian banks are generally resilient and have withstood the global downturn well.</p>
                <p class="mb-4">Indian banking industry has recently witnessed the roll out of innovative banking models like payments and small finance banks. RBI’s new measures may go a long way in helping the restructuring of the domestic banking industry.</p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <div class="w-full rounded-lg h-full bg-fixed parallax-img" style="background-image: url('https://images.pexels.com/photos/4482900/pexels-photo-4482900.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')" alt="office content 1"></div>
                <div class="mt-4 w-full lg:mt-10 rounded-lg h-full bg-fixed parallax-img min-h-[350px]" style="background-image: url('https://images.pexels.com/photos/7621138/pexels-photo-7621138.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')" alt="office content 2"></div>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="grid grid-cols-2 gap-4 mt-8">
                <div class="w-full rounded-lg h-full bg-fixed parallax-img" style="background-image: url('https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-2.png')"></div>
                <div class="mt-4 w-full lg:mt-10 rounded-lg h-full bg-fixed parallax-img min-h-[350px]" style="background-image: url('https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-1.png') "></div>
            </div>
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400 animate__animated animate__slideInRight animate__delay-1s">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Market size</h2>
                <p class="mb-4">The Indian banking system consists of 12 public sector banks, 22 private sector banks, 46 foreign banks, 56 regional rural banks, 1485 urban cooperative banks and 96,000 rural cooperative banks in addition to cooperative credit institutions. As on January 31, 2020, the total number of ATMs in India increased to 210,263 and is further expected to increase to 407,000 by 2021.</p>
            </div>
        </div>
    </section>

    <section class="bg-white">

        <h2 class="text-3xl font-bold sm:text-4xl pt-10">Core Banking Sectors We Cover</h2>
        <p class="pb-10 font-light text-gray-500 sm:text-lg dark:text-gray-400">We usher in a convergence of global solutions, transformative opportunities, value based governance and emergence to business processes and an interface to collective consulting</p>

        <div class="gap-16 item-center grid grid-cols-4">
            <a href="{{ route('case-studies') }}" class="group flex flex-col justify-between rounded-sm bg-white p-8 shadow-xl transition-shadow hover:shadow-lg">
                <div>
                    <h3 class="text-5xl font-bold text-indigo-600" id="count1">100+</h3>
                    <div class="mt-4 border-t-2 border-indigo-100 pt-2">
                        <p class="text-sm font-medium uppercase tracking-widest text-gray-500">
                            Retail Banking
                        </p>
                    </div>
                </div>

                <div class="mt-16 inline-flex items-center text-indigo-600">
                    <p class="text-lg font-medium">How we did it</p>

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="ml-3 h-6 w-6 transform transition-transform group-hover:translate-x-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </div>
            </a>

            <a href="{{ route('case-studies') }}" class="group flex flex-col justify-between rounded-sm bg-white p-8 shadow-xl transition-shadow hover:shadow-lg">
                <div>
                    <h3 class="text-5xl font-bold text-indigo-600" id="count2">100+</h3>
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

            <a href="{{ route('case-studies') }}" class="group flex flex-col justify-between rounded-sm bg-white p-8 shadow-xl transition-shadow hover:shadow-lg">
                <div>
                    <h3 class="text-5xl font-bold text-indigo-600" id="count3">100+</h3>
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

            <a href="{{ route('case-studies') }}" class="group flex flex-col justify-between rounded-sm bg-white p-8 shadow-xl transition-shadow hover:shadow-lg">
                <div>
                    <h3 class="text-5xl font-bold text-indigo-600" id="count4">100+</h3>
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
            <div class="mx-auto max-w-2xl pt-16 sm:pt-24 lg:max-w-none lg:pt-32">
                <h2 class="text-2xl font-bold text-gray-900">Other Industries</h2>

                <div class="mt-6 space-y-12 lg:grid lg:grid-cols-5 lg:gap-x-6 lg:space-y-0">

                    @php
                        $industries = array('Banking' => 'xtrjgsiz', 'Fintech' => 'qnlcdeqi' , 'Healthcare' => 'fnavtgau', 'Manufacturing' => 'igqtmmix', 'Enterprise Technology' => 'pxecqsgb', 'Retail & Ecommerce' => 'ggihhudh');
                    @endphp

                    @foreach ($industries as $key => $item)
                        @if(\Request::route()->getName() != strtolower($key))
                            <a class="group relative animate__animated animate__bounceInUp animate__delay-{{ $loop->index }}s" href="{{ env('APP_URL') }}/industries/{{ str_replace(' ', '-', strtolower($key)) }}">
                                <div class="relative h-80 w-full overflow-hidden rounded-lg bg-gray-300 group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1 hover:shadow">
                                    <lord-icon src="https://cdn.lordicon.com/{{ $item }}.json" trigger="hover" style="width:250px;height:250px"></lord-icon>
                                </div>
                                <p class="text-base font-semibold text-gray-900 pt-5 pb-12">{{ $key }}</p>
                            </a>
                        @endif
                    @endforeach

                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
<script src="{{ asset('js/imagecard-perspective.js') }}"></script>

<script>
    //#region - start of - number counter animation
    const counterAnim = (qSelector, start = 0, end, duration = 1000) => {
    const target = document.querySelector(qSelector);
    let startTimestamp = null;
    const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            target.innerText = Math.floor(progress * (end - start) + start);
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
    window.requestAnimationFrame(step);
    };
//#endregion - end of - number counter animation

document.addEventListener("DOMContentLoaded", () => {
 counterAnim("#count1", 10, 300, 1500);
 counterAnim("#count2", 5000, 250, 2000);
 counterAnim("#count3", 1000, 150, 2500);
 counterAnim("#count4", 500, 100, 3000);
});
</script>
@endsection