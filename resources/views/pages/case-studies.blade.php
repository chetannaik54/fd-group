@extends('pages.template.layout')

@section('customcss')
    <style>.timedot{ left: -22px !important }</style>
@endsection

@section('content')
    <section class="bg-white dark:bg-gray-900">
        <div class="pb-8 px-4 mx-auto max-w-screen-2xl lg:pb-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">We use an agile approach to solve issues and connect with the needs of your audience early and often.</p>
            </div>
            <div class="grid gap-8 lg:grid-cols-4">

                @php
                  $collection = array('Data Centre Operations & Maintenance', 'End User Support & Technical Helpdesk Services', 'Application Support Desk Operations', 'Data Centre Support & Operations', 'DDUGKY' , 'Himayat DDUGKY', 'Udaan NSDC');  
                @endphp
                @foreach ($collection as $item)
                    <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        {{-- <img src="https://uhs.com/wp-content/uploads/2020/05/fortune500_social_1200.png" alt=""> --}}
                        <img src="https://api.lorem.space/image/house?w=450&h=450&t={{ $loop->index }}" alt="">
                        <h2 class="my-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white"><a href={{ route('case-details', 'Data Centre Operations & Maintenance') }}>{{ $item }}</a></h2>

                        <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Managed Service by Fidelis Group is a complete set of offerings that accelerate organization adoption and business value</p>
                        <div class="flex justify-between items-center">
                            <a href="{{ route('case-details', 'Data Centre Operations & Maintenance') }}" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline transition transform rounded-sm hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none hover:border hover:px-2 hover:shadow">
                                Read more
                                <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection
