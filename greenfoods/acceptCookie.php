<?php 

    setcookie('accept_cookie',true,time() + 24*3600,'/',null,false,true);

    if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])){

        header('location:'.$_SERVER['HTTP_REFERER']);

    }else{

        header('location:index.php');

    }

?>