<link rel="stylesheet" href="../css/bootstrap.min.css">

<div class="container ">
    <style>
        
    </style>


    <div class="col-12 text-center">
        <h2 class="text-dark mb-4" style="border-bottom: 4px solid black;">Tin tức</h1>
    </div>
    <div class="row" >
        <div class="col-lg-12 col-md-12 col-12">
            <div class="custom-block bg-white shadow-lg">
                <div class="container">
                    <div class="row row-gap-3" id="a">
                        <?php
                        $url = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];

                        if ($url == 'localhost/Clone%20web%20truong/DemoPHP/demo4.php') {
                            header("Location:demo4.php?so=1", true, 303);
                            die();
                        }
                        $so = $_GET['so'];

                        require_once('../simple_html_dom.php');
                        $tintuc = file_get_html("https://vku.udn.vn/tin-tuc-va-hoat-dong/trang-$so");
                        $tinanh = $tintuc->find(".grid-item2 img ");
                        $tieude = $tintuc->find('strong a');
                        $text = $tintuc->find('p');
                        $class = [" card-img-top", "card-title", "card-text"];
                        for ($i = 0; $i < sizeof($tinanh); $i++) {
                            echo "<div class= \"col-lg-4 col-md-6 col-12 a\">";
                            echo "<div class =\"card\">";
                            // lấy ảnh bỏ vào card
                            $tinanh[$i]->class = $class[0];
                            echo $tinanh[$i];
                            //body card
                            echo "<div class =\"card-body\">";
                            //tiêu đề
                            $herf = $tieude[$i]->href;
                            $tieude[$i]->href = "detail.php?link=$herf";
                            echo "<h6 class = \"$class[1]\">$tieude[$i]</h6>";
                            //text
                            $text[$i]->class = $class[2];
                            echo $text[$i];

                            echo "</div>";


                            echo "</div>";
                            echo"<br>";
                            echo "</div>";
                        }

                        ?>
                    </div>
                </div>
                <br><br>
                <nav aria-label="..." class="">
                    <ul class="pagination pagination-circle justify-content-center">
                        <li class="page-item">
                            <?php
                            echo "<a class=\"page-link\" href=\"redirect.php?pre=pre&cur=$so\">Previous</a>";
                            ?>
                        </li>

                        <?php
                        $first = 1;
                        $last = 5;
                        if ($so > 5) {
                            $first = $so - 2;
                            $last = $so + 2;
                        }
                        for ($i = $first; $i <= $last; $i++) {
                            if ($i == $so) {
                                echo "<li class=\"page-item active\"><a class=\"page-link\" href=\"demo4.php?so=$i\">$i</a></li>";
                            } else {
                                echo "<li class=\"page-item\"><a class=\"page-link\" href=\"demo4.php?so=$i\">$i</a></li>";
                            }
                        }
                        ?>

                        <li class="page-item">
                            <?php
                            echo "<a class=\"page-link\" href=\"redirect.php?next=next&cur=$so\">Next</a>";
                            ?>
                        </li>
                    </ul>
                </nav>
                <br>
            </div>
        </div>

    </div>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.slim.min.js"
    integrity="sha512-5NqgLBAYtvRsyAzAvEBWhaW+NoB+vARl6QiA02AFMhCWvPpi7RWResDcTGYvQtzsHVCfiUhwvsijP+3ixUk1xw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var $grid = document.querySelector('#a');
        var msnry = new Masonry($grid, {
            itemSelector: '.a',
            percentPosition: false,
            
        });
    </script>