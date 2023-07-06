
<?php
include_once 'db.php';
$id =$_GET['id'];

$sql ="select * from crud where id=$id";
$result =mysqli_query($con,$sql);
$row =mysqli_fetch_array($result,MYSQLI_ASSOC);
$name =$row['name'];
$name1 =$row['email'];
$name2 =$row['mobile'];
$name3 =$row['gender'];
$name4 =$row['address'];
$name5 =$row['qul'];


if(isset($_POST['submit'])){


$name =$_POST['uname'];
$mail =$_POST['mail'];
$mbl =$_POST['mb'];
$gen =$_POST['gen'];
$ql =$_POST['qul'];
$addr =$_POST['addr'];

$sql ="update crud set name='$name', email='$mail', mobile='$mbl',gender='$gen',qul='$ql',address='$addr' where id=$id ";
$result = mysqli_query($con,$sql);

if($result){
    // echo "UPDATED";
    header('location:user1.php');
}
else{
    die(mysqli_error($con));
}

}


?>







<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form class="form-horizontal" action="#" method="post">
    <h2 class="text-center">REGISTRATION FORM</h2>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">USER NAME</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3"  name="uname" value="<?php echo $name ; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">EMAIL</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name="mail" value="<?php echo $name1 ; ?> ">
    </div>
  </div>""
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">MOBILE</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputPassword3" name="mb" value="<?php echo $name2 ; ?>" >
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label" name="gen">GENDER</label>
    <div class="col-sm-10">
        <?php if($name3=='male'){?>
      <input type="radio"  id="inputPassword3"  name="gen" value="male" checked>&nbsp;MALE&nbsp;&nbsp;
      <input type="radio"  id="inputPassword3"  name="gen" value="female" >&nbsp;FEMALE&nbsp;&nbsp;
      <input type="radio"  id="inputPassword3"  name="gen" value="others" >&nbsp;OTHERS&nbsp;&nbsp;
        <?php }else if($name3=='female'){?>
        <input type="radio"  id="inputPassword3"  name="gen" value="male">&nbsp;MALE&nbsp;&nbsp;
      <input type="radio"  id="inputPassword3"  name="gen" value="female"checked >&nbsp;FEMALE&nbsp;&nbsp;
      <input type="radio"  id="inputPassword3"  name="gen" value="others" >&nbsp;OTHERS&nbsp;&nbsp;
      <?php }else{?>
      <input type="radio"  id="inputPassword3"  name="gen" value="male" >&nbsp;MALE&nbsp;&nbsp;
      <input type="radio"  id="inputPassword3"  name="gen" value="female" >&nbsp;FEMALE&nbsp;&nbsp;
      <input type="radio"  id="inputPassword3"  name="gen" value="others" checked>&nbsp;OTHERS&nbsp;&nbsp;
      <?php }?>
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label" >QUALIFICATION</label>
    <div class="col-sm-10">
    <select class="form-control"name="qul">
  <option value="CHOOSE">CHOOSE</option>
  <option value="BTECH">BTECH</option>
  <option value="DEGREE">DEGREE</option>
  <option value="MTECH">MTECH</option>
  <option value="PG">PG</option>
</select>    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label" >ADDRESS</label>
    <div class="col-sm-10">
<textarea name="addr" id="" cols="80" rows="4"><?php echo $name4 ; ?></textarea>    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit"  class="btn btn-info"  name="submit">UPDATE</button>
    </div>
  </div>
</form>
</body>
</html>


