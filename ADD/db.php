<?php
$servename ="localhost";
$username ="root";
$password ="";
$database ="naveen";

$con = mysqli_connect($servename,$username,$password,$database);

if(!$con){
    die("failed".mysqli_error($con));
}

?>