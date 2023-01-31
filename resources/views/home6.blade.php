@extends('pages.template.layout2')

@section('customcss')
<style>
    #myVideo {
        width: 100vw;
        height: 100vh;
        object-fit: cover;
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        z-index: -1;
    }
    #home{
        position: relative;
  bottom: 0;
  /* background: rgba(0, 0, 0, 0.5); */
  width: 100%;
  padding: 20px;
    }
</style>
@endsection

@section('content')
<!-- Start Hero -->
  
<section class="relative table w-full py-36 lg:py-44 dark:bg-slate-800 bg-bottom" id="home">
    <video autoplay muted loop id="myVideo">
        <source src="/videos/pexels-pavel-danilyuk-5495781.mp4" type="video/mp4">
    </video>
    
    <div class="container">
        <div class="grid lg:grid-cols-12 md:grid-cols-2 mt-10 items-center gap-[30px]">
            <div class="lg:col-span-7">
                <span class=" text-indigo-600 text-xs font-bold px-2.5 py-0.5 rounded h-5"><img src="https://fidelisgroup.in/wp-content/uploads/2020/10/Fidelis-LOGO-250px-2.png" alt=""></span>

                <h4 class="text-white font-semibold lg:leading-normal leading-normal text-4xl lg:text-5xl mt-2 mb-5">Experience, <br> Expertise, Consulting</h4>
        
                <p class="text-slate-400 text-lg max-w-xl">Lorem ipsum Description</p>
            
                <div class="relative mt-10">
                    <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="btn btn-icon btn-lg bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full lightbox"><i class="mdi mdi-play text-xl align-middle"></i></a><small class="text-sm uppercase align-middle font-bold ml-2 text-white">Watch Now</small>
                </div>
            </div>

            <div class="lg:col-span-5">
                <div class="bg-white dark:bg-slate-900 rounded-xl shadow dark:shadow-gray-800 md:p-8 p-6 lg:ml-10 z-10 relative">
                    <h4 class="mb-5 text-2xl font-semibold">We are offering a special discount</h4>

                    <form>
                        <div class="grid grid-cols-1">
                            <div class="mb-5">
                                <label class="form-label font-medium">Your Name : <span class="text-red-600">*</span></label>
                                <div class="form-icon relative mt-2">
                                    <input type="text" class="form-input pl-2" placeholder="Name" name="name" required>
                                </div>
                            </div>

                            <div class="mb-5">
                                <label class="form-label font-medium">Your Email : <span class="text-red-600">*</span></label>
                                <div class="form-icon relative mt-2">
                                    <input type="email" class="form-input pl-2" placeholder="Email" name="email" required>
                                </div>
                            </div>

                            <div class="mb-5">
                                <label class="form-label font-medium">Phone No. : <span class="text-red-600">*</span></label>
                                <div class="form-icon relative mt-2">
                                    <input name="number" id="phNumber" class="form-input pl-2" placeholder="+12 12458 854" required>
                                </div>
                            </div>

                            <div>
                                <a href="" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full">Submit</a>
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
<section class="bg-white py-6 border-t border-b border-gray-100 dark:border-gray-700">
    <div class="container">
        <div class="owl-carousel" id="logo-slider">
            @for ($i = 2; $i <= 14; $i++)
                <div class="mx-auto py-1 item">
                    <img src="https://fidelisgroup.in/wp-content/uploads/2020/10/Picture{{ $i }}.png" class="h-14" alt="">
                </div>
            @endfor
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- Business Partner -->

<!-- Start Section-->
<section class="bg-white relative md:py-24 py-16">
    <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Features</h6>
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Business strategies and top <br> permormance ideas</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Fidelis that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-3 grid-cols-1 mt-8 gap-[30px]">
            <div class="group text-center">
                <div class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-lg rotate-[15deg] flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                    <i data-feather="pie-chart" class="w-7 h-7 -rotate-[15deg]"></i>
                </div>

                <div class="mt-8">
                    <a href="page-services.html" class="title h5 text-lg font-medium hover:text-indigo-600">Feature 1</a>

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
                    <a href="page-services.html" class="title h5 text-lg font-medium hover:text-indigo-600">Feature 2</a>

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
                    <a href="page-services.html" class="title h5 text-lg font-medium hover:text-indigo-600">Feature 3</a>

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
                    <a href="" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-3">Contact Now <i class="mdi mdi-chevron-right align-middle"></i></a>
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
                        <h4 class="mb-0 text-lg font-medium">Key Feature 1</h4>
                    </div>
                </div>
            </div>
            
            <div class="lg:col-span-4 md:col-span-6">
                <div class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                    <div class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                        <i data-feather="heart" class="h-5 w-5 rotate-45"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="mb-0 text-lg font-medium">Key Feature 2</h4>
                    </div>
                </div>
            </div>
            
            <div class="lg:col-span-4 md:col-span-6">
                <div class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                    <div class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                        <i data-feather="eye" class="h-5 w-5 rotate-45"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="mb-0 text-lg font-medium">Key Feature 3</h4>
                    </div>
                </div>
            </div>
            
            <div class="lg:col-span-4 md:col-span-6">
                <div class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                    <div class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                        <i data-feather="layout" class="h-5 w-5 rotate-45"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="mb-0 text-lg font-medium">Key Feature 4</h4>
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

<section class="bg-gray-100 rounded-lg">
    <div class="mx-auto px-4 py-16 sm:px-6 sm:py-24 lg:mr-0 lg:pl-8 lg:pr-0">
      <div class="grid grid-cols-1 gap-y-8 lg:grid-cols-3 lg:items-center lg:gap-x-16">
        <div class="max-w-xl text-center sm:text-left">
          <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">
            Don't just take our word for it...
            <br class="hidden sm:block lg:hidden" />Read reviews from our customers
          </h2>

          <br>
          <a class="text-white bg-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-sm text-sm px-5 py-2.5 text-center mr-2 mb-2" href="https://www.google.com/search?q=fidelisgroup&oq=fidelisgroup&aqs=chrome.0.69i59j0i10i512l3j69i60l4.1339j0j4&sourceid=chrome&ie=UTF-8#lrd=0x3bae144d4c124637:0xd8f52406eb1db9a6,3,,,," target="_blank">
            Give a review
          </a>
  
          <div class="hidden lg:mt-8 lg:flex lg:gap-4">
            <button class="prev-button rounded-full border border-orange-600 p-3 text-orange-600 hover:bg-orange-600 hover:text-white">
              <span class="sr-only">Previous Slide</span>
              <svg class="h-5 w-5 -rotate-180 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg"><path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" /></svg>
            </button>
  
            <button class="next-button rounded-full border border-orange-600 p-3 text-orange-600 hover:bg-orange-600 hover:text-white">
              <span class="sr-only">Next Slide</span>
              <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" /></svg>
            </button>
          </div>
        </div>
  
        <div class="-mx-6 lg:col-span-2 lg:mx-0">
          <div class=" !overflow-hidden">
            <div id="testimonial-carousel" class="owl-carousel">
              <div class="swiper-slide">
                <blockquote class="flex h-full flex-col justify-between bg-white p-12">
                  <div>
                    <div class="flex gap-0.5 text-orange-500">
                      <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>
  
                      <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>
  
                      <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>
  
                      <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>
  
                      <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>
                    </div>
  
                    <div class="mt-4">
                      <p class="text-2xl font-bold text-blue-600 sm:text-3xl">
                        Breview your thoughts
                      </p>
  
                      <p class="mt-4 leading-relaxed text-gray-500">
                        “Fidelis has been a wonderful company starting out. Several things worth pointing out are within the overall atmosphere. Since Fidelis is in it's growth phase, it allows the management team to easily help everyone get acquainted with the overall job feel. My fellow team members and HR have been wonderful. Fidelis is fun place to work at, we don't miss celebration's and festivals. The hiring process is easily streamlined. All expectations were made clear throughout the entire process. Looking forward to many more years with this company
                      </p>
                    </div>
                  </div>
  
                  <footer class="mt-8 text-sm text-gray-500">
                    &mdash; Priyanka MR
                  </footer>
                </blockquote>
              </div>

              <div class="swiper-slide">
                <blockquote class="flex h-full flex-col justify-between bg-white p-12">
                  <div>
                    <div class="flex gap-0.5 text-orange-500">
                      <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>
  
                      <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>
  
                      <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>
  
                      <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>
  
                      <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>
                    </div>
  
                    <div class="mt-4">
                      <p class="text-2xl font-bold text-blue-600 sm:text-3xl">
                        Good Work Life Balance
                      </p>
  
                      <p class="mt-4 leading-relaxed text-gray-500">
                        I must say you will get alot of opportunities to grow yourself here. Fidelis is a great organisation to work.
                        A dedicated team of HR personnel to assist in recruitment to IT,Non-IT, Retail and other Sector.
                        Awesome/Supportive Management and on Time salary. :)
                        Good Work Life Balance and No work Pressure.happy to work with fidelis
                      </p>
                    </div>
                  </div>
  
                  <footer class="mt-8 text-sm text-gray-500">
                    &mdash; Vasim Sutar
                  </footer>
                </blockquote>
              </div>
  
              <div class="swiper-slide">
                <blockquote class="flex h-full flex-col justify-between bg-white p-12">
                  <div>
                    <div class="flex gap-0.5 text-orange-500">
                      <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>
  
                      <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>
  
                      <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>
  
                      <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>
  
                      <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>
                    </div>
  
                    <div class="mt-4">
                      <p class="text-2xl font-bold text-blue-600 sm:text-3xl">
                        Stayin' Alive
                      </p>
  
                      <p class="mt-4 leading-relaxed text-gray-500">
                        Fidelis as given me an opportunity to start my career into this corporate world. Work culture and work environment over here in Fidelis is amazing
                      </p>
                    </div>
                  </div>
  
                  <footer class="mt-8 text-sm text-gray-500">
                    &mdash; Michael Scott
                  </footer>
                </blockquote>
              </div>

            </div>
          </div>
        </div>
      </div>
  
      <div class="mt-8 flex justify-center gap-4 lg:hidden">
        <button aria-label="Previous slide"
          class="prev-button rounded-full border border-pink-600 p-4 text-pink-600 hover:bg-pink-600 hover:text-white">
          <svg class="h-5 w-5 -rotate-180 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
          </svg>
        </button>
  
        <button aria-label="Next slide"
          class="next-button rounded-full border border-pink-600 p-4 text-pink-600 hover:bg-pink-600 hover:text-white">
          <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
          </svg>
        </button>
      </div>
    </div>
  </section>
<!-- End Section-->

@endsection

@section('script')
    <script src="assets/libs/tobii/js/tobii.min.js"></script>
    <script src="assets/libs/tiny-slider/min/tiny-slider.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/OwlCarousel/dist/assets/owl.carousel.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/OwlCarousel/dist/assets/owl.theme.default.min.css') }}">
    <script src="{{ asset('assets/OwlCarousel/dist/owl.carousel.min.js') }}"></script>
        <script>
            $(document).ready(function(){
                $('#logo-slider').owlCarousel({
                    loop:true,
                    lazyLoad:true,
                    margin:120,
                    responsiveClass:true,
                    dots: false,
                    nav: false,
                    autoplay:true,
                    autoplayTimeout:1000,
                    autoplayHoverPause:true,
                    responsive:{
                        600:{
                            items:3,
                            nav:false
                        },
                        1000:{
                            items:6,
                            nav:false,
                            loop:true
                        }
                    }
                });

                var owl = $('#testimonial-carousel');
                $(owl).owlCarousel({
                    loop:true,
                    lazyLoad:true,
                    margin:50,
                    responsiveClass:true,
                    autoplay:true,
                    autoplayTimeout:6000,
                    autoplayHoverPause:true,
                    items: 2,
                });


            });
        </script>

@endsection