

<?php
include_once 'db.php';

if(isset($_GET['id'])){
    $num =$_GET['id'];

$sql ="select * from crud where id=$num";

if($stmt =mysqli_prepare($con,$sql)){
    if(mysqli_stmt_execute($stmt)){
        $result = mysqli_stmt_get_result($stmt);
        if(mysqli_num_rows($result)==1){
           $row= mysqli_fetch_array($result,MYSQLI_ASSOC);
           $name =$row['name'];
           $mail =$row['email'];
           $mobile =$row['mobile'];
           $gen =$row['gender'];
           $addr =$row['address'];
           $qul =$row['qul'];

        }
    }
}

}




?>











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
    <table class="table">
        <tr>
            <td>USER NAMES</td>
            <td>DETAILS</td>
        </tr>
        <tr> 
            <td>NAME</td>
        <td><?php echo $name ; ?></td>
    </tr>
       
    <tr> 
            <td>email</td>
        <td><?php echo  $mail ; ?></td>
    </tr>
    <tr> 
            <td>mobile</td>
        <td><?php echo $mobile ; ?></td>
    </tr>
    <tr> 
            <td>gender</td>
        <td><?php echo $gen ; ?></td>
    </tr>
    <tr> 
            <td>addr</td>
        <td><?php echo $addr ; ?></td>
    </tr>
    <tr> 
            <td>qul</td>
        <td><?php echo $qul ; ?></td>
    </tr>
    </table>
</body>
</html>