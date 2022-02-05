<?php
$con=mysqli_connect("localhost","root","","reservation");
if(!$con)
{
    die("error".mysqli_connect_errno());
}
session_start();
if(!isset($_SESSION["username"]))
{
    header("location:login.php");
}
if(isset($_POST["insert"]))
{
  $fullname=$_POST['fullname'];
  $phone=$_POST['phone'];
  $date=$_POST['date'];
  $time=$_POST['time'];
  $from=$_POST['from'];
  $to=$_POST['to'];

  $sql="INSERT INTO book(Fullname,phone_number,Date_D,Time_T,From_F,To_T)VALUES('$fullname','$phone',' $date',' $time','$from','$to')";
  if($con->query($sql)==TRUE)
  {
echo "<script>Your Booking Sucessfully Stored </script>";
  }
}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="grid.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" class="d-inline-block-align-top">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<body>
   
    <!--Nav start!-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark  bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#1">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#2">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#3">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#4">Contact</a>
        </li>
       
      </ul>
      <form class="d-flex">
        
       <button class="btn btn-outline-success" type="submit" name="logout"> <a href="logout.php">Log Out</a></button>
      </form>
    </div>
  </div>
</nav>
<br><br>
    <!--Nav end-->
    <!--grid-->
    <div class="grid">
    
<!--carsoul start-->
<div id="1">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/4.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/1.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br>
<br>
   
</div>

 <!--carsoul end-->
   <!--form start-->
  <div class="frm">
    
<form action="home.php" method="post">
     <div class="container">
      <div class="row g-3">
  <div class="col">
    <input type="text" name="fullname" class="form-control" required placeholder="Full Name" aria-label="Full Name">
  </div>
  <div class="col">
    <input type="tel"  name="phone"class="form-control" required placeholder="Mobile Number" aria-label="Mobile Number">
  </div>
</div>
<br>
<div class="row g-3">
  <div class="col">
    <input type="date" name="date" class="form-control" required placeholder="" aria-label="Booking Date">
  </div>
  <div class="col">
    <input type="time" name="time" class="form-control" required placeholder="" aria-label="Time">
  </div>
</div>
<br>
<div class="row g-3">
  <div class="col">
  <select class="form-select"name="from"required aria-label="Default select example">
  <option selected>From</option>
  <option value="1">Colombo</option>
  <option value="2">Puttalam</option>
  <option value="3">Galle</option>
  <option value="3">Kandy</option>
  <option value="3">Jaffna</option>
  <option value="3">Anuradhapura</option>
  <option value="3">Polannaruwa</option>
  <option value="3">Gampaha</option>
  <option value="3">badulla</option>
</select>
  </div>
  <div class="col">
  <select class="form-select" name="to" required aria-label="Default select example">
  <option selected>To</option>
  <option value="1">Colombo</option>
  <option value="2">Puttalam</option>
  <option value="3">Galle</option>
  <option value="3">Kandy</option>
  <option value="3">Jaffna</option>
  <option value="3">Anuradhapura</option>
  <option value="3">Polannaruwa</option>
  <option value="3">Gampaha</option>
  <option value="3">badulla</option>
</select>
  </div>
</div>
<br>
<button  type="submit" name="insert" >Insert</button>
</div>
</form>
</div>
<br>
  <br>
</div>
   <!--form end-->  
  <!--image start-->
  <div id="2">
  <div class="container">
  
  <p  class="para">
  There are train rides, then there are Sri Lankan train rides. The teardrop island in the Laccadive Sea may be small, but it packs in some of the world’s most thrilling rail journeys. You could find yourself rattling past suburbs with a fellow commuter dozing on your shoulder or perhaps weaving in and out of emerald-green tea gardens and thickets of tropical rainforest while tucking into a packed-to-go meal of curry and rice; sometimes both in the same journey.
</p>

</div>
  <br><br>
</div>
  <!--image end-->
  <!--services start-->
  <div id="3">
 <div class="container">
  <table class="table table-dark table-striped">
    <tr>
      <th>Train Name</th>
      <th>From</th>
      <th>Departure</th>
      <th>To</th>
      <th>Arrival</th>
      
</tr>
<tr>
  <td>Podi Menike</td>
  <td>Colombo Fort</td>
  <td>05:55</td>
  <td>Badulla</td>
  <td>16:00</td>
</tr>
<tr>
  <td>Podi Menike</td>
  <td>Badulla</td>
  <td>08:50</td>
  <td>Colombo Fort</td>
  <td>19:30</td>
</tr>
<tr>
  <td>Udarata Menike</td>
  <td>Colombo Fort</td>
  <td>09:45</td>
  <td>Badulla</td>
  <td>19:45</td>
</tr>
<tr>
  <td>Night Mail</td>
  <td>Colombo Fort</td>
  <td>20.00</td>
  <td>Badulla</td>
  <td>15:45</td>
</tr>
<tr>
  <td>Express</td>
  <td>Puttalam</td>
  <td>5..00</td>
  <td>Colombo Fort</td>
  <td>9:30</td>
</tr>
</table>
</div>
<br>
<br>
</div>
  <!--services end-->
  <!--contact-->
  <!-- Footer -->
  <div id="4">
<footer class="page-footer font-small special-color-dark pt-4">

<!-- Footer Elements -->
<div class="container">

  <!-- Social buttons -->
  <ul class="list-unstyled list-inline text-center">
    <li class="list-inline-item">
      <a class="btn-floating btn-fb mx-1">
        <i class="fab fa-facebook-f"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-tw mx-1">
        <i class="fab fa-twitter"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-gplus mx-1">
        <i class="fab fa-google-plus-g"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-li mx-1">
        <i class="fab fa-linkedin-in"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-dribbble mx-1">
        <i class="fab fa-dribbble"> </i>
      </a>
    </li>
  </ul>
  <!-- Social buttons -->

</div>
<!-- Footer Elements -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
</div>
<!-- Copyright -->

</footer>
</div>
<!-- Footer -->
  <!--contact-->
  
    

    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>  
</body>
</html>