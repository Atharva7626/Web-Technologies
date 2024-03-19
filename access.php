<?php
session_start();

if (isset($_SESSION['cnt'])){
    $_SESSION['cnt']+=1;

}
else{
    $_SESSION['cnt']=1;
}

   $msg="The web page has been accessed ".$_SESSION['cnt'];
   $msg.=" Times ";
?>


<html>
   <head>
       <title> Web page access</title>
   </head>
   <body>
          <?php echo"<br>".$msg."<br>";?>
   </body>
</html>