@extends('pages.template.layout')

@section('customcss')
<link href="assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
<link href="assets/libs/choices.js/public/assets/styles/choices.min.css" rel="stylesheet">
@endsection

@section('content')


    <!-- Start Hero -->
    <section
        class="md:h-screen py-36 h-auto relative flex items-center background-effect overflow-hidden bg-[url('../../assets/images/job/job.jpg')]">
        <div class="container-fluid">
            <div
                class="absolute inset-0 z-0 bg-[url('../../assets/images/job/curve-shape.png')] dark:bg-[url('../../assets/images/job/curve-shape-dark.png')]">
            </div>
        </div>
        <!--end container-->

        <div class="container z-1">
            <div class="grid grid-cols-1 mt-10">
                <h4 class="lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 font-bold">Make The Best Move to <br>
                    Choose Your <span class="text-indigo-600">New Job</span></h4>
                <p class="text-slate-400 text-lg max-w-xl">Find Jobs, Employment & Career Opportunities. Some of the
                    companies we've helped recruit excellent applicants over the years.</p>

                <div class="grid lg:grid-cols-12 grid-cols-1" id="reserve-form">
                    <div class="lg:col-span-10 mt-8">
                        <div class="bg-white dark:bg-slate-900 border-0 shadow rounded p-3">
                            <form action="#">
                                <div class="registration-form text-dark text-start">
                                    <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-6">
                                        <div class="filter-search-form relative filter-border">
                                            <i class="uil uil-briefcase-alt icons"></i>
                                            <input name="name" type="text" id="job-keyword"
                                                class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0"
                                                placeholder="Search your keaywords">
                                        </div>

                                        <div class="filter-search-form relative filter-border">
                                            <i class="uil uil-map-marker icons"></i>
                                            <select class="form-select" data-trigger name="choices-location"
                                                id="choices-location" aria-label="Default select example">
                                                <option value="AF">Afghanistan</option>
                                                <option value="AZ">Azerbaijan</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BH">Bahrain</option>
                                                <option value="CA">Canada</option>
                                                <option value="CV">Cape Verde</option>
                                                <option value="DK">Denmark</option>
                                                <option value="DJ">Djibouti</option>
                                                <option value="ER">Eritrea</option>
                                                <option value="EE">Estonia</option>
                                                <option value="GM">Gambia</option>
                                            </select>
                                        </div>

                                        <div class="filter-search-form relative filter-border">
                                            <i class="uil uil-briefcase-alt icons"></i>
                                            <select class="form-select" data-trigger name="choices-type" id="choices-type"
                                                aria-label="Default select example">
                                                <option selected="" value="1">Full Time</option>
                                                <option value="2">Part Time</option>
                                                <option value="3">Freelancer</option>
                                                <option value="4">Remote Work</option>
                                                <option value="5">Office Work</option>
                                            </select>
                                        </div>

                                        <input type="submit" id="search" name="search" style="height: 60px;"
                                            class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white searchbtn submit-btn w-100"
                                            value="Search">
                                    </div>
                                    <!--end grid-->
                                </div>
                                <!--end container-->
                            </form>
                        </div>
                    </div>
                    <!--ed col-->
                </div>
                <!--end grid-->

                <div class="mt-6">
                    <span class="text-slate-400"><span class="text-dark">Popular Searches :</span> Designer Developer Web
                        IOS PHP Senior Engineer</span>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="absolute inset-0 bg-indigo-600/5"></div>
        <ul class="circles p-0 mb-0">
            <li class="brand-img"><img src="assets/images/client/shree-logo.png" class="w-9 h-9" alt=""></li>
            <li class="brand-img"><img src="assets/images/client/skype.png" class="w-9 h-9" alt=""></li>
            <li class="brand-img"><img src="assets/images/client/snapchat.png" class="w-9 h-9" alt=""></li>
            <li class="brand-img"><img src="assets/images/client/spotify.png" class="w-9 h-9" alt=""></li>
            <li class="brand-img"><img src="assets/images/client/telegram.png" class="w-9 h-9" alt=""></li>
            <li class="brand-img"><img src="assets/images/client/whatsapp.png" class="w-9 h-9" alt=""></li>
            <li class="brand-img"><img src="assets/images/client/android.png" class="w-9 h-9" alt=""></li>
            <li class="brand-img"><img src="assets/images/client/facebook-logo-2019.png" class="w-9 h-9" alt="">
            </li>
            <li class="brand-img"><img src="assets/images/client/linkedin.png" class="w-9 h-9" alt=""></li>
            <li class="brand-img"><img src="assets/images/client/google-logo.png" class="w-9 h-9" alt=""></li>
        </ul>
    </section>
    <!--end section-->
    <div class="relative">
        <div class="absolute block w-full h-auto bottom-[25px] z-1 left-0">
            <a href=""><i
                    class="mdi mdi-arrow-down absolute top-0 left-0 right-0 text-center inline-flex items-center justify-center rounded-full bg-white dark:bg-slate-900 h-12 w-12 mx-auto shadow-md dark:shadow-gray-800"></i></a>
        </div>

        <div
            class="shape absolute right-0 sm:-bottom-px -bottom-[2px] left-0 overflow-hidden text-white dark:text-slate-900">
            <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- End Hero -->

    <!-- Start Section-->
    <section class="relative md:py-24 py-16">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 pb-8 items-end">
                <div class="lg:col-span-8 md:col-span-6 md:text-left text-center">
                    <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Search by
                        Categories</h3>
                    <p class="text-slate-400 max-w-xl">Search your career opportunity with our categories</p>
                </div>

                <div class="lg:col-span-4 md:col-span-6 md:text-right hidden md:block">
                    <a href=""
                        class="btn btn-link text-slate-400 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">All
                        Categories <i class="uil uil-arrow-right align-middle"></i></a>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="container">
            <div class="grid grid-cols-1 relative">
                <div class="tiny-five-item">
                    <div class="tiny-slide">
                        <div
                            class="px-3 py-10 rounded-md shadow dark:shadow-gray-800 group text-center bg-white dark:bg-slate-900 hover:bg-indigo-600/5 dark:hover:bg-indigo-600/5 transition duration-500 m-2">
                            <div
                                class="w-[84px] h-[84px] bg-indigo-600/5 group-hover:bg-indigo-600 text-indigo-600 group-hover:text-white rounded-full text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 transition duration-500 mx-auto">
                                <i class="uil uil-gitlab"></i>
                            </div>

                            <div class="content mt-6">
                                <a href="page-job-grid.html"
                                    class="title h5 text-lg font-medium hover:text-indigo-600">Business <br>
                                    Development</a>
                                <p class="text-slate-400 mt-3">74 Jobs</p>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div
                            class="px-3 py-10 rounded-md shadow dark:shadow-gray-800 group text-center bg-white dark:bg-slate-900 hover:bg-indigo-600/5 dark:hover:bg-indigo-600/5 transition duration-500 m-2">
                            <div
                                class="w-[84px] h-[84px] bg-indigo-600/5 group-hover:bg-indigo-600 text-indigo-600 group-hover:text-white rounded-full text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 transition duration-500 mx-auto">
                                <i class="uil uil-book-open"></i>
                            </div>

                            <div class="content mt-6">
                                <a href="page-job-grid.html"
                                    class="title h5 text-lg font-medium hover:text-indigo-600">Marketing & <br>
                                    Communication</a>
                                <p class="text-slate-400 mt-3">20 Jobs</p>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div
                            class="px-3 py-10 rounded-md shadow dark:shadow-gray-800 group text-center bg-white dark:bg-slate-900 hover:bg-indigo-600/5 dark:hover:bg-indigo-600/5 transition duration-500 m-2">
                            <div
                                class="w-[84px] h-[84px] bg-indigo-600/5 group-hover:bg-indigo-600 text-indigo-600 group-hover:text-white rounded-full text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 transition duration-500 mx-auto">
                                <i class="uil uil-chart-pie-alt"></i>
                            </div>

                            <div class="content mt-6">
                                <a href="page-job-grid.html"
                                    class="title h5 text-lg font-medium hover:text-indigo-600">Project <br> Management</a>
                                <p class="text-slate-400 mt-3">35 Jobs</p>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div
                            class="px-3 py-10 rounded-md shadow dark:shadow-gray-800 group text-center bg-white dark:bg-slate-900 hover:bg-indigo-600/5 dark:hover:bg-indigo-600/5 transition duration-500 m-2">
                            <div
                                class="w-[84px] h-[84px] bg-indigo-600/5 group-hover:bg-indigo-600 text-indigo-600 group-hover:text-white rounded-full text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 transition duration-500 mx-auto">
                                <i class="uil uil-feedback"></i>
                            </div>

                            <div class="content mt-6">
                                <a href="page-job-grid.html"
                                    class="title h5 text-lg font-medium hover:text-indigo-600">Customer <br> Service</a>
                                <p class="text-slate-400 mt-3">46 Jobs</p>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div
                            class="px-3 py-10 rounded-md shadow dark:shadow-gray-800 group text-center bg-white dark:bg-slate-900 hover:bg-indigo-600/5 dark:hover:bg-indigo-600/5 transition duration-500 m-2">
                            <div
                                class="w-[84px] h-[84px] bg-indigo-600/5 group-hover:bg-indigo-600 text-indigo-600 group-hover:text-white rounded-full text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 transition duration-500 mx-auto">
                                <i class="uil uil-presentation-line"></i>
                            </div>

                            <div class="content mt-6">
                                <a href="page-job-grid.html"
                                    class="title h5 text-lg font-medium hover:text-indigo-600">Software <br>
                                    Engineering</a>
                                <p class="text-slate-400 mt-3">60 Jobs</p>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div
                            class="px-3 py-10 rounded-md shadow dark:shadow-gray-800 group text-center bg-white dark:bg-slate-900 hover:bg-indigo-600/5 dark:hover:bg-indigo-600/5 transition duration-500 m-2">
                            <div
                                class="w-[84px] h-[84px] bg-indigo-600/5 group-hover:bg-indigo-600 text-indigo-600 group-hover:text-white rounded-full text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 transition duration-500 mx-auto">
                                <i class="uil uil-fire"></i>
                            </div>

                            <div class="content mt-6">
                                <a href="page-job-grid.html"
                                    class="title h5 text-lg font-medium hover:text-indigo-600">Human <br> Resources</a>
                                <p class="text-slate-400 mt-3">05 Jobs</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--grid-->

            <div class="grid md:grid-cols-12 grid-cols-1 md:hidden mt-8">
                <div class="md:col-span-12 text-center">
                    <a href=""
                        class="btn btn-link text-slate-400 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">All
                        Categories <i class="uil uil-arrow-right align-middle"></i></a>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End Section-->

    <!-- Start -->
    <section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="lg:col-span-5 md:col-span-6">
                    <div class="grid grid-cols-12 gap-6 items-center">
                        <div class="col-span-6">
                            <div class="grid grid-cols-1 gap-6">
                                <img src="assets/images/about/ab03.jpg" class="shadow rounded-md" alt="">
                                <img src="assets/images/about/ab02.jpg" class="shadow rounded-md" alt="">
                            </div>
                        </div>

                        <div class="col-span-6">
                            <div class="grid grid-cols-1 gap-6">
                                <img src="assets/images/about/ab01.jpg" class="shadow rounded-md" alt="">
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
    <!-- End -->

    <!-- Start -->
    <section class="relative md:py-24 py-16">
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Popular Jobs</h3>

                <p class="text-slate-400 max-w-xl mx-auto">Search all the open positions on the web. Get your own
                    personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
            </div>
            <!--end grid-->

            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                <div class="rounded-md shadow dark:shadow-gray-800">@section('customcss')
                    <link href="assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
                    <link href="assets/libs/choices.js/public/assets/styles/choices.min.css" rel="stylesheet">
                    
                    @endsection
                    
                    <div class="p-6">
                        <a href="page-job-detail.html"
                            class="title h5 text-lg font-semibold hover:text-indigo-600">Software Engineering</a>
                        <p class="text-slate-400 mt-2"><i class="uil uil-clock text-indigo-600"></i> Posted 3 Days ago</p>

                        <div class="flex justify-between items-center mt-4">
                            <span class="bg-indigo-600/5 text-indigo-600 text-xs font-bold px-2.5 py-0.5 rounded h-5">Full
                                Time</span>

                            <p class="text-slate-400"><i class="uil uil-usd-circle text-indigo-600"></i> $950 - $1100/mo
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center p-6 border-t border-gray-100 dark:border-gray-700">
                        <img src="assets/images/client/facebook-logo-2019.png"
                            class="h-12 w-12 shadow-md dark:shadow-gray-800 rounded-md p-2 bg-white dark:bg-slate-900"
                            alt="">

                        <div class="ml-3">
                            <h6 class="mb-0 font-semibold text-base">Facebook Ltd.</h6>
                            <span class="text-slate-400 text-sm">Australia</span>
                        </div>
                    </div>
                </div>

                <div class="rounded-md shadow dark:shadow-gray-800">
                    <div class="p-6">
                        <a href="page-job-detail.html" class="title h5 text-lg font-semibold hover:text-indigo-600">Web
                            Developer</a>
                        <p class="text-slate-400 mt-2"><i class="uil uil-clock text-indigo-600"></i> Posted 3 Days ago</p>

                        <div class="flex justify-between items-center mt-4">
                            <span
                                class="bg-indigo-600/5 text-indigo-600 text-xs font-bold px-2.5 py-0.5 rounded h-5">Remote</span>

                            <p class="text-slate-400"><i class="uil uil-usd-circle text-indigo-600"></i> $2500 - $2600/mo
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center p-6 border-t border-gray-100 dark:border-gray-700">
                        <img src="assets/images/client/google-logo.png"
                            class="h-12 w-12 shadow-md dark:shadow-gray-800 rounded-md p-2 bg-white dark:bg-slate-900"
                            alt="">

                        <div class="ml-3">
                            <h6 class="mb-0 font-semibold text-base">Google Ltd.</h6>
                            <span class="text-slate-400 text-sm">America</span>
                        </div>
                    </div>
                </div>

                <div class="rounded-md shadow dark:shadow-gray-800">
                    <div class="p-6">
                        <a href="page-job-detail.html" class="title h5 text-lg font-semibold hover:text-indigo-600">UX/UI
                            Designer</a>
                        <p class="text-slate-400 mt-2"><i class="uil uil-clock text-indigo-600"></i> Posted 3 Days ago</p>

                        <div class="flex justify-between items-center mt-4">
                            <span
                                class="bg-indigo-600/5 text-indigo-600 text-xs font-bold px-2.5 py-0.5 rounded h-5">Freelance</span>

                            <p class="text-slate-400"><i class="uil uil-usd-circle text-indigo-600"></i> $3500 - $3600/mo
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center p-6 border-t border-gray-100 dark:border-gray-700">
                        <img src="assets/images/client/linkedin.png"
                            class="h-12 w-12 shadow-md dark:shadow-gray-800 rounded-md p-2 bg-white dark:bg-slate-900"
                            alt="">

                        <div class="ml-3">
                            <h6 class="mb-0 font-semibold text-base">Linkedin Ltd.</h6>
                            <span class="text-slate-400 text-sm">Canada</span>
                        </div>
                    </div>
                </div>

                <div class="rounded-md shadow dark:shadow-gray-800">
                    <div class="p-6">
                        <a href="page-job-detail.html" class="title h5 text-lg font-semibold hover:text-indigo-600">Human
                            Resource(HR)</a>
                        <p class="text-slate-400 mt-2"><i class="uil uil-clock text-indigo-600"></i> Posted 3 Days ago</p>

                        <div class="flex justify-between items-center mt-4">
                            <span class="bg-indigo-600/5 text-indigo-600 text-xs font-bold px-2.5 py-0.5 rounded h-5">Part
                                Time</span>

                            <p class="text-slate-400"><i class="uil uil-usd-circle text-indigo-600"></i> $2000 - $2500/mo
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center p-6 border-t border-gray-100 dark:border-gray-700">
                        <img src="assets/images/client/skype.png"
                            class="h-12 w-12 shadow-md dark:shadow-gray-800 rounded-md p-2 bg-white dark:bg-slate-900"
                            alt="">

                        <div class="ml-3">
                            <h6 class="mb-0 font-semibold text-base">Skype Ltd.</h6>
                            <span class="text-slate-400 text-sm">UK</span>
                        </div>
                    </div>
                </div>

                <div class="rounded-md shadow dark:shadow-gray-800">
                    <div class="p-6">
                        <a href="page-job-detail.html" class="title h5 text-lg font-semibold hover:text-indigo-600">Web
                            Designer</a>
                        <p class="text-slate-400 mt-2"><i class="uil uil-clock text-indigo-600"></i> Posted 3 Days ago</p>

                        <div class="flex justify-between items-center mt-4">
                            <span class="bg-indigo-600/5 text-indigo-600 text-xs font-bold px-2.5 py-0.5 rounded h-5">Full
                                Time</span>

                            <p class="text-slate-400"><i class="uil uil-usd-circle text-indigo-600"></i> $1500 - $1600/mo
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center p-6 border-t border-gray-100 dark:border-gray-700">
                        <img src="assets/images/client/spotify.png"
                            class="h-12 w-12 shadow-md dark:shadow-gray-800 rounded-md p-2 bg-white dark:bg-slate-900"
                            alt="">

                        <div class="ml-3">
                            <h6 class="mb-0 font-semibold text-base">Spotify Ltd.</h6>
                            <span class="text-slate-400 text-sm">China</span>
                        </div>
                    </div>
                </div>

                <div class="rounded-md shadow dark:shadow-gray-800">
                    <div class="p-6">
                        <a href="page-job-detail.html"
                            class="title h5 text-lg font-semibold hover:text-indigo-600">Graphic Designer</a>
                        <p class="text-slate-400 mt-2"><i class="uil uil-clock text-indigo-600"></i> Posted 3 Days ago</p>

                        <div class="flex justify-between items-center mt-4">
                            <span class="bg-indigo-600/5 text-indigo-600 text-xs font-bold px-2.5 py-0.5 rounded h-5">Part
                                time</span>

                            <p class="text-slate-400"><i class="uil uil-usd-circle text-indigo-600"></i> $500 - $600/mo
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center p-6 border-t border-gray-100 dark:border-gray-700">
                        <img src="assets/images/client/telegram.png"
                            class="h-12 w-12 shadow-md dark:shadow-gray-800 rounded-md p-2 bg-white dark:bg-slate-900"
                            alt="">

                        <div class="ml-3">
                            <h6 class="mb-0 font-semibold text-base">Telegram Ltd.</h6>
                            <span class="text-slate-400 text-sm">India</span>
                        </div>
                    </div>
                </div>
            </div>
            <!--end grid-->

            <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
                <div class="md:col-span-12 text-center">
                    <a href="page-job-grid.html"
                        class="btn btn-link text-slate-400 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">See
                        More Jobs <i class="uil uil-arrow-right align-middle"></i></a>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="container md:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What Our Users Say
                </h3>

                <p class="text-slate-400 max-w-xl mx-auto">Search all the open positions on the web. Get your own
                    personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
            </div>
            <!--end grid-->

            <div class="grid grid-cols-1 mt-8">
                <div class="tiny-three-item">
                    <div class="tiny-slide text-center">
                        <div class="customer-testi">
                            <div
                                class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900">
                                <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                                <p class="text-slate-400">" It seems that only fragments of the original text remain in the
                                    Lorem Ipsum texts used today. "</p>
                                <ul class="list-none mb-0 text-amber-400 mt-3">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>

                            <div class="text-center mt-5">
                                <img src="assets/images/client/01.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto"
                                    alt="">
                                <h6 class="mt-2 font-semibold">Calvin Carlo</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide text-center">
                        <div class="customer-testi">
                            <div
                                class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900">
                                <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                                <p class="text-slate-400">" The most well-known dummy text is the 'Lorem Ipsum', which is
                                    said to have originated in the 16th century. "</p>
                                <ul class="list-none mb-0 text-amber-400 mt-3">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>

                            <div class="text-center mt-5">
                                <img src="assets/images/client/02.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto"
                                    alt="">
                                <h6 class="mt-2 font-semibold">Christa Smith</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide text-center">
                        <div class="customer-testi">
                            <div
                                class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900">
                                <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                                <p class="text-slate-400">" One disadvantage of Lorum Ipsum is that in Latin certain
                                    letters appear more frequently than others. "</p>
                                <ul class="list-none mb-0 text-amber-400 mt-3">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>

                            <div class="text-center mt-5">
                                <img src="assets/images/client/03.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto"
                                    alt="">
                                <h6 class="mt-2 font-semibold">Jemina CLone</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide text-center">
                        <div class="customer-testi">
                            <div
                                class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900">
                                <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                                <p class="text-slate-400">" Thus, Lorem Ipsum has only limited suitability as a visual
                                    filler for German texts. "</p>
                                <ul class="list-none mb-0 text-amber-400 mt-3">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>

                            <div class="text-center mt-5">
                                <img src="assets/images/client/04.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto"
                                    alt="">
                                <h6 class="mt-2 font-semibold">Smith Vodka</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide text-center">
                        <div class="customer-testi">
                            <div
                                class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900">
                                <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                                <p class="text-slate-400">" There is now an abundance of readable dummy texts. These are
                                    usually used when a text is required. "</p>
                                <ul class="list-none mb-0 text-amber-400 mt-3">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>

                            <div class="text-center mt-5">
                                <img src="assets/images/client/05.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto"
                                    alt="">
                                <h6 class="mt-2 font-semibold">Cristino Murfi</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide text-center">
                        <div class="customer-testi">
                            <div
                                class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900">
                                <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                                <p class="text-slate-400">" According to most sources, Lorum Ipsum can be traced back to a
                                    text composed by Cicero. "</p>
                                <ul class="list-none mb-0 text-amber-400 mt-3">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>

                            <div class="text-center mt-5">
                                <img src="assets/images/client/06.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto"
                                    alt="">
                                <h6 class="mt-2 font-semibold">Cristino Murfi</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="container md:mt-24 mt-16">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center">
                <div class="lg:col-span-5 md:col-span-6">
                    <img src="assets/images/illustrator/envelope.svg" class="mx-auto d-block" alt="">
                </div>

                <div class="lg:col-span-7 md:col-span-6">
                    <span class="bg-indigo-600/5 text-indigo-600 text-xs font-bold px-2.5 py-0.5 rounded h-5">Mobile
                        Apps</span>
                    <h4 class="md:text-3xl text-2xl lg:leading-normal leading-normal font-medium my-4">Available for your
                        <br> Smartphones</h4>
                    <p class="text-slate-400 max-w-xl mb-0">Search all the open positions on the web. Get your own
                        personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
                    <div class="my-5">
                        <a href=""><img src="assets/images/app/app.png" class="m-1 inline-block"
                                alt=""></a>

                        <a href=""><img src="assets/images/app/playstore.png" class="m-1 inline-block"
                                alt=""></a>
                    </div>

                    <div class="inline-block">
                        <div class="pt-4 flex items-center border-t border-gray-100 dark:border-gray-700">
                            <i data-feather="smartphone" class="mr-2 text-indigo-600 h-10 w-10"></i>
                            <div class="content">
                                <h6 class="mb-0 text-base font-medium">Install app now on your cellphones</h6>
                                <a href=""
                                    class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Learn
                                    More <i class="uil uil-angle-right-b"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end gird-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End -->

@endsection

@section('script')
<script src="assets/libs/tiny-slider/min/tiny-slider.js"></script>
<script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
<script src="assets/libs/feather-icons/feather.min.js"></script>
@endsection