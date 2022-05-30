<?php
include "../connection.php";

if(isset($_GET['id'])){   
$id=$_GET["id"];

$sql= "delete from `exam_category` where id=$id";

$result=mysqli_query($link,$sql);

if($result){
    header("location: demo.php");  
}

}

?>
