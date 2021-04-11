<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>
	</title>
</head>
<body>
<div>
	 <h2 class="text text-danger"><center>Thanking You ! You Have Submit Your Information </center></h2>
	 <center><button class="btn btn-primary">Back</button></center>
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
 

              $idx = $_GET['i'];
              $farmer = $_GET['farmer'];
              $cname = $_GET['cname'];
              $wp = $_GET['wp'];
              $rp = $_GET['rp'];
              $tq = $_GET['totalqty'];
              $quality = $_GET['quality'];
              $pno = $_GET['pno'];
              $saddress = $_GET['saddress'];
              if(isset($_GET['sub']))
              { 
              $q ="insert into selliteam (fid,cropsname,rprice, wprice,totalqty,farmer,quality,phone,saddress) 
              values('$idx','$cname','$rp','$wp','$tq','$farmer','$quality','$pno','$saddress')";
             
            }
              $d = mysqli_query($conn,$q);
               

              if($d){
                
              }else{
                mysqli_error($conn);

              }
              ?>
</div>

</body>
</html>