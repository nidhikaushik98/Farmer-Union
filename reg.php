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
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
  <title>New Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    a {
      opacity: 1;
      filter: alpha(opacity=100); 
      }
    a:hover {
      opacity: .8;
      filter: alpha(opacity=50); 
    }
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
      
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
      
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
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
      .row.content {height:auto;} 
      }
  </style>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#"><strong >Sharecropper</strong></a>
      </div>

      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="resume.html#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-search"></span> Search</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid text-center">
    <div class="row content">
      <div class="col-sm-2 sidenav">
        <h4 class="well well-sm" style="">Weather Report</h4>
        <a href="https://www.windy.com/?28.650,77.237,5">
          <img src="m1.gif" width="180" height="120">
        </a><br><br>
        <h4 class="well well-sm">Farmers Tools</h4>
        <a href="https://www.youtube.com/channel/UCKWp94n8lgYapEzN8-mqZmA">
          <img src="m2.gif" width="180" height="120">
        </a><br><br>
        <h4 class="well well-sm">Tips</h4>
        <a href="https://blog.khetigaadi.com/tag/blogs-on-agriculture-in-hindi/">
          <img src="m3.gif" width="180" height="120">
        </a>
      </div>

      <div class="col-sm-8 text-left">
        <h1 class="well well-lg" style="text-align:center; "><span class="text text-primary"><b>Registration Form</b></span></h1>

        <form action="" method="GET">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label >First Name:</label>
                <input type="text" class="form-control" placeholder="Enter First Name-" name="fname" required>
              </div>

              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" name="password" required>
              </div>

            <div class="form-group">
              <label for="number">Phone Number</label>
              <input type="number" class="form-control" placeholder="Enter Phone No-" name="phone" required>
            </div>

            <div class="form-group">
              <label>Gender : </label>
              <select name="gender" class="form-control"  >
              <option selected>Select Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">Other</option>
              </select>
            </div>

            <div class="form-group">
              <label>Age:</label>
              <input type="Number" class="form-control" placeholder="Age" name="age" >
            </div>

          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label>Last Name:</label>
              <input type="text" class="form-control" placeholder="Enter Last Name" name="lname">
            </div>

            <div class="form-group">
              <label for="email" >Email:</label>
              <input type="text" class="form-control" placeholder="Enter Email" name="email">
            </div>

            <div class="form-group">
              <label >Pincode</label>
              <input type="Number" class="form-control" placeholder="Enter Pincode" name="pincode">
            </div>

            <div class="form-group">
              <label >Address:</label>
              <input type="text" class="form-control" placeholder="Enter Your Address" name="address"></textarea>
            </div>

            <div class="form-group">
              <label>Photo : </label>
              <input type="file" name="photo" class="form-control">
            </div>
          </div>
        </div>
        <button type="submit" name="sub" class="btn btn-primary" style="width: 100%" data-toggle="modal" data-target="#myModal">Submit
        </button><br><br>
        <button type="reset" class="btn btn-danger" style="width: 100%">Reset
        </button>
        <?php
          $fname = $_GET['fname'];
          $password = $_GET['password'];
          $phone = $_GET['phone'];
          $age = $_GET['age'];
          $lname = $_GET['lname'];
          $email = $_GET['email'];
          $pincode = $_GET['pincode'];
          $address = $_GET['address'];
          $gen = $_GET['gender'];

          $q="select * from newuser where phone='$phone'";
          
          $result=mysqli_query($conn,$q);
          $n=mysqli_num_rows($result);

          if ($n>=1){ ?>
            <hr>

            <div class="alert alert-danger">
            <h4><strong>Warning !</strong> You have Already Registered in <strong>Sharecropper</strong></h4>
            </div>
        


         <?php }
         else{
          $query ="insert into newuser (fname, lname, password,phone,email,pincode,address,age,sex) 
          values('$fname','$lname','$password','$phone','$email','$pincode','$address','$age','$gen')";
          $data = mysqli_query($conn,$query);
          if($data){
            ?> 
            <div class="alert alert-success">
              <h4><strong>Success ! </strong> You have been Registered in <strong>Sharecropper</strong></h4>
              </div> 
          <?php
          }else{
            mysqli_error($conn);  
      
    }
  }
  ?>
      </form>
      <br><br>
    </div>
    <div class="col-sm-2 sidenav">
      <br><br>
      <form action="resume.html">
        <buttom type="submit" class="btn btn-success" style="width:100%">
          <p ><strong>HOME<span class="glyphicon glyphicon-user"></span></strong></p>
        </buttom>
      </form>
      <br><br>
      <button class="btn btn-primary" data-toggle="modal" data-target="#myModal1" style="width: 100%;">
        <p><strong>USER/ FARMER LOGIN <span class="glyphicon glyphicon-log-in"></span></strong></p>
      </button>
      <!-- The Modal -->
      <div class="modal fade" id="myModal1">
        <div class="modal-dialog">
          <div class="modal-content">
      
      <!-- Modal Header -->
      <div class="modal-header">
        <h3 class="modal-title"><span class="text text-primary"><b>User Login</b></span></h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-6">

            <form action="dash.php" method="GET" style="width: 100%" enctype="multipart/form-data">
              <div class="form-group" >
                <label>Phone Number:</label>
                <input type="text" class="form-control" placeholder="Enter email" name="id">
              </div>

              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" name="pass">
              </div>
              
              <div class="form-group form-check">
                <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember me
                </label>
              </div>
              <button type="submit" class="btn btn-primary" >Submit</button>
              <button type="reset" class="btn btn-danger">Reset</button>
            </form>
          </div>
          <div class="col-sm-6">
            <img src="u1.png" width="200" height="200" style="margin-right: 10%;">
          </div>
        </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<br><br><br>
<button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#demo" style="width: 100%;">
  <strong>LOGIN INSTRUCTION <span class="glyphicon glyphicon-envelope"></span></strong>
</button>

<div id="demo" class="collapse"><br>
  <ul>
    <li>Name Must Be in Charcter</li>
    <li>Password Must be Conatin Number and Charcters</li>
    <li>Age must be in Number</li>
  </ul>
</div>
</div>
</div>
</div>
<footer class="container-fluid text-center">
  <p>www.farmer.com</p>
</footer>

</body>
</html>
