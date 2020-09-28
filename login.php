<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>TRANSPARENT LOGIN</title>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    
</head>
    <body>
        <div class="login">
            <h2>LOG IN FORM</h2>
        <form method="POST" action="#">
            USERNAME:-
            <input type="text" name="username" placeholder="username"><br><br>
            PASSWORD:-
            <input type="text" name="password" placeholder="password"><br><br>
               <input type="submit" name="submit" value="login">
             <p><a href="#">Reset Password</a></p>
            <p><a href="=#">Forgot Password</a></p> 
            
            </form>
            </div>
    <?php
    if(isset($_POST['submit']))
    {
        $count=0;
        $res=mysqli_query($db,"select * from `users` where username='$_POST[username]' && password='$_POST[password]';");
        $count=mysqli_num_rows($res);
        if($count==0)
        {
    ?>
    <script type="text/javascript">
    alert("The username and password does not match");
    </script>
    <?php
        }
        else
        {
    ?> 
    <script type="text/javascript">
    alert("login was successful");
    </script>     
    <?php
        }
    }
    ?>
    

    </body>
</html>