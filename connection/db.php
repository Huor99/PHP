<!-- <?php
$con = mysqli_connect("localhost","root","","hotel") or die(mysql_error());

?> -->
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db = "test_db";
$conn = new mysqli($servername, $username, $password, $db);
if($conn->connect_error){
  die("Conntion Fail". $conn->connect_error);
}