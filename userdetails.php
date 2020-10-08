<?php
session_start();
include("/includes/header.php");
include("connection.php");
?>

<div class="container-fluid" style="margin-top:40px;">  <!-- side bar start -->

  <div class="row">    <!-- row start -->

     <nav class="col-sm-2 bg-light sidebar py-5">    <!-- side bar ned -->

          <div class="sidebar-sticky">
              <ul class="nav flex-column">
              <li class="nav-item active"><a class="nav-link" href="dashboard.php"><i class="fa fa-dashboard">
                </i>Dashboard</a></li> 
                <li class="nav-item"><a class="nav-link" href="userdetails.php"><i class="fas fa-user">
                </i>User Details</a></li>
                <li class="nav-item"><a class="nav-link" href="volunteerdetails.php"><i class="fas fa-user">
                </i>Volunteer Availability</a></li>
                <li class="nav-item"><a class="nav-link" href="donatedfooddetails.php"><i class="fas fa-donate">
                </i>Donated Food Details</a></li>
                <li class="nav-item"><a class="nav-link" href="donatedmoneydetails.php"><i class="fas fa-donate">
                </i>Donated Money Details</a></li>
                <li class="nav-item"><a class="nav-link" href="requestedfooddetails.php"><i class="fas fa-utensils">
                </i>Requested Food Details</a></li>
                <li class="nav-item"><a class="nav-link" href="useraddressdetails.php"><i class="fas fa-address-card">
                </i>User Address Details</a></li>
                <li class="nav-item"><a class="nav-link" href="adminsetting.php"> <i class="fas fa-user-cog">
                &nbsp;</i>Admin Setting</a></li>

              </ul>
          </div>
               
      </nav>     <!-- side bar ned -->
      <div>   <!-- start user details area -->
                 <div class="col-sm-9 col-md-10 mt-5">
                   <?php
                    $sql="select * from user u inner join gender g on  u.GenderId=g.GenderId inner join role r on u.RoleId=r.RoleId";
                    $result=$conn->query($sql);
                    if($result->num_rows>0)
                     {
                        echo '<table class="table">';
                        echo '<thead>';
                        echo '<tr>';
                        echo '<th scope="col">UserId</th>';
                        echo '<th scope="col">FirstName</th>';
                        echo '<th scope="col">MiddleName</th>';
                        echo '<th scope="col">LastName</th>';
                        echo '<th scope="col">username</th>';
                        echo '<th scope="col">password</th>';
                        echo '<th scope="col">ContactNo</th>';
                        echo '<th scope="col">EmailId</th>';
                        echo '<th scope="col">Gender</th>';
                        echo '<th scope="col">Role</th>';
                        echo '</tr>';
                        echo '<tbody>';
                        while($row=$result->fetch_assoc())
                        {
                          echo '<tr>';
                          echo '<td>'.$row['Userid'].'</td>';
                          echo '<td>'.$row['FirstName'].'</td>';
                          echo '<td>'.$row['MiddleName'].'</td>';
                          echo '<td>'.$row['LastName'].'</td>';
                          echo '<td>'.$row['username'].'</td>';
                          echo '<td>'.$row['password'].'</td>';
                          echo '<td>'.$row['ContactNo'].'</td>';
                          echo '<td>'.$row['Email'].'</td>';
                          echo '<td>'.$row['Gender'].'</td>';
                          echo '<td>'.$row['RoleName'].'</td>';
                          echo '</tr>';
                        }
                        echo '</tbody>';
                        echo '</thead>';
                        echo '</table>';
                     }
                    
                   ?>
                  

                </div>   <!-- end user details area -->
      
  </div>      <!-- row end -->
  
</div>   <!-- side bar end -->



<?php
// include("/includes/slider.php");
include("/includes/footer.php");