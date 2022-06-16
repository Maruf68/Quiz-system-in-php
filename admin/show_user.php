<?php
                                    include "header.php";
                                    include "../connection.php";
                                    ?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Users List</h1>
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

                    <table class="table table-striped">
             <thead>
                 <tr>
                     <th scope="col">Id </th>
                     <th scope="col">Name</th>
                     <th scope="col">Lastname</th>
                     <th scope="col">Mobile</th>
                     <th scope="col">Password</th>
                     <th scope="col">Email</th>
                     <th scope="col">Contact</th>
                     <th scope="col">Operation</th>
                 </tr>
             </thead>
             <tbody>

                 <?php


 $sql =" Select * from `registration`";
 $result=mysqli_query($link,$sql);
if($result){
      while($row=mysqli_fetch_assoc($result)){
          $id=$row['id'];
          $firstname=$row['firstname'];
          $lastname=$row['lastname'];
          $username=$row['username'];
          $password=$row['password'];
          $email=$row['email'];
          $contact=$row['contact'];


          echo '<tr>
          <th scope="row">'.$id.' </th>
          <td>'.$firstname.'</td>
          <td>'.$lastname.'</td>
          <td>'.$username.'</td>
          <td>'.$password.'</td>
          <td>'.$email.'</td>
          <td>'.$contact.'</td>
          <td>
          <button class="btn btn-primary">
          <a href="edit_user.php?updateid='.$id.'" class="text-light">Update</a>
          </button>
   
          <button class="btn btn-danger"><a href="delete_user.php?deleteid='.$id.'" class="text-light" >Delete</a>
          </button>
       </td>
        </tr>';


   }
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