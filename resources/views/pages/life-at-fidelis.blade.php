@extends('pages.template.layout')

@section('customcss')
<link href="assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
<link href="assets/libs/choices.js/public/assets/styles/choices.min.css" rel="stylesheet">
@endsection

@section('content')

    <!-- Start -->
    <section class="relative md:py-24 py-16 bg-white dark:bg-slate-800">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="lg:col-span-5 md:col-span-6">
                    <div class="grid grid-cols-12 gap-6 items-center">
                        <div class="col-span-6">
                            <div class="grid grid-cols-1 gap-6">
                                <img src="/assets/images/about/ab03.jpg" class="shadow rounded-md" alt="">
                                <img src="/assets/images/about/ab02.jpg" class="shadow rounded-md" alt="">
                            </div>
                        </div>

                        <div class="col-span-6">
                            <div class="grid grid-cols-1 gap-6">
                                <img src="/assets/images/about/ab01.jpg" class="shadow rounded-md" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7 md:col-span-6">
                    <div class="lg:ml-5">
                        <h3 class="mb-6 md:text-3xl text-2xl lg:leading-normal leading-normal font-medium">We are Largest
                            Job <br> Site in The World</h3>

                        <p class="text-slate-400 max-w-xl mb-2">Launch your campaign and benefit from our expertise on
                            designing and managing conversion centered Tailwind css html page.</p>
                        <p class="text-slate-400 max-w-xl">It seems that only fragments of the original text remain in the
                            Lorem Ipsum texts used today. One may speculate that over the course of time certain letters
                            were added or deleted at various positions within the text. This might also explain why one can
                            now find slightly different versions.</p>

                        <div class="mt-6">
                            <a href=""
                                class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read
                                More <i class="uil uil-arrow-right align-middle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="container mt-12">
            <div class="grid grid-cols-2 md:grid-cols-4">
                <div class="counter-box relative text-center">
                    <h3 class="font-extrabold lg:text-[72px] text-[50px] opacity-5"><span class="counter-value"
                            data-target="200">3</span>+K</h3>
                    <span class="counter-head font-semibold text-xl absolute top-2/4 left-0 right-0">Total User</span>
                </div>
                <!--end counter box-->

                <div class="counter-box relative text-center">
                    <h3 class="font-extrabold lg:text-[72px] text-[50px] opacity-5"><span class="counter-value"
                            data-target="15">1</span>+</h3>
                    <span class="counter-head font-semibold text-xl absolute top-2/4 left-0 right-0">Years of
                        Experience</span>
                </div>
                <!--end counter box-->

                <div class="counter-box relative text-center">
                    <h3 class="font-extrabold lg:text-[72px] text-[50px] opacity-5"><span class="counter-value"
                            data-target="54">5</span></h3>
                    <span class="counter-head font-semibold text-xl absolute top-2/4 left-0 right-0">Offices in the
                        World</span>
                </div>
                <!--end counter box-->

                <div class="counter-box relative text-center">
                    <h3 class="font-extrabold lg:text-[72px] text-[50px] opacity-5"><span class="counter-value"
                            data-target="125">12</span>K</h3>
                    <span class="counter-head font-semibold text-xl absolute top-2/4 left-0 right-0">No. of Job
                        Positions</span>
                </div>
                <!--end counter box-->
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->


    <div class="container md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Key Features</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-12 md:grid-cols-12 grid-cols-1 mt-8 gap-[30px] items-center">
            <div class="lg:col-span-4 md:col-span-6 lg:order-1 order-2">
                <div class="grid grid-cols-1 gap-[30px]">
                    <div class="group flex transition-all duration-500 ease-in-out xl:p-3">
                        <div class="flex md:order-2 order-1 align-middle justify-center items-center w-14 h-14 mt-1 bg-indigo-600/5 group-hover:bg-indigo-600 group-hover:text-white text-indigo-600 rounded-full text-2xl shadow-sm dark:shadow-gray-800 transition-all duration-500 ease-in-out">
                            <i data-feather="monitor" class="w-5 h-5"></i>
                        </div>
                        <div class="flex-1 md:order-1 order-2 md:text-right md:mr-4 md:ml-0 ml-4">
                            <h4 class="mb-0 text-lg font-medium">Use On Any Device</h4>
                            <p class="text-slate-400 mt-3">One disadvantage of Lorum Ipsum is that in Latin frequently than others</p>
                        </div>
                    </div>
                    <!--end feature-->
                    
                    <div class="group flex transition-all duration-500 ease-in-out xl:p-3">
                        <div class="flex md:order-2 order-1 align-middle justify-center items-center w-14 h-14 mt-1 bg-indigo-600/5 group-hover:bg-indigo-600 group-hover:text-white text-indigo-600 rounded-full text-2xl shadow-sm dark:shadow-gray-800 transition-all duration-500 ease-in-out">
                            <i data-feather="feather" class="w-5 h-5"></i>
                        </div>
                        <div class="flex-1 md:order-1 order-2 md:text-right md:mr-4 md:ml-0 ml-4">
                            <h4 class="mb-0 text-lg font-medium">Feather Icons</h4>
                            <p class="text-slate-400 mt-3">One disadvantage of Lorum Ipsum is that in Latin frequently than others</p>
                        </div>
                    </div>
                    <!--end feature-->
                    
                    <div class="group flex transition-all duration-500 ease-in-out xl:p-3">
                        <div class="flex md:order-2 order-1 align-middle justify-center items-center w-14 h-14 mt-1 bg-indigo-600/5 group-hover:bg-indigo-600 group-hover:text-white text-indigo-600 rounded-full text-2xl shadow-sm dark:shadow-gray-800 transition-all duration-500 ease-in-out">
                            <i data-feather="eye" class="w-5 h-5"></i>
                        </div>
                        <div class="flex-1 md:order-1 order-2 md:text-right md:mr-4 md:ml-0 ml-4">
                            <h4 class="mb-0 text-lg font-medium">Retina Ready</h4>
                            <p class="text-slate-400 mt-3">One disadvantage of Lorum Ipsum is that in Latin frequently than others</p>
                        </div>
                    </div>
                    <!--end feature-->
                </div>
            </div>

            <div class="lg:col-span-4 md:col-span-12 lg:mx-8 lg:order-2 order-1">
                <img src="{{ asset('img/portrait-young-indian.png') }}" class="mx-auto" alt="">
            </div>

            <div class="lg:col-span-4 md:col-span-6 order-3">
                <div class="grid grid-cols-1 gap-[30px]">
                    <div class="group flex transition-all duration-500 ease-in-out xl:p-3">
                        <div class="flex align-middle justify-center items-center w-14 h-14 mt-1 bg-indigo-600/5 group-hover:bg-indigo-600 group-hover:text-white text-indigo-600 rounded-full text-2xl shadow-sm dark:shadow-gray-800 transition-all duration-500 ease-in-out">
                            <i data-feather="user-check" class="w-5 h-5"></i>
                        </div>
                        <div class="flex-1 ml-4">
                            <h4 class="mb-0 text-lg font-medium">W3c Valid Code</h4>
                            <p class="text-slate-400 mt-3">One disadvantage of Lorum Ipsum is that in Latin frequently than others</p>
                        </div>
                    </div>
                    <!--end feature-->
                    
                    <div class="group flex transition-all duration-500 ease-in-out xl:p-3">
                        <div class="flex align-middle justify-center items-center w-14 h-14 mt-1 bg-indigo-600/5 group-hover:bg-indigo-600 group-hover:text-white text-indigo-600 rounded-full text-2xl shadow-sm dark:shadow-gray-800 transition-all duration-500 ease-in-out">
                            <i data-feather="smartphone" class="w-5 h-5"></i>
                        </div>
                        <div class="flex-1 ml-4">
                            <h4 class="mb-0 text-lg font-medium">Fully Responsive</h4>
                            <p class="text-slate-400 mt-3">One disadvantage of Lorum Ipsum is that in Latin frequently than others</p>
                        </div>
                    </div>
                    <!--end feature-->
                    
                    <div class="group flex transition-all duration-500 ease-in-out xl:p-3">
                        <div class="flex align-middle justify-center items-center w-14 h-14 mt-1 bg-indigo-600/5 group-hover:bg-indigo-600 group-hover:text-white text-indigo-600 rounded-full text-2xl shadow-sm dark:shadow-gray-800 transition-all duration-500 ease-in-out">
                            <i data-feather="heart" class="w-5 h-5"></i>
                        </div>
                        <div class="flex-1 ml-4">
                            <h4 class="mb-0 text-lg font-medium">Browser Compatibility</h4>
                            <p class="text-slate-400 mt-3">One disadvantage of Lorum Ipsum is that in Latin frequently than others</p>
                        </div>
                    </div>
                    <!--end feature-->
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

@endsection

@section('script')
<script src="assets/libs/tiny-slider/min/tiny-slider.js"></script>
<script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
<script src="assets/libs/feather-icons/feather.min.js"></script>
@endsection