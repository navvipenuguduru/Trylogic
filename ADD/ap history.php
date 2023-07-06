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
    /* background-image:url('https://th.bing.com/th/id/OIP.L_l-NC_BK3b82FtKQ_Q-rQHaEo?w=274&h=180&c=7&r=0&o=5&dpr=1.6&pid=1.7') */
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
<div class="container mt-5">
<table class="table">
  <thead>
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">NAME</th>
      <th scope="col">MOBILE</th>
      <th scope="col">ISSUE</th>
      <th scope="col">DOB</th>
      <th scope="col">GENDER</th>
    </tr>
  </thead>
  <tbody>
  <?php
include_once('db.php');

        $sql ="select * from hospital";

        $result =mysqli_query($con,$sql);
        if($result){
            while($row =mysqli_fetch_array($result)){
                echo'
                <tr>
                <th scope="row">'.$row['id'].'</th>
                <td>'.$row['name'].'</td>
                <td>'.$row['phone'].'</td>
                <td>'.$row['issue'].'</td>
                <td>'.$row['birth'].'</td>
                <td>'.$row['gender'].'</td>
              </tr> '
              ;
            }
        }


?>
   
   </div> 
  </tbody>
</table>
</body>
</html>