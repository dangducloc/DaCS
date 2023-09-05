<?php
require '../simple_html_dom.php';

$link = $_GET['link'];
//echo $link;

// echo $html;
// echo phpversion();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Thông báo</title>
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
    <!--


TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

-->
    <style>
        #nav * {
            color: black;
        }

        #nav {
            border-bottom: solid #000000 3px;
        }

        .site-header {

            background-image: url("../images/VKU.png");

            background-repeat: no-repeat;
            background-size: 100% 100%;
        }

        .overlay {
            background-image: linear-gradient(180deg, #0a0000 -152%, #ffffff00 100%);
            position: absolute;
            pointer-events: none;
            width: 100%;
            height: 80%;
            opacity: 0.75;
        }

        .rao {
            width: 100%;
        }

        .item img {
            height: 100%;
        }

        .card-img-top {
            height: 60%;
        }

        .custom-block {
            padding: 9px;
            padding-left: 5%;
        }

        #toTop {
            padding: 5px 3px;
            background: #000;
            color: #fff;
            position:fixed ;
            bottom: 20px;
            right: 5px;
            display: none;
        }

        @media only screen and (min-width: 700px) {
            #tieude {
                background: linear-gradient(to right, #f5f5f5 54.6%, #000000 45%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }
        }
    </style>
</head>

<body id="top">

    <main>
        <nav class="navbar sticky-top navbar-expand-lg bg-white " id="nav">
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
                            <?php
                            echo "<a class=\"nav-link \" href=\"thong bao&tin tuc.php\">Trang chủ</a>"
                                ?>
                        </li>

                        <li class="nav-item">
                            <?php
                            echo "<a class=\"nav-link \" href=\"thong bao&tin tuc.php\">Thông báo</a>"
                                ?>
                        </li>

                        <li class="nav-item dropdown">
                            <?php
                            echo "<a class=\"nav-link \" href=\"thong bao&tin tuc.php\">Tin tức</a>"
                                ?>
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

        <section class="topics-detail-section section-padding" id="topics-detail">
            <div class="container " id="chua">
                <div class="row">

                    <div class="col-lg-8 col-md-7 col-12 border border-3 ">
                        <h4 style="color:#fe0000" class="text-center">Nội dung</h4>
                        <hr>
                        <div>
                            <?php
                            $html = file_get_html($link);
                            $e = $html->find('div#content-body', 0);
                            echo $e;
                            ?>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-5 col-12 " id="noi" style="height: 30%;">

                        <div class="custom-block bg-white shadow" style="height: 100%;">
                            <h4 style="color:#F0CA00;cursor: pointer;" class="text-center noibat">Thông báo mới</h4>
                            <hr>
                            <div id="tbnb" style="overflow-x: hidden;height: 450px;">
                                <table>
                                    <?php
                                    $tbnb = $html->find('.content .view-content table tr td a ');
                                    for ($i = 0; $i < sizeof($tbnb); $i++) {
                                        $a = $tbnb[$i]->href;
                                        $url = "https://daotao.vku.udn.vn$a";
                                        $tbnb[$i]->href = "thongbao-detail.php?link=$url";
                                        echo "<tr><td class =\"custom-block bg-white shadow-sm\">";
                                        echo $tbnb[$i];
                                        echo "</td></tr>";
                                    }
                                    ?>
                                </table>

                            </div>

                        </div>

                    </div>
    </main>
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
                    <div id='toTop'>Lên Đầu</div>
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
</body>
<script src="../js/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        var element = document.getElementById('nav');
        var info = element.getBoundingClientRect();
        var height = info.height;
        var width = info.width;

        // alert(`${height}`);
        $("#noi").css("position", "sticky");
        $("#noi").css("top", `${1.2 * height}px`);
        $("#toTop").click(function () {
            //1 second of animation time
            //html works for FFX but not Chrome
            //body works for Chrome but not FFX
            //This strange selector seems to work universally
            $("html, body").animate({ scrollTop: 0 }, 1000);
        });
    })
    $(window).scroll(function () {
        if ($(this).scrollTop()) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });



</script>

</html>