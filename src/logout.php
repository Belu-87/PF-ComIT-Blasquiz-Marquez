<?php 
session_start();
session_unset();
    $_SESSION['FBID'] = NULL;
    $_SESSION['FULLNAME'] = NULL;
    $_SESSION['EMAIL'] =  NULL;
    $_SESSION['usuario'] =  NULL; 

    //ver este o destroy
session_cache_expire();
    
header("Location: home.php");        // you can enter home page here ( Eg : header("Location: " ."http://www.krizna.com"); 

session_destroy();
?>
