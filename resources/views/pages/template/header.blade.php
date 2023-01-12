<header aria-label="Site Header" class="shadow-sm">
    <div class="mx-auto flex h-16 items-center justify-between px-4">

        <div class="flex items-center gap-4">
            <a href="#">
                <span class="sr-only">Logo</span>
                <span class="h-10 w-20 rounded-lg bg-gray-200"></span>
            </a>

            <form class="mb-0 hidden lg:flex">
                <div class="relative">
                    <input class="h-10 rounded-lg border-gray-200 pr-10 text-sm placeholder-gray-300 focus:z-10" placeholder="Search..." type="text" id="search" autocomplete="off" />

                    <button type="submit" class="absolute inset-y-0 right-0 mr-px rounded-r-lg p-2 text-gray-600">
                        <span class="sr-only">Submit Search</span>
                        <svg class="h-5 w-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" fill-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </form>
        </div>

        <nav aria-label="Site Nav" class="hidden items-center justify-center gap-8 text-sm font-medium lg:flex lg:w-0 lg:flex-1">
            <a class="text-gray-900" href="{{ route('about-us') }}">About</a>
            <a class="text-gray-900" href="{{ route('people') }}">People & Culture</a>
            <a class="text-gray-900" href="{{ route('journey') }}">Our Journey</a>
            <a class="text-gray-900" href="{{ route('mission-vision-values') }}">Mission, Vision & Values</a>
            <a class="text-gray-900" href="{{ route('clients-speak') }}">Client Speak</a>
            <a class="text-gray-900" href="{{ route('why-choose-us') }}">Why choose</a>
            <a class="text-gray-900" href="{{ route('locations') }}">Locations</a>
        </nav>

        <div class="hidden items-center gap-4 lg:flex">
            <ul>
                <li class="nav-item dropdown">
                    <a id="languagedropdownNavbarLink" data-dropdown-toggle="languagedropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                        <span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }} <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></a>
                    </a>

                    <!-- Dropdown menu -->
                    <div id="languagedropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                            @foreach (Config::get('languages') as $lang => $language)
                                @if ($lang != App::getLocale())
                                    <li>
                                        <a class="dropdown-item block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="{{ route('lang.switch', $lang) }}"><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> {{$language['display']}}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="border-t border-gray-100 lg:hidden">
        <nav class="flex items-center justify-center overflow-x-auto p-4 text-sm font-medium">
            <a href="{{ route('our-competencies') }}" class="flex-shrink-0 pl-4 text-gray-900" >Competencies</a>
            <a href="{{ route('Industries') }}" class="flex-shrink-0 pl-4 text-gray-900" >Industries</a>
            <a href="{{ route('case-studies') }}" class="flex-shrink-0 pl-4 text-gray-900" >Case Studies</a>
            <a href="{{ route('careers') }}" class="flex-shrink-0 pl-4 text-gray-900" >Careers</a>
            <a href="{{ route('blogs') }}" class="flex-shrink-0 pl-4 text-gray-900" >Journal</a>
            <a href="{{ route('contact-us') }}" class="flex-shrink-0 pl-4 text-gray-900" >Contact us</a>
        </nav>
    </div>
</header>

<header aria-label="Site Header" class="bg-white">
    <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex-1 md:flex md:items-center md:gap-12">
                <a class="block text-teal-600" href="/">
                    <span class="sr-only">Home</span>
                    <img src="https://fidelisgroup.in/wp-content/uploads/2020/10/Fidelis-LOGO-250px-2.png" alt="" class="w-36">
                </a>
            </div>

            <button data-collapse-toggle="mega-menu-full" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mega-menu-full" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>

            <div class="md:flex md:items-center md:gap-12">
                <nav aria-label="Site Nav" class="hidden md:block">
                    <ul class="flex items-center gap-6 text-sm">
                        <li>
                            <button id="mega-menu-full-dropdown-button" data-collapse-toggle="mega-menu-full-dropdown" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-700 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-gray-400 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Services <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                        </li>

                        <li>
                            <a id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Industries <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></a>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                  <li>
                                    <a href="{{ route('banking') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Banking</a>
                                  </li>
                                  <li>
                                    <a href="{{ route('fintech') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Fintech</a>
                                  </li>
                                  <li>
                                    <a href="{{ route('healthcare') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Healthcare</a>
                                  </li>
                                  <li>
                                    <a href="{{ route('manufacturing') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Manufacturing</a>
                                  </li>
                                  <li>
                                    <a href="{{ route('enterprise-technology') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Enterprise Technology</a>
                                  </li>
                                  <li>
                                    <a href="{{ route('retail-&-ecommerce') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Retail & E-commerce</a>
                                  </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a class="text-black-500 transition hover:text-black-500/75" href="{{ route('case-studies') }}">
                                Case Studies
                            </a>
                        </li>

                        <li>
                            <a id="productsdropdownNavbarLink" data-dropdown-toggle="productsdropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Products <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></a>
                            <!-- Dropdown menu -->
                            <div id="productsdropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                  <li>
                                    <a href="{{ route('fidelis-noc') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">NOC - Fidelis</a>
                                  </li>
                                  <li>
                                    <a href="{{ route('fidelis-soc') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">SOC - Fidelis</a>
                                  </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a id="careerdropdownNavbarLink" data-dropdown-toggle="careerdropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Careers <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></a>
                            <!-- Dropdown menu -->
                            <div id="careerdropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                  <li>
                                    <a href="{{ route('life-fidelis') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Our Culture</a>
                                  </li>
                                  <li>
                                    <a href="{{ route('careers') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Jobs at Fidelis</a>
                                  </li>
                                  <li>
                                    <a href="{{ route('refer-candidate') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Refer a candidate</a>
                                  </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a class="text-black-500 transition hover:text-black-500/75" href="{{ route('blogs') }}">
                                Blogs
                            </a>
                        </li>

                        <li>
                            <a class="text-black-500 transition hover:text-black-500/75" href="{{ route('contact-us') }}">
                                Contact us
                            </a>
                        </li>
                    </ul>
                </nav>

                <div class="flex items-center gap-4">
                    <div class="sm:flex sm:gap-4">
                        <a class="rounded-md bg-orange-600 px-5 py-2.5 text-sm font-medium text-white shadow"
                            href="/">
                            Login
                        </a>

                        <div class="hidden sm:flex">
                            <a class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-orange-600"
                                href="/">
                                Register
                            </a>
                        </div>
                    </div>

                    <div class="block md:hidden">
                        <button class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

{{-- Mega Menu --}}
<nav class="bg-white border-gray-200 dark:border-gray-600 dark:bg-gray-900">
    <div id="mega-menu-full-dropdown" class="mt-1 bg-white border-gray-200 shadow-sm border-y dark:bg-gray-800 dark:border-gray-600 hidden">
        <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 dark:text-white sm:grid-cols-3 md:grid-cols-4 md:px-6">

            <ul aria-labelledby="mega-menu-full-dropdown-button">
                <li class="font-extrabold underline">Business Process</li>
                <li>
                    <a href="" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Robotic Process Automation</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">With businesses today adopting more automation to accelerate their productivity</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Business Process Management And Automation</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">With businesses today digitally transforming internal and external processes in order to accelerate their productivity</span>
                    </a>
                </li>
            </ul>

            <ul aria-labelledby="mega-menu-full-dropdown-button">
                <li class="font-extrabold underline">Information Management</li>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Business Intelligence And Analytical Services</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">Business intelligence and insights for customers, boost revenue, enhance margins and gain momentum</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Database And Storage Admin</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">Business performance and efficiency with complex data portfolios and business intelligence led decision making</span>
                    </a>
                </li>
            </ul>

            <ul class="hidden md:block">
                <li class="font-extrabold underline">Platform And Infrastructure</li>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Cloud Computing</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">IT And Infra Management</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Data Center Enablement</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                    </a>
                </li>
            </ul>

            <ul class="hidden md:block">
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Managed Services</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Learning Academy</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                    </a>
                </li>
            </ul>

            <ul class="hidden md:block">
                <li class="font-extrabold underline">Staffing solutions</li>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Contigent Staffing</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">MSP Partnerships</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Short term engagement</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                    </a>
                </li>
            </ul>

            <ul>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Talent Kloud</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Compliance</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                    </a>
                </li>
            </ul>

            <ul>
                <li class="font-extrabold underline">Applications</li>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Application Development</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">Staying on top of the line, state of the art architecture and leveraging next generation technologies.</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">ERP Application Management Services</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">Making a shift towards digital ecosystems & progressive partnerships, solutions.</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Application Management</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">Shift towards digital ecosystems & progressive partnerships, solutions.</span>
                    </a>
                </li>
            </ul>

            <ul>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Applications QA And Validation</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">Cost arbitrage and value proposition solutions.</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Devops Advisory</div>
                        <span class="text-sm font-light text-gray-500 dark:text-gray-400">Structured to help clients streamline business processes, development and operation teams</span>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>

@if (Route::is('index'))
@else
    <div class="flowheader magazine-banner">

        <!--Content before waves-->

        <div class="shapeshifter"></div>

        <div class="inner-header banner-heading flex-container">
            <h1 style="font-size: 40px; text-transform: uppercase;">{{ str_replace('-', ' ', Route::currentRouteName()) }}</h1>
            <p><a class="color-white" href="{{ route('index') }}">Home</a> » {{ str_replace('-', ' ', Route::currentRouteName()) }}</p>
        </div>

        <!--Waves Container-->
        <div>
            <svg class="waves" shape-rendering="auto" preserveAspectRatio="none" viewBox="0 24 150 28"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
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
