@extends('client.layout')

@section('content')
<!-- about me -->
<section class="w3l-inner-banner-main">
    <div class="about-inner about editContent">
        <div class="container">
            <div class="main-titles-head ">
                <h3 class="header-name editContent">
                    Giới thiệu về chúng tôi
                </h3>
                <p class="tiltle-para editContent ">Thông tin về chúng tôi.</p>
            </div>
            <div class="breadcrumbs-sub">
                <ul class="breadcrumbs-custom-path">
                    <li class="right-side propClone"><a href="{{ route('getHome') }}" class="editContent">Trang chủ <span
                                class="fa fa-angle-right" aria-hidden="true"></span></a>
                        <p>
                    </li>
                    <li class="active editContent">Giới thiệu</li>
                </ul>
            </div>
        </div>

    </div>

    </div>
</section>
<!-- breadcrumbs //-->
<section class="w3l-content-with-photo-4" id="about">
    <div class="content-with-photo4-block editContent">
        <div class="container">
            <div class="cwp4-two row">
                <div class="cwp4-image col-xl-6">
                    <img src="{{ asset('public/assets/images/b3.jpg') }}" alt="product"
                        class="img-responsive about-me">
                </div>
                <div class="cwp4-text col-xl-6 ">
                    <div class="posivtion-grid">
                        <h6 class="sub-title">Giới thiệu</h6>
                        <h3 class="editContent">SỨC KHỎE LÀ NỀN TẢNG CỦA CUỘC SỐNG, MỤC TIÊU CỦA CHÚNG TÔI LÀ CỦNG CỐ NỀN TẢNG CHO KHÁCH HÀNG. </h3>
                        <p class="para editContent">Tư vấn, đinh hướng và huấn luện sức khỏe một cách khoa học, chúng tôi hoạt động với cam kết mang lại kết quả cứu song khách hàng và sinh mệnh của loài đồng cư cùng cuộc song bền vững của các thế hệ tương lai.
                        </p>
                        <a href="{{ url('tin-tuc') }}" class="action-button btn mt-3">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
</section>
<section class="w3l-about ">
    <div class="skills-bars editContent counter-width ">
        <div class="container">
            <div class="nature-bars">
                <h3>Healthy, sustainable and local</h3>
                <!-- <div class="link-list-menu">
                    <p>Consectetur adipiscing elit. Aliquam auctor Sed bibendum varius euismod. </p>
                </div> -->
            </div>
        </div>
    </div>
</section>
<section class="w3l-recent-work">
    <div class="jst-two-col">
        <div class="container">
            <div class="row">

                <div class="my-bio col-xl-6">
                    <h3>Our Experience</h3>
                    <p class="para mb-3">Kinh nghiệm giảm cân cho khách hàng, giúp khách hàng hài lòng 100%
                    <br/>
                    Giảm cân<br/>
Giảm tỉ lệ mỡ<br/>
Ngủ ngon<br/>
Eo thon<br/>
Da sáng mịn</p>
                </div>
                <div class="col-xl-6 ">
                    <img src="{{ asset('public/assets/images/b4.jpg') }}" alt="product"
                        class="img-responsive about-me">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="w3l-team-main-6" id="team">
    <!-- /team-grids -->
    <div class="team-content-page editContent text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 team-team">
                    <div class="our-team">
                        <a href="#page">
                            <img src="{{ asset('public/assets/images/t1.jpg') }}" alt="product"
                                class="img-responsive ">
                            <div class="team-content">
                                <h3 class="name"><a href="#page">Linh Giang Bui</a></h3>
                                <span class="post"><a href="#page">Certified Juice Therapist and Nutritionist</a></span>
                                    </a>
                                    <!-- <div class="social-teams">
                                        <a href="#" class="facebook"><span class="fa fa-facebook"></span></a>
                                        <a href="#" class="twitter"><span class="fa fa-twitter"></span></a>
                                        <a href="#" class="pinterest"><span class="fa fa-pinterest"></span></a>
                                    </div> -->
                            </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 team-team">
                    <div class="our-team">
                        <a href="#page">
                            <img src="{{ asset('public/assets/images/t2.jpg') }}" alt="product"
                                class="img-responsive ">
                            <div class="team-content">
                                <h3 class="name"><a href="#page">Hanna Larsen</a></h3>
                                <span class="post"><a href="#page">Certified Natural Healer</a></span>
                                    </a>
                                    <!-- <div class="social-teams">
                                        <a href="#" class="facebook"><span class="fa fa-facebook"></span></a>
                                        <a href="#" class="twitter"><span class="fa fa-twitter"></span></a>
                                        <a href="#" class="pinterest"><span class="fa fa-pinterest"></span></a>
                                    </div> -->
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /team-grids -->
</section>
@endsection
