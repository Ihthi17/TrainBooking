<?php
 session_start();
$con=mysqli_connect("localhost","root","","reservation");
if(!$con)
{
    die("error".mysqli_connect_errno());
}
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT * FROM register WHERE Username	='$username' and Psw=' $password' ";
    $result = mysqli_query($con,$sql);
   if(mysqli_num_rows($result)==0)
   {   
       echo '<script language="javascript">alert("Your username or Password is wrong");</script>';
   }
   else{
    $_SESSION["username"] =$username;
    
     header("location:home.php");
   }
   
  
    
   
}





?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style-login.css"> 
</head>
<body>
<div class="container">
            <h4 >Log In</h4>
<form action="login.php" method="POST">
<label>User Name*</label><br><br>
<input type="text" name="username" required><br><br>
<label>Password*</label><br><br>
<input type="password" name="password" required><br><br>
<button type="submit" name=submit>Log In</button><br><br>
<a href="register.php">Register</a>

</form>
</div>
</body>
</html>