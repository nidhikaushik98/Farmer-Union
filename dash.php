          <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "farmer";

          $conn = mysqli_connect($servername,$username,$password,$dbname);

          if($conn){

          }
          else{
            die("connection failed because ".mysqli_connect_error());
          }
          error_reporting(1);

          $id = $_GET['id'];
          $pass= $_GET['pass'];

          $q="select * from newuser where phone='$id' AND password='$pass' ";
          
          $result=mysqli_query($conn,$q);
          $n=mysqli_num_rows($result);
          $row = mysqli_fetch_array($result);
          $i=$row[id];
          //echo "$row[id]";
          if ($n!=1){
          header('location : resume.php');
          }
        ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />

        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><strong >Sharecropper</strong>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar"></div>
  </div>
</nav>
<div class="container-fluid" id="home">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h3 style="text-align: center;"><b> <?php echo "$row[fname] $row[lname]"; ?></b></h3>
      <center><img src="a1.jpg" class="rounded-circle"  alt="Cinque Terre" width="150" height="150"></center><br><br>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">DashBoard</a></li>
        <li><a href="#section2">Notifications</a></li>
        <li><a href="#section3">Order History</a></li>
        <li><a href="#section3" data-toggle="model" data-target="#bi">Basic info</a></li>
      </ul><br>

      <button class="btn btn-primary" style="text-align: left; width: 100%;">
        <center>Logout <span class="glyphicon glyphicon-log-in"></span></center>
      </button>
    </div>

    <div class="col-sm-9">
      <h1 style="text-align: center;"><strong>Welcome <?php echo "$row[fname] $row[lname]";?> </strong></h1>
      <hr>
      <h2><center>Sell Your Iteams</center></h2>
      <hr>
      <div class="row">

        <div class="col-sm-3">
        <button class="btn btn-primary" style="width: 100%;padding: 30px;" href="#home"><strong>Refersh</strong></button>
        </div>
         
        <div class="col-sm-3">
        <button class="btn btn-danger" style="width: 100%;padding: 30px;" href="#market" ><strong>Market</strong></button>
        </div>

        <div class="col-sm-3">
        <button class="btn btn-warning" style="width: 100%;padding: 30px;" ><strong>Update Your iteam</strong></button>
        </div>
         
        <div class="col-sm-3">
        <button class="btn btn-success" style="width: 100%;padding: 15px;" data-toggle="modal" data-target="#myModal"><strong style="font-size: 24px;">Sell Your iteams</strong></button>
        </div>

      </div><hr>
      <br><br>


      

      <!-- Button to Open the Modal -->
      <!-- The Modal -->
        <div class="modal fade" id="myModal">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
      
              <!-- Modal Header -->
              <div class="modal-header">
              <h3 class="modal-title" style="text-align: center;"><span class="text text-primary"><b>Sell Iteams Information</b></span></h3>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
        
              <!-- Modal body -->
              <div class="modal-body">
                <form action="regError.php" method="GET">
                <div class="row">
                  <div class="col-sm-6">

                    <div class="form-group">
                      <label>ID: </label>
                      <input type="text" class="form-control" name="i" value="<?php echo "$row[id]"; ?>" >
                    </div>

                    <div class="form-group">
                      <label>Crops Name : </label>
                      <input type="text" class="form-control"name="cname" placeholder="Enter Your Crops Name" required>
                    </div>

                    <div class="form-group">
                      <label>Wholesale price ( Per 10KG ): </label>
                      <input type="number" class="form-control" name="wp" placeholder="Enter Wholesale price " required>
                    </div>

                    <div class="form-group">
                      <label>Retails price ( Per 10KG )</label>
                      <input type="number" name="rp" placeholder="Enter Retails Price" class="form-control" required>
                    </div>

                    <div class="form-group">
                      <label>Total Availble Quatity ( KG ): </label>
                      <input type="number" name="totalqty" placeholder="Total Quatity" class="form-control" required>
                    </div>
                    
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Farmer's Name : </label>
                      <input type="text" name="farmer" placeholder="Enter Farmer Name" class="form-control" value="<?php echo "$row[fname] $row[lname]"; ?>">
                    </div>


                    <div class="form-group">
                      <label>Quality Of Crops</label>
                      <input type="text" name="quality" placeholder="Enter quality of Crops" class="form-control" required>
                    </div>

                    <div>
                      <label> Phone No : </label>
                      <input type="number" name="pno" placeholder="Enter Your number" class="form-control" value="<?php echo "$row[phone]"; ?>">
                    </div>

                    <div class="form-group">
                      <label>Address of Store : </label>
                      <textarea class="form-control" name="saddress" rows="3" required></textarea>
                    </div>
                    
                  </div>
                  
              </div>
              <button  type="submit" name ="sub" class="btn btn-success" style="width: 100%">Submit your Crops</button><br><br>
              <button type="reset" class="btn btn-danger" style="width: 100%">Reset Infromation</button>

              
        
                
   

              </form>

              </div>
        
              <!-- Modal footer -->
              <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
       </div>
       
      <br><br>
      <hr>
      <hr>
      <h2 id="market"><center>Global Market</center></h2><hr>

      <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
 
 
// Attempt select query execution
$s = " SELECT * FROM selliteam";
$row = mysqli_fetch_array($result);
if($result = mysqli_query($conn, $s)){
    if(mysqli_num_rows($result) > 0){ ?>
         <table class="table" style="width: 75%">
                <thead class="mr-auto text-primary">
                  <tr>
                    <th >CropID</th>
                    <th >FarmerID</th>
                    <th>Crops Name</th>
                    <th>Wholesale Price</th>
                    <th>Retails Price</th>
                    <th>Total QTY</th>
                    <th>Quality</th>
                    <th>Update Status</th>
                    <th>Status</th>

                  </tr>
                </thead>
                <tbody>
            <?php
            $x=123456789+$row[ids];
        while($row = mysqli_fetch_array($result)){ ?>
            <tr>
               <td><?php echo "$row[ids]"; ?></td>
              <td><?php echo "$row[fid]"; ?></td>
              <td><?php echo "$row[cropsname]"; ?></td>
              <td><?php echo "$row[wprice]"; ?></td>
              <td><?php echo "$row[rprice]"; ?></td>
              <td><?php echo "$row[totalqty]"; ?></td>
              <td><?php echo "$row[quality]"; ?></td>
              <?php if($i==$row[fid]) {?>
              <td>

                <form method="post"> 
                <input type="submit" name="<?php echo "$x"; ?>" class="btn btn-primary" value="Update" data-toggle="modal" data-target="#<?php echo "$x"; ?>"/> 
                <input type="submit" name="<?php echo "$row[ids]"; ?>" class="btn btn-danger" value="Delete" /> 
                </form>

              </td>
              <td> <span type="button" class="btn btn-warning"  disabled>Contact Farmer</span></td>
            <?php  } 
            else {?>
              <td> <span type="button"  class="btn btn-info" disabled >Update</span>  <span type="button" class="btn btn-danger" disabled>Delete</span>
              </td>
              <td> <span type="button" class="btn btn-warning" data-toggle="modal" data-target="#<?php echo "$row[fid]"; ?>">Contact Farmer</span></td>
            <?php } ?>
              
            </tr>



            <?php
            if(array_key_exists($row[ids], $_POST)) { 

              $s = "DELETE FROM selliteam WHERE ids='$row[ids]'";
              if(mysqli_query($conn, $s)){ ?>
                  <span class="alert alert-danger">Records were deleted <b>successfully</b></span><hr>
              <?php } else{
                  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
              }
            
             
            }else if(array_key_exists($x, $_POST)) { 
              $q = " SELECT * FROM selliteam where ids=$x-123456789";
              $s = mysqli_fetch_array($result);
              if($result = mysqli_query($conn, $q)){
                  if(mysqli_num_rows($result) > 0){ ?>




                    <!-- The Modal -->
        <div class="modal fade" id="<?php echo "$x"; ?>"
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
      
              <!-- Modal Header -->
              <div class="modal-header">
              <h3 class="modal-title" style="text-align: center;"><span class="text text-primary"><b>Sell Iteams Information</b></span></h3>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
        
              <!-- Modal body -->
              <div class="modal-body">
                <form action="regError.php method="GET">
                <div class="row">
                  <div class="col-sm-6">

                    <div class="form-group">
                      <label>ID: </label>
                      <input type="text" class="form-control" name="i" value="<?php echo "$row[id]"; ?>" >
                    </div>

                    <div class="form-group">
                      <label>Crops Name : </label>
                      <input type="text" class="form-control"name="cname" placeholder="Enter Your Crops Name" required>
                    </div>

                    <div class="form-group">
                      <label>Wholesale price ( Per 10KG ): </label>
                      <input type="number" class="form-control" name="wp" placeholder="Enter Wholesale price " required>
                    </div>

                    <div class="form-group">
                      <label>Retails price ( Per 10KG )</label>
                      <input type="number" name="rp" placeholder="Enter Retails Price" class="form-control" required>
                    </div>

                    <div class="form-group">
                      <label>Total Availble Quatity ( KG ): </label>
                      <input type="number" name="totalqty" placeholder="Total Quatity" class="form-control" required>
                    </div>
                    
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Farmer's Name : </label>
                      <input type="text" name="farmer" placeholder="Enter Farmer Name" class="form-control" value="<?php echo "$row[fname] $row[lname]"; ?>">
                    </div>


                    <div class="form-group">
                      <label>Quality Of Crops</label>
                      <input type="text" name="quality" placeholder="Enter quality of Crops" class="form-control" required>
                    </div>

                    <div>
                      <label> Phone No : </label>
                      <input type="number" name="pno" placeholder="Enter Your number" class="form-control" value="<?php echo "$row[phone]"; ?>">
                    </div>

                    <div class="form-group">
                      <label>Address of Store : </label>
                      <textarea class="form-control" name="saddress" rows="3" required></textarea>
                    </div>
                    
                  </div>
                  
              </div>
              <button  type="submit" name ="sub" class="btn btn-success" style="width: 100%">Submit your Crops</button><br><br>
              <button type="reset" class="btn btn-danger" style="width: 100%">Reset Infromation</button>

              
        
                
   

              </form>

              </div>
        
              <!-- Modal footer -->
              <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
       </div>







                <?php  }
              }else{
              echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
                   
        }  
              ?>

             




            <!-- The Modal -->
            <div class="modal fade" id="<?php echo "$row[fid]"; ?>">
                  <div class="modal-dialog model-sm">
                    <div class="modal-content">
                    
                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h3 class="modal-title"><span class="text text-primary"><strong style="text-align: center;">Contact The Farmer</strong></span></h3>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      
                      <!-- Modal body -->
                      <div class="modal-body" style="text-align: center;">
                        <h4>Name -: <?php echo "$row[farmer]"; ?></h4><hr>
                        <h4> Phone No -: <?php echo "$row[phone]"; ?></h4><hr>
                        <h4>Store Address -: <?php echo "$row[saddress]"; ?></h4>
                        
                      </div>
                      
                      <!-- Modal footer -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      </div>
                      
                    </div>
                  </div>
            </div>
                
              

               
       <?php 
     } ?>
        </tbody>
      </table>
      <?php

        mysqli_free_result($result);
    } else{ ?>
      <h2 class="alert alert-danger" style="text-align: center;"><strong> Sorry ! </strong> Record is Not Aailable</h2>

         
    <?php }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
 
?>



              <hr>
              


      </div>
    </div>
  </div>
</div>

<footer class="container-fluid">
  <p>Footer Text</p>
</footer>

</body>
</html>
