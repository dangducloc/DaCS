<?php 
/**
 * Summary of obf
 */
class obf
{
    
    /**
     * Summary of link
     * @var string
     */
    public $link = "";
    /**
     * Summary of __construct
     * @param mixed $link
     */
    function __construct($link)
    {
        $this->link = $link;
    }
    
    /**
     * Summary of tintuc
     * @param mixed $so
     * @return void
     */
    public function tintuc( $so)
    {
        $tintuc = file_get_html($this->link. "$so");
        $tinanh = $tintuc->find(".grid-item2 img ");
        $tieude = $tintuc->find('strong a');
        $text = $tintuc->find('p');
        $class = [" card-img-top", "card-title", "card-text"];
        for ($i = 0; $i < sizeof($tinanh); $i++) {
            echo "<div class= \"col-lg-4 col-md-6 col-12 tin\">";
            echo "<div class =\"card\">";
            // lấy ảnh bỏ vào card
            $tinanh[$i]->class = $class[0];
            echo $tinanh[$i];
            //body card
            echo "<div class =\"card-body\">";
            //tiêu đề
            $herf = $tieude[$i]->href;
            $tieude[$i]->href = "tintuc-detail.php?link=$herf&so=$so";
            echo "<h6 class = \"$class[1]\"><strong>$tieude[$i]</strong></h6>";
            // echo "<h6 class = \"$class[1]\">$tieude[$i]</h6>";
            //text
            $text[$i]->class = $class[2];
            echo $text[$i];

            echo "</div>";


            echo "</div>";
            echo "<hr>";
            echo "</div>";
        }

    }
    
    /**
     * Summary of thongbao
     * @param mixed $index
     * @param mixed $class
     * @param mixed $toPHP
     * @return void
     */
    public function thongbao( $index, $class, $toPHP)
    {
        require_once '../simple_html_dom.php';
        $html = file_get_html($this->link);
        $T = $html->find('.item-list', $index);
        //$links = $Tu_phong_dt->find('ul li');
        $links = $T->find('a');
        $date = $T->find('li span');
        echo "<table class=\"bang\">";
        for ($i = 0; $i < sizeof($links); $i++) {
            $href = $links[$i]->href;
            $url = "https://daotao.vku.udn.vn$href";
            $links[$i]->href = "$toPHP?link=$url";
            if (count($date) != 0 and count($links) != 0) {
                if ($i >= 11) {
                    echo "<tr class=\"$class\" style=\"border-bottom:1px solid gray ;\">
                    <td style=\"color:red\">&raquo</td>
                    <td style=\"width: 70%;\">$links[$i]</td>
                    <td style=\"text-align: center;\" >$date[$i]</td>
                    </tr>";
                } else {
                    echo "<tr style=\"border-bottom:1px solid gray ;\">
                    <td style=\"color:red\">&raquo</td>
                    <td style=\"width: 70%;\">$links[$i]</td>
                    <td style=\"text-align: center;\" >$date[$i]</td>
                    </tr>";
                }


            }
            if (count($date) == 0 and count($links) != 0) {
                // echo $links[$i];
                if ($i >= 11) {
                    echo "<tr class=\"$class\" style=\"border-bottom:1px solid gray ;\">
                    <td style=\"color:red\">&raquo</td>
                    <td style=\"width: 100%;\">$links[$i]</td>
                    </tr>";
                } else {
                    echo "<tr style=\"border-bottom:1px solid gray ;\">
                    <td style=\"color:red\">&raquo</td>
                    <td style=\"width: 100%;\">$links[$i]</td>
                    </tr>";
                }
            }


        }
        echo "</table>";
    }

   
    /**
     * Summary of CountItems
     * @return int
     */
    public function CountItems()
    {
        require_once '../simple_html_dom.php';
        $html = file_get_html($this->link);
        $T = $html->find('.item-list', 0);
        //$links = $Tu_phong_dt->find('ul li');
        $links = $T->find('a');
        return sizeof($links);
    }


}





/**
 * Summary of noi_dung
 */
class noi_dung
{
    /**
     * Summary of link
     * @var string
     */
    public $link = '';

    /**
     * Summary of __construct
     * @param mixed $link
     */
    public function __construct($link)
    {
        $this->link = $link;
    }
    
    /**
     * Summary of tieude
     * @return void
     */
    public function tieude()
    {
        $html = file_get_html($this->link);
        $tieu_de = $html->find('div.moduletable h3', 0);

        echo $tieu_de->plaintext;

    }
    
    /**
     * Summary of anhdau
     * @return void
     */
    public function anhdau()
    {
        $html = file_get_html($this->link);
        $anh = $html->find('.content_text p img', 0);
        echo $anh;

    }
    
    /**
     * Summary of noidung
     * @return void
     */
    public function noidung()
    {
        $html = file_get_html($this->link);
        $content = $html->find('div.content_text', 0);
        echo $content;
    }

    /**
     * Summary of thongBao_moi
     * @return void
     */
    public function thongBao_moi(){
        $s = file_get_html('https://daotao.vku.udn.vn/thong-bao/thong-bao-14686.html');
        $tbnb = $s->find('.content .view-content table tr td a ');
        for ($i = 0; $i < sizeof($tbnb); $i++) {
            $a = $tbnb[$i]->href;
            $url = "https://daotao.vku.udn.vn$a";
            $tbnb[$i]->href = "thongbao-detail.php?link=$url";
            echo "<tr><td class =\"custom-block bg-white shadow-sm\">";
            echo $tbnb[$i];
            echo "</td></tr>";
        }
    }

    
    /**
     * Summary of Quantam
     * @return void
     */
    public function Quantam(){
        $html = file_get_html($this->link);
        $CotheQt = $html->find('.container_parent .tin-khac li div a');
        for ($i = 0; $i < sizeof($CotheQt); $i++) {
            $CotheQt[$i]->class = 'maybe';
            $ref = $CotheQt[$i]->href;
            $CotheQt[$i]->href = "tintuc-detail.php?link=$ref&so=1";
            echo "<tr >" . "<td style= \"color:red;text-align: center;\">&raquo</td>" . "<td class=\"custom-block bg-white shadow-sm\" style=\"width: 90%;\">" . $CotheQt[$i] . "</td>" . "</tr>";


        }
    }
}

