<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  .h{
    color:red;
  }
</style>
<body>
  <div class="container shadow p-3 mb-3 rounded mt-5">
<div class="container bg-info">
  <H3 class="col-sm-offset-2 text-light">CONTACT FORM</H3>
  <h5 class="col-sm-offset-2 text-light">Please fill your information and we'll be sending your order in no time..</h5>
<form class="form-horizontal mt-5" action="display.php" method="post">

  <div class="form-group ">
    <label for="inputEmail3" class="col-sm-2 control-label text-light">YOUR NAME </label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputEmail3" placeholder="ENTER FIRST NAME" name="one">
    </div>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputEmail3" placeholder="ENTER YOUR NAME" name="two">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label text-light">E-mail</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputPassword3" placeholder="email" name="three"><br>
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label  text-light ">PHONE :</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputPassword3" placeholder="###" name="two1">
    </div>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputPassword3" placeholder="###" name="two2">
    </div>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputPassword3" placeholder="###" name="two3">
    </div>
   
  </div>


  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label text-light">MESSAGE SUBJECT :</label>
    <div class="col-sm-6 ">
    <select class=" form-control">
  <option>Others</option>
  <option>One</option>
  <option>Two</option>
  <option>Three</option>
</select>
    </div></div>

<div class="form-group" >
  <label for="id" class="col-sm-2 control-label text-light">MESSAGE </label>
  <div class="col-sm-6">
  <textarea class="form-control" rows="3" name="mes"> </textarea></div>
</div>


  <div class="form-group">
  <label for="id" class="col-sm-2 control-label text-light">VERIFY </label>

    <div class=" col-sm-10 g-recaptcha" data-sitekey="6LcE-IAmAAAAADOxOQj3UN99LTQ3rpF45FzICgtp">
     
    </div>
  </div>

  <hr class="w-50 col-sm-offset-4 h">
  <button type="submit" class="btn btn-md col-sm-offset-2 btn-outline-light btn-warning mb-5">SUBMIT FORM</button>
</form>
</div>
</div>



 <!-- <form action="display.php" method="post">
name :<input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>

mobile number : <input type="number" name="number"><br>
<input type="submit">
</form>  -->





</body>
</html>