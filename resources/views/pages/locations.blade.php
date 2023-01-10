@extends('pages.template.layout')

@section('content')
    <section>
        <div class="row m-auto">
            <img src="https://fidelisgroup.in/wp-content/uploads/2018/04/map-1.svg" alt="" style="margin: 0 auto">
        </div>

        <div class="grid grid-cols-3 gap-3">

            @foreach ($locations as $singlelocation)
                <article class="rounded-lg border border-gray-100 bg-gray-100 p-4 shadow-sm transition hover:shadow-lg sm:p-6">
                    <span class="inline-block rounded bg-blue-600 p-2 text-white">
                        <?xml version="1.0" encoding="UTF-8"?>
                        <svg width="40px" height="40px" fill="#ffffff" version="1.1" viewBox="0 0 395.71 395.71" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <path d="m197.85 0c-75.718 0-137.32 61.609-137.32 137.33 0 72.887 124.59 243.18 129.9 250.39l4.951 6.738c0.579 0.792 1.501 1.255 2.471 1.255 0.985 0 1.901-0.463 2.486-1.255l4.948-6.738c5.308-7.211 129.9-177.5 129.9-250.39 0-75.72-61.61-137.33-137.33-137.33zm0 88.138c27.13 0 49.191 22.062 49.191 49.191 0 27.115-22.062 49.191-49.191 49.191-27.114 0-49.191-22.076-49.191-49.191 0-27.129 22.076-49.191 49.191-49.191z" />
                        </svg>
                    </span>
                    <p>{{ $singlelocation['city'] }}</p>

                    <a href="https://www.google.com/maps?q={{ $singlelocation['address'] }}" target="_blank">
                        <h3 class="mt-0.5 text-lg font-medium text-gray-900">
                            {{ $singlelocation['company'] }}
                        </h3>
                    </a>

                    <p class="mt-2 text-sm leading-relaxed text-gray-500 line-clamp-3">
                        {{ $singlelocation['address'] }}
                    </p>

                    <a href="https://www.google.com/maps?q={{ $singlelocation['address'] }}" target="_blank" class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600">
                        Find out more

                        <span aria-hidden="true" class="block transition group-hover:translate-x-0.5">
                            &rarr;
                        </span>
                    </a>
                </article>
            @endforeach
        </div>

    </section>
@endsection
