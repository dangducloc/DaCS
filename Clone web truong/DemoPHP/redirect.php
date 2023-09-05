<?php 
if($_GET['next']=="next"){
    $so = $_GET['cur']+1;
    header("Location:demo4.php?so=$so",true,303);
    die();
}
if($_GET['pre']=="pre"){
    $so = $_GET['cur']-1;
    if($so == 0){
        header("Location:demo4.php?so=1",true,303);
        die();
    }
    else{
        header("Location:demo4.php?so=$so",true,303);
        die();
    }
    
}

?>