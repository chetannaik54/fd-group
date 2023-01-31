<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Fidelis') }} | {{ str_replace('-', ' ', Route::currentRouteName()) }}</title>

    <style type="text/css">
        @font-face{font-family:KabarettD;src:url('{{ asset('fonts/KabarettD.ttf') }}')}.loading{font-size:84px;font-family:KabarettD;font-weight:800;text-align:center;color:#28597a}.loading span{display:inline-block;margin:0 -.05em}.loading02 span{animation:1.2s infinite alternate loading02}.loading02 span:nth-child(2){animation-delay:.2s}.loading02 span:nth-child(3){animation-delay:.4s}.loading02 span:nth-child(4){animation-delay:.6s}.loading02 span:nth-child(5){animation-delay:.8s}.loading02 span:nth-child(6){animation-delay:1s}.loading02 span:nth-child(7){animation-delay:1.2s}@keyframes loading02{0%{filter:blur(0);opacity:1}100%{filter:blur(5px);opacity:.2}}
    </style>
</head>

<body class="font-sans antialiased">

    {{-- Loading screen --}}
    <section id="loader" class="flex h-screen">
        <div class="loading loading02 m-auto">
            <span>F</span>
            <span>I</span>
            <span>D</span>
            <span>E</span>
            <span>L</span>
            <span>I</span>
            <span>S</span>
            imgsrc
        </div>
    </section>

    <div id="pagecontent" class="min-h-screen hidden invisible">
        @include('pages.template.header')

        {{-- Slider 1 --}}
        <div class="Advance-Slider h-[700px]">
            <!-- NOC Slide Item -->
            <div class="item">
                <div class="img-fill">
                    {{-- <img src="https://images.pexels.com/photos/1236678/pexels-photo-1236678.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="" /> --}}
                    <video autoplay="true" muted="true" preload="auto" controls="off" playsinline src="videos/video.mp4" class="w-full"></video>
                    <div class="contain-wrapper">
                        <div class="dots-contain">
                            <img class="dots-img" src="" alt="" />
                        </div>
                        <div class="info">
                            <div>
                                <h3>
                                    Simplifying <strong class="typewrite" data-period="2000" data-type='[ "Global Solutions.", "Cloud computing.", "Micro services.", "Staffing solutions." ]'><span class="wrap"></span>></strong>
                                </h3>
                                <h5>Fidelis helps you take control of your infrastructure support through a suite of NOC solutions</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Item -->
        
            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    {{-- Video by MrColo: https://www.pexels.com/video/close-up-of-a-cpu-7140928/ --}}
                    <video autoplay="true" muted="true" preload="auto" controls="off" playsinline src="videos/soc.mp4" class="w-full"></video>
                    <div class="contain-wrapper">
                        <div class="dots-contain">
                            <img class="dots-img" src="" alt="" />
                        </div>
                        <div class="info">
                            <div>
                                <h3>Fill talent Gaps. <br /> <strong>with SOC solution</strong></h3>
                                <h5>Fidelis SOC as a service, help organizations overcome the problems of an ever-changing cybersecurity landscape.</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Item -->
        
            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    {{-- Video by Diva Plavalaguna: https://www.pexels.com/video/female-hands-typing-on-computer-keyboard-6985521/ --}}
                    <video autoplay="true" muted="true" preload="auto" controls="off" playsinline src="videos/ams.mp4" class="w-full"></video>
                    <div class="contain-wrapper">
                        <div class="dots-contain">
                            <img class="dots-img" src="" alt="" />
                        </div>
                        <div class="info">
                            <div>
                                <h3>Asset management software<span> solution for enterprises</span></h3>
                                <h5>FidelisAM is an asset management database software solution for organizations</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Item -->
        
            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    <video autoplay="true" muted="true" preload="auto" controls="off" playsinline src="videos/pexels-mikhail-nilov-7989448.mp4" class="w-full"></video>
                    <div class="contain-wrapper">
                        <div class="dots-contain">
                            <img class="dots-img" src="" alt="" />
                        </div>
                        <div class="info">
                            <div>
                                <h3><span class="wordtag"></span></h3>
                                <h5>You can easily add image, html formatted texts and video layers over each slide and each layer accepts unique animation.</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Sourcing slide Item -->
        </div>
        
        <main class="mx-auto max-w-screen-2xl px-4 py-16 sm:px-6 lg:px-8">

            {{-- Hero Section --}}
            <section class="bg-blueGray-50">
                <div class="overflow-hidden pt-16">
                    <div class="container px-4 mx-auto">
                        <div class="flex flex-wrap -m-8">
                            <div class="w-full md:w-1/2 p-8">
                                <h1
                                    class="mb-6 text-6xl md:text-8xl lg:text-3xl font-bold font-heading md:max-w-xl leading-none">
                                    Knowledge Led Model Partnerships</h1>
                                <p class="mb-11 text-lg text-gray-900 font-light">At Fidelis Group, we usher in a
                                    convergence of global solutions, transformative opportunities, value based
                                    governance and emergence to business processes and an interface to collective
                                    consulting. Leading The Industry For Over A Decade, we have strived to build a
                                    better system of innovation, execution and sustained growth for our clients
                                    augmented by intellect, seamless solutions , research, collaboration, talent,
                                    industry and stakeholders.</p>
                                <div class="flex flex-wrap -m-2.5 mb-20">
                                    <div class="w-full md:w-auto p-2.5">
                                        <div class="block">
                                            <button
                                                class="py-4 px-9 w-full font-semibold border border-gray-300 hover:border-gray-400 rounded-xl focus:ring focus:ring-gray-50 bg-transparent hover:bg-gray-100 transition ease-in-out duration-200"
                                                type="button">
                                                <div class="flex flex-wrap justify-center items-center -m-1">
                                                    <div class="w-auto p-1">
                                                        <svg width="19" height="18" viewbox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2.75 3.75C2.75 2.92157 3.42157 2.25 4.25 2.25H6.70943C7.03225 2.25 7.31886 2.45657 7.42094 2.76283L8.5443 6.13291C8.66233 6.48699 8.50203 6.87398 8.1682 7.0409L6.47525 7.88737C7.30194 9.72091 8.77909 11.1981 10.6126 12.0247L11.4591 10.3318C11.626 9.99796 12.013 9.83767 12.3671 9.9557L15.7372 11.0791C16.0434 11.1811 16.25 11.4677 16.25 11.7906V14.25C16.25 15.0784 15.5784 15.75 14.75 15.75H14C7.7868 15.75 2.75 10.7132 2.75 4.5V3.75Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="w-auto p-1">
                                                        <span>Get Feee Demo</span>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 p-8">
                                <iframe
                                    src="https://www.youtube.com/embed/NaIoSNuC2_0?controls=0&playsinline=1&autoplay=true&muted=1"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    style="width: 100%; height: 82%; border-radius: 50%;" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- <section class="horizontal">
                <div class="pin-wrap">
                    <div class="animation-wrap to-right">

                        <div class="item">
                            <div class="overflow-hidden bg-white py-24 sm:py-32">
                                <div class="mx-auto max-w-11xl px-6 lg:px-8">
                                    <div
                                        class="mx-auto grid max-w-2xl grid-cols-1 gap-y-16 gap-x-8 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                                        <div class="lg:pr-8 lg:pt-4">
                                            <div class="lg:max-w-lg">
                                                <h2
                                                    class="text-lg font-semibold leading-8 tracking-tight text-indigo-600">
                                                    Deploy faster</h2>
                                                <p
                                                    class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                                                    NOC</p>
                                                <p class="mt-6 text-lg leading-8 text-gray-600">Lorem ipsum, dolor sit
                                                    amet consectetur adipisicing elit. Maiores impedit perferendis
                                                    suscipit eaque, iste dolor cupiditate blanditiis ratione.</p>
                                                <dl
                                                    class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-600 lg:max-w-none">
                                                    <div class="relative pl-9">
                                                        <dt class="inline font-semibold text-gray-900">
                                                            <!-- Heroicon name: mini/cloud-arrow-up -->
                                                            <svg class="absolute top-1 left-1 h-5 w-5 text-indigo-600"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M5.5 17a4.5 4.5 0 01-1.44-8.765 4.5 4.5 0 018.302-3.046 3.5 3.5 0 014.504 4.272A4 4 0 0115 17H5.5zm3.75-2.75a.75.75 0 001.5 0V9.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0l-3.25 3.5a.75.75 0 101.1 1.02l1.95-2.1v4.59z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            Push to deploy.
                                                        </dt>
                                                        <dd class="inline">Lorem ipsum, dolor sit amet consectetur
                                                            adipisicing elit. Maiores impedit perferendis suscipit
                                                            eaque, iste dolor cupiditate blanditiis ratione.</dd>
                                                    </div>

                                                    <div class="relative pl-9">
                                                        <dt class="inline font-semibold text-gray-900">
                                                            <!-- Heroicon name: mini/lock-closed -->
                                                            <svg class="absolute top-1 left-1 h-5 w-5 text-indigo-600"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            SSL certificates.
                                                        </dt>
                                                        <dd class="inline">Anim aute id magna aliqua ad ad non deserunt
                                                            sunt. Qui irure qui lorem cupidatat commodo.</dd>
                                                    </div>

                                                    <div class="relative pl-9">
                                                        <dt class="inline font-semibold text-gray-900">
                                                            <!-- Heroicon name: mini/server -->
                                                            <svg class="absolute top-1 left-1 h-5 w-5 text-indigo-600"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true">
                                                                <path
                                                                    d="M4.632 3.533A2 2 0 016.577 2h6.846a2 2 0 011.945 1.533l1.976 8.234A3.489 3.489 0 0016 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M4 13a2 2 0 100 4h12a2 2 0 100-4H4zm11.24 2a.75.75 0 01.75-.75H16a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75h-.01a.75.75 0 01-.75-.75V15zm-2.25-.75a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 00.75-.75V15a.75.75 0 00-.75-.75h-.01z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            Database backups.
                                                        </dt>
                                                        <dd class="inline">Ac tincidunt sapien vehicula erat auctor
                                                            pellentesque rhoncus. Et magna sit morbi lobortis.</dd>
                                                    </div>
                                                </dl>
                                            </div>
                                        </div>
                                        <img src="https://tailwindui.com/img/component-images/dark-project-app-screenshot.png"
                                            alt="Product screenshot"
                                            class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:-ml-0"
                                            width="2432" height="1442" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="overflow-hidden bg-white py-24 sm:py-32">
                                <div class="mx-auto max-w-11xl px-6 lg:px-8">
                                    <div
                                        class="mx-auto grid max-w-2xl grid-cols-1 gap-y-16 gap-x-8 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                                        <div class="lg:pr-8 lg:pt-4">
                                            <div class="lg:max-w-lg">
                                                <h2
                                                    class="text-lg font-semibold leading-8 tracking-tight text-indigo-600">
                                                    Deploy faster</h2>
                                                <p
                                                    class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                                                    SOC</p>
                                                <p class="mt-6 text-lg leading-8 text-gray-600">Lorem ipsum, dolor sit
                                                    amet consectetur adipisicing elit. Maiores impedit perferendis
                                                    suscipit eaque, iste dolor cupiditate blanditiis ratione.</p>
                                                <dl
                                                    class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-600 lg:max-w-none">
                                                    <div class="relative pl-9">
                                                        <dt class="inline font-semibold text-gray-900">
                                                            <!-- Heroicon name: mini/cloud-arrow-up -->
                                                            <svg class="absolute top-1 left-1 h-5 w-5 text-indigo-600"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M5.5 17a4.5 4.5 0 01-1.44-8.765 4.5 4.5 0 018.302-3.046 3.5 3.5 0 014.504 4.272A4 4 0 0115 17H5.5zm3.75-2.75a.75.75 0 001.5 0V9.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0l-3.25 3.5a.75.75 0 101.1 1.02l1.95-2.1v4.59z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            Push to deploy.
                                                        </dt>
                                                        <dd class="inline">Lorem ipsum, dolor sit amet consectetur
                                                            adipisicing elit. Maiores impedit perferendis suscipit
                                                            eaque, iste dolor cupiditate blanditiis ratione.</dd>
                                                    </div>

                                                    <div class="relative pl-9">
                                                        <dt class="inline font-semibold text-gray-900">
                                                            <!-- Heroicon name: mini/lock-closed -->
                                                            <svg class="absolute top-1 left-1 h-5 w-5 text-indigo-600"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            SSL certificates.
                                                        </dt>
                                                        <dd class="inline">Anim aute id magna aliqua ad ad non deserunt
                                                            sunt. Qui irure qui lorem cupidatat commodo.</dd>
                                                    </div>

                                                    <div class="relative pl-9">
                                                        <dt class="inline font-semibold text-gray-900">
                                                            <!-- Heroicon name: mini/server -->
                                                            <svg class="absolute top-1 left-1 h-5 w-5 text-indigo-600"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true">
                                                                <path
                                                                    d="M4.632 3.533A2 2 0 016.577 2h6.846a2 2 0 011.945 1.533l1.976 8.234A3.489 3.489 0 0016 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M4 13a2 2 0 100 4h12a2 2 0 100-4H4zm11.24 2a.75.75 0 01.75-.75H16a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75h-.01a.75.75 0 01-.75-.75V15zm-2.25-.75a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 00.75-.75V15a.75.75 0 00-.75-.75h-.01z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            Database backups.
                                                        </dt>
                                                        <dd class="inline">Ac tincidunt sapien vehicula erat auctor
                                                            pellentesque rhoncus. Et magna sit morbi lobortis.</dd>
                                                    </div>
                                                </dl>
                                            </div>
                                        </div>
                                        <img src="https://tailwindui.com/img/component-images/dark-project-app-screenshot.png"
                                            alt="Product screenshot"
                                            class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:-ml-0"
                                            width="2432" height="1442" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="overflow-hidden bg-white py-24 sm:py-32">
                                <div class="mx-auto max-w-11xl px-6 lg:px-8">
                                    <div
                                        class="mx-auto grid max-w-2xl grid-cols-1 gap-y-16 gap-x-8 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                                        <div class="lg:pr-8 lg:pt-4">
                                            <div class="lg:max-w-lg">
                                                <h2
                                                    class="text-lg font-semibold leading-8 tracking-tight text-indigo-600">
                                                    Deploy faster</h2>
                                                <p
                                                    class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                                                    AMS</p>
                                                <p class="mt-6 text-lg leading-8 text-gray-600">Lorem ipsum, dolor sit
                                                    amet consectetur adipisicing elit. Maiores impedit perferendis
                                                    suscipit eaque, iste dolor cupiditate blanditiis ratione.</p>
                                                <dl
                                                    class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-600 lg:max-w-none">
                                                    <div class="relative pl-9">
                                                        <dt class="inline font-semibold text-gray-900">
                                                            <!-- Heroicon name: mini/cloud-arrow-up -->
                                                            <svg class="absolute top-1 left-1 h-5 w-5 text-indigo-600"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M5.5 17a4.5 4.5 0 01-1.44-8.765 4.5 4.5 0 018.302-3.046 3.5 3.5 0 014.504 4.272A4 4 0 0115 17H5.5zm3.75-2.75a.75.75 0 001.5 0V9.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0l-3.25 3.5a.75.75 0 101.1 1.02l1.95-2.1v4.59z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            Push to deploy.
                                                        </dt>
                                                        <dd class="inline">Lorem ipsum, dolor sit amet consectetur
                                                            adipisicing elit. Maiores impedit perferendis suscipit
                                                            eaque, iste dolor cupiditate blanditiis ratione.</dd>
                                                    </div>

                                                    <div class="relative pl-9">
                                                        <dt class="inline font-semibold text-gray-900">
                                                            <!-- Heroicon name: mini/lock-closed -->
                                                            <svg class="absolute top-1 left-1 h-5 w-5 text-indigo-600"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            SSL certificates.
                                                        </dt>
                                                        <dd class="inline">Anim aute id magna aliqua ad ad non deserunt
                                                            sunt. Qui irure qui lorem cupidatat commodo.</dd>
                                                    </div>

                                                    <div class="relative pl-9">
                                                        <dt class="inline font-semibold text-gray-900">
                                                            <!-- Heroicon name: mini/server -->
                                                            <svg class="absolute top-1 left-1 h-5 w-5 text-indigo-600"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true">
                                                                <path
                                                                    d="M4.632 3.533A2 2 0 016.577 2h6.846a2 2 0 011.945 1.533l1.976 8.234A3.489 3.489 0 0016 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M4 13a2 2 0 100 4h12a2 2 0 100-4H4zm11.24 2a.75.75 0 01.75-.75H16a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75h-.01a.75.75 0 01-.75-.75V15zm-2.25-.75a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 00.75-.75V15a.75.75 0 00-.75-.75h-.01z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            Database backups.
                                                        </dt>
                                                        <dd class="inline">Ac tincidunt sapien vehicula erat auctor
                                                            pellentesque rhoncus. Et magna sit morbi lobortis.</dd>
                                                    </div>
                                                </dl>
                                            </div>
                                        </div>
                                        <img src="https://tailwindui.com/img/component-images/dark-project-app-screenshot.png"
                                            alt="Product screenshot"
                                            class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:-ml-0"
                                            width="2432" height="1442" />
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="item"></div>
                        <div class="item"></div>
                    </div>
                </div>
            </section> --}}

            <section class="hidden">
                <div class="grid grid-cols-3 gap-3">
                    <a href="#coreservices" class="group relative block bg-black">
                        <img alt="Developer"
                            src="https://fidelisgroup.in/wp-content/uploads/2020/10/image-blog-2-1-800x450.jpg"
                            class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50" />

                        <div class="relative p-8">
                            <p
                                class="text-sm font-medium uppercase tracking-widest text-orange-500 hover:text-blue-500">
                                Our Services
                            </p>

                            <p class="text-2xl font-bold text-white">The Fidelis Advantage</p>

                            <div class="mt-64">
                                <div
                                    class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100">
                                    <p class="text-sm text-white">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('journey') }}" class="group relative block bg-black">
                        <img alt="Developer"
                            src="https://fidelisgroup.in/wp-content/uploads/2018/05/285-jir-60871-nam-eye-id-392451-jpeg1-800x450.jpg"
                            class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50" />

                        <div class="relative p-8">
                            <p
                                class="text-sm font-medium uppercase tracking-widest text-orange-500 hover:text-blue-500">
                                More About Our Journey
                            </p>

                            <p class="text-2xl font-bold text-white">Why Partner With Us</p>

                            <div class="mt-64">
                                <div
                                    class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100">
                                    <p class="text-sm text-white">
                                        Read more
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="group relative block bg-black">
                        <img alt="Developer"
                            src="https://fidelisgroup.in/wp-content/uploads/2018/05/portrait-of-a-cute-young-woman-smiling-P9G5TM81-800x450.jpg"
                            class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50" />

                        <div class="relative p-8">
                            <p
                                class="text-sm font-medium uppercase tracking-widest text-orange-500 hover:text-blue-500">
                                Our Case Studies
                            </p>

                            <p class="text-2xl font-bold text-white">Client Success Stories</p>

                            <div class="mt-64">
                                <div
                                    class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100">
                                    <p class="text-sm text-white">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis
                                        perferendis hic asperiores quibusdam quidem voluptates doloremque
                                        reiciendis nostrum harum. Repudiandae?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
            </section>

            <section class="dark:bg-gray-900 hidden">
                <div class="max-w-screen px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
                    <dl class="grid gap-8 mx-auto text-gray-900 sm:grid-cols-3 dark:text-white">

                        <a class="relative block rounded-sm border-t-4 border-orange-600 p-8 pb-24 shadow-xl bg-white">
                            <h3 class="text-4xl font-bold" id="yearsinbusiness">15</h3>
                            <p class="mt-4 text-lg font-medium text-gray-500">
                                Years in business
                            </p>

                            <span class="absolute bottom-8 right-8">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-600"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </span>
                        </a>

                        <a class="relative block rounded-sm border-t-4 border-orange-600 p-8 pb-24 shadow-xl bg-white">
                            <h3 class="text-4xl font-bold" id="happycustomer">2500</h3>
                            <p class="mt-4 text-lg font-medium text-gray-500">
                                Happy Customers
                            </p>

                            <span class="absolute bottom-8 right-8">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-600"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </span>
                        </a>

                        <a class="relative block rounded-sm border-t-4 border-orange-600 p-8 pb-24 shadow-xl bg-white">
                            <h3 class="text-4xl font-bold" id="presentincountries">12</h3>
                            <p class="mt-4 text-lg font-medium text-gray-500">
                                Present in countries
                            </p>

                            <span class="absolute bottom-8 right-8">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-600"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </span>
                        </a>
                    </dl>
                </div>
            </section>

        </main>

        <main class="mx-auto">
            <!-- Start -->
            <div class="relative">
                <section class="py-20 w-full table relative bg-[url('../../assets/images/digital/bg01.jpg')] bg-center bg-no-repeat bg-fixed">
                    <div class="container relative">
                        <div class="flex">
                            <div
                                class="lg:w-1/3 md:1/2 sm:w-2/3 p-6 rounded-md shadow-md dark:shadow-gray-800 bg-white dark:bg-slate-900 ml-36">
                                <h6 class="text-indigo-600 font-semibold mb-2">Fidelis Sourcing Agency</h6>
                                <h4 class="mb-4 md:text-[28px]] text-2xl leading-normal font-bold">Leading Digital <br>
                                    Business For <span class="text-indigo-600 typewrite" data-period="2000"
                                        data-type='[ "Agency", "Software", "Technology", "Studio", "Webapps" ]'> <span
                                            class="wrap"></span> </span> <br> Solution.</h4>
                                <p class="text-slate-400 mb-0">Certain internet providers exploit the fact that fill
                                    text cannot be recognized by automatic search engines - meaningful information
                                    cannot be distinguished from meaningless.</p>

                                <div class="mt-4">
                                    <a href="{{ route('get-free-demo') }}" data-modal-toggle="contactModal"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get
                                        a free demo</a>
                                </div>
                            </div>
                        </div>
                        <!--end grid-->
                    </div>
                    <!--end container-->
                </section>
                <!--end section-->

                <section class="absolute p-16 overflow-hidden bg-gray-100 mx-auto max-w-screen-2xl rounded-lg"
                    style="bottom: -130px; left: 0;                right: 0;                margin-left: auto;                margin-right: auto;">
                    <div class="container">
                        <div class="grid grid-cols-4 gap-4 text-center sm:grid-cols-4">
                            <div>
                                <input class="w-full rounded-lg border-gray-200 p-3 text-sm h-16"
                                    placeholder="What are you looking for" type="text" id="name" />
                            </div>

                            <div>
                                <label for="preferred location"></label>
                                <select name="" id=""
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm h-16">
                                    <option value="">Delhi</option>
                                    <option value="">Mumbai</option>
                                    <option value="">Bangalore</option>
                                    <option value="">Agra</option>
                                    <option value="">Hyderabad</option>
                                </select>
                            </div>

                            <div>
                                <select name="" id=""
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm h-16">
                                    <option value="">Fresher</option>
                                    <option value="">1 Year</option>
                                    <option value="">2 Year</option>
                                    <option value="">3 Year</option>
                                    <option value="">4 Year</option>
                                    <option value="">5+ Year</option>
                                    <option value="">10+ Year</option>
                                </select>
                            </div>

                            <div>
                                <a class="group flex items-center justify-between rounded-lg border border-current px-5 py-3 text-indigo-600 transition-colors hover:bg-indigo-600 focus:outline-none focus:ring active:bg-indigo-500"
                                    href="{{ route('careers') }}"> <span
                                        class="font-medium transition-colors group-hover:text-white"> Search my jobs
                                    </span>
                                    <span
                                        class="ml-4 flex-shrink-0 rounded-full border border-indigo-600 bg-white p-2 group-active:border-indigo-500">
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

            </div>

            <!-- ====== Pricing Section Start -->
            <section class="relative z-20 overflow-hidden bg-white pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] hidden">
                <div class="container mx-auto">
                    <div class="-mx-4 flex flex-wrap">
                        <div class="w-full px-4">
                            <div class="mx-auto mb-[60px] max-w-[510px] text-center lg:mb-20">
                                <h2 class="text-dark mb-4 text-3xl font-bold sm:text-4xl md:text-[40px]">
                                    Our Core Solutions
                                </h2>
                                <p class="text-body-color text-base">
                                    working with Fidelis will provide everything you need to generate awareness, drive
                                    traffic, connect.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="-mx-4 flex flex-wrap justify-center">
                        <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                            <div
                                class="border-primary shadow-pricing relative z-10 mb-10 overflow-hidden rounded-xl border border-opacity-20 bg-white py-10 px-8 sm:p-12 lg:py-10 lg:px-6 xl:p-12">
                                <span class="text-primary mb-4 block text-lg font-semibold">
                                    Individual
                                </span>
                                <h2 class="text-dark mb-5 text-[22px] font-bold">
                                    Business<br>Processes
                                </h2>
                                <p class="text-body-color mb-8 border-b border-[#F2F2F2] pb-8 text-base">
                                    Perfect for using in a personal website or a client project.
                                </p>
                                <div class="mb-7">
                                    <p class="text-body-color mb-1 text-base leading-loose">1 User</p>
                                    <p class="text-body-color mb-1 text-base leading-loose">
                                        All UI components
                                    </p>
                                    <p class="text-body-color mb-1 text-base leading-loose">
                                        Lifetime access
                                    </p>
                                    <p class="text-body-color mb-1 text-base leading-loose">
                                        Free updates
                                    </p>
                                    <p class="text-body-color mb-1 text-base leading-loose">
                                        Use on 1 (one) project
                                    </p>
                                    <p class="text-body-color mb-1 text-base leading-loose">
                                        3 Months support
                                    </p>
                                </div>
                                <a href="javascript:void(0)"
                                    class="text-primary hover:bg-primary hover:border-primary block w-full rounded-md border border-[#D4DEFF] bg-transparent p-4 text-center text-base font-semibold transition hover:text-white">
                                    Know Business Process
                                </a>
                                <div>
                                    <span class="absolute right-0 top-7 z-[-1]">
                                        <svg width="77" height="172" viewBox="0 0 77 172" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="86" cy="86" r="86"
                                                fill="url(#paint0_linear)" />
                                            <defs>
                                                <linearGradient id="paint0_linear" x1="86" y1="0"
                                                    x2="86" y2="172" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#3056D3" stop-opacity="0.09" />
                                                    <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span class="absolute right-4 top-4 z-[-1]">
                                        <svg width="41" height="89" viewBox="0 0 41 89" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="38.9138" cy="87.4849" r="1.42021"
                                                transform="rotate(180 38.9138 87.4849)" fill="#3056D3" />
                                            <circle cx="38.9138" cy="74.9871" r="1.42021"
                                                transform="rotate(180 38.9138 74.9871)" fill="#3056D3" />
                                            <circle cx="38.9138" cy="62.4892" r="1.42021"
                                                transform="rotate(180 38.9138 62.4892)" fill="#3056D3" />
                                            <circle cx="38.9138" cy="38.3457" r="1.42021"
                                                transform="rotate(180 38.9138 38.3457)" fill="#3056D3" />
                                            <circle cx="38.9138" cy="13.634" r="1.42021"
                                                transform="rotate(180 38.9138 13.634)" fill="#3056D3" />
                                            <circle cx="38.9138" cy="50.2754" r="1.42021"
                                                transform="rotate(180 38.9138 50.2754)" fill="#3056D3" />
                                            <circle cx="38.9138" cy="26.1319" r="1.42021"
                                                transform="rotate(180 38.9138 26.1319)" fill="#3056D3" />
                                            <circle cx="38.9138" cy="1.42021" r="1.42021"
                                                transform="rotate(180 38.9138 1.42021)" fill="#3056D3" />
                                            <circle cx="26.4157" cy="87.4849" r="1.42021"
                                                transform="rotate(180 26.4157 87.4849)" fill="#3056D3" />
                                            <circle cx="26.4157" cy="74.9871" r="1.42021"
                                                transform="rotate(180 26.4157 74.9871)" fill="#3056D3" />
                                            <circle cx="26.4157" cy="62.4892" r="1.42021"
                                                transform="rotate(180 26.4157 62.4892)" fill="#3056D3" />
                                            <circle cx="26.4157" cy="38.3457" r="1.42021"
                                                transform="rotate(180 26.4157 38.3457)" fill="#3056D3" />
                                            <circle cx="26.4157" cy="13.634" r="1.42021"
                                                transform="rotate(180 26.4157 13.634)" fill="#3056D3" />
                                            <circle cx="26.4157" cy="50.2754" r="1.42021"
                                                transform="rotate(180 26.4157 50.2754)" fill="#3056D3" />
                                            <circle cx="26.4157" cy="26.1319" r="1.42021"
                                                transform="rotate(180 26.4157 26.1319)" fill="#3056D3" />
                                            <circle cx="26.4157" cy="1.4202" r="1.42021"
                                                transform="rotate(180 26.4157 1.4202)" fill="#3056D3" />
                                            <circle cx="13.9177" cy="87.4849" r="1.42021"
                                                transform="rotate(180 13.9177 87.4849)" fill="#3056D3" />
                                            <circle cx="13.9177" cy="74.9871" r="1.42021"
                                                transform="rotate(180 13.9177 74.9871)" fill="#3056D3" />
                                            <circle cx="13.9177" cy="62.4892" r="1.42021"
                                                transform="rotate(180 13.9177 62.4892)" fill="#3056D3" />
                                            <circle cx="13.9177" cy="38.3457" r="1.42021"
                                                transform="rotate(180 13.9177 38.3457)" fill="#3056D3" />
                                            <circle cx="13.9177" cy="13.634" r="1.42021"
                                                transform="rotate(180 13.9177 13.634)" fill="#3056D3" />
                                            <circle cx="13.9177" cy="50.2754" r="1.42021"
                                                transform="rotate(180 13.9177 50.2754)" fill="#3056D3" />
                                            <circle cx="13.9177" cy="26.1319" r="1.42021"
                                                transform="rotate(180 13.9177 26.1319)" fill="#3056D3" />
                                            <circle cx="13.9177" cy="1.42019" r="1.42021"
                                                transform="rotate(180 13.9177 1.42019)" fill="#3056D3" />
                                            <circle cx="1.41963" cy="87.4849" r="1.42021"
                                                transform="rotate(180 1.41963 87.4849)" fill="#3056D3" />
                                            <circle cx="1.41963" cy="74.9871" r="1.42021"
                                                transform="rotate(180 1.41963 74.9871)" fill="#3056D3" />
                                            <circle cx="1.41963" cy="62.4892" r="1.42021"
                                                transform="rotate(180 1.41963 62.4892)" fill="#3056D3" />
                                            <circle cx="1.41963" cy="38.3457" r="1.42021"
                                                transform="rotate(180 1.41963 38.3457)" fill="#3056D3" />
                                            <circle cx="1.41963" cy="13.634" r="1.42021"
                                                transform="rotate(180 1.41963 13.634)" fill="#3056D3" />
                                            <circle cx="1.41963" cy="50.2754" r="1.42021"
                                                transform="rotate(180 1.41963 50.2754)" fill="#3056D3" />
                                            <circle cx="1.41963" cy="26.1319" r="1.42021"
                                                transform="rotate(180 1.41963 26.1319)" fill="#3056D3" />
                                            <circle cx="1.41963" cy="1.4202" r="1.42021"
                                                transform="rotate(180 1.41963 1.4202)" fill="#3056D3" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                            <div
                                class="border-primary shadow-pricing relative z-10 mb-10 overflow-hidden rounded-xl border border-opacity-20 bg-white py-10 px-8 sm:p-12 lg:py-10 lg:px-6 xl:p-12">
                                <span class="text-primary mb-4 block text-lg font-semibold">
                                    Business
                                </span>
                                <h2 class="text-dark mb-5 text-[22px] font-bold">
                                    Information Management
                                </h2>
                                <p class="text-body-color mb-8 border-b border-[#F2F2F2] pb-8 text-base">
                                    Perfect for using in a Business website or a client project.
                                </p>
                                <div class="mb-7">
                                    <p class="text-body-color mb-1 text-base leading-loose">5 Users</p>
                                    <p class="text-body-color mb-1 text-base leading-loose">
                                        All UI components
                                    </p>
                                    <p class="text-body-color mb-1 text-base leading-loose">
                                        Lifetime access
                                    </p>
                                    <p class="text-body-color mb-1 text-base leading-loose">
                                        Free updates
                                    </p>
                                    <p class="text-body-color mb-1 text-base leading-loose">
                                        Use on 3 (Three) project
                                    </p>
                                    <p class="text-body-color mb-1 text-base leading-loose">
                                        4 Months support
                                    </p>
                                </div>
                                <a href="javascript:void(0)"
                                    class="text-primary hover:bg-primary hover:border-primary block w-full rounded-md border border-[#D4DEFF] bg-transparent p-4 text-center text-base font-semibold transition hover:text-white">
                                    Know our information Management
                                </a>
                                <div>
                                    <span class="absolute right-0 top-7 z-[-1]">
                                        <svg width="77" height="172" viewBox="0 0 77 172" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="86" cy="86" r="86"
                                                fill="url(#paint0_linear)" />
                                            <defs>
                                                <linearGradient id="paint0_linear" x1="86" y1="0"
                                                    x2="86" y2="172" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#3056D3" stop-opacity="0.09" />
                                                    <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span class="absolute right-4 top-4 z-[-1]">
                                        <svg width="41" height="89" viewBox="0 0 41 89" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="38.9138" cy="87.4849" r="1.42021"
                                                transform="rotate(180 38.9138 87.4849)" fill="#3056D3" />
                                            <circle cx="38.9138" cy="74.9871" r="1.42021"
                                                transform="rotate(180 38.9138 74.9871)" fill="#3056D3" />
                                            <circle cx="38.9138" cy="62.4892" r="1.42021"
                                                transform="rotate(180 38.9138 62.4892)" fill="#3056D3" />
                                            <circle cx="38.9138" cy="38.3457" r="1.42021"
                                                transform="rotate(180 38.9138 38.3457)" fill="#3056D3" />
                                            <circle cx="38.9138" cy="13.634" r="1.42021"
                                                transform="rotate(180 38.9138 13.634)" fill="#3056D3" />
                                            <circle cx="38.9138" cy="50.2754" r="1.42021"
                                                transform="rotate(180 38.9138 50.2754)" fill="#3056D3" />
                                            <circle cx="38.9138" cy="26.1319" r="1.42021"
                                                transform="rotate(180 38.9138 26.1319)" fill="#3056D3" />
                                            <circle cx="38.9138" cy="1.42021" r="1.42021"
                                                transform="rotate(180 38.9138 1.42021)" fill="#3056D3" />
                                            <circle cx="26.4157" cy="87.4849" r="1.42021"
                                                transform="rotate(180 26.4157 87.4849)" fill="#3056D3" />
                                            <circle cx="26.4157" cy="74.9871" r="1.42021"
                                                transform="rotate(180 26.4157 74.9871)" fill="#3056D3" />
                                            <circle cx="26.4157" cy="62.4892" r="1.42021"
                                                transform="rotate(180 26.4157 62.4892)" fill="#3056D3" />
                                            <circle cx="26.4157" cy="38.3457" r="1.42021"
                                                transform="rotate(180 26.4157 38.3457)" fill="#3056D3" />
                                            <circle cx="26.4157" cy="13.634" r="1.42021"
                                                transform="rotate(180 26.4157 13.634)" fill="#3056D3" />
                                            <circle cx="26.4157" cy="50.2754" r="1.42021"
                                                transform="rotate(180 26.4157 50.2754)" fill="#3056D3" />
                                            <circle cx="26.4157" cy="26.1319" r="1.42021"
                                                transform="rotate(180 26.4157 26.1319)" fill="#3056D3" />
                                            <circle cx="26.4157" cy="1.4202" r="1.42021"
                                                transform="rotate(180 26.4157 1.4202)" fill="#3056D3" />
                                            <circle cx="13.9177" cy="87.4849" r="1.42021"
                                                transform="rotate(180 13.9177 87.4849)" fill="#3056D3" />
                                            <circle cx="13.9177" cy="74.9871" r="1.42021"
                                                transform="rotate(180 13.9177 74.9871)" fill="#3056D3" />
                                            <circle cx="13.9177" cy="62.4892" r="1.42021"
                                                transform="rotate(180 13.9177 62.4892)" fill="#3056D3" />
                                            <circle cx="13.9177" cy="38.3457" r="1.42021"
                                                transform="rotate(180 13.9177 38.3457)" fill="#3056D3" />
                                            <circle cx="13.9177" cy="13.634" r="1.42021"
                                                transform="rotate(180 13.9177 13.634)" fill="#3056D3" />
                                            <circle cx="13.9177" cy="50.2754" r="1.42021"
                                                transform="rotate(180 13.9177 50.2754)" fill="#3056D3" />
                                            <circle cx="13.9177" cy="26.1319" r="1.42021"
                                                transform="rotate(180 13.9177 26.1319)" fill="#3056D3" />
                                            <circle cx="13.9177" cy="1.42019" r="1.42021"
                                                transform="rotate(180 13.9177 1.42019)" fill="#3056D3" />
                                            <circle cx="1.41963" cy="87.4849" r="1.42021"
                                                transform="rotate(180 1.41963 87.4849)" fill="#3056D3" />
                                            <circle cx="1.41963" cy="74.9871" r="1.42021"
                                                transform="rotate(180 1.41963 74.9871)" fill="#3056D3" />
                                            <circle cx="1.41963" cy="62.4892" r="1.42021"
                                                transform="rotate(180 1.41963 62.4892)" fill="#3056D3" />
                                            <circle cx="1.41963" cy="38.3457" r="1.42021"
                                                transform="rotate(180 1.41963 38.3457)" fill="#3056D3" />
                                            <circle cx="1.41963" cy="13.634" r="1.42021"
                                                transform="rotate(180 1.41963 13.634)" fill="#3056D3" />
                                            <circle cx="1.41963" cy="50.2754" r="1.42021"
                                                transform="rotate(180 1.41963 50.2754)" fill="#3056D3" />
                                            <circle cx="1.41963" cy="26.1319" r="1.42021"
                                                transform="rotate(180 1.41963 26.1319)" fill="#3056D3" />
                                            <circle cx="1.41963" cy="1.4202" r="1.42021"
                                                transform="rotate(180 1.41963 1.4202)" fill="#3056D3" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                            <div
                                class="border-primary shadow-pricing relative z-10 mb-10 overflow-hidden rounded-xl border border-opacity-20 bg-white py-10 px-8 sm:p-12 lg:py-10 lg:px-6 xl:p-12">
                                <span class="text-primary mb-4 block text-lg font-semibold">
                                    Professional
                                </span>
                                <h2 class="text-dark mb-5 text-[22px] font-bold">
                                    Platform And Infrastructure
                                </h2>
                                <p class="text-body-color mb-8 border-b border-[#F2F2F2] pb-8 text-base">
                                    Perfect for using in a Professional website or a client project.
                                </p>
                                <div class="mb-7">
                                    <p class="text-body-color mb-1 text-base leading-loose">
                                        Unlimited Users
                                    </p>
                                    <p class="text-body-color mb-1 text-base leading-loose">
                                        All UI components
                                    </p>
                                    <p class="text-body-color mb-1 text-base leading-loose">
                                        Lifetime access
                                    </p>
                                    <p class="text-body-color mb-1 text-base leading-loose">
                                        Free updates
                                    </p>
                                    <p class="text-body-color mb-1 text-base leading-loose">
                                        Use on Unlimited project
                                    </p>
                                    <p class="text-body-color mb-1 text-base leading-loose">
                                        12 Months support
                                    </p>
                                </div>
                                <a href="javascript:void(0)"
                                    class="text-primary hover:bg-primary hover:border-primary block w-full rounded-md border border-[#D4DEFF] bg-transparent p-4 text-center text-base font-semibold transition hover:text-white">
                                    Choose Professional
                                </a>
                                <div>
                                    <span class="absolute right-0 top-7 z-[-1]">
                                        <svg width="77" height="172" viewBox="0 0 77 172" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="86" cy="86" r="86"
                                                fill="url(#paint0_linear)" />
                                            <defs>
                                                <linearGradient id="paint0_linear" x1="86" y1="0"
                                                    x2="86" y2="172" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#3056D3" stop-opacity="0.09" />
                                                    <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span class="absolute right-4 top-4 z-[-1]">
                                        <svg width="41" height="89" viewBox="0 0 41 89" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="38.9138" cy="87.4849" r="1.42021"
                                                transform="rotate(180 38.9138 87.4849)" fill="#3056D3" />
                                            <circle cx="38.9138" cy="74.9871" r="1.42021"
                                                transform="rotate(180 38.9138 74.9871)" fill="#3056D3" />
                                            <circle cx="38.9138" cy="62.4892" r="1.42021"
                                                transform="rotate(180 38.9138 62.4892)" fill="#3056D3" />
                                            <circle cx="38.9138" cy="38.3457" r="1.42021"
                                                transform="rotate(180 38.9138 38.3457)" fill="#3056D3" />
                                            <circle cx="38.9138" cy="13.634" r="1.42021"
                                                transform="rotate(180 38.9138 13.634)" fill="#3056D3" />
                                            <circle cx="38.9138" cy="50.2754" r="1.42021"
                                                transform="rotate(180 38.9138 50.2754)" fill="#3056D3" />
                                            <circle cx="38.9138" cy="26.1319" r="1.42021"
                                                transform="rotate(180 38.9138 26.1319)" fill="#3056D3" />
                                            <circle cx="38.9138" cy="1.42021" r="1.42021"
                                                transform="rotate(180 38.9138 1.42021)" fill="#3056D3" />
                                            <circle cx="26.4157" cy="87.4849" r="1.42021"
                                                transform="rotate(180 26.4157 87.4849)" fill="#3056D3" />
                                            <circle cx="26.4157" cy="74.9871" r="1.42021"
                                                transform="rotate(180 26.4157 74.9871)" fill="#3056D3" />
                                            <circle cx="26.4157" cy="62.4892" r="1.42021"
                                                transform="rotate(180 26.4157 62.4892)" fill="#3056D3" />
                                            <circle cx="26.4157" cy="38.3457" r="1.42021"
                                                transform="rotate(180 26.4157 38.3457)" fill="#3056D3" />
                                            <circle cx="26.4157" cy="13.634" r="1.42021"
                                                transform="rotate(180 26.4157 13.634)" fill="#3056D3" />
                                            <circle cx="26.4157" cy="50.2754" r="1.42021"
                                                transform="rotate(180 26.4157 50.2754)" fill="#3056D3" />
                                            <circle cx="26.4157" cy="26.1319" r="1.42021"
                                                transform="rotate(180 26.4157 26.1319)" fill="#3056D3" />
                                            <circle cx="26.4157" cy="1.4202" r="1.42021"
                                                transform="rotate(180 26.4157 1.4202)" fill="#3056D3" />
                                            <circle cx="13.9177" cy="87.4849" r="1.42021"
                                                transform="rotate(180 13.9177 87.4849)" fill="#3056D3" />
                                            <circle cx="13.9177" cy="74.9871" r="1.42021"
                                                transform="rotate(180 13.9177 74.9871)" fill="#3056D3" />
                                            <circle cx="13.9177" cy="62.4892" r="1.42021"
                                                transform="rotate(180 13.9177 62.4892)" fill="#3056D3" />
                                            <circle cx="13.9177" cy="38.3457" r="1.42021"
                                                transform="rotate(180 13.9177 38.3457)" fill="#3056D3" />
                                            <circle cx="13.9177" cy="13.634" r="1.42021"
                                                transform="rotate(180 13.9177 13.634)" fill="#3056D3" />
                                            <circle cx="13.9177" cy="50.2754" r="1.42021"
                                                transform="rotate(180 13.9177 50.2754)" fill="#3056D3" />
                                            <circle cx="13.9177" cy="26.1319" r="1.42021"
                                                transform="rotate(180 13.9177 26.1319)" fill="#3056D3" />
                                            <circle cx="13.9177" cy="1.42019" r="1.42021"
                                                transform="rotate(180 13.9177 1.42019)" fill="#3056D3" />
                                            <circle cx="1.41963" cy="87.4849" r="1.42021"
                                                transform="rotate(180 1.41963 87.4849)" fill="#3056D3" />
                                            <circle cx="1.41963" cy="74.9871" r="1.42021"
                                                transform="rotate(180 1.41963 74.9871)" fill="#3056D3" />
                                            <circle cx="1.41963" cy="62.4892" r="1.42021"
                                                transform="rotate(180 1.41963 62.4892)" fill="#3056D3" />
                                            <circle cx="1.41963" cy="38.3457" r="1.42021"
                                                transform="rotate(180 1.41963 38.3457)" fill="#3056D3" />
                                            <circle cx="1.41963" cy="13.634" r="1.42021"
                                                transform="rotate(180 1.41963 13.634)" fill="#3056D3" />
                                            <circle cx="1.41963" cy="50.2754" r="1.42021"
                                                transform="rotate(180 1.41963 50.2754)" fill="#3056D3" />
                                            <circle cx="1.41963" cy="26.1319" r="1.42021"
                                                transform="rotate(180 1.41963 26.1319)" fill="#3056D3" />
                                            <circle cx="1.41963" cy="1.4202" r="1.42021"
                                                transform="rotate(180 1.41963 1.4202)" fill="#3056D3" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                            <div
                                class="border-primary shadow-pricing relative z-10 mb-10 overflow-hidden rounded-xl border border-opacity-20 bg-white py-10 px-8 sm:p-12 lg:py-10 lg:px-6 xl:p-12">
                                <span class="text-primary mb-4 block text-lg font-semibold">
                                    Professional
                                </span>
                                <h2 class="text-dark mb-5 text-[22px] font-bold">
                                    Applications
                                </h2>
                                <p class="text-body-color mb-8 border-b border-[#F2F2F2] pb-8 text-base">
                                    Perfect for using in a Professional website or a client project.
                                </p>
                                <div class="mb-7">
                                    <p class="text-body-color mb-1 text-base leading-loose">
                                        Unlimited Users
                                    </p>
                                    <p class="text-body-color mb-1 text-base leading-loose">
                                        All UI components
                                    </p>
                                    <p class="text-body-color mb-1 text-base leading-loose">
                                        Lifetime access
                                    </p>
                                    <p class="text-body-color mb-1 text-base leading-loose">
                                        Free updates
                                    </p>
                                    <p class="text-body-color mb-1 text-base leading-loose">
                                        Use on Unlimited project
                                    </p>
                                    <p class="text-body-color mb-1 text-base leading-loose">
                                        12 Months support
                                    </p>
                                </div>
                                <a href="javascript:void(0)"
                                    class="text-primary hover:bg-primary hover:border-primary block w-full rounded-md border border-[#D4DEFF] bg-transparent p-4 text-center text-base font-semibold transition hover:text-white">
                                    Choose Professional
                                </a>
                                <div>
                                    <span class="absolute right-0 top-7 z-[-1]">
                                        <svg width="77" height="172" viewBox="0 0 77 172" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="86" cy="86" r="86"
                                                fill="url(#paint0_linear)" />
                                            <defs>
                                                <linearGradient id="paint0_linear" x1="86" y1="0"
                                                    x2="86" y2="172" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#3056D3" stop-opacity="0.09" />
                                                    <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span class="absolute right-4 top-4 z-[-1]">
                                        <svg width="41" height="89" viewBox="0 0 41 89" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="38.9138" cy="87.4849" r="1.42021"
                                                transform="rotate(180 38.9138 87.4849)" fill="#3056D3" />
                                            <circle cx="38.9138" cy="74.9871" r="1.42021"
                                                transform="rotate(180 38.9138 74.9871)" fill="#3056D3" />
                                            <circle cx="38.9138" cy="62.4892" r="1.42021"
                                                transform="rotate(180 38.9138 62.4892)" fill="#3056D3" />
                                            <circle cx="38.9138" cy="38.3457" r="1.42021"
                                                transform="rotate(180 38.9138 38.3457)" fill="#3056D3" />
                                            <circle cx="38.9138" cy="13.634" r="1.42021"
                                                transform="rotate(180 38.9138 13.634)" fill="#3056D3" />
                                            <circle cx="38.9138" cy="50.2754" r="1.42021"
                                                transform="rotate(180 38.9138 50.2754)" fill="#3056D3" />
                                            <circle cx="38.9138" cy="26.1319" r="1.42021"
                                                transform="rotate(180 38.9138 26.1319)" fill="#3056D3" />
                                            <circle cx="38.9138" cy="1.42021" r="1.42021"
                                                transform="rotate(180 38.9138 1.42021)" fill="#3056D3" />
                                            <circle cx="26.4157" cy="87.4849" r="1.42021"
                                                transform="rotate(180 26.4157 87.4849)" fill="#3056D3" />
                                            <circle cx="26.4157" cy="74.9871" r="1.42021"
                                                transform="rotate(180 26.4157 74.9871)" fill="#3056D3" />
                                            <circle cx="26.4157" cy="62.4892" r="1.42021"
                                                transform="rotate(180 26.4157 62.4892)" fill="#3056D3" />
                                            <circle cx="26.4157" cy="38.3457" r="1.42021"
                                                transform="rotate(180 26.4157 38.3457)" fill="#3056D3" />
                                            <circle cx="26.4157" cy="13.634" r="1.42021"
                                                transform="rotate(180 26.4157 13.634)" fill="#3056D3" />
                                            <circle cx="26.4157" cy="50.2754" r="1.42021"
                                                transform="rotate(180 26.4157 50.2754)" fill="#3056D3" />
                                            <circle cx="26.4157" cy="26.1319" r="1.42021"
                                                transform="rotate(180 26.4157 26.1319)" fill="#3056D3" />
                                            <circle cx="26.4157" cy="1.4202" r="1.42021"
                                                transform="rotate(180 26.4157 1.4202)" fill="#3056D3" />
                                            <circle cx="13.9177" cy="87.4849" r="1.42021"
                                                transform="rotate(180 13.9177 87.4849)" fill="#3056D3" />
                                            <circle cx="13.9177" cy="74.9871" r="1.42021"
                                                transform="rotate(180 13.9177 74.9871)" fill="#3056D3" />
                                            <circle cx="13.9177" cy="62.4892" r="1.42021"
                                                transform="rotate(180 13.9177 62.4892)" fill="#3056D3" />
                                            <circle cx="13.9177" cy="38.3457" r="1.42021"
                                                transform="rotate(180 13.9177 38.3457)" fill="#3056D3" />
                                            <circle cx="13.9177" cy="13.634" r="1.42021"
                                                transform="rotate(180 13.9177 13.634)" fill="#3056D3" />
                                            <circle cx="13.9177" cy="50.2754" r="1.42021"
                                                transform="rotate(180 13.9177 50.2754)" fill="#3056D3" />
                                            <circle cx="13.9177" cy="26.1319" r="1.42021"
                                                transform="rotate(180 13.9177 26.1319)" fill="#3056D3" />
                                            <circle cx="13.9177" cy="1.42019" r="1.42021"
                                                transform="rotate(180 13.9177 1.42019)" fill="#3056D3" />
                                            <circle cx="1.41963" cy="87.4849" r="1.42021"
                                                transform="rotate(180 1.41963 87.4849)" fill="#3056D3" />
                                            <circle cx="1.41963" cy="74.9871" r="1.42021"
                                                transform="rotate(180 1.41963 74.9871)" fill="#3056D3" />
                                            <circle cx="1.41963" cy="62.4892" r="1.42021"
                                                transform="rotate(180 1.41963 62.4892)" fill="#3056D3" />
                                            <circle cx="1.41963" cy="38.3457" r="1.42021"
                                                transform="rotate(180 1.41963 38.3457)" fill="#3056D3" />
                                            <circle cx="1.41963" cy="13.634" r="1.42021"
                                                transform="rotate(180 1.41963 13.634)" fill="#3056D3" />
                                            <circle cx="1.41963" cy="50.2754" r="1.42021"
                                                transform="rotate(180 1.41963 50.2754)" fill="#3056D3" />
                                            <circle cx="1.41963" cy="26.1319" r="1.42021"
                                                transform="rotate(180 1.41963 26.1319)" fill="#3056D3" />
                                            <circle cx="1.41963" cy="1.4202" r="1.42021"
                                                transform="rotate(180 1.41963 1.4202)" fill="#3056D3" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- ====== Pricing Section End -->

            <!-- Start Section-->
            <section class="relative md:py-24 py-16 overflow-hidden hidden" id="coreservices">
                <div class="container">
                    <div class="grid grid-cols-1 pb-8 text-center wow animate__animated animate__fadeInUp"
                        data-wow-delay=".1s">
                        <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Our Core
                            Services</h3>
                        <p class="text-slate-400 max-w-xl mx-auto">working with Fidelis will provide everything you
                            need to generate awareness, drive traffic, connect.</p>
                    </div>
                    <!--end grid-->

                    <div id="accordion-flush" data-accordion="collapse"
                        data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
                        data-inactive-classes="text-gray-500 dark:text-gray-400">
                        <h2 id="accordion-flush-heading-1">
                            <button type="button"
                                class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                                data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                                aria-controls="accordion-flush-body-1">
                                <span>Business Processes</span>
                                <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-1" class="hidden"
                            aria-labelledby="accordion-flush-heading-1">
                            <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of
                                    interactive components built on top of Tailwind CSS including buttons, dropdowns,
                                    modals, navbars, and more.</p>
                                <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a
                                        href="/docs/getting-started/introduction/"
                                        class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and
                                    start developing websites even faster with components on top of Tailwind CSS.</p>
                            </div>
                        </div>
                        <h2 id="accordion-flush-heading-2">
                            <button type="button"
                                class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                                data-accordion-target="#accordion-flush-body-2" aria-expanded="true"
                                aria-controls="accordion-flush-body-2">
                                <span>Information Management</span>
                                <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-2" class="hidden"
                            aria-labelledby="accordion-flush-heading-2">
                            <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and
                                    designed using the Figma software so everything you see in the library has a design
                                    equivalent in our Figma file.</p>
                                <p class="text-gray-500 dark:text-gray-400">Check out the <a
                                        href="https://flowbite.com/figma/"
                                        class="text-blue-600 dark:text-blue-500 hover:underline">Figma design
                                        system</a> based on the utility classes from Tailwind CSS and components from
                                    Flowbite.</p>
                            </div>
                        </div>
                        <h2 id="accordion-flush-heading-3">
                            <button type="button"
                                class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                                data-accordion-target="#accordion-flush-body-3" aria-expanded="true"
                                aria-controls="accordion-flush-body-3">
                                <span>Applications</span>
                                <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-3" class="hidden"
                            aria-labelledby="accordion-flush-heading-3">
                            <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core
                                    components from Flowbite are open source under the MIT license, whereas Tailwind UI
                                    is a paid product. Another difference is that Flowbite relies on smaller and
                                    standalone components, whereas Tailwind UI offers sections of pages.</p>
                                <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using
                                    both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason
                                    stopping you from using the best of two worlds.</p>
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:
                                </p>
                                <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
                                    <li><a href="https://flowbite.com/pro/"
                                            class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a>
                                    </li>
                                    <li><a href="https://tailwindui.com/" rel="nofollow"
                                            class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <h2 id="accordion-flush-heading-4">
                            <button type="button"
                                class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                                data-accordion-target="#accordion-flush-body-4" aria-expanded="true"
                                aria-controls="accordion-flush-body-4">
                                <span>Platform And Infrastructure</span>
                                <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-4" class="hidden"
                            aria-labelledby="accordion-flush-heading-4">
                            <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core
                                    components from Flowbite are open source under the MIT license, whereas Tailwind UI
                                    is a paid product. Another difference is that Flowbite relies on smaller and
                                    standalone components, whereas Tailwind UI offers sections of pages.</p>
                                <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using
                                    both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason
                                    stopping you from using the best of two worlds.</p>
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:
                                </p>
                                <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
                                    <li><a href="https://flowbite.com/pro/"
                                            class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a>
                                    </li>
                                    <li><a href="https://tailwindui.com/" rel="nofollow"
                                            class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <h2 id="accordion-flush-heading-5">
                            <button type="button"
                                class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                                data-accordion-target="#accordion-flush-body-5" aria-expanded="true"
                                aria-controls="accordion-flush-body-5">
                                <span>Staffing solutions</span>
                                <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-5" class="hidden"
                            aria-labelledby="accordion-flush-heading-5">
                            <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core
                                    components from Flowbite are open source under the MIT license, whereas Tailwind UI
                                    is a paid product. Another difference is that Flowbite relies on smaller and
                                    standalone components, whereas Tailwind UI offers sections of pages.</p>
                                <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using
                                    both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason
                                    stopping you from using the best of two worlds.</p>
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:
                                </p>
                                <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
                                    <li><a href="https://flowbite.com/pro/"
                                            class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a>
                                    </li>
                                    <li><a href="https://tailwindui.com/" rel="nofollow"
                                            class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>



                <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px] mt-8">
                    <a href="{{ route('robotic-process-automation') }}"
                        class="lg:col-span-4 md:col-span-6 wow animate__animated animate__fadeInUp"
                        data-wow-delay=".1s">
                        <div
                            class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                            <div
                                class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                                <i data-feather="monitor" class="h-5 w-5 rotate-45"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="mb-0 text-lg font-medium">Robotic Process Automation</h4>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('business-process-management-automation') }}"
                        class="lg:col-span-4 md:col-span-6 wow animate__animated animate__fadeInUp"
                        data-wow-delay=".3s">
                        <div
                            class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                            <div
                                class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                                <i data-feather="heart" class="h-5 w-5 rotate-45"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="mb-0 text-lg font-medium">Business Process Management & Automation
                                </h4>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('business-intelligence-analytical-services') }}"
                        class="lg:col-span-4 md:col-span-6 wow animate__animated animate__fadeInUp"
                        data-wow-delay=".5s">
                        <div
                            class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                            <div
                                class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                                <i data-feather="eye" class="h-5 w-5 rotate-45"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="mb-0 text-lg font-medium">Business Intelligence And Analytical Services
                                </h4>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('database-storage-admin') }}"
                        class="lg:col-span-4 md:col-span-6 wow animate__animated animate__fadeInUp"
                        data-wow-delay=".7s">
                        <div
                            class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                            <div
                                class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                                <i data-feather="layout" class="h-5 w-5 rotate-45"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="mb-0 text-lg font-medium">Database And Storage Admin</h4>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('application-development') }}"
                        class="lg:col-span-4 md:col-span-6 wow animate__animated animate__fadeInUp"
                        data-wow-delay=".9s">
                        <div
                            class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                            <div
                                class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                                <i data-feather="feather" class="h-5 w-5 rotate-45"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="mb-0 text-lg font-medium">Application Development</h4>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('erp-application-development-services') }}"
                        class="lg:col-span-4 md:col-span-6 wow animate__animated animate__fadeInUp"
                        data-wow-delay="1.1s">
                        <div
                            class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                            <div
                                class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                                <i data-feather="code" class="h-5 w-5 rotate-45"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="mb-0 text-lg font-medium">ERP Application Management Services</h4>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('application-management') }}"
                        class="lg:col-span-4 md:col-span-6 wow animate__animated animate__fadeInUp"
                        data-wow-delay="1.3s">
                        <div
                            class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                            <div
                                class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                                <img src="https://fidelisgroup.in/wp-content/uploads/2020/10/039-data.png"
                                    alt="" class="h-5 w-5 rotate-45">
                            </div>
                            <div class="flex-1">
                                <h4 class="mb-0 text-lg font-medium">Application Management</h4>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('application-QA-&-validation') }}"
                        class="lg:col-span-4 md:col-span-6 wow animate__animated animate__fadeInUp"
                        data-wow-delay="1.5s">
                        <div
                            class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                            <div
                                class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                                <img src="https://fidelisgroup.in/wp-content/uploads/2020/10/003-analytics.png"
                                    alt="" class="h-5 w-5 rotate-45">
                            </div>
                            <div class="flex-1">
                                <h4 class="mb-0 text-lg font-medium">Applications QA And Validation</h4>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('devops-advisory') }}"
                        class="lg:col-span-4 md:col-span-6 wow animate__animated animate__fadeInUp"
                        data-wow-delay="1.7s">
                        <div
                            class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                            <div
                                class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                                <img src="https://fidelisgroup.in/wp-content/uploads/2020/10/094-networking.png"
                                    class="h-5 w-5 rotate-45">
                            </div>
                            <div class="flex-1">
                                <h4 class="mb-0 text-lg font-medium">Devops Advisory</h4>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('cloud-computing') }}"
                        class="lg:col-span-4 md:col-span-6 wow animate__animated animate__fadeInUp"
                        data-wow-delay="1.7s">
                        <div
                            class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                            <div
                                class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                                <img src="https://fidelisgroup.in/wp-content/uploads/2020/10/040-network.png"
                                    class="h-5 w-5 rotate-45">
                            </div>
                            <div class="flex-1">
                                <h4 class="mb-0 text-lg font-medium">Cloud Computing</h4>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('it-&-infra-management') }}"
                        class="lg:col-span-4 md:col-span-6 wow animate__animated animate__fadeInUp"
                        data-wow-delay="1.7s">
                        <div
                            class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                            <div
                                class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                                <img src="https://fidelisgroup.in/wp-content/uploads/2020/10/082-chip.png"
                                    class="h-5 w-5 rotate-45">
                            </div>
                            <div class="flex-1">
                                <h4 class="mb-0 text-lg font-medium">IT And Infra Management</h4>
                            </div>
                        </div>
                </div>

                <a href="{{ route('data-center-enablement') }}"
                    class="lg:col-span-4 md:col-span-6 wow animate__animated animate__fadeInUp"
                    data-wow-delay="1.7s">
                    <div
                        class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img src="https://fidelisgroup.in/wp-content/uploads/2020/10/130-web.png"
                                class="h-5 w-5 rotate-45">
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-lg font-medium">Data Center Enablement</h4>
                        </div>
                    </div>
                </a>

                <a href="{{ route('managed-services') }}"
                    class="lg:col-span-4 md:col-span-6 wow animate__animated animate__fadeInUp"
                    data-wow-delay="1.7s">
                    <div
                        class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img src="https://fidelisgroup.in/wp-content/uploads/2020/10/089-touch-screen.png"
                                class="h-5 w-5 rotate-45">
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-lg font-medium">Managed Services</h4>
                        </div>
                    </div>
                </a>

                <a href="{{ route('contingent-staffing') }}"
                    class="lg:col-span-4 md:col-span-6 wow animate__animated animate__fadeInUp"
                    data-wow-delay="1.7s">
                    <div
                        class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-3 rounded-md bg-white dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full mr-3">
                            <img src="https://fidelisgroup.in/wp-content/uploads/2020/10/066-humanoid.png"
                                alt="" class="h-5 w-5 rotate-45">
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-lg font-medium">Skill Development</h4>
                        </div>
                    </div>
                </a>

    </div>
    <!--end grid-->
    </section>

    <div class="md:mt-44 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Eliminating
                Challenges Across Industries And Geographies</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Working with Fidelis will provide everything you need to
                generate awareness, drive traffic, connect.</p>
        </div>
        <!--end grid-->
    </div>
    <!--end container-->

    <div class="md:mb-24 mb-16 mx-auto max-w-screen-2xl">

        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px] owl-carousel"
            id="industriesCarousel">
            <div
                class="group relative p-6 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-indigo-600 dark:hover:bg-indigo-600 transition-all duration-500 ease-in-out rounded-xl bg-gray-100 dark:bg-slate-900">
                <div class="absolute text-transparent -m-3">
                    <lord-icon src="https://cdn.lordicon.com/gzrilpgj.json" trigger="hover" delay="2000"
                        style="width: 120px;height: 120px;top: -80px;left: 0;"></lord-icon>
                </div>

                <div class="mt-6">
                    <a href=""
                        class="text-lg font-medium group-hover:text-white transition-all duration-500 ease-in-out">Banking</a>
                    <p class="text-slate-400 group-hover:text-white/50 transition-all duration-500 ease-in-out mt-3">
                        The phrasal sequence of the is now so that many campaign and benefit</p>
                </div>
            </div>

            <div
                class="group relative p-6 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-indigo-600 dark:hover:bg-indigo-600 transition-all duration-500 ease-in-out rounded-xl bg-gray-100 dark:bg-slate-900">
                <div class="absolute text-transparent -m-3">
                    <lord-icon class="h-24 w-24 fill-indigo-600/5 group-hover:fill-white/10"
                        src="https://cdn.lordicon.com/hcowevpv.json" trigger="hover"
                        colors="primary:#2516c7,tertiary:#ebe6ef"
                        style="width: 120px;height: 120px;top: -80px;left: 0;"> </lord-icon>
                </div>

                <div class="mt-6">
                    <a href=""
                        class="text-lg font-medium group-hover:text-white transition-all duration-500 ease-in-out">Fintech</a>
                    <p class="text-slate-400 group-hover:text-white/50 transition-all duration-500 ease-in-out mt-3">
                        The phrasal sequence of the is now so that many campaign and benefit</p>
                </div>
            </div>
            <!--end feature-->

            <div
                class="group relative p-6 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-indigo-600 dark:hover:bg-indigo-600 transition-all duration-500 ease-in-out rounded-xl bg-gray-100 dark:bg-slate-900">
                <div class="absolute text-transparent -m-3">
                    <lord-icon src="https://cdn.lordicon.com/uiaaaqiz.json" trigger="hover"
                        colors="primary:#2516c7,secondary:#e86830"
                        style="width: 120px;height: 120px;top: -80px;left: 0;"> </lord-icon>
                </div>

                <div class="mt-6">
                    <a href=""
                        class="text-lg font-medium group-hover:text-white transition-all duration-500 ease-in-out">Healthcare</a>
                    <p class="text-slate-400 group-hover:text-white/50 transition-all duration-500 ease-in-out mt-3">
                        The phrasal sequence of the is now so that many campaign and benefit</p>
                </div>
            </div>
            <!--end feature-->

            <div
                class="group relative p-6 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-indigo-600 dark:hover:bg-indigo-600 transition-all duration-500 ease-in-out rounded-xl bg-gray-100 dark:bg-slate-900">
                <div class="absolute text-transparent -m-3">
                    <lord-icon src="https://cdn.lordicon.com/nnbhwnej.json" trigger="hover"
                        colors="primary:#646e78" style="width: 120px;height: 120px;top: -80px;left: 0;"></lord-icon>
                </div>

                <div class="mt-6">
                    <a href=""
                        class="text-lg font-medium group-hover:text-white transition-all duration-500 ease-in-out">Manufacturing</a>
                    <p class="text-slate-400 group-hover:text-white/50 transition-all duration-500 ease-in-out mt-3">
                        The phrasal sequence of the is now so that many campaign and benefit</p>
                </div>
            </div>
            <!--end feature-->

            <div
                class="group relative p-6 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-indigo-600 dark:hover:bg-indigo-600 transition-all duration-500 ease-in-out rounded-xl bg-gray-100 dark:bg-slate-900">
                <div class="absolute text-transparent -m-3">
                    <lord-icon src="https://cdn.lordicon.com/wjrtlwtp.json" trigger="hover"
                        colors="primary:#e86830,secondary:#2516c7,tertiary:#08a88a,quaternary:#ffc739"
                        style="width: 120px;height: 120px;top: -80px;left: 0;">
                    </lord-icon>
                </div>

                <div class="mt-6">
                    <a href=""
                        class="text-lg font-medium group-hover:text-white transition-all duration-500 ease-in-out">Enterprise
                        Technologies</a>
                    <p class="text-slate-400 group-hover:text-white/50 transition-all duration-500 ease-in-out mt-3">
                        The phrasal sequence of the is now so that many campaign and benefit</p>
                </div>
            </div>
            <!--end feature-->

            <div
                class="group relative p-6 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-indigo-600 dark:hover:bg-indigo-600 transition-all duration-500 ease-in-out rounded-xl bg-gray-100 dark:bg-slate-900">
                <div class="absolute text-transparent -m-3">
                    <lord-icon src="https://cdn.lordicon.com/ggihhudh.json" trigger="hover" delay="2000"
                        colors="primary:#2516c7,secondary:#646e78,tertiary:#e86830"
                        style="width: 120px;height: 120px;top: -80px;left: 0;">
                    </lord-icon>
                </div>

                <div class="mt-6">
                    <a href=""
                        class="text-lg font-medium group-hover:text-white transition-all duration-500 ease-in-out">Retail
                        & Ecommerce</a>
                    <p class="text-slate-400 group-hover:text-white/50 transition-all duration-500 ease-in-out mt-3">
                        The phrasal sequence of the is now so that many campaign and benefit</p>
                </div>
            </div>
            <!--end feature-->

        </div>
    </div>
    <!--end container-->

    <!--end container-->
    <section class="bg-gray-100 rounded-lg">
        <div class="mx-auto px-4 py-16 sm:px-6 sm:py-24 lg:mr-0 lg:pl-8 lg:pr-0">
            <div class="grid grid-cols-1 gap-y-8 lg:grid-cols-3 lg:items-center lg:gap-x-16">
                <div class="max-w-xl text-center sm:text-left">
                    <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">
                        Don't just take our word for it...
                        <br class="hidden sm:block lg:hidden" />Read reviews from our customers
                    </h2>

                    <br>
                    <a class="text-white bg-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-sm text-sm px-5 py-2.5 text-center mr-2 mb-2"
                        href="https://www.google.com/search?q=fidelisgroup&oq=fidelisgroup&aqs=chrome.0.69i59j0i10i512l3j69i60l4.1339j0j4&sourceid=chrome&ie=UTF-8#lrd=0x3bae144d4c124637:0xd8f52406eb1db9a6,3,,,,"
                        target="_blank">
                        Give a review
                    </a>

                    <div class="hidden lg:mt-8 lg:flex lg:gap-4">
                        <button
                            class="prev-button rounded-full border border-orange-600 p-3 text-orange-600 hover:bg-orange-600 hover:text-white">
                            <span class="sr-only">Previous Slide</span>
                            <svg class="h-5 w-5 -rotate-180 transform" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" />
                            </svg>
                        </button>

                        <button
                            class="next-button rounded-full border border-orange-600 p-3 text-orange-600 hover:bg-orange-600 hover:text-white">
                            <span class="sr-only">Next Slide</span>
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="-mx-6 lg:col-span-2 lg:mx-0">
                    <div class=" !overflow-hidden">
                        <div id="testimonial-carousel" class="owl-carousel">
                            <div class="swiper-slide">
                                <blockquote class="flex h-full flex-col justify-between bg-white p-12">
                                    <div>
                                        <div class="flex gap-0.5 text-orange-500">
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </div>

                                        <div class="mt-4">
                                            <p class="text-2xl font-bold text-blue-600 sm:text-3xl">
                                                Breview your thoughts
                                            </p>

                                            <p class="mt-4 leading-relaxed text-gray-500">
                                                “Fidelis has been a wonderful company starting out. Several things worth
                                                pointing out are within the overall atmosphere. Since Fidelis is in it's
                                                growth phase, it allows the management team to easily help everyone get
                                                acquainted with the overall job feel. My fellow team members and HR have
                                                been wonderful. Fidelis is fun place to work at, we don't miss
                                                celebration's and festivals. The hiring process is easily streamlined.
                                                All expectations were made clear throughout the entire process. Looking
                                                forward to many more years with this company
                                            </p>
                                        </div>
                                    </div>

                                    <footer class="mt-8 text-sm text-gray-500">
                                        &mdash; Priyanka MR
                                    </footer>
                                </blockquote>
                            </div>

                            <div class="swiper-slide">
                                <blockquote class="flex h-full flex-col justify-between bg-white p-12">
                                    <div>
                                        <div class="flex gap-0.5 text-orange-500">
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </div>

                                        <div class="mt-4">
                                            <p class="text-2xl font-bold text-blue-600 sm:text-3xl">
                                                Good Work Life Balance
                                            </p>

                                            <p class="mt-4 leading-relaxed text-gray-500">
                                                I must say you will get alot of opportunities to grow yourself here.
                                                Fidelis is a great organisation to work.
                                                A dedicated team of HR personnel to assist in recruitment to IT,Non-IT,
                                                Retail and other Sector.
                                                Awesome/Supportive Management and on Time salary. :)
                                                Good Work Life Balance and No work Pressure.happy to work with fidelis
                                            </p>
                                        </div>
                                    </div>

                                    <footer class="mt-8 text-sm text-gray-500">
                                        &mdash; Vasim Sutar
                                    </footer>
                                </blockquote>
                            </div>

                            <div class="swiper-slide">
                                <blockquote class="flex h-full flex-col justify-between bg-white p-12">
                                    <div>
                                        <div class="flex gap-0.5 text-orange-500">
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>

                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </div>

                                        <div class="mt-4">
                                            <p class="text-2xl font-bold text-blue-600 sm:text-3xl">
                                                Stayin' Alive
                                            </p>

                                            <p class="mt-4 leading-relaxed text-gray-500">
                                                Fidelis as given me an opportunity to start my career into this
                                                corporate world. Work culture and work environment over here in Fidelis
                                                is amazing
                                            </p>
                                        </div>
                                    </div>

                                    <footer class="mt-8 text-sm text-gray-500">
                                        &mdash; Michael Scott
                                    </footer>
                                </blockquote>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-8 flex justify-center gap-4 lg:hidden">
                <button aria-label="Previous slide"
                    class="prev-button rounded-full border border-pink-600 p-4 text-pink-600 hover:bg-pink-600 hover:text-white">
                    <svg class="h-5 w-5 -rotate-180 transform" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" />
                    </svg>
                </button>

                <button aria-label="Next slide"
                    class="next-button rounded-full border border-pink-600 p-4 text-pink-600 hover:bg-pink-600 hover:text-white">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" />
                    </svg>
                </button>
            </div>
        </div>
    </section>
    <!-- End Section-->

    <section class="relative z-20 overflow-hidden bg-white pt-0 pb-12 lg:pt-[120px] lg:pb-[90px] hidden">
        <div class="container mx-auto grid grid-cols-3">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto my-[200px] mb-[60px] max-w-[510px] text-center lg:mb-20">
                        <h2 class="text-dark mb-4 text-3xl font-bold sm:text-4xl md:text-[40px]"> End to End Cloud
                            Solutions </h2>
                        <p class="text-body-color text-base"> At Fidelis, we believe that good corporate governance is
                            driven by adherence to moral and ethical values, legal and regulatory framework and the
                            adoption of good practices.</p>
                    </div>
                </div>
            </div>
            <div class="col-span-2 grid grid-cols-3 justify-center">
                <div class="w-full px-4">
                    <div
                        class="border-primary shadow-pricing relative z-10 mb-10 overflow-hidden rounded-xl border border-opacity-20 bg-white py-10 px-8 sm:p-12 lg:py-10 lg:px-6 xl:p-12">
                        {{-- <span class="text-primary mb-4 block text-lg font-semibold"> Personal </span> --}}
                        <h2 class="text-dark mb-5 text-[42px] font-bold"> NOC </h2>
                        <p class="text-body-color mb-8 border-b border-[#F2F2F2] pb-8 text-base"> Perfect for using in
                            a personal
                            website or a client project. </p>
                        <div class="mb-7">
                            <p class="text-body-color mb-1 text-base leading-loose">1 User</p>
                            <p class="text-body-color mb-1 text-base leading-loose"> All UI components </p>
                            <p class="text-body-color mb-1 text-base leading-loose"> Lifetime access </p>
                            <p class="text-body-color mb-1 text-base leading-loose"> Free updates </p>
                            <p class="text-body-color mb-1 text-base leading-loose"> Use on 1 (one) project </p>
                            <p class="text-body-color mb-1 text-base leading-loose"> 3 Months support </p>
                        </div><a href="javascript:void(0)"
                            class="text-primary hover:bg-primary hover:border-primary block w-full rounded-md border border-[#D4DEFF] bg-transparent p-4 text-center text-base font-semibold transition hover:text-white">
                            Know more </a>
                        <div> <span class="absolute right-0 top-7 z-[-1]"> <svg width="77" height="172"
                                    viewBox="0 0 77 172" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="86" cy="86" r="86"
                                        fill="url(#paint0_linear)" />
                                    <defs>
                                        <linearGradient id="paint0_linear" x1="86" y1="0"
                                            x2="86" y2="172" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#3056D3" stop-opacity="0.09" />
                                            <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </span>
                            <span class="absolute right-4 top-4 z-[-1]"> <svg width="41" height="89"
                                    viewBox="0 0 41 89" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="38.9138" cy="87.4849" r="1.42021"
                                        transform="rotate(180 38.9138 87.4849)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="74.9871" r="1.42021"
                                        transform="rotate(180 38.9138 74.9871)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="62.4892" r="1.42021"
                                        transform="rotate(180 38.9138 62.4892)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="38.3457" r="1.42021"
                                        transform="rotate(180 38.9138 38.3457)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="13.634" r="1.42021"
                                        transform="rotate(180 38.9138 13.634)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="50.2754" r="1.42021"
                                        transform="rotate(180 38.9138 50.2754)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="26.1319" r="1.42021"
                                        transform="rotate(180 38.9138 26.1319)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="1.42021" r="1.42021"
                                        transform="rotate(180 38.9138 1.42021)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="87.4849" r="1.42021"
                                        transform="rotate(180 26.4157 87.4849)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="74.9871" r="1.42021"
                                        transform="rotate(180 26.4157 74.9871)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="62.4892" r="1.42021"
                                        transform="rotate(180 26.4157 62.4892)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="38.3457" r="1.42021"
                                        transform="rotate(180 26.4157 38.3457)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="13.634" r="1.42021"
                                        transform="rotate(180 26.4157 13.634)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="50.2754" r="1.42021"
                                        transform="rotate(180 26.4157 50.2754)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="26.1319" r="1.42021"
                                        transform="rotate(180 26.4157 26.1319)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="1.4202" r="1.42021"
                                        transform="rotate(180 26.4157 1.4202)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="87.4849" r="1.42021"
                                        transform="rotate(180 13.9177 87.4849)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="74.9871" r="1.42021"
                                        transform="rotate(180 13.9177 74.9871)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="62.4892" r="1.42021"
                                        transform="rotate(180 13.9177 62.4892)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="38.3457" r="1.42021"
                                        transform="rotate(180 13.9177 38.3457)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="13.634" r="1.42021"
                                        transform="rotate(180 13.9177 13.634)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="50.2754" r="1.42021"
                                        transform="rotate(180 13.9177 50.2754)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="26.1319" r="1.42021"
                                        transform="rotate(180 13.9177 26.1319)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="1.42019" r="1.42021"
                                        transform="rotate(180 13.9177 1.42019)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="87.4849" r="1.42021"
                                        transform="rotate(180 1.41963 87.4849)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="74.9871" r="1.42021"
                                        transform="rotate(180 1.41963 74.9871)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="62.4892" r="1.42021"
                                        transform="rotate(180 1.41963 62.4892)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="38.3457" r="1.42021"
                                        transform="rotate(180 1.41963 38.3457)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="13.634" r="1.42021"
                                        transform="rotate(180 1.41963 13.634)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="50.2754" r="1.42021"
                                        transform="rotate(180 1.41963 50.2754)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="26.1319" r="1.42021"
                                        transform="rotate(180 1.41963 26.1319)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="1.4202" r="1.42021"
                                        transform="rotate(180 1.41963 1.4202)" fill="#3056D3" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4">
                    <div
                        class="border-primary shadow-pricing relative z-10 mb-10 overflow-hidden rounded-xl border border-opacity-20 bg-white py-10 px-8 sm:p-12 lg:py-10 lg:px-6 xl:p-12">
                        <h2 class="text-dark mb-5 text-[42px] font-bold"> SOC </h2>
                        <p class="text-body-color mb-8 border-b border-[#F2F2F2] pb-8 text-base"> Perfect for using in
                            a Business
                            website or a client project. </p>
                        <div class="mb-7">
                            <p class="text-body-color mb-1 text-base leading-loose">5 Users</p>
                            <p class="text-body-color mb-1 text-base leading-loose"> All UI components </p>
                            <p class="text-body-color mb-1 text-base leading-loose"> Lifetime access </p>
                            <p class="text-body-color mb-1 text-base leading-loose"> Free updates </p>
                            <p class="text-body-color mb-1 text-base leading-loose"> Use on 3 (Three) project </p>
                            <p class="text-body-color mb-1 text-base leading-loose"> 4 Months support </p>
                        </div><a href="javascript:void(0)"
                            class="bg-primary border-primary block w-full rounded-md border p-4 text-center text-base font-semibold text-black transition hover:bg-opacity-90">
                            Choose SOC </a>
                        <div> <span class="absolute right-0 top-7 z-[-1]"> <svg width="77" height="172"
                                    viewBox="0 0 77 172" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="86" cy="86" r="86"
                                        fill="url(#paint0_linear)" />
                                    <defs>
                                        <linearGradient id="paint0_linear" x1="86" y1="0"
                                            x2="86" y2="172" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#3056D3" stop-opacity="0.09" />
                                            <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg> </span> <span class="absolute right-4 top-4 z-[-1]"> <svg width="41"
                                    height="89" viewBox="0 0 41 89" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="38.9138" cy="87.4849" r="1.42021"
                                        transform="rotate(180 38.9138 87.4849)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="74.9871" r="1.42021"
                                        transform="rotate(180 38.9138 74.9871)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="62.4892" r="1.42021"
                                        transform="rotate(180 38.9138 62.4892)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="38.3457" r="1.42021"
                                        transform="rotate(180 38.9138 38.3457)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="13.634" r="1.42021"
                                        transform="rotate(180 38.9138 13.634)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="50.2754" r="1.42021"
                                        transform="rotate(180 38.9138 50.2754)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="26.1319" r="1.42021"
                                        transform="rotate(180 38.9138 26.1319)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="1.42021" r="1.42021"
                                        transform="rotate(180 38.9138 1.42021)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="87.4849" r="1.42021"
                                        transform="rotate(180 26.4157 87.4849)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="74.9871" r="1.42021"
                                        transform="rotate(180 26.4157 74.9871)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="62.4892" r="1.42021"
                                        transform="rotate(180 26.4157 62.4892)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="38.3457" r="1.42021"
                                        transform="rotate(180 26.4157 38.3457)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="13.634" r="1.42021"
                                        transform="rotate(180 26.4157 13.634)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="50.2754" r="1.42021"
                                        transform="rotate(180 26.4157 50.2754)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="26.1319" r="1.42021"
                                        transform="rotate(180 26.4157 26.1319)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="1.4202" r="1.42021"
                                        transform="rotate(180 26.4157 1.4202)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="87.4849" r="1.42021"
                                        transform="rotate(180 13.9177 87.4849)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="74.9871" r="1.42021"
                                        transform="rotate(180 13.9177 74.9871)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="62.4892" r="1.42021"
                                        transform="rotate(180 13.9177 62.4892)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="38.3457" r="1.42021"
                                        transform="rotate(180 13.9177 38.3457)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="13.634" r="1.42021"
                                        transform="rotate(180 13.9177 13.634)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="50.2754" r="1.42021"
                                        transform="rotate(180 13.9177 50.2754)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="26.1319" r="1.42021"
                                        transform="rotate(180 13.9177 26.1319)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="1.42019" r="1.42021"
                                        transform="rotate(180 13.9177 1.42019)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="87.4849" r="1.42021"
                                        transform="rotate(180 1.41963 87.4849)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="74.9871" r="1.42021"
                                        transform="rotate(180 1.41963 74.9871)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="62.4892" r="1.42021"
                                        transform="rotate(180 1.41963 62.4892)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="38.3457" r="1.42021"
                                        transform="rotate(180 1.41963 38.3457)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="13.634" r="1.42021"
                                        transform="rotate(180 1.41963 13.634)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="50.2754" r="1.42021"
                                        transform="rotate(180 1.41963 50.2754)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="26.1319" r="1.42021"
                                        transform="rotate(180 1.41963 26.1319)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="1.4202" r="1.42021"
                                        transform="rotate(180 1.41963 1.4202)" fill="#3056D3" />
                                </svg> </span> </div>
                    </div>
                </div>

                <div class="w-full px-4">
                    <div
                        class="border-primary shadow-pricing relative z-10 mb-10 overflow-hidden rounded-xl border border-opacity-20 bg-white py-10 px-8 sm:p-12 lg:py-10 lg:px-6 xl:p-12">
                        <h2 class="text-dark mb-5 text-[42px] font-bold"> AMS </h2>
                        <p class="text-body-color mb-8 border-b border-[#F2F2F2] pb-8 text-base"> Perfect for using in
                            a Business
                            website or a client project. </p>
                        <div class="mb-7">
                            <p class="text-body-color mb-1 text-base leading-loose">5 Users</p>
                            <p class="text-body-color mb-1 text-base leading-loose"> All UI components </p>
                            <p class="text-body-color mb-1 text-base leading-loose"> Lifetime access </p>
                            <p class="text-body-color mb-1 text-base leading-loose"> Free updates </p>
                            <p class="text-body-color mb-1 text-base leading-loose"> Use on 3 (Three) project </p>
                            <p class="text-body-color mb-1 text-base leading-loose"> 4 Months support </p>
                        </div><a href="javascript:void(0)"
                            class="bg-primary border-primary block w-full rounded-md border p-4 text-center text-base font-semibold text-black transition hover:bg-opacity-90">
                            Choose AMS </a>
                        <div> <span class="absolute right-0 top-7 z-[-1]"> <svg width="77" height="172"
                                    viewBox="0 0 77 172" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="86" cy="86" r="86"
                                        fill="url(#paint0_linear)" />
                                    <defs>
                                        <linearGradient id="paint0_linear" x1="86" y1="0"
                                            x2="86" y2="172" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#3056D3" stop-opacity="0.09" />
                                            <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg> </span> <span class="absolute right-4 top-4 z-[-1]"> <svg width="41"
                                    height="89" viewBox="0 0 41 89" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="38.9138" cy="87.4849" r="1.42021"
                                        transform="rotate(180 38.9138 87.4849)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="74.9871" r="1.42021"
                                        transform="rotate(180 38.9138 74.9871)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="62.4892" r="1.42021"
                                        transform="rotate(180 38.9138 62.4892)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="38.3457" r="1.42021"
                                        transform="rotate(180 38.9138 38.3457)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="13.634" r="1.42021"
                                        transform="rotate(180 38.9138 13.634)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="50.2754" r="1.42021"
                                        transform="rotate(180 38.9138 50.2754)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="26.1319" r="1.42021"
                                        transform="rotate(180 38.9138 26.1319)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="1.42021" r="1.42021"
                                        transform="rotate(180 38.9138 1.42021)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="87.4849" r="1.42021"
                                        transform="rotate(180 26.4157 87.4849)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="74.9871" r="1.42021"
                                        transform="rotate(180 26.4157 74.9871)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="62.4892" r="1.42021"
                                        transform="rotate(180 26.4157 62.4892)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="38.3457" r="1.42021"
                                        transform="rotate(180 26.4157 38.3457)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="13.634" r="1.42021"
                                        transform="rotate(180 26.4157 13.634)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="50.2754" r="1.42021"
                                        transform="rotate(180 26.4157 50.2754)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="26.1319" r="1.42021"
                                        transform="rotate(180 26.4157 26.1319)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="1.4202" r="1.42021"
                                        transform="rotate(180 26.4157 1.4202)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="87.4849" r="1.42021"
                                        transform="rotate(180 13.9177 87.4849)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="74.9871" r="1.42021"
                                        transform="rotate(180 13.9177 74.9871)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="62.4892" r="1.42021"
                                        transform="rotate(180 13.9177 62.4892)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="38.3457" r="1.42021"
                                        transform="rotate(180 13.9177 38.3457)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="13.634" r="1.42021"
                                        transform="rotate(180 13.9177 13.634)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="50.2754" r="1.42021"
                                        transform="rotate(180 13.9177 50.2754)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="26.1319" r="1.42021"
                                        transform="rotate(180 13.9177 26.1319)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="1.42019" r="1.42021"
                                        transform="rotate(180 13.9177 1.42019)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="87.4849" r="1.42021"
                                        transform="rotate(180 1.41963 87.4849)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="74.9871" r="1.42021"
                                        transform="rotate(180 1.41963 74.9871)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="62.4892" r="1.42021"
                                        transform="rotate(180 1.41963 62.4892)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="38.3457" r="1.42021"
                                        transform="rotate(180 1.41963 38.3457)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="13.634" r="1.42021"
                                        transform="rotate(180 1.41963 13.634)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="50.2754" r="1.42021"
                                        transform="rotate(180 1.41963 50.2754)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="26.1319" r="1.42021"
                                        transform="rotate(180 1.41963 26.1319)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="1.4202" r="1.42021"
                                        transform="rotate(180 1.41963 1.4202)" fill="#3056D3" />
                                </svg> </span> </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="md:mb-24 mb-16 mx-auto max-w-screen-2xl py-4">
        <h3 class="text-3xl font-bold tracking-tight sm:text-4xl">Trusted and loved by 100+ tech first teams</h3>
        <br>
        <div id="logo-slider" class="grid grid-cols-6 gap-4 owl-carousel">
            @for ($i = 2; $i <= 20; $i++)
                <div><img src="https://fidelisgroup.in/wp-content/uploads/2020/10/Picture{{ $i }}.png"
                        alt="" class="w-auto" /></div>
            @endfor
        </div>
    </section>

    <!-- Start -->
    {{-- <section class="relative md:py-24 py-16">
                <div class="container">
                    <div class="grid lg:grid-cols-12 grid-cols-1 items-center gap-[30px] wow animate__animated animate__fadeInUp"
                        data-wow-delay=".1s">
                        <div class="lg:col-span-5">
                            <div class="lg:text-left text-center">
                                <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">End to End Solutions</h3>

                                <p class="text-slate-400 max-w-xl mx-auto">At Fidelis, we believe that good corporate governance is driven by adherence to moral and ethical values, legal and regulatory framework and the adoption of good practices.</p>

                                <div class="mt-6">
                                    <a href="page-pricing.html" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mr-2 mt-2"><i class="uil uil-master-card"></i> Checkout Now</a>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="lg:col-span-7 mt-8 lg:mt-0">
                            <div class="lg:ml-8">
                                <div class="grid md:grid-cols-2 grid-cols-1 md:gap-0 gap-[30px]">
                                    <div class="group border-b-[3px] dark:border-gray-700 relative shadow dark:shadow-gray-800 rounded-md md:scale-110 z-3 bg-white dark:bg-slate-900 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                                        <div class="p-6 py-8">

                                            <div class="flex mb-5">
                                                <span class="price text-4xl font-semibold mb-0">NOC</span>
                                            </div>

                                            <ul class="list-none text-slate-400">
                                                <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i> Full Access</li>
                                                <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i> Source Files</li>
                                                <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i> Free Appointments</li>
                                                <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i> Enhanced Security</li>
                                            </ul>
                                            <a href="" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-5">Get Started</a>
                                        </div>
                                    </div>

                                    <div class="group border-b-[3px] dark:border-gray-700 relative shadow dark:shadow-gray-800 rounded-md z-2 bg-gray-50 dark:bg-slate-800 wow animate__animated animate__fadeInUp"
                                        data-wow-delay=".5s">
                                        <div class="p-6 py-8 md:pl-10">

                                            <div class="flex mb-5">
                                                <span class="price text-4xl font-semibold mb-0">SOC</span>
                                            </div>

                                            <ul class="list-none text-slate-400">
                                                <li class="mb-1 flex"><i
                                                        class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i>
                                                    Full Access</li>
                                                <li class="mb-1 flex"><i
                                                        class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i>
                                                    Source Files</li>
                                                <li class="mb-1 flex"><i
                                                        class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i>
                                                    Free Appointments</li>
                                                <li class="mb-1 flex"><i
                                                        class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i>
                                                    Enhanced Security</li>
                                            </ul>
                                            <a href=""
                                                class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-5">Try
                                                it Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end grid-->
                </div>
                <!--end container-->


                <div class="container md:mt-24 mt-16">
                    <div class="grid md:grid-cols-12 grid-cols-1 items-center wow animate__animated animate__fadeInUp"
                        data-wow-delay=".1s">
                        <div class="md:col-span-6">
                            <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Blogs</h6>
                            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Reads
                                Our Latest <br> News & Blog</h3>
                        </div>

                        <div class="md:col-span-6">
                            <p class="text-slate-400 max-w-xl">working with Fidelis that can provide everything you
                                need to generate awareness, drive traffic, connect.</p>
                        </div>
                    </div>
                    <!--end grid-->

                    <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">
                        <div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                            <img src="https://fidelisgroup.in/wp-content/uploads/2021/07/From-Fidelis-CEO-1024x576.png" alt="">

                            <div class="content p-6">
                                <a href="blog-detail.html" class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Design your apps in your own way</a>
                                <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>

                                <div class="mt-4">
                                    <a href="blog-detail.html" class="btn btn-link font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read  More <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden wow animate__animated animate__fadeInUp"
                            data-wow-delay=".5s">
                            <img src="assets/images/blog/02.jpg" alt="">

                            <div class="content p-6">
                                <a href="blog-detail.html"
                                    class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">How
                                    apps is changing the IT world</a>
                                <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign
                                    and benefit</p>

                                <div class="mt-4">
                                    <a href="blog-detail.html"
                                        class="btn btn-link font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read
                                        More <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden wow animate__animated animate__fadeInUp"
                            data-wow-delay=".7s">
                            <img src="assets/images/blog/03.jpg" alt="">

                            <div class="content p-6">
                                <a href="blog-detail.html"
                                    class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Smartest
                                    Applications for Business</a>
                                <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign
                                    and benefit</p>

                                <div class="mt-4">
                                    <a href="blog-detail.html"
                                        class="btn btn-link font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read
                                        More <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end grid-->
                </div>
                <!--end container-->


            </section> --}}
    <!--end section-->
    <!-- End -->

    {{-- Contact us --}}
    <div class="flex items-center mx-auto max-w-screen-2xl">
        <div class="flex-1 h-full mx-auto bg-white rounded-lg shadow-xl">
            <div class="flex flex-col md:flex-row">
                <div class="h-32 md:h-auto md:w-1/2">
                    <article class="flex items-center gap-4 rounded-lg border border-gray-100 bg-white p-6">
                        <span class="rounded-full bg-blue-100 p-3 text-blue-600">
                            <lord-icon src="https://cdn.lordicon.com/gqdnbnwt.json" trigger="loop" delay="2000"
                                colors="primary:#e86830,secondary:#1b1091" style="width:60px;height:60px">
                            </lord-icon>
                        </span>
                        <div>
                            <p class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">
                                We bring deep insights to transform your business</p>
                            <p class="text-sm text-gray-500">Game Changing Insights</p>
                        </div>
                    </article>

                    <article class="flex items-center gap-4 rounded-lg border border-gray-100 bg-white p-6">
                        <span class="rounded-full bg-blue-100 p-3 text-blue-600">
                            <lord-icon src="https://cdn.lordicon.com/rgyftmhc.json" trigger="loop" delay="2000"
                                colors="primary:#e86830,secondary:#2516c7" style="width:60px;height:60px">
                            </lord-icon>
                        </span>
                        <div>
                            <p class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">
                                Improve efficiency, drive cost out of core processes.</p>
                            <p class="text-sm text-gray-500">End To End Solutions</p>
                        </div>
                    </article>

                    <article class="flex items-center gap-4 rounded-0 border border-gray-100 bg-white p-6">
                        <span class="rounded-full bg-blue-100 p-3 text-blue-600">
                            <lord-icon src="https://cdn.lordicon.com/xqnbvely.json" trigger="loop" delay="2000"
                                colors="primary:#e86830,secondary:#2516c7" style="width:60px;height:60px">
                            </lord-icon>
                        </span>
                        <div>
                            <p class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">
                                We support your business with foresight</p>
                            <p class="text-sm text-gray-500">Robust Support</p>
                        </div>
                    </article>

                    <img class="object-cover w-full"
                        src="https://fidelisgroup.in/wp-content/uploads/2020/10/bg-cta1-home1-1.jpg?id=2072"
                        alt="img" />
                </div>
                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                    <div class="w-full">

                        <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">
                            Lets Boost Your Growth</h3>
                        <p class="text-slate-400">At Fidelis Group We Believe In Disruptive Yet Balanced Change
                        </p>

                        {{-- <div class="flex flex-wrap mx-auto"> 
                                    
                                    <a class=" inline-flex items-center justify-center w-1/2 py-3 font-medium leading-none tracking-wider text-indigo-500 bg-gray-100 border-b-2 border-indigo-500 rounded-t sm:px-6 sm:w-auto sm:justify-start "> Your Info </a> 
                                    <a class=" inline-flex items-center justify-center w-1/2 py-3 font-medium leading-none tracking-wider border-b-2 border-gray-200 sm:px-6 sm:w-auto sm:justify-start hover:text-gray-900 "> About you </a> 
                                    <a class=" inline-flex items-center justify-center w-1/2 py-3 font-medium leading-none tracking-wider border-b-2 border-gray-200 sm:px-6 sm:w-auto sm:justify-start hover:text-gray-900 "> Contact details </a> 
                                </div>
                                    <br> --}}
                        <form action="#" class="space-y-8">
                            <div>
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                                    email</label>
                                <input type="email" id="email"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                                    placeholder="name@flowbite.com" required>
                            </div>
                            <div>
                                <label for="subject"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
                                <input type="text" id="subject"
                                    class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                                    placeholder="Let us know how we can help you" required>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="message"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your
                                    message</label>
                                <textarea id="message" rows="6"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Leave a comment..."></textarea>
                            </div>
                            <button type="submit"
                                class="py-3 px-5 text-sm font-medium text-center text-white rounded-sm bg-blue-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send
                                message</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('pages.template.footer')
    </div>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    {{-- Scripts --}}
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    <!-- Css -->
    <link href="assets/libs/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
    <link href="assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/flowheader.css') }}">
    <script src="https://use.fontawesome.com/58e9257588.js"></script>

    {{-- <link rel="stylesheet" href="https://unpkg.com/kursor/dist/kursor.css">
        <script src="https://unpkg.com/kursor"></script>
        <script>
            new kursor({
                type: 1
            })
        </script> --}}

    {{-- <script>(function(w, d) { w.CollectId = "63a30c509eed8935fca503b5"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script> --}}

    <style>
        .tagcloud{font-size:20px;font-weight:650;margin-left:40%;color:#fff}.tagcloud--item:hover{color:#ff4500}.sticky-left-container{padding:0;margin:0;position:fixed;left:-158px;top:40%;width:200px;z-index:99999}.sticky-left li{list-style-type:none;background-color:none;color:#efefef;height:43px;padding:0;margin:0 0 1px;-webkit-transition:.25s ease-in-out;-moz-transition:.25s ease-in-out;-o-transition:.25s ease-in-out;transition:.25s ease-in-out;cursor:pointer}.sticky-left li:hover{margin-right:-150px;background:#333;border-radius:25px 25px 25px 0}.sticky-left li img{float:right;border-radius:50%;margin:5px 5px 5px 10px}.sticky-left li p{padding:0;float:right;margin:0;text-transform:uppercase;line-height:43px}#industriesCarousel>div:first-child{padding-top:4rem}.read-more-state{display:none}.read-more-target{opacity:0;max-height:0;font-size:0;transition:.25s}.read-more-state:checked~.read-more-wrap .read-more-target{opacity:1;font-size:inherit;max-height:999em}.read-more-state~.read-more-trigger:before{content:'Show more'}.read-more-state:checked~.read-more-trigger:before{content:'Show less'}.read-more-trigger{cursor:pointer;display:inline-block;padding:0 .5em;color:#666;font-size:.9em;line-height:2;border:1px solid #ddd;border-radius:.25em}section.horizontal{overflow-x:hidden}section.horizontal .animation-wrap,section.horizontal .pin-wrap{display:flex;position:relative;z-index:1;height:100vh}section.horizontal .item{position:relative;padding:150px 80px;flex:0 0 calc(100vw - 480px);height:calc(100vh - 300px);display:flex;align-items:center;line-height:1.7;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;border-right:1px solid rgba(0,0,0,.06);background-color:transparent}section.horizontal .item:before{position:absolute;font-size:100px;opacity:.13;font-weight:700;z-index:-1;-webkit-transform:translate(-30px,-50px);transform:translate(-30px,-50px);line-height:1}section.horizontal .animation-wrap.to-right{counter-reset:item;float:left}section.horizontal .animation-wrap.to-left{counter-reset:item 11;float:right}section.horizontal .animation-wrap.to-right .item:before{counter-increment:item}section.horizontal .animation-wrap .item:nth-child(4n+4){align-items:flex-end}
        .Advance-Slider .item h3,.Advance-Slider .item h5{font-weight:300;text-transform:capitalize;margin:0}.Advance-Slider{width:100%;overflow:hidden; font-family: 'Nunito', sans-serif;}.Advance-Slider button.slick-arrow{position:absolute;top:0;bottom:0;height:50px;width:50px;background:#fff;z-index:99999;border:none;margin:auto;font-size:0;text-align:center;outline:0;cursor:pointer;perspective:360px}.Advance-Slider .img-fill{position:relative;height:100%}.Advance-Slider .img-fill img{height:100%;width:100%;object-fit:cover;animation:10s linear infinite myMove}.Advance-Slider .item{height:100vh;overflow:hidden;outline:0;color:#fff;font-family:Roboto,sans-serif}.Advance-Slider button.slick-next.slick-arrow{right:0;left:auto}.Advance-Slider button.slick-arrow:before{content:"\f104";top:0;left:0;margin:auto;font-family:fontawesome;font-size:18px}.Advance-Slider button.slick-next.slick-arrow:before{transform:scaleX(-1);display:block}.Advance-Slider .img-fill:after{content:'';position:absolute;top:0;left:0;width:100%;height:100%;background:#151515;opacity:.5}.Advance-Slider ul.slick-dots{position:absolute;bottom:20px;left:0;width:100%;margin:0;padding:0;text-align:center}.Advance-Slider ul.slick-dots li{display:inline-block;height:auto;padding:0 5px;line-height:0}.Advance-Slider ul.slick-dots li button:hover,.Advance-Slider ul.slick-dots li.slick-active button{opacity:1}.Advance-Slider button.slick-arrow .thumb{position:absolute;height:100px;width:150px;left:100%;top:-28px;transform-origin:0% 0%;transform:rotate3d(1,0,0,90deg)}.Advance-Slider button.slick-arrow .thumb img{height:100%;width:100%}.Advance-Slider button.slick-next .thumb{left:auto;right:100%}.Advance-Slider button.slick-prev .thumb,.Advance-Slider button.slick-prev.hover-out .thumb{animation:.3s forwards out-left}.Advance-Slider button.slick-prev.hover-in .thumb{animation:.3s forwards in-left}.Advance-Slider button.slick-next .thumb,.Advance-Slider button.slick-next.hover-out .thumb{animation:.3s forwards out-right;transform-origin:100% 50%}.Advance-Slider button.slick-next.hover-in .thumb{animation:.3s forwards in-right}.Advance-Slider button.slick-prev:hover{transform:translateX(-100%)}.Advance-Slider button.slick-next,.Advance-Slider button.slick-prev{transition:.3s}.Advance-Slider button.slick-next:hover{transform:translateX(100%)}.Advance-Slider ul.slick-dots li button img{height:0;width:20px;top:0;object-fit:cover;transition:height .2s .2s,width .2s;position:relative;left:-50%}.Advance-Slider ul.slick-dots li button a{position:absolute;height:90px;bottom:calc(100%);width:0;display:flex;align-items:flex-end;justify-content:center;transition:.2s .2s;padding-bottom:10px}.Advance-Slider ul.slick-dots li button{height:15px;width:15px;border-radius:100%;background:#fff;border:none;font-size:0px;padding:0;opacity:.5;outline:0;transition:.3s;cursor:pointer;position:relative;display:flex;justify-content:center}.Advance-Slider ul.slick-dots li button:hover img{height:80px;width:140px;transition:height .2s,width .2s .2s}.Advance-Slider ul.slick-dots li button:hover a{width:140px;transition:.3s}.Advance-Slider ul.slick-dots li button:before{content:'';bottom:calc(100% + -10px);left:7px;border:10px solid rgba(255,255,255,0);content:" ";height:0;width:0;position:absolute;pointer-events:none;border-top-color:#fff;margin-left:-10px;opacity:0;transition:.3s 350ms}.Advance-Slider ul.slick-dots li button:hover:before{opacity:1;transition:.3s}.Advance-Slider .item.slick-active{animation:1s both Slick-FastSwipeIn}.Advance-Slider .item .contain-wrapper{position:absolute;left:0;top:0;z-index:1;height:100%;width:100%;display:flex;align-items:center;justify-content:center;text-align:center}.Advance-Slider .item .contain-wrapper .dots-contain{display:none}.Advance-Slider .item h3{color:#fff;font-size:44px;font-weight: bold; animation:1s both fadeOutRight}.Advance-Slider .item h5{font-size:32px;padding:10px 0 0;animation:1s both fadeOutLeft}.Advance-Slider .item .contain-wrapper .info{max-width:1200px}.Advance-Slider .item h3 span,.Advance-Slider .item h5 span{color:#00bcd4}.Advance-Slider .item.slick-active h3{animation:1s 1s both fadeInDown}.Advance-Slider .item.slick-active h5{animation:1s 1.5s both fadeInLeft}@keyframes myMove{from{transform:scale(1,1);transform-origin:50% 50%}to{transform:scale(1.8,1.9);transform-origin:50% 0%}}@keyframes Slick-FastSwipeIn{0%{transform:rotate3d(0,1,0,150deg) scale(0) perspective(400px)}100%{transform:rotate3d(0,1,0,0deg) scale(1) perspective(400px)}}@keyframes in-left{from{-webkit-transform:rotate3d(0,1,0,90deg);transform:rotate3d(0,1,0,90deg)}to{-webkit-transform:rotate3d(0,0,0,0deg);transform:rotate3d(0,0,0,0deg)}}@keyframes out-left{from{-webkit-transform:rotate3d(0,0,0,0deg);transform:rotate3d(0,0,0,0deg)}to{-webkit-transform:rotate3d(0,1,0,86deg);transform:rotate3d(0,1,0,86deg)}}@keyframes in-right{from{-webkit-transform:rotate3d(0,-1,0,90deg);transform:rotate3d(0,-1,0,90deg)}to{-webkit-transform:rotate3d(0,0,0,0deg);transform:rotate3d(0,0,0,0deg)}}@keyframes out-right{from{-webkit-transform:rotate3d(0,0,0,0deg);transform:rotate3d(0,0,0,0deg)}to{-webkit-transform:rotate3d(0,-1,0,86deg);transform:rotate3d(0,-1,0,86deg)}}
    </style>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>

    <div class="flex items-center justify-center px-5 py-5 sticky" x-data="{showCookieBanner:true}">
            <section class="w-full p-5 lg:px-24 absolute top-0 bg-gray-600" x-show="showCookieBanner">
                <div class="md:flex items-center -mx-3">
                    <div class="md:flex-1 px-3 mb-5 md:mb-0">
                        <p class="text-center md:text-left text-white text-xs leading-tight md:pr-12">We and selected partners and related companies, use cookies and similar technologies as specified in our Cookies Policy. You agree to consent to the use of these technologies by clicking Accept, or by continuing to browse this website. You can learn more about how we use cookies and set cookie preferences in Settings.</p>
                    </div>
                    <div class="px-3 text-center">
                        <button id="btn" class="py-2 px-8 bg-gray-800 hover:bg-gray-900 text-white rounded font-bold text-sm shadow-xl mr-3" @click.prevent="document.getElementById('cookiesModal').showModal()">Cookie settings</button>
                        <button id="btn" class="py-2 px-8 bg-green-400 hover:bg-green-500 text-white rounded font-bold text-sm shadow-xl" @click.prevent="showCookieBanner=!showCookieBanner">Accept cookies</button>
                    </div>
                </div>
            </section>
            <dialog id="cookiesModal" class="h-auto w-11/12 md:w-1/2 bg-white overflow-hidden rounded-md p-0">
                <div class="flex flex-col w-full h-auto">
                    <div class="flex w-full h-auto items-center px-5 py-3">
                        <div class="w-10/12 h-auto text-lg font-bold">
                            Cookie settings
                        </div>
                        <div class="flex w-2/12 h-auto justify-end">
                            <button @click.prevent="document.getElementById('cookiesModal').close();" class="cursor-pointer focus:outline-none text-gray-400 hover:text-gray-800">
                                <i class="mdi mdi-close-circle-outline text-2xl"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex w-full items-center bg-gray-100 border-b border-gray-200 px-5 py-3 text-sm">
                        <div class="flex-1">
                            <p>Strictly necessary cookies</p>
                        </div>
                        <div class="w-10 text-right">
                            <i class="mdi mdi-check-circle text-2xl text-green-400 leading-none"></i>
                        </div>
                    </div>
                    <div class="flex w-full items-center bg-gray-100 border-b border-gray-200 px-5 py-3 text-sm">
                        <div class="flex-1">
                            <p>Cookies that remember your settings</p>
                        </div>
                        <div class="w-10 text-right">
                            <i class="mdi mdi-check-circle text-2xl text-green-400 leading-none"></i>
                        </div>
                    </div>
                    <div class="flex w-full items-center bg-gray-100 border-b border-gray-200 px-5 py-3 text-sm">
                        <div class="flex-1">
                            <p>Cookies that measure website use</p>
                        </div>
                        <div class="w-10 text-right">
                            <i class="mdi mdi-check-circle text-2xl text-green-400 leading-none"></i>
                        </div>
                    </div>
                    <div class="flex w-full items-center bg-gray-100 border-b border-gray-200 px-5 py-3 text-sm">
                        <div class="flex-1">
                            <p>Cookies that help with our communications and marketing</p>
                        </div>
                        <div class="w-10 text-right">
                            <i class="mdi mdi-check-circle text-2xl text-green-400 leading-none"></i>
                        </div>
                    </div>
                    <div class="flex w-full px-5 py-3 justify-end">
                        <button @click.prevent="document.getElementById('cookiesModal').close();" class="py-2 px-8 bg-gray-800 hover:bg-gray-900 text-white rounded font-bold text-sm shadow-xl">Save settings</button>
                    </div>
                </div>
            </dialog>
        </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

        <script type="text/javascript">
            var route = "{{ url('autocomplete-search') }}";
            $('#search').typeahead({
                source: function (query, process) {
                    return $.get(route, {
                        query: query
                    }, function (data) {
                        return process(data);
                    });
                }
            });
        </script>

    <script>
            if (typeof(Storage) !== "undefined") {
                // Code for localStorage/sessionStorage.
                var retrievedObject1 = localStorage.getItem('lastvisited1');
                if(retrievedObject1 == null){
                    localStorage.setItem('lastvisited1', window.location.href);
                }else{
                    retrievedObject2 = localStorage.getItem('lastvisited2');
                    if(retrievedObject2 == null){
                        localStorage.setItem('lastvisited2', window.location.href);
                    }else{
                        retrievedObject3 = localStorage.getItem('lastvisited3');
                        if(retrievedObject3 == null){
                            localStorage.setItem('lastvisited3', window.location.href);
                        }else{
                            // document.write('<div class="z-[9999] fixed bottom-0 left-0 right-0 bg-white shadow-md"><div id="alert-additional-content-5" class="p-4 border border-gray-300 rounded-lg bg-gray-50 dark:border-gray-600 dark:bg-gray-700" role="alert">  <div class="flex items-center"><svg aria-hidden="true" class="w-5 h-5 mr-2 text-gray-700 dark:text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg><span class="sr-only">Info</span><h3 class="text-lg font-medium text-gray-700 dark:text-gray-300">You have visited earlier</h3></div><div class="mt-2 mb-4 text-sm text-gray-700 dark:text-gray-300"> You have visited the following page <a href='+retrievedObject1+'>Page 1</a> | <a href='+retrievedObject2+'>Page 2</a> | <a href='+retrievedObject3+'>Page 3</a> </div><div class="flex"><button type="button" class="text-gray-700 bg-transparent border border-gray-700 hover:bg-gray-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:border-gray-600 dark:hover:bg-gray-600 focus:ring-gray-600 dark:text-gray-300 dark:hover:text-white" data-dismiss-target="#alert-additional-content-5" aria-label="Close"> Dismiss </button> </div></div></div>')
                        }
                    }
                }
            } else {
                // Sorry! No Web Storage support..
            }
        </script>

    <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>

    <!-- JAVASCRIPTS -->
    <script src="assets/libs/wow.js/wow.min.js"></script>
    <script src="assets/libs/tobii/js/tobii.min.js"></script>
    <script src="assets/libs/tiny-slider/min/tiny-slider.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>

    {{-- <script>
        (function(w, d) {
            w.CollectId = "63a30c509eed8935fca503b5";
            var h = d.head || d.getElementsByTagName("head")[0];
            var s = d.createElement("script");
            s.setAttribute("type", "text/javascript");
            s.async = true;
            s.setAttribute("src", "https://collectcdn.com/launcher.js");
            h.appendChild(s);
        })(window, document);
    </script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenMax.min.js"></script>

    <script>
        $.fn.parallax = function(resistance, mouse) {
            $el = $(this);
            TweenLite.to($el, 0.2, {
                x: -((mouse.clientX - window.innerWidth / 2) / resistance),
                y: -((mouse.clientY - window.innerHeight / 2) / resistance)
            });
        };

        $(document).mousemove(function(e) {
            $(".cloud1").parallax(10, e);
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/TagCloud@2.2.0/dist/TagCloud.min.js"></script>

    <script>
        const myTags = [
            'JavaScript', 'CSS', 'HTML',
            'C', 'C++', 'React',
            'Python', 'Java', 'git',
            'django', 'Node.js', 'OpenCV',
            'GCP', 'MySQL', 'jQuery',
        ];

        var tagCloud = TagCloud('.wordtag', myTags, {

            // radius in px
            radius: 190,

            // animation speed
            // slow, normal, fast
            maxSpeed: 'fast',
            initSpeed: 'fast',

            // 0 = top
            // 90 = left
            // 135 = right-bottom
            direction: 155,

            // interact with cursor move on mouse out
            keep: true

        });
    </script>

    {{-- Typing effect --}}
    <script>
        var TxtType = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 1000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };

        TxtType.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

            var that = this;
            var delta = 200 - Math.random() * 100;

            if (this.isDeleting) {
                delta /= 2;
            }

            if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
            }

            setTimeout(function() {
                that.tick();
            }, delta);
        };

        window.onload = function() {
            var elements = document.getElementsByClassName('typewrite');
            for (var i = 0; i < elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-type');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                    new TxtType(elements[i], JSON.parse(toRotate), period);
                }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
            document.body.appendChild(css);
        };
    </script>

    <script>
        var speed = 140;

        function incEltNbr(id) {
            elt = document.getElementById(id);
            endNbr = Number(document.getElementById(id).innerHTML);
            incNbrRec(0, endNbr, elt);
        }

        /*A recursive function to increase the number.*/
        function incNbrRec(i, endNbr, elt) {
            if (i <= endNbr) {
                elt.innerHTML = i;
                setTimeout(function() { //Delay a bit before calling the function again.
                    incNbrRec(i + 1, endNbr, elt);
                }, speed);
            }
        }

        incEltNbr("yearsinbusiness"); /*Call this funtion with the ID-name for that element to increase the number within*/
        incEltNbr("happycustomer");
        // incEltNbr("noproducts");
        incEltNbr("presentincountries");
    </script>

    <link rel="stylesheet" href="{{ asset('assets/OwlCarousel/dist/assets/owl.carousel.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/OwlCarousel/dist/assets/owl.theme.default.min.css') }}">
    <script src="{{ asset('assets/OwlCarousel/dist/owl.carousel.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#logo-slider').owlCarousel({
                loop: true,
                lazyLoad: true,
                margin: 120,
                responsiveClass: true,
                dots: false,
                nav: false,
                autoplay: true,
                autoplayTimeout: 1000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 3,
                        nav: false
                    },
                    1000: {
                        items: 7,
                        nav: false,
                        loop: true
                    }
                }
            });



            $('#industriesCarousel').owlCarousel({
                loop: true,
                lazyLoad: true,
                margin: 50,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                nav: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 3,
                        nav: false
                    },
                    1000: {
                        items: 4,
                        nav: false,
                        loop: true
                    }
                }
            });

            var owl = $('#testimonial-carousel');
            $(owl).owlCarousel({
                loop: true,
                lazyLoad: true,
                margin: 50,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 6000,
                autoplayHoverPause: true,
                items: 2,
            });

            $('.next-button').click(function() {
                owl.trigger('next.owl.carousel');
            })
            // Go to the previous item
            $('.prev-button').click(function() {
                owl.trigger('prev.owl.carousel', [300]);
            })
        });
    </script>

    <script>
        $(window).load(function() {
            // Animate loader off screen
            $("#loader").fadeOut("slow");
        });
        $("#pagecontent").removeClass("hidden invisible");
    </script>

    <script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
    <script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
    <script>
        const horizontalSections = gsap.utils.toArray('section.horizontal')

        horizontalSections.forEach(function(sec, i) {

            var thisPinWrap = sec.querySelector('.pin-wrap');
            var thisAnimWrap = thisPinWrap.querySelector('.animation-wrap');

            var getToValue = () => -(thisAnimWrap.scrollWidth - window.innerWidth);

            gsap.fromTo(thisAnimWrap, {
                x: () => thisAnimWrap.classList.contains('to-right') ? 0 : getToValue()
            }, {
                x: () => thisAnimWrap.classList.contains('to-right') ? getToValue() : 0,
                ease: "none",
                scrollTrigger: {
                    trigger: sec,
                    start: "top top",
                    end: () => "+=" + (thisAnimWrap.scrollWidth - window.innerWidth),
                    pin: thisPinWrap,
                    invalidateOnRefresh: true,
                    //anticipatePin: 1,
                    scrub: true,
                    //markers: true,
                }
            });

        });
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.6/slick.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.6/slick.min.js"></script>

<script>
var $slider_ini = $(".Advance-Slider");
    var total_slide = 0;
    $slider_ini.on("init", function(event, slick ,  currentSlide, nextSlide){
        $('button.slick-arrow').append('<div class="thumb"></div>');
        total_slide = slick.slideCount;
        console.log(total_slide);
        next_img = $(slick.$slides[1]).find('img').attr('src'); 
        prev_img = $(slick.$slides[total_slide - 1]).find('img').attr('src'); 
        $('button.slick-next .thumb').append('<img src="'+next_img+'">');
        $('button.slick-prev .thumb').append('<img src="'+prev_img+'">');
        
    });
    $slider_ini.slick({
        autoplay:true,
        autoplaySpeed:4000,
        speed:1500,
        slidesToShow:1,
        slidesToScroll:1,
        dots:true,
        pauseOnHover:true,
        infinite:false,
        customPaging: function(slider, i) {
            var thumb = $(slider.$slides[i]).find('.dots-img').attr('src');
            console.log(thumb);
            return '<button><div class="mextrix"><a><img src="'+thumb+'"></a></div></button>';
        }
      });

    $( "button.slick-arrow , .Advance-Slider ul.slick-dots li button" ).hover(function() {
        $( this ).addClass( "hover-in" );
        $( this ).removeClass( "hover-out" );
      }, function() {
        $( this ).removeClass( "hover-in" );
        $( this ).addClass( "hover-out" );
      }
    );


   

    $slider_ini.on('afterChange', function (event, slick, currentSlide) {
        console.log('afterChange: '+ currentSlide);

        prev_img = $(slick.$slides[currentSlide - 1]).find('img').attr('src'); 
        next_img = $(slick.$slides[currentSlide + 1]).find('img').attr('src'); 

        if (currentSlide == total_slide) {
          prev_img = $(currentSlide - 1).find('img').attr('src');           
        }

        if (currentSlide == 0) {
          console.log('if call');
          prev_img = $(slick.$slides[total_slide - 1]).find('img').attr('src'); 
        }

        if (currentSlide == total_slide - 1) {
          next_img = $(slick.$slides[0]).find('img').attr('src');         
        }
        
        $('button.slick-arrow ').find('img').remove();

        $('button.slick-next .thumb').append('<img src="'+next_img+'">');
        $('button.slick-prev .thumb').append('<img src="'+prev_img+'">');
        
    });
</script>
</body>

</html>
