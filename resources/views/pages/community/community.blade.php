@extends('layouts.pages')

@section('title') Community @endsection

@section('customcss')
<style type="text/css">
@media only screen and (max-width:430px){.page-content h1{font-size:1.5rem!important}.page-content{padding:63px 26px!important}}.container-community{max-width:1248px;margin:auto;padding:30px 30px}.sidebar,.sidebar div{padding-bottom:30px}.sidebar button,.sidebar select{background:#f5e0e2;border:1px solid #b81323;padding:5px 35px 5px 35px;width:200px;text-transform:uppercase}.community-title{padding:20px 0;text-transform:uppercase}.cards{padding:10px;margin-bottom:30px;border-radius:5px}.cards-re{padding:10px;margin-bottom:0;border-radius:0 0 0 5px;background:#fae7e6;border-bottom:2px solid #c7637154}.like a{color:#333;text-decoration:none}.like span{color:#b81323;text-decoration:none;font-weight:700;margin-right:10px}.cards h3,.cards-re h3{font-size:18px;color:#000;font-weight:700}.cards span,.cards-re span{color:#b81323;font-size:15px;margin-left:15px}.comment{width:80%;padding:10px;border:1px solid #cccccc6b}.add-btn{background:#b81323;padding:5px 12px 5px 12px;margin-top:10px;text-transform:uppercase;color:#fff!important;border:1px #8b4513;font-size:12px;float:right}h2 span{color:#b81323}.sidenav{height:100%;width:0;position:fixed;z-index:99999;top:85px;right:0;background-color:#111111e0;overflow-x:hidden;transition:.5s;padding-top:60px}.sidenav a:first-child{color:#fff}.sidenav a:not(:first-child){padding:22px;text-decoration:none;font-size:14px;color:#fff;display:block;transition:.3s;text-align:center;border-bottom:1px solid rgb(255,255,255,.5);width:80%;margin:0 auto}@media (min-width:768px) and (max-width:979px){.sidenav a:not(:first-child){padding:16px}.sidenav{padding-top:30px}}@media (max-width:767px){.sidenav a:not(:first-child){padding:14px}.sidenav{padding-top:30px}}@media (max-width:480px){.sidenav a:not(:first-child){padding:12px}.sidenav{padding-top:30px}}.sidenav a.joinnow{padding:8px 8px 8px 8px;border:1px solid #fff;margin-top:20px}.sidenav a:hover{color:#f1f1f1}.sidenav .closebtn{position:absolute;top:0;right:25px;font-size:36px;margin-left:50px}@media screen and (max-height:450px){.sidenav{padding-top:15px}.sidenav a{font-size:18px}}.biosignature{font-size:22px;font-weight:600;position:relative;top:24px}.none{display:none}
</style>
@endsection

@section('content')
 <section>
    <div class="container py-5">
        <div class="col-sm-2 sidebar float-left">
            <div><a class="text-decoration-none" href="/community?status=1&ontop=top"><button class="btn-block button-outline py-2">ON TOP</button></a></div>
            <div class="comunity-options">
                <form method="GET" action="" id="statusForm">
                        <select name="selectorModels" id="selectorModels" class="form-control button-outline mdb-select md-form colorful-select dropdown-primary" searchable="Search here.." onchange="if (this.value) decodeURI(window.location.href='/community?status='+this.value)">
                        @if(@$_GET['status'] == "1")
                        <option value="1" selected>Fashion</option>
                        <option value="2">Modeling</option>
                        <option value="3">Model</option>
                        @elseif(@$_GET['status'] == "2")
                        <option value="1">Fashion</option>
                        <option value="2" selected>Modeling</option>
                        <option value="3">Model</option>
                        @else
                        <option value="1">Fashion</option>
                        <option value="2">Modeling</option>
                        <option value="3" selected>Model</option>
                        @endif
                  </select>
                </form>
            </div>
            <div><a class="text-decoration-none"  href="{{ route('communityUsers') }}"><button  class="btn btn-block button-outline py-2" >Our members</button></a></div>
        </div>
        <div class="col-sm-10 float-left">
            <h2>Members <span>{{ $roundFormats }}</span></h2>
            <p style="text-transform: uppercase;">New people  that join Our Community will appear here.</p>
            <div class="input-group md-form form-sm form-2 pl-0">
                <input class="form-control my-0 py-1 amber-border" type="text" placeholder="Search" value="" aria-label="Search" onchange="if (this.value) decodeURI(window.location.href='/communityUsers?search='+this.value)">
                <div class="input-group-append">
                  <span class="input-group-text amber lighten-3" id="basic-text1"><i class="fa fa-search text-grey"
                      aria-hidden="true"></i></span>
                </div>
              </div>
              <div class="row mt-5">
                  @foreach ($users as $index => $user)
                <div class="col-lg-2 mb-4">
                    <!-- Row -->
                    <div class="row">
                       <div class="col-md-12 text-center">
                           @if($user->profile_image == null)
                               <img src="https://ui-avatars.com/api/?name={{ $user->firstname }}&color=fff&background=b7000{{ $index }}" class="img-fluid rounded-circle">
                            @else
                               <img src="{{ asset('users') }}/{{ $user->profile_image }}" alt="retuberi_students" class="img-fluid rounded-circle text-center" />
                            @endif
                       </div>
                        <div class="col-md-12 text-center">
                            <div class="pt-2">
                            <h6 class="mt-4 font-weight-medium mb-0">{{ $user->firstname }}</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Row -->
                  </div>
                  @endforeach
                </div>
                <div class="row mt-5">
                    <div class="col-md-12 text-center">
                        {{ $users->withQueryString()->links() }}
                    </div>
                </div>
        </div>
      </div>
 </section>
@endsection
