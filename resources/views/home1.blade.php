@extends('pages.template.layout2')

@section('customcss')
@endsection

@section('content')
    <section class="relative table w-full md:py-44 py-36">
        <div class="absolute inset-0 bg-indigo-600/5"></div>
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">
                <div class="md:col-span-7">
                    <div class="ltr:md:mr-6 rtl:md:ml-6">
                        <span class="text-indigo-600 font-medium">Techwind Marketing</span>
                        <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5">Increase Your
                            Business <br> With Techwind</h4>
                        <p class="text-slate-400 text-lg max-w-xl">Launch your campaign and benefit from our expertise on
                            designing and managing conversion centered Tailwind CSS v3.x html page.</p>

                        <div class="subcribe-form mt-6 mb-3">
                            <form class="relative max-w-xl">
                                <input type="email" id="subcribe" name="email"
                                    class="pt-4 ltr:pr-40 rtl:pl-40 pb-4 ltr:pl-6 rtl:pr-6 w-full h-[50px] outline-none text-black dark:text-white rounded-full bg-white dark:bg-slate-900 shadow dark:shadow-gray-800"
                                    placeholder="Your Email Address :">
                                <button type="submit"
                                    class="btn absolute top-[2px] ltr:right-[3px] rtl:left-[3px] h-[46px] bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full">Try
                                    it for free <i class="uil uil-arrow-right"></i></button>
                            </form>
                            <!--end form-->
                        </div>

                        <span class="text-slate-400 font-medium">Looking for help? <a href=""
                                class="text-indigo-600">Get in touch with us</a></span>
                    </div>
                </div>
                <!--end col-->

                <div class="md:col-span-5">
                    <div class="relative">
                        <img src="assets/images/marketing.png" alt="">
                        <div class="absolute bottom-2/4 translate-y-2/4 right-0 left-0 text-center">
                            <a href="#!" data-type="youtube" data-id="yba7hPeTSjk"
                                class="lightbox h-20 w-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600 dark:text-white">
                                <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end grid-->
        </div>
        <!--end container -->
    </section>

    <section class="py-10 bg-indigo-600">
        <div class="container">
            <div class="grid grid-cols-2 md:grid-cols-4">
                <div class="counter-box relative text-center">
                    <h3 class="font-extrabold lg:text-[72px] text-[50px] text-white opacity-10"><span class="counter-value"
                            data-target="3452">3452</span>+</h3>
                    <span class="counter-head font-semibold text-xl text-white absolute top-2/4 left-0 right-0">Investment
                        Projects</span>
                </div>
                <!--end counter box-->

                <div class="counter-box relative text-center">
                    <h3 class="font-extrabold lg:text-[72px] text-[50px] text-white opacity-10"><span class="counter-value"
                            data-target="15">15</span>+</h3>
                    <span class="counter-head font-semibold text-xl text-white absolute top-2/4 left-0 right-0">Years of
                        Experience</span>
                </div>
                <!--end counter box-->

                <div class="counter-box relative text-center">
                    <h3 class="font-extrabold lg:text-[72px] text-[50px] text-white opacity-10"><span class="counter-value"
                            data-target="54">54</span></h3>
                    <span class="counter-head font-semibold text-xl text-white absolute top-2/4 left-0 right-0">Offices in
                        the World</span>
                </div>
                <!--end counter box-->

                <div class="counter-box relative text-center">
                    <h3 class="font-extrabold lg:text-[72px] text-[50px] text-white opacity-10"><span class="counter-value"
                            data-target="247">247</span>+</h3>
                    <span class="counter-head font-semibold text-xl text-white absolute top-2/4 left-0 right-0">Successful
                        Cases</span>
                </div>
                <!--end counter box-->
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>

    <section class="relative md:py-24 py-16">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px] relative">
                <div class="lg:col-span-8 md:col-span-12">
                    <div class="grid grid-cols-1 pb-8">
                        <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Instant Smart Solutions <br> With Techwind</h3>
    
                        <p class="text-slate-400 max-w-xl">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v3.x html page.</p>
                    </div><!--end grid-->
                
                    <div class="grid md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                        <div class="px-6 py-10 shadow hover:shadow-md dark:shadow-gray-800 dark:hover:shadow-gray-700 transition duration-500 rounded-2xl bg-white dark:bg-slate-900">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-codesandbox h-12 w-12 stroke-1 text-indigo-600"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="7.5 4.21 12 6.81 16.5 4.21"></polyline><polyline points="7.5 19.79 7.5 14.6 3 12"></polyline><polyline points="21 12 16.5 14.6 16.5 19.79"></polyline><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
    
                            <div class="content mt-7">
                                <a href="page-services.html" class="title h5 text-lg font-medium hover:text-indigo-600">User Friendly</a>
                                <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>
                                
                                <div class="mt-5">
                                    <a href="page-services.html" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="px-6 py-10 shadow hover:shadow-md dark:shadow-gray-800 dark:hover:shadow-gray-700 transition duration-500 rounded-2xl bg-white dark:bg-slate-900">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send h-12 w-12 stroke-1 text-indigo-600"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
    
                            <div class="content mt-7">
                                <a href="page-services.html" class="title h5 text-lg font-medium hover:text-indigo-600">Super Fast</a>
                                <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>
                                
                                <div class="mt-5">
                                    <a href="page-services.html" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="px-6 py-10 shadow hover:shadow-md dark:shadow-gray-800 dark:hover:shadow-gray-700 transition duration-500 rounded-2xl bg-white dark:bg-slate-900">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star h-12 w-12 stroke-1 text-indigo-600"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
    
                            <div class="content mt-7">
                                <a href="page-services.html" class="title h5 text-lg font-medium hover:text-indigo-600">Insightful Analytics</a>
                                <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>
                                
                                <div class="mt-5">
                                    <a href="page-services.html" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="px-6 py-10 shadow hover:shadow-md dark:shadow-gray-800 dark:hover:shadow-gray-700 transition duration-500 rounded-2xl bg-white dark:bg-slate-900">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark h-12 w-12 stroke-1 text-indigo-600"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg>
    
                            <div class="content mt-7">
                                <a href="page-services.html" class="title h5 text-lg font-medium hover:text-indigo-600">Highly Rated</a>
                                <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>
                                
                                <div class="mt-5">
                                    <a href="page-services.html" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4 md:col-span-12">
                    <div class="grid lg:grid-cols-1 md:grid-cols-2 grid-cols-1 gap-[30px]">
                        <div class="px-6 py-10 shadow hover:shadow-md dark:shadow-gray-800 dark:hover:shadow-gray-700 transition duration-500 rounded-2xl bg-white dark:bg-slate-900">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users h-12 w-12 stroke-1 text-indigo-600"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
    
                            <div class="content mt-7">
                                <a href="page-services.html" class="title h5 text-lg font-medium hover:text-indigo-600">User Forum Forum</a>
                                <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>
                                
                                <div class="mt-5">
                                    <a href="page-services.html" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="px-6 py-10 shadow hover:shadow-md dark:shadow-gray-800 dark:hover:shadow-gray-700 transition duration-500 rounded-2xl bg-white dark:bg-slate-900">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle h-12 w-12 stroke-1 text-indigo-600"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
    
                            <div class="content mt-7">
                                <a href="page-services.html" class="title h5 text-lg font-medium hover:text-indigo-600">24/7 Support</a>
                                <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>
                                
                                <div class="mt-5">
                                    <a href="page-services.html" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="overflow-hidden after:content-[''] after:absolute after:h-40 after:w-40 after:bg-red-600/5 after:top-2/4 ltr:after:left-0 rtl:after:right-0 after:-z-1 after:rounded-3xl after:animate-[spin_10s_linear_infinite]"></div>
                <div class="overflow-hidden after:content-[''] after:absolute after:h-[512px] after:w-[512px] after:bg-indigo-600/5 after:top-1/4 ltr:after:right-0 rtl:after:left-0 after:-z-1 after:rounded-full"></div>
            </div><!--grid-->
        </div><!--end container-->

        <div class="container md:mt-24 mt-16">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="md:col-span-6">
                    <div class="ltr:lg:mr-8 rtl:lg:ml-8">
                        <img src="assets/images/shape-image.png" alt="">
                    </div>
                </div>

                <div class="md:col-span-6 mt-8 md:mt-0">
                    <div class="ltr:lg:ml-5 rtl:lg:mr-5">
                        <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Fast &amp; Effective</h6>
                        <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Powerful Digitalization <br> With Techwind</h3>

                        <p class="text-slate-400 max-w-xl mb-6">Get instant helpful resources about anything on the go, easily implement secure money transfer solutions, boost your daily efficiency, connect to other app users and create your own Techwind network, and much more with just a few taps. commodo consequat. Duis aute irure.</p>

                        <a href="" class="btn bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white rounded-full">Get Started</a>
                    </div>
                </div>
            </div>
        </div><!--end container-->

        <div class="container md:mt-24 mt-16">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="md:col-span-6 order-1 md:order-2">
                    <div class="ltr:lg:ml-8 rtl:lg:mr-8">
                        <img src="assets/images/illustrator/SEO_SVG.svg" alt="">
                    </div>
                </div>

                <div class="md:col-span-6 mt-8 md:mt-0 order2 md:order-1">
                    <div class="ltr:lg:mr-5 rtl:lg:ml-5">
                        <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Easy To Track</h6>
                        <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Techwind Marketing <br> Analytics For All Expenses</h3>

                        <p class="text-slate-400 max-w-xl">You can combine all the Techwind templates into a single one, you can take a component from the Application theme and use it in the Website.</p>

                        <ul class="list-none text-slate-400 my-6">
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl ltr:mr-2 rtl:ml-2"></i> Digital Marketing Solutions for Tomorrow</li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl ltr:mr-2 rtl:ml-2"></i> Our Talented &amp; Experienced Marketing Agency</li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl ltr:mr-2 rtl:ml-2"></i> Create your own skin to match your brand</li>
                        </ul>

                        <a href="" class="btn bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white rounded-full">Get Started</a>
                    </div>
                </div>
            </div>
        </div><!--end container-->
    </section>

    <section class="relative md:py-24 py-16">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px] relative">
                <div class="lg:col-span-8 md:col-span-12">
                    <div class="grid grid-cols-1 pb-8">
                        <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Instant Smart Solutions <br> With Techwind</h3>
    
                        <p class="text-slate-400 max-w-xl">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v3.x html page.</p>
                    </div><!--end grid-->
                
                    <div class="grid md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                        <div class="px-6 py-10 shadow hover:shadow-md dark:shadow-gray-800 dark:hover:shadow-gray-700 transition duration-500 rounded-2xl bg-white dark:bg-slate-900">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-codesandbox h-12 w-12 stroke-1 text-indigo-600"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="7.5 4.21 12 6.81 16.5 4.21"></polyline><polyline points="7.5 19.79 7.5 14.6 3 12"></polyline><polyline points="21 12 16.5 14.6 16.5 19.79"></polyline><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
    
                            <div class="content mt-7">
                                <a href="page-services.html" class="title h5 text-lg font-medium hover:text-indigo-600">User Friendly</a>
                                <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>
                                
                                <div class="mt-5">
                                    <a href="page-services.html" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="px-6 py-10 shadow hover:shadow-md dark:shadow-gray-800 dark:hover:shadow-gray-700 transition duration-500 rounded-2xl bg-white dark:bg-slate-900">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send h-12 w-12 stroke-1 text-indigo-600"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
    
                            <div class="content mt-7">
                                <a href="page-services.html" class="title h5 text-lg font-medium hover:text-indigo-600">Super Fast</a>
                                <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>
                                
                                <div class="mt-5">
                                    <a href="page-services.html" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="px-6 py-10 shadow hover:shadow-md dark:shadow-gray-800 dark:hover:shadow-gray-700 transition duration-500 rounded-2xl bg-white dark:bg-slate-900">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star h-12 w-12 stroke-1 text-indigo-600"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
    
                            <div class="content mt-7">
                                <a href="page-services.html" class="title h5 text-lg font-medium hover:text-indigo-600">Insightful Analytics</a>
                                <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>
                                
                                <div class="mt-5">
                                    <a href="page-services.html" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="px-6 py-10 shadow hover:shadow-md dark:shadow-gray-800 dark:hover:shadow-gray-700 transition duration-500 rounded-2xl bg-white dark:bg-slate-900">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark h-12 w-12 stroke-1 text-indigo-600"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg>
    
                            <div class="content mt-7">
                                <a href="page-services.html" class="title h5 text-lg font-medium hover:text-indigo-600">Highly Rated</a>
                                <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>
                                
                                <div class="mt-5">
                                    <a href="page-services.html" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4 md:col-span-12">
                    <div class="grid lg:grid-cols-1 md:grid-cols-2 grid-cols-1 gap-[30px]">
                        <div class="px-6 py-10 shadow hover:shadow-md dark:shadow-gray-800 dark:hover:shadow-gray-700 transition duration-500 rounded-2xl bg-white dark:bg-slate-900">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users h-12 w-12 stroke-1 text-indigo-600"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
    
                            <div class="content mt-7">
                                <a href="page-services.html" class="title h5 text-lg font-medium hover:text-indigo-600">User Forum Forum</a>
                                <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>
                                
                                <div class="mt-5">
                                    <a href="page-services.html" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="px-6 py-10 shadow hover:shadow-md dark:shadow-gray-800 dark:hover:shadow-gray-700 transition duration-500 rounded-2xl bg-white dark:bg-slate-900">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle h-12 w-12 stroke-1 text-indigo-600"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
    
                            <div class="content mt-7">
                                <a href="page-services.html" class="title h5 text-lg font-medium hover:text-indigo-600">24/7 Support</a>
                                <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>
                                
                                <div class="mt-5">
                                    <a href="page-services.html" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="overflow-hidden after:content-[''] after:absolute after:h-40 after:w-40 after:bg-red-600/5 after:top-2/4 ltr:after:left-0 rtl:after:right-0 after:-z-1 after:rounded-3xl after:animate-[spin_10s_linear_infinite]"></div>
                <div class="overflow-hidden after:content-[''] after:absolute after:h-[512px] after:w-[512px] after:bg-indigo-600/5 after:top-1/4 ltr:after:right-0 rtl:after:left-0 after:-z-1 after:rounded-full"></div>
            </div><!--grid-->
        </div><!--end container-->

        <div class="container md:mt-24 mt-16">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="md:col-span-6">
                    <div class="ltr:lg:mr-8 rtl:lg:ml-8">
                        <img src="assets/images/shape-image.png" alt="">
                    </div>
                </div>

                <div class="md:col-span-6 mt-8 md:mt-0">
                    <div class="ltr:lg:ml-5 rtl:lg:mr-5">
                        <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Fast &amp; Effective</h6>
                        <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Powerful Digitalization <br> With Techwind</h3>

                        <p class="text-slate-400 max-w-xl mb-6">Get instant helpful resources about anything on the go, easily implement secure money transfer solutions, boost your daily efficiency, connect to other app users and create your own Techwind network, and much more with just a few taps. commodo consequat. Duis aute irure.</p>

                        <a href="" class="btn bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white rounded-full">Get Started</a>
                    </div>
                </div>
            </div>
        </div><!--end container-->

        <div class="container md:mt-24 mt-16">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="md:col-span-6 order-1 md:order-2">
                    <div class="ltr:lg:ml-8 rtl:lg:mr-8">
                        <img src="assets/images/illustrator/SEO_SVG.svg" alt="">
                    </div>
                </div>

                <div class="md:col-span-6 mt-8 md:mt-0 order2 md:order-1">
                    <div class="ltr:lg:mr-5 rtl:lg:ml-5">
                        <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Easy To Track</h6>
                        <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Techwind Marketing <br> Analytics For All Expenses</h3>

                        <p class="text-slate-400 max-w-xl">You can combine all the Techwind templates into a single one, you can take a component from the Application theme and use it in the Website.</p>

                        <ul class="list-none text-slate-400 my-6">
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl ltr:mr-2 rtl:ml-2"></i> Digital Marketing Solutions for Tomorrow</li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl ltr:mr-2 rtl:ml-2"></i> Our Talented &amp; Experienced Marketing Agency</li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl ltr:mr-2 rtl:ml-2"></i> Create your own skin to match your brand</li>
                        </ul>

                        <a href="" class="btn bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white rounded-full">Get Started</a>
                    </div>
                </div>
            </div>
        </div><!--end container-->
    </section>

    <section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What Our Users Say</h3>

                <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
            </div><!--end grid-->

            <div class="grid grid-cols-1 mt-8">
                <div class="tns-outer" id="tns1-ow"><div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span class="current">2 to 4</span>  of 6</div><div id="tns1-mw" class="tns-ovh"><div class="tns-inner" id="tns1-iw"><div class="tiny-three-item  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" id="tns1" style="transform: translate3d(-16.6667%, 0px, 0px);">
                    <div class="tiny-slide text-center tns-item" id="tns1-item0" aria-hidden="true" tabindex="-1">
                        <div class="customer-testi">
                            <div class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900">
                                <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                                <p class="text-slate-400">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. "</p>
                                <ul class="list-none mb-0 text-amber-400 mt-3">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                            
                            <div class="text-center mt-5">
                                <img src="assets/images/client/01.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto" alt="">
                                <h6 class="mt-2 font-semibold">Calvin Carlo</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide text-center tns-item tns-slide-active" id="tns1-item1">
                        <div class="customer-testi">
                            <div class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900">
                                <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                                <p class="text-slate-400">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                                <ul class="list-none mb-0 text-amber-400 mt-3">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                            
                            <div class="text-center mt-5">
                                <img src="assets/images/client/02.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto" alt="">
                                <h6 class="mt-2 font-semibold">Christa Smith</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide text-center tns-item tns-slide-active" id="tns1-item2">
                        <div class="customer-testi">
                            <div class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900">
                                <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                                <p class="text-slate-400">" One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others. "</p>
                                <ul class="list-none mb-0 text-amber-400 mt-3">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                            
                            <div class="text-center mt-5">
                                <img src="assets/images/client/03.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto" alt="">
                                <h6 class="mt-2 font-semibold">Jemina CLone</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide text-center tns-item tns-slide-active" id="tns1-item3">
                        <div class="customer-testi">
                            <div class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900">
                                <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                                <p class="text-slate-400">" Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. "</p>
                                <ul class="list-none mb-0 text-amber-400 mt-3">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                            
                            <div class="text-center mt-5">
                                <img src="assets/images/client/04.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto" alt="">
                                <h6 class="mt-2 font-semibold">Smith Vodka</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide text-center tns-item" id="tns1-item4" aria-hidden="true" tabindex="-1">
                        <div class="customer-testi">
                            <div class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900">
                                <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                                <p class="text-slate-400">" There is now an abundance of readable dummy texts. These are usually used when a text is required. "</p>
                                <ul class="list-none mb-0 text-amber-400 mt-3">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                            
                            <div class="text-center mt-5">
                                <img src="assets/images/client/05.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto" alt="">
                                <h6 class="mt-2 font-semibold">Cristino Murfi</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide text-center tns-item" id="tns1-item5" aria-hidden="true" tabindex="-1">
                        <div class="customer-testi">
                            <div class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900">
                                <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                                <p class="text-slate-400">" According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero. "</p>
                                <ul class="list-none mb-0 text-amber-400 mt-3">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                            
                            <div class="text-center mt-5">
                                <img src="assets/images/client/06.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto" alt="">
                                <h6 class="mt-2 font-semibold">Cristino Murfi</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>
                </div></div></div><div class="tns-nav" aria-label="Carousel Pagination"><button type="button" data-nav="0" aria-controls="tns1" style="" aria-label="Carousel Page 1 (Current Slide)" class="tns-nav-active"></button><button type="button" data-nav="1" aria-controls="tns1" style="" aria-label="Carousel Page 2" class="" tabindex="-1"></button><button type="button" data-nav="2" tabindex="-1" aria-controls="tns1" style="display:none" aria-label="Carousel Page 3"></button><button type="button" data-nav="3" tabindex="-1" aria-controls="tns1" style="display:none" aria-label="Carousel Page 4"></button><button type="button" data-nav="4" tabindex="-1" aria-controls="tns1" style="display:none" aria-label="Carousel Page 5"></button><button type="button" data-nav="5" tabindex="-1" aria-controls="tns1" style="display:none" aria-label="Carousel Page 6"></button></div></div>
            </div><!--end grid-->
        </div><!--end container-->
    </section>

    <section class="relative md:py-24 py-16 overflow-hidden">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="lg:col-span-5 md:col-span-6">
                    <div class="ltr:lg:mr-8 rtl:lg:ml-8">
                        <div class="relative">
                            <img src="assets/images/feature.png" alt="">
                            <div class="overflow-hidden absolute h-[512px] w-[512px] bg-indigo-600/5 top-1/4 right-0 left-0 align-middle -z-1 rounded-full"></div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7 md:col-span-6">
                    <div class="ltr:lg:ml-5 rtl:lg:mr-5">
                        <div class="bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-800 p-6">
                            <h3 class="mb-6 text-2xl leading-normal font-medium">Get in touch !</h3>

                            <form method="post" name="myForm" id="myForm" onsubmit="return validateForm()">
                                <p class="mb-0" id="error-msg"></p>
                                <div id="simple-msg"></div>
                                <div class="grid lg:grid-cols-12 lg:gap-6">
                                    <div class="lg:col-span-6 mb-5">
                                        <div class="ltr:text-left rtl:text-right">
                                            <label for="name" class="font-semibold">Your Name:</label>
                                            <div class="form-icon relative mt-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user w-4 h-4 absolute top-3 ltr:left-4 rtl:right-4"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                <input name="name" id="name" type="text" class="form-input ltr:pl-11 rtl:pr-11" placeholder="Name :">
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="lg:col-span-6 mb-5">
                                        <div class="ltr:text-left rtl:text-right">
                                            <label for="email" class="font-semibold">Your Email:</label>
                                            <div class="form-icon relative mt-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail w-4 h-4 absolute top-3 ltr:left-4 rtl:right-4"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                                <input name="email" id="email" type="email" class="form-input ltr:pl-11 rtl:pr-11" placeholder="Email :">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1">
                                    <div class="mb-5">
                                        <div class="ltr:text-left rtl:text-right">
                                            <label for="subject" class="font-semibold">Your Question:</label>
                                            <div class="form-icon relative mt-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book w-4 h-4 absolute top-3 ltr:left-4 rtl:right-4"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                                                <input name="subject" id="subject" class="form-input ltr:pl-11 rtl:pr-11" placeholder="Subject :">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <div class="ltr:text-left rtl:text-right">
                                            <label for="comments" class="font-semibold">Your Comment:</label>
                                            <div class="form-icon relative mt-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle w-4 h-4 absolute top-3 ltr:left-4 rtl:right-4"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                                <textarea name="comments" id="comments" class="form-input ltr:pl-11 rtl:pr-11 h-28" placeholder="Message :"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" id="submit" name="send" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md justify-center flex items-center">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end container-->

        <div class="container md:mt-24 mt-16">
            <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
                <div class="text-center px-6">
                    <div class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                        <i class="uil uil-question-circle"></i>
                    </div>

                    <div class="content mt-7">
                        <h5 class="text-xl font-semibold">Phone</h5>
                        <p class="text-slate-400 mt-3">Start working with Techwind that can provide everything</p>
                        
                        <div class="mt-5">
                            <a href="tel:+152534-468-854" class="text-indigo-600 font-medium">+152 534-468-854</a>
                        </div>
                    </div>
                </div>

                <div class="text-center px-6">
                    <div class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                        <i class="uil uil-file-bookmark-alt"></i>
                    </div>

                    <div class="content mt-7">
                        <h5 class="text-xl font-semibold">Email</h5>
                        <p class="text-slate-400 mt-3">Start working with Techwind that can provide everything</p>
                        
                        <div class="mt-5">
                            <a href="mailto:contact@example.com" class="text-indigo-600 font-medium">contact@example.com</a>
                        </div>
                    </div>
                </div>

                <div class="text-center px-6">
                    <div class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                        <i class="uil uil-cog"></i>
                    </div>

                    <div class="content mt-7">
                        <h5 class="text-xl font-semibold">Location</h5>
                        <p class="text-slate-400 mt-3">C/54 Northwest Freeway, Suite 558, <br>Houston, USA 485</p>
                        
                        <div class="mt-5">
                            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" class="lightbox text-indigo-600 font-medium" data-type="iframe" data-group="iframe" data-width="1024px" data-height="576px">View on Google map</a>
                        </div>
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section>
@endsection
