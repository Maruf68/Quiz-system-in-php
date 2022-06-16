<?php

include '../connection.php';
if(isset($_GET['deleteid'])){

    $id=$_GET['deleteid'];

    $sql="delete from `registration` where id=$id ";

    $result=mysqli_query($link,$sql);

    if($result){

        header("location:show_user.php");

    }
     else{
        die(mysqli_error($con));
     }

}


?>