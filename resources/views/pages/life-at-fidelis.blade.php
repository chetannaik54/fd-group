@extends('pages.template.layout')

@section('customcss')
{{-- <link href="assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
<link href="assets/libs/choices.js/public/assets/styles/choices.min.css" rel="stylesheet"> --}}
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
                                <img src="/assets/images/about/ab03.jpg" class="shadow rounded-md" alt="" data-aos="flip-left" data-aos-duration="1500">
                                <img src="/assets/images/about/ab02.jpg" class="shadow rounded-md" alt="" data-aos="flip-left" data-aos-duration="1500">
                            </div>
                        </div>

                        <div class="col-span-6">
                            <div class="grid grid-cols-1 gap-6">
                                <img src="/assets/images/about/ab01.jpg" class="shadow rounded-md" alt="" data-aos="flip-right" data-aos-duration="1500">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7 md:col-span-6">
                    <div class="lg:ml-5" data-aos="fade-down" data-aos-duration="1500">
                        <h3 class="mb-6 md:text-3xl text-2xl lg:leading-normal leading-normal font-medium">Accelerating Growth Through Tech At Fidelis</h3>

                        <p class="text-slate-400 mb-2">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind css html page.</p>
                        <p class="text-slate-400">It seems that only fragments of the original text remain in the
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
                            data-target="22000">1</span>+</h3>
                    <span class="counter-head font-semibold text-xl absolute top-2/4 left-0 right-0">Total User</span>
                </div>
                <!--end counter box-->

                <div class="counter-box relative text-center">
                    <h3 class="font-extrabold lg:text-[72px] text-[50px] opacity-5"><span class="counter-value"
                            data-target="1600">1</span>+</h3>
                    <span class="counter-head font-semibold text-xl absolute top-2/4 left-0 right-0">Years of
                        Experience</span>
                </div>
                <!--end counter box-->

                <div class="counter-box relative text-center">
                    <h3 class="font-extrabold lg:text-[72px] text-[50px] opacity-5"><span class="counter-value"
                            data-target="12">1</span></h3>
                    <span class="counter-head font-semibold text-xl absolute top-2/4 left-0 right-0">Offices in the
                        World</span>
                </div>
                <!--end counter box-->

                <div class="counter-box relative text-center">
                    <h3 class="font-extrabold lg:text-[72px] text-[50px] opacity-5"><span class="counter-value"
                            data-target="125">1</span>K</h3>
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
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Benefits</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for cloud requirement.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-12 md:grid-cols-12 grid-cols-1 mt-8 gap-[30px] items-center">
            <div class="lg:col-span-4 md:col-span-6 lg:order-1 order-2">
                <div class="grid grid-cols-1 gap-[30px]">
                    <div class="group flex transition-all duration-500 ease-in-out xl:p-3" data-aos="zoom-in-right" data-aos-duration="1500">
                        <div class="flex md:order-2 order-1 align-middle justify-center items-center w-14 h-14 mt-1 bg-indigo-600/5 group-hover:bg-indigo-600 group-hover:text-white text-indigo-600 rounded-full text-2xl shadow-sm dark:shadow-gray-800 transition-all duration-500 ease-in-out">
                            <lord-icon
                            src="https://cdn.lordicon.com/rjzlnunf.json"
                            trigger="hover"
                            style="width:32px;height:32px">
                        </lord-icon>
                        </div>
                        <div class="flex-1 md:order-1 order-2 md:text-right md:mr-4 md:ml-0 ml-4">
                            <h4 class="mb-0 text-lg font-medium">Gratuity</h4>
                            <p class="text-slate-400 mt-3">The only thing we are more passionate about after technology is our people! As an OG at Fidelis who has stayed with us for 5 (hi-five) years, we reward you with the Gratuity benefit. </p>
                        </div>
                    </div>
                    <!--end feature-->
                    
                    <div class="group flex transition-all duration-500 ease-in-out xl:p-3" data-aos="zoom-in-right" data-aos-duration="1500">
                        <div class="flex md:order-2 order-1 align-middle justify-center items-center w-14 h-14 mt-1 bg-indigo-600/5 group-hover:bg-indigo-600 group-hover:text-white text-indigo-600 rounded-full text-2xl shadow-sm dark:shadow-gray-800 transition-all duration-500 ease-in-out">
                            <lord-icon
                            src="https://cdn.lordicon.com/kbtmbyzy.json"
                            trigger="hover"
                            style="width:32px;height:32px">
                        </lord-icon>
                        
                        </div>
                        <div class="flex-1 md:order-1 order-2 md:text-right md:mr-4 md:ml-0 ml-4">
                            <h4 class="mb-0 text-lg font-medium">Health Insurance</h4>
                            <p class="text-slate-400 mt-3">Life speeds by daily. At Fidelis, we understand and are all in for the famous “Health is Wealth” quote. Fidelers will receive the best health insurance benefits for a long-term healthy life. </p>
                        </div>
                    </div>
                    <!--end feature-->
                    
                    <div class="group flex transition-all duration-500 ease-in-out xl:p-3" data-aos="zoom-in-right" data-aos-duration="1500">
                        <div class="flex md:order-2 order-1 align-middle justify-center items-center w-14 h-14 mt-1 bg-indigo-600/5 group-hover:bg-indigo-600 group-hover:text-white text-indigo-600 rounded-full text-2xl shadow-sm dark:shadow-gray-800 transition-all duration-500 ease-in-out">
                            <lord-icon
                            src="https://cdn.lordicon.com/nkmsrxys.json"
                            trigger="hover"
                            style="width:32px;height:32px">
                        </lord-icon>
                    </div>
                        <div class="flex-1 md:order-1 order-2 md:text-right md:mr-4 md:ml-0 ml-4">
                            <h4 class="mb-0 text-lg font-medium">Work From Home Options</h4>
                            <p class="text-slate-400 mt-3">In #workfromhome, we trust! The pandemic has brought us to the reality that working from home can be an option to be productive. At Fidelis, we provide flexible work hours and a hybrid mode.   </p>
                        </div>
                    </div>
                    <!--end feature-->

                    <div class="group flex transition-all duration-500 ease-in-out xl:p-3" data-aos="zoom-in-right" data-aos-duration="1500">
                        <div class="flex md:order-2 order-1 align-middle justify-center items-center w-14 h-14 mt-1 bg-indigo-600/5 group-hover:bg-indigo-600 group-hover:text-white text-indigo-600 rounded-full text-2xl shadow-sm dark:shadow-gray-800 transition-all duration-500 ease-in-out">
                            <lord-icon
                            src="https://cdn.lordicon.com/mdgrhyca.json"
                            trigger="hover"
                            style="width:32px;height:32px">
                        </lord-icon>
                                                </div>
                        <div class="flex-1 md:order-1 order-2 md:text-right md:mr-4 md:ml-0 ml-4">
                            <h4 class="mb-0 text-lg font-medium">Personal Accident Policy</h4>
                            <p class="text-slate-400 mt-3">You are our safety net, and we give you a hassle-free, frictionless Personal Accident Policy to cover sudden mishaps and medical expenses. With us, your health and growth are in safe hands.   </p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="lg:col-span-4 md:col-span-12 lg:mx-8 lg:order-2 order-1" >
                <img src="{{ asset('img/portrait-young-indian.png') }}" class="mx-auto" style="transform: scale(2.5);" alt="">
            </div>

            <div class="lg:col-span-4 md:col-span-6 order-3">
                <div class="grid grid-cols-1 gap-[30px]">
                    <div class="group flex transition-all duration-500 ease-in-out xl:p-3" data-aos="zoom-in-left" data-aos-duration="1500">
                        <div class="flex align-middle justify-center items-center w-14 h-14 mt-1 bg-indigo-600/5 group-hover:bg-indigo-600 group-hover:text-white text-indigo-600 rounded-full text-2xl shadow-sm dark:shadow-gray-800 transition-all duration-500 ease-in-out">
                            <lord-icon
                            src="https://cdn.lordicon.com/gqdnbnwt.json"
                            trigger="hover"
                            style="width:32px;height:32px">
                        </lord-icon>
                                                </div>
                        <div class="flex-1 ml-4">
                            <h4 class="mb-0 text-lg font-medium">Paid Maternity Leave</h4>
                            <p class="text-slate-400 mt-3">Mothers are true multitaskers, and we are always game for them. Being a newborn mother isn’t easy, and we understand its hassles. Hence, Fidelers provides you with leave of 26 weeks. We wish you a pleasant time.</p>
                        </div>
                    </div>
                    <!--end feature-->
                    
                    <div class="group flex transition-all duration-500 ease-in-out xl:p-3" data-aos="zoom-in-left" data-aos-duration="1500">
                        <div class="flex align-middle justify-center items-center w-14 h-14 mt-1 bg-indigo-600/5 group-hover:bg-indigo-600 group-hover:text-white text-indigo-600 rounded-full text-2xl shadow-sm dark:shadow-gray-800 transition-all duration-500 ease-in-out">
                            <lord-icon
                            src="https://cdn.lordicon.com/nocovwne.json"
                            trigger="hover"
                            style="width:32px;height:32px">
                        </lord-icon>
                        </div>
                        <div class="flex-1 ml-4">
                            <h4 class="mb-0 text-lg font-medium">Global Work Space</h4>
                            <p class="text-slate-400 mt-3">We are a global workspace that provides you with complete freedom to work in any setting, including cabins and bean bags. You get to decide. Get unlimited food, enjoy gaming in your spare time, and work in a welcoming environment. </p>
                        </div>
                    </div>
                    <!--end feature-->
                    
                    <div class="group flex transition-all duration-500 ease-in-out xl:p-3" data-aos="zoom-in-left" data-aos-duration="1500">
                        <div class="flex align-middle justify-center items-center w-14 h-14 mt-1 bg-indigo-600/5 group-hover:bg-indigo-600 group-hover:text-white text-indigo-600 rounded-full text-2xl shadow-sm dark:shadow-gray-800 transition-all duration-500 ease-in-out">
                            <lord-icon
                            src="https://cdn.lordicon.com/zpxybbhl.json"
                            trigger="hover"
                            style="width:32px;height:32px">
                        </lord-icon>
                                            </div>
                        <div class="flex-1 ml-4">
                            <h4 class="mb-0 text-lg font-medium">Paid Paternity Leave</h4>
                            <p class="text-slate-400 mt-3">Parenting together in the first days of your child’s birth is instrumental. We are aware of how crucial it is to determine family relations. We always stand by you and want you to be a fantastic dad in addition to being a super employee. </p>
                        </div>
                    </div>
                    <!--end feature-->

                    <div class="group flex transition-all duration-500 ease-in-out xl:p-3" data-aos="zoom-in-left" data-aos-duration="1500">
                        <div class="flex align-middle justify-center items-center w-14 h-14 mt-1 bg-indigo-600/5 group-hover:bg-indigo-600 group-hover:text-white text-indigo-600 rounded-full text-2xl shadow-sm dark:shadow-gray-800 transition-all duration-500 ease-in-out">
                            <lord-icon
                            src="https://cdn.lordicon.com/imamsnbq.json"
                            trigger="hover"
                            style="width:32px;height:32px">
                        </lord-icon>
                    </div>
                        <div class="flex-1 ml-4">
                            <h4 class="mb-0 text-lg font-medium">Employee Assistance Programme</h4>
                            <p class="text-slate-400 mt-3">Our employees are at the center of everything we do, that’s why we have tied up with Help.net – for all employee assistance programs from professional & personal assistance to mental well-being. </p>
                        </div>
                    </div>
                    <!--end feature-->

                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

<!-- Start -->
<section class="relative md:py-24 py-16" data-aos="fade-up"
data-aos-anchor-placement="center-bottom">
    <div class="container">
        <div class="grid grid-cols-1">
            <div class="rounded-md shadow dark:shadow-gray-800 overflow-hidden">
                <div class="md:flex items-center">
                    <div class="relative md:shrink-0">
                        <img src="https://images.pexels.com/photos/3756679/pexels-photo-3756679.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="h-full w-full object-cover lg:w-[500px] md:w-80 lg:h-full md:h-96" alt="">
                    </div>

                    <div class="p-8">
                        <div class="flex">
                            <div class="w-full">
                                <h2 class="text-3xl mb-2 font-bold">Life At Fidelis</h2>
                            </div>
                        </div>

                        <p class="text-gray-400 dark:text-white mt-6 hover:text-black">Making an impact is foundational to who we are at Fidelis. People, Performance, Perks. These are the foundational stones of Life At Fidelis. An inside look at our space, work, and camaraderie shows we are as cool a gig as it sounds. Over the years, we have tried to deconstruct the environment into a more work-life-positive, creativity-centered force for our employees. With around 1600+ Fidelis minds under our umbrella, we have implemented a structure and standard that ensures to help shape your professionalism, aspirations, and way of life.</p>
                        <p class="text-gray-400 dark:text-white mt-6 hover:text-black">Our founders knew our unique corporate culture would differentiate us and serve as a core for our success. Twenty-five years later, as we grow younger, through our professional & premium services, IoTs, etc. We are in for more adventures, prepare for the future, and most importantly, cultivate a healthy work and life.
                            <br>
                            Employees are the most prominent capital in every company. At Fidelis, we show how and why it is so. So listen, read, and get inspired by our very own Fidelers as they share their thoughts on an extraordinary journey.
                            
                            </p>

                    </div>
                </div><!--end flex-->
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section>

<section class="relative md:py-24 py-16" data-aos="fade-up"
data-aos-anchor-placement="center-bottom">
    <div class="container">
        <div class="grid grid-cols-1">
            <div class="rounded-md shadow dark:shadow-gray-800 overflow-hidden">
                <div class="md:flex items-center">
                    <div class="p-8">
                        <div class="flex">
                            <div class="w-full">
                                <h2 class="text-3xl mb-2 font-bold">Our Purpose are with Culture & Benefits</h2>
                            </div>
                        </div>

                        <p class="text-gray-400 dark:text-white mt-6 hover:text-black">We are a collection of creative, risk-taking, cooperative, diverse, and brilliant people who put other people’s needs first. We enjoy our work and overcome complex problems. <br>One of our key observations is that we respect the development and well-being of our personnel. Therefore, we offer our employees the support and help they need to plan for the future and adopt a healthy work-life balance.</p>
                        <p class="text-gray-400 dark:text-white mt-6 hover:text-black">We at NetConnect Global ensure to give our employees a dependable, compassionate, welcoming, enjoyable, and transformative environment that requires bold, self-assured leadership, and lots of room for networking and development. <br>Enjoy the various benefits in both your life and job environment. At Fidelis, we work as a flexible team who prioritizes both personal and professional space of our employees. Delve into the wide range of perks and benefits provided by us. #LifeAtNGC.</p>
                    </div>

                    <div class="relative md:shrink-0">
                        <img src="https://images.pexels.com/photos/927022/pexels-photo-927022.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="h-full w-full object-cover lg:w-[500px] md:w-80 lg:h-full md:h-96" alt="">
                    </div>

                </div><!--end flex-->
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section>

    <div class="bg-white mt-28">
        <div class="mx-auto max-w-7xl py-12 px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
          <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl" data-aos="fade-up-right">
            <span class="block">Ready to dive in?</span>
            <span class="block text-indigo-600">Start your free trial today.</span>
          </h2>
          <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0" data-aos="fade-up-left">
            <div class="inline-flex rounded-md shadow">
              <a href="#" class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-5 py-3 text-base font-medium text-white hover:bg-indigo-700">Find me a Job</a>
            </div>
            <div class="ml-3 inline-flex rounded-md shadow">
              <a href="#" class="inline-flex items-center justify-center rounded-md border border-transparent bg-white px-5 py-3 text-base font-medium text-indigo-600 hover:bg-indigo-50">Contact us</a>
            </div>
          </div>
        </div>
      </div>
      
     <div class="relative overflow-hidden bg-white">
        <div class="pt-16 pb-80 sm:pt-24 sm:pb-40 lg:pt-40 lg:pb-48">
          <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
            <div class="sm:max-w-lg" data-aos="fade-up-left">
              <h1 class="font text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Meet some of our Fidelers</h1>
              <p class="mt-4 text-xl text-gray-500">Employees are the most prominent capital in every company. At Fidelis, we show how and why it is so. So listen, read, and get inspired by our very own NCIans as they share their thoughts on an extraordinary journey.</p>
            </div>
            <div>
              <div class="mt-10">
                <!-- Decorative image grid -->
                <div aria-hidden="true" class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
                  <div class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                    <div class="flex items-center space-x-6 lg:space-x-8">
                      <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                        <div class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100" data-aos="flip-left">
                          <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-01.jpg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg" data-aos="flip-left">
                          <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-02.jpg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                      </div>
                      <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                        <div class="h-64 w-44 overflow-hidden rounded-lg" data-aos="flip-left">
                          <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-03.jpg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg" data-aos="flip-left">
                          <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-04.jpg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg" data-aos="flip-left">
                          <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-05.jpg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                      </div>
                      <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                        <div class="h-64 w-44 overflow-hidden rounded-lg" data-aos="flip-left">
                          <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-06.jpg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg" data-aos="flip-left">
                          <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-07.jpg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
      
                <a href="{{ route('about-us') }}" class="inline-block rounded-md border border-transparent bg-indigo-600 py-3 px-8 text-center font-medium text-white hover:bg-indigo-700">Know more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    
@endsection

@section('scripts')
{{-- <script src="assets/libs/tiny-slider/min/tiny-slider.js"></script>
<script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
<script src="assets/libs/feather-icons/feather.min.js"></script> --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();

    const counters = document.querySelectorAll('.counter-value');
    for (let n of counters) {
    const updateCount = () => {
        const target = +n.getAttribute('data-target');
        const count = +n.innerText;
        const divider = 5000;
        const speed = 500; // 1000 millisecond => 1 second;

        const inc = target / divider;

        if (count < target) {
            n.innerText = Math.ceil(count + inc);
            setTimeout(updateCount, speed);
        } else {
            n.innerText = target;
        }
    };

    updateCount();
}

  </script>
@endsection