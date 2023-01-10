@extends('pages.template.layout')

@section('content')

    <div class="grid grid-cols-3 gap-4">
        @foreach ($competencies as $item)
            <article class="flex bg-white transition hover:shadow-xl border">

                <div class="hidden sm:block">
                    <img alt="Guitar" src="{{ $item['icon'] }}" class="aspect-square h-full w-28 object-contain" />
                </div>

                <div class="flex flex-1 flex-col justify-between">
                    <div class="border-l border-gray-900/10 p-4 sm:border-l-transparent sm:p-6">
                        <a href="#">
                            <h3 class="font-bold uppercase text-gray-900">
                                {{ $item['name'] }}
                            </h3>
                        </a>

                        <p class="mt-2 text-sm leading-relaxed text-gray-700 line-clamp-3">
                            {{ $item['category'] }}
                        </p>
                    </div>

                    <div class="sm:flex sm:items-end sm:justify-end">
                        <a href="#"
                            class="block bg-yellow-300 px-5 py-3 text-center text-xs font-bold uppercase text-gray-900 transition hover:bg-yellow-400">
                            Read More
                        </a>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
@endsection
