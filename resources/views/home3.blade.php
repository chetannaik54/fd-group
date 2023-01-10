@extends('pages.template.layout2')

@section('customcss')
@endsection

@section('content')
<!-- Start Hero -->
<section class="relative items-center overflow-hidden bg-indigo-600/5 dark:bg-indigo-600/10">
    <div class="container z-2">
        <div class="grid grid-cols-1 md:mt-44 mt-32 text-center">
            <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5">Solve Problem With on Integrated <br> Marketing Agency</h4>
            <p class="text-slate-400 text-lg max-w-xl mx-auto">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v3.x html page.</p>

            <div class="mt-6">
                <div class="subcribe-form mt-6 mb-3">
                    <form class="relative mx-auto max-w-xl">
                        <input type="email" id="subcribe" name="email" class="pt-4 pr-40 pb-4 pl-6 w-full h-[50px] outline-none text-black dark:text-white rounded-full bg-white dark:bg-slate-900 shadow dark:shadow-gray-800" placeholder="Your Email Address :">
                        <button type="submit" class="btn absolute top-[2px] right-[3px] h-[46px] bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full">Get Started <i class="uil uil-arrow-right"></i></button>
                    </form><!--end form-->
                </div>
            </div>
        </div><!--end grid-->

        <div class="md:flex justify-center mt-10">
            <div class="lg:w-1/2 md:w-2/3">
                <img src="assets/images/illustrator/celebration.svg" class="mx-auto" alt="">
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
<div class="relative">
    <div class="shape absolute right-0 sm:-bottom-px -bottom-[2px] left-0 marketing-hero md:h-[250px] sm:h-[140px] h-[60px] bg-white dark:bg-slate-900 overflow-hidden z-1 text-white dark:text-slate-900"></div>
</div>
<!-- End Hero -->

<!-- Business Partner -->
<section class="py-6">
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
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Our Services</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 mt-8 gap-x-[30px] gap-y-[50px]">
            <div class="text-center md:px-3">
                <div class="w-24 h-24 bg-indigo-600/5 text-indigo-600 rounded-3xl text-4xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                    <i class="uil uil-chart-line"></i>
                </div>

                <div class="content mt-7">
                    <a href="page-services.html" class="title h5 text-lg font-medium hover:text-indigo-600">Hign Performance</a>
                    <p class="text-slate-400 mt-3">The phrasal sequence of the Lorem Ipsum text is now so that many</p>
                </div>
            </div>
            
            <div class="text-center md:px-3">
                <div class="w-24 h-24 bg-indigo-600/5 text-indigo-600 rounded-3xl text-4xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                    <i class="uil uil-crosshairs"></i>
                </div>

                <div class="content mt-7">
                    <a href="page-services.html" class="title h5 text-lg font-medium hover:text-indigo-600">Best Securities</a>
                    <p class="text-slate-400 mt-3">The phrasal sequence of the Lorem Ipsum text is now so that many</p>
                </div>
            </div>
            
            <div class="text-center md:px-3">
                <div class="w-24 h-24 bg-indigo-600/5 text-indigo-600 rounded-3xl text-4xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                    <i class="uil uil-airplay"></i>
                </div>

                <div class="content mt-7">
                    <a href="page-services.html" class="title h5 text-lg font-medium hover:text-indigo-600">Trusted Service</a>
                    <p class="text-slate-400 mt-3">The phrasal sequence of the Lorem Ipsum text is now so that many</p>
                </div>
            </div>
            
            <div class="text-center md:px-3">
                <div class="w-24 h-24 bg-indigo-600/5 text-indigo-600 rounded-3xl text-4xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                    <i class="uil uil-rocket"></i>
                </div>

                <div class="content mt-7">
                    <a href="page-services.html" class="title h5 text-lg font-medium hover:text-indigo-600">Info Technology</a>
                    <p class="text-slate-400 mt-3">The phrasal sequence of the Lorem Ipsum text is now so that many</p>
                </div>
            </div>

            <div class="text-center md:px-3">
                <div class="w-24 h-24 bg-indigo-600/5 text-indigo-600 rounded-3xl text-4xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                    <i class="uil uil-clock"></i>
                </div>

                <div class="content mt-7">
                    <a href="page-services.html" class="title h5 text-lg font-medium hover:text-indigo-600">24/7 Support</a>
                    <p class="text-slate-400 mt-3">The phrasal sequence of the Lorem Ipsum text is now so that many</p>
                </div>
            </div>
            
            <div class="text-center md:px-3">
                <div class="w-24 h-24 bg-indigo-600/5 text-indigo-600 rounded-3xl text-4xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                    <i class="uil uil-users-alt"></i>
                </div>

                <div class="content mt-7">
                    <a href="page-services.html" class="title h5 text-lg font-medium hover:text-indigo-600">IT Management</a>
                    <p class="text-slate-400 mt-3">The phrasal sequence of the Lorem Ipsum text is now so that many</p>
                </div>
            </div>
            
            <div class="text-center md:px-3">
                <div class="w-24 h-24 bg-indigo-600/5 text-indigo-600 rounded-3xl text-4xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                    <i class="uil uil-file-alt"></i>
                </div>

                <div class="content mt-7">
                    <a href="page-services.html" class="title h5 text-lg font-medium hover:text-indigo-600">Certified Company</a>
                    <p class="text-slate-400 mt-3">The phrasal sequence of the Lorem Ipsum text is now so that many</p>
                </div>
            </div>
            
            <div class="text-center md:px-3">
                <div class="w-24 h-24 bg-indigo-600/5 text-indigo-600 rounded-3xl text-4xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                    <i class="uil uil-search"></i>
                </div>

                <div class="content mt-7">
                    <a href="page-services.html" class="title h5 text-lg font-medium hover:text-indigo-600">Data Analytics</a>
                    <p class="text-slate-400 mt-3">The phrasal sequence of the Lorem Ipsum text is now so that many</p>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 pb-8 items-center">
            <div class="md:col-span-6 md:text-left text-center">
                <h3 class="md:mb-0 mb-6 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Why Everyone Loves <br> Techwind</h3>
            </div>

            <div class="md:col-span-6">
                <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
            </div>
        </div><!--end grid-->

        <div class="grid md:grid-cols-2 grid-cols-1 items-center mt-8 gap-[30px]">
            <div class="relative">
                <img src="assets/images/saas/classic02.png" class="rounded-lg shadow-md dark:shadow-gray-800" alt="">
            </div>

            <div class="lg:ml-8">
                <h4 class="mb-4 text-2xl leading-normal font-medium">Great Product Analytics <br> With Real Problem</h4>
                <p class="text-slate-400">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts. If the distribution of letters visual impact.</p>
                <ul class="list-none text-slate-400 mt-4">
                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i> Digital Marketing Solutions for Tomorrow</li>
                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i> Our Talented & Experienced Marketing Agency</li>
                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i> Create your own skin to match your brand</li>
                </ul>

                <div class="mt-4">
                    <a href="page-aboutus.html" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Find Out More <i class="uil uil-angle-right-b align-middle"></i></a>
                </div>
            </div>
        </div>
    </div><!--end container-->

    <div class="container md:mt-24 mt-16">
        <div class="grid md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
            <div class="relative order-1 md:order-2">
                <img src="assets/images/saas/classic03.png" class="rounded-lg shadow-md dark:shadow-gray-800" alt="">
            </div>

            <div class="lg:mr-8 order-2 md:order-1">
                <h4 class="mb-4 text-2xl leading-normal font-medium">Get Notified About Importent Email</h4>
                <p class="text-slate-400">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts. If the distribution of letters visual impact.</p>
                <ul class="list-none text-slate-400 mt-4">
                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i> Digital Marketing Solutions for Tomorrow</li>
                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i> Our Talented & Experienced Marketing Agency</li>
                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i> Create your own skin to match your brand</li>
                </ul>

                <div class="mt-4">
                    <a href="page-aboutus.html" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Find Out More <i class="uil uil-angle-right-b align-middle"></i></a>
                </div>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End Section-->

<!-- Start Section-->
<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
    <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Pricing Plans</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
            <div class="group rounded-md shadow bg-white dark:bg-slate-900">
                <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                    <h6 class="font-bold mb-3 text-lg uppercase">Free</h6>
                    <p class="text-slate-400 mb-0">For individuals looking for a simple Free solution</p>

                    <div class="flex my-5">
                        <span class="text-xl font-semibold">$</span>
                        <span class="price text-4xl font-semibold mb-0">0</span>
                        <span class="text-xl font-semibold self-end mb-1">/mo</span>
                    </div>

                    <a href="" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full">Buy Now</a>
                </div>

                <div class="p-6">
                    <h6 class="mb-3 font-semibold">Features:</h6>
                    <ul class="list-none text-slate-400">
                        <li class="mb-1 flex"><span class="text-emerald-600 h5 me-1"><i class="uil uil-check-circle text-xl mr-2"></i></span> 1 Domains</li>
                        <li class="mb-1 flex"><span class="text-emerald-600 h5 me-1"><i class="uil uil-check-circle text-xl mr-2"></i></span> 1 GB File upload </li>
                        <li class="mb-1 flex"><span class="text-emerald-600 h5 me-1"><i class="uil uil-check-circle text-xl mr-2"></i></span> 2 GB Secure storage </li>
                        <li class="mb-1 flex"><span class="text-red-600 h5 me-1"><i class="uil uil-times-circle text-xl mr-2"></i></span> Unlimited bandwidth </li>
                    </ul>
                </div>
            </div>
        
            <div class="group rounded-md shadow bg-white dark:bg-slate-900">
                <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                    <h6 class="font-bold mb-3 text-lg uppercase">Startups</h6>
                    <p class="text-slate-400 mb-0">For individuals looking for a simple Startups solution</p>

                    <div class="flex my-5">
                        <span class="text-xl font-semibold">$</span>
                        <span class="price text-4xl font-semibold mb-0">9</span>
                        <span class="text-xl font-semibold self-end mb-1">/mo</span>
                    </div>

                    <a href="" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full">Buy Now</a>
                </div>

                <div class="p-6">
                    <h6 class="mb-3 font-semibold">Features:</h6>
                    <ul class="list-none text-slate-400">
                        <li class="mb-1 flex"><span class="text-emerald-600 h5 me-1"><i class="uil uil-check-circle text-xl mr-2"></i></span> 5 Domains</li>
                        <li class="mb-1 flex"><span class="text-emerald-600 h5 me-1"><i class="uil uil-check-circle text-xl mr-2"></i></span> 2 GB File upload </li>
                        <li class="mb-1 flex"><span class="text-emerald-600 h5 me-1"><i class="uil uil-check-circle text-xl mr-2"></i></span> 20 GB Secure storage </li>
                        <li class="mb-1 flex"><span class="text-red-600 h5 me-1"><i class="uil uil-times-circle text-xl mr-2"></i></span> Unlimited bandwidth </li>
                    </ul>
                </div>
            </div>
        
            <div class="group rounded-md shadow bg-white dark:bg-slate-900">
                <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                    <h6 class="font-bold mb-3 text-lg uppercase">Business</h6>
                    <p class="text-slate-400 mb-0">For individuals looking for a simple Business solution</p>

                    <div class="flex my-5">
                        <span class="text-xl font-semibold">$</span>
                        <span class="price text-4xl font-semibold mb-0">74</span>
                        <span class="text-xl font-semibold self-end mb-1">/mo</span>
                    </div>

                    <a href="" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full">Buy Now</a>
                </div>

                <div class="p-6">
                    <h6 class="mb-3 font-semibold">Features:</h6>
                    <ul class="list-none text-slate-400">
                        <li class="mb-1 flex"><span class="text-emerald-600 h5 me-1"><i class="uil uil-check-circle text-xl mr-2"></i></span> 10 Domains</li>
                        <li class="mb-1 flex"><span class="text-emerald-600 h5 me-1"><i class="uil uil-check-circle text-xl mr-2"></i></span> 5 GB File upload </li>
                        <li class="mb-1 flex"><span class="text-emerald-600 h5 me-1"><i class="uil uil-check-circle text-xl mr-2"></i></span> 50 GB Secure storage </li>
                        <li class="mb-1 flex"><span class="text-red-600 h5 me-1"><i class="uil uil-times-circle text-xl mr-2"></i></span> Unlimited bandwidth </li>
                    </ul>
                </div>
            </div>
        
            <div class="group rounded-md shadow bg-white dark:bg-slate-900">
                <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                    <h6 class="font-bold mb-3 text-lg uppercase">Premium</h6>
                    <p class="text-slate-400 mb-0">For individuals looking for a simple Premium solution</p>

                    <div class="flex my-5">
                        <span class="text-xl font-semibold">$</span>
                        <span class="price text-4xl font-semibold mb-0">99</span>
                        <span class="text-xl font-semibold self-end mb-1">/mo</span>
                    </div>

                    <a href="" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full">Buy Now</a>
                </div>

                <div class="p-6">
                    <h6 class="mb-3 font-semibold">Features:</h6>
                    <ul class="list-none text-slate-400">
                        <li class="mb-1 flex"><span class="text-emerald-600 h5 me-1"><i class="uil uil-check-circle text-xl mr-2"></i></span> 50 Domains</li>
                        <li class="mb-1 flex"><span class="text-emerald-600 h5 me-1"><i class="uil uil-check-circle text-xl mr-2"></i></span> 10 GB File upload </li>
                        <li class="mb-1 flex"><span class="text-emerald-600 h5 me-1"><i class="uil uil-check-circle text-xl mr-2"></i></span> 200 GB Secure storage </li>
                        <li class="mb-1 flex"><span class="text-emerald-600 h5 me-1"><i class="uil uil-check-circle text-xl mr-2"></i></span> Unlimited bandwidth </li>
                    </ul>
                </div>
            </div>
        </div><!--end grid-->
        <div class="md:flex justify-center mt-4">
            <div class="text-center">
                <p class="text-slate-400">Note: <span class="text-red-600 fs-5">*</span>No credit card required</p>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What Our Users Say</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 mt-8">
            <div class="tiny-three-item">
                <div class="tiny-slide text-center">
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

                <div class="tiny-slide text-center">
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

                <div class="tiny-slide text-center">
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

                <div class="tiny-slide text-center">
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

                <div class="tiny-slide text-center">
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

                <div class="tiny-slide text-center">
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
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center">
            <div class="lg:col-span-5 md:col-span-6">
                <img src="assets/images/illustrator/envelope.svg" class="mx-auto d-block" alt="">
            </div>

            <div class="lg:col-span-7 md:col-span-6">
                <span class="bg-indigo-600/5 text-indigo-600 text-xs font-bold px-2.5 py-0.5 rounded h-5">Mobile Apps</span>
                <h4 class="md:text-3xl text-2xl lg:leading-normal leading-normal font-medium my-4">Available for your <br> Smartphones</h4>
                <p class="text-slate-400 max-w-xl mb-0">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
                <div class="my-5">
                    <a href=""><img src="assets/images/app/app.png" class="m-1 inline-block" alt=""></a>

                    <a href=""><img src="assets/images/app/playstore.png" class="m-1 inline-block" alt=""></a>
                </div>

                <div class="inline-block">
                    <div class="pt-4 flex items-center border-t border-gray-100 dark:border-gray-700">
                        <i data-feather="smartphone" class="mr-2 text-indigo-600 h-10 w-10"></i>
                        <div class="content">
                            <h6 class="mb-0 text-base font-medium">Install app now on your cellphones</h6>
                            <a href="" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Learn More <i class="uil uil-angle-right-b"></i></a>  
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end gird-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->
@endsection

@section('script')
<script src="assets/libs/tiny-slider/min/tiny-slider.js"></script>
<script src="assets/libs/feather-icons/feather.min.js"></script>

@endsection