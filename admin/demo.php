<?php
                                    include "header.php";
                                    include "../connection.php";
                                    ?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Add exam</h1>
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
                                <div class="card-header"><strong>Add exam</strong>
                                    <div class="card-body card-block">
                                        <div class="form-group"><label for="company" class=" form-control-label">New
                                                exam Category</label><input type="text" 
                                                placeholder="Add exam Category" class="form-control" name="examname"></div>
                                        <div class="form-group"><label for="vat" class=" form-control-label">Exam time
                                                in mintues</label><input type="text"  placeholder="Exam time in mintues"
                                                class="form-control" name="examtime"></div>

                                        <div class="form-group">
                                            <input type="submit" name="submit1" value="Add exam" class="btn btn-success">
                                          
                                            <div class="alert alert-success" id="error" style="margin-top:10px; display:none">
                            <strong>Added</strong> exam added successfully 
                        </div>

                           


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Exam Category</strong>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Exam Name</th>
                                            <th scope="col">Exam Time</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                  <?php
                                  $count=0;
                                  $sql=mysqli_query($link,"select * from `exam_category`   ");

                                  while($row=mysqli_fetch_array($sql)){
                                    $count=$count+1;
                                    ?>
                                         
                                        <tr>
                                            <th scope="row"><?php echo $count;  ?></th>
                                            <td><?php echo $row['category'];  ?></td>
                                            <td><?php echo $row['exam_time'];  ?></td>
                                            <td>Edit</td>
                                            <td><button class="btn btn-danger"><a href="delete.php?id=<?php echo $row["id"]; ?>" class="text-light"> Delete </a></td></button>
                                        </tr>

                                    
                                    <?php
                                  }


                                  ?>

                                     
                                    </tbody>
                                </table>
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
 mysqli_query($link,"insert into `exam_category` values(NULL,'$_POST[examname]','$_POST[examtime]')") or die(mysqli_error($link));

 ?>
<script type="text/javascript">

 alert("exam added successfully");
  window.location.href=window.location.href;


</script>




<?php
}

?>



<?php
                                    include "footer.php";
                                    ?>