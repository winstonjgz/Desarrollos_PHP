<?php
    session_name("LOGIN");
    session_start();
    session_destroy();


    //redireccionamiento con Javascript
    
    if(headers_sent()){
        echo "<script>
    window.location.href='index_login.php';
     </script>";
    }else{
        header("Location: index_login.php");
    }