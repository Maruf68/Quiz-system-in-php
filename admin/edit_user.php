<?php

include "../connection.php";
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register Now</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <link rel="stylesheet" href="../css1/bootstrap.min.css">
    <link rel="stylesheet" href="../css1/font-awesome.min.css">
    <link rel="stylesheet" href="../css1/owl.carousel.css">
    <link rel="stylesheet" href="../css1/owl.theme.css">
    <link rel="stylesheet" href="../css1/owl.transitions.css">
    <link rel="stylesheet" href="../css1/animate.css">
    <link rel="stylesheet" href="../css1/normalize.css">
    <link rel="stylesheet" href="../css1/main.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css1/responsive.css">
    <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

<?php
$id=$_GET['updateid'];

$sql="select * from `registration` where id=$id";
$result= mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($result);
$firstname=$row['firstname'];

$username=$row['username'];


$lastName=$row['lastname'];

$password= $row['password'];


$email= $row['email'];
$contact= $row['contact'];
    


if (isset($_POST["submit2"])) {


 


    $firstname = $_POST['firstname'];
    $lastName=$_POST['lastName'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];


   

    $sql="update `registration` set id='$id',firstname='$firstname',lastname='$lastName', username='$username', password='$password' , email='$email' , contact='$contact'     where id=$id";
    $result= mysqli_query($link,$sql);

    if($result){
       
        header("location:show_user.php");


    }
    else{
        die(mysqli_error($con));
    }



}

?>


















<div class="error-pagewrap">
    <div class="error-page-int">
        <div class="text-center custom-login">
            <h3>Register Now</h3>

        </div>
        <div class="content-error">
            <div class="hpanel">
                <div class="panel-body">
                    <form action="" name="form2" method="post">
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label>FirstName</label>
                                <input type="text" name="firstname" class="form-control" value=<?php echo "$firstname" ?> required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>LastName</label>
                                <input type="text" name="lastame" class="form-control" value=<?php echo "$lastName" ?> required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" value=<?php echo "$username" ?> required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" value=<?php echo "$password" ?> required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" value=<?php echo "$email" ?>  required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Contact</label>
                                <input type="text" name="contact" class="form-control" value=<?php echo "$contact" ?> required>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit2" class="btn btn-success loginbtn">Update</button><br>
                          
                        </div>

                        <div class="alert alert-success" id="success" style="margin-top: 10px; display: none">
                            <strong>Success!</strong> Account Registration successfully.
                        </div>

                        <div class="alert alert-danger" id="failure" style="margin-top: 10px; display: none">
                            <strong>Already Exist!</strong> This Username is Already Exist
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>





<script src="../js/vendor/jquery-1.12.4.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/wow.min.js"></script>
<script src="../js/jquery-price-slider.js"></script>
<script src="../js/jquery.meanmenu.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/jquery.sticky.js"></script>
<script src="../js/jquery.scrollUp.min.js"></script>
<script src="../js/plugins.js"></script>
<script src="../js/main.js"></script>

</body>

</html>