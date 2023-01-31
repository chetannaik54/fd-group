<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Fidelis') }} | {{ str_replace('-', ' ', Route::currentRouteName()) }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <style type="text/css">
            @font-face{font-family:KabarettD;src:url('{{ asset("fonts/KabarettD.ttf") }}')}.loading{font-size:84px;font-family:KabarettD;font-weight:800;text-align:center;color:#28597a}.loading span{display:inline-block;margin:0 -.05em}.loading02 span{animation:1.2s infinite alternate loading02}.loading02 span:nth-child(2){animation-delay:.2s}.loading02 span:nth-child(3){animation-delay:.4s}.loading02 span:nth-child(4){animation-delay:.6s}.loading02 span:nth-child(5){animation-delay:.8s}.loading02 span:nth-child(6){animation-delay:1s}.loading02 span:nth-child(7){animation-delay:1.2s}@keyframes loading02{0%{filter:blur(0);opacity:1}100%{filter:blur(5px);opacity:.2}}
        </style>

        @yield('customcss')
    </head>
    <body class="font-sans antialiased">
          
        {{-- Loading screen --}}
        {{-- <section id="loader" class="flex h-screen">
            <div class="loading loading02 m-auto">
              <span>F</span>
              <span>I</span>
              <span>D</span>
              <span>E</span>
              <span>L</span>
              <span>I</span>
              <span>S</span>
            </div>
        </section> --}}

        <div id="pagecontent" class="min-h-screen hidden invisible">
            @include('pages.template.header')

            <!-- Page Content -->
            <main class="mx-auto max-w-screen-2xl px-4 py-16 sm:px-6 lg:px-8">
                @yield('content')
            </main>
            @include('pages.template.footer')
        </div>

        {{-- Scripts --}}
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/flowheader.css') }}">

        <script src="https://use.fontawesome.com/58e9257588.js"></script>

        {{-- <link rel="stylesheet" href="https://unpkg.com/kursor/dist/kursor.css">
        <script src="https://unpkg.com/kursor"></script>
        <script>
            new kursor({
                type: 1
            })
        </script>

        <script>
                var html = '';
                for (var i = 1; i <= 50; i ++) {
                    html += '<div class="shape-container--'+i+' shape-animation"><div class="random-shape"></div></div>';
                }

                document.querySelector('.shapeshifter').innerHTML += html;
        </script> --}}

        {{-- <script>(function(w, d) { w.CollectId = "63a30c509eed8935fca503b5"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script> --}}

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

        <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
        
        {{-- <div class="flex items-center justify-center px-5 py-5 sticky" x-data="{showCookieBanner:true}">
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
        </div> --}}

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

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
        </script> --}}

        {{-- <script>
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
        </script> --}}

        <script>
            $(window).load(function() {
                // Animate loader off screen
                $("#loader").fadeOut("slow");
            });
            $("#pagecontent").removeClass("hidden invisible");
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>

        <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>

        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" /> --}}

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

        @yield('scripts')
        <script type="text/javascript">
            function googleTranslateElementInit() {
              new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
            }
            </script>
            
            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    </body>
</html>
