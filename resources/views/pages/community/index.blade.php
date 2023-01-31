@extends('pages.template.layout')

@section('title')
    Community
@endsection

@section('customcss')
    <style>
        @media only screen and (max-width: 430px) {
            .page-content h1 {
                font-size: 2rem !important;
            }

            .page-content {
                padding: 114px 25px !important;
            }

            .childdisplay-margin {
                margin-left: 0px !important;
            }
        }

        .topiccard {
            width: 22rem;
            color: #212529;
        }

        .card:hover {
            padding: 1px !important;
            transition-timing-function: ease;
        }
    </style>
@endsection

@section('content')

    <section class="section float-left w-100">
        <div class="container" id="lmsStack">

            {{-- <div class="row main-banner py-2 my-4">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2 text-center">
                         <img src="{{ asset('images/community-banner-profile.png') }}"  class="w-75" >
                    </div>
                    <div class="col-md-6 py-4">
                            <h3 class="font-weight-bold">Fashion Designer</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
            </div>
        </div> --}}


            @if (Session::has('success'))
                <div class="alert alert-secondary">
                    {{ Session::get('success') }}
                </div>
            @endif

            @if (Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row show-community mt-4">
                <div class="col-md-12">

                    <form>   
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </div>
                            <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
                            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                        </div>
                        <br>
                        <button data-modal-target="postQuestion-modal" data-modal-toggle="postQuestion-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                            Post a question
                        </button>
                    </form>

                    <br>

                    <div class="row user-comments mt-3 my-4 px-0">
                        <div class="row">
                            @foreach ($category as $item)
                                <div class="row py-3">
                                    <span class="w-100" style="font-size: 2em; font-weight: 600;">{{ $item->name }}</span>
                                    <br />
                                    <div class="grid grid-cols-3 gap-3">
                                        @foreach ($topics as $topic)
                                            @if ($item->id == $topic->category_id)
                                                <a class="relative block rounded-xl border border-gray-100 p-8 shadow-xl" href="{{ url('showpost/' . $item->id . '/' . $topic->id) }}">

                                                    <?php
                                                    $count = \App\Models\Posts::where('category_id', $topic->category_id)
                                                        ->where('topic_id', $topic->id)
                                                        ->count();
                                                    ?>

                                                    <span class="absolute right-4 top-4 rounded-full bg-green-100 px-3 py-1.5 text-xs font-medium text-green-600">{{ $count }} posts</span>

                                                    <div class="mt-4 text-gray-500 sm:pr-8">
                                                        <svg class="h-8 w-8 sm:h-10 sm:w-10" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                                                            </path>
                                                        </svg>

                                                        <h3 class="mt-4 text-xl font-bold text-gray-900">{{ $topic->name }}</h3>

                                                        <p class="mt-2 hidden text-sm sm:block">
                                                            You can find all the conversations about {{ $topic->name }} from a
                                                            single topic.
                                                            <br>
                                                            <?php
                                                            $updatedat = \App\Models\Posts::select('updated_at')->where('category_id', $topic->category_id)->where('topic_id', $topic->id)->orderBy('updated_at', 'desc')->first();
                                                            if ($updatedat != null) {
                                                            ?>
                                                                Last Updated on <b>{{ $updatedat->updated_at->format('d M Y') }}</b>
                                                                    
                                                                    <?php
                                                            }
                                                            ?>
    
                                                        </p>
                                                    </div>
                                                </a>

                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>

            </div>
        </div>
        </div>
    </section>



    <!-- Post a Quastion popup-->
    <!-- Modal -->


<!-- Modal toggle -->
  
  <!-- Main modal -->
  <div id="postQuestion-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
      <div class="relative w-full h-full max-w-md md:h-auto">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal">
                  <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  <span class="sr-only">Close modal</span>
              </button>
              <div class="px-6 py-6 lg:px-8">
                  <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Post a question</h3>
                  <form class="space-y-6" action="#">
                      <div>
                          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"></label>
                         <select name="" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">Technical</option>
                            <option value="">Sourcing</option>
                            <option value="">Products</option>
                         </select>
                      </div>
                      <div>
                          <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                          <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
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
  

@endsection

@section('script')
@endsection
