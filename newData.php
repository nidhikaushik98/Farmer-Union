<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "farmer";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM selliteam";
$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {
  ?>
  <div class="form-group">
  <table class="table">
    <thead class="table-dark">
      <tr >
        <th>FarmerID</th>
        <th>Crops Name</th>
        <th>Wholesale Price</th>
        <th>Retail Price</th>
        <th>Store Addrss</th>
        <th>Framer Name</th>
        <th>Contact</th>
      </tr>
    </thead>
    <tbody>
    
  <?php
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      ?>
      <tr>
        <td><?php echo "$row[fid]" ?></td>
        <td><?php echo "$row[cropsname]" ?></td>
        <td><?php echo "$row[wprice]" ?></td>
        <td><?php echo "$row[rprice]" ?></td>
        <td><?php echo "$row[saddress]" ?></td>
        <td><?php echo "$row[farmer]" ?></td>
        <td><?php echo "$row[phone]" ?></td>
      </tr>
      <?php
    }
} else {
    echo "0 results";
}

?>
</tbody>
</table>
</div>
</body>
</html>
