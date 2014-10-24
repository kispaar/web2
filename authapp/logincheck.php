<?php
$db=array(1=>array("username"=>"john","pass"=>"123"),
    2=>array("username"=>"luke","pass"=>"1453"));
$authorized=FALSE;

foreach ($db as $value) {
    if($_POST['user']==$value["username"]&& 
            $_POST['pwd']==$value['pass']){
        
        $authorized=true;
    }
}
if($authorized){
    session_start();
    $_SESSION['username']=$_POST['user'];
    header("Location:home.php");
    
}else{
    header("Location:index.php");
}


