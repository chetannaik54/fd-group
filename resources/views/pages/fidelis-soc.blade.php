@extends('pages.template.layout')

@section('content')

<section class="bg-white dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Framework</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-lg dark:text-gray-400">Fidelis helps you take control of your infrastructure support through a suite of SOC solutions
                designed to meet the specific needs of your technology environment and operational
                workflow. Whether we are supporting you from our 24x7 SOC locations or optimizing and
                designing your on-site SOCs, proactively monitoring, detecting, and measuring the service
                availability and performance of your infrastructure and support operations is key to high-quality
                support. Comprehensive network, server, and application monitoring and a powerful operational
                framework deliver detailed metrics and visibility, enabling our or your monitoring teams to react
                quickly and optimize for peak support execution.</p>

                <a href="{{ route('contact-us') }}" class="relative inline-flex items-center justify-center p-4 px-6 py-3 overflow-hidden font-medium text-indigo-600 transition duration-300 ease-out border-2 border-blue-500 rounded-full shadow-md group">
                    <span class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-blue-500 group-hover:translate-x-0 ease">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </span>
                    <span class="absolute flex items-center justify-center w-full h-full text-blue-500 transition-all duration-300 transform group-hover:translate-x-full ease">Get a free demo</span>
                    <span class="relative invisible">Get a free demo</span>
                </a>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="https://img.freepik.com/free-photo/standard-quality-control-collage_23-2149631017.jpg?w=1380&t=st=1673520477~exp=1673521077~hmac=b02cf081a84bc2bb1230b6661eeeb2dd88de400ff4b1fecfeb27bdd42dc217f2" alt="mockup">
        </div>
    </div>
</section>

<section class="bg-white dark:bg-gray-900">
    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
        <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">SOC Support</h2>
            <p class="mb-4">Need us anytime? Our SOC support services provide exactly the level
                of support you need—when you need it. Focus your attention and resources on revenue-
                generating projects and leave infrastructure monitoring and management to the team
                trusted by enterprises, communications service providers, and OEMs to deliver maximum
                uptime, availability, and performance.</p>
        </div>
        <div class="grid grid-cols-2 gap-4 mt-8">
            <img class="w-full rounded-lg" src="https://img.freepik.com/free-vector/people-with-mobile-phones-using-smart-voice-assistant-software-man-woman-near-screen-with-microphone-soundwaves-sound-recording-app-interface-ai-technology-concept_74855-10131.jpg?w=1060&t=st=1673520595~exp=1673521195~hmac=4d253d95779f97d8d262b3a2d1022913e2f0134e6e5cdf789573f7aeba7769d9" alt="office content 1">
            <img class="mt-4 w-full lg:mt-10 rounded-lg" src="https://img.freepik.com/free-vector/laptop-software-assisting-testing-process-tiny-people-testers-automated-testing-automotive-executed-test-software-auto-tester-concept_335657-2437.jpg?w=1380&t=st=1673520611~exp=1673521211~hmac=a46c2091563a89a6e1fe69e1d5ce610aecc2a3e7b3dec8c659971be46a180dbb" alt="office content 2">

        </div>
    </div>
</section>

<section class="bg-white dark:bg-gray-900">
    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
        <div class="grid grid-cols-2 gap-4 mt-8">
            <img class="w-full rounded-lg" src="https://img.freepik.com/free-vector/gradient-devops-illustration_23-2149370940.jpg?w=1380&t=st=1673520504~exp=1673521104~hmac=b8003437ef44ec07762ff88978823dd0b238c65246ae57a998afc87f9d498c20" alt="office content 1">
            <img class="mt-4 w-full lg:mt-10 rounded-lg" src="https://img.freepik.com/free-vector/flat-design-devops-illustration_52683-84086.jpg?w=826&t=st=1673520538~exp=1673521138~hmac=391d1fb9774869a5aefb1cc724fdbd0e09116971d264157d47fc8a619d88c5c7" alt="office content 2">
        </div>

        <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">SOC Operations Consulting</h2>
            <p class="mb-4">Setting-up a new SOC or optimizing an existing
                one? Our SOC experts assess support requirements, analyze gaps, and draw on
                operational best practices to provide tiered organization structures, define appropriate
                workflows, and provide full operational visibility into your infrastructure and support
                systems.</p>
        </div>
    </div>
</section>

<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
        <div class="max-w-screen-md mb-8 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">SOC Features</h2>
            <p class="text-gray-500 sm:text-lg dark:text-gray-400">SOC Structure</p>
        </div>
        <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-2 md:gap-12 md:space-y-0">

            <div>
                <video autoplay="true" loop muted controls="false">
                    <source src="https://cdniq.us1.myspdn.com/a4i5qqgqv1br8l4vvhe7ko2a7/wp-content/uploads/2021/01/oil-and-gas-industry-and-refinery-at-twilight.mp4" type="video/mp4">
                </video>

                <div>
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    </div>
                    <h3 class="mb-2 text-lg font-bold dark:text-white">Marketing</h3>
                    <p class="text-gray-500 dark:text-gray-400">Plan it, create it, launch it. Collaborate seamlessly with all  the organization and hit your marketing goals every month with our marketing plan.</p>
                </div>
                <div>
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path></svg>
                    </div>
                    <h3 class="mb-2 text-lg font-bold dark:text-white">Legal</h3>
                    <p class="text-gray-500 dark:text-gray-400">Protect your organization, devices and stay compliant with our structured workflows and custom permissions made for you.</p>
                </div>
            </div>

            <div>
                <div>
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path><path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"></path></svg>                    
                    </div>
                    <h3 class="mb-2 text-lg font-bold dark:text-white">Business Automation</h3>
                    <p class="text-gray-500 dark:text-gray-400">Auto-assign tasks, send Slack messages, and much more. Now power up with hundreds of new templates to help you get started.</p>
                </div>

                <div>
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path></svg>
                    </div>
                    <h3 class="mb-2 text-lg font-bold dark:text-white">Finance</h3>
                    <p class="text-gray-500 dark:text-gray-400">Audit-proof software built for critical financial operations like month-end close and quarterly budgeting.</p>
                </div>
                <div>
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>
                    </div>
                    <h3 class="mb-2 text-lg font-bold dark:text-white">Enterprise Design</h3>
                    <p class="text-gray-500 dark:text-gray-400">Craft beautiful, delightful experiences for both marketing and product with real cross-company collaboration.</p>
                </div>
                <div>
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
                    </div>
                    <h3 class="mb-2 text-lg font-bold dark:text-white">Operations</h3>
                    <p class="text-gray-500 dark:text-gray-400">Keep your company’s lights on with customizable, iterative, and structured workflows built for all efficient teams and individual.</p>
                </div>
            </div>

        </div>
    </div>
  </section>

  <section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
    <details>
        <summary>TL;DR</summary>
        <p>For Enterprises – Network, Compute, Databases, Storage, Applications, Service Desk, and Tier 1-3 Support</p>

        <p>For Service Providers - White-Label Support, Layer 0, 1, 2, 3 Technologies, SD-WAN, SDN, NFV, Carrier Support, Service Desk, and Tier 1-3 Support</p>

        <p>For OEM - White-Label Support, Optical, Ethernet, IP Technologies, SD-WAN, SDN, NFV, Span Management, Field Support, Product Support, Service Desk, Tier 1-3 Support</p>
    </details>
    </div>
  </section>

@endsection