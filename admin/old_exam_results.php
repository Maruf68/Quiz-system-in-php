<?php
                                    include "header.php";
                                    include "../connection.php";
                                    ?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Exam results</h1>
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

                       


                    
<center>
<h1>Old exam results</h1>
</center>




   <?php
         $count=0;
   $sql=mysqli_query($link,"select * from exam_results order by id desc");
   $count=mysqli_num_rows($sql);

   if($count==0){
       ?>
       <center>
      <h1>No results found</h1>
          </center>

       <?php

   }

else{
    echo "<table class='table table-bordered'>";
    echo "<tr style='background-color: #006df0; color:white'>";
    echo "<th>"; echo "username"; echo "</th>";
    echo "<th>"; echo "exam type"; echo "</th>";
    echo "<th>"; echo "total question";  echo "</th>";
    echo "<th>"; echo "correct answer";  echo "</th>";
    echo "<th>"; echo "wrong answer";  echo "</th>";
    echo "<th>"; echo "exam time"; echo "</th>";
    echo "</tr>";

    while($row=mysqli_fetch_array($sql))
    {
        echo "<tr>";
        echo "<td>"; echo $row["username"]; echo "</td>";
        echo "<td>"; echo $row["exam_type"]; echo "</td>";
        echo "<td>"; echo $row["total_question"];  echo "</td>";
        echo "<td>"; echo $row["correct_answer"];  echo "</td>";
        echo "<td>"; echo $row["wrong_answer"];  echo "</td>";
        echo "<td>"; echo $row["exam_time"]; echo "</td>";
       
        echo "</tr>";
    }


    echo "</table>";
}



   ?>

                        
                  
                  


                    </div>
                  
                </div>

            </div>
            <!--/.col-->
        </div>


    </div>

</div>
<!-- .animated -->
<!-- .content -->







<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">

                        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12 text-right">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>













<?php
                                    include "footer.php";
                                    ?>