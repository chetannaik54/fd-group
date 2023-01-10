@extends('pages.template.layout2')

@section('customcss')
<link href="assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
@endsection

@section('content')

        <!-- Start Home -->
        <section class="relative md:py-56 py-44 bg-[url('../../assets/images/photography/photographer.jpg')] jarallax" data-jarallax data-speed="0.5" id="aboutme">
            <div class="absolute inset-0 h-full w-full bg-gradient-to-t to-transparent via-white/80 dark:via-slate-900/80 from-white dark:from-slate-900"></div>

            <div class="absolute text-center p-6 bottom-0 left-0 right-0">
                <h3 class="md:text-3xl md:leading-normal text-2xl leading-normal font-bold">Gallery</h3>
            </div>
        </section><!--end section-->
        <!-- End Home -->

        <!-- Start Section-->
        <section class="relative md:py-24 py-16">
            <div class="container">
                <div class="grid grid-cols-1 items-center gap-[30px]">
                    <div class="filters-group-wrap text-center">
                        <div class="filters-group">
                            <ul class="mb-0 list-none container-filter-border-bottom filter-options">
                                <li class="inline-block text-lg font-semibold mx-2 mb-3 cursor-pointer relative border-b border-transparent text-slate-400 transition duration-500 active" data-group="all">All</li>
                                <li class="inline-block text-lg font-semibold mx-2 mb-3 cursor-pointer relative border-b border-transparent text-slate-400 transition duration-500" data-group="branding">Celebration</li>
                                <li class="inline-block text-lg font-semibold mx-2 mb-3 cursor-pointer relative border-b border-transparent text-slate-400 transition duration-500" data-group="designing">Office Tour</li>
                                <li class="inline-block text-lg font-semibold mx-2 mb-3 cursor-pointer relative border-b border-transparent text-slate-400 transition duration-500" data-group="photography">2022</li>
                                <li class="inline-block text-lg font-semibold mx-2 mb-3 cursor-pointer relative border-b border-transparent text-slate-400 transition duration-500" data-group="development">2021</li>
                            </ul>
                        </div>
                    </div>
                </div><!--grid-->

                <div id="grid" class="md:flex justify-center mx-auto mt-4">
                    <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["branding"]'>
                        <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                            <img src="assets/images/photography/p1.jpg" class="" alt="work-image">
                            <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                                <a href="assets/images/photography/p1.jpg" class="btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i class="uil uil-camera"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["designing"]'>
                        <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                            <img src="assets/images/photography/p2.jpg" class="" alt="work-image">
                            <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                                <a href="assets/images/photography/p2.jpg" class="btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i class="uil uil-camera"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["branding"]'>
                        <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                            <img src="assets/images/photography/p3.jpg" class="" alt="work-image">
                            <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                                <a href="assets/images/photography/p3.jpg" class="btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i class="uil uil-camera"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["designing"]'>
                        <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                            <img src="assets/images/photography/p4.jpg" class="" alt="work-image">
                            <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                                <a href="assets/images/photography/p4.jpg" class="btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i class="uil uil-camera"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["photography"]'>
                        <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                            <img src="assets/images/photography/p5.jpg" class="" alt="work-image">
                            <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                                <a href="assets/images/photography/p5.jpg" class="btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i class="uil uil-camera"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["branding"]'>
                        <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                            <img src="assets/images/photography/p6.jpg" class="" alt="work-image">
                            <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                                <a href="assets/images/photography/p6.jpg" class="btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i class="uil uil-camera"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["designing"]'>
                        <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                            <img src="assets/images/photography/p7.jpg" class="" alt="work-image">
                            <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                                <a href="assets/images/photography/p7.jpg" class="btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i class="uil uil-camera"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["branding"]'>
                        <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                            <img src="assets/images/photography/p8.jpg" class="" alt="work-image">
                            <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                                <a href="assets/images/photography/p8.jpg" class="btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i class="uil uil-camera"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["photography"]'>
                        <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                            <img src="assets/images/photography/p9.jpg" class="" alt="work-image">
                            <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                                <a href="assets/images/photography/p9.jpg" class="btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i class="uil uil-camera"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["photography"]'>
                        <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                            <img src="assets/images/photography/p10.jpg" class="" alt="work-image">
                            <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                                <a href="assets/images/photography/p10.jpg" class="btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i class="uil uil-camera"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["development"]'>
                        <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                            <img src="assets/images/photography/p11.jpg" class="" alt="work-image">
                            <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                                <a href="assets/images/photography/p11.jpg" class="btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i class="uil uil-camera"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["development"]'>
                        <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                            <img src="assets/images/photography/p12.jpg" class="" alt="work-image">
                            <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                                <a href="assets/images/photography/p12.jpg" class="btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i class="uil uil-camera"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["branding"]'>
                        <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                            <img src="assets/images/photography/p13.jpg" class="" alt="work-image">
                            <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                                <a href="assets/images/photography/p13.jpg" class="btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i class="uil uil-camera"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["designing"]'>
                        <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                            <img src="assets/images/photography/p14.jpg" class="" alt="work-image">
                            <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                                <a href="assets/images/photography/p14.jpg" class="btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i class="uil uil-camera"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["photography"]'>
                        <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                            <img src="assets/images/photography/p15.jpg" class="" alt="work-image">
                            <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                                <a href="assets/images/photography/p15.jpg" class="btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i class="uil uil-camera"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["photography"]'>
                        <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                            <img src="assets/images/photography/p16.jpg" class="" alt="work-image">
                            <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                                <a href="assets/images/photography/p16.jpg" class="btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i class="uil uil-camera"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["branding"]'>
                        <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                            <img src="assets/images/photography/p17.jpg" class="" alt="work-image">
                            <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                                <a href="assets/images/photography/p17.jpg" class="btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i class="uil uil-camera"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["photography"]'>
                        <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                            <img src="assets/images/photography/p18.jpg" class="" alt="work-image">
                            <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                                <a href="assets/images/photography/p18.jpg" class="btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i class="uil uil-camera"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end grid-->

                <div class="grid grid-cols-1 mt-8">
                    <div class="text-center">
                        <a href="photography-portfolio.html" class="btn btn-link text-slate-400 dark:text-white/70 dark:hover:text-white hover:text-indigo-600 after:bg-indigo-600 dark:after:bg-white duration-500 ease-in-out">See More <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div>
            </div><!--end container-->
        </section><!--end section-->

@endsection

@section('script')
<script src="assets/libs/shufflejs/shuffle.min.js"></script>
<script src="assets/libs/tobii/js/tobii.min.js"></script>
<script src="assets/libs/jarallax/jarallax.min.js"></script>
<script src="assets/libs/feather-icons/feather.min.js"></script>
@endsection