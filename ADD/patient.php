<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  body{
    background-image:url('https://th.bing.com/th/id/OIP.L_l-NC_BK3b82FtKQ_Q-rQHaEo?w=274&h=180&c=7&r=0&o=5&dpr=1.6&pid=1.7')
  }
</style>
<body>
<nav class="navbar  bg-body-tertiary">
  <div class="container-fluid">
  <button class="navbar-toggler ms-5" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>
    <a class="navbar-brand" href="#">MANAGEMENT</a>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      
    </div>
  </div>
</nav>
<!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Enable both scrolling & backdrop</button> -->

<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">PATIENTS MANAGEMENT</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <!-- <p>Try scrolling the rest of the page to see this option in action.</p> -->
  <ul><li class=" nav-item mt-4">
    <a href="user.php" class="nav-link "><h4>DASHBOARD</h4></a>
</li>
  <li class=" nav-item mt-4">    <a href="patient.php" class="nav-link"><h4>BOOK APPOINTMENT</h4></a>
 <li class=" nav-item mt-4">    <a href="ap history.php" class="nav-link"><h4>APPOINTMENT HISTORY</h4></a>
</li></ul>
  </div>
</div>
<div class="container text-light">
  <h3 class="text-center mt-5">USER BOOK APPOINTMENT</h3>

  <div class="container mt-5 ">
    <div class="container-fluid">
    <form action="" method="post">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">PATIENT NAME</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="uname">
    </div>
  </div> 
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">MOBILE NUMBER</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputPassword3"  name="mb">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">HEALTH ISSUE</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3"  name="hl">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">DATE OF APPOINT</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="inputPassword3"  name="db">
    </div>
  </div>
  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">GENDER</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="male" >
        <label class="form-check-label" for="gridRadios1">
          MALE
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="male">
        <label class="form-check-label" for="gridRadios2">
          FEMALE
        </label>
      </div>
      <div class="form-check ">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="others" >
        <label class="form-check-label" for="gridRadios3">
          OTHERS
        </label>
      </div>
    </div>
  </fieldset>
  <div class="row mb-3">
    <div class="col-sm-10 offset-sm-2">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Example checkbox
        </label>
      </div>
    </div>
  </div>
  <div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-primary" type="submit" name="submit">Button</button>
</div>
</form>
    </div>
  </div>
</div>
</body>
</html>


<?php
include_once('db.php');

if(isset($_POST['submit'])){

    $name =$_POST['uname'];
    $mb =$_POST['mb'];
    $hl =$_POST['hl'];
    $db =$_POST['db'];
    $rd =$_POST['gridRadios'];

   
    $sql ="insert into hospital(name,phone,issue,birth,gender ) values('$name', '$mb', '$hl', '$db', '$rd'  )";

    $result =mysqli_query($con,$sql);
    if(!$result){
      die("failed".mysqli_error($con));
    }
   

}


?>