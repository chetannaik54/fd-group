@extends('pages.template.layout')

@section('content')
    <section class="">
        <div class="mx-auto">
            <div class="mx-auto text-center">
                <h1 class="text-3xl font-extrabold sm:text-5xl">
                    About 
                    <strong class="float-start font-extrabold text-red-700 sm:block">
                        Fidelis Group.
                    </strong>
                </h1>

                <p class="mt-4 sm:text-xl sm:leading-relaxed">
                    Leading The Industry For Over A Decade, we have strived to build a better system of innovation, execution and sustained growth for our clients augmented by intellect, seamless solutions , research, collaboration, talent, industry and stakeholders.
                </p>

                <div class="mt-8 flex flex-wrap justify-center gap-4">
                    <a class="block w-full rounded bg-red-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-red-700 focus:outline-none focus:ring active:bg-red-500 sm:w-auto"
                        href="{{ route('contact-us') }}">
                        Get Started
                    </a>

                    <a class="block w-full rounded px-12 py-3 text-sm font-medium text-red-600 shadow hover:text-red-700 focus:outline-none focus:ring active:text-red-500 sm:w-auto"
                        href="{{ route('case-studies') }}">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-y-8 lg:grid-cols-2 lg:items-center lg:gap-x-16">
                <div class="mx-auto max-w-lg text-center lg:mx-0 lg:text-left">
                    <h2 class="text-3xl font-bold sm:text-4xl"></h2>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/NaIoSNuC2_0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="grid grid-cols-2 gap-4 sm:grid-cols-3">
                    <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                        href="{{ route('banking') }}">
                        <span class="inline-block rounded-lg bg-gray-50 p-3">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                <path
                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                                </path>
                            </svg>
                        </span>

                        <h2 class="mt-2 font-bold">Banking</h2>

                        <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </a>

                    <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                        href="{{ route('fintech') }}">
                        <span class="inline-block rounded-lg bg-gray-50 p-3">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                <path
                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                                </path>
                            </svg>
                        </span>

                        <h2 class="mt-2 font-bold">Fintech</h2>

                        <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </a>

                    <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                        href="{{ route('healthcare') }}">
                        <span class="inline-block rounded-lg bg-gray-50 p-3">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                <path
                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                                </path>
                            </svg>
                        </span>

                        <h2 class="mt-2 font-bold">Healthcare</h2>

                        <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </a>

                    <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                        href="{{ route('manufacturing') }}">
                        <span class="inline-block rounded-lg bg-gray-50 p-3">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                <path
                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                                </path>
                            </svg>
                        </span>

                        <h2 class="mt-2 font-bold">Manufacturing</h2>

                        <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </a>

                    <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                        href="{{ route('enterprise-technology') }}>
                        <span class="inline-block rounded-lg bg-gray-50 p-3">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                <path
                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                                </path>
                            </svg>
                        </span>

                        <h2 class="mt-2 font-bold">Enterprise Technology</h2>

                        <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </a>

                    <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                        href="{{ route('retail-&-ecommerce') }}">
                        <span class="inline-block rounded-lg bg-gray-50 p-3">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                <path
                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                                </path>
                            </svg>
                        </span>

                        <h2 class="mt-2 font-bold">Retail & E-commerce</h2>

                        <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="grid grid-cols-3 gap-6">
        <article class="group">
            <img alt="Lava"
                src="https://fidelisgroup.in/wp-content/uploads/2020/11/018-rocket-launch.png"
                class="h-56 w-56 rounded-xl object-cover transition group-hover:grayscale-[50%]" />
    
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
            <img alt="Lava"
                src="https://fidelisgroup.in/wp-content/uploads/2020/11/004-donut-chart-1.png"
                class="h-56 w-56 rounded-xl object-cover transition group-hover:grayscale-[50%]" />
    
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
            <img alt="Lava"
                src="https://fidelisgroup.in/wp-content/uploads/2020/11/025-windmill.png"
                class="h-56 w-56 rounded-xl object-cover transition group-hover:grayscale-[50%]" />
    
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
@endsection
