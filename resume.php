<!DOCTYPE html>
<html lang="en-US">
<head>
  <title>Sharecropper</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>

  
  a {
  opacity: 1;
  filter: alpha(opacity=100); }

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
        <li class="active"><a href="#">Home</a></li>
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
      <h4 class="well well-sm" style=""><span class="text text-danger">Weather Report</span></h4>
        <a href="https://www.windy.com/?28.650,77.237,5">
          <img src="m1.gif" width="180" height="120" class="rounded-circle">
        </a>
        <br>
        <br>
      <h4 class="well well-sm"><span class="text text-primary">Farmers Tools</h4>
        <a href="https://www.youtube.com/channel/UCKWp94n8lgYapEzN8-mqZmA">
          <img src="m2.gif" width="180" height="120">
        </a>
        <br>
        <br>
      <h4 class="well well-sm"><span class="text text-info">Tips</h4>
      <a href="https://blog.khetigaadi.com/tag/blogs-on-agriculture-in-hindi/">
        <img src="m3.gif" width="180" height="120">
      </a>
    </div>

    <div class="col-sm-8 text-left"> 
      <h1>Welcome</h1>
        <p>
          The Farmers' Portal of the Department of Agriculture & Cooperation is a platform for farmers to seek any information related to agriculture. Detailed information on farmers’ insurance, agricultural storage, crops, extension activities, seeds, pesticides, farm machineries, etc. is provided. Details of fertilizers, market prices, package and practices, programmes, welfare schemes are also given. Block level details related to soil fertility, storage, insurance, training, etc. are available in an interactive map. Users can also download farm friendly handbook, scheme guidelines, etc.
        </p>
        <hr>
      <h3>
        <p class="badge badge-success" style="margin-left:1%;margin-right:1%; width: 98%;"><b><span class="badge badge-danger"> Prices</span>
        <marquee direction="left">
          <h5>
            <strong> 
              * Wheat Prices Range: 17 / Kg - 20 /Kg  &nbsp;&nbsp; *Rice Prices Range: 18 / Kg - 24 Kg &nbsp;&nbsp; * Pulse Prices Range  : 100 / Kg - 160 / Kg  &nbsp;&nbsp; *Maize Prices Range  : 11 / Kg - 16 / Kg 
            </strong>
          </h5>
        </marquee></b>
      </p></h3>

      <h3>Gallary</h3>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

          <div class="item active">
            <img src="b2.jpg" alt="Chania" width="900" height="450">
            <div class="carousel-caption">
              <h3>Crops Roppinhg</h3>
              <p>LA is always so much fun!</p>
            </div>
          </div>

          <div class="item">
            <img src="b1.jpg" alt="Chicago" width="900" height="450">
            <div class="carousel-caption">
              <h3>Chicago</h3>
              <p>Thank you, Chicago!</p>
            </div>
          </div>

          <div class="item">
            <img src="b4.jpg" alt="Chicago" width="900" height="450">
            <div class="carousel-caption">
              <h3>Chicago</h3>
              <p>Thank you, Chicago!</p>
            </div>
          </div>

          <div class="item">
            <img src="a2.jpg" alt="Chicago" width="900" height="450">
            <div class="carousel-caption">
              <h3>Chicago</h3>
              <p>Thank you, Chicago!</p>
            </div>
          </div>

          <div class="item">
            <img src="b5.jpg" alt="Chicago" width="900" height="450">
            <div class="carousel-caption">
              <h3>Chicago</h3>
              <p>Thank you, Chicago!</p>
            </div>
          </div>

          <div class="item">
            <img src="b3.jpg" alt="New York" width="900" height="450">
            <div class="carousel-caption">
              <h3>New York</h3>
              <p>We love the Big Apple!</p>
            </div>
          </div>
        </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <p>Thankyou</p>
</div>
<div class="col-sm-2 sidenav">
  <br><br>
  <form action="reg.php">

    <button type="submit" class="btn btn-danger" style="width: 100%;">
      <p>
        <strong>NEW REGISTRATION <span class="glyphicon glyphicon-user"></span>
        </strong>
      </p>
    </button>

  </form>
  <br><br>
  <button class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="width: 100%;">
    <p>
      <strong>USER/ FARMER LOGIN <span class="glyphicon glyphicon-log-in"></span>
      </strong>
    </p>
  </button>
  <br><br>
      <!-- The Modal -->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
      
      <!-- Modal Header -->
      <div class="modal-header">
        <h2 class="modal-title"><span class="text text-primary"><b>User Login</b></h2>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-6">
            <form action="resume.html#" style="width: 100%">
              <div class="form-group" >
                <label for="text">Phone Number:</label>
                <input type="text" class="form-control" placeholder="Enter email" id="email">
              </div>

              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" id="pwd">
              </div>
            
              <div class="form-group form-check">
                <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember me
                </label>
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>
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
<br><br>
<button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#demo" style="width: 100%;">
  <strong>LOGIN INSTRUCTION <span class="glyphicon glyphicon-envelope"></span>
  </strong>
</button>

<div id="demo" class="collapse">
  <ol>
    <li>Enter Your Phone No</li>
    <li>Enter Your Password</li>
    <li>Click Here To Login</li>
    <li>Now open User Login</li>
    <li>Enter Your Phonr No And Password</li>
    <li>Check Your Dashboard </li>
  </ol>
</div>
</div>

</div>
</div>
<footer class="container-fluid text-center">
  <p>www.farmer.com</p>
</footer>

</body>
</html>
