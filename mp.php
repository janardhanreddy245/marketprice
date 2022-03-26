<html>
<style>
body{
    background-image:url('<?php echo "price3.jpg" ?>');
    background-repeat: no-repeat;
  background-size: cover;
}
k{
width:100px;
font-size:50px;
color:red;
}
k1{
    width:120px;
    font-size:80px;
    color:black;
    font-style:italic;
    flex-wrap:wrap;
    text-align:right;
    
}

</style>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";
$st=$_POST['state'];
$cp=$_POST['cropname'];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT price FROM mprice WHERE state='$st' and crop='$cp' ";
$result = $conn->query($sql);

if ($result->num_rows > 0)  {
 
  while($row = $result->fetch_assoc()) {
    echo "<k1>Price: " . $row["price"].  "</k1><br>";
  }
} 
$conn->close();
?>
</body>
</html>