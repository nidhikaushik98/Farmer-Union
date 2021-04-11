<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>          

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
          //echo "$row[id]";
          if ($n!=1){
          header('location : resume.php');
          }
        ?>
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
<div class="container-fluid">
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
      <h2>Iteams</h2>
      <div class="row">
        <div class="col-sm-6">
          <button class="btn btn-success" style="width: 100%;" data-toggle="modal" data-target="#Buy"> <strong>Buy iteams</strong>
          </button>

          <!-- The Modal -->
          <div class="modal fade" id="Buy">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Market</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
          <!-- Modal body -->
          <div class="modal-body">
          ghgasdh
          </div>
        
          <!-- Modal footer -->
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <button class="btn btn-danger" style="width: 100%;" data-toggle="modal" data-target="#myModal"><strong>Sell iteams</strong></button>
      </div>
      </div>
      <br><br><br>

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
                <form action="" method="GET">
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
                      <input type="text" name="farmer" placeholder="Enter Farmer Name" class="form-control" required>
                    </div>


                    <div class="form-group">
                      <label>Quality Of Crops</label>
                      <input type="text" name="quality" placeholder="Enter quality of Crops" class="form-control" required>
                    </div>

                    <div>
                      <label> Phone No : </label>
                      <input type="number" name="pno" placeholder="Enter Your number" class="form-control" required>
                    </div>

                    <div class="form-group">
                      <label>Address of Store : </label>
                      <textarea class="form-control" name="saddress" rows="2" required></textarea>
                    </div>
                    
                  </div>
                  
              </div>
              <button  type="Submit" class="btn btn-success" style="width: 100%">Submit your Crops</button><br><br>
              <button type="reset" class="btn btn-danger" style="width: 100%">Reset Infromation</button>

              <?php

              $idx = $_GET['i'];
              $farmer = $_GET['farmer'];
              $cname = $_GET['cname'];
              $wp = $_GET['wp'];
              $rp = $_GET['rp'];
              $tq = $_GET['totalqty'];
              $quality = $_GET['quality'];
              $pno = $_GET['pno'];
              $saddress = $_GET['saddress'];


              if($_GET['submit']){ 
              $q ="insert into selliteam (fid,cropsname,rprice, wprice,totalqty,farmer,quality,phone,saddress) 
              values('$idx','$cname','$rp','$wp','$tq','$farmer','$quality','$pno','$saddress')";
              }
              $d = mysqli_query($conn,$q);
               

              if($d){
                echo "insert" ;
                echo "$idx";
                 
              }else{
                mysqli_error($conn);

              }
              ?>
                
   

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
     <h2>Your Iteams Details</h2><hr>


      </div>
    ------------------
    </div>
  

<footer class="container-fluid">
  <p>Footer Text</p>
</footer>

</body>
</html>
