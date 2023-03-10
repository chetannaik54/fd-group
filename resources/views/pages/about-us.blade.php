@extends('pages.template.layout') 
@section('customcss')
<style type="text/css">
    .team-container {
        display: flex;
        justify-content: center;
        width: 90%;
        max-width: 1440px;
        margin: 0 auto;
    }

    .section-heading {
        font-family: "Dancing Script", cursive;
        text-align: center;
        font-size: 64px;
        color: #000266;
        margin: 0 0 70px;
    }

    .profile {
        position: relative;
        transition: all 0.3s;
    }

    .profile:hover {
        transform: translateY(25px);
    }

    .profile img {
        max-width: 100%;
        border-radius: 50%;
        border: 5px solid #f7f7f7;
        filter: drop-shadow(-20px 0 10px rgba(0, 0, 0, 0.1));
        cursor: pointer;
    }

    .profile:not(:first-child) img {
        margin-left: -20px;
    }

    .profile .name {
        position: absolute;
        background-color: #000280;
        color: #fff;
        font-family: sans-serif;
        padding: 15px 30px;
        border-radius: 100px;
        bottom: -80px;
        left: 50%;
        white-space: nowrap;
        transform: translate(-50%, -50px);
        letter-spacing: 1px;
        font-size: 20px;
        opacity: 0;
        transition: all 0.3s;
    }

    .profile .name::before {
        content: "";
        position: absolute;
        width: 15px;
        height: 15px;
        background-color: #000280;
        top: 0;
        left: 50%;
        transform: translate(-50%, -50%) rotate(45deg);
    }

    .profile img:hover + .name {
        opacity: 1;
        transform: translateX(-50%);
        box-shadow: 0 10px 20px rgba(86, 86, 198, 0.3);
    }

    @-webkit-keyframes rotating /* Safari and Chrome */ {
  from {
    -webkit-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  to {
    -webkit-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes rotating {
  from {
    -ms-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -webkit-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  to {
    -ms-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
.rotating {
  -webkit-animation: rotating 15s linear infinite;
  -moz-animation: rotating 15s linear infinite;
  -ms-animation: rotating 15s linear infinite;
  -o-animation: rotating 15s linear infinite;
  animation: rotating 15s linear infinite;
}
</style>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

@endsection 
@section('content')
<section class="">
    <div class="mx-auto">
        <div class="mx-auto text-center">
            <h1 class="text-3xl font-extrabold sm:text-5xl">
                About
                <strong class="float-start font-extrabold text-orange-700 sm:block">
                    Fidelis Group.
                </strong>
            </h1>

            <p class="mt-4 sm:text-xl sm:leading-relaxed">
                Leading The Industry For Over A Decade, we have strived to build a better system of innovation, execution and sustained growth for our clients augmented by intellect, seamless solutions , research, collaboration, talent,
                industry and stakeholders.
            </p>

        </div>
    </div>
</section>

<section>
    <div class="max-w-screen-2xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-y-8 lg:grid-cols-2 lg:items-center lg:gap-x-16">
            <div class="mx-auto max-w-lg text-center lg:mx-0 lg:text-left">
                <h2 class="text-3xl font-bold sm:text-4xl"></h2>
                <iframe
                    width="560"
                    height="315"
                    src="https://www.youtube.com/embed/NaIoSNuC2_0"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                ></iframe>
            </div>

            <div class="grid grid-cols-2 gap-4 sm:grid-cols-3">
                <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring" href="{{ route('banking') }}">
                    <span class="inline-block rounded-lg bg-gray-50 p-3">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
                            ></path>
                        </svg>
                    </span>

                    <h2 class="mt-2 font-bold">Banking</h2>

                    <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                        Indian banking industry has recently witnessed the roll out of innovative banking models
                    </p>
                </a>

                <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring" href="{{ route('fintech') }}">
                    <span class="inline-block rounded-lg bg-gray-50 p-3">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
                            ></path>
                        </svg>
                    </span>

                    <h2 class="mt-2 font-bold">Fintech</h2>

                    <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                        FinTech is a rapidly evolving segment of the financial services sector
                    </p>
                </a>

                <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring" href="{{ route('healthcare') }}">
                    <span class="inline-block rounded-lg bg-gray-50 p-3">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
                            ></path>
                        </svg>
                    </span>

                    <h2 class="mt-2 font-bold">Healthcare</h2>

                    <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                        Medical services are one of the fields of business that fundamentally depends on IT
                    </p>
                </a>

                <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring" href="{{ route('manufacturing') }}">
                    <span class="inline-block rounded-lg bg-gray-50 p-3">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
                            ></path>
                        </svg>
                    </span>

                    <h2 class="mt-2 font-bold">Manufacturing</h2>

                    <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                        Manufacturing Industry in India has gone through various phases of development.
                    </p>
                </a>

                <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring" href="{{ route('enterprise-technology') }}">
                    <span class="inline-block rounded-lg bg-gray-50 p-3">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
                            ></path>
                        </svg>
                    </span>

                    <h2 class="mt-2 font-bold">Enterprise Technology</h2>

                    <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                        High Tech companies are transforming at a rapid pace. This change is enabled by embracing emerging technologies
                    </p>
                </a>

                <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring" href="{{ route('retail-&-ecommerce') }}">
                    <span class="inline-block rounded-lg bg-gray-50 p-3">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
                            ></path>
                        </svg>
                    </span>

                    <h2 class="mt-2 font-bold">Retail & E-commerce</h2>

                    <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                        The Retail market in India has undergone a major transformation and has witnessed.
                    </p>
                </a>
            </div>
        </div>
    </div>
</section>

<div class="grid grid-cols-3 gap-6">
    <article class="group">
        <lord-icon
            src="https://cdn.lordicon.com/flvisirw.json"
            trigger="loop"
            delay="2000"        
            class="h-56 w-56 rounded-xl object-cover transition group-hover:grayscale-[50%]"
            style="width:250px;height:250px">
        </lord-icon>
    
        <div class="p-4">
            <a href="#">
                <h3 class="text-lg font-medium text-gray-900">
                    Why Choose Us ?
                </h3>
            </a>

            <p class="mt-2 text-sm leading-relaxed text-gray-500 line-clamp-3">
                We have a proven process and track record across our clientele to help you move your business forward and augment your growth every step of the way.
            </p>
        </div>
    </article>

    <article class="group">
        <lord-icon
            src="https://cdn.lordicon.com/luglsinl.json"
            trigger="loop"
            delay="1000"
            class="h-56 w-56 rounded-xl object-cover transition group-hover:grayscale-[50%]"
            style="width:250px;height:250px">
        </lord-icon>


        <div class="p-4">
            <a href="#">
                <h3 class="text-lg font-medium text-gray-900">
                    What We Do
                </h3>
            </a>

            <p class="mt-2 text-sm leading-relaxed text-gray-500 line-clamp-3">
                We believe in accentuating future driven solutions across organizations and bring game changing insights to business processes and verticals.
            </p>
        </div>
    </article>

    <article class="group">
        <lord-icon
            src="https://cdn.lordicon.com/yifklmdo.json"
            trigger="loop"
            delay="2000"
            class="h-56 w-56 rounded-xl object-cover transition group-hover:grayscale-[50%]"
            style="width:250px;height:250px">
        </lord-icon>
    
        <div class="p-4">
            <a href="#">
                <h3 class="text-lg font-medium text-gray-900">
                    Who We Help?
                </h3>
            </a>

            <p class="mt-2 text-sm leading-relaxed text-gray-500 line-clamp-3">
                Our vertical solutions expertise allows your business to streamline workflow, and increase productivity across all channels.
            </p>
        </div>
    </article>
</div>

<!-- component -->
<section>
    <div class="bg-white text-gray-500 py-8">
        <div class="container mx-auto flex flex-col items-start md:flex-row my-12 md:my-24">
            <div class="flex flex-col w-full sticky md:top-36 lg:w-1/3 mt-2 md:mt-12 px-8">
                <p class="ml-2 text-blue-500 uppercase tracking-loose">Journey sofar</p>
                <p class="text-3xl md:text-4xl leading-normal md:leading-relaxed mb-2">Inspired. <br>  Fuelled. <br> Sustained</p>
                <p class="text-sm md:text-base text-gray-500 mb-4">
                    Since 2007, we have experienced and understood the growing part that solving real world problems plays in everyday life as we are spontaneously building on our heritage and business culture and reinventing ourselves just as the legendary phoenix bird always takes a new birth from its ashes to assume a new life.
                </p>
            </div>
            <div class="ml-0 md:ml-12 lg:w-2/3 sticky">
                <div class="container mx-auto w-full h-full">
                    <div class="relative wrap overflow-hidden p-10 h-full">
                        <div class="border-2-2 border-yellow-555 absolute h-full border" style="right: 50%; border: 2px solid #ffc100; border-radius: 1%;"></div>
                        <div class="border-2-2 border-yellow-555 absolute h-full border" style="left: 50%; border: 2px solid #ffc100; border-radius: 1%;"></div>
                        <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                            <div class="order-1 w-5/12"></div>
                            <div class="order-1 w-5/12 px-1 py-4 text-right">
                                <h4 class="mb-3 font-bold text-lg md:text-2xl">2007</h4>
                                <p class="text-sm md:text-base leading-snug text-gray-500 text-opacity-100">Fidelis started its journey in the name of Paylink Financial services as a payroll and accounts partner</p>
                                <p class="text-sm md:text-base leading-snug text-gray-500 text-opacity-100">We commenced our incredible journey with a core focus on payroll and accounts services under the able leadership of our CEO Subrahmanya. B.A.</p>
                            </div>
                        </div>
                        <div class="mb-8 flex justify-between items-center w-full right-timeline">
                            <div class="order-1 w-5/12"></div>
                            <div class="order-1 w-5/12 px-1 py-4 text-left">
                                <h4 class="mb-3 font-bold text-lg md:text-2xl">2010</h4>
                                <p class="text-sm md:text-base leading-snug text-gray-500 text-opacity-100">Captured 1st retail giant with 25 resources</p>
                                <p class="text-sm md:text-base leading-snug text-gray-500 text-opacity-100">In the year 2011 we forayed into large scale operations and captured our first retail client with staffing solutions</p>
                            </div>
                        </div>
                        <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                            <div class="order-1 w-5/12"></div>
                            <div class="order-1 w-5/12 px-1 py-4 text-right">
                                <h4 class="mb-3 font-bold text-lg md:text-2xl">2011</h4>
                                <p class="text-sm md:text-base leading-snug text-gray-500 text-opacity-100"><em>Fidelis Retail India Pvt Ltd</em> &#8211; a group company of fidelis group was formed to spread our wings towards Retail trade and business</p>
                                <p class="text-sm md:text-base leading-snug text-gray-500 text-opacity-100">In the year 2012 we entered the retail business space to create an impact and expand the scope of our services across the industry</p>
                            </div>
                        </div>

                        <div class="mb-8 flex justify-between items-center w-full right-timeline">
                            <div class="order-1 w-5/12"></div>

                            <div class="order-1 w-5/12 px-1 py-4">
                                <h4 class="mb-3 font-bold text-lg md:text-2xl text-left">2012</h4>
                                <p class="text-sm md:text-base leading-snug text-gray-500 text-opacity-100">Fidelis started its journey in the name of Paylink Financial services as a payroll and accounts partner</p>
                                <p class="text-sm md:text-base leading-snug text-gray-500 text-opacity-100">We commenced our incredible journey with a core focus on payroll and accounts services under the able leadership of our CEO Subrahmanya. B.A.</p>
                            </div>
                        </div>

                        <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                            <div class="order-1 w-5/12"></div>
                            <div class="order-1 w-5/12 px-1 py-4 text-right">
                                <h4 class="mb-3 font-bold text-lg md:text-2xl">2013</h4>
                                <p class="text-sm md:text-base leading-snug text-gray-500 text-opacity-100">Our first import of Antipasti from Italy &#8211; <em>a rare food collection in India</em></p>
                                <p class="text-sm md:text-base leading-snug text-gray-500 text-opacity-100">In the year 2013 we took a major stride in the international retail market by facilitating a major import of a rare food from Italy.</p>        
                            </div>
                        </div>
                        <div class="mb-8 flex justify-between items-center w-full right-timeline">
                            <div class="order-1 w-5/12"></div>
                            <div class="order-1 w-5/12 px-1 py-4 text-left">
                                <h4 class="mb-3 font-bold text-lg md:text-2xl">2014</h4>
                                <p class="text-sm md:text-base leading-snug text-gray-500 text-opacity-100">1. Reached a milestone of 500 resources <br>2. Started Skill Development Programme By Collaborating With NSDC</p>
                                <p class="text-sm md:text-base leading-snug text-gray-500 text-opacity-100">In the year 2014 we reached major milestones and emerged as key player for staffing solutions and forayed into the skill development space with a major government body liasion.</p>
                            </div>
                        </div>
                        <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                            <div class="order-1 w-5/12"></div>
                            <div class="order-1 w-5/12 px-1 py-4 text-right">
                                <h4 class="mb-3 font-bold text-lg md:text-2xl">2015</h4>
                                <p class="text-sm md:text-base leading-snug text-gray-500 text-opacity-100">In 2015 after an extensive market study, we decided to foray into into the IT Space and build on our competencies for a wide industry coverage</p>
                                <p class="text-sm md:text-base leading-snug text-gray-500 text-opacity-100">Fidelis was awarded a skill development project by name DDUGKY to set up training centers in rural places of Karnataka</p>
                            </div>
                        </div>

                        <div class="mb-8 flex justify-between items-center w-full right-timeline">
                            <div class="order-1 w-5/12"></div>

                            <div class="order-1 w-5/12 px-1 py-4">
                                <h4 class="mb-3 font-bold text-lg md:text-2xl text-left">2016</h4>
                                <p class="text-sm md:text-base leading-snug text-gray-500 text-opacity-100">Fidelis was awarded a skill development project by name DDUGKY to set up training centers in rural places of Karnataka</p>
                                <p class="text-sm md:text-base leading-snug text-gray-500 text-opacity-100">In the year 2016 we forayed into large scale skill development programs and implementations in association with government advisory for initiatives for rural areas.</p>
                            </div>
                        </div>

                        <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                            <div class="order-1 w-5/12"></div>
                            <div class="order-1 w-5/12 px-1 py-4 text-right">
                                <h4 class="mb-3 font-bold text-lg md:text-2xl">2017</h4>
                                <p class="text-sm md:text-base leading-snug text-gray-500 text-opacity-100">
                                    1. Branch office started in <em>Troy, Michigan-USA</em><br>
                                    2. Reached a milestone of 1000 employees
                                </p>
                                <p class="text-sm md:text-base leading-snug text-gray-500 text-opacity-100">
                                    In the year 2017, we set foot on international soil with a branch office in USA and a large team of employees to drive our work ahead.
                                </p>
                            </div>
                        </div>
                        <div class="mb-8 flex justify-between items-center w-full right-timeline">
                            <div class="order-1 w-5/12"></div>
                            <div class="order-1 w-5/12 px-1 py-4 text-left">
                                <h4 class="mb-3 font-bold text-lg md:text-2xl">2019</h4>
                                <p class="text-sm md:text-base leading-snug text-gray-500 text-opacity-100">
                                    In the year 2019 we set benchmarks and emerged as a powerful workforce as we reached a milestone of 2000 Employees
                                </p>
                            </div>
                        </div>
                        <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                            <div class="order-1 w-5/12"></div>
                            <div class="order-1 w-5/12 px-1 py-4 text-right">
                                <h4 class="mb-3 font-bold text-lg md:text-2xl">2020</h4>
                                <p class="text-sm md:text-base leading-snug text-gray-500 text-opacity-100">
                                    We spontaneously keep innovating and improve on our service delivery models as we at Fidelis reached a record of handling
                                </p>
                            </div>
                        </div>

                        <div class="mb-8 flex justify-between items-center w-full right-timeline">
                            <div class="order-1 w-5/12"><br> <br></div>
                        </div>

                    </div>
                    <img class="mx-auto -mt-36 md:-mt-36" src="https://user-images.githubusercontent.com/54521023/116968861-ef21a000-acd2-11eb-95ac-a34b5b490265.png" />
                </div>
            </div>
        </div>
    </div>
</section>

<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
            <h1 class="text-lg font-medium mb-4 text-gray-900 tracking-widest">Other TEAM members</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them.</p>
        </div>
        <div class="flex flex-wrap -m-4">
            
            <div class="p-4 lg:w-1/2" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                    <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="https://fidelisgroup.in/wp-content/uploads/2022/04/Subbu-1.png" />
                    <div class="flex-grow sm:pl-8">
                        <h2 class="title-font font-medium text-lg text-gray-900">Subrahmanya. B.A</h2>
                        <h3 class="text-gray-500 mb-3">Chief Executive Officer</h3>
                        <p class="mb-4">Subrahmanya is a first generation entrepreneur and industry veteran. CEO & Founder of Fidelis Group, he is the think tank to drive governance, growth and a bright future at Fidelis.</p>
                        <p class="mb-4">A visionary, he has nurtured strategic and decision driven growth at Fidelis Group to where we stand today as industry leaders. With expertise spanning 25 years in Payroll Management, Accounting Services, Staffing, Project Management & HR services and earlier stints with companies like TESCO & 3i Infotech; Subrahmanya is a MBA graduate from Adam Smith University, USA. He is passionate about automobiles & technology gadgets and an avid world explorer.</p>
                        <span class="inline-flex">
                            <a class="ml-2 text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="32px" height="32px"><path fill="#0078d4" d="M8.421,14h0.052l0,0C11.263,14,13,12,13,9.5C12.948,6.945,11.263,5,8.526,5S4,6.945,4,9.5	C4,12,5.736,14,8.421,14z M4,17h9v26H4V17z M44,26.5c0-5.247-4.253-9.5-9.5-9.5c-3.053,0-5.762,1.446-7.5,3.684V17h-9v26h9V28l0,0	c0-2.209,1.791-4,4-4s4,1.791,4,4v15h9C44,43,44,27.955,44,26.5z"/></svg>                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="p-4 lg:w-1/2" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2500">
                <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                    <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="https://fidelisgroup.in/wp-content/uploads/2022/04/Nagashree.png" />
                    <div class="flex-grow sm:pl-8">
                        <h2 class="title-font font-medium text-lg text-gray-900">Nagashree .S</h2>
                        <h3 class="text-gray-500 mb-3">Vice President ??? Finance & Accounts</h3>
                        <p class="mb-4">Nagashree is a key decision maker, an astute & detail oriented finance professional. Instrumental in driving growth and operation from our inception, she is the crucial, Finance & Accounts function for Fidelis. She has led and augmented robust & streamlined finance driven processes for the Fidelis Group. She effectively liaises with the auditors & is responsible for investments, cash & fund flow management.</p>
                        <p class="mb-4">A seasoned industry veteran bringing in an intellectual capital of over 13 years she is a commerce graduate from Bangalore University. While not brainstorming, travelling & watching thought provoking movies keep her motivated.</p>
                        <span class="inline-flex">
                            <a class="ml-2 text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="32px" height="32px"><path fill="#0078d4" d="M8.421,14h0.052l0,0C11.263,14,13,12,13,9.5C12.948,6.945,11.263,5,8.526,5S4,6.945,4,9.5	C4,12,5.736,14,8.421,14z M4,17h9v26H4V17z M44,26.5c0-5.247-4.253-9.5-9.5-9.5c-3.053,0-5.762,1.446-7.5,3.684V17h-9v26h9V28l0,0	c0-2.209,1.791-4,4-4s4,1.791,4,4v15h9C44,43,44,27.955,44,26.5z"/></svg>                            
                            </a>
                        </span>
                    </div>
                </div>
            </div>

            <div class="p-4 lg:w-1/2" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                    <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="https://fidelisgroup.in/wp-content/uploads/2022/04/Raghavendra.png" />
                    <div class="flex-grow sm:pl-8">
                        <h2 class="title-font font-medium text-lg text-gray-900">Raghavendra Mesta</h2>
                        <h3 class="text-gray-500 mb-3">Vice President - HR & Operations</h3>
                        <p class="mb-4">Raghavendra is a key force in the intellectual capital for Fidelis Group. A seasoned HR Professional he finds his passion in driving human capital at Fidelis Group. An operations expert he finds gratification in developing and implementing effective HR processes and systems to drive transformation across organizations we work with. </p>
                        <p class="mb-4">An ardent professional, Raghavendra earned his post-graduation in Commerce (M.com ??? Corporate Secretaryship) from Karnataka University and secured 3rd rank. He is an active participant in several HR professional networks in India and an active member of the Indian Staffing Federation.</p>
                        <span class="inline-flex">
                            <a class="ml-2 text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="32px" height="32px"><path fill="#0078d4" d="M8.421,14h0.052l0,0C11.263,14,13,12,13,9.5C12.948,6.945,11.263,5,8.526,5S4,6.945,4,9.5	C4,12,5.736,14,8.421,14z M4,17h9v26H4V17z M44,26.5c0-5.247-4.253-9.5-9.5-9.5c-3.053,0-5.762,1.446-7.5,3.684V17h-9v26h9V28l0,0	c0-2.209,1.791-4,4-4s4,1.791,4,4v15h9C44,43,44,27.955,44,26.5z"/></svg>                            
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="p-4 lg:w-1/2" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                    <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="https://fidelisgroup.in/wp-content/uploads/2022/04/Prasad.png" />
                    <div class="flex-grow sm:pl-8">
                        <h2 class="title-font font-medium text-lg text-gray-900">Raghavendra Prasad</h2>
                        <h3 class="text-gray-500 mb-3">Vice President - Sales</h3>
                        <p class="mb-4">With vast experience in sales and recruitment, Raghavendra is a leader with impressive business acumen and strategic skills in talent acquisition. With industry acumen of over 22 years gained in sales and business development, he has grown in the recruitment industry and works extensively in hiring talent for mid and senior levels.</p>
                        <p class="mb-4">Raghavendra???s expertise and proficiency has contributed extensively in Recruitment & Staffing solutions, Software product services, IT Training & Education. His fervour to start new ventures and initiatives have made him a mentor, who believes in the potential that resides in people and ways to harness that naturally.</p>
                        <span class="inline-flex">
                            <a class="ml-2 text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="32px" height="32px"><path fill="#0078d4" d="M8.421,14h0.052l0,0C11.263,14,13,12,13,9.5C12.948,6.945,11.263,5,8.526,5S4,6.945,4,9.5	C4,12,5.736,14,8.421,14z M4,17h9v26H4V17z M44,26.5c0-5.247-4.253-9.5-9.5-9.5c-3.053,0-5.762,1.446-7.5,3.684V17h-9v26h9V28l0,0	c0-2.209,1.791-4,4-4s4,1.791,4,4v15h9C44,43,44,27.955,44,26.5z"/></svg>                            
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Other team --}}
<section class="team">
    <h2 class="section-heading font-sans">Our Team</h2>
    <div class="team-container">
        <div class="profile" data-aos="fade-right" data-aos-offset="50" data-aos-easing="ease-in-sine">
            <img src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="" /><span class="name">Kalyan</span>
        </div>
        <div class="profile" data-aos="fade-right" data-aos-offset="100" data-aos-easing="ease-in-sine">
            <img src="https://images.unsplash.com/photo-1530577197743-7adf14294584?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=801&q=80" alt="" /><span class="name">Suchitra Tiwari</span>
        </div>
        <div class="profile" data-aos="fade-right" data-aos-offset="150" data-aos-easing="ease-in-sine">
            <img src="https://images.unsplash.com/photo-1598641795816-a84ac9eac40c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=801&q=80" alt="" /><span class="name">Sajid Ghani</span>
        </div>
        <div class="profile" data-aos="fade-right" data-aos-offset="200" data-aos-easing="ease-in-sine">
            <img src="https://images.unsplash.com/photo-1484186139897-d5fc6b908812?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="" /><span class="name">Dhriti</span>
        </div>
        <div class="profile" data-aos="fade-right" data-aos-offset="250" data-aos-easing="ease-in-sine">
            <img src="https://images.unsplash.com/photo-1618018352910-72bdafdc82a6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="" /><span class="name">Milind</span>
        </div>
        <div class="profile" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <img src="https://images.unsplash.com/photo-1529068755536-a5ade0dcb4e8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=801&q=80" alt="" /><span class="name">Srikant Tiwari</span>
        </div>
        <div class="profile" data-aos="fade-right" data-aos-offset="350" data-aos-easing="ease-in-sine">
            <img src="https://images.unsplash.com/photo-1485206412256-701ccc5b93ca?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=812&q=80" alt="" /><span class="name">Major Sameer</span>
        </div>
    </div>
</section>

<!-- Start -->
<section class="relative md:pb-24 pb-16">
    <div class="container lg:pt-24 pt-16">
        <div class="absolute inset-0 opacity-25 dark:opacity-50 bg-[url('../../assets/images/map.png')] bg-no-repeat bg-center"></div>
        <div class="relative grid grid-cols-1 pb-8 text-center z-1">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold text-black dark:text-white">
                We've Built This Site With Content Management In Mind.
            </h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div>
        <!--end grid-->

        <div class="relative grid md:grid-cols-3 grid-cols-1 items-center mt-8 gap-[30px] z-1">
            <div class="counter-box text-center">
                <h1 class="lg:text-5xl text-4xl font-semibold mb-2 text-slate-400 dark:text-white"><span class="counter-value" data-target="1548">1010</span>+</h1>
                <h5 class="counter-head text-lg font-medium">Properties Sell</h5>
            </div>
            <!--end counter box-->

            <div class="counter-box text-center">
                <h1 class="lg:text-5xl text-4xl font-semibold mb-2 text-slate-400 dark:text-white"><span class="counter-value" data-target="25">2</span>+</h1>
                <h5 class="counter-head text-lg font-medium">Award Gained</h5>
            </div>
            <!--end counter box-->

            <div class="counter-box text-center">
                <h1 class="lg:text-5xl text-4xl font-semibold mb-2 text-slate-400 dark:text-white"><span class="counter-value" data-target="9">0</span>+</h1>
                <h5 class="counter-head text-lg font-medium">Years Experience</h5>
            </div>
            <!--end counter box-->
        </div>
    </div>
    <!--end container-->

    <div class="container md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
            <div class="md:col-span-6">
                <div class="lg:mr-8">
                    <div class="relative">
                        <img src="/assets/images/it/about.jpg" class="rotating rounded-full shadow-lg dark:shadow-gray-800 w-[800px]" alt="" />

                        <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 mx-auto lg:w-72 w-56 lg:h-72 h-56 flex justify-center items-center bg-white dark:bg-slate-900 rounded-full shadow-lg dark:shadow-gray-800">
                            <div class="text-center">
                                <span class="text-indigo-600 text-2xl font-bold mb-0 block"><span class="counter-value text-6xl font-bold" data-target="15">15</span>+</span>
                                <span class="font-semibold block mt-2">
                                    Years <br />
                                    Experience
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="md:col-span-6">
                <div class="lg:ml-8"  data-aos="zoom-in-left" data-aos-easing="linear" data-aos-duration="500">
                    <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Fast & Effective</h6>
                    <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">
                        We're a global stakeholder <br />
                        relations and partnership <br />
                        building consultancy.
                    </h3>

                    <p class="text-slate-400 max-w-xl mb-6">
                        Get instant helpful resources about anything on the go, easily implement secure money transfer solutions, boost your daily efficiency, connect to other app users and create your own Techwind network, and much more
                        with just a few taps. commodo consequat. Duis aute irure.
                    </p>

                    <a href="{{ route('contact-us') }}" class="relative inline-flex items-center justify-start py-3 pl-4 pr-12 overflow-hidden font-semibold text-indigo-600 transition-all duration-150 ease-in-out rounded hover:pl-10 hover:pr-6 bg-gray-50 group">
                        <span class="absolute bottom-0 left-0 w-full h-1 transition-all duration-150 ease-in-out bg-indigo-600 group-hover:h-full"></span>
                        <span class="absolute right-0 pr-4 duration-200 ease-out group-hover:translate-x-12">
                            <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </span>
                        <span class="absolute left-0 pl-2.5 -translate-x-12 group-hover:translate-x-0 ease-out duration-200">
                            <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </span>
                        <span class="relative w-full text-left transition-colors duration-200 ease-in-out group-hover:text-white">Get Started</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--end container-->
</section>

<section class="bg-white dark:bg-gray-900">
    <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
        <img data-aos="fade-right" data-aos-duration="3000" class="w-full dark:hidden" src="https://images.pexels.com/photos/1181406/pexels-photo-1181406.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="dashboard image" />
        <div class="mt-4 md:mt-0">
            <h2 data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Missions</h2>
            <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400" data-aos="fade-up-left" data-aos-easing="linear" data-aos-duration="1500">
                To facilitate a better and sustained ???tomorrow??? for people and organizations we work with. Not only at work, but in life and to be recognized as the industry leader in all facets by nurturing customer engagement through
                accelerated solutions and processes, better return on investment and proven delivery models.
            </p>
            <a href="#" class="inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
                Get started
                <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    </div>

    <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
        <div class="mt-4 md:mt-0">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white" data-aos-easing="linear" data-aos-duration="1500">Visions</h2>
            <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400" data-aos="fade-up-left" data-aos-easing="linear" data-aos-duration="1500">
                Transform Fidelis into the premiere performance organization by creating benchmarks in execution, leadership, and become an industry leader by running key -business processes for our clients while they focus on their core
                operations.
            </p>
            <a href="#" class="inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
                Get started
                <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
        <img data-aos="fade-left" data-aos-duration="3000" class="w-full dark:hidden" src="https://images.pexels.com/photos/3782235/pexels-photo-3782235.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="dashboard image" />
    </div>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white" data-aos="flip-up" data-aos-duration="1500">
                Our Values
            </h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400" data-aos="flip-up" data-aos-duration="1500">
                Our values are the guiding principles upon which Fidelis Group was founded and how we strive to conduct our business across all verticals. Our Values establish foundation as we shape a thriving future. They determine how we
                go about working towards our growth across verticals. Our values are to:
            </p>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-2 md:gap-12 md:space-y-0">
                <div data-aos="zoom-in" data-aos-duration="1000">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                fill-rule="evenodd"
                                d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Commitment</h3>
                    <p class="text-gray-500 dark:text-gray-400">Be accountable, work together as a team and communicate clearly.</p>
                </div>  
                <div data-aos="zoom-in" data-aos-duration="1500">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"
                            ></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Innovation</h3>
                    <p class="text-gray-500 dark:text-gray-400">Think outside the box, challenge constructively and act proactively.</p>
                </div>
                <div data-aos="zoom-in" data-aos-duration="2000">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                fill-rule="evenodd"
                                d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                                clip-rule="evenodd"
                            ></path>
                            <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Community</h3>
                    <p class="text-gray-500 dark:text-gray-400">Creating a positive place to work and supporting ethical initiatives.</p>
                </div>
                <div data-aos="zoom-in" data-aos-duration="2500">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"
                            ></path>
                            <path
                                fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Excellence</h3>
                    <p class="text-gray-500 dark:text-gray-400">Always deliver exceptional value, accomplish goals and spontaneous improvement.</p>
                </div>
            </div>
        </div>
    </section>
</section>

<section>
    <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="[column-fill:_balance] sm:columns-2 sm:gap-6 lg:columns-3 lg:gap-8">
            <div class="mb-8 sm:break-inside-avoid" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                <blockquote class="rounded-xl bg-gray-50 p-6 shadow">
                    <p class="leading-relaxed text-gray-700">
                        Fidelis has been a wonderful company starting out. Several things worth pointing out are within the overall atmosphere. Since Fidelis is in it's growth phase, it allows the management team to easily help everyone get
                        acquainted with the overall job feel. My fellow team members and HR have been wonderful. Fidelis is fun place to work at, we don't miss celebration's and festivals. The hiring process is easily streamlined. All
                        expectations were made clear throughout the entire process. Looking forward to many more years with this company
                    </p>
                </blockquote>

                <div class="mt-4 flex items-center gap-4">
                    <img
                        alt="Woman"
                        src="https://images.unsplash.com/photo-1603366445787-09714680cbf1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=944&q=80"
                        class="h-12 w-12 rounded-full object-cover"
                    />

                    <div class="text-sm">
                        <p class="font-medium">Priyanka MR</p>
                        <p class="mt-1">Head of SEO</p>
                    </div>
                </div>
            </div>

            <div class="mb-8 sm:break-inside-avoid" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                <blockquote class="rounded-xl bg-gray-50 p-6 shadow">
                    <p class="leading-relaxed text-gray-700">
                        Working in Fidelis Technology services pvt ltd more than one year .Very good management and on Time salary.They do employees engagement activities for WFH Employees as well . always feel connected with company.
                        Flexible timings ,Good Work Life Balance and No work Pressure.happy to work with fidelis
                    </p>
                </blockquote>

                <div class="mt-4 flex items-center gap-4">
                    <img
                        alt="Woman"
                        src="https://images.unsplash.com/photo-1603366445787-09714680cbf1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=944&q=80"
                        class="h-12 w-12 rounded-full object-cover"
                    />

                    <div class="text-sm">
                        <p class="font-medium">Gladis Lennon</p>
                        <p class="mt-1">Head of SEO</p>
                    </div>
                </div>
            </div>

            <div class="mb-8 sm:break-inside-avoid" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                <blockquote class="rounded-xl bg-gray-50 p-6 shadow">
                    <p class="leading-relaxed text-gray-700">
                        Excellent work-life balance with top-notch benefits. The management really seems to care about their employees. You may have to work late/from home sometimes when the company needs you to, but that is balanced with
                        the ability to work from home when YOU need to; its a fair trade.??? The CEO truly cares about each individual, welcomes creativity, and leads by example
                    </p>
                </blockquote>

                <div class="mt-4 flex items-center gap-4">
                    <img
                        alt="Woman"
                        src="https://images.unsplash.com/photo-1603366445787-09714680cbf1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=944&q=80"
                        class="h-12 w-12 rounded-full object-cover"
                    />

                    <div class="text-sm">
                        <p class="font-medium">prashant kokane</p>
                        <p class="mt-1">Head of SEO</p>
                    </div>
                </div>
            </div>

            <div class="mb-8 sm:break-inside-avoid" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                <blockquote class="rounded-xl bg-gray-50 p-6 shadow">
                    <p class="leading-relaxed text-gray-700">
                        Got placed in HP. Good consultancy and people are friendly here. Job seekers should definitely try here once.
                    </p>
                </blockquote>

                <div class="mt-4 flex items-center gap-4">
                    <img
                        alt="Woman"
                        src="https://images.unsplash.com/photo-1603366445787-09714680cbf1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=944&q=80"
                        class="h-12 w-12 rounded-full object-cover"
                    />

                    <div class="text-sm">
                        <p class="font-medium">Gladis Lennon</p>
                        <p class="mt-1">Head of SEO</p>
                    </div>
                </div>
            </div>

            <div class="mb-8 sm:break-inside-avoid" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                <blockquote class="rounded-xl bg-gray-50 p-6 shadow">
                    <p class="leading-relaxed text-gray-700">
                        I went for HP interview here for L1 technical support job. The staff was very nice here. I had cleared the round here but did did not get the job. Even after this the staff there held me get interviews in other
                        companies that same position. The staff is very helpful, professional and punctual. The office is also well maintained and near to bus-stop. If you have the chance please use their resources to get jobs.
                    </p>
                </blockquote>

                <div class="mt-4 flex items-center gap-4">
                    <img
                        alt="Woman"
                        src="https://images.unsplash.com/photo-1603366445787-09714680cbf1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=944&q=80"
                        class="h-12 w-12 rounded-full object-cover"
                    />

                    <div class="text-sm">
                        <p class="font-medium">Gladis Lennon</p>
                        <p class="mt-1">Head of SEO</p>
                    </div>
                </div>
            </div>

            <div class="mb-8 sm:break-inside-avoid" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                <blockquote class="rounded-xl bg-gray-50 p-6 shadow">
                    <p class="leading-relaxed text-gray-700">
                        I went to this place sometime back to interview for HP on contract terms with fidelis. I was well received and the round in there was smooth. This place is also very accessible
                    </p>
                </blockquote>

                <div class="mt-4 flex items-center gap-4">
                    <img
                        alt="Woman"
                        src="https://images.unsplash.com/photo-1603366445787-09714680cbf1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=944&q=80"
                        class="h-12 w-12 rounded-full object-cover"
                    />

                    <div class="text-sm">
                        <p class="font-medium">Gladis Lennon</p>
                        <p class="mt-1">Head of SEO</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init();
  </script>
@endsection