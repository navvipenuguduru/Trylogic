<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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


<div class="container overflow-hidden text-center">
        <div class="row gx-5">
          <div class="col-4 ">
           <div class="p-3  mt-5 shadow p-3 mb-5 bg-body-tertiary rounded">
            <h2>DASHBOARD</h2>
            <a href="HOME.php">DASHBOARD</a>
           </div>
          </div>
          <div class="col-4">
            <div class="p-3  mt-5 shadow p-3 mb-5 bg-body-tertiary rounded">      
                      <h2>APPOINTMENT</h2>
                      <a href="#">BOOK APPOINTMENT</a>
            </div>
          </div>
          <div class="col-4">
            <div class="p-3  mt-5 shadow p-3 mb-5 bg-body-tertiary rounded">
                <h2>HOSTORY</h2>
                <a href="#">APPOINTMENT HISTORY</a>
            </div>
          </div>
        </div>
      </div>

</body>
</html>