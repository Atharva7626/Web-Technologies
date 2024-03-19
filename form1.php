<?php
// session_start();
?>

<html>
    <head>
        <title> Authentication </title>
    </head>

    <form action="<?php echo$_SERVER['PHP_SELF']; ?>" method="POST">
        Enter the username : <input type="text" name='uname'><br><br>
        Enter the password: <input type="text" name='pass'><br><br>
        <input type="submit" value="Submit">
    </form>
</html>


<!-- ALso splitted and formed as a php seprately and html sepately... for college -->

<?php
session_start();
$cnt=0;
if ($_SERVER['REQUEST_METHOD'] == 'POST')
 {
       $user = $_POST['uname'];
       $pass = $_POST['pass'];

    if($user=="atharv" and $pass=="123")
    {
        
        $_SESSION['username'] = $user;

        echo"<form fieldset=1>
               
                Welcome...
             </form>";
    }
    else
    {
        $cnt = isset($_SESSION['attempt']) ? $_SESSION['attempt'] : 0;
        echo"Its your ".$cnt." try";
         $cnt++; 
    
        if ($cnt >3)
        {
             echo "<br> Error ...Too many unsuccessful attempts<br>";
            session_destroy();
        }
        else
           $_SESSION['attempt']=$cnt;
    }
}

?>