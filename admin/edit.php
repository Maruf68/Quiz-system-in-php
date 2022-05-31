<?php
                                    include "header.php";
                                    include "../connection.php";

   $id=$_GET['id'];                             
$sql=mysqli_query($link,"select * from `exam_category` where id=$id");
while($row=mysqli_fetch_array($sql))
{
$exam_category=$row["category"];
$exam_time=$row["exam_time"];

}

  ?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Edit exam</h1>
            </div>
        </div>
    </div>

</div>



<div class="content mt-3">
    <div class="animated fadeIn">


        <div class="row">
            <div class="col-lg-12">
                <div class="card">

<form name="form1" action="" method="post"> 

                    <div class="card-body">

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header"><strong>Edit exam</strong>
                                    <div class="card-body card-block">
                                        <div class="form-group"><label for="company" class=" form-control-label">New
                                                exam Category</label><input type="text" 
                                                placeholder="Add exam Category" class="form-control" name="examname" value="<?php echo $exam_category ?>" ></div>
                                        <div class="form-group"><label for="vat" class=" form-control-label">Exam time
                                                in mintues</label><input type="text"  placeholder="Exam time in mintues"
                                                class="form-control" name="examtime" value="<?php echo $exam_time ?>" ></div>

                                        <div class="form-group">
                                            <input type="submit" name="submit1" value="Update exam" class="btn btn-success">
                                          
                        
     
                           


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                   


                    </div>
                    </form>
                </div>

            </div>
            <!--/.col-->
        </div>


    </div>

</div>
<!-- .animated -->
<!-- .content -->


<?php
if(isset($_POST['submit1'])){
 mysqli_query($link,"update `exam_category` set category='$_POST[examname]',exam_time='$_POST[examtime]' where id=$id  ") or die(mysqli_error($link));

?>

<script type="text/javascript">
    window.location="demo.php";
</script>

<?php
 

}

?>




<?php
                                    include "footer.php";
                                    ?>