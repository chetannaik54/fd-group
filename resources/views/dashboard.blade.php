<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @php
                        /* This sets the $time variable to the current hour in the 24 hour clock format */
                        $time = date("H");
                        /* Set the $timezone variable to become the current timezone */
                        $timezone = date("e");
                        /* If the time is less than 1200 hours, show good morning */
                        if ($time < "12") {
                            echo "Good morning, ". Auth::user()->name;
                        } else
                        /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
                        if ($time >= "12" && $time < "17") {
                            echo "Good afternoon, ".Auth::user()->name;
                        } else
                        /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
                        if ($time >= "17" && $time < "19") {
                            echo "Good evening, ".Auth::user()->name;
                        }

                    @endphp
                    
                </div>
            </div>
        </div>
    </div>

    <div class="py-0">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden sm:rounded-lg">

                <div class="grid grid-cols-4 gap-4">
                    <a href="" class="group flex flex-col justify-between rounded-md bg-white p-6 shadow-xl transition-shadow hover:shadow-lg">
                        <div>
                            <h3 class="text-5xl font-bold text-indigo-600">100+</h3>
                            <div class="mt-4 border-t-2 border-indigo-100 pt-2">
                                <p class="text-sm font-medium uppercase tracking-widest text-gray-500">New employees</p>
                            </div>
                        </div>

                        <div class="mt-16 inline-flex items-center text-indigo-600">
                            <p class="text-lg font-medium">How we did it</p>

                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 h-6 w-6 transform transition-transform group-hover:translate-x-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </div>
                    </a>

                    <a href="" class="group flex flex-col justify-between rounded-md bg-white p-6 shadow-xl transition-shadow hover:shadow-lg">
                        <div>
                            <h3 class="text-5xl font-bold text-indigo-600">100+</h3>
                            <div class="mt-4 border-t-2 border-indigo-100 pt-2">
                                <p class="text-sm font-medium uppercase tracking-widest text-gray-500">New employees</p>
                            </div>
                        </div>

                        <div class="mt-16 inline-flex items-center text-indigo-600">
                            <p class="text-lg font-medium">How we did it</p>

                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 h-6 w-6 transform transition-transform group-hover:translate-x-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </div>
                    </a>

                </div>

            </div>
        </div>
    </div>

</x-app-layout>
