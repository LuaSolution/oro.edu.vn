@extends('client.layout')

@section('content')
<section class="w3l-inner-banner-main">
<div class="about-inner contact editContent">
    <div class="container">
        <div class="main-titles-head">
            <h3 class="header-name editContent">
                Liên hệ
            </h3>
            <p class="tiltle-para editContent">Thông tin liên hệ của chúng tôi.</p>
        </div>
        <div class="breadcrumbs-sub">
            <ul class="breadcrumbs-custom-path">
                <li class="right-side propClone"><a href="index.html" class="editContent">Trang chủ <span
                            class="fa fa-angle-right" aria-hidden="true"></span></a>
                    <p>
                </li>
                <li class="active editContent">
                    Liên hệ</li>
            </ul>
        </div>
    </div>
</div>

</div>
</section>
<!-- breadcrumbs //-->
<section class="w3l-contact-info-main" id="contact">
    <div class="contact-sec	editContent">
        <div class="container">

            <div class="d-grid contact-view">
                <div class="cont-details">
                    <div class="cont-top">
                        <div class="cont-left text-center">
                            <span class="fa fa-phone text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Số điện thoại</h6>
                            <p class="para"><a href="tel:+84933173916">0933173916</a></p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-envelope-o text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Facebook</h6>
                            <p class="para"><a href="https://www.facebook.com/Hoa-O%CC%82-Ro%CC%82-Edu-Wellness-100568718767864" class="mail">
                            Hoa Ô Rô Edu & Wellness</a></p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-map-marker text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Địa chỉ</h6>
                            <p class="para"> 90 Lê Thị Riêng, quận 1, Tp.HCM.</p>
                        </div>
                    </div>
                </div>
                <div class="map-content-9">
                    <form action="{{ route('postContact') }}" method="POST">
                    {{ csrf_field() }}
                        <div class="twice-two">
                            <input type="text" class="form-control" name="name" id="w3lName" placeholder="Họ tên"
                                required="">
                            <input type="email" class="form-control" name="email" id="w3lSender" placeholder="Email"
                                required="">
                        </div>
                        <div class="twice">
                            <input type="text" class="form-control" name="phone" id="w3lSubject" placeholder="Tiêu đề"
                                required="">
                        </div>
                        <textarea name="content" class="form-control" id="w3lMessage" placeholder="Nội dung tin nhắn"
                            required=""></textarea>
                        <button type="submit" class="btn btn-contact">Gửi tin nhắn</button>
                    </form>
                </div>
            </div>
            <div class="map-iframe mt-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.5202681362794!2d106.68888705045508!3d10.771407392287319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3cf8199b9f%3A0x5f78db6b2f21f510!2zOTAgTMOqIFRo4buLIFJpw6puZywgUGjGsOG7nW5nIFBo4bqhbSBOZ8WpIEzDo28sIFF14bqtbiAxLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1616489755910!5m2!1svi!2s" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>
@endsection
