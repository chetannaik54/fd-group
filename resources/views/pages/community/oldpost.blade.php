@extends('layouts.pages')

@section('title')
Community
@endsection

@section('customcss')
<style>
.container-community{
    max-width: 1248px;
    margin: auto;
    padding: 30px 30px;
}
.sidebar, .sidebar div{padding-bottom: 30px;}
.sidebar button, .sidebar select{background: #f5e0e2;
    border: 1px solid #b81323;
    padding: 5px 35px 5px 35px;width: 200px; text-transform: uppercase;}
    .community-title{padding: 20px 0px;text-transform: uppercase;}
    .cards{padding: 10px; margin-bottom: 30px;
    border-radius: 5px;}
    .cards-re{padding: 10px; margin-bottom: 0px;
    border-radius: 0px 0px 0px 5px;background: #fae7e6;
    border-bottom: 2px solid #c7637154;}
    .cards-hd{padding: 10px; margin-bottom: 30px;
    border-radius: 5px;background: #fae7e6;}
    .like a{color:#333;text-decoration: none;}
    .like span{color:#b81323;text-decoration: none;font-weight: bold;margin-right: 10px;}
    .cards-re h3, .cards h3{font-size: 18px;color:#000; font-weight: bold;}
    .cards-re span, .cards span{color: #b81323; font-size: 15px;margin-left: 15px;}

    .comment{width: 80%;
    padding: 10px;
    border: 1px solid #cccccc6b;}
    .add-btn {
    background: #b81323;
    padding: 5px 12px 5px 12px;
    margin-top: 10px;
    text-transform: uppercase;
    color: #fff !important;
    border: 1px saddlebrown;
    font-size: 12px;
    float: right;
}
.post-btn {
    background: #b81323;
    padding: 10px 25px 10px 25px;
    /* margin-top: 10px; */
    text-transform: uppercase;
    color: #fff !important;
    border: 1px saddlebrown;
    font-size: 12px;
    float: right;
    margin-left: 15px;
}
.pop-bg{background-image:url("images/popup-banner.JPG");padding: 9px;
    color: #dbd5d5;}
    .modal-dialog {
    max-width: 500px;
    margin: 15.75rem auto;
}
.cancel-btn {
    border: 2px solid #b81323;
    background: #fff;
    color: #b81323;
}
.postQ-btn{border: 2px solid #b81323;
    background: #b81323;
    color: #fff;}
    .modal-header .close {
    padding: 1rem 1rem;
    margin: -1rem -1rem -1rem auto;
    color: #fff;
}
textarea {
    overflow: auto;
    resize: vertical;
    width: 100%;
    height: 150px;
    border: 1px solid #ccc;
    margin: 0 auto;
}
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 99999;
            top: 85px;
            right: 0;
            background-color: #111111e0;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a:first-child {
            color: #ffffff;
        }

        .sidenav a:not(:first-child) {
            padding: 22px;
            text-decoration: none;
            font-size: 14px;
            color: #ffffff;
            display: block;
            transition: 0.3s;
            text-align: center;
            border-bottom: 1px solid rgb(255, 255, 255, 0.5);
            width: 80%;
            margin: 0 auto;
        }

        /* Portrait tablet to landscape and desktop */
        @media (min-width: 768px) and (max-width: 979px) {
            .sidenav a:not(:first-child) {
                padding: 16px;
            }

            .sidenav{
                padding-top: 30px;
            }
        }

        /* Landscape phone to portrait tablet */
        @media (max-width: 767px) {
            .sidenav a:not(:first-child) {
                padding: 14px;
            }
            .sidenav{
                padding-top: 30px;
            }
        }

        /* Landscape phones and down */
        @media (max-width: 480px) {
            .sidenav a:not(:first-child) {
                padding: 12px;
            }
            .sidenav{
                padding-top: 30px;
            }
        }

        .sidenav a.joinnow {
            padding: 8px 8px 8px 8px;
            border: 1px solid #ffffff;
            margin-top: 20px;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        @media  screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }
        .biosignature{
              font-size: 22px;
            font-weight: 600;
            position: relative;
            top: 24px;
        }
        .none{
            display: none;
        }

    footer {
        margin-top: 0;
    }
</style>
@endsection

@section('content')

    <!-- Header -->
    <header id="header">
        <div class="page-content">
            <div class="container px-0 mx-0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h1>Ritu Beri School Of Fashion (RBSF) Community</h1>
                            <h6 class="d-none"><a href="http://54.85.128.201:8087" class="color-white">HOME </a>/ <a class="color-white" href="">course outline</a> </h6>
                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


<section>





    <div class="row container-community">
        <div class="row cards-hd">
        <div class="col-lg-12">
            <div style="width:100%;">
                <div style="width: 15%;float: left;"><img src="images/profile3.JPG"></div>
                <div style="width: 85%;float: right;">
                    <h3>Fashion designer</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                </div>
            </div>
        </div>
    </div>
        <div class="col-sm-3 sidebar">
            <div><button>ON TOP</button></div>
            <div class="comunity-options">
                <select name="selectorModels" id="selectorModels" class="mdb-select md-form colorful-select dropdown-primary" searchable="Search here.." onchange="changeValue()">
                    <option value="1">Fashion</option>
                    <option value="2">Modeling</option>
                    <option value="3">Model</option>
                  </select>
            </div>
            <div><button>Our members</button></div>
        </div>
        <div class="col-sm-9">
            <div class="input-group md-form form-sm form-2 pl-0">
                <input class="form-control my-0 py-1 amber-border" type="text" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <span class="input-group-text amber lighten-3" id="basic-text1"><i class="fa fa-search text-grey"
                      aria-hidden="true"></i></span>
                </div>
                <button class="post-btn" data-toggle="modal" data-target="#exampleModal">POST A QUESTION</button>
              </div>
              <h2 class="community-title">On Top</h2>



            <div class="row  cards-re">
                @foreach ($posts as $indexKey => $post)
                <div style="width: 100%;">
                <div style="width: 10%;float: left;">
                    @if($post['user']['profile_image'] == null)
                      <img src="https://ui-avatars.com/api/?name={{ $post['user']['firstname'] }}&color=7F9CF5&background=EBF4FF">
                    @else
                       <img src="{{ $post['user']['profile_image'] }}">
                    @endif
                </div>
                <div style="width: 90%; float: right;">
                    <h3>{{ $post['user']['firstname'] }}</h3>
                    <p style="color:#979595;font-size: 12px;">{{ \Carbon\Carbon::parse($post['created_at'])->format('d F Y') }}</p>
                    <p>{{ $post['post_description'] }}</p>
                    <p class="like">
                        <a href="#"><i class="fa fa-thumbs-up"></i></a><span>200</span>
                        <a href="#"><i class="fa fa-thumbs-down"></i></a><span>200</span>
                        <a href="#"><i class="fa fa-reply"></i><span style="color: #333;">Reply</span></a>
                        <a href="#" style="float: right; font-size: 22px; font-weight: bold;">...</a>
                    </p>
                </div>
                </div>
                <div style="width: 100%;"  >
                    @foreach ($post['comments'] as $cIndex => $comment)
                    <div>
                    <div style="width: 10%; margin-left: 80px; float: left;" class="py-2" >
                        @if($comment['user']['profile_image'] == null)
                          <img src="https://ui-avatars.com/api/?name={{ $comment['user']['firstname'] }}&color=7F9CF5&background=EBF4FF">
                        @else
                        <img src="{{ $comment['user']['profile_image'] }}">
                        @endif
                    </div>
                    <div style="width: 80%; float: right;" class="py-2" >
                        <h3>{{ $comment['user']['firstname'] }}</h3>
                        <p style="color:#979595;font-size: 12px;">{{ \Carbon\Carbon::parse($comment['created_at'])->format('d F Y') }}</p>
                        <p>{{ $comment['comment'] }}</p>
                        <p class="like">
                            <a href="#"><i class="fa fa-thumbs-up"></i></a><span>200</span>
                            <a href="#"><i class="fa fa-thumbs-down"></i></a><span>200</span>
                            <a href="#"><i class="fa fa-reply"></i><span style="color: #333;">Reply</span></a>
                            <a href="#" style="float: right; font-size: 22px; font-weight: bold;">...</a>
                        </p>
                     </div>
                    </div>
                    @endforeach

                    <div style="width: 90%;">
                        <p><input type="text" class="comment" name="comment" placeholder="Add a comment..."><button class="add-btn">ADD COMMENT</button></p>
                    </div>
                </div>
                @endforeach
              </div>
        </div>
      </div>






<!-- Post a Quastion popup-->
<!-- Modal -->
<form action="{{ route('posts') }}" method="POST">
@csrf
@method("POST")
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header pop-bg">
          <h5 class="modal-title" id="exampleModalLabel">POST A QUESTION</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <textarea name="post_description" placeholder="Start your question with (What, How, Why) etc."></textarea>
        </div>
        <input type="hidden" value="1" class="form-control" name="post_name" id="post_name">

        <div class="modal-footer">
          <button type="button" class="cancel-btn" data-dismiss="modal">CANCEL</button>
          <button type="submit" class="postQ-btn">POST</button>
        </div>
      </div>
    </div>
  </div>
</form>
</section>

@endsection



