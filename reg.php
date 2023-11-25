<?php
$un = $_POST['t1'];
$pd = $_POST['t2'];
$em = $_POST['t3'];
$mb = $_POST['t4'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "spotify";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO registration (uname, pass, email,mobno)
  VALUES ('$un','$pd','$em','$mb')";
$sql2 = "INSERT INTO lgn (uname, pass)
  VALUES ('$un','$pd')";

if (mysqli_query($conn, $sql) and mysqli_query($conn, $sql1)) {
  header("location:login2.html");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
