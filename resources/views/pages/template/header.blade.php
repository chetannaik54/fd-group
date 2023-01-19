<!--Left Side Buttons Start-->
<div class="sticky-left-container">
    <ul class="sticky-left">
        <li>
            <a target="_blank" href="tel:+918041502234">
                <img width="32" height="32" title="" alt="" src="https://drive.google.com/uc?id=1yz1jMRdqLQWBx10eFLSWTMGWmKrL9sM6" />
                <p>Phone</p>
            </a>
        </li>
        <li>
            <a target="_blank" href="https://wa.me/+918041502234?text=� Hi, i wanted to know more about NOC. SOC software">
                <img width="32" height="32" title="" alt="" src="https://drive.google.com/uc?id=1ha6UAQlGBFXnExIXUMgs2l1QwUNgE09K" />
                <p>Whatsapp</p>
            </a>
        </li>
        <li>
            <a target="_blank" href="mailto:info@fidelisgroup.in">
                <img width="32" height="32" title="" alt="" src="https://drive.google.com/uc?id=1Jthmdc-CZpBoymeHEW06x9OTj8_lW7gM" />
                <p>Email</p>
            </a>
        </li>
    </ul>
</div>
<!--Left Side Buttons End-->

<header aria-label="Site Header" class="bg-white border-gray-100 sticky top-0 shadow-lg z-[99999]">
    <div class="mx-auto flex h-16 max-w-screen-2xl items-center justify-between sm:px-6 lg:px-8">
        <div class="flex items-center">
            <button type="button" class="p-2 sm:mr-4 lg:hidden">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <a href="#" class="flex">
                <span class="sr-only">Logo</span>
                <span class="inline-block h-10 w-32 rounded-lg bg-gray-200"> {{-- <img src="https://fidelisgroup.in/wp-content/uploads/2020/10/Fidelis-LOGO-250px-2.png" alt="" class="w-36" /> --}} </span>
            </a>
        </div>

        <div class="flex flex-1 items-center justify-end">
            <nav aria-label="Site Nav" class="hidden lg:flex lg:gap-9 lg:text-xs lg:font-bold lg:uppercase lg:tracking-wide lg:text-gray-500">
                <a href="{{ route('about-us') }}" class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-orange-700">About us</a>

                <a id="mega-menu-full-dropdown-button" data-collapse-toggle="mega-menu-full-dropdown" class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-orange-700">Solutions </a>

                <a id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-orange-700">Industries</a>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600 w-[250px]">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                        <li>
                            <a href="{{ route('banking') }}" class="block px-4 py-2 hover:bg-blue-100 dark:hover:bg-gray-600 dark:hover:text-white">Banking</a>
                        </li>
                        <li>
                            <a href="{{ route('fintech') }}" class="block px-4 py-2 hover:bg-blue-100 dark:hover:bg-gray-600 dark:hover:text-white">Fintech</a>
                        </li>
                        <li>
                            <a href="{{ route('healthcare') }}" class="block px-4 py-2 hover:bg-blue-100 dark:hover:bg-gray-600 dark:hover:text-white">Healthcare</a>
                        </li>
                        <li>
                            <a href="{{ route('manufacturing') }}" class="block px-4 py-2 hover:bg-blue-100 dark:hover:bg-gray-600 dark:hover:text-white">Manufacturing</a>
                        </li>
                        <li>
                            <a href="{{ route('enterprise-technology') }}" class="block px-4 py-2 hover:bg-blue-100 dark:hover:bg-gray-600 dark:hover:text-white">Enterprise Technology</a>
                        </li>
                        <li>
                            <a href="{{ route('retail-&-ecommerce') }}" class="block px-4 py-2 hover:bg-blue-100 dark:hover:bg-gray-600 dark:hover:text-white">Retail & E-commerce</a>
                        </li>
                    </ul>
                </div>

                <a href="{{ route('case-studies') }}" class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-orange-700">
                    Case Studies
                </a>

                <a id="careerdropdownNavbarLink" data-dropdown-toggle="careerdropdownNavbar" href="#" class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-orange-700"> Careers </a>
                <div id="careerdropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                        <li>
                            <a href="{{ route('life-fidelis') }}" class="block px-4 py-2 hover:bg-blue-100 dark:hover:bg-gray-600 dark:hover:text-white">Our Culture</a>
                        </li>
                        <li>
                            <a href="{{ route('careers') }}" class="block px-4 py-2 hover:bg-blue-100 dark:hover:bg-gray-600 dark:hover:text-white">Jobs at Fidelis</a>
                        </li>
                        <li>
                            <a href="{{ route('refer-candidate') }}" class="block px-4 py-2 hover:bg-blue-100 dark:hover:bg-gray-600 dark:hover:text-white">Refer a candidate</a>
                        </li>
                    </ul>
                </div>

                <a href="{{ route('blogs') }}" class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-orange-700"> Blogs</a>

                <a href="{{ route('contact-us') }}" class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-orange-700">Contact </a>

                <a
                    class="bg-orange-600 px-5 text-sm font-medium text-white shadow hover:bg-gradient-to-r hover:from-orange-500 hover:to-orange-400 hover:ring-2 hover:ring-offset-2 hover:ring-orange-400 transition-all ease-out duration-300 block h-16 border-b-4 border-transparent leading-[4rem]"
                    href="{{ route('contact-us') }}"
                >
                    Get a free demo
                </a>
            </nav>

            <div class="ml-8 flex items-center">
                <div class="flex items-center divide-x divide-gray-100 border-x border-gray-100">
                    <span x-data="{ open: false }" @mouseleave="open = false">
                        <a @mouseover="open = true" class="block border-b-4 border-transparent p-3 hover:border-orange-700">
                            <lord-icon src="https://cdn.lordicon.com/oqhlhtfq.json" trigger="hover" colors="primary:#4bb3fd,secondary:#ebe6ef" state="hover-2" style="width: 32px; height: 32px;"></lord-icon>
                            <span class="sr-only">Cart</span>
                        </a>
                        <div x-show="open" class="absolute right-0 w-48 py-2 mt-2 bg-gray-100 rounded-md shadow-xl">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-400 hover:text-white"> Dropdown List 1 </a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-400 hover:text-white"> Dropdown List 2 </a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-400 hover:text-white"> Dropdown List 3 </a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-400 hover:text-white"> Dropdown List 4 </a>
                        </div>
                    </span>

                    <span>
                        <a href="/account" class="block border-b-4 border-transparent p-3 hover:border-orange-700">
                            <lord-icon src="https://cdn.lordicon.com/ajkxzzfb.json" trigger="hover" style="width: 32px; height: 32px;"></lord-icon>
                            <span class="sr-only"> Account </span>
                        </a>
                    </span>

                    <span class="hidden sm:block">
                        <a href="/search" class="block border-b-4 border-transparent p-3 hover:border-orange-700">
                            <lord-icon src="https://cdn.lordicon.com/osbjlbsb.json" trigger="hover" style="width: 32px; height: 32px;"></lord-icon>
                            <span class="sr-only"> Search </span>
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>

{{-- Mega Menu --}}
<nav class="bg-white border-gray-200 dark:border-gray-600 dark:bg-gray-900">
    <div id="mega-menu-full-dropdown" class="mt-1 bg-white border-gray-200 shadow-sm border-y dark:bg-gray-800 dark:border-gray-600 hidden">
        <div class="grid px-4 py-5 mx-auto text-gray-900 dark:text-white sm:grid-cols-3 md:grid-cols-6 md:px-6">
            <ul aria-labelledby="mega-menu-full-dropdown-button">
                <li class="font-extrabold underline px-3">Business Process</li>
                <li>
                    <a href="{{ route('robotic-process-automation') }}" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Robotic Process Automation</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">With businesses today adopting more automation to accelerate their productivity</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('business-process-management-automation') }}" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Business Process Management And Automation</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">With businesses today digitally transforming internal and external processes in order to accelerate their productivity</span>
                    </a>
                </li>
            </ul>

            <ul aria-labelledby="mega-menu-full-dropdown-button">
                <li class="font-extrabold underline px-3">Information Management</li>
                <li>
                    <a href="{{ route('business-intelligence-analytical-services') }}" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Business Intelligence And Analytical Services</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">Business intelligence and insights for customers, boost revenue, enhance margins and gain momentum</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('database-storage-admin') }}" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Database And Storage Admin</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">Business performance and efficiency with complex data portfolios and business intelligence led decision making</span>
                    </a>
                </li>
            </ul>

            <ul class="hidden md:block">
                <li class="font-extrabold underline px-3">Platform And Infrastructure</li>
                <li>
                    <a href="{{ route('cloud-computing') }}" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Cloud Computing</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('it-&-infra-management') }}" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">IT And Infra Management</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('data-center-enablement') }}" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Data Center Enablement</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                    </a>
                </li>
            </ul>

            <ul class="hidden md:block">
                <li class="font-extrabold underline px-3">Staffing solutions</li>
                <li>
                    <a href="{{ route('contingent-staffing') }}" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Contigent Staffing</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('msp-parternship') }}" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">MSP Partnerships</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('short-term-engagement') }}" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Short term engagement</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('talent-kloud') }}" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Talent Kloud</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('compliance') }}" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Compliance</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                    </a>
                </li>
            </ul>

            <ul>
                <li class="font-extrabold underline px-3">Applications</li>
                <li>
                    <a href="{{ route('application-development') }}" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Application Development</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">Staying on top of the line, state of the art architecture and leveraging next generation technologies.</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('erp-application-development-services') }}" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">ERP Application Management Services</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">Making a shift towards digital ecosystems & progressive partnerships, solutions.</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('application-management') }}" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Application Management</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">Shift towards digital ecosystems & progressive partnerships, solutions.</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('application-QA-&-validation') }}" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Applications QA And Validation</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">Cost arbitrage and value proposition solutions.</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('devops-advisory') }}" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Devops Advisory</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">Structured to help clients streamline business processes, development and operation teams</span>
                    </a>
                </li>
            </ul>

            <ul class="hidden md:block">
                <li>
                    <a href="{{ route('managed-services') }}" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Managed Services</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('learning-academy') }}" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Learning Academy</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@if (Route::is('index')) @else
<div class="flowheader magazine-banner">
    <!--Content before waves-->

    <div class="shapeshifter"></div>

    <div class="inner-header banner-heading flex-container">
        <h1 style="font-size: 40px; text-transform: uppercase;">{{ str_replace('-', ' ', Route::currentRouteName()) }}</h1>
        <p><a class="color-white" href="{{ route('index') }}">Home</a> » {{ str_replace('-', ' ', Route::currentRouteName()) }}</p>
    </div>

    <!--Waves Container-->
    <div>
        <svg class="waves" shape-rendering="auto" preserveAspectRatio="none" viewBox="0 24 150 28" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs>
                <path id="a" d="m-160 44c30 0 58-18 88-18s58 18 88 18 58-18 88-18 58 18 88 18v44h-352z" />
            </defs>
            <g class="parallax">
                <use x="48" fill="rgba(255,255,255,0.7" xlink:href="#a" />
                <use x="48" y="3" fill="rgba(255,255,255,0.5)" xlink:href="#a" />
                <use x="48" y="5" fill="rgba(255,255,255,0.3)" xlink:href="#a" />
                <use x="48" y="7" fill="#fff" xlink:href="#a" />
            </g>
        </svg>
    </div>
    <!--Waves end-->
</div>
@endif