@extends('pages.template.layout2')

@section('customcss')
@endsection

@section('content')
<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-44 bg-gray-50 dark:bg-slate-800 bg-[url('../../assets/images/bg4.png')] bg-bottom" id="home">
    <div class="container">
        <div class="grid lg:grid-cols-12 md:grid-cols-2 mt-10 items-center gap-[30px]">
            <div class="lg:col-span-7">
                <span class="bg-indigo-600/5 text-indigo-600 text-xs font-bold px-2.5 py-0.5 rounded h-5">Form Landing Page</span>

                <h4 class="font-semibold lg:leading-normal leading-normal text-4xl lg:text-5xl mt-2 mb-5">Experience, <br> Expertise, Consulting</h4>
        
                <p class="text-slate-400 text-lg max-w-xl">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v3.x html page.</p>
            
                <div class="relative mt-10">
                    <a href="" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full mr-1">Get Started</a>
                    <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="btn btn-icon btn-lg bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full lightbox"><i class="mdi mdi-play text-xl align-middle"></i></a><small class="text-sm uppercase align-middle font-bold ml-2">Watch Now</small>
                </div>
            </div>

            <div class="lg:col-span-5">
                <div class="bg-white dark:bg-slate-900 rounded-xl shadow dark:shadow-gray-800 md:p-8 p-6 lg:ml-10 z-10 relative">
                    <h4 class="mb-5 text-2xl font-semibold">We are offering 14 <br> days free trial</h4>

                    <form>
                        <div class="grid grid-cols-1">
                            <div class="mb-5">
                                <label class="form-label font-medium">Your Name : <span class="text-red-600">*</span></label>
                                <div class="form-icon relative mt-2">
                                    <i data-feather="user" class="w-4 h-4 absolute top-3 left-4"></i>
                                    <input type="text" class="form-input pl-12" placeholder="Name" name="name" required>
                                </div>
                            </div>

                            <div class="mb-5">
                                <label class="form-label font-medium">Your Email : <span class="text-red-600">*</span></label>
                                <div class="form-icon relative mt-2">
                                    <i data-feather="mail" class="w-4 h-4 absolute top-3 left-4"></i>
                                    <input type="email" class="form-input pl-12" placeholder="Email" name="email" required>
                                </div>
                            </div>

                            <div class="mb-5">
                                <label class="form-label font-medium">Phone No. : <span class="text-red-600">*</span></label>
                                <div class="form-icon relative mt-2">
                                    <i data-feather="phone" class="w-4 h-4 absolute top-3 left-4"></i>
                                    <input name="number" id="phNumber" class="form-input pl-12" placeholder="+12 12458 854" required>
                                </div>
                            </div>
                            
                            <div>
                                <a href="" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full">Free Trial</a>
                            </div>
                        </div><!--end grid-->
                    </form>
                    <!-- end form -->
                </div>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<!-- Business Partner -->
<section class="py-6 border-t border-b border-gray-100 dark:border-gray-700">
    <div class="container">
        <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
            <div class="mx-auto py-4">
                <img src="assets/images/client/amazon.svg" class="h-6" alt="">
            </div>

            <div class="mx-auto py-4">
                <img src="assets/images/client/google.svg" class="h-6" alt="">
            </div>
            
            <div class="mx-auto py-4">
                <img src="assets/images/client/lenovo.svg" class="h-6" alt="">
            </div>
            
            <div class="mx-auto py-4">
                <img src="assets/images/client/paypal.svg" class="h-6" alt="">
            </div>
            
            <div class="mx-auto py-4">
                <img src="assets/images/client/shopify.svg" class="h-6" alt="">
            </div>
            
            <div class="mx-auto py-4">
                <img src="assets/images/client/spotify.svg" class="h-6" alt="">
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- Business Partner -->

<!-- Start Section-->
<section class="relative md:py-24 py-16">
    <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Features</h6>
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Business strategies and top <br> permormance ideas</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-3 grid-cols-1 mt-8 gap-[30px]">
            <div class="group text-center">
                <div class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-lg rotate-[15deg] flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                    <i data-feather="pie-chart" class="w-7 h-7 -rotate-[15deg]"></i>
                </div>

                <div class="mt-8">
                    <a href="page-services.html" class="title h5 text-lg font-medium hover:text-indigo-600">Profitable Marketing</a>

                    <p class="text-slate-400 mt-4">We develop digital strategies, products and services appreciated by clients.</p>

                    <div class="mt-4">
                        <a href="" class="btn btn-link hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right align-middle"></i></a>
                    </div>
                </div>
            </div>
            <!-- Feature End -->
            
            <div class="group text-center">
                <div class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-lg rotate-[15deg] flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                    <i data-feather="briefcase" class="w-7 h-7 -rotate-[15deg]"></i>
                </div>

                <div class="mt-8">
                    <a href="page-services.html" class="title h5 text-lg font-medium hover:text-indigo-600">SEO Specialists</a>

                    <p class="text-slate-400 mt-4">We develop digital strategies, products and services appreciated by clients.</p>

                    <div class="mt-4">
                        <a href="" class="btn btn-link hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right align-middle"></i></a>
                    </div>
                </div>
            </div>
            <!-- Feature End -->
            
            <div class="group text-center">
                <div class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-lg rotate-[15deg] flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                    <i data-feather="target" class="w-7 h-7 -rotate-[15deg]"></i>
                </div>

                <div class="mt-8">
                    <a href="page-services.html" class="title h5 text-lg font-medium hover:text-indigo-600">Audience Analysis</a>

                    <p class="text-slate-400 mt-4">We develop digital strategies, products and services appreciated by clients.</p>

                    <div class="mt-4">
                        <a href="" class="btn btn-link hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right align-middle"></i></a>
                    </div>
                </div>
            </div>
            <!-- Feature End -->
        </div>
    </div><!--end container-->

    <div class="container md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
            <div class="md:col-span-5">
                <div class="relative">
                    <img src="assets/images/company/about2.png" class="mx-auto" alt="">
                    <div class="absolute bottom-2/4 translate-y-2/4 right-0 left-0 text-center">
                        <a href="#!" data-type="youtube" data-id="yba7hPeTSjk"
                            class="lightbox h-20 w-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600">
                            <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                        </a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="md:col-span-7">
                <div class="lg:ml-4">
                    <h4 class="mb-6 md:text-3xl text-2xl lg:leading-normal leading-normal font-medium">We are the largest <br> Business expert </h4>
                    <p class="text-slate-400 max-w-xl">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect. Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content. This is required when, for example, the final text is not yet available. Dummy texts have been in use by typesetters since the 16th century.</p>
                    <a href="" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-3">Buy Now <i class="mdi mdi-chevron-right align-middle"></i></a>
                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Key Features</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px] mt-8">
            <div class="lg:col-span-4 md:col-span-6">
                <div class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                    <div class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                        <i data-feather="monitor" class="h-5 w-5 rotate-45"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="mb-0 text-lg font-medium">Fully Responsive</h4>
                    </div>
                </div>
            </div>
            
            <div class="lg:col-span-4 md:col-span-6">
                <div class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                    <div class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                        <i data-feather="heart" class="h-5 w-5 rotate-45"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="mb-0 text-lg font-medium">Browser Compatibility</h4>
                    </div>
                </div>
            </div>
            
            <div class="lg:col-span-4 md:col-span-6">
                <div class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                    <div class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                        <i data-feather="eye" class="h-5 w-5 rotate-45"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="mb-0 text-lg font-medium">Retina Ready</h4>
                    </div>
                </div>
            </div>
            
            <div class="lg:col-span-4 md:col-span-6">
                <div class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                    <div class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                        <i data-feather="layout" class="h-5 w-5 rotate-45"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="mb-0 text-lg font-medium">Based On Tailwindcss 3</h4>
                    </div>
                </div>
            </div>
            
            <div class="lg:col-span-4 md:col-span-6">
                <div class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                    <div class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                        <i data-feather="feather" class="h-5 w-5 rotate-45"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="mb-0 text-lg font-medium">Feather Icons</h4>
                    </div>
                </div>
            </div>
            
            <div class="lg:col-span-4 md:col-span-6">
                <div class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                    <div class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                        <i data-feather="code" class="h-5 w-5 rotate-45"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="mb-0 text-lg font-medium">Built With SASS</h4>
                    </div>
                </div>
            </div>
            
            <div class="lg:col-span-4 md:col-span-6">
                <div class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                    <div class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                        <i data-feather="user-check" class="h-5 w-5 rotate-45"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="mb-0 text-lg font-medium">W3c Valid Code</h4>
                    </div>
                </div>
            </div>
            
            <div class="lg:col-span-4 md:col-span-6">
                <div class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                    <div class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                        <i data-feather="globe" class="h-5 w-5 rotate-45"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="mb-0 text-lg font-medium">Browsers Compatible</h4>
                    </div>
                </div>
            </div>
            
            <div class="lg:col-span-4 md:col-span-6">
                <div class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                    <div class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                        <i data-feather="settings" class="h-5 w-5 rotate-45"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="mb-0 text-lg font-medium">Easy to customize</h4>
                    </div>
                </div>
            </div>
        </div><!--end grid-->

        <div class="grid grid-cols-1 justify-center">
            <div class="mt-6 text-center">
                <a href="" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">See More <i class="uil uil-angle-right-b align-middle"></i></a>
            </div>
        </div>
    </div><!--end contanier-->
</section><!--end section-->
<!-- End Section-->

<!-- Start -->
<section class="relative md:py-24 py-16 md:pt-0 pt-0">
    <div class="container">
        <div class="grid grid-cols-1 justify-center">
            <div class="relative z-1">
                <div class="grid lg:grid-cols-12 grid-cols-1 md:text-left text-center justify-center">
                    <div class="lg:col-start-2 lg:col-span-10">
                        <div class="relative">
                            <img src="assets/images/cta-bg.jpg" class="rounded-md shadow-lg" alt="">
                            <div class="absolute bottom-2/4 translate-y-2/4 right-0 left-0 text-center">
                                <a href="#!" data-type="youtube" data-id="yba7hPeTSjk"
                                    class="lightbox h-20 w-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600">
                                    <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content md:mt-8">
                    <div class="grid lg:grid-cols-12 grid-cols-1 md:text-left text-center justify-center">
                        <div class="lg:col-start-2 lg:col-span-10">
                            <div class="grid md:grid-cols-2 grid-cols-1 items-center">
                                <div class="mt-8">
                                    <div class="section-title text-md-start">
                                        <h6 class="text-white/50 text-lg font-semibold">Team</h6>
                                        <h3 class="md:text-3xl text-2xl md:leading-normal leading-normal font-semibold text-white mt-2">Meet Experience <br> Team Member</h3>
                                    </div>
                                </div>

                                <div class="mt-8">
                                    <div class="section-title text-md-start">
                                        <p class="text-white/50 max-w-xl mx-auto mb-2">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
                                        <a href="" class="text-white">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end row -->
    </div><!--end container-->
    
    <div class="absolute bottom-0 left-0 right-0 sm:h-2/3 h-4/5 bg-gradient-to-b from-indigo-500 to-indigo-600"></div>
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container">
        <div class="grid lg:grid-cols-12 grid-cols-1 items-center gap-[30px]">
            <div class="lg:col-span-5">
                <div class="lg:text-left text-center">
                    <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Our Comfortable Rates</h3>

                    <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
                
                    <div class="mt-6">
                        <a href="page-pricing.html" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mr-2 mt-2"><i class="uil uil-master-card"></i> Subscribe Now</a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="lg:col-span-7 mt-8 lg:mt-0">
                <div class="lg:ml-8">
                    <div class="grid md:grid-cols-2 grid-cols-1 md:gap-0 gap-[30px]">
                        <div class="group border-b-[3px] dark:border-gray-700 relative shadow dark:shadow-gray-800 rounded-md md:scale-110 z-3 bg-white dark:bg-slate-900">
                            <div class="p-6 py-8">
                                <h6 class="font-bold uppercase mb-5 text-indigo-600">Starter</h6>

                                <div class="flex mb-5">
                                    <span class="text-xl font-semibold">$</span>
                                    <span class="price text-4xl font-semibold mb-0">39</span>
                                    <span class="text-xl font-semibold self-end mb-1">/mo</span>
                                </div>

                                <ul class="list-none text-slate-400">
                                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i> Full Access</li>
                                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i> Source Files</li>
                                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i> Free Appointments</li>
                                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i> Enhanced Security</li>
                                </ul>
                                <a href="" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-5">Get Started</a>
                            </div>
                        </div>

                        <div class="group border-b-[3px] dark:border-gray-700 relative shadow dark:shadow-gray-800 rounded-md z-2 bg-gray-50 dark:bg-slate-800">
                            <div class="p-6 py-8 md:pl-10">
                                <h6 class="font-bold uppercase mb-5 text-indigo-600">Professional</h6>

                                <div class="flex mb-5">
                                    <span class="text-xl font-semibold">$</span>
                                    <span class="price text-4xl font-semibold mb-0">59</span>
                                    <span class="text-xl font-semibold self-end mb-1">/mo</span>
                                </div>

                                <ul class="list-none text-slate-400">
                                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i> Full Access</li>
                                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i> Source Files</li>
                                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i> Free Appointments</li>
                                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i> Enhanced Security</li>
                                </ul>
                                <a href="" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-5">Try it Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center">
            <div class="md:col-span-6">
                <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Blogs</h6>
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Reads Our Latest <br> News & Blog</h3>
            </div>

            <div class="md:col-span-6">
                <p class="text-slate-400 max-w-xl">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
            </div>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">
            <div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden">
                <img src="assets/images/blog/01.jpg" alt="">

                <div class="content p-6">
                    <a href="blog-detail.html" class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Design your apps in your own way</a>
                    <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>
                    
                    <div class="mt-4">
                        <a href="blog-detail.html" class="btn btn-link font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden">
                <img src="assets/images/blog/02.jpg" alt="">

                <div class="content p-6">
                    <a href="blog-detail.html" class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">How apps is changing the IT world</a>
                    <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>
                    
                    <div class="mt-4">
                        <a href="blog-detail.html" class="btn btn-link font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden">
                <img src="assets/images/blog/03.jpg" alt="">

                <div class="content p-6">
                    <a href="blog-detail.html" class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Smartest Applications for Business</a>
                    <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>
                    
                    <div class="mt-4">
                        <a href="blog-detail.html" class="btn btn-link font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->
@endsection

@section('script')
    <script src="assets/libs/tobii/js/tobii.min.js"></script>
    <script src="assets/libs/tiny-slider/min/tiny-slider.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
@endsection