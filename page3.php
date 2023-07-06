

<?php
include_once('database.php');
if(isset($_GET['id'])){
    $num =$_GET['id'];


    $sql="select * from registration where id=$num";

    if($stmt =mysqli_prepare($conn,$sql)){
        if(mysqli_stmt_execute($stmt)){
            $result =mysqli_stmt_get_result($stmt);
            if(mysqli_num_rows($result)==1){
                $row =mysqli_fetch_array($result,MYSQLI_ASSOC);
                $name =$row['name'];
                $aname =$row['email'];
                $bname =$row['mobile'];
                $cname =$row['qualification'];
                $dname =$row['gender'];
                $name =$row['address'];

            }
        }
    }
}

?>




















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>