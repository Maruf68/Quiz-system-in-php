<?php
                                    include "header.php";
                                    include "../connection.php";
                                    $id=$_GET["id"];
                                    $exam_category="";
                                    $sql=mysqli_query($link,"select * from `exam_category` where id=$id");
                                    while($row=mysqli_fetch_array($sql))
                                    {
                                        $exam_category=$row["category"];

                                    }
                                    ?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Add question inside <?php echo "<font color='red'>" . $exam_category . "</font>" ;?></h1>
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


                        <div class="col-lg-6">
                            <form name="from1" action="" method="post" enctype="multipart/form-data">
                                <div class="card">
                                    <div class="card-header"><strong>Add new questions with text</strong>
                                        <div class="card-body card-block">

                                            <div class="form-group"><label for="company" class=" form-control-label">Add
                                                    Question</label><input type="text" placeholder="Add Question"
                                                    class="form-control" name="question"></div>

                                            <div class="form-group"><label for="company" class=" form-control-label">Add
                                                    Option 1</label><input type="text" placeholder="Add option1"
                                                    class="form-control" name="opt1"></div>

                                            <div class="form-group"><label for="company" class=" form-control-label">Add
                                                    Option 2</label><input type="text" placeholder="Add option2"
                                                    class="form-control" name="opt2"></div>

                                            <div class="form-group"><label for="company" class=" form-control-label">Add
                                                    Option 3</label><input type="text" placeholder="Add option3"
                                                    class="form-control" name="opt3"></div>

                                            <div class="form-group"><label for="company" class=" form-control-label">Add
                                                    Option 4</label><input type="text" placeholder="Add option4"
                                                    class="form-control" name="opt4"></div>

                                            <div class="form-group"><label for="company" class=" form-control-label">Add
                                                    Answer</label><input type="text" placeholder="Add answer"
                                                    class="form-control" name="answer"></div>






                                            <div class="form-group">
                                                <input type="submit" name="submit1" value="Add question"
                                                    class="btn btn-success">


                                            </div>
                                        </div>
                                    </div>

                                </div>


                        </div>



                        <div class="col-lg-6">

                            <div class="card">
                                <div class="card-header"><strong>Add new questions with images</strong>
                                    <div class="card-body card-block">

                                        <div class="form-group"><label for="company" class=" form-control-label">Add
                                                Question</label><input type="text" placeholder="Add Question"
                                                class="form-control" name="fquestion"></div>

                                        <div class="form-group"><label for="company" class=" form-control-label">Add
                                                Option 1</label><input type="file" class="form-control"
                                                style="padding-bottom:35px" name="fopt1"></div>

                                        <div class="form-group"><label for="company" class=" form-control-label">Add
                                                Option 2</label><input type="file" class="form-control"
                                                style="padding-bottom:35px" name="fopt2"></div>

                                        <div class="form-group"><label for="company" class=" form-control-label">Add
                                                Option 3</label><input type="file" class="form-control"
                                                style="padding-bottom:35px" name="fopt3"></div>

                                        <div class="form-group"><label for="company" class=" form-control-label">Add
                                                Option 4</label><input type="file" class="form-control"
                                                style="padding-bottom:35px" name="fopt4"></div>

                                        <div class="form-group"><label for="company" class=" form-control-label">Add
                                                Answer</label><input type="file" class="form-control" name="fanswer">
                                        </div>






                                        <div class="form-group">
                                            <input type="submit" name="submit2" value="Add question"
                                                class="btn btn-success">


                                        </div>
                                    </div>
                                </div>

                            </div>
                            </form>

                        </div>






                    </div>

                </div>

            </div>
            <!--/.col-->
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">                      
                        <table class="table table-bordered">
                            <tr>
                                     <th>No</th>
                                     <th>Questions</th>
                                     <th>opt1</th>
                                     <th>opt2</th>
                                     <th>opt3</th>
                                     <th>opt4</th>
                                     <th>edit</th>
                                     <th>delete</th>
                                     

                            </tr>

                            <?php
                         $sql=mysqli_query($link,"select * from `questions` where category='$exam_category' order by question_no asc");
                           while($row=mysqli_fetch_array($sql))

                           {
                               echo "<tr>";
                               echo "<td>"; echo $row["question_no"];  echo "</td>";
                               echo "<td>"; echo $row["question"]; echo "</td>";
                               echo "<td>"; 

                               if(strpos($row["opt1"],'opt_images/')!==false)
                               {
                                   ?>
                                  <img src="<?php echo $row["opt1"]; ?>" height="50" width="50"> 

                                   <?php
                               }
                                else{
                                    echo $row["opt1"];
                                }


                               echo "</td>";
                               echo "<td>"; 

                               if(strpos($row["opt2"],'opt_images/')!==false)
                               {
                                   ?>
                                  <img src="<?php echo $row["opt2"]; ?>" height="50" width="50"> 

                                   <?php
                               }
                                else{
                                    echo $row["opt2"];
                                }


                               echo "</td>";
                               echo "<td>"; 

                               if(strpos($row["opt3"],'opt_images/')!==false)
                               {
                                   ?>
                                  <img src="<?php echo $row["opt3"]; ?>" height="50" width="50"> 

                                   <?php
                               }
                                else{
                                    echo $row["opt3"];
                                }


                               echo "</td>";
                               echo "<td>"; 

                               if(strpos($row["opt4"],'opt_images/')!==false)
                               {
                                   ?>
                                  <img src="<?php echo $row["opt4"]; ?>" height="50" width="50"> 

                                   <?php
                               }
                                else{
                                    echo $row["opt4"];
                                }


                               echo "</td>";

                               echo "</tr>";
                                      
                           }


                      ?> 


                        </table>

                    </div>
                </div>
            </div>
        </div>


    </div>

</div>
<!-- .animated -->
<!-- .content -->


<?php
if(isset($_POST['submit1'])){
$loop =0;
  $count=0;
  $sql=mysqli_query($link,"select * from `questions` where category='$exam_category' order by id asc") or die(mysqli_error($link));

  $count=mysqli_num_rows($sql);

  if($count==0){

  }

else{
     while($row=mysqli_fetch_array($sql))
     {
         $loop=$loop+1;
         mysqli_query($link,"update `questions` set question_no='$loop' where id=$row[id]");
     }

    }

     $loop=$loop+1;
     mysqli_query($link,"INSERT INTO `questions`(`id`, `question_no`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `answer`, `category`) VALUES (NULL,'$loop','$_POST[question]','$_POST[opt1]','$_POST[opt2]','$_POST[opt3]','$_POST[opt4]','$_POST[answer]','$exam_category')") or die(mysqli_error($link));
     ?>
<script type="text/javascript">
alert("question added successfully");
</script>

<?php

}




?>




<?php
if(isset($_POST['submit2'])){
$loop =0;
  $count=0;
  $sql=mysqli_query($link,"select * from `questions` where category='$exam_category' order by id asc") or die(mysqli_error($link));

  $count=mysqli_num_rows($sql);

  if($count==0){

  }

else{
     while($row=mysqli_fetch_array($sql))
     {
         $loop=$loop+1;
         mysqli_query($link,"update `questions` set question_no='$loop' where id=$row[id]");
     }

    }

     $loop=$loop+1;

       $tm=md5(time());
       $fnm1=$_FILES["fopt1"]["name"];
       $dst1="./opt_images/".$fnm1;  //uploading image
       $dst_db1="opt_images/".$fnm1;  //downloading image
       move_uploaded_file($_Files["fopt1"]["tmp_name"],$dst1);



       $tm=md5(time());
       $fnm2=$_FILES["fopt2"]["name"];
       $dst2="./opt_images/".$fnm2; 
       $dst_db2="opt_images/".$fnm2;
       move_uploaded_file($_Files["fopt2"]["tmp_name"],$dst2);


       
       $tm=md5(time());
       $fnm3=$_FILES["fopt3"]["name"];
       $dst3="./opt_images/".$fnm3; 
       $dst_db3="opt_images/".$fnm3;
       move_uploaded_file($_Files["fopt3"]["tmp_name"],$dst3);

       $tm=md5(time());
       $fnm4=$_FILES["fopt4"]["name"];
       $dst4="./opt_images/".$fnm4; 
       $dst_db4="opt_images/".$fnm4;
       move_uploaded_file($_Files["fopt4"]["tmp_name"],$dst4);


       $tm=md5(time());
       $fnm5=$_FILES["fanswer"]["name"];
       $dst5="./opt_images/".$fnm5; 
       $dst_db5="opt_images/".$fnm5;
       move_uploaded_file($_Files["fanswer"]["tmp_name"],$dst5);

       mysqli_query($link,"INSERT INTO `questions`(`id`, `question_no`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `answer`, `category`) VALUES (NULL,'$loop','$_POST[fquestion]','$dst_db1','$dst_db2','$dst_db3','$dst_db4','$dst_db5','$exam_category')") or die(mysqli_error($link));
      
       ?>
<script type="text/javascript">
alert("question added successfully");
</script>

<?php


}




?>




<?php
                                    include "footer.php";
                                    ?>