@extends('client.layout')
@section('content')
<section class="w3l-inner-banner-main">
    <div class="about-inner blog-single editContent">
        <div class="container">   
            <div class="main-titles-head">
            <h3 class="header-name editContent">
            {{$news->title}}
            </h3>
            <p class="tiltle-para editContent editContent">{{$news->description}}</p>
        </div>
</div>
</div>
</section>
<section class="w3l-blog-single">
  <div class="sec-padding editContent">
    <div class="container">
		<!-- left side blog post content -->
    <div class="single-left">
      <div class="single-left1 box13">
        <img src="{{asset('public/img/post/'.$news->cover)}}" alt=" " class="img-responsive">

        <h3 class="card-title">{{$news->title}}</a></h3>
        <ul class="admin-list">
            <li><a href="#"><span class="fa fa-calendar" aria-hidden="true"></span>4th Oct</a></li>
            <li><a href="#"><span class="fa fa-user" aria-hidden="true"></span>by Admin</a></li>
          </ul>
        <p class="para"> {!!$news->content!!}</p>
      </div>
      <div class="social-share">
        <h3 class="aside-title">Share This Post :</h3>
        <div class="social-icons-section">
        <script>
var loc = "https://www.facebook.com/sharer/sharer.php?u=" + window.location.href;
document.write('<a class="facebook" href="' + loc + '" target="_blank"><span class="fa fa-facebook"></span></a>');
</script>
        </div>
      </div>
</div>
</div>
</div></section>
@endsection