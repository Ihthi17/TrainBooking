<?php 
$con=mysqli_connect("localhost","root","","reservation");
if(!$con)
{
    die('error'.mysqli_connect_error());
}
if(isset($_POST['submit']))
{
    $fullname=$_POST['fullname'];
    $username=$_POST['username'];
    $mail=$_POST['mail'];
    $password=$_POST['password'];
    $sql="INSERT INTO register(Fullname,Username,Mail,Psw)VALUES('$fullname','$username',' $mail',' $password')";
    if($con->query($sql)==TRUE)
    {
        header("location:login.php");
    }
    else{
        echo "error";
    }
}









 ?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration</title>
        <link rel="stylesheet" href="style-register.css">
    </head>
    <body>
        <div class="container">
            <h4 >Register</h4>
            <form action="register.php" method="POST">
                <label>Full Name*</label><br><br>
                <input type="text" name="fullname" required><br><br>
                <label>User Name*</label><br><br>
                <input type="text" name="username" required><br><br>
                <label> Mail*</label><br><br>
                <input type="mail" name="mail" required><br><br>
                <label>Password*</label><br><br>
                <input type="password" name="password" required><br><br>
               <button type="submit" name=submit>Register</button>

</form>
</div>
    </body>
    </html>
