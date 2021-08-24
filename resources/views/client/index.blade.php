@extends('client.layout')

@section('content')
<section class="w3l-main-slider" id="home">
    <!-- main-slider -->
    <div class="companies20-content">

        <div class="owl-one owl-carousel owl-theme">
            <div class="item">
                <li>
                    <div class="slider-info banner-view bg bg2" data-selector=".bg.bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg mr-auto">
                                    <h5>Kiến tạo thế giới hòa bình thịnh vượng thông qua giáo dục sức khỏe và công nghệ</h5>
                                    <!-- <p>Kiến tạo thế giới hòa bình thịnh vượng thông qua giáo dục sức khỏe và công nghệ</p> -->
                                    <a class="btn btn-theme2 mt-md-5 mt-4" href="{{ url('lien-he') }}"> Liên hệ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info  banner-view banner-top1 bg bg2" data-selector=".bg.bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg mr-auto">
                                    <h5>Kiến tạo thế giới hòa bình thịnh vượng thông qua giáo dục sức khỏe và công nghệ</h5>
                                    <!-- <p>Kiến tạo thế giới hòa bình thịnh vượng thông qua giáo dục sức khỏe và công nghệ</p> -->
                                    <a class="btn btn-theme2 mt-md-5 mt-4" href="{{ url('lien-he') }}"> Liên hệ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
        </div>
    </div>
    <script src="{{ asset('public/assets/js/owl.carousel.js') }}"></script>
    <!-- script for -->
    <script>
        $(document).ready(function () {
            $('.owl-one').owlCarousel({
                loop: true,
                margin: 0,
                nav: false,
                responsiveClass: true,
                autoplay: false,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 1,
                        nav: false
                    },
                    667: {
                        items: 1,
                        nav: true
                    },
                    1000: {
                        items: 1,
                        nav: true
                    }
                }
            })
        })
    </script>
    <!-- //script -->
    <!-- /main-slider -->
</section>

<section class="w3l-covers-18">
    <div class="covers-main editContent">
        <div class="container">
            <div class="gallery-image row">
                <div class="column color-2 editContentc col-lg-4 ">
                    <div>
                        <h4 class=" editContent">Hoa Ô Rô</h4>
                        <p class="para editContent">Hoa Ô Rô là thương hiệu giáo dục sức khỏe và công nghệ với đội ngũ các chuyên gia dinh dưỡng, thanh lọc cơ thể liên kết cùng các tổ chức và viện khoa học dinh dưỡng và chữa lành tự nhiên uy tín được chứng nhận hàng đầu thế giới.</p>
                        <!-- <a href="gioi-thieu" class="action-button btn mt-3">Read more</a> -->
                    </div>
                </div>

                <div class="img-box col-lg-4 col-md-6">
                    <img src="{{ asset('public/assets/images/5.jpg') }}" alt="product"
                        class="img-responsive ">
                    <h5 class="my-2"><a href="gioi-thieu">Sứ mệnh</a></h5>
                    <!-- <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet itaque labor.</p> -->
                </div>
                <div class="img-box col-lg-4 col-md-6">
                    <img src="{{ asset('public/assets/images/6.jpg') }}" alt="product"
                        class="img-responsive ">
                    <h5 class="my-2"><a href="gioi-thieu">Tầm nhìn</a></h5>
                    <!-- <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet itaque labor.</p> -->
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="w3l-teams-15">
    <div class="team-single-main editContent">
        <div class="container">
            <div class="row">
                <div class="column2 image-text col-xl-6">
                    <h3 class="team-head editContent">Thực phẩm hữu cơ</h3>
                    <div class="team-two">
                        <div class="nature-row">
                            <h5><a href="#page">
                                    Lời khuyên</a></h5>
                            <p class="para editContent text ">
                            Chúng tôi khuyên và tư vấn khách hàng sử dụng các sản phẩm thuần thực vật hữu cơ địa phương tại Việt Nam để chữa lành các vấn đề sức khỏe của mình.Với tiêu chuẩn 5 không: Không hóa chất, Không phẫu thuật xâm lấn, Không thực phẩm bổ sung, Không chất hóa học, Không biến đổi gen</p>
                        </div>
                        <div class="nature-row">
                            <h5><a href="#page">Fresh Fruits</a></h5>
                            <p class="para editContent text ">
                            Chúng tôi luôn sáng tạo ra các công thức dùng hoàn toàn các loại rau quả nhiệt đới ngay tại quê nhà Việt Nam, góp phần bảo vệ địa cầu và ủng hộ nông nghiệp hữu cơ bền vững</p>
                        </div>
                    </div>
                </div>
                <div class="column2 image-text col-xl-6">
                    <img src="{{ asset('public/assets/images/b1.jpg') }}" alt="product"
                        class="img-responsive ">
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- <section class="w3l-call-to-action_9">
    <div class="call-w3 editContent">
        <div class="container">
            <div class="grids">
                <div class="grids-content row text-center">

                    <div class="column col-lg-4 col-md-6 col-sm-6 back-image editContent p-sm-0">
                        <img src="{{ asset('public/assets/images/5.jpg') }}" alt="product"
                            class="img-responsive rounded-0">
                    </div>

                    <div class="column col-lg-4 col-md-6 col-sm-6 color-2 editContent">
                        <div>
                            <h4><a href="gioi-thieu" class=" editContent">Cultivating</a></h4>
                            <p class="para editContent">Assumenda temporibus quidem ipsam. Voluptate fuga corporis iusto
                                similique voluptates sint quibusdam.</p>

                        </div>
                    </div>
                    <div class="column col-lg-4 col-md-6 col-sm-6 back-image2 editContent p-sm-0">
                        <img src="{{ asset('public/assets/images/6.jpg') }}" alt="product"
                            class="img-responsive rounded-0 ">
                    </div>

                    <div class="column col-lg-4 col-md-6 col-sm-6 color-2 editContent">
                        <div>
                            <h4><a href="gioi-thieu" class=" editContent">Wheat Cultivation</a></h4>
                            <p class="para editContent">Assumenda temporibus quidem ipsam. Voluptate fuga corporis iusto
                                similique voluptates sint quibusdam.</p>

                        </div>
                    </div>
                    <div class="column col-lg-4 col-md-6 col-sm-6 back-image editContent p-sm-0">
                        <img src="{{ asset('public/assets/images/7.jpg') }}" alt="product"
                            class="img-responsive rounded-0">
                    </div>
                    <div class="column col-lg-4 col-md-6 col-sm-6 color-2 editContent">
                        <div>
                            <h4><a href="gioi-thieu" class=" editContent">Natural Products</a></h4>
                            <p class="para editContent">Assumenda temporibus quidem ipsam. Voluptate fuga corporis iusto
                                similique voluptates sint quibusdam.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<section class="w3l-clients" id="client">
    <div class="main-w3">
        <div class="container">
            <!-- main-slider -->
            <div class="main-slider row">

                <div class="slider-info col-lg-4 col-md-6">
                    <div class="d-grid hh14-text">
                        <div class="hh14-info">

                            <p class="para">Sau liệu trình 7 ngày tôi giảm được 3 kí, vòng eo giảm 3cm, và tôi cảm thấy khỏe hơn rất nhiều. Hoa Ô Rô giúp tôi đạt được mục tiêu hơn cả kì vọng.</p>
                            <div class="client-name">
                                <img src="{{ asset('public/assets/images/c1.jpg') }}"
                                    alt="product" class="img-responsive ">
                                <h5>Chị Ruby Ngọc, giám đốc cty vận chuyển hàng quốc tế ATL.</h5>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="slider-info col-lg-4 col-md-6">
                    <div class="d-grid hh14-text">
                        <div class="hh14-info">

                            <p class="para">Mình đã giảm ngay được 2 ký sau 6 ngày áp dung liệu trình detox, giờ đây cơ thể lại tự động thích nghi với việc ăn nhiều trái cây và da sáng lên rõ.</p>
                            <div class="client-name">
                                <img src="{{ asset('public/assets/images/c2.jpg') }}"
                                    alt="product" class="img-responsive ">
                                <h5>Chị Khánh - Luật Sư</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slider-info col-lg-4 col-md-6">
                    <div class="d-grid hh14-text">
                        <div class="hh14-info">

                            <p class="para">Mình bị đau bao tử do căng thẳng nhiều năm, trước khi thanh lọc cơ thể bằng nước ép mình lo lắm, lo sẽ bị nặng thêm do ngĩ rằng uống nước trái cây sẽ làm đau bao tử, nhưng sau 1 liệu trình 21 ngày, mình cảm thấy nhẹ nhàng hơn rất nhiều, da cũng đẹp hơn nữa.</p>
                            <div class="client-name">
                                <img src="{{ asset('public/assets/images/c3.jpg') }}"
                                    alt="product" class="img-responsive ">
                                <h5>Chị Linh- Giám đốc trung tâm Anh Ngữ</h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /main-slider -->
        </div>
    </div>
</section>

<section class="w3l-specification-6">
    <div class="specification-layout editContent">
        <div class="container">
            <div class=" row">
                <div class="col-xl-6 back-image">
                    <img src="{{ asset('public/assets/images/b1.jpg') }}" alt="product"
                        class="img-responsive ">
                </div>
                <div class="col-xl-6 about-right-faq align-self">
                   
                    <div class="call-grids-w3 d-grid">
                        <div class="grids-1 grids-effect">
                            <a href="#more"><span class="fa fa-pagelines"></span></a>
                            <h4><a href="#feature" class="title-head">Giảm cân thần tốc an toàn:</a></h4>
                            <p class="para">Tư vấn dinh dưỡng <br/>
7 ngày giảm 2 kg<br/>
Cam kết hoàn tiền nếu không hiệu quả</p>

                        </div>
                        <div class="grids-1 grids-effect-2">
                            <a href="#more"><span class="fa fa-apple"></span></a>
                            <h4><a href="#feature" class="title-head">Điều trị các bệnh mãn tính:</a></h4>
                            <p class="para">Tim mạch, tiểu đường, huyết áp,suy thận.<br/>
Cam kết khỏi trong 3 tháng </p>

                        </div>
                    </div>
                </div>
</section>
@endsection
