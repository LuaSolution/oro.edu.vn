@extends('client.layout')

@section('content')
<section class="w3l-inner-banner-main">
    <div class="about-inner blog editContent">
        <div class="container">
            <div class="main-titles-head">
                <h3 class="header-name editContent">
                    Bài viết hay
                </h3>
                <p class="tiltle-para editContent editContent">Danh sách bài viết hay của Hoa Ô Rô.</p>
            </div>
            <div class="breadcrumbs-sub">
                <ul class="breadcrumbs-custom-path">
                    <li class="right-side propClone"><a href="{{ route('getHome') }}" class="editContent">Trang chủ <span
                                class="fa fa-angle-right" aria-hidden="true"></span></a>
                        <p></p>
                    </li>
                    <li class="active editContent">Tin tức</li>
                </ul>
            </div>
        </div>
    </div>


</section>
<section class="w3l-services-6">
    <div class="services-layout editContent">
        <div class="container">
            <div class="row">
            @foreach($newss as $item)
                <div class="col-lg-4 col-md-6 col-sm-6 blog-gap-top propClone">
                    <a href="{{route('getNews', ['news' => $item->slug])}}">
                        <img src="{{asset('public/img/post/'.$item->cover)}}" alt="" class="img-responsive"></a>
                    <div class="image-up">
                        <h3> <a href="{{route('getNews', ['news' => $item->slug])}}" class="blog-link editContent">{{$item->title}}</a>
                        </h3>
                        <div class="blog-post editContent">
                            <ul>
                                <li class="propClone">
                                    <p class="blog-para editContent price">{{$item->created_at}}</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center mt-sm-5 mt-4 mb-0">
                    <li class="page-item disabled">
                        <a class="page-link page-prev" href="#previous" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link page-number" href="#1">1</a></li>
                    <li class="page-item active"><a class="page-link page-number" href="#2">2</a></li>
                    <li class="page-item"><a class="page-link page-number" href="#3">3</a></li>
                    <li class="page-item"><a class="page-link page-next" href="#next">→</a></li>
                </ul>
            </nav> -->
        </div>
    </div>
</section>

@endsection
