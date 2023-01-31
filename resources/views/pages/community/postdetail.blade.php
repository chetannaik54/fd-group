@extends('layouts.community')

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

        .loopcomments:hover {
            text-decoration: none;
        }

        .loopcomments{ color: black; background: transparent !important; border-bottom: 1px dotted #ccc; }
        .user-comments{ padding: 50px; }
    </style>
@endsection

@section('content')
    @foreach ($posts['data'] as $indexKey => $post)
        <div class="row my-2 py-3 w-100">
            <div class="col-md-1">&nbsp;</div>
            <div class="col-md-1 float-left text-center">
                @if ($post['user']['profile_image'] == null)
                    <img src="https://ui-avatars.com/api/?name={{ $post['user']['firstname'] }}&color=fff&background=4c3790" class="img-fluid rounded-circle">
                @else
                    @php
                        $external_link = $post['user']['profile_image'];
                        if (@getimagesize($external_link)) {
                            echo '<div class="bgimage-community" style="height: 64px; width: 64px; border-radius: 50%; background: url("'.$post['user']['profile_image'].'"); background-size: cover; text-align: center; margin: 0 auto; display: block;"></div>';
                        }else{
                            echo '<div class="bgimage-community" style="height: 64px; width: 64px; border-radius: 50%; background: url(https://ui-avatars.com/api/?name='.$post["user"]["firstname"].'&color=fff&background=4c3790); background-size: cover; text-align: center; margin: 0 auto; display: block;"></div>';
                        }
                    @endphp
                @endif
                <div class="community-description ">
                    <p class="my-2">From {{ $post['user']['firstname'] }}</p>
                </div>
            </div>
            <div class="col-md-8 loopcomments">
                <div class="community-title">
                    <h5>{{ $post['post_description'] }}</h5> &emsp;
                </div>
                <div class="community-action pt-2">
                    <button class="btn p-0" onclick="upVote({{ $post['id'] }}, 'post', {{ $post['note'] }})"><i class="fa fa-thumbs-up" aria-hidden="true"></i></button><span>{{ $post['up_vote'] }}</span>
                    <button class="btn p-0" onclick="downVote({{ $post['id'] }},  'post', {{ $post['note'] }})"><i class="fa fa-thumbs-down" aria-hidden="true"></i></button><span>{{ $post['down_vote'] }}</span> &emsp;
                    <button class="btn p-0" onclick="showAddComment({{ $post['id'] }}, 'post')"><i class="fa fa-reply" aria-hidden="true"></i> Reply &emsp;</button>
                </div>
            </div>
        </div>

            @foreach ($post['comments'] as $cIndex => $comment)
                <div class="row mt-2 mb-3 w-100">
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1 text-center float-left">
                        @if ($comment['user']['profile_image'] == null)
                            <img src="https://ui-avatars.com/api/?name={{ $comment['user']['firstname'] }}&color=fff&background=4c3790" class="img-fluid rounded-circle">
                        @else
                            <div class="bgimage-community" style="height: 64px; width: 64px; border-radius: 50%; background-image: linear-gradient(rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.0)), url('<?php echo asset('users') . '/' . $comment['user']['profile_image']; ?>'); background-size: cover; text-align: center; margin: 0 auto; display: block;"></div>
                        @endif
                        <p class="my-2">by {{ $comment['user']['firstname'] }}</p>
                    </div>
                    <div class="col-md-8 loopcomments">
                        <div class="community-title">
                            <h4 style="font-size: 18px;line-height: 26px;color: dimgrey;font-weight: 500;">{{ $comment['comment'] }}</h4> &emsp;
                        </div>
                        <div class="community-action">
                            <button class="btn pr-0" onclick="upVote({{ $comment['id'] }}, 'comment', {{ $comment['note'] }})"><i class="fa fa-thumbs-up" aria-hidden="true"></i></button><span>{{ $comment['up_vote'] }}</span>
                            <button class="btn pr-0" onclick="downVote({{ $comment['id'] }} , 'comment', {{ $comment['note'] }})"><i class="fa fa-thumbs-down" aria-hidden="true"></i></button><span>{{ $comment['down_vote'] }}</span>
                            <button class="btn pr-0" onclick="showAddComment({{ $comment['id'] }}, 'comment')"><i class="fa fa-reply" aria-hidden="true"></i> Reply &emsp;</button>
                        </div>
                    </div>
                </div>

                @foreach ($comment['comments_loops'] as $loopIndex => $commentLoop)
                    <div class="row loopcomments mr-3 ml-5 mt-2 mb-3 w-100">
                        <div class="col-md-1"></div>
                        <div class="col-md-1">
                            @if ($commentLoop['user']['profile_image'] == null)
                                <img src="https://ui-avatars.com/api/?name={{ $commentLoop['user']['firstname'] }}&color=fff&background=4c3790" class="img-fluid rounded-circle">
                            @else
                                <div class="bgimage-community" style="height: 64px; width: 64px; border-radius: 50%; background-image: linear-gradient(rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.0)), url('<?php echo asset('users') . '/' . $commentLoop['user']['profile_image']; ?>'); background-size: cover; text-align: center; margin: 0 auto; display: block;"></div>
                            @endif
                        </div>
                        <div class="col-md-10">
                            <div class="community-title">
                                <h4>{{ $commentLoop['user']['firstname'] }}</h4> &emsp;
                                {{-- <span class="follow" >Follow</span> --}}
                                {{-- <p>{{ \Carbon\Carbon::parse($commentLoop['created_at'])->format('d F Y') }}</p> --}}
                            </div>
                            <div class="community-description">
                                {{-- <p class="mb-3">{{ $commentLoop['comments'] }}</p> --}}
                            </div>
                            <div class="community-action">
                                {{-- <button class="btn pr-0" onclick="upVote({{ $commentLoop['id'] }}, 'commentLoop', {{ $commentLoop['note'] }})"><i class="fa fa-thumbs-up" aria-hidden="true"></i></button><span>{{ $commentLoop['up_vote'] }}</span>
                                &emsp;
                                <button class="btn pr-0" onclick="downVote({{ $commentLoop['id'] }}, 'commentLoop', {{ $commentLoop['note'] }})"><i class="fa fa-thumbs-down" aria-hidden="true"></i></button>
                                <span>{{ $commentLoop['down_vote'] }}</span> &emsp; --}}
                            </div>
                        </div>
                    </div>
                @endforeach

                <form action="{{ url('addChildComment') }}" method="POST" id="form-{{ $comment['id'] }}" class="w-100">
                    @csrf
                    @method("POST")
                    <div class="container w-100 childdisplay-margin" id="childDisply-{{ $comment['id'] }}" style="display: none; margin-left: 9rem;">
                        <div class="col-md-10 mt-3">
                            <input type="hidden" value="{{ $comment['id'] }}" class="form-control" name="comment_id" id="comment_id-{{ $comment['id'] }}">
                            <textarea name="comments" id="comments" style="color: black !important" class="form-control mt-2 usercomment-box bg-white" placeholder="Add a comment .." value="" required></textarea>
                        </div>
                        <div class="col-md-2 mt-3">
                            <button class="btn btn-block button-outline my-2 mt-3 button-red" type="submit" style="background-color: #4c3790 !important;color: white !important;"> ADD COMMENT </button>
                        </div>
                    </div>
                </form>
            @endforeach


            <form action="{{ url('addComment') }}" method="POST" style="width: 100%" id="form-{{ $post['id'] }}">
                @csrf
                @method("POST")
                <div class="container" id="display-{{ $post['id'] }}" style="display: none">
                    <div class="col-md-8 mt-3">
                        <input type="hidden" value="{{ $post['id'] }}" class="form-control" name="post_id" id="post_id-{{ $post['id'] }}">
                        <textarea class="form-control mt-2 usercomment-box bg-white" style="color: black !important" name="comment" id="comment" placeholder="Add a comment .." required></textarea>
                    </div>
                    <div class="col-md-4 mt-3">
                        <button class="btn btn-block button-outline my-2 mt-3 button-red" type="submit" style="background-color: #4c3790 !important;color: white !important;">
                            ADD COMMENT
                        </button>
                    </div>
                </div>
            </form>

        {{--</div>  Final Div --}}
    @endforeach
@endsection

@section('script')
@endsection