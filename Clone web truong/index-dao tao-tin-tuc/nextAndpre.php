<?php 
if($_GET['move']=="next"){
    $so = $_GET['cur']+1;
    header("Location:thong bao&tin tuc.php?so=$so#section_3",true,303);
    die();
}
if($_GET['move']=="pre"){
    $so = $_GET['cur']-1;
    if($so == 0){
        header("Location:thong bao&tin tuc.php?so=1#section_3",true,303);
        die();
    }
    else{
        header("Location:thong bao&tin tuc.php?so=$so#section_3",true,303);
        die();
    }
    
}

?>