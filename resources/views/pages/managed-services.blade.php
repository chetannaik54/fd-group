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
                <br>
                <a href="{{ route('contact-us') }}"
                    class="relative inline-flex items-center justify-center p-4 px-6 py-3 overflow-hidden font-medium text-indigo-600 transition duration-300 ease-out border-2 border-blue-500 rounded-full shadow-md group">
                    <span
                        class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-blue-500 group-hover:translate-x-0 ease">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </span>
                    <span
                        class="absolute flex items-center justify-center w-full h-full text-blue-500 transition-all duration-300 transform group-hover:translate-x-full ease">Get
                        a free demo</span>
                    <span class="relative invisible">Get a free demo</span>
                </a>
            </div>
            <div class="grid grid-rows-2 gap-4 mt-8 font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <p>Emerging Technology trends such as Automation, Social, Mobile, Analytics, Cloud, IoT, Cognitive Computing
                    and so forth are enabling new business opportunities and have an overbearing impact on efficient
                    business operations. Organizations are adapting to emerging digital technologies to facilitate
                    innovation in business models, remodel and improve business processes and empower their workforce and
                    consumers alike.</p>
                <p>A smart implementation of automated and agile IT Processes and infrastructure is the key to digital
                    efficiency and tactical growth. An ideal implementation focuses on the following considerations and
                    outcomes.</p>
                <img src="https://fidelisgroup.in/wp-content/uploads/2021/01/MSPAlliance-300x83.png" alt="">
            </div>
        </div>
    </section>

    <section>
        <div class="grid grid-cols-4 gap-4">
            <a href="#" class="relative block overflow-hidden rounded-lg border border-gray-100 p-8">
                <span
                    class="absolute inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>

                <div class="justify-between sm:flex">
                    <div>
                        <h3 class="text-xl font-bold text-gray-900">
                            Agile Implementations
                        </h3>
                    </div>

                    <div class="ml-3 hidden flex-shrink-0 sm:block">
                    </div>
                </div>

                <div class="mt-4 sm:pr-8">
                    <ul class="text-sm text-gray-500">
                        <li>1. Automation Solutions</li>
                        <li>2. Seamless Process Management</li>
                        <li>3. IT Operational Competency And Intelligence</li>
                        <li>4. Agile Systems</li>
                    </ul>
                </div>
            </a>
            <a href="#" class="relative block overflow-hidden rounded-lg border border-gray-100 p-8">
                <span
                    class="absolute inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>

                <div class="justify-between sm:flex">
                    <div>
                        <h3 class="text-xl font-bold text-gray-900">
                            Employee Efficiency
                        </h3>
                    </div>

                    <div class="ml-3 hidden flex-shrink-0 sm:block">
                    </div>
                </div>

                <div class="mt-4 sm:pr-8">
                    <ul class="text-sm text-gray-500">
                        <li>1. Enabling Modern Work Systems</li>
                        <li>2. Streamlined Collaboration</li>
                        <li>3. Mapping Employee Performance</li>
                        <li>4. Employee Retention</li>
                    </ul>
                </div>
            </a>

            <a href="#" class="relative block overflow-hidden rounded-lg border border-gray-100 p-8">
                <span
                    class="absolute inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>

                <div class="justify-between sm:flex">
                    <div>
                        <h3 class="text-xl font-bold text-gray-900">
                            Consumer Delight
                        </h3>
                    </div>

                    <div class="ml-3 hidden flex-shrink-0 sm:block">
                    </div>
                </div>

                <div class="mt-4 sm:pr-8">
                    <ul class="text-sm text-gray-500">
                        <li>1. Omnichannel Experience</li>
                        <li>2. Data Driven Analytics</li>
                        <li>3. Improved Consumer Loyalty</li>
                        <li>4. Efficient Customer Management </li>
                    </ul>
                </div>
            </a>

            <a href="#" class="relative block overflow-hidden rounded-lg border border-gray-100 p-8">
                <span
                    class="absolute inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>

                <div class="justify-between sm:flex">
                    <div>
                        <h3 class="text-xl font-bold text-gray-900">
                            Security
                        </h3>
                    </div>

                    <div class="ml-3 hidden flex-shrink-0 sm:block">
                    </div>
                </div>

                <div class="mt-4 sm:pr-8">
                    <ul class="text-sm text-gray-500">
                        <li>1. Real Time Risk Management</li>
                        <li>2. Secure Process Implementations</li>
                        <li>3. Brand Reputation Management</li>
                        <li>4. Threat Mapping & Mitigation</li>
                    </ul>
                </div>
            </a>

        </div>

        <p class="text-sm text-gray-500 pt-4">The complex nature of these processes, cost efficiency and the need to
            standardize these core business processes has led to enterprises today to opt for value oriented services and
            offload the burden of specific information technology operations to Managed Service Providers allowing them to
            seamlessly manage core business needs while they upscale resources, adapt to emerging technology trends and meet
            risk mitigation needs seamlessly.</p>
    </section>

    <section>
        <div class="mx-auto max-w-screen-xl px-4 pt-16 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-1 lg:gap-16">

                <div class="lg:pt-24">
                    <h2 class="text-3xl font-bold sm:text-4xl">DECODING Managed Services</h2>

                    <p class="mt-4 text-gray-600">The concept of managed services assumes a 360 Degrees responsibility to
                        streamline IT operational efficiency and proactively implement emerging trends, disruptive foresight
                        and actionable insights as a strategic partner to be future ready. The engagement model usually
                        combines long term strategy and is usually priced on a subscription, consumption and on site basis
                        model. Managed services include but are not limited to; security and compliance, data infrastructure
                        management, technology assets management and IT infrastructure management.</p>
                    <p class="mt-4 text-gray-600">Outsourcing to an experienced managed services company gives you the
                        required edge to run core processes with lesser interruptions from non-core underlying systems.</p>
                    <p class="mt-4 text-gray-600">Enterprises are now turning rapidly to Managed Service Providers (MSPs) to
                        manage service needs according to new market research and it is becoming a critical need for large
                        and medium modern companies for management of priority technology functionalities, particularly
                        business applications, storage, backup and recovery and data networking</p>

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
            </div>
        </div>
    </section>

    <section>
        <div class="mx-auto max-w-screen-xl px-4 pb-16 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-1 lg:gap-16">

                <div class="lg:pt-24">
                    <h2 class="text-right text-3xl font-bold sm:text-4xl">Leverage On Our Experience For Accelerated Results
                    </h2>

                    <p class="text-right mt-4 text-gray-600">At Fidelis Group, our future ready approach to managed services
                        enables spontaneous process adjustments & operational efficiency for all business aspects. We help
                        organizations upscale IT Infrastructure in terms of agility, performance and efficient use of time,
                        cost and resources. Our comprehensive and integrated solutions empower organizations to manage
                        distributed and Hybrid IT environments with a single point-of response. We leverage our industry
                        experience and strong resources to ensure a smooth transition, impactful decision making and
                        seamless technology transformation. Our competencies include design, development, and management of
                        exhaustive services that address all key components of your infrastructure and accommodates vast
                        requirements and budget components.</p>

                    <a href="#"
                        class="mt-8 inline-flex items-right rounded border border-indigo-600 bg-indigo-600 px-8 py-3 text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500 float-right	">
                        <span class="text-sm font-medium"> Get Started </span>

                        <svg class="ml-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
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
                <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">A Balanced Approach To Augment Tactical Growth</p>
            </div>
            <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
                <!-- Pricing Card -->
                <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white w-full">
                    <h3 class="mb-4 text-2xl font-semibold">IT Service Desk Management</h3>
                    <!-- List -->
                    <ul role="list" class="mb-8 space-y-4 text-left">
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>End To End Service Desk Management</span>
                        </li>
                    </ul>
                    <a href="{{ route('contact-us') }}"
                        class="relative inline-flex items-center justify-start py-3 pl-4 pr-12 overflow-hidden font-semibold text-indigo-600 transition-all duration-150 ease-in-out rounded hover:pl-10 hover:pr-6 bg-gray-50 group">
                        <span
                            class="absolute bottom-0 left-0 w-full h-1 transition-all duration-150 ease-in-out bg-indigo-600 group-hover:h-full"></span>
                        <span class="absolute right-0 pr-4 duration-200 ease-out group-hover:translate-x-12">
                            <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg></span>
                        <span
                            class="absolute left-0 pl-2.5 -translate-x-12 group-hover:translate-x-0 ease-out duration-200">
                            <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg></span>
                        <span
                            class="relative w-full text-left transition-colors duration-200 ease-in-out group-hover:text-white">Get
                            Started</span>
                    </a>
                </div>
                <!-- Pricing Card -->
                <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white w-full">
                    <h3 class="mb-4 text-2xl font-semibold">Data Center Management</h3>
                    <!-- List -->
                    <ul role="list" class="mb-8 space-y-4 text-left">
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Server</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Storage</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Backup & Recovery</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Virtualization</span>
                        </li>
                    </ul>
                    <a href="{{ route('contact-us') }}" class="relative inline-flex items-center justify-start py-3 pl-4 pr-12 overflow-hidden font-semibold text-indigo-600 transition-all duration-150 ease-in-out rounded hover:pl-10 hover:pr-6 bg-gray-50 group">
                        <span class="absolute bottom-0 left-0 w-full h-1 transition-all duration-150 ease-in-out bg-indigo-600 group-hover:h-full"></span>
                        <span class="absolute right-0 pr-4 duration-200 ease-out group-hover:translate-x-12">
                            <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg></span>
                        <span
                            class="absolute left-0 pl-2.5 -translate-x-12 group-hover:translate-x-0 ease-out duration-200">
                            <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg></span>
                        <span
                            class="relative w-full text-left transition-colors duration-200 ease-in-out group-hover:text-white">Get
                            Started</span>
                    </a>
                </div>
                <!-- Pricing Card -->
                <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white w-full">
                    <h3 class="mb-4 text-2xl font-semibold">Accelerate</h3>
                    <!-- List -->
                    <ul role="list" class="mb-8 space-y-4 text-left">
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Tactical</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Programs</span>
                        </li>

                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Training</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Strategy</span>
                        </li>
                    </ul>
                    <a href="{{ route('contact-us') }}"
                        class="relative inline-flex items-center justify-start py-3 pl-4 pr-12 overflow-hidden font-semibold text-indigo-600 transition-all duration-150 ease-in-out rounded hover:pl-10 hover:pr-6 bg-gray-50 group">
                        <span
                            class="absolute bottom-0 left-0 w-full h-1 transition-all duration-150 ease-in-out bg-indigo-600 group-hover:h-full"></span>
                        <span class="absolute right-0 pr-4 duration-200 ease-out group-hover:translate-x-12">
                            <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg></span>
                        <span
                            class="absolute left-0 pl-2.5 -translate-x-12 group-hover:translate-x-0 ease-out duration-200">
                            <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg></span>
                        <span
                            class="relative w-full text-left transition-colors duration-200 ease-in-out group-hover:text-white">Get
                            Started</span>
                    </a>
                </div>

                <div
                    class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white w-full">
                    <h3 class="mb-4 text-2xl font-semibold">Application Management</h3>
                    <!-- List -->
                    <ul role="list" class="mb-8 space-y-4 text-left">
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Map</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Performance</span>
                        </li>

                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Map Delivery</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Placements</span>
                        </li>
                    </ul>
                    <a href="{{ route('contact-us') }}"
                        class="relative inline-flex items-center justify-start py-3 pl-4 pr-12 overflow-hidden font-semibold text-indigo-600 transition-all duration-150 ease-in-out rounded hover:pl-10 hover:pr-6 bg-gray-50 group">
                        <span
                            class="absolute bottom-0 left-0 w-full h-1 transition-all duration-150 ease-in-out bg-indigo-600 group-hover:h-full"></span>
                        <span class="absolute right-0 pr-4 duration-200 ease-out group-hover:translate-x-12">
                            <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg></span>
                        <span
                            class="absolute left-0 pl-2.5 -translate-x-12 group-hover:translate-x-0 ease-out duration-200">
                            <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg></span>
                        <span
                            class="relative w-full text-left transition-colors duration-200 ease-in-out group-hover:text-white">Get
                            Started</span>
                    </a>
                </div>

                <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white w-full">
                    <h3 class="mb-4 text-2xl font-semibold">Network Management</h3>
                    <!-- List -->
                    <ul role="list" class="mb-8 space-y-4 text-left">
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Map</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Performance</span>
                        </li>

                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Map Delivery</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Placements</span>
                        </li>
                    </ul>
                    <a href="{{ route('contact-us') }}"
                        class="relative inline-flex items-center justify-start py-3 pl-4 pr-12 overflow-hidden font-semibold text-indigo-600 transition-all duration-150 ease-in-out rounded hover:pl-10 hover:pr-6 bg-gray-50 group">
                        <span
                            class="absolute bottom-0 left-0 w-full h-1 transition-all duration-150 ease-in-out bg-indigo-600 group-hover:h-full"></span>
                        <span class="absolute right-0 pr-4 duration-200 ease-out group-hover:translate-x-12">
                            <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg></span>
                        <span
                            class="absolute left-0 pl-2.5 -translate-x-12 group-hover:translate-x-0 ease-out duration-200">
                            <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg></span>
                        <span
                            class="relative w-full text-left transition-colors duration-200 ease-in-out group-hover:text-white">Get
                            Started</span>
                    </a>
                </div>

                <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white w-full">
                    <h3 class="mb-4 text-2xl font-semibold">End User Services</h3>
                    <!-- List -->
                    <ul role="list" class="mb-8 space-y-4 text-left">
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Map</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Performance</span>
                        </li>

                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Map Delivery</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Placements</span>
                        </li>
                    </ul>
                    <a href="{{ route('contact-us') }}"
                        class="relative inline-flex items-center justify-start py-3 pl-4 pr-12 overflow-hidden font-semibold text-indigo-600 transition-all duration-150 ease-in-out rounded hover:pl-10 hover:pr-6 bg-gray-50 group">
                        <span
                            class="absolute bottom-0 left-0 w-full h-1 transition-all duration-150 ease-in-out bg-indigo-600 group-hover:h-full"></span>
                        <span class="absolute right-0 pr-4 duration-200 ease-out group-hover:translate-x-12">
                            <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg></span>
                        <span
                            class="absolute left-0 pl-2.5 -translate-x-12 group-hover:translate-x-0 ease-out duration-200">
                            <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg></span>
                        <span
                            class="relative w-full text-left transition-colors duration-200 ease-in-out group-hover:text-white">Get
                            Started</span>
                    </a>
                </div>

                <div
                class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white w-full">
                <h3 class="mb-4 text-2xl font-semibold">Tools</h3>
                <!-- List -->
                <ul role="list" class="mb-8 space-y-4 text-left">
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>Map</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>Performance</span>
                    </li>

                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>Map Delivery</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>Placements</span>
                    </li>
                </ul>
                <a href="{{ route('contact-us') }}"
                    class="relative inline-flex items-center justify-start py-3 pl-4 pr-12 overflow-hidden font-semibold text-indigo-600 transition-all duration-150 ease-in-out rounded hover:pl-10 hover:pr-6 bg-gray-50 group">
                    <span
                        class="absolute bottom-0 left-0 w-full h-1 transition-all duration-150 ease-in-out bg-indigo-600 group-hover:h-full"></span>
                    <span class="absolute right-0 pr-4 duration-200 ease-out group-hover:translate-x-12">
                        <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg></span>
                    <span
                        class="absolute left-0 pl-2.5 -translate-x-12 group-hover:translate-x-0 ease-out duration-200">
                        <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg></span>
                    <span
                        class="relative w-full text-left transition-colors duration-200 ease-in-out group-hover:text-white">Get
                        Started</span>
                </a>
            </div>

            <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white w-full">
                <h3 class="mb-4 text-2xl font-semibold">Support</h3>
                <!-- List -->
                <ul role="list" class="mb-8 space-y-4 text-left">
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>Map</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>Performance</span>
                    </li>

                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>Map Delivery</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>Placements</span>
                    </li>
                </ul>
                <a href="{{ route('contact-us') }}"
                    class="relative inline-flex items-center justify-start py-3 pl-4 pr-12 overflow-hidden font-semibold text-indigo-600 transition-all duration-150 ease-in-out rounded hover:pl-10 hover:pr-6 bg-gray-50 group">
                    <span
                        class="absolute bottom-0 left-0 w-full h-1 transition-all duration-150 ease-in-out bg-indigo-600 group-hover:h-full"></span>
                    <span class="absolute right-0 pr-4 duration-200 ease-out group-hover:translate-x-12">
                        <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg></span>
                    <span
                        class="absolute left-0 pl-2.5 -translate-x-12 group-hover:translate-x-0 ease-out duration-200">
                        <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg></span>
                    <span
                        class="relative w-full text-left transition-colors duration-200 ease-in-out group-hover:text-white">Get
                        Started</span>
                </a>
            </div>

            <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white w-full">
                <h3 class="mb-4 text-2xl font-semibold">Platform</h3>
                <!-- List -->
                <ul role="list" class="mb-8 space-y-4 text-left">
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>Map</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>Performance</span>
                    </li>

                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>Map Delivery</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>Placements</span>
                    </li>
                </ul>
                <a href="{{ route('contact-us') }}"
                    class="relative inline-flex items-center justify-start py-3 pl-4 pr-12 overflow-hidden font-semibold text-indigo-600 transition-all duration-150 ease-in-out rounded hover:pl-10 hover:pr-6 bg-gray-50 group">
                    <span
                        class="absolute bottom-0 left-0 w-full h-1 transition-all duration-150 ease-in-out bg-indigo-600 group-hover:h-full"></span>
                    <span class="absolute right-0 pr-4 duration-200 ease-out group-hover:translate-x-12">
                        <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg></span>
                    <span
                        class="absolute left-0 pl-2.5 -translate-x-12 group-hover:translate-x-0 ease-out duration-200">
                        <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg></span>
                    <span
                        class="relative w-full text-left transition-colors duration-200 ease-in-out group-hover:text-white">Get
                        Started</span>
                </a>
            </div>

            </div>
        </div>
    </section>

    {{-- Logo --}}
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 lg:py-16 mx-auto max-w-screen-xl px-4">
            <h2
                class="mb-8 lg:mb-16 text-3xl font-extrabold tracking-tight leading-tight text-center text-gray-900 dark:text-white md:text-4xl">
                You???ll be in good company</h2>
            <div class="grid grid-cols-2 gap-8 text-gray-500 sm:gap-24 md:grid-cols-3 lg:grid-cols-6 dark:text-gray-400">
                @for ($i = 2; $i <= 7; $i++)
                    <a href="#" class="flex justify-center items-center">
                        <img src="https://fidelisgroup.in/wp-content/uploads/2020/10/Picture{{ $i }}.png"
                            alt="" style="width: 250px;">
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
                                <img alt="Dog" src="https://api.lorem.space/image/face?w=50&h=50"
                                    class="h-16 w-16 rounded-full object-cover" />

                                <div class="ml-4 text-sm">
                                    <p class="font-medium">Priyanka MR</p>
                                    <p class="mt-1">Head of Marketing</p>
                                </div>
                            </div>

                            <p class="relative mt-4 text-gray-500">
                                <span class="text-xl">&ldquo;</span>
                                Fidelis has been a wonderful company starting out. Several things worth pointing out are
                                within the overall atmosphere. Since Fidelis is in it's growth phase, it allows the
                                management team to easily help everyone get acquainted with the overall job feel. My fellow
                                team members and HR have been wonderful.
                                <span class="text-xl">&rdquo;</span>
                            </p>
                        </blockquote>
                    </div>

                    <div class="swiper-slide">
                        <blockquote class="bg-gray-100 p-8">
                            <div class="flex items-center">
                                <img alt="Dog" src="https://api.lorem.space/image/face?w=50&h=50"
                                    class="h-16 w-16 rounded-full object-cover" />

                                <div class="ml-4 text-sm">
                                    <p class="font-medium">Priyanka</p>
                                    <p class="mt-1">Head of Marketing</p>
                                </div>
                            </div>

                            <p class="relative mt-4 text-gray-500">
                                <span class="text-xl">&ldquo;</span>
                                Fidelis is fun place to work at, we don't miss celebration's and festivals. The hiring
                                process is easily streamlined. All expectations were made clear throughout the entire
                                process. Looking forward to many more years with this company
                                <span class="text-xl">&rdquo;</span>
                            </p>
                        </blockquote>
                    </div>

                    <div class="swiper-slide">
                        <blockquote class="bg-gray-100 p-8">
                            <div class="flex items-center">
                                <img alt="Dog" src="https://api.lorem.space/image/face?w=50&h=50"
                                    class="h-16 w-16 rounded-full object-cover" />

                                <div class="ml-4 text-sm">
                                    <p class="font-medium">Nilesh Goswami</p>
                                    <p class="mt-1"></p>
                                </div>
                            </div>

                            <p class="relative mt-4 text-gray-500">
                                <span class="text-xl">&ldquo;</span>
                                Close to nature, work culture is optimal for someone like me who came from Pune. People even
                                laugh at my Hindi jokes also. Supportive employer, creative environment and funny people
                                around you.
                                <span class="text-xl">&rdquo;</span>
                            </p>
                        </blockquote>
                    </div>

                    <div class="swiper-slide">
                        <blockquote class="bg-gray-100 p-8">
                            <div class="flex items-center">
                                <img alt="Dog" src="https://api.lorem.space/image/face?w=50&h=50"
                                    class="h-16 w-16 rounded-full object-cover" />

                                <div class="ml-4 text-sm">
                                    <p class="font-medium">Pradeep Raghavendra</p>
                                    <p class="mt-1"></p>
                                </div>
                            </div>

                            <p class="relative mt-4 text-gray-500">
                                <span class="text-xl">&ldquo;</span>
                                I think working at Fidelis Technology Services is worth for me, A Wonderful experience was
                                all the help i got from the management. Encouraging the employees to upscale the skills
                                which will be beneficial for one's individual for their career growth.
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
