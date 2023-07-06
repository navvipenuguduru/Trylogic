<?php
include_once 'db.php';

if(isset($_GET['id'])){
    $num =$_GET['id'];

    $sql ="delete from crud where id=$num";

  

    if(mysqli_query($con,$sql)){
        echo "deleted successfully";

    }
    else{
        echo "failed to delete";
    }
}


?>