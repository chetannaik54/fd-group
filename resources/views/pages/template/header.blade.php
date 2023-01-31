{{-- <div class="bg-indigo-600">
    <div class="mx-auto max-w-7xl py-3 px-3 sm:px-6 lg:px-8">
       <div class="flex flex-wrap items-center justify-between">
          <div class="flex w-0 flex-1 items-center">
             <span class="flex rounded-lg bg-indigo-800 p-2">
                <!-- Heroicon name: outline/megaphone -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                   <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46"
                   />
                </svg>
             </span>
             <p class="ml-3 truncate font-medium text-white">
                <span class="md:hidden">We announced a new product!</span>
                <span class="hidden md:inline">Big news! We're excited to announce a brand new product.</span>
             </p>
          </div>
          <div class="order-3 mt-2 w-full flex-shrink-0 sm:order-2 sm:mt-0 sm:w-auto">
             <a href="{{ route('get-free-demo') }}" class="flex items-center justify-center rounded-md border border-transparent bg-white px-4 py-2 text-sm font-medium text-indigo-600 shadow-sm hover:bg-indigo-50">Learn more</a>
          </div>
          <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-3">
             <button type="button" class="-mr-1 flex rounded-md p-2 hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-white sm:-mr-2">
                <span class="sr-only">Dismiss</span>
                <!-- Heroicon name: outline/x-mark -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                   <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
             </button>
          </div>
       </div>
    </div>
</div> --}}
 
<!--Left Side Buttons Start-->
<div class="sticky-left-container">
    <ul class="sticky-left">
        <li>
            <a target="_blank" href="tel:+918041502234">
                {{-- <img width="32" height="32" title="" alt="" src="{{ asset('img/social/phone.png') }}" /> --}}
                <i class="fa fa-phone bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2  rounded-full" aria-hidden="true"></i>
                <p>Phone</p>
            </a>
        </li>
        <li>
            <a target="_blank" href="https://wa.me/+918041502234?text=� Hi, i wanted to know more about NOC. SOC software">
                <i class="fa fa-whatsapp bg-green-700 hover:bg-blue-700 text-white font-bold py-2 px-2  rounded-full" aria-hidden="true"></i>
                <p>Whatsapp</p>
            </a>
        </li>
        <li>
            <a target="_blank" href="mailto:info@fidelisgroup.in">
                <i class="fa fa-envelope bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-2  rounded-full" aria-hidden="true"></i>
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

            <a href="/" class="flex">
                <span class="sr-only">Logo</span>
                <span class="inline-block h-10 w-32 rounded-lg"> <img src="https://fidelisgroup.in/wp-content/uploads/2020/10/Fidelis-LOGO-250px-2.png" alt="" class="w-36" /> </span>
            </a>
        </div>

        <div class="flex flex-1 items-center justify-end">
            <nav aria-label="Site Nav" class="hidden lg:flex lg:gap-9 lg:text-xs lg:font-bold lg:uppercase lg:tracking-wide lg:text-gray-500">
                <a href="{{ route('about-us') }}" class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-orange-700">About us</a>

                <a id="mega-menu-full-dropdown-button" data-collapse-toggle="mega-menu-full-dropdown" class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-orange-700">Solutions </a>

                <div class="group inline-block">
                    <a class="outline-none focus:outline-none px-3 leading-[4rem]  bg-white rounded-sm flex items-center">
                        <span class="pr-1 font-semibold flex-1">Solutions</span>
                        <span>
                            <svg class="fill-current h-4 w-4 transform group-hover:-rotate-180 transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </span>
                    </a>
                    <ul class="bg-white border rounded-sm transform scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out origin-top min-w-32">
                        <li class="rounded-sm relative px-3 py-3 hover:bg-gray-100">
                            <button class="w-full text-left flex items-center outline-none focus:outline-none">
                                <span class="pr-1 flex-1 text-sm">Managed Services</span>
                                <span class="mr-auto">
                                    <svg class="fill-current h-4 w-4 transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </span>
                            </button>
                            <ul class="bg-white border rounded-sm absolute top-0 right-0 transition duration-150 ease-in-out origin-top-left min-w-32">
                                <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100">
                                    <button class="w-full text-left flex items-center outline-none focus:outline-none">
                                        <span class="pr-1 flex-1 text-sm">Cloud Computing</span>
                                        <span class="mr-auto">
                                            <svg class="fill-current h-4 w-4 transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                            </svg>
                                        </span>
                                    </button>
                                    <ul class="bg-white border rounded-sm absolute top-0 right-0 transition duration-150 ease-in-out origin-top-left min-w-32">
                                        <li class="px-3 py-1 hover:bg-gray-100 border-b-4 text-sm">NOC</li>
                                        <li class="px-3 py-1 hover:bg-gray-100 border-b-4 text-sm">SOC</li>
                                        <li class="px-3 py-1 hover:bg-gray-100 border-b-4 text-sm">AMS</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="rounded-sm relative px-3 py-3 hover:bg-gray-100">
                            <button class="w-full text-left flex items-center outline-none focus:outline-none">
                                <span class="pr-1 flex-1 text-sm">Application</span>
                                <span class="mr-auto">
                                    <svg class="fill-current h-4 w-4 transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </span>
                            </button>
                            <ul class="bg-white border rounded-sm absolute top-0 right-0 transition duration-150 ease-in-out origin-top-left min-w-32">
                                <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100 border-b-4 text-sm">Application Development</li>
                                <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100 border-b-4 text-sm">ERP Application Management Services</li>
                                <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100 border-b-4 text-sm">Application Management</li>
                                <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100 border-b-4 text-sm">Application QA & Validation</li>
                                <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100 border-b-4 text-sm">Devops Advisory</li>
                            </ul>
                        </li>
                        <li class="rounded-sm relative px-3 py-3 hover:bg-gray-100">
                            <button class="w-full text-left flex items-center outline-none focus:outline-none">
                                <span class="pr-1 flex-1 text-sm">Staffing Solutions</span>
                                <span class="mr-auto">
                                    <svg class="fill-current h-4 w-4 transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </span>
                            </button>
                            <ul class="bg-white border rounded-sm absolute top-0 right-0 transition duration-150 ease-in-out origin-top-left min-w-32">
                                <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100 border-b-4 text-sm">Contigent Staffing</li>
                                <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100 border-b-4 text-sm">MSP Partnerships</li>
                                <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100 border-b-4 text-sm">Short term engagement</li>
                                <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100 border-b-4 text-sm">Talent Kloud</li>
                                <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100 border-b-4 text-sm">Compliance</li>
                            </ul>
                        </li>
                        <li class="rounded-sm relative px-3 py-3 hover:bg-gray-100">
                            <button class="w-full text-left flex items-center outline-none focus:outline-none">
                                <span class="pr-1 flex-1 text-sm">Platform & Infrastructure</span>
                                <span class="mr-auto">
                                    <svg class="fill-current h-4 w-4 transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </span>
                            </button>
                            <ul class="bg-white border rounded-sm absolute top-0 right-0 transition duration-150 ease-in-out origin-top-left min-w-32">
                                <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100 border-b-4 text-sm">IT & Infra Management</li>
                                <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100 border-b-4 text-sm">Data Center Enablement</li>
                                <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100 border-b-4 text-sm">Short term engagement</li>
                                <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100 border-b-4 text-sm">Robotic Process Automation</li>
                            </ul>
                        </li>
                        <li class="rounded-sm relative px-3 py-3 hover:bg-gray-100">
                            <button class="w-full text-left flex items-center outline-none focus:outline-none">
                                <span class="pr-1 flex-1 text-sm">Information Management</span>
                                <span class="mr-auto">
                                    <svg class="fill-current h-4 w-4 transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </span>
                            </button>
                            <ul class="bg-white border rounded-sm absolute top-0 right-0 transition duration-150 ease-in-out origin-top-left min-w-32">
                                <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100 border-b-4 text-sm">Business Intelligence & Analytical Services</li>
                                <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100 border-b-4 text-sm">Database & Storage admin</li>
                            </ul>
                        </li>

                        <li class="rounded-sm px-3 py-3 hover:bg-gray-100">Learning Academy</li>
                    </ul>
                </div>

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
                            <a href="{{ route('life-fidelis') }}" class="block px-4 py-2 hover:bg-blue-100 dark:hover:bg-gray-600 dark:hover:text-white">Life at Fidelis</a>
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

                <a class="bg-orange-600 px-5 text-sm font-medium text-white shadow hover:bg-gradient-to-r hover:from-orange-500 hover:to-orange-400 hover:ring-2 hover:ring-offset-2 hover:ring-orange-400 transition-all ease-out duration-300 block h-16 border-b-4 border-transparent leading-[4rem] pulse" href="{{ route('get-free-demo') }}">
                     Get a free demo
                </a>
            </nav>

            <div class="ml-8 flex items-center">
                <div class="flex items-center divide-x divide-gray-100 border-x border-gray-100">
                    <span>
                        <a data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="block border-b-4 border-transparent p-3 hover:border-orange-700">
                            <i class="fa fa-language" aria-hidden="true" style="font-size: 1.4rem;"></i>
                        </a>

                        <!-- Main modal -->
                        <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                            <div class="relative w-full h-full max-w-2xl md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Change Language
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-6 space-y-6">
                                        <div id="google_translate_element"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div id="languagedropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600 w-[250px]">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                <li><a href="{{ route('/en') }}" class="block px-4 py-2 hover:bg-blue-100 dark:hover:bg-gray-600 dark:hover:text-white">English</a></li>
                                <li><a href="{{ route('/Mandarin') }}" class="block px-4 py-2 hover:bg-blue-100 dark:hover:bg-gray-600 dark:hover:text-white">Mandarin</a></li>
                                <li><a href="{{ route('/Malayalam') }}" class="block px-4 py-2 hover:bg-blue-100 dark:hover:bg-gray-600 dark:hover:text-white">Malayalam</a></li>
                                <li><a href="{{ route('/Arabic') }}" class="block px-4 py-2 hover:bg-blue-100 dark:hover:bg-gray-600 dark:hover:text-white">Arabic</a></li>
                            </ul>
                        </div> --}}
                    </span>

                    <span>
                        <a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block border-b-4 border-transparent p-3 hover:border-orange-700">
                            <i class="fa fa-sign-in text-lg" aria-hidden="true" style="font-size: 1.4rem;"></i>
                            <span class="sr-only"> Account </span>
                        </a>

                        <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                            <div class="relative w-full h-full max-w-md md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="px-6 py-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Sign in to our platform</h3>
                                        <form class="space-y-6" action="#">
                                            <div>
                                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                                                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                                            </div>
                                            <div>
                                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                                                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                            </div>
                                            <div class="flex justify-between">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                                                    </div>
                                                    <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                                                </div>
                                                <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
                                            </div>
                                            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
                                            <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                                                Not registered? <a href="#" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </span>

                    <span class="hidden sm:block">
                        <a data-modal-target="searchModal" data-modal-toggle="searchModal" class="block border-b-4 border-transparent p-3 hover:border-orange-700">
                            <i class="fa fa-search" aria-hidden="true" style="font-size: 1.4rem;"></i>
                            <span class="sr-only"> Search </span>
                        </a>
                    </span>
                    <!-- Main modal -->
                    <div id="searchModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                        <div class="relative w-full h-full max-w-md md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="px-6 py-6 lg:px-8">
                                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Search website</h3>
                                    <form class="space-y-6" action="#">
                                        <div>
                                            <input type="search" name="search" id="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="search..." required>
                                        </div>
                                    </form>

                                    <!-- Modal body -->
                                    <div class="pt-6 p-1">
                                        <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Connect with one of our available wallet providers or create a new one.</p>
                                        <ul class="my-4 space-y-3">
                                            <li>
                                                <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                                    <svg aria-hidden="true" class="h-4" viewBox="0 0 40 38" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M39.0728 0L21.9092 12.6999L25.1009 5.21543L39.0728 0Z" fill="#E17726"/><path d="M0.966797 0.0151367L14.9013 5.21656L17.932 12.7992L0.966797 0.0151367Z" fill="#E27625"/><path d="M32.1656 27.0093L39.7516 27.1537L37.1004 36.1603L27.8438 33.6116L32.1656 27.0093Z" fill="#E27625"/><path d="M7.83409 27.0093L12.1399 33.6116L2.89876 36.1604L0.263672 27.1537L7.83409 27.0093Z" fill="#E27625"/><path d="M17.5203 10.8677L17.8304 20.8807L8.55371 20.4587L11.1924 16.4778L11.2258 16.4394L17.5203 10.8677Z" fill="#E27625"/><path d="M22.3831 10.7559L28.7737 16.4397L28.8067 16.4778L31.4455 20.4586L22.1709 20.8806L22.3831 10.7559Z" fill="#E27625"/><path d="M12.4115 27.0381L17.4768 30.9848L11.5928 33.8257L12.4115 27.0381Z" fill="#E27625"/><path d="M27.5893 27.0376L28.391 33.8258L22.5234 30.9847L27.5893 27.0376Z" fill="#E27625"/><path d="M22.6523 30.6128L28.6066 33.4959L23.0679 36.1282L23.1255 34.3884L22.6523 30.6128Z" fill="#D5BFB2"/><path d="M17.3458 30.6143L16.8913 34.3601L16.9286 36.1263L11.377 33.4961L17.3458 30.6143Z" fill="#D5BFB2"/><path d="M15.6263 22.1875L17.1822 25.4575L11.8848 23.9057L15.6263 22.1875Z" fill="#233447"/><path d="M24.3739 22.1875L28.133 23.9053L22.8184 25.4567L24.3739 22.1875Z" fill="#233447"/><path d="M12.8169 27.0049L11.9606 34.0423L7.37109 27.1587L12.8169 27.0049Z" fill="#CC6228"/><path d="M27.1836 27.0049L32.6296 27.1587L28.0228 34.0425L27.1836 27.0049Z" fill="#CC6228"/><path d="M31.5799 20.0605L27.6165 24.0998L24.5608 22.7034L23.0978 25.779L22.1387 20.4901L31.5799 20.0605Z" fill="#CC6228"/><path d="M8.41797 20.0605L17.8608 20.4902L16.9017 25.779L15.4384 22.7038L12.3988 24.0999L8.41797 20.0605Z" fill="#CC6228"/><path d="M8.15039 19.2314L12.6345 23.7816L12.7899 28.2736L8.15039 19.2314Z" fill="#E27525"/><path d="M31.8538 19.2236L27.2061 28.2819L27.381 23.7819L31.8538 19.2236Z" fill="#E27525"/><path d="M17.6412 19.5088L17.8217 20.6447L18.2676 23.4745L17.9809 32.166L16.6254 25.1841L16.625 25.1119L17.6412 19.5088Z" fill="#E27525"/><path d="M22.3562 19.4932L23.3751 25.1119L23.3747 25.1841L22.0158 32.1835L21.962 30.4328L21.75 23.4231L22.3562 19.4932Z" fill="#E27525"/><path d="M27.7797 23.6011L27.628 27.5039L22.8977 31.1894L21.9414 30.5138L23.0133 24.9926L27.7797 23.6011Z" fill="#F5841F"/><path d="M12.2373 23.6011L16.9873 24.9926L18.0591 30.5137L17.1029 31.1893L12.3723 27.5035L12.2373 23.6011Z" fill="#F5841F"/><path d="M10.4717 32.6338L16.5236 35.5013L16.4979 34.2768L17.0043 33.8323H22.994L23.5187 34.2753L23.48 35.4989L29.4935 32.641L26.5673 35.0591L23.0289 37.4894H16.9558L13.4197 35.0492L10.4717 32.6338Z" fill="#C0AC9D"/><path d="M22.2191 30.231L23.0748 30.8354L23.5763 34.8361L22.8506 34.2234H17.1513L16.4395 34.8485L16.9244 30.8357L17.7804 30.231H22.2191Z" fill="#161616"/><path d="M37.9395 0.351562L39.9998 6.53242L38.7131 12.7819L39.6293 13.4887L38.3895 14.4346L39.3213 15.1542L38.0875 16.2779L38.8449 16.8264L36.8347 19.1742L28.5894 16.7735L28.5179 16.7352L22.5762 11.723L37.9395 0.351562Z" fill="#763E1A"/><path d="M2.06031 0.351562L17.4237 11.723L11.4819 16.7352L11.4105 16.7735L3.16512 19.1742L1.15488 16.8264L1.91176 16.2783L0.678517 15.1542L1.60852 14.4354L0.350209 13.4868L1.30098 12.7795L0 6.53265L2.06031 0.351562Z" fill="#763E1A"/><path d="M28.1861 16.2485L36.9226 18.7921L39.7609 27.5398L32.2728 27.5398L27.1133 27.6049L30.8655 20.2912L28.1861 16.2485Z" fill="#F5841F"/><path d="M11.8139 16.2485L9.13399 20.2912L12.8867 27.6049L7.72971 27.5398H0.254883L3.07728 18.7922L11.8139 16.2485Z" fill="#F5841F"/><path d="M25.5283 5.17383L23.0847 11.7736L22.5661 20.6894L22.3677 23.4839L22.352 30.6225H17.6471L17.6318 23.4973L17.4327 20.6869L16.9139 11.7736L14.4707 5.17383H25.5283Z" fill="#F5841F"/></svg>
                                                    <span class="flex-1 ml-3 whitespace-nowrap">Search result 1</span>
                                                    <span class="inline-flex items-center justify-center px-2 py-0.5 ml-3 text-xs font-medium text-gray-500 bg-gray-200 rounded dark:bg-gray-700 dark:text-gray-400">Popular</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                                    <svg aria-hidden="true" class="h-5" viewBox="0 0 292 292" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M145.7 291.66C226.146 291.66 291.36 226.446 291.36 146C291.36 65.5541 226.146 0.339844 145.7 0.339844C65.2542 0.339844 0.0400391 65.5541 0.0400391 146C0.0400391 226.446 65.2542 291.66 145.7 291.66Z" fill="#3259A5"/><path d="M195.94 155.5C191.49 179.08 170.8 196.91 145.93 196.91C117.81 196.91 95.0204 174.12 95.0204 146C95.0204 117.88 117.81 95.0897 145.93 95.0897C170.8 95.0897 191.49 112.93 195.94 136.5H247.31C242.52 84.7197 198.96 44.1797 145.93 44.1797C89.6904 44.1797 44.1104 89.7697 44.1104 146C44.1104 202.24 89.7004 247.82 145.93 247.82C198.96 247.82 242.52 207.28 247.31 155.5H195.94Z" fill="white"/></svg>
                                                    <span class="flex-1 ml-3 whitespace-nowrap">Coinbase Wallet</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                                    <svg aria-hidden="true" svg class="h-5"viewBox="0 0 75.591 75.591" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientTransform="matrix(0 -54.944 -54.944 0 23.62 79.474)" gradientUnits="userSpaceOnUse" x2="1"><stop offset="0" stop-color="#ff1b2d"/><stop offset=".3" stop-color="#ff1b2d"/><stop offset=".614" stop-color="#ff1b2d"/><stop offset="1" stop-color="#a70014"/></linearGradient><linearGradient id="b" gradientTransform="matrix(0 -48.595 -48.595 0 37.854 76.235)" gradientUnits="userSpaceOnUse" x2="1"><stop offset="0" stop-color="#9c0000"/><stop offset=".7" stop-color="#ff4b4b"/><stop offset="1" stop-color="#ff4b4b"/></linearGradient><g transform="matrix(1.3333 0 0 -1.3333 0 107.2)"><path d="m28.346 80.398c-15.655 0-28.346-12.691-28.346-28.346 0-15.202 11.968-27.609 26.996-28.313.44848-.02115.89766-.03314 1.3504-.03314 7.2574 0 13.876 2.7289 18.891 7.2137-3.3227-2.2036-7.2074-3.4715-11.359-3.4715-6.7504 0-12.796 3.3488-16.862 8.6297-3.1344 3.6999-5.1645 9.1691-5.3028 15.307v1.3349c.13821 6.1377 2.1683 11.608 5.302 15.307 4.0666 5.2809 10.112 8.6297 16.862 8.6297 4.1526 0 8.038-1.2679 11.361-3.4729-4.9904 4.4643-11.569 7.1876-18.786 7.2144-.03596 0-.07122.0014-.10718.0014z" fill="url(#a)"/><path d="m19.016 68.025c2.6013 3.0709 5.9607 4.9227 9.631 4.9227 8.2524 0 14.941-9.356 14.941-20.897s-6.6891-20.897-14.941-20.897c-3.6703 0-7.0297 1.851-9.6303 4.922 4.0659-5.2809 10.111-8.6297 16.862-8.6297 4.1519 0 8.0366 1.2679 11.359 3.4715 5.802 5.1906 9.4554 12.735 9.4554 21.133 0 8.397-3.6527 15.941-9.4533 21.131-3.3234 2.205-7.2088 3.4729-11.361 3.4729-6.7504 0-12.796-3.3488-16.862-8.6297" fill="url(#b)"/></g></svg>
                                                    <span class="flex-1 ml-3 whitespace-nowrap">Opera Wallet</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                                    <svg aria-hidden="true" class="h-5" viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><radialGradient cx="0%" cy="50%" fx="0%" fy="50%" r="100%" id="radialGradient-1"><stop stop-color="#5D9DF6" offset="0%"></stop><stop stop-color="#006FFF" offset="100%"></stop></radialGradient></defs><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="logo"><rect id="base" fill="url(#radialGradient-1)" x="0" y="0" width="512" height="512" rx="256"></rect><path d="M169.209772,184.531136 C217.142772,137.600733 294.857519,137.600733 342.790517,184.531136 L348.559331,190.179285 C350.955981,192.525805 350.955981,196.330266 348.559331,198.676787 L328.82537,217.99798 C327.627045,219.171241 325.684176,219.171241 324.485851,217.99798 L316.547278,210.225455 C283.10802,177.485633 228.89227,177.485633 195.453011,210.225455 L186.951456,218.549188 C185.75313,219.722448 183.810261,219.722448 182.611937,218.549188 L162.877976,199.227995 C160.481326,196.881474 160.481326,193.077013 162.877976,190.730493 L169.209772,184.531136 Z M383.602212,224.489406 L401.165475,241.685365 C403.562113,244.031874 403.562127,247.836312 401.165506,250.182837 L321.971538,327.721548 C319.574905,330.068086 315.689168,330.068112 313.292501,327.721609 C313.292491,327.721599 313.29248,327.721588 313.29247,327.721578 L257.08541,272.690097 C256.486248,272.103467 255.514813,272.103467 254.915651,272.690097 C254.915647,272.690101 254.915644,272.690105 254.91564,272.690108 L198.709777,327.721548 C196.313151,330.068092 192.427413,330.068131 190.030739,327.721634 C190.030725,327.72162 190.03071,327.721606 190.030695,327.721591 L110.834524,250.181849 C108.437875,247.835329 108.437875,244.030868 110.834524,241.684348 L128.397819,224.488418 C130.794468,222.141898 134.680206,222.141898 137.076856,224.488418 L193.284734,279.520668 C193.883897,280.107298 194.85533,280.107298 195.454493,279.520668 C195.454502,279.520659 195.45451,279.520651 195.454519,279.520644 L251.65958,224.488418 C254.056175,222.141844 257.941913,222.141756 260.338618,224.488222 C260.338651,224.488255 260.338684,224.488288 260.338717,224.488321 L316.546521,279.520644 C317.145683,280.107273 318.117118,280.107273 318.71628,279.520644 L374.923175,224.489406 C377.319825,222.142885 381.205562,222.142885 383.602212,224.489406 Z" id="WalletConnect" fill="#FFFFFF" fill-rule="nonzero"></path></g></g></svg>
                                                    <span class="flex-1 ml-3 whitespace-nowrap">WalletConnect</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                                    <svg aria-hidden="true" class="h-4" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M72.0998 0.600098H48.3998H24.5998H0.799805V24.4001V48.2001V49.7001V71.8001V71.9001V95.5001H24.5998V72.0001V71.9001V49.8001V48.3001V24.5001H48.3998H72.1998H95.9998V0.700104H72.0998V0.600098Z" fill="#617BFF"/><path d="M48.5 71.8002H72.1V95.6002H73C79.1 95.6002 84.9 93.2002 89.2 88.9002C93.5 84.6002 95.9 78.8002 95.9 72.7002V48.2002H48.5V71.8002Z" fill="#617BFF"/></svg>
                                                    <span class="flex-1 ml-3 whitespace-nowrap">Fortmatic</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div>
                                            <a href="#" class="inline-flex items-center text-xs font-normal text-gray-500 hover:underline dark:text-gray-400">
                                                <svg aria-hidden="true" class="w-3 h-3 mr-2" aria-hidden="true" focusable="false" data-prefix="far" data-icon="question-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 448c-110.532 0-200-89.431-200-200 0-110.495 89.472-200 200-200 110.491 0 200 89.471 200 200 0 110.53-89.431 200-200 200zm107.244-255.2c0 67.052-72.421 68.084-72.421 92.863V300c0 6.627-5.373 12-12 12h-45.647c-6.627 0-12-5.373-12-12v-8.659c0-35.745 27.1-50.034 47.579-61.516 17.561-9.845 28.324-16.541 28.324-29.579 0-17.246-21.999-28.693-39.784-28.693-23.189 0-33.894 10.977-48.942 29.969-4.057 5.12-11.46 6.071-16.666 2.124l-27.824-21.098c-5.107-3.872-6.251-11.066-2.644-16.363C184.846 131.491 214.94 112 261.794 112c49.071 0 101.45 38.304 101.45 88.8zM298 368c0 23.159-18.841 42-42 42s-42-18.841-42-42 18.841-42 42-42 42 18.841 42 42z"></path></svg>
                                                Why do I need to connect with my wallet?</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div> 


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
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">            <defs>                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />            </defs>            <g class="parallax">                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />                <use xlink:href="#gentle-wave" x="48" y="7" fill="#fafafa" />            </g></svg>
    </div>
    <!--Waves end-->
</div>
@endif