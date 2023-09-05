<?php
require "class.php";

//khai bao doi tuong
$ojb1 = new obf('https://daotao.vku.udn.vn/vku-thong-bao-chung');
$ojb2 = new obf('https://daotao.vku.udn.vn/vku-thong-bao-ktdbcl');
$ojb3 = new obf('https://daotao.vku.udn.vn/vku-thong-bao-ctsv');
$ojb4 = new obf('https://daotao.vku.udn.vn/vku-thong-bao-khtc');
$ojb5 = new obf('https://daotao.vku.udn.vn/');
$ojb6 = new obf('https://daotao.vku.udn.vn/');
$ojb = new obf("https://vku.udn.vn/tin-tuc-va-hoat-dong/trang-");


?>

<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clone Web trường</title>
    <link rel="icon" type="image/x-icon" href="../images/logo.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
        rel="stylesheet">

    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/bootstrap-icons.css" rel="stylesheet">

    <link href="../css/templatemo-topic-listing.css" rel="stylesheet">
    <!-- thư viện cho slideshow -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"
        integrity="sha512-C8Movfk6DU/H5PzarG0+Dv9MA9IZzvmQpO/3cIlGIflmtY3vIud07myMu4M/NTPJl8jmZtt/4mC9bAioMZBBdA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--

TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

-->
    <style>
        #toTop {
            padding: 5px 3px;
            background: #000;
            color: #fff;
            position: fixed;
            bottom: 20px;
            right: 5px;
            display: none;
        }

        .item {
            background: #abc;
            padding: 5px;
            text-align: center;
            font-size: 2rem;
            margin: 5px;
        }

        .item img {
            height: 100Px;
        }

        #nav {
            background: white;
            border-bottom: black 3px solid;
            /* background: linear-gradient(85deg, rgba(242,40,62,0.8016456582633054) 0%, rgba(255,239,47,0.7708333333333334) 50%, rgba(0,25,238,0.5999649859943977) 100%); */
        }

        .hero-section {
            /* background: linear-gradient(85deg, rgba(242,40,62,0.5495448179271709) 0%, rgba(255,239,47,0.3786764705882353) 50%, rgba(0,25,238,0.241421568627451) 100%)!important; */
            background-image: repeating-linear-gradient(45deg,
                    rgba(0, 0, 0),
                    rgba(0, 0, 0),
                    transparent 3px,
                    transparent 75px);

        }

        .featured-section {
            /* background: linear-gradient(85deg, rgba(242,40,62,0.5495448179271709) 0%, rgba(255,239,47,0.3786764705882353) 50%, rgba(0,25,238,0.241421568627451) 100%)!important; */
            background-image: repeating-linear-gradient(135deg,
                    rgba(0, 0, 0),
                    rgba(0, 0, 0),
                    transparent 3px,
                    transparent 75px);
            /* background-size: 100% 100%; */
            /* background-position: -62px 0; */
        }

        #nav * {
            color: black;

        }

        #doitac {
            background: rgb(238, 174, 202, 0.2);
            /* background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%); */
        }

        .card-text {
            font-size: 14px;
        }

        .MoreLess {
            background-color: white;
            border: none;
            color: #ff0046;
            float: right;
        }
    </style>
    <script>
        let currentUrl = window.location.href;
        if (currentUrl === "http://localhost/Clone%20web%20truong/index-dao%20tao-tin-tuc/thong%20bao&tin%20tuc.php") {
            window.location.href = "http://localhost/Clone%20web%20truong/index-dao%20tao-tin-tuc/thong%20bao&tin%20tuc.php?so=1";
        }

    </script>
</head>

<body id="top">

    <main>

        <nav class="navbar sticky-top navbar-expand-lg" id="nav">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <i class="bi-back"></i>
                    <span>VKU</span>
                </a>

                <div class="d-lg-none ms-auto me-4">
                    <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5 me-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link " href="#section_1">Trang chủ</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="#section_2">Thông báo</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#section_3">Tin tức</a>
                        </li>

                        <!-- <li class="nav-item">
                            <a class="nav-link " href="#section_4">FAQs</a>
                        </li> -->

                        <li class="nav-item">
                            <a class="nav-link " href="#section_5">Liên hệ đê</a>
                        </li>

                    </ul>

                    <div class="d-none d-lg-block">
                        <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
                </div>
            </div>
        </nav>


        <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h1 class="text-dark text-center" style="font-size: 1000%;"><Span
                                style="color:#ff0046!important">V</Span><span
                                style="color:#ffd753!important">K</span><span style="color:#05c9f3!important">U</span>
                        </h1>

                        <h6 class="text-center"><Span style="color:#ff0046">Nhân bản</Span>-<span
                                style="color:#ffd753">Phụng sự</span>-<span style="color:#05c9f3">Khai phóng</span></h6>
                    </div>

                </div>
            </div>
        </section>


        <section class="featured-section" style="border-top:3px solid black;border-bottom:3px solid black ;">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-12 col-12">
                        <div class="custom-block bg-white custom-block-overlay" id="doitac"
                            style="border: 3px solid black">
                            <div class="text-center">
                                <br><br><br>
                                <h5 class="mb-2">Đối tác và Hợp tác</h5>
                                <br><br>
                                <div class="owl-carousel owl-theme " style="height: 100%;">
                                    <?php
                                    require_once('../simple_html_dom.php');
                                    $html = file_get_html('https://vku.udn.vn/');
                                    $logo = $html->find('.logodt');
                                    for ($i = 0; $i < sizeof($logo); $i++) {
                                        echo "<div class=\"item\">";
                                        echo $logo[$i];
                                        echo "</div>";
                                        ; //->src, "n";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="explore-section section-padding" id="section_2">
            <div class="container">

                <div class="col-12 text-center">
                    <h2 class="mb-4">Thông báo</h1>
                </div>

            </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="design-tab" data-bs-toggle="tab"
                                data-bs-target="#design-tab-pane" type="button" role="tab"
                                aria-controls="design-tab-pane" aria-selected="true">Phòng Đào tạo</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="marketing-tab" data-bs-toggle="tab"
                                data-bs-target="#marketing-tab-pane" type="button" role="tab"
                                aria-controls="marketing-tab-pane" aria-selected="false">Phòng Khảo thí</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="finance-tab" data-bs-toggle="tab"
                                data-bs-target="#finance-tab-pane" type="button" role="tab"
                                aria-controls="finance-tab-pane" aria-selected="false">Công tác sinh viên</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="music-tab" data-bs-toggle="tab"
                                data-bs-target="#music-tab-pane" type="button" role="tab" aria-controls="music-tab-pane"
                                aria-selected="false">Kế hoạch Tài chính</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="education-tab" data-bs-toggle="tab"
                                data-bs-target="#education-tab-pane" type="button" role="tab"
                                aria-controls="education-tab-pane" aria-selected="false">Lịch nghỉ và Học bù</button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel"
                                aria-labelledby="design-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="#">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Thông báo từ Phòng Đào tạo</h5>
                                                    </div>
                                                    <span class="badge bg-design rounded-pill ms-auto">
                                                        <?php
                                                        echo $ojb1->CountItems();
                                                        ?>
                                                    </span>
                                                </div>

                                            </a>
                                            <?php
                                            $ojb1->thongbao( 0, "hide1", 'thongbao-detail.php');
                                            ?>
                                            <br>
                                            <button type="button" class="MoreLess">Xem thêm</button>
                                            <br>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel"
                                aria-labelledby="marketing-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="#">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Thông tin từ Phòng Khảo thí</h5>
                                                    </div>

                                                    <span class="badge bg-graphic rounded-pill ms-auto">
                                                        <?php
                                                        echo $ojb2->CountItems();
                                                        ?>
                                                    </span>
                                                </div>
                                            </a>
                                            <?php
                                            $ojb2->thongbao( 0, "hide2", 'thongbao-detail.php');
                                            ?>
                                            <br>
                                            <button type="button" class="MoreLess">Xem thêm</button>
                                            <br>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="finance-tab-pane" role="tabpanel"
                                aria-labelledby="finance-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="#">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Thông tin từ Công tác sinh viên</h5>
                                                    </div>

                                                    <span class="badge bg-music rounded-pill ms-auto">
                                                        <?php
                                                        echo $ojb3->CountItems();
                                                        ?>
                                                    </span>
                                                </div>
                                            </a>
                                            <?php
                                            // GetSetURLtoPHP('https://daotao.vku.udn.vn/vku-thong-bao-ctsv', 0, "hide3", 'thongbao-detail.php');
                                            
                                            $ojb3->thongbao( 0, "hide3", 'thongbao-detail.php');
                                            ?>
                                            <br>
                                            <button type="button" class="MoreLess">Xem thêm</button>
                                            <br>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="music-tab-pane" role="tabpanel" aria-labelledby="music-tab"
                                tabindex="0">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="#">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Thông báo từ phòng tài chính</h5>
                                                    </div>

                                                    <span class="badge bg-music rounded-pill ms-auto">
                                                        <?php
                                                        echo $ojb4->CountItems( );
                                                        ?>
                                                    </span>
                                                </div>
                                            </a>
                                            <?php
                                            // GetSetURLtoPHP('https://daotao.vku.udn.vn/vku-thong-bao-khtc', 0, "hide4", 'thongbao-detail.php');
                                            $ojb4->thongbao(  0, "hide4", 'thongbao-detail.php');
                                            ?>
                                            <br>
                                            <button type="button" class="MoreLess">Xem thêm</button>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="education-tab-pane" role="tabpanel"
                                aria-labelledby="education-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-3 ">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="#">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Lịch Nghỉ</h5>
                                                    </div>

                                                </div>
                                            </a>
                                            <?php
                                            // GetSetURLtoPHP('https://daotao.vku.udn.vn/', 2, "hide5", '#');
                                            $ojb5->thongbao( 02, "hide5", '#');
                                            ?>
                                            <br>
                                            <button type="button" class="MoreLess">Xem thêm</button>
                                            <br>
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="#">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Lịch học bù</h5>
                                                    </div>

                                                </div>
                                            </a>
                                            <?php
                                            // GetSetURLtoPHP('https://daotao.vku.udn.vn/', 3, "hide6", '#');
                                            $ojb6->thongbao( 03, "hide6", '#');
                                            ?>
                                            <br>
                                            <button type="button" class="MoreLess">Xem thêm</button>
                                            <br>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </section>


        <section class="timeline-section section-padding" id="section_3" style="background-image: none;">
            <div class="section-overlay"></div>

            <div class="container ">


                <div class="col-12 text-center">
                    <h2 class=" mb-4" style="border-bottom: 4px solid black;color:black">Tin tức</h1>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="custom-block bg-white shadow-lg">
                            <div class="container">
                                <div class="row row-gap-3" id="tin_tuc">
                                    <?php
                                    $trang = $_GET['so'];
                                    $ojb->tintuc($trang);
                                    ?>
                                </div>
                            </div>
                            <nav aria-label="#section_3" class="">

                                <ul class="pagination pagination-circle justify-content-center">
                                    <li class="page-item">
                                        <?php

                                        echo "<a class=\"page-link\" href=\"nextAndpre.php?move=pre&cur=$trang\">Previous</a>";
                                        ?>
                                    </li>

                                    <?php
                                    $first = 1;
                                    $last = 5;
                                    if ($trang > 5) {
                                        $first = $trang - 2;
                                        $last = $trang + 2;
                                    }
                                    for ($i = $first; $i <= $last; $i++) {
                                        if ($i == $trang) {
                                            echo "<li class=\"page-item active\"><a class=\"page-link\" href=\"thong bao&tin tuc.php?so=$i#section_3\">$i</a></li>";
                                        } else {
                                            echo "<li class=\"page-item\"><a class=\"page-link\" href=\"thong bao&tin tuc.php?so=$i#section_3\">$i</a></li>";
                                        }
                                    }
                                    ?>

                                    <li class="page-item">
                                        <?php
                                        echo "<a class=\"page-link\" href=\"nextAndpre.php?move=next&cur=$trang\">Next</a>";
                                        ?>
                                    </li>
                                </ul>
                            </nav> 
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
    <div id='toTop'>Lên Đầu </div>
    <footer class="site-footer contact-section section-padding" id="section_5">
        <br>
        <div class="container" style="border-top: solid black 3px;">
            <div class="row">

                <div class="col-lg-12 col-12 text-center">
                    <h2 class="mb-5">Liên hệ</h2>
                </div>

                <div class="col-lg-6 col-12 mb-6 mb-lg-0">
                    <iframe class="google-map" width="100%" frameborder="0" scrolling="no" marginheight="0"
                        marginwidth="0"
                        src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Vku,  470 Tran Dai Nghia Street, Hoa Quy Ward,, Phường Hòa Quý, Vietnam&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                        width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe><!--<a
                        href="https://embed-googlemap.com">embed code google maps</a> -->



                </div>
                <div class="col-lg-5 col-md-12 col-12 mb-3 mb-lg- mb-md-0 ms-auto">
                    <br>
                    <h3 class="mb-3">Văn phòng chính</h3>

                    <h6> 470 Trần Đại Nghĩa, Ngũ Hành Sơn, Đà Nẵng </h6>

                    <hr>

                    <p class="d-flex align-items-center mb-1">
                        <strong class="me-2">Sđt: </strong>

                        <a href="tel: +1 236-655-2688" h="ID=Maps,5461.1" class="site-footer-link">
                            +1 236-655-2688
                        </a>
                    </p>

                    <p class="d-flex align-items-center">
                        <strong class="me-2">Email:</strong>

                        <a href="mailto:info@company.com" class="site-footer-link">
                            info@company.com
                        </a>
                    </p>
                </div>
            </div>
        </div>

    </footer>


    <!-- JAVASCRIPT FILES -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    <!-- <script src="../js/click-scroll.js"></script> -->
    
    <!-- masonry bootstrap 5-->

    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

    <!-- thư vien và js slideshow -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            stagePadding: 50,/*the little visible images at the end of the carousel*/
            items: 4,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 2
                },
                800: {
                    items: 2
                },
                1000: {
                    items: 5
                },
                1200: {
                    items: 5
                }
            }
        })
    </script>



    <script>
        $(document).ready(function () {
            var button = document.getElementsByClassName("MoreLess");
            var butt1 = button[0];
            var butt2 = button[1];
            var butt3 = button[2];
            var butt4 = button[3];
            var butt5 = button[4];
            var butt6 = button[5];
            $(".hide1").hide();
            $(".hide2").hide();
            $(".hide3").hide();
            $(".hide4").hide();
            $(".hide5").hide();
            $(".hide6").hide();
            $(butt1).click(function () {
                $(".hide1").toggle();
                if ($(butt1).text() === "Xem thêm") {
                    $(butt1).text("Ẩn bớt");
                } else {
                    $(butt1).text("Xem thêm");
                }
            });
            $(butt2).click(function () {
                $(".hide2").toggle();
                if ($(butt2).text() === "Xem thêm") {
                    $(butt2).text("Ẩn bớt");
                } else {
                    $(butt2).text("Xem thêm");
                }
            });
            $(butt3).click(function () {
                $(".hide3").toggle();
                if ($(butt3).text() === "Xem thêm") {
                    $(butt3).text("Ẩn bớt");
                } else {
                    $(butt3).text("Xem thêm");
                }
            });
            $(butt4).click(function () {
                $(".hide4").toggle();
                if ($(butt4).text() === "Xem thêm") {
                    $(butt4).text("Ẩn bớt");
                } else {
                    $(butt4).text("Xem thêm");
                }
            });
            $(butt5).click(function () {
                $(".hide5").toggle();
                if ($(butt5).text() === "Xem thêm") {
                    $(butt5).text("Ẩn bớt");
                } else {
                    $(butt65).text("Xem thêm");
                }
            });
            $(butt6).click(function () {
                $(".hide6").toggle();
                if ($(butt6).text() === "Xem thêm") {
                    $(butt6).text("Ẩn bớt");
                } else {
                    $(butt6).text("Xem thêm");
                }
            });
            $("#toTop").click(function () {
                //1 second of animation time
                //html works for FFX but not Chrome
                //body works for Chrome but not FFX
                //This strange selector seems to work universally
                $("html, body").animate({ scrollTop: 0 }, 1000);
            });
        });
        $(window).scroll(function () {
            if ($(this).scrollTop()) {
                $('#toTop').fadeIn();
            } else {
                $('#toTop').fadeOut();
            }
        });

        
    </script>
    <script>
        var $grid = document.querySelector('#tin_tuc');
        var msnry = new Masonry($grid, {
            itemSelector: '.tin',
            percentPosition: false,

        });
    </script>
</body>

</html>