@extends('pages.template.layout')

@section('customcss')
    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" />
@endsection

@section('content')
    {{-- Intro  --}}
    <section class="bg-white dark:bg-gray-900">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Powering innovation at
                    200,000+ companies worldwide</h2>
                <p class="mb-4">Empower Developers, IT Ops, and business teams to collaborate at high velocity. Respond to
                    changes and deliver great customer and employee service experiences fast.</p>
                <p>We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple
                    and quick.</p>
                    <a href="{{ route('contact-us') }}" class="relative inline-flex items-center justify-center p-4 px-6 py-3 overflow-hidden font-medium text-indigo-600 transition duration-300 ease-out border-2 border-blue-500 rounded-full shadow-md group">
                        <span class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-blue-500 group-hover:translate-x-0 ease">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </span>
                        <span class="absolute flex items-center justify-center w-full h-full text-blue-500 transition-all duration-300 transform group-hover:translate-x-full ease">Get a free demo</span>
                        <span class="relative invisible">Get a free demo</span>
                    </a>
            </div>
            <div class="grid grid-rows-2 gap-4 mt-8 font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <p>The scenarios for digital transformation have been evolving and will rapidly change as new technologies emerge. In a spontaneously changing market scenario and market dynamics, MSPs are even more valuable if they can provide complete flexibility and scalability to their clients. Our goal is to become a trusted partner of choice for MSPs by focusing on creating value for our MSP partners and the enterprises we are supporting.</p>
            </div>
        </div>
    </section>

    {{-- Why --}}
    <section>
        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
                <div class="lg:py-24">
                    <h2 class="text-3xl font-bold sm:text-4xl">Why Fidelis Group</h2>

                    <p class="mt-4 text-gray-600">
                        At Fidelis Group, our Skill Development Solutions are structured to transform industry by nurturing
                        and providing the right human capital to build a brighter future for them and organizations,
                        augmenting them via next generation processes.
                    </p>
                    <p class="mt-4 text-gray-600">
                        Our premise is simple as we believe in being proactive, guided by best practices and industry trends
                        complemented by skill development methodologies.
                    </p>

                    <a href="#"
                        class="mt-8 inline-flex items-center rounded border border-indigo-600 bg-indigo-600 px-8 py-3 text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500">
                        <span class="text-sm font-medium"> Get Started </span>

                        <svg class="ml-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

                <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full pt-12">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/5EibdhLvfDk"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>

            </div>
        </div>
    </section>

    <div class="container md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center wow animate__animated animate__fadeInUp"
            data-wow-delay=".1s">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">   Industry Sectors Coverage</h3>
        </div>
        <!--end grid-->
    </div>
    <!--end container-->

    <div class="container md:mb-24 mb-16">
    
        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
            <div class="group relative p-6 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-indigo-600 dark:hover:bg-indigo-600 transition-all duration-500 ease-in-out rounded-xl bg-white dark:bg-slate-900 overflow-hidden">
                <div class="relative overflow-hidden text-transparent -m-3">
                    <lord-icon
                        src="https://cdn.lordicon.com/gzrilpgj.json"
                        trigger="hover"
                        delay="2000"
                        style="width:80px;height:80px">
                    </lord-icon>
                </div>

                <div class="mt-6">
                    <a href="" class="text-lg font-medium group-hover:text-white transition-all duration-500 ease-in-out">Non IT Manufacturing</a>
                </div>
            </div><!--end feature-->

            <div class="group relative p-6 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-indigo-600 dark:hover:bg-indigo-600 transition-all duration-500 ease-in-out rounded-xl bg-white dark:bg-slate-900 overflow-hidden">
                <div class="relative overflow-hidden text-transparent -m-3">
                    <lord-icon
                    class="h-24 w-24 fill-indigo-600/5 group-hover:fill-white/10"
                    src="https://cdn.lordicon.com/hcowevpv.json"
                    trigger="hover"
                    colors="primary:#2516c7,tertiary:#ebe6ef"
                    style="width:80px;height:80px">
                </lord-icon>

                </div>

                <div class="mt-6">
                    <a href="" class="text-lg font-medium group-hover:text-white transition-all duration-500 ease-in-out">Non IT Retail</a>
                </div>
            </div><!--end feature-->

            <div class="group relative p-6 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-indigo-600 dark:hover:bg-indigo-600 transition-all duration-500 ease-in-out rounded-xl bg-white dark:bg-slate-900 overflow-hidden">
                <div class="relative overflow-hidden text-transparent -m-3">
                    <lord-icon
                        src="https://cdn.lordicon.com/uiaaaqiz.json"
                        trigger="hover"
                        colors="primary:#2516c7,secondary:#e86830"
                        style="width:80px;height:80px">
                    </lord-icon>
                </div>

                <div class="mt-6">
                    <a href="" class="text-lg font-medium group-hover:text-white transition-all duration-500 ease-in-out">IT & ITES</a>
                </div>
            </div><!--end feature-->

            <div class="group relative p-6 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-indigo-600 dark:hover:bg-indigo-600 transition-all duration-500 ease-in-out rounded-xl bg-white dark:bg-slate-900 overflow-hidden">
                <div class="relative overflow-hidden text-transparent -m-3">
                    <lord-icon
                        src="https://cdn.lordicon.com/nnbhwnej.json"
                        trigger="hover"
                        colors="primary:#646e78"
                        style="width:80px;height:80px">
                    </lord-icon>    
                </div>

                <div class="mt-6">
                    <a href="" class="text-lg font-medium group-hover:text-white transition-all duration-500 ease-in-out">IT Apps Dev/Testing</a>
                </div>
            </div><!--end feature-->
            
            <div class="group relative p-6 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-indigo-600 dark:hover:bg-indigo-600 transition-all duration-500 ease-in-out rounded-xl bg-white dark:bg-slate-900 overflow-hidden">
                <div class="relative overflow-hidden text-transparent -m-3">
                    <lord-icon
                        src="https://cdn.lordicon.com/wjrtlwtp.json"
                        trigger="hover"
                        colors="primary:#e86830,secondary:#2516c7,tertiary:#08a88a,quaternary:#ffc739"
                        style="width:80px;height:80px">
                    </lord-icon>
                </div>

                <div class="mt-6">
                    <a href="" class="text-lg font-medium group-hover:text-white transition-all duration-500 ease-in-out">SAP (Tech & Funct)</a>
                </div>
            </div><!--end feature-->

            <div class="group relative p-6 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-indigo-600 dark:hover:bg-indigo-600 transition-all duration-500 ease-in-out rounded-xl bg-white dark:bg-slate-900 overflow-hidden">
                <div class="relative overflow-hidden text-transparent -m-3">
                    <lord-icon
                        src="https://cdn.lordicon.com/ggihhudh.json"
                        trigger="hover"
                        delay="2000"
                        colors="primary:#2516c7,secondary:#646e78,tertiary:#e86830"
                        style="width:80px;height:80px">
                    </lord-icon>
                </div>

                <div class="mt-6">
                    <a href="" class="text-lg font-medium group-hover:text-white transition-all duration-500 ease-in-out">IT IMS/IT</a>
                </div>
            </div><!--end feature-->

        </div>
    </div><!--end container-->


    {{--  No section --}}
    <section class="bg-white">
        <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 md:py-16 lg:px-8">
            <div class="mx-auto max-w-5xl text-center">
                <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">
                    Leverage On Our Experience For Accelerated Results
                </h2>

                <p class="mt-4 text-gray-500 sm:text-xl">
                    Our services cater to organizations of all sizes and their needs end to end in order to empower them
                </p>
            </div>

            <div class="mt-8 sm:mt-12">
                <dl class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                    <div class="flex flex-col rounded-lg border border-gray-100 px-4 py-8 text-center">
                        <dt class="order-last text-lg font-medium text-gray-500">
                            Years Of Business Excellence
                        </dt>

                        <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">
                            10+
                        </dd>
                    </div>

                    <div class="flex flex-col rounded-lg border border-gray-100 px-4 py-8 text-center">
                        <dt class="order-last text-lg font-medium text-gray-500">
                            Certified Experts
                        </dt>

                        <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">50+</dd>
                    </div>

                    <div class="flex flex-col rounded-lg border border-gray-100 px-4 py-8 text-center">
                        <dt class="order-last text-lg font-medium text-gray-500">
                            Client Retention
                        </dt>

                        <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">100%</dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">OUR MODEL</h2>
                <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">Our Value Addition To MSP,s</p>
            </div>
            <div class="space-y-8 lg:grid lg:grid-cols-2 sm:gap-6 xl:gap-10 lg:space-y-0">
                <!-- Pricing Card -->
                <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Quality Fulfilment</h3>
                    <!-- List -->
                    <ul role="list" class="mb-8 space-y-4 text-left">
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Our recruiting process and metrics are designed to complement MSP scorecards to improve coverage, quality, & cost.</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Recruiting engine to ensure the best talent ??? opportunity match.</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Our talent quality and consultant care has consistently resulted in above industry average redeployment & FT conversion rates..</span>
                        </li>

                    </ul>
                    <a href="{{ route('contact-us') }}" class="relative inline-flex items-center justify-start py-3 pl-4 pr-12 overflow-hidden font-semibold text-indigo-600 transition-all duration-150 ease-in-out rounded hover:pl-10 hover:pr-6 bg-gray-50 group">
                        <span class="absolute bottom-0 left-0 w-full h-1 transition-all duration-150 ease-in-out bg-indigo-600 group-hover:h-full"></span>
                        <span class="absolute right-0 pr-4 duration-200 ease-out group-hover:translate-x-12">
                        <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg></span>
                        <span class="absolute left-0 pl-2.5 -translate-x-12 group-hover:translate-x-0 ease-out duration-200">
                        <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg></span>
                        <span class="relative w-full text-left transition-colors duration-200 ease-in-out group-hover:text-white">Get Started</span>
                    </a>
                </div>
                <!-- Pricing Card -->
                <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Collaboration</h3>
                    <!-- List -->
                    <ul role="list" class="mb-8 space-y-4 text-left">
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>We help MSPs capture more spend & market share by sharing insights & market intelligence on existing as well as new accounts.</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Ensuring consistent & transparent communication with program managers.</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Engaging end users in the program through education and process compliance for a successful program..</span>
                        </li>

                    </ul>
                    <a href="{{ route('contact-us') }}" class="relative inline-flex items-center justify-start py-3 pl-4 pr-12 overflow-hidden font-semibold text-indigo-600 transition-all duration-150 ease-in-out rounded hover:pl-10 hover:pr-6 bg-gray-50 group">
                        <span class="absolute bottom-0 left-0 w-full h-1 transition-all duration-150 ease-in-out bg-indigo-600 group-hover:h-full"></span>
                        <span class="absolute right-0 pr-4 duration-200 ease-out group-hover:translate-x-12">
                        <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg></span>
                        <span class="absolute left-0 pl-2.5 -translate-x-12 group-hover:translate-x-0 ease-out duration-200">
                        <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg></span>
                        <span class="relative w-full text-left transition-colors duration-200 ease-in-out group-hover:text-white">Get Started</span>
                    </a>
                </div>

            </div>
        </div>
    </section>


    {{-- Logo --}}
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 lg:py-16 mx-auto max-w-screen-xl px-4">
            <h2 class="mb-8 lg:mb-16 text-3xl font-extrabold tracking-tight leading-tight text-center text-gray-900 dark:text-white md:text-4xl"> You???ll be in good company</h2>
            <div class="grid grid-cols-2 gap-8 text-gray-500 sm:gap-24 md:grid-cols-3 lg:grid-cols-6 dark:text-gray-400">
                @for ($i = 2; $i <= 7; $i++)
                    <a href="#" class="flex justify-center items-center">
                        <img src="https://fidelisgroup.in/wp-content/uploads/2020/10/Picture{{ $i }}.png" alt="" style="width: 250px;">
                    </a>
                @endfor
            </div>
        </div>
    </section>

    {{-- Testimonial  --}}
    <section>
        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="swiper-container !overflow-hidden">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <blockquote class="bg-gray-100 p-8">
                            <div class="flex items-center">
                                <img alt="Dog" src="https://api.lorem.space/image/face?w=50&h=50" class="h-16 w-16 rounded-full object-cover" />

                                <div class="ml-4 text-sm">
                                    <p class="font-medium">Priyanka MR</p>
                                    <p class="mt-1">Head of Marketing</p>
                                </div>
                            </div>

                            <p class="relative mt-4 text-gray-500">
                                <span class="text-xl">&ldquo;</span>
                                Fidelis has been a wonderful company starting out. Several things worth pointing out are within the overall atmosphere. Since Fidelis is in it's growth phase, it allows the management team to easily help everyone get acquainted with the overall job feel. My fellow team members and HR have been wonderful.
                                <span class="text-xl">&rdquo;</span>
                            </p>
                        </blockquote>
                    </div>

                    <div class="swiper-slide">
                        <blockquote class="bg-gray-100 p-8">
                            <div class="flex items-center">
                                <img alt="Dog" src="https://api.lorem.space/image/face?w=50&h=50" class="h-16 w-16 rounded-full object-cover" />

                                <div class="ml-4 text-sm">
                                    <p class="font-medium">Priyanka</p>
                                    <p class="mt-1">Head of Marketing</p>
                                </div>
                            </div>

                            <p class="relative mt-4 text-gray-500">
                                <span class="text-xl">&ldquo;</span>
                                Fidelis is fun place to work at, we don't miss celebration's and festivals. The hiring process is easily streamlined. All expectations were made clear throughout the entire process. Looking forward to many more years with this company
                                <span class="text-xl">&rdquo;</span>
                            </p>
                        </blockquote>
                    </div>

                    <div class="swiper-slide">
                        <blockquote class="bg-gray-100 p-8">
                            <div class="flex items-center">
                                <img alt="Dog" src="https://api.lorem.space/image/face?w=50&h=50" class="h-16 w-16 rounded-full object-cover" />

                                <div class="ml-4 text-sm">
                                    <p class="font-medium">Nilesh Goswami</p>
                                    <p class="mt-1"></p>
                                </div>
                            </div>

                            <p class="relative mt-4 text-gray-500">
                                <span class="text-xl">&ldquo;</span>
                                    Close to nature, work culture is optimal for someone like me who came from Pune. People even laugh at my Hindi jokes also. Supportive employer, creative environment and funny people around you.
                                <span class="text-xl">&rdquo;</span>
                            </p>
                        </blockquote>
                    </div>

                    <div class="swiper-slide">
                        <blockquote class="bg-gray-100 p-8">
                            <div class="flex items-center">
                                <img alt="Dog" src="https://api.lorem.space/image/face?w=50&h=50" class="h-16 w-16 rounded-full object-cover" />

                                <div class="ml-4 text-sm">
                                    <p class="font-medium">Pradeep Raghavendra</p>
                                    <p class="mt-1"></p>
                                </div>
                            </div>

                            <p class="relative mt-4 text-gray-500">
                                <span class="text-xl">&ldquo;</span>
                                I think working at Fidelis Technology Services is worth for me, A Wonderful experience was all the help i got from the management. Encouraging the employees to upscale the skills which will be beneficial for one's individual for their career growth.
                                <span class="text-xl">&rdquo;</span>
                            </p>
                        </blockquote>
                    </div>


                </div>

                <div class="swiper-pagination !relative !bottom-0 mt-12"></div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <div class="space-y-4">
        <details class="group border-l-4 border-green-500 bg-gray-50 p-6 [&_summary::-webkit-details-marker]:hidden" open>
            <summary class="flex items-center justify-between cursor-pointer">
                <h2 class="text-lg font-medium text-gray-900">
                    Lorem ipsum dolor sit amet consectetur adipisicing?
                </h2>

                <span class="ml-1.5 flex-shrink-0 rounded-full bg-white p-1.5 text-gray-900 sm:p-3">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="flex-shrink-0 w-5 h-5 transition duration-300 group-open:-rotate-45" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            </summary>

            <p class="mt-4 leading-relaxed text-gray-700">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic veritatis
                molestias culpa in, recusandae laboriosam neque aliquid libero nesciunt
                voluptate dicta quo officiis explicabo consequuntur distinctio corporis
                earum similique!
            </p>
        </details>

        <details class="group border-l-4 border-green-500 bg-gray-50 p-6 [&_summary::-webkit-details-marker]:hidden">
            <summary class="flex items-center justify-between cursor-pointer">
                <h2 class="text-lg font-medium text-gray-900">
                    Lorem ipsum dolor sit amet consectetur adipisicing?
                </h2>

                <span class="ml-1.5 flex-shrink-0 rounded-full bg-white p-1.5 text-gray-900 sm:p-3">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="flex-shrink-0 w-5 h-5 transition duration-300 group-open:-rotate-45" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            </summary>

            <p class="mt-4 leading-relaxed text-gray-700">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic veritatis
                molestias culpa in, recusandae laboriosam neque aliquid libero nesciunt
                voluptate dicta quo officiis explicabo consequuntur distinctio corporis
                earum similique!
            </p>
        </details>
    </div>
@endsection

@section('scripts')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.swiper-container', {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 8,
                autoplay: {
                    delay: 8000,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1.5,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                },
            })
        })
    </script>
@endsection
