<?php

session_start();
$_SESSION['cnt']=0;
$nm=$_POST['us'];
$pass=$_POST['p'];

if ($nm ==$pass)
{
    echo"Welcome";
}
 else{

    $_SESSION['cnt']++;
    echo"Its your attempt :  ".$_SESSION['cnt'];
    //sleep(12);  
    
    /*
    
    if ($_SESSION['cnt']==3){
        die("Its tour last attempt");

    }
    */
    
    $cnt = isset($_SESSION['cnt']) ? $_SESSION['cnt'] : 0;
        echo"Its your ".$cnt." try";
         $cnt++; 
    
        if ($cnt >3)
        {
             echo "<br> Error ...Too many unsuccessful attempts<br>";
             header("Location:b1.html");
             session_destroy();
        
        }
        else
        {
           $_SESSION['attempt']=$cnt;
           
        
        }


 }


?>