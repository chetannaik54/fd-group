@extends('layouts.pages')

@section('title')
    Community
@endsection

@section('customcss')
@endsection

@section('content')
    <section class="section float-left w-100">
        <div class="container" style="width:93%;">

            <div class="row main-banner py-2 my-4">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2 text-center">
                            <img src="{{ asset('images/community-banner-profile.png') }}" class="w-75">
                        </div>
                        <div class="col-md-6 py-4">
                            <h3 class="font-weight-bold">Fashion Designer</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row show-community">

                <div class="col-md-2 text-center mb-5">
                    <button class="btn btn-block button-outline py-2">
                        ON TOP
                    </button>
                    <div class="dropdown my-5 ">
                        <button class="btn btn-secondary btn-block button-outline py-2" type="button"
                            id="dropdownMenuButton" data-toggle="dropdown">
                            FASHION <i class="fa fa-chevron-down arrowdown"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Fashion</a>
                            <a class="dropdown-item" href="#">Modeling</a>
                            <a class="dropdown-item" href="#">Model</a>
                        </div>
                    </div>
                    <button class="btn btn-block button-outline py-2 my-4">
                        OUR MEMBERS
                    </button>
                </div>
                <div class="col-md-10">

                    <div class="row search-events">
                        <div class="col-md-9">
                            <input type="text" class="form-control searchbox" placeholder="Search.." value="">
                            <div class="search-icon">
                                <img src="{{ asset('images/search-icon.png') }}" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-block button-outline my-2 button-red" data-toggle="modal"
                                data-target="#exampleModalCenter">
                                POST A QUESTION
                            </button>
                        </div>
                    </div>



                    <div class="row user-comments mt-3 my-4 px-0">

                        <div class="col-md-1">
                            <img src="{{ asset('images/user-community-profile.png') }}" class="img-fluid">
                        </div>
                        <div class="col-md-11">
                            <div class="community-title">
                                <h4>Fashion Designer</h4> &emsp;
                                <span class="follow">Follow</span>
                                <p>Sep 14</p>
                            </div>
                            <div class="community-description">
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="community-action">
                                <img src="{{ asset('images/like.png') }}"> <span>200</span> &emsp;
                                <img src="{{ asset('images/unlike.png') }}"> <span>200</span> &emsp;
                                <img src="{{ asset('images/community-unlike.png') }}"> <span>200</span> &emsp;
                            </div>
                        </div>

                        <div class="col-md-1 mt-3">
                            <img src="{{ asset('images/current-user.png') }}" class="img-fluid">
                        </div>
                        <div class="col-md-9 mt-3">
                            <input type="text" class="form-control mt-2 usercomment-box bg-white"
                                placeholder="Add a comment .." value="">
                        </div>
                        <div class="col-md-2 mt-3">
                            <button class="btn btn-block button-outline my-2 mt-3 button-red"
                                style="background-color: #4c3790 !important;color: white !important;">
                                ADD COMMENT
                            </button>
                        </div>

                        <div class="col-md-12">
                            <hr>
                        </div>

                        @foreach ($posts as $indexKey => $post)
                            <div class="row loopcomments w-100">

                                <div class="col-md-1">
                                    {{-- <img src="{{ asset('images/user-community-profile.png') }}" class="img-fluid" > --}}
                                    @if ($post['user']['profile_image'] == null)
                                        <img src="https://ui-avatars.com/api/?name={{ $post['user']['firstname'] }}&color=fff&background=4c3790"
                                            class="img-fluid rounded-circle">
                                    @else
                                        <img src="{{ $post['user']['profile_image'] }}" class="img-fluid">
                                    @endif
                                </div>
                                <div class="col-md-11">
                                    <div class="community-title">
                                        <h4>{{ $post['user']['firstname'] }}</h4> &emsp;
                                        {{-- <span class="follow" >Follow</span> --}}
                                        <p>{{ \Carbon\Carbon::parse($post['created_at'])->format('d F Y') }}</p>
                                    </div>
                                    <div class="community-description">
                                        <p class="mb-3">{{ $post['post_description'] }}</p>
                                    </div>
                                    <div class="community-action">
                                        <img src="{{ asset('images/like.png') }}"> <span>200</span> &emsp;
                                        <img src="{{ asset('images/unlike.png') }}"> <span>200</span> &emsp;
                                        <img src="{{ asset('images/share-img.png') }}" style="width: 30px;"> Reply &emsp;
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <hr>
                            </div>

                            @foreach ($post['comments'] as $cIndex => $comment)
                                <div class="row loopcomments mt-2 mb-3 w-100">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">
                                        @if ($comment['user']['profile_image'] == null)
                                            <img src="https://ui-avatars.com/api/?name={{ $comment['user']['firstname'] }}&color=fff&background=4c3790"
                                                class="img-fluid rounded-circle">
                                        @else
                                            <img src="{{ $comment['user']['profile_image'] }}" class="img-fluid">
                                        @endif
                                    </div>
                                    <div class="col-md-10">
                                        <div class="community-title">
                                            <h4>{{ $comment['user']['firstname'] }}</h4> &emsp;
                                            {{-- <span class="follow" >Follow</span> --}}
                                            <p>{{ \Carbon\Carbon::parse($comment['created_at'])->format('d F Y') }}</p>
                                        </div>
                                        <div class="community-description">
                                            <p class="mb-3">{{ $comment['comment'] }}</p>
                                        </div>
                                        <div class="community-action">
                                            <img src="{{ asset('images/like.png') }}"> <span>200</span> &emsp;
                                            <img src="{{ asset('images/unlike.png') }}"> <span>200</span> &emsp;
                                            <img src="{{ asset('images/share-img.png') }}" style="width: 30px;"> Reply
                                            &emsp;
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="col-md-10 mt-3">
                                <input type="text" class="form-control mt-2 usercomment-box bg-white"
                                    placeholder="Add a comment .." value="">
                            </div>
                            <div class="col-md-2 mt-3">
                                <button class="btn btn-block button-outline my-2 mt-3 button-red"
                                    style="background-color: #4c3790 !important;color: white !important;">
                                    ADD COMMENT
                                </button>
                            </div>

                    </div>
                    @endforeach


                </div>
            </div>
        </div>
        </div>
        </div>
    </section>



    <!-- Post a Quastion popup-->
    <!-- Modal -->

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header"
                    style=" background-image: linear-gradient(rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.0)), url('{{ asset('images/popup-bg.jpg') }}');">
                    <h5 class="modal-title text-uppercase p-4" id="exampleModalLongTitle" style="color:white;">Post a
                        question</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="{{ route('posts') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="modal-body my-2">
                        <textarea class="form-control" required placeholder="Start your question with 'What', 'How', 'Why', etc." rows="4"></textarea>
                        <input type="hidden" value="1" class="form-control" name="post_name" id="post_name">

                    </div>
                    <div class="modal-footer">
                        <button class="btn button-outline my-2 button-red" data-dismiss="modal">
                            CANCEL
                        </button>
                        <button class="btn button-outline my-2   button-red"
                            style="background-color: #4c3790 !important;color: white !important;">
                            POST
                        </button>
                    </div>
                </form>

            </div>
        </div>

    </div>
@endsection

@section('script')
@endsection
