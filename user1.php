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
    <div class="container">
        <button class="btn btn-info mt-5
        " ><a href="user.php">ADD USER</a></button>

    </div>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">USER NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">MOBILE</th>
      <th scope="col">GENDER</th>
      <th scope="col">ADDRESS</th>
      <th scope="col">QUALIFICATION</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>


<?php

include_once 'db.php';

$sql ="select * from crud";
$result =mysqli_query($con,$sql);

if($result){
    while($row=mysqli_fetch_array($result)){
        echo '
        
        
 <tr>
    <th>'.$row['id'].'</th>
    <td>'.$row['name'].'</td>
    <td>'.$row['email'].'</td>
    <td>'.$row['mobile'].'</td>
    <td>'.$row['gender'].'</td>
    <td>'.$row['address'].'</td>
    <td>'.$row['qul'].'</td>
    <td><a href="user2.php?id='.$row['id'].'">VIEW</a></td>
    <td><a href="user3.php?id='.$row['id'].'">DELETE</a></td>
    <td><a href="user4.php?id='.$row['id'].'">UPDATE</a></td>

  </tr> ';
    }
}

?>

  
  </tbody>
</table>

</body>
</html>