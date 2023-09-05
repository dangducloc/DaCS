<?php
$so = $_GET['so'];
$link = $_GET['link'];

require "../simple_html_dom.php";
require "class.php";

$con = new noi_dung($link);
$html = file_get_html($link);





?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tin Tức</title>
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

        tbody tr {
            width: 100%;
        }

        #toTop {
            padding: 5px 3px;
            background: #000;
            color: #fff;
            position: fixed;
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

        <nav class="navbar sticky-top navbar-expand-lg bg-white " id="nav" style="border-bottom: solid #000000 3px;">
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
                            echo "<a class=\"nav-link \" href=\"thong bao&tin tuc.php?so=$so\">Trang chủ</a>"
                                ?>
                        </li>

                        <li class="nav-item">
                            <?php
                            echo "<a class=\"nav-link \" href=\"thong bao&tin tuc.php?so=$so#section_2\">Thông báo</a>"
                                ?>
                        </li>

                        <li class="nav-item dropdown">
                            <?php
                            echo "<a class=\"nav-link \" href=\"thong bao&tin tuc.php?so=$so#section_3\">Tin tức</a>"
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


        <header class="site-header d-flex flex-column justify-content-center align-items-center">
            <!-- <span class="overlay"></span> -->
            <div class="container">
                <div class="row justify-content-center align-items-center">

                    <div class="col-lg-5 col-md-12 col-12 mb-5">

                        <h3 id="tieude">
                            <?php
                            $con->tieude( );

                            //$html = file_get_html($link);
                            ?>
                        </h3>

                    </div>

                    <div class="col-lg-5 col-md-12 col-12">
                        <div class="topics-detail-block bg-white shadow-lg">
                            <?php
                            $con->anhdau( );
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </header>


        <section class="topics-detail-section section-padding" id="topics-detail">
            <div class="container" id="chua">
                <div class="row">

                    <div class="col-lg-8 col-md-7 col-12 ">
                        <h4 style="color:#fe0000" class="text-center">Nội dung</h4>
                        <hr>
                        <div>
                            <?php
                            $con->noidung();
                            ?>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-5 col-12 " id="noi" style="height: 30%;">

                        <div class="custom-block bg-white shadow" style="height: 100%;">
                            <h4 style="color:#55a9f7;cursor: pointer;" class="text-center noibat">Tin nổi bật</h4>
                            <hr>
                            <div class="owl-carousel owl-theme ">
                                <?php
                                $noi_bat = $html->find(".left-accordion", 0);
                                $class = [" card-img-top", "card-title", "card-text"];
                                $anh = $noi_bat->find('img');
                                $noibatlink = $noi_bat->find('.top-title a');
                                $date = $noi_bat->find('.day');
                                $month = $noi_bat->find('.month');
                                for ($i = 0; $i < sizeof($anh); $i++) {
                                    $ngay = $date[$i]->plaintext;
                                    $thang = $month[$i]->plaintext;
                                    echo "<div class=\"item\">";
                                    echo "<div class= \"card\" style=\"max-width: 18rem;\">";
                                    // lấy ảnh bỏ vào card
                                    $anh[$i]->class = $class[0];
                                    echo $anh[$i];
                                    echo "
                                        <div class= \"rounded-bottom text-center bg-danger text-light\"style=\"width:100%\"> Ngày đăng: $ngay . $thang</div>
                                        ";
                                    echo "<hr>";
                                    //card body
                                    echo "<div class =\"card-body\">";
                                    $herf = $noibatlink[$i]->href;
                                    $noibatlink[$i]->href = "tintuc-detail.php?link=$herf&so=1";
                                    echo "<span class = \"$class[1]\"><strong>$noibatlink[$i]</strong></span>";
                                    echo "</div>";

                                    echo "</div>";
                                    echo "</div>";
                                }
                                ?>

                            </div>


                            <div id="tbnb" style="overflow-x: hidden;height: 450px;">
                                <table>
                                    <?php
                                    $con->thongBao_moi();
                                    ?>
                                </table>

                            </div>
                            <hr>
                            <h4 style="color:#F0CA00;cursor: pointer;" class="text-center noibat">Thông báo mới</h4>
                        </div>

                    </div>
                    <!-- <hr> -->

                    <div class="col-lg-8 col-md-7 col-12 ">
                        <br><br>
                        <h4 style="color:#FFD753;" class="text-center">Đồng chí có thể thích</h4>
                        <hr>
                        <div>
                            <table style="border-spacing: 5px;border-collapse: separate">
                                <?php
                                $con->Quantam();
                                // $CotheQt = $html->find('.container_parent .tin-khac li div a');
                                // for ($i = 0; $i < sizeof($CotheQt); $i++) {
                                //     $CotheQt[$i]->class = 'maybe';
                                //     $ref = $CotheQt[$i]->href;
                                //     $CotheQt[$i]->href = "tintuc-detail.php?link=$ref&so=1";
                                //     echo "<tr >" . "<td style= \"color:red;text-align: center;\">&raquo</td>" . "<td class=\"custom-block bg-white shadow-sm\" style=\"width: 90%;\">" . $CotheQt[$i] . "</td>" . "</tr>";
                                

                                // }
                                
                                ?>
                            </table>
                        </div>
                    </div>


                </div>

        </section>
        <div id='toTop'>Lên Đầu</div>

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
        <div id='toTop'><i class="fa-solid fa-up-long"></i></div>

        <!-- JAVASCRIPT FILES -->
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/jquery.sticky.js"></script>
        
        <!-- thư vien và js slideshow -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
            integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $('.owl-carousel').owlCarousel({
                stagePadding: 50,/*the little visible images at the end of the carousel*/
                items: <?php echo sizeof($anh) ?>,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    800: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    },
                    1200: {
                        items: 1
                    }
                }
            })
        </script>
        <script>

            $(document).ready(function () {
                var element = document.getElementById('nav');
                var info = element.getBoundingClientRect();
                var height = info.height;
                var width = info.width;

                // alert(`${height}`);
                $("#noi").css("position", "sticky");
                $("#noi").css("top", `${1.2 * height}px`);

                var noibat = document.getElementsByClassName("noibat");
                var noibat1 = noibat[0];
                var noibat2 = noibat[1];
                $("#tbnb").hide();
                $(noibat2).click(function () {
                    $("#tbnb").toggle();
                    $(".owl-theme").toggle();
                    if ($(noibat2).text() === "Thông báo mới") {
                        $(noibat2).text("Tin nổi bật");
                        $(noibat2).css("color", "#55a9f7");
                        $(noibat1).text("Thông báo mới");
                        $(noibat1).css("color", "#F0CA00");
                    }
                    else {
                        $(noibat2).text("Thông báo mới");
                        $(noibat2).css("color", "#F0CA00");
                        $(noibat1).text("Tin nổi bật");
                        $(noibat1).css("color", "#55a9f7");
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
            $(window).resize(function () {
                var element = document.getElementById('nav');
                var info = element.getBoundingClientRect();
                var height = info.height;
                var width = $(window).width();
                if (width <= 1200) {
                    $(`#chua`).removeClass();
                    $(`#chua`).addClass("container-fluid");
                }
                else {
                    $(`#chua`).removeClass();
                    $(`#chua`).addClass("container");
                }
                if (width <= 700) {
                    // alert('Your screen is too small');
                    $("#noi").css("position", "");
                    $("#noi").css("top", ``);
                }
                else {
                    $("#noi").css("position", "sticky");
                    $("#noi").css("top", `${1.2 * height}px`);
                }
            });
            $(window).scroll(function () {
                if ($(this).scrollTop()) {
                    $('#toTop').fadeIn();
                } else {
                    $('#toTop').fadeOut();
                }
            });


        </script>
</body>

</html>