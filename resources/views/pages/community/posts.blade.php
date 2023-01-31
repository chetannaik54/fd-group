@extends('layouts.community')

@section('title')
    Community
@endsection

@section('customcss')
    <style>
        @media only screen and (max-width:430px){.page-content h1{font-size:2rem!important}.page-content{padding:114px 25px!important}.childdisplay-margin{margin-left:0!important}}.community-title a:hover,.loopcomments:hover{text-decoration:none}.loopcomments{color:#000;background:0 0!important;border-bottom:1px dotted #ccc}.user-comments{padding:50px}.card:hover{padding:3px!important}.community-title a{color:#0074cc}
    </style>
@endsection

@section('content')

<div class="row user-comments mt-3 my-4">
    @foreach ($posts['data'] as $indexKey => $post)
                @php $postdetail = \App\Comments::where('post_id', $post['id'])->count(); @endphp
                <span class="row loopcomments my-2 py-3 w-100">
                    <div class="col-md-1 text-center">
                        <div class="border rounded">{{ $postdetail }} Response</div>
                    </div>
                    <div class="col-md-9">
                        <div class="community-title mb-2">
                            <a href="{{ url('postdetails/'.$post['category_id'].'/'.$post['topic_id'].'/'.$post['id']) }}">
                                <h5>{{ $post['post_description'] }}</h5>&nbsp;&emsp;
                            </a>
                        </div>
                        <div class="community-action">
                            <button class="btn p-0" onclick="upVote({{ $post['id'] }}, 'post', '{{ $post['note'] }}')"><i class="fa fa-thumbs-up" aria-hidden="true"></i></button> <span>{{ $post['up_vote'] }}</span>  &emsp;
                            <button class="btn p-0" onclick="downVote({{ $post['id'] }},  'post', '{{ $post['note'] }}')"><i class="fa fa-thumbs-down" aria-hidden="true"></i></button> <span>{{ $post['down_vote'] }}</span>  &emsp;
                            <button class="btn p-0" onclick="this.style.display = 'none'; showComment({{ $post['id'] }})" id="ajaxpostdetailsbtn{{ $post['id'] }}"><i class="fa fa-angle-down" aria-hidden="true"></i> View {{ $postdetail }} Reply &emsp;</button>

                            <div style="display: none" id="postdetails{{ $post['id'] }}">
                                <div class="spinner-grow text-primary" role="status"><span class="sr-only"></span>Loading...</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 float-left">
                        <div class="col-md-4 float-left">
                            @if($post['user']['profile_image'] == null)
                                <img src="https://ui-avatars.com/api/?name={{ $post['user']['firstname'] }}&color=fff&background=4c3790" class="img-fluid rounded-circle" style="margin: 0 auto; display: block;">
                            @else
                                <div class="bgimage-community" style="height: 64px; width: 64px; border-radius: 50%; background-image: linear-gradient(rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.0)), url('<?php echo asset("users")."/".$post["user"]["profile_image"] ?>'); background-size: cover; text-align: center; margin: 0 auto; display: block;"></div>
                            @endif
                        </div>
                        <div class="col-md-8 float-left my-2">
                            <p class="mb-1">On {{ \Carbon\Carbon::parse($post['created_at'])->format('d F Y') }}</p>
                            <div class="community-description">
                                <p class="mb-0">From {{ $post['user']['firstname'] }}</p>
                            </div>
                        </div>
                    </div>
                </span>
            {{-- Final Div --}}
      @endforeach
</div>

<div class="container mt-3 my-4">
    <div class="float-right">
        {{ $postsData->links() }}
    </div>
</div>

@endsection
