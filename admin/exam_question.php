<?php
                                    include "header.php";
                                    include "../connection.php";
                                    ?>

<div class="breadcrumbs">
    <div class="col-sm-12">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Select exam categories for questions</h1>
            </div>
        </div>
    </div>

</div>



<div class="content mt-3">
    <div class="animated fadeIn">


        <div class="row">
            <div class="col-lg-12">
                <div class="card">



                    <div class="card-body">

                    <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Exam Name</th>
                                            <th scope="col">Exam Time</th>
                                            <th scope="col">Select</th>
                                       
                                            
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
                                            <td><a href="add_edit_question.php?id=<?php echo $row["id"]; ?>"> Select </a></td>

                                            
                                        </tr>

                                    
                                    <?php
                                  }


                                  ?>

                                     
                                    </tbody>
                                </table>
                        
                  
                  


                    </div>
                
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